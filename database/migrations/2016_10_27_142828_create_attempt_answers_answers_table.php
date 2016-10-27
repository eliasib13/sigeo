<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttemptAnswersAnswersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('attempt_answers_answers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('attempt_id')->unsigned();
			$table->integer('answer_id')->unsigned();
			$table->timestamps();
		});

		Schema::table('attempt_answers_answers', function(Blueprint $table)
		{
			$table->foreign('attempt_id')->references('id')->on('attempt_answers');
			$table->foreign('answer_id')->references('id')->on('answers');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('attempt_answers_answers');
	}

}
