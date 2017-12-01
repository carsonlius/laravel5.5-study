<?php

use Illuminate\Database\Seeder;

class CreatePostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()    {

        factory(\App\Post::class, 5)->create();
    }
}
