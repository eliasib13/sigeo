<?php
/**
 * Created by PhpStorm.
 * User: eliasib
 * Date: 13/9/16
 * Time: 17:21
 */

namespace App\Http\Controllers\Room;



use App\Http\Controllers\Controller;

class RoomNewController extends Controller
{

    /**
     * Show the dashboard screen to the user.
     *
     * @return Response;
     */
    public function index() {
        return view('room/new');
    }
}