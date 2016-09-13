<?php
/**
 * Created by PhpStorm.
 * User: eliasib
 * Date: 13/9/16
 * Time: 13:48
 */

namespace App\Http\Controllers\Room;


use App\Http\Controllers\Controller;

class RoomDetailsController extends Controller
{

    /**
     * Show the dashboard screen to the user.
     *
     * @return Response;
     */
    public function index($id = 0) {
        return view('room/details', ['id' => $id]);
    }
}