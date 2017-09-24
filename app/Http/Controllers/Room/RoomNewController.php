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

    public function save() {
        die('YAYYYY!!');
    }
}