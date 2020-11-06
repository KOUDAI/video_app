<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Video extends Model
{
    public function holiday()
    {
        return $this->belongsTo('App\Holiday');
    }
}
