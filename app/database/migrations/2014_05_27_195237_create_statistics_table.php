<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatisticsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('statistics', function($table)
   		{
   		    $table->increments('id');
   		    $table->integer('shots');
   		    $table->integer('misses');
   		    $table->integer('score');
                            $table->integer('mode_id');
                            $table->integer('event_id');
                            $table->string('player_name');
                            $table->string('player_image_path');
                            $table->dateTime('time');
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
		Schema::drop('statistics');
	}

}
