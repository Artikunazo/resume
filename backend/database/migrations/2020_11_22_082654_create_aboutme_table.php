<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutmeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aboutme', function (Blueprint $table) {
            $table->increments('id');
            $table->text('description');
            $table->timestamps();
        });

        DB::table('aboutme')->insert([
            'description' => "I am a web developer. I know build and consume API REST. As well as I know work with MVC and POO. So, I have around of 5 years of experience as web developer. I like to work with Kanban agile methodology.
            I am a person very patient; I like to work in team. Also, I like to work in home-office, I learn very fast and I can adapt to any work environment."
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aboutme');
    }
}
