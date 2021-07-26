<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class navigation extends Model
{
    public function shiftAccount(){
        return $this->hasMany('App\shiftAccount');
    }
}
