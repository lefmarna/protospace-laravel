<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prototype extends Model
{
    //
    public function user() {
        return $this->belongsTo('App\User');
    }
}
