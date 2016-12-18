<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\EmployeeApplication;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class ESeekerJobsController extends Controller
{
    //get tags
    public function view($id){
       /** $tags = DB::table('employees')
            ->join('skills', 'skills.es_id', '=', 'employees.es_id')
            ->where('employees.es_id', '=', $id)
            ->get();
        6dd($tags);*/

        $jobs = DB::table('jobs')
        ->join('desired_skills', 'desired_skills.job_id', '=', 'jobs.job_id')
        //->join('employee_applications', 'employee_applications.job_id', '=', 'jobs.job_id')
        //->where('employees.es_id', '=', $id)
        ->get();
        dd($jobs);

        return view ('ESeeker.allJobs',compact('jobs'));
    }

    public function apply($id, $job){
        $application = new EmployeeApplication();
        $application -> job_id = $job;
        $application -> es_id = $id;

        $application->save();
        flash('Application sent Successfully!');
        return Redirect::to('/findJobs/ESId='.Auth::user()->id);
    }
}
