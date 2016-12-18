<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    /**
    public function employer(){
        return $this->belongsTo(EmploymentProvider::class);
    }*/
    protected $primaryKey = 'job_id';
    public function getJobId(){
        return $this -> job_id;
    }
}
