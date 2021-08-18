<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Job extends Model
{
    //
    use SoftDeletes;

    public function Employees()
    {
        return $this->hasMany(User::class, 'job_id', 'id');
    }
    
    public function JobHistory()
    {
        return $this->belongsTo(JobHistory::class,'job_id','id');
    }
}
