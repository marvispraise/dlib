<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoanRequest extends Model
{
    public function tape(){
        return $this->belongsTo('App\Tape','tape_id','unique_id');
    }


}
