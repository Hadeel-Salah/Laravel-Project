<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobHistory extends Model
{
    //
    use SoftDeletes;


    public function Employee(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function Department(){
        return $this->belongsTo(Department::class,'department_id');
    }

    public function Job(){
        return $this->hasMany(Job::class,'job_id');
    }
}
