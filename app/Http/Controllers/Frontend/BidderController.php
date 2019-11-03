<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use App\Bids;

class BidderController extends Controller
{
    public function index(){
    	return view('frontend.bidder.bidder_dashboard');
    }

    public function listBidderBids()
    {
    	$user = User::find(Auth::user()->id);
    	$bids = $user->bids;
    	return view('frontend.bidder.list_bidder_bids', compact('bids', 'user'));
    }

    public function create()
    {
        return view('frontend.bidder.create_bid');
    }

    public function store(Request $request)
    {
        Bids::create(['title' => $request->title, 'content' => $request->content, 'lowest_price' => $request->lowestPrice, 'price_step' => $request->priceStep, 'status' => 0, 'author_id' => Auth::user()->id]);
        return redirect()->route('list_bidder_bids');
    }
    public function detail($id)
    {
        $bid = Bids::find($id);
        $user = User::find(Auth::user()->id);
        return view('frontend.bidder.detail', compact('bid', 'user'));
    }

    public function edit($id)
    {
        $bid = Bids::find($id);
        return view('frontend.bidder.edit', compact('bid'));
    }

    public function update(Request $request, $id)
    {
        $bid = Bids::find($id);
        $bid->title = $request->get('title');
        $bid->content = $request->get('content');
        $bid->lowest_price = $request->get('lowestPrice');
        $bid->price_step = $request->get('priceStep');
        $bid->status = 0;
        $bid->save();
        return redirect()->route('list_bidder_bids');
    }

    public function delete($id)
    {
        $bid = Bids::find($id);
        $bid->delete();
        return redirect()->route('list_bidder_bids');
    }

}
