<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shift extends Model
{

  protected $fillable = ['shiftNumber' , 'carhead_id' , 'trailer_id' ,'driver_id'];


    public function driver(){

        return $this->belongsTo(driver::class,);
      }

      public function carhead(){

        return $this->belongsTo(carhead::class);
      }
      

      public function trailer(){

        return $this->belongsTo(trailer::class);
      }
      
      public function maintenance(){

        return $this->hasMany('App\maintenance','shiftNumber_id');
      }

      public function shiftAccount(){
        return $this->hasMany('App\shiftAccount');
    }
}
