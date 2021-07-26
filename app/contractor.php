<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contractor extends Model
{

    protected $fillable = ['name','phone'];
    public function shiftAccount(){
        return $this->hasMany('App\shiftAccount');
    }
}
