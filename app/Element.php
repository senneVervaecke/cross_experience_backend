<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Element extends Model
{
    protected $with = ['fileGroup'];
    public function fileGroup(){
        return $this->hasOne('App\FileGroup', 'id', 'file_group_id');
    }
}
