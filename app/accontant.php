<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class accontant extends Model
{
   

      public function shiftAccount(){
        return $this->hasMany('App\shiftAccount');
    }
}
