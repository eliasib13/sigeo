<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('answers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('uuid')->unique();
			$table->string('text');
			$table->boolean('correct')->nullable();
			$table->integer('questionId')->unsigned();
			$table->timestamps();
		});

		Schema::table('answers', function (Blueprint $table){
			$table->foreign('questionId')->references('id')->on('questions');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('answers');
	}

}
