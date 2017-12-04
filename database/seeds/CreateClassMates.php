<?php

use Illuminate\Database\Seeder;

class CreateClassMates extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\ClassMate::class, 1)->create();
    }
}
