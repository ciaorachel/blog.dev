<?php 

use Faker\Factory as Faker; 

class PostsSeeder extends Seeder 
{
	public function run()
	{
		$faker = Faker::create();

		//delete all existing posts
		Post::truncate();

		for ($i = 0; $i<20; $i++) {
			$post = new Post();
			$post->title = $faker->catchphrase;
			$post->body = $faker->bs;
			$post->save();
		}
	}

}


?>