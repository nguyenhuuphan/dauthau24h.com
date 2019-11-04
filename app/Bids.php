<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bids extends Model
{
    public function user()
    {
    	return $this->belongsTo('App\User', 'author_id', 'id');
    }
    public function placeBids()
    {
    	return $this->hasMany('App\placeBid', 'bid_id', 'id');
    }
    protected $fillable = [
        'title', 'content', 'status', 'author_id', 'lowest_price', 'price_step'
    ];
}
