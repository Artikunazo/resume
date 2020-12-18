<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechskillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('techskills', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->integer('percent');
        });

        DB::table('techskills')->insert([
            'name' => 'PHP',
            'percent' => 40
        ]);

        DB::table('techskills')->insert([
            'name' => 'HTML5',
            'percent' => 60
        ]);

        DB::table('techskills')->insert([
            'name' => 'CSS3',
            'percent' => 60
        ]);

        DB::table('techskills')->insert([
            'name' => 'Javascript',
            'percent' => 40
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('techskills');
    }
}
