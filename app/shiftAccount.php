<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shiftAccount extends Model
{

  protected $fillable = [
    'Billoflading' , 'contractorpolicy' , 'contractor_id' ,'placeup_id',
    'placedown_id','navigation_id' , 'payload_id' , 'weight','nolon' , 
    'covenant','Office' ,'shift_id',
  
  ];

  protected $attributes = [
    'shift_id' => 2,
 ];


    public function accontant(){

        return $this->belongsTo(accontant::class);
      }
      public function carhead(){

        return $this->belongsTo(carhead::class,'carhead_id');
      }
      public function company(){

        return $this->belongsTo(company::class);
      }
      public function contractor(){

        return $this->belongsTo(contractor::class);
      }
      public function driver(){

        return $this->belongsTo(driver::class,'driver_id');
      }
      public function driverboy(){

        return $this->belongsTo(driverboy::class);
      }
      public function navigation(){

        return $this->belongsTo(navigation::class);
      }
      public function payload(){

        return $this->belongsTo(payload::class);
      }
      public function placeup(){

        return $this->belongsTo(place::class ,'placeup_id');
      }
      public function placedown(){

        return $this->belongsTo(place::class ,'placedown_id');
      }
      public function trailer(){

        return $this->belongsTo(trailer::class);
      }

      public function maintenance(){

        return $this->belongsTo(maintenance::class);
      }
      public function shift(){

        return $this->belongsTo(shift::class ,'shift_id');
      }
    
}
