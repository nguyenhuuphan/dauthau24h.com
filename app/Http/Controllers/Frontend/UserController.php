<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Carbon;
use Illuminate\Support\Facades\Hash;
use Auth;

class UserController extends Controller
{

    public function index()
    {
        return view('frontend.users.dashboard');
    }

    public function editProfile()
    {
        $user = User::find(Auth::user()->id);
        return view('frontend.users.edit_user', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $newpassword = $request->get('newpassword');
        if($newpassword != '') {
            $user->password = Hash::make($newpassword);
        }
        $user->save();
        return redirect()->route('user_dashboard');
    }

}
