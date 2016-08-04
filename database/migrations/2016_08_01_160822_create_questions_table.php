<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('questions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('uuid')->unique();
			$table->string('wording');
			$table->integer('examId')->unsigned();
			$table->float('score');
			$table->timestamps();
		});

		Schema::table('questions', function(Blueprint $table) {
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
		Schema::drop('questions');
	}

}
