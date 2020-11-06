<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Holiday extends Model
{ public function video(){
    return $this->belongsTo('App\Video');
}
}
// ->using('App\Video')