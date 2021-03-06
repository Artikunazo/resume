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
            'description' => "I have 6 years of experience in web applications development. I know to build and consume APIs REST; as well as I know to work with MVC and POO paradigms.
            <br />
            I like to work in team. I am a person patient; I can learn very fast and I can adapt to any work environment."
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
