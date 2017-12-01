<?php

use Illuminate\Database\Seeder;

class CreateHobbySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\hobby::class, 3)->create();
    }
}
