<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carhead extends Model
{
    public function shiftAccount(){
        return $this->hasMany('App\shiftAccount','carhead_id');
    }

    public function shift(){
        return $this->hasMany('App\shift');
    }
}
