<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\placeBid;
use Auth;
use Redirect;

class BidController extends Controller
{
	public function create()
	{

	}

    public function store(Request $request, $bid_id)
    {
    	placeBid::create([
    		'bid_id' => $bid_id,
    		'author_id' => Auth::user()->id,
    		'bid_price' => $request->bidPrice,
    	]);
    	return Redirect::back();
    	// ->withErrors(['msg', 'The Message'])
    }
}
