<?php

class DatabaseSeeder extends Seeder 
{

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		//delete all existing posts
		DB::table('posts')->delete();
		DB::table('users')->delete();

		$this->call('UsersTableSeeder');

		$this->call('PostsSeeder');
	}

}
