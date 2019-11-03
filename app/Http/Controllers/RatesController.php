<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rate;

class RatesController extends Controller
{
    public function index()
    {
    	$rates = Rate::all();
    	return view('backend.rate.list_rate', compact('rates'));
    }

    public function delete($id)
    {
    	$rate = Rate::find($id);
    	$rate->delete();
    	return redirect()->route('list_rates');
    }

    public function listRate($user_id)
    {
    	$rate = Rate::where('author_id', $user_id)->get();
    	$rateby = Rate::where('target_id', $user_id)->get();
    	return view('frontend.users.rates', compact('rate', 'rateby'));
    }

    public function deleteFrontend($rate_id, $user_id)
    {
    	$rate = Rate::find($rate_id);
    	$rate->delete();
    	return redirect()->route('user_rates', $user_id);
    }

    public function createRating()
    {
        return view('frontend.KH.rate_form');
    }

    public function storeRating()
    {

    }
}
