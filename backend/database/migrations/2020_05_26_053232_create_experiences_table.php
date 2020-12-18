<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->string('position');
            $table->text('activities')->nullable();
            $table->string('date_start');
            $table->string('date_exit')->nullable();
        });

        DB::table('experiences')->insert([
            'company' => 'Gameloft',
            'position' => 'Ecommerce Web Developer',
            'activities' => '<ul>
                    <li>Websites maintenance for distribution and sales videogames using PHP.</li>
                </ul>',
            'date_start' => 'from April, 2019 ',
            'date_exit' => 'to December, 2020'
        ]);

        DB::table('experiences')->insert([
            'company' => 'Delta Developers',
            'position' => 'Developer Junior',
            'activities' => '<ul>
                    <li>Websites management, develop and maintenance, using HTML5, CSS3, Javascript + jQuery, PHP, Wordpress techologies.</li>
                    <li>Updating the web sites through FTP</li>
                </ul>',
            'date_start' => 'from April, 2014 ',
            'date_exit' => ' to March, 2019'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('experiences');
    }
}
