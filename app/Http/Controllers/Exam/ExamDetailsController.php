<?php
/**
 * Created by PhpStorm.
 * User: eliasib
 * Date: 13/9/16
 * Time: 17:58
 */

namespace App\Http\Controllers\Exam;


use App\Http\Controllers\Controller;

class ExamDetailsController extends Controller
{

    /**
     * Show the exam details screen to the user.
     *
     * @return Response;
     */
    public function index($id = 0) {
        return view('exam/details', ['id' => $id]);
    }
}