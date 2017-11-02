<?php
/**
 * Created by PhpStorm.
 * User: eliasib
 * Date: 13/9/16
 * Time: 17:58
 */

namespace App\Http\Controllers\Exam;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Exam;
use Webpatser\Uuid\Uuid;

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

    public function save(Request $request) {
        
        try {
            $newExam = new Exam();
            $newExam->uuid = strval(Uuid::generate(4));
            $newExam->name = $request->name;
            $newExam->creatorId = Auth::user()->id;
            $newExam->passingScore = $request->passingScore;
            
            if ($newExam->save()) {
                if (!intval($request->goBack)) {
                    return redirect()->action('Exam\ExamDetailsController@index' , [
                        'id' => strval($newExam->id)
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