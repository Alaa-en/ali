<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class driver extends Model
{
    protected $fillable = ['name','phone','identity'];

    public function shiftAccount(){
        return $this->hasMany('App\shiftAccount','driver_id');
    }

    public function shift(){
        return $this->hasMany('App\shift');
    }
}
