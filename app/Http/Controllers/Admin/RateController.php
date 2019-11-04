<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Rate;

class RateController extends Controller
{
    public function __construct() {
        $this->middleware('auth:web');
    }
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
}
