<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Carbon;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function create()
    {
    	return view('backend.users.add_user');
    }

    public function store(Request $request)
    {
    	$mytime = Carbon\Carbon::now();
    	$password = Hash::make($request->password);
    	User::create(['name' => $request->name, 'email' => $request->email, 'password' => $password, 'role_id' => $request->role_id, 'status' => 1, 'approved_at' => $mytime->toDateTimeString()]);
		return redirect()->route('list_users');
    }

    public function delete($id)
    {
    	$user = User::find($id);
        $user->delete();
		return redirect()->route('list_users');
    }

    public function edit($id)
    {
    	$user = User::find($id);
    	return view('backend.users.edit_user', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $mytime = Carbon\Carbon::now();
		$user = User::find($id);
		$user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->role_id = $request->get('role_id');
        $user->status = $request->get('status');
        if($user->status == 1){
            $user->approved_at = $mytime->toDateTimeString();
        } else {
            $user->approved_at = NULL;
        }
        $newpassword = $request->get('newpassword');
        if($newpassword != '') {
        	$user->password = Hash::make($newpassword);
        }
        $user->save();
		return redirect()->route('list_users');
    }

    public function listBids($id)
    {
    	$user = User::find($id);
    	$bids = $user->bids;
    	return view('backend.users.list_bids', compact('bids', 'user'));
    }

    public function editProfile($id)
    {
        $user = User::find($id);
        return view('frontend.users.edit_user', compact('user'));
    }

    public function updateProfile(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $newpassword = $request->get('newpassword');
        if($newpassword != '') {
            $user->password = Hash::make($newpassword);
        }
        $user->save();
        return redirect()->route('bidder');
    }

}
