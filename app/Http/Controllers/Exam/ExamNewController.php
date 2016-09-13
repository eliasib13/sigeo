<?php
/**
 * Created by PhpStorm.
 * User: eliasib
 * Date: 13/9/16
 * Time: 17:58
 */

namespace App\Http\Controllers\Exam;


use App\Http\Controllers\Controller;

class ExamNewController extends Controller
{
    /**
     * Show the new exam screen to the user.
     *
     * @return Response;
     */
    public function index() {
        return view('exam/new');
    }

}