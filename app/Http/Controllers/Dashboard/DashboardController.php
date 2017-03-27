<?php
/**
 * Created by PhpStorm.
 * User: eliasib
 * Date: 12/9/16
 * Time: 14:49
 */

namespace App\Http\Controllers\Dashboard;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Room;

class DashboardController extends Controller
{

    /**
     * Show the dashboard screen to the user.
     *
     * @return Response;
     */
    public function index() {
        $rooms = Auth::user()->rooms()->get()->all();
        $invitations = Auth::user()->invitations()->get()->all();
        $exams = Auth::user()->exams()->get()->all();

        return view('dashboard/dashboard', [
            'rooms' => $rooms,
            'invitations' => $invitations,
            'exams' => $exams
        ]);
    }

}