<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Rate;
use App\User;
use Auth;

class RatesController extends Controller
{

    public function listRate()
    {
    	$rate = Rate::where('author_id', Auth::user()->id)->get();
    	$rateby = Rate::where('target_id', Auth::user()->id)->get();
    	return view('frontend.users.rates', compact('rate', 'rateby'));
    }

    public function deleteFrontend($id)
    {
    	$rate = Rate::find($id);
    	$rate->delete();
    	return redirect()->route('user_rates');
    }

    public function createRating(Request $request, $id)
    {
        Rate::create([
            'target_id' => $id,
            'content' => $request->content,
            'author_id' => Auth::user()->id,
            'rating' => $request->rating,
        ]);
        return redirect()->route('user_rates');
    }
}
