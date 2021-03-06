<?php

class PostsController extends \BaseController {

	public function __construct()
	{
		parent::__construct();
		$this->beforeFilter('auth', array('except' => array('index', 'show')));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$query = Post::with('user');
		$search = Input::get('search');

		if ($search) {
			$query->where('title', 'like', '%' . $search .'%');
			$query->orWhere('body', 'like', '%' . $search .'%');
		}

		$posts = $query->orderBy('created_at')->paginate(4);
		return View::make('posts.index')->with('posts', $posts);

	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$post = new Post;
		return $this->validateAndSave($post);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::find($id);

		if(!$post) {
			Session::flash('errorMessage', "That particular post could not be found");
			App::abort(404);
		} else {
			$body = $post->body;
			$parsedown = new Parsedown();
			$post->body = $parsedown->text($body);
		}

		return View::make('posts.show')->with('post', $post);

	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);
		return View::make('posts.edit')->with('post', $post);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::find($id);

		if(!$post) {
			Session::flash('errorMessage', "That particular post could not be found");
			App::abort(404);
		}

		return $this->validateAndSave($post);
	}



	protected function validateAndSave($post) 
	{
		// create the validator
	    $validator = Validator::make(Input::all(), Post::$rules);

	    // attempt validation
	    if ($validator->fails()) {
	    	Session::flash('errorMessage', 'Something went wrong. Please see errors below.');
	    	Log::info('Validator failed', Input::all());
	        // validation failed, redirect to the post create page with validation errors and old inputs
	        return Redirect::back()->withInput()->withErrors($validator);
	    } else {

	    	if(Input::has('image')) {
	    		$post->image = Input::file('image');
	    	} else {
	    		$post->image = Input::get(asset('public/img/sample.png'));
	    	}

			$post->title = Input::get('title');
			$post->body = Input::get('body');
			/*$post->image = Input::file('image');*/
			$post->user_id = Auth::id();
			$post->save();

			Log::info("Post successfully saved!", Input::all());

			Session::flash('successMessage', 'You created ' . Input::get('title') . ' succesfully');

			return Redirect::action('PostsController@index');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::find($id);

		if(!$post) {
            Session::flash('errorMessage', "That particular post could not be found");
            App::abort(404);
        }

		$post->delete();

		return Redirect::action('PostsController@index');
	}

}
