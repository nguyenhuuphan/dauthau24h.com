<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class placeBid extends Model
{
    public function bidPackage()
    {
    	return $this->belongsTo('App\Bids', 'bid_id', 'id');
    }
    public function user()
    {
    	return $this->belongsTo('App\User', 'author_id', 'id');
    }
    protected $fillable = [
        'bid_id', 'author_id', 'bid_price'
    ];
}
