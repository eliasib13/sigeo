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
        $rooms = Room::where('creatorId', '=', Auth::user()->id)->get();

        return view('dashboard/dashboard', [
            'rooms' => $rooms
        ]);
    }

}