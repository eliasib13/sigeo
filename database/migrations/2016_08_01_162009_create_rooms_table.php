<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rooms', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('uuid')->unique();
			$table->string('name');
			$table->integer('creatorId')->unsigned();
			$table->integer('examId')->unsigned();
			$table->dateTime('openedAt');
			$table->dateTime('closedAt');
			$table->timestamps();
		});

		Schema::table('rooms', function(Blueprint $table)
		{
			$table->foreign('creatorId')->references('id')->on('users');
			$table->foreign('examId')->references('id')->on('exams');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('rooms');
	}

}
