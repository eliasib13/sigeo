<?php
/**
 * Created by PhpStorm.
 * User: eliasib
 * Date: 14/9/16
 * Time: 14:23
 */

namespace App\Http\Controllers\Attempt;


use App\Http\Controllers\Controller;

class AttemptController extends Controller
{

    /**
     * Show the attempt screen to the user.
     *
     * @return Response;
     */
    public function index($attemptId, $examId, $questionId) {
        return view('attempt/attempt', ['attemptId' => $attemptId, 'examId' => $examId, 'questionId' => $questionId]);
    }
}