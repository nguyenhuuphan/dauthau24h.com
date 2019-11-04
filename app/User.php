<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public function role()
    {
        return $this->hasOne('App\role', 'id', 'role_id');
    }

    public function bids()
    {
        return $this->hasMany('App\bids', 'author_id', 'id');
    }
    
    public function rates()
    {
        return $this->hasMany('App\Rate', 'author_id', 'id');
    }
    
    public function target_user()
    {
        return $this->belongsTo('App\Rate', 'id', 'target_id');
    }
    public function placeBids()
    {
        return $this->hasMany('App\placeBid', 'author_id', 'id');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id', 'status', 'approved_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
