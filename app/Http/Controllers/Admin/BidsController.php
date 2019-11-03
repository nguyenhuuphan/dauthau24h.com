<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bids;

class BidsController extends Controller
{
    public function __construct() {
    	$this->middleware('auth:admin');
    	$this->middleware('admin');
    }
    
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
}
