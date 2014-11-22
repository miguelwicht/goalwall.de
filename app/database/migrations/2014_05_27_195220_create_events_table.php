<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('events', function($table)
   		{
   		    $table->increments('id');
                            $table->string('slug')->unique();
   		    $table->string('title');
   		    $table->text('description');
                            $table->date('from');
                            $table->date('until');
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
		Schema::drop('events');
	}

}
