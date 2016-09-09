<?php namespace App\Http\Controllers\Login;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

/**
 * Created by PhpStorm.
 * User: eliasib
 * Date: 9/9/16
 * Time: 12:53
 */

class LoginController extends Controller
{

    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        if (Session::get('isLogged')) {
            return redirect('home');
        }
    }

    /**
     * Show the login screen to the user.
     *
     * @return Response;
     */
    public function index() {
        return view('login/login');
    }

}