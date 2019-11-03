<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class BidderController extends Controller
{
    public function __construct() {
    	$this->middleware('auth:admin');
    	$this->middleware('bidder');
    }
    public function index(){
    	return view('frontend.bidder_dashboard');
    }

    public function listBidderBids($bidder_id)
    {
    	$user = User::find($bidder_id);
    	$bids = $user->bids;
    	return view('frontend.list_bidder_bids', compact('bids', 'user'));
    }
}
