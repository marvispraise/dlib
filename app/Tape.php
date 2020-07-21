<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tape extends Model
{
    public function programs(){
        return $this->belongsTo('App\Program', 'program','unique_id');
    }
    public function library(){
        return $this->belongsTo('App\Library', 'libNo','unique_id');
    }
    public function row(){
        return $this->belongsTo('App\Row', 'rowNo','unique_id');
    }
    public function sections(){
        return $this->belongsTo('App\Section', 'section','unique_id');
    }
    public function shelf(){
        return $this->belongsTo('App\Shelf', 'shelfNo','unique_id');
    }

    public function loan(){
        return $this->hasMany('App\LoanRequest', 'unique_id','tape_id');
    }
}
