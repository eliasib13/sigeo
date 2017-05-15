<?php
/**
 * Created by PhpStorm.
 * User: eliasib
 * Date: 14/9/16
 * Time: 13:50
 */

namespace App\Http\Controllers\Room;


use App\Http\Controllers\Controller;
use App\Room;

class RoomAccessController extends Controller
{

    /**
     * Show the room details screen to the user.
     *
     * @return Response;
     */
    public function index($id = 0) {
        $room = Room::where('id', $id)->first();

        return view('room/access', ['id' => $id, 'room' => $room]);
    }
}