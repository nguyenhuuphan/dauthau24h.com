<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin', ['except' => 'logout']);
    }

    public function authenticate(Request $request)
    {

        if (Auth::attempt(['email' => $email, 'password' => $password, 'role' => 1])) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        } elseif (Auth::attempt(['email' => $email, 'password' => $password, 'role' => 3])) {
            // Authentication passed...
            return redirect()->intended('bidder');
        } else {
            return redirect()->intended('/');
        }
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }
}
