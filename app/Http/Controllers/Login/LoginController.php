<?php namespace App\Http\Controllers\Login;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpSpec\Exception\Exception;

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
        if (Auth::check()) {
            return redirect('dashboard');
        }
    }

    /**
     * Show the login screen to the user.
     * @param $errorLogin
     *
     * @return Response;
     */
    public function index() {
        if (Auth::check()) {
            return redirect('dashboard');
        }

        $loginAction = url('doLogin');
        $errorLogin = Session::get('errorLogin', function() { return false; });

        return view('login/login',
            [
                'loginAction' => $loginAction,
                'errorLogin' => $errorLogin
            ]);
    }

    public function doLogin(Request $request) {
        try {
            if (Auth::attempt([
                'email' => $request->input('email'),
                'password' => $request->input('password')
            ])) {
                return redirect('dashboard');
            }
            else {
                return redirect('login')->with('errorLogin', true);
            }
        }
        catch (Exception $e) {
            return redirect('login')->with('errorLogin', true);
        }
    }

    public function doLogout() {
        try {
            Auth::logout();
            return redirect('login');
        }
        catch (Exception $e) {
            return redirect('login');
        }
    }

}