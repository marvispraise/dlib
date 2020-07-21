<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    public function tape(){
        return $this->hasMany('App\Tape');
    }
}
