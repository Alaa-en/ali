<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class maintenance extends Model
{
    


  protected $fillable = ['shiftNumber_id' , 'maintenancePlace' , 'amount' ,'date','statement'];


    


    public function shift(){

        return $this->belongsTo('App\shift','shiftNumber_id');
      }


      public function shiftAccount(){
     
        return $this->hasMany('App\shiftAccount');
    }
}
