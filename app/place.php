<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class place extends Model
{
    public function shiftAccount(){
        return $this->hasMany('App\shiftAccount' ,'placeup_id');
    }

    public function shiftAccountdown(){
        return $this->hasMany('App\shiftAccount' ,'placedown_id');
    }
}
