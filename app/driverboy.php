<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class driverboy extends Model
{
    protected $fillable = ['name','phone','identity'];

    public function shiftAccount(){
     
        return $this->hasMany('App\shiftAccount');
    }
}
