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
use App\Answer;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		DB::table('answers')->delete();
		DB::table('questions')->delete();
		DB::table('exams')->delete();
		DB::table('users')->delete();

		$this->call('UserTableSeeder');
		$this->call('ExamTableSeeder');
		$this->call('QuestionTableSeeder');
		$this->call('AnswerTableSeeder');

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

/*
 █████╗ ███╗   ██╗███████╗██╗    ██╗███████╗██████╗
██╔══██╗████╗  ██║██╔════╝██║    ██║██╔════╝██╔══██╗
███████║██╔██╗ ██║███████╗██║ █╗ ██║█████╗  ██████╔╝
██╔══██║██║╚██╗██║╚════██║██║███╗██║██╔══╝  ██╔══██╗
██║  ██║██║ ╚████║███████║╚███╔███╔╝███████╗██║  ██║
╚═╝  ╚═╝╚═╝  ╚═══╝╚══════╝ ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
*/

class AnswerTableSeeder extends Seeder
{
	public function run()
	{
		$answers = [
			//   '¿Cuáles son los colores primarios?'
			[
				'uuid' => strval(Uuid::generate(4)),
				'text' => 'Blanco',
				'correct' => false,
				'questionId' => Question::where('wording', '¿Cuáles son los colores primarios?')->first()->id
			],
			[
				'uuid' => strval(Uuid::generate(4)),
				'text' => 'Azul',
				'correct' => true,
				'questionId' => Question::where('wording', '¿Cuáles son los colores primarios?')->first()->id
			],
			[
				'uuid' => strval(Uuid::generate(4)),
				'text' => 'Negro',
				'correct' => false,
				'questionId' => Question::where('wording', '¿Cuáles son los colores primarios?')->first()->id
			],
			[
				'uuid' => strval(Uuid::generate(4)),
				'text' => 'Amarillo',
				'correct' => true,
				'questionId' => Question::where('wording', '¿Cuáles son los colores primarios?')->first()->id
			],
			[
				'uuid' => strval(Uuid::generate(4)),
				'text' => 'Rojo',
				'correct' => true,
				'questionId' => Question::where('wording', '¿Cuáles son los colores primarios?')->first()->id
			],

			// 'La capital de España es Sevilla.'
			[
				'uuid' => strval(Uuid::generate(4)),
				'text' => 'Verdadero',
				'correct' => false,
				'questionId' => Question::where('wording', 'La capital de España es Sevilla.')->first()->id
			],
			[
				'uuid' => strval(Uuid::generate(4)),
				'text' => 'Falso',
				'correct' => true,
				'questionId' => Question::where('wording', 'La capital de España es Sevilla.')->first()->id
			],

			// 'Caracterísitcas de los mamíferos:'
			[
				'uuid' => strval(Uuid::generate(4)),
				'text' => 'Pelo',
				'correct' => null,
				'questionId' => Question::where('wording', 'Caracterísitcas de los mamíferos:')->first()->id
			],
			[
				'uuid' => strval(Uuid::generate(4)),
				'text' => 'Leche',
				'correct' => null,
				'questionId' => Question::where('wording', 'Caracterísitcas de los mamíferos:')->first()->id
			],
			[
				'uuid' => strval(Uuid::generate(4)),
				'text' => 'Vientre',
				'correct' => null,
				'questionId' => Question::where('wording', 'Caracterísitcas de los mamíferos:')->first()->id
			],
			[
				'uuid' => strval(Uuid::generate(4)),
				'text' => 'Madre',
				'correct' => null,
				'questionId' => Question::where('wording', 'Caracterísitcas de los mamíferos:')->first()->id
			]
		];

		foreach ($answers as $answer) {
			Answer::Create($answer);
		}
	}
}
