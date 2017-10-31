<?php
/**
 * Created by PhpStorm.
 * User: eliasib
 * Date: 13/9/16
 * Time: 13:48
 */

namespace App\Http\Controllers\Room;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Room;

class RoomDetailsController extends Controller
{

    /**
     * Show the room details screen to the user.
     *
     * @return Response;
     */
    public function index($id = 0) {
        $room = Room::where('id', $id)->first();
        $exams = Auth::user()->exams()->get()->all();

        return view('room/details', [
            'id' => $id, 
            'room' => $room, 
            'exams' => $exams
        ]);
    }

    public function save($id, Request $request) {
        
        try {
            $currentRoom = Room::find(intval($request->id));
            $currentRoom->name = $request->name;
            if (intval($request->examId) > 0) {
                $currentRoom->examId = $request->examId;
            }
            $currentRoom->openedAt = new \DateTime($request->openedAt);
            $currentRoom->closedAt = new \DateTime($request->closedAt);
            
            if ($currentRoom->save()) {
                if (!intval($request->goBack)) {
                    return redirect()->action('Room\RoomDetailsController@index' , [
                        'id' => strval($currentRoom->id)
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