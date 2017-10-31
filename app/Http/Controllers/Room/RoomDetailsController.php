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
}