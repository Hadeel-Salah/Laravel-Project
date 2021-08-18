<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable,SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function Department(){
        return $this->belongsTo(Department::class,'department_id');
    }

    public function DepartmentManager(){
        return $this->hasOne(Department::class,'manager_id');
    }

    public function Job(){
        return $this->belongsTo(Job::class,'job_id');
    }

    public function JobHistory(){
        return $this->hasMany(JobHistory::class,'user_id','id');
    }
}
