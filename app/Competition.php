<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    protected $with = ['address', 'courses'];

    public function address(){
        return $this->hasOne('App\Address', 'id', 'address_id');
    }
    public function courses(){
        return $this->hasMany('App\Course');
    }
}
