<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    protected $fillable = ['name'];
    public function shiftAccount(){
        return $this->hasMany('App\shiftAccount');
    }
}
