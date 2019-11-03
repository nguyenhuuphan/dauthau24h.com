<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    public function author()
    {
    	return $this->belongsTo('App\User', 'author_id', 'id');
    }

    public function target()
    {
    	return $this->hasOne('App\User', 'id', 'target_id');
    }
}
