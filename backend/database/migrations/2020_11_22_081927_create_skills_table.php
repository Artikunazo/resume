<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->increments('id');
            $table->text('description');
            $table->timestamps();
        });

        DB::table('skills')->insert([
            'description' => 'API REST',
        ]);
        DB::table('skills')->insert([
            'description' => 'CRUDs',
        ]);
        DB::table('skills')->insert([
            'description' => 'Web layouts',
        ]);
        DB::table('skills')->insert([
            'description' => 'Kanban agile methodlogy',
        ]);
        DB::table('skills')->insert([
            'description' => 'Proactive',
        ]);
        DB::table('skills')->insert([
            'description' => 'Patient',
        ]);
        DB::table('skills')->insert([
            'description' => 'Autodidact'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skills');
    }
}
