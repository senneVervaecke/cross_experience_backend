<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FileGroup
 * @package App
 *
 * @property string data_type
 */

class FileGroup extends Model
{
    protected $with = ['fileNames'];

    public function fileNames(){
        return $this->hasMany('App\FileName', 'file_group_id');
    }
}
