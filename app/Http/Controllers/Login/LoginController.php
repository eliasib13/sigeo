<?php namespace App\Http\Controllers\Login;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\User;

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
            return redirect('dashboard');
        }
    }

    /**
     * Show the login screen to the user.
     *
     * @return Response;
     */
    public function index() {
        if (Session::get('isLogged')) {
            return redirect('dashboard');
        }

        $loginAction = url('doLogin');

        return view('login/login',
            [
                'loginAction' => $loginAction
            ]);
    }

    public function doLogin(Request $request) {
        $userDb = User::where('email', '=', $request->input('email'))->firstOrFail();

        if (Hash::check($request->input('password'), $userDb->password)) {
            Session::put('isLogged', 'true');
            return redirect('dashboard');
        }
        else {
            return redirect('login');
        }
    }

}