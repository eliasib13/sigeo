<?php
/**
 * Created by PhpStorm.
 * User: eliasib
 * Date: 14/9/16
 * Time: 12:02
 */

namespace App\Http\Controllers\Question;


use App\Http\Controllers\Controller;

class QuestionDetailsController extends Controller
{

    /**
     * Show the room details screen to the user.
     *
     * @return Response;
     */
    public function index($examId, $questionId = 0) {
        return view('question/details', ['examId' => $examId, 'questionId' => $questionId]);
    }

}