<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bids;
use App\User;

class BidsController extends Controller
{
	public function index()
	{
		$bids = Bids::all();
    	return view('backend.bid.list_bids', compact('bids'));
	}

	public function detail($id)
	{
		$bid = Bids::find($id);
		return view('backend.bid.detail', compact('bid'));
	}

	public function edit($id)
	{
		$bid = Bids::find($id);
		return view('backend.bid.edit', compact('bid'));
	}

    public function update(Request $request, $id)
    {
		$bid = Bids::find($id);
		$bid->title = $request->get('title');
		$bid->content = $request->get('content');
		$bid->lowest_price = $request->get('lowestPrice');
		$bid->price_step = $request->get('priceStep');
        $bid->status = $request->get('status');
        $bid->save();
		return redirect()->route('list_all_bids');
    }

    public function delete($id)
    {
    	$bid = Bids::find($id);
        $bid->delete();
		return redirect()->route('list_all_bids');
    }

    public function create($bidder_id)
    {
    	return view('frontend.create_bid', compact('bidder_id'));
    }

    public function store(Request $request, $bidder_id)
    {
    	Bids::create(['title' => $request->title, 'content' => $request->content, 'lowest_price' => $request->lowestPrice, 'price_step' => $request->priceStep, 'status' => 0, 'author_id' => $bidder_id]);
    	return redirect()->route('list_bidder_bids', ['bidder_id' => $bidder_id]);
    }

    public function detailFrontend($id, $bidder_id)
    {
		$bid = Bids::find($id);
		$user = User::find($bidder_id);
		return view('frontend.detail', compact('bid', 'user'));
    }

	public function editFrontend($id, $bidder_id)
	{
		$bid = Bids::find($id);
		return view('frontend.edit', compact('bid', 'bidder_id'));
	}

    public function updateFrontend(Request $request, $id, $bidder_id)
    {
		$bid = Bids::find($id);
		$bid->title = $request->get('title');
		$bid->content = $request->get('content');
		$bid->lowest_price = $request->get('lowestPrice');
		$bid->price_step = $request->get('priceStep');
        $bid->status = 0;
        $bid->save();
    	return redirect()->route('list_bidder_bids', $bidder_id);
    }

    public function deleteFrontend($id, $bidder_id)
    {
    	$bid = Bids::find($id);
        $bid->delete();
    	return redirect()->route('list_bidder_bids', $bidder_id);
    }


    public function KHlistBidsFrontend()
    {
        $bids = Bids::all();
        return view('frontend.KH.list_bids', compact('bids'));
    }

    public function KHdetailFrontend($id)
    {
        $bid = Bids::find($id);
        return view('frontend.KH.KH_detail', compact('bid'));
    }
}
