<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bids;

class BidsController extends Controller
{


    public function index()
    {
        $bids = Bids::where('status', 1)->get();
        return view('frontend.list_bids', compact('bids'));
    }

    public function detail($id)
    {
        $bid = Bids::find($id);
        $placeBids = $bid->placeBids()->orderBy('bid_price', 'desc')->get();
        return view('frontend.bid_detail', compact('bid', 'placeBids'));
    }
}
