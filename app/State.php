<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    //
   protected $table="states";
   protected $fillable=['state'];

   public function passengers(){
      return $this->hasMany('App\Passenger');
   }


}
