<?php
/**
 * Created by PhpStorm.
 * User: eliasib
 * Date: 12/9/16
 * Time: 14:49
 */

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Room;

class restController extends Controller
{
    public function login(Request $request) {
        try {
            if (Auth::attempt([
                'email' => $request->input('email'),
                'password' => $request->input('password')
            ])) {
                return "OK";
            }
            else {
                return "Access denied!";
            }
        }
        catch (Exception $e) {
            return "Error";
        }
    }

    /**
     * Show the dashboard screen to the user.
     *
     * @return Response;
     */
    public function findUser(Request $request) {
        if ($request->searchTerm == null) {
            return [];
        }

        $searchTerm = '%' . $request->searchTerm . '%';
        return User::where('name', 'LIKE', $searchTerm)
                   ->orWhere('email', 'LIKE', $searchTerm)
                   ->get(['id', 'name', 'email']);
    }

    public function inviteUserToRoom($roomId, $userId) {
        $room = Room::find(intval($roomId));
        $userId = intval($userId);

        if (sizeof($room->invited()->where('users.id', '=', $userId)->get()) == 0) {
            $room->invited()->attach($userId);
            return User::get(['id', 'name', 'email'])->find($userId);
        }
    }

    public function uninviteUserToRoom($roomId, $userId) {
        $room = Room::find(intval($roomId));
        $userId = intval($userId);

        if (sizeof($room->invited()->where('users.id', '=', $userId)->get()) > 0) {
            $room->invited()->detach($userId);
            return User::get(['id', 'name', 'email'])->find($userId);
        }
    }
}