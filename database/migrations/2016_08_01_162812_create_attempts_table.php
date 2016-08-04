<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttemptsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('attempts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('uuid')->unique();
			$table->integer('examId')->unsigned();
			$table->integer('userId')->unsigned();
			$table->dateTime('startedAt');
			$table->dateTime('finishedAt');
			$table->float('score');
			$table->timestamps();
		});

		Schema::table('attempts', function(Blueprint $table){
			$table->foreign('examId')->references('id')->on('exams');
			$table->foreign('userId')->references('id')->on('users');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('attempts');
	}

}
