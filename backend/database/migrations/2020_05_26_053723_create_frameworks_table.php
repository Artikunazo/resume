<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrameworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frameworks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_tech');
            $table->string('name');
            $table->integer('percent');
        });

        Schema::table('frameworks', function(Blueprint $table){
            $table->foreign('id_tech')->references('id')->on('techskills');
        });

        DB::table('frameworks')->insert([
            'id_tech' => 1,
            'name' => 'Laravel',
            'percent' => '15'
        ]);

        DB::table('frameworks')->insert([
            'id_tech' => 1,
            'name' => 'FatFree',
            'percent' => '50'
        ]);

        DB::table('frameworks')->insert([
            'id_tech' => 3,
            'name' => 'Bootstrap',
            'percent' => '60'
        ]);

        DB::table('frameworks')->insert([
            'id_tech' => 3,
            'name' => 'Bulma',
            'percent' => '15'
        ]);

        DB::table('frameworks')->insert([
            'id_tech' => 4,
            'name' => 'Vue',
            'percent' => '25'
        ]);
        
        DB::table('frameworks')->insert([
            'id_tech' => 4,
            'name' => 'Angular',
            'percent' => '15'
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('frameworks');
    }
}
