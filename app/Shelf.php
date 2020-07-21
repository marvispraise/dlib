<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shelf extends Model
{
    public function tape(){
        return $this->hasMany('App\Tape');
    }
}
