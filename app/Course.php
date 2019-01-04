<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $with = ['elements'];
    public function elements(){
        return $this->hasMany('App\Element');
    }
}
