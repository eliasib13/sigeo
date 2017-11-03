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

class restController extends Controller
{

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

}