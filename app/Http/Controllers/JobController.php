<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Job;
use App\DesiredSkills;
use Illuminate\Http\Request;
use App\EmploymentProvider;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    //add user
/*
 * posts jobs
 * */
    public function store(Request $request,$id){

        $job = new Job();
        $job -> employer_id = $id;
        //$job -> job_id = $job;
        $job -> job_title = $request -> title;
        $job -> location = $request -> location;
        $job -> city = $request -> city;
        $job -> job_role = $request ->role;
        $job -> company_industry = $request ->industry;
        $job -> job_description = $request ->description;
        $job -> employment_status = $request -> stat;
        $job -> employment_type = $request ->type;
        $job -> career_level = $request ->level;
        $job -> experiance = $request ->Years;
        $job -> major = $request -> major;
        $job -> degree = $request -> Degree;

        $job->save();

        $insertedId = $job->job_id;
        //dd($insertedId);
        $desiredSkills = new DesiredSkills();

        $desiredSkills -> job_id = $insertedId;
        $desiredSkills -> tag_1 = $request-> tag1;
        $desiredSkills -> tag_2 = $request-> tag2;
        $desiredSkills -> tag_3 = $request-> tag3;

        $desiredSkills->save();
        flash('New Job posted Successfully!');
        return back();
    }

    /*
     * view postings
     * */

    public function show($id)
    {
       // users = DB::table('users')->get();
        $jobs = DB::table('jobs')
            ->join('desired_skills', 'desired_skills.job_id', '=', 'jobs.job_id')
            ->where('jobs.employer_id', '=', $id)
            ->get();
/**
        dd($jobs);
        $jobs = DB::table('jobs')->where(function ($query) use ($id) {
            $query->Join('desired_skills', 'desired_skills.job_id', '=', 'jobs.job_id')

                ->where('jobs.employer_id', '=', $id)
            ->select('*');
                })->get();
        */

   //     dd($jobs);
        //dd($jobs);
/**

        $skills = DB::table('desired_skills')->where(function ($query) use ($id) {
            $query //->join('desired_skills', 'jobs.job_id', '=', 'desired_skills.job_id')
            ->select('*')
            ->where('desired_skills.ep_id', '=', $id);
        })->get();
*/
        //dd($jobs->count());

        if (($jobs->count())== 0) {
            return view('EProvider.noJobPosts');
        }
        else {
            return view('EProvider.jobPostings', compact('jobs'));
        }
    }


    public function viewToUpdate($id,$job){
        //return 'lol';
        //dd($id, $job);

        $jobs = DB::table('jobs')
            ->join('desired_skills', 'desired_skills.job_id', '=', 'jobs.job_id')
            ->where('jobs.employer_id', '=', $id)
            ->where('jobs.job_id', '=', $job)
            ->get();
        //dd($jobs);

        return view ('EProvider.updateJobPost', compact('jobs'));
    }


    public function update($id, $jobid, Request $request){

        $job = Job::find($jobid);
        $job -> employer_id = $id;
        $job -> job_id = $jobid;
        $job -> job_title = $request -> title;
        $job -> location = $request -> location;
        $job -> city = $request -> city;
        $job -> job_role = $request ->role;
        $job -> company_industry = $request ->industry;
        $job -> job_description = $request ->description;
        $job -> employment_status = $request -> stat;
        $job -> employment_type = $request ->type;
        $job -> career_level = $request ->level;
        $job -> experiance = $request ->Years;
        $job -> major = $request -> major;
        $job -> degree = $request -> Degree;
        $job->save();

        //$insertedId = $job->id;
        $desiredSkills = DesiredSkills::find($jobid);
        //$desiredSkills = new DesiredSkills();
        //dd($desiredSkills);
        $desiredSkills -> job_id = $jobid;
        $desiredSkills -> tag_1 = $request-> tag1;
        $desiredSkills -> tag_2 = $request-> tag2;
        $desiredSkills -> tag_3 = $request-> tag3;

        $desiredSkills->save();
        //redirect('jobPostings');
        flash('Job post Updated Successfully!');
        return Redirect::to('/jobPostings/EPId='.Auth::user()->id);
    }
    public function delete($job){

        $desiredSkills = DesiredSkills::find($job);
        $desiredSkills -> delete();

        $jobs = Job::find($job);
        $jobs->delete();
        flash('Job post Deleted Successfully!');
        return Redirect::to('jobPostings/EPId='.Auth::user()->id);
    }
}
