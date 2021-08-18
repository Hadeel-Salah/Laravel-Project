<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Country extends Model
{
    use SoftDeletes;

    public function Region(){
        return $this->belongsTo(Region::class, 'region_id');
    }
    public function Locations(){
        return $this->hasMany(Location::class, 'country_id');
    }


}