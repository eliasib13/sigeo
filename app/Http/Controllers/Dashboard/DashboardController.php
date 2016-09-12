<?php
/**
 * Created by PhpStorm.
 * User: eliasib
 * Date: 12/9/16
 * Time: 14:49
 */

namespace App\Http\Controllers\Dashboard;


use App\Http\Controllers\Controller;

class DashboardController extends Controller
{

    /**
     * Show the dashboard screen to the user.
     *
     * @return Response;
     */
    public function index() {
        return view('dashboard/dashboard');
    }

}