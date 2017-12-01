<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table("posts")->truncate();
        $this->call(CreateUserForTest::class);
        $this->call(CreatePostSeeder::class);
        $this->call(CreateArticlesSeeder::class);
        DB::table('posts')->increment('user_id', 5);

    }
}
