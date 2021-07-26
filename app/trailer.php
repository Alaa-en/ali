<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trailer extends Model
{
    public function shiftAccount(){
        return $this->hasMany('App\shiftAccount');
    }

    public function shift(){
        return $this->hasMany('App\shift');
    }
}
