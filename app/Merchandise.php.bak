<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merchandise extends Model
{
    function categories() {
        return $this->belongsTo('App\Category');
    }

    function units() {
        return $this->belongsTo('App\Unit');
    }
}
