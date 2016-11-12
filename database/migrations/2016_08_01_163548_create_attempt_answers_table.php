<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttemptAnswersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('attempt_answers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('uuid')->unique();
			$table->integer('questionId')->unsigned();
			$table->integer('attemptId')->unsigned();
			$table->string('text')->nullable();
			$table->timestamps();
		});

		Schema::table('attempt_answers', function(Blueprint $table) {
			$table->foreign('questionId')->references('id')->on('questions');
			$table->foreign('attemptId')->references('id')->on('attempts');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('attempt_answers');
	}

}
