<?php
/**
 * Created by PhpStorm.
 * User: eliasib
 * Date: 13/9/16
 * Time: 17:58
 */

namespace App\Http\Controllers\Exam;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Exam;

class ExamDetailsController extends Controller
{

    /**
     * Show the exam details screen to the user.
     *
     * @return Response;
     */
    public function index($id = 0) {
        $exam = Exam::where('id', $id)->first();

        return view('exam/details', ['id' => $id, 'exam' => $exam]);
    }

    public function save($id, Request $request) {
        
        try {
            $currentExam = Exam::find(intval($request->id));
            $currentExam->name = $request->name;
            $currentExam->passingScore = $request->passingScore;
            
            if ($currentExam->save()) {
                if (!intval($request->goBack)) {
                    return redirect()->action('Exam\ExamDetailsController@index' , [
                        'id' => strval($currentExam->id)
                    ]);
                } else {
                    return redirect()->action('Dashboard\DashboardController@index');
                }
            }
        }
        catch (\Exception $e) {
            die($e);
        }
    }
}