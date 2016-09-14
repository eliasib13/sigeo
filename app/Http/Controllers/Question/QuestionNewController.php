<?php
/**
 * Created by PhpStorm.
 * User: eliasib
 * Date: 14/9/16
 * Time: 12:02
 */

namespace App\Http\Controllers\Question;


use App\Http\Controllers\Controller;

class QuestionNewController extends Controller
{

    /**
     * Show the new room screen to the user.
     *
     * @return Response;
     */
    public function index($examId) {
        return view('question/new', ['examId' => $examId]);
    }
}