<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->string('school', 200);
            $table->mediumText('logo');
            $table->string('date', 100)->nullable();
            $table->mediumText('url')->nullable();
            $table->mediumText('info')->nullable();
        });

        DB::table('education')->insert([
            'title' => 'Bachelor\'s degree Information Technology Engineerings',
            'school' => 'Universidad Tecnológica Fidel Velázquez',
            'logo' => 'utfv.jpg',
            'date' => 'from 2013 to 2017',
            'url' => 'https://dragones.utfv.edu.mx/'
        ]);

        DB::table('education')->insert([
            'title' => 'Courses',
            'school' => 'Platzi',
            'logo' => 'platzi.jpg',
            'url' => 'https://platzi.com/p/Artikunazo/'
        ]);

        DB::table('education')->insert([
            'title' => 'Courses',
            'school' => 'Hacker Rank',
            'logo' => 'hackerrank.png',
            'url' => 'https://www.hackerrank.com/Artikunazo'
        ]);



        // DB::table('education')->insert([
        //     'title' => 'Curso Básico de VueJs',
        //     'school' => 'Platzi',
        //     'info' => "vuejs",
        // ]);

        // DB::table('education')->insert([
        //     'title' => 'Curso de ECMASCRIPT 6+',
        //     'school' => 'Platzi',
        //     'info' => "ecmascript6"
        // ]);
        
        // DB::table('education')->insert([
        //     'title' => 'Curso de Asincronismo con Javascript',
        //     'school' => 'Platzi',
        //     'info' => "asincronismo-con-javascript",
        // ]);

        // DB::table('education')->insert([
        //     'title' => 'Curso de Closures y Scope en JavaScript',
        //     'school' => 'Platzi',
        //     'info' => "scope-y-closures-javascript"
        // ]);

        // DB::table('education')->insert([
        //     'title' => 'Curso básico de Node.js',
        //     'school' => 'Platzi',
        //     'info' => "fundamentos-de-nodejs"
        // ]);

        // DB::table('education')->insert([
        //     'title' => 'Curso de CSS Grid Layout',
        //     'school' => 'Platzi',
        //     'info' => "css-grid-layout"
        // ]);

        // DB::table('education')->insert([
        //     'title' => 'Curso de Comunicación Efectiva',
        //     'school' => 'Platzi',
        //     'info' => "estrategias-comunicar"
        // ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('education');
    }
}
