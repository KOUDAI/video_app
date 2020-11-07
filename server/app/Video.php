<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Video extends Model
{
    public function holidays()
    {
        return $this->hasMany('App\Holiday');
    }

    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
