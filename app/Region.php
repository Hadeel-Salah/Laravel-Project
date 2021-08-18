<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Region extends Model
{
    use SoftDeletes;


    public function countries()
    {
        return $this->hasMany(Country::class,'region_id', 'id');
    }
}
