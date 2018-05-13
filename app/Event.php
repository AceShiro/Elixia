<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
    	'name','event_when','type','description','price','availability','status',
    ];

    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function payments()
    {
    	return $this->hasMany('App\Payment');
    }
}
