<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bids;

class BidsController extends Controller
{


    public function index()
    {
        $bids = Bids::all();
        return view('frontend.list_bids', compact('bids'));
    }

    public function detail($id)
    {
        $bid = Bids::find($id);
        return view('frontend.bid_detail', compact('bid'));
    }
}
