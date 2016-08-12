<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Webpatser\Uuid\Uuid;
use App\User;
use App\Exam;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		DB::table('exams')->delete();
		DB::table('users')->delete();

		$this->call('UserTableSeeder');
		$this->call('ExamTableSeeder');

	}

}

/*
██╗   ██╗███████╗███████╗██████╗
██║   ██║██╔════╝██╔════╝██╔══██╗
██║   ██║███████╗█████╗  ██████╔╝
██║   ██║╚════██║██╔══╝  ██╔══██╗
╚██████╔╝███████║███████╗██║  ██║
╚═════╝ ╚══════╝╚══════╝╚═╝  ╚═╝
*/


class UserTableSeeder extends Seeder
{
	public function run()
	{
		$users = [
			[
				'name' => 'Administrador',
				'email' => 'admin@email.com',
				'password' => Hash::make('admin'),
				'uuid' => strval(Uuid::generate(4))
			],
			[
				'name' => 'Usuario Test',
				'email' => 'usertest@email.com',
				'password' => Hash::make('test'),
				'uuid' => strval(Uuid::generate(4))
			]
		];

		foreach ($users as $user) {
			User::Create($user);
		}
	}
}

/*
███████╗██╗  ██╗ █████╗ ███╗   ███╗
██╔════╝╚██╗██╔╝██╔══██╗████╗ ████║
█████╗   ╚███╔╝ ███████║██╔████╔██║
██╔══╝   ██╔██╗ ██╔══██║██║╚██╔╝██║
███████╗██╔╝ ██╗██║  ██║██║ ╚═╝ ██║
╚══════╝╚═╝  ╚═╝╚═╝  ╚═╝╚═╝     ╚═╝
*/

class ExamTableSeeder extends Seeder
{
	public function run()
	{
		$exams = [
			[
				'uuid' => strval(Uuid::generate(4)),
				'name' => 'Examen 1 de Administrador',
				'creatorId' => User::where('email', 'admin@email.com')->first()->id,
				'passingScore' => 5
			],
			[
				'uuid' => strval(Uuid::generate(4)),
				'name' => 'Examen 2 de Administrador',
				'creatorId' => User::where('email', 'admin@email.com')->first()->id,
				'passingScore' => 7
			],
			[
				'uuid' => strval(Uuid::generate(4)),
				'name' => 'Examen 1 de Usuario Test',
				'creatorId' => User::where('email', 'usertest@email.com')->first()->id,
				'passingScore' => 4
			],
			[
				'uuid' => strval(Uuid::generate(4)),
				'name' => 'Examen 2 de Usuario Test',
				'creatorId' => User::where('email', 'usertest@email.com')->first()->id,
				'passingScore' => 6.5
			]
		];

		foreach ($exams as $exam) {
			Exam::Create($exam);
		}
	}
}
