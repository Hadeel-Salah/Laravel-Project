<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Departments extends Model
{
    //
    use SoftDeletes;

    public function Location()
    {
        return $this->belongsTo(Location::class, 'location_id');
    }

    public function Employees()
    {
        return $this->hasMany(User::class, 'department_id', 'id');

    }

    public function Manager()
    {
        return $this->belongsTo(User::class, 'manager_id');

    }

    public function JobHistory(){
        return $this->belongsTo(JobHistory::class,'department_id');
    }
}
