<?php
/**
 * Created by PhpStorm.
 * User: eliasib
 * Date: 13/9/16
 * Time: 17:21
 */

namespace App\Http\Controllers\Room;



use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Room;
use Webpatser\Uuid\Uuid;

class RoomNewController extends Controller
{

    /**
     * Show the new room screen to the user.
     *
     * @return Response;
     */
    public function index() {
        $exams = Auth::user()->exams()->get()->all();

        return view('room/new', [
            'exams' => $exams
        ]);
    }

    public function save(Request $request) {
        
        try {
            $newRoom = new Room();
            $newRoom->uuid = strval(Uuid::generate(4));
            $newRoom->name = $request->name;
            $newRoom->creatorId = Auth::user()->id;
            if (intval($request->examId) > 0) {
                $newRoom->examId = $request->examId;
            }
            $newRoom->openedAt = new \DateTime($request->openedAt);
            $newRoom->closedAt = new \DateTime($request->closedAt);
            
            if ($newRoom->save()) {
                if (!intval($request->goBack)) {
                    return redirect()->action('Room\RoomDetailsController@index' , [
                        'id' => strval($newRoom->id)
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