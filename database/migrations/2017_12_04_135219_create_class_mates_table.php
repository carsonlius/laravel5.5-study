<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassMatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_mates', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("student_id")->unsigned();
            $table->integer("user_id")->unsigned();
            $table->string("student_name");
            $table->foreign("user_id")
                ->references("id")
                ->on("users");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('class_mates');
    }
}
