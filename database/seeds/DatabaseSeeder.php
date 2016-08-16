<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Webpatser\Uuid\Uuid;

/*** Models ***/

use App\User;
use App\Exam;
use App\Question;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		DB::table('questions')->delete();
		DB::table('exams')->delete();
		DB::table('users')->delete();

		$this->call('UserTableSeeder');
		$this->call('ExamTableSeeder');
		$this->call('QuestionTableSeeder');

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

/*
 ██████╗ ██╗   ██╗███████╗███████╗████████╗██╗ ██████╗ ███╗   ██╗
██╔═══██╗██║   ██║██╔════╝██╔════╝╚══██╔══╝██║██╔═══██╗████╗  ██║
██║   ██║██║   ██║█████╗  ███████╗   ██║   ██║██║   ██║██╔██╗ ██║
██║▄▄ ██║██║   ██║██╔══╝  ╚════██║   ██║   ██║██║   ██║██║╚██╗██║
╚██████╔╝╚██████╔╝███████╗███████║   ██║   ██║╚██████╔╝██║ ╚████║
╚══▀▀═╝  ╚═════╝ ╚══════╝╚══════╝   ╚═╝   ╚═╝ ╚═════╝ ╚═╝  ╚═══╝
*/

class QuestionTableSeeder extends Seeder
{
	public function run()
	{
		$questions = [
			[
				'uuid' => strval(Uuid::generate(4)),
				'wording' => '¿Cuáles son los colores primarios?',
				'examId' => Exam::where('name', 'Examen 1 de Administrador')->first()->id
			],
			[
				'uuid' => strval(Uuid::generate(4)),
				'wording' => 'La capital de España es Sevilla.',
				'examId' => Exam::where('name', 'Examen 2 de Administrador')->first()->id
			],
			[
				'uuid' => strval(Uuid::generate(4)),
				'wording' => 'Caracterísitcas de los mamíferos:',
				'examId' => Exam::where('name', 'Examen 1 de Usuario Test')->first()->id
			]
		];

		foreach ($questions as $question) {
			Question::Create($question);
		}
	}
}
