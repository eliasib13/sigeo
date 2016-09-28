<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserRoomTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_room', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->integer('room_id')->unsigned();
			$table->timestamps();
		});

		Schema::table('user_room', function(Blueprint $table)
		{
			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('room_id')->references('id')->on('rooms');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_room');
	}

}
