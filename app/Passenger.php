<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Passenger extends Model
{
    //


    protected $table="passengers";
    protected $fillable=['pas_name','pas_last','pas_mail','pas_username','pas_phone','pas_password','state_id'];

    public function state(){
      return $this->belongsTo('App\State');
    }
    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */



}
