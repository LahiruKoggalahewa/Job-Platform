<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Http\Request;
use App\Skills;
//use App\Employee;
//use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\Employees;
use Illuminate\Support\Facades\Session;
/**
 * Class ESeekerProfile
 *
 * Handles profile controls of Employment seeker
 *
 * @package App\Http\Controllers*/

class ESeekerProfileController extends Controller
{
    public function addSkills(Request $request, $id){
        $employees = new Employees;
        $employees -> es_id = $id;
        $employees -> save();

        $skills = new Skills();
        //$user = new User();

        $skills -> es_id = $id;
        $skills -> skill1 = $request-> preference1;
        $skills -> skill2 = $request-> preference2;
        $skills -> skill3 = $request-> preference3;
        $skills -> skill4 = $request-> preference4;
        $skills -> skill5 = $request-> preference5;
        //dd($skills);
        $skills ->save();
        return Redirect::to('/ESProfile/ESId='.$id,array('nick' => $id));

    }

    public function view($id)
    {
        //fetching employee list
        $eSeeker = DB::table('employees')->where(function ($query) use ($id) {
            $query-> select ('*')
                //join('desired_skills', 'jobs.job_id', '=', 'desired_skills.job_id')
                //->select('desired_skills.*');
                ->where('es_id', '=', $id);
        })->get();
        //dd($eSeeker);

        //fetching skills
        $ESSkills = DB::table('skills')->where(function ($query) use ($id) {
            $query-> select ('*')
                //join('desired_skills', 'jobs.job_id', '=', 'desired_skills.job_id')
                //->select('desired_skills.*');
                ->where('es_id', '=', $id);
        })->get();


        //fetching data from users table
        $users = DB::table('users')->where(function ($query) use ($id) {
            $query-> select ('*')
                //join('desired_skills', 'jobs.job_id', '=', 'desired_skills.job_id')
                //->select('desired_skills.*');
                ->where('id', '=', $id);
        })->get();

        //fetching data from education table
        $educations = DB::table('education')->where(function ($query) use ($id) {
            $query-> select ('*')
                //join('desired_skills', 'jobs.job_id', '=', 'desired_skills.job_id')
                //->select('desired_skills.*');
                ->where('es_id', '=', $id);
        })->get();

        return view('ESeeker.profile', compact('eSeeker','users','ESSkills','educations'));

    }

    public function viewToUpdate($id){
        //fetching employee list
        $eSeeker = DB::table('employees')->where(function ($query) use ($id) {
            $query-> select ('*')
                //join('desired_skills', 'jobs.job_id', '=', 'desired_skills.job_id')
                //->select('desired_skills.*');
                ->where('es_id', '=', $id);
        })->get();

        //fetching skills
        $ESSkills = DB::table('skills')->where(function ($query) use ($id) {
            $query-> select ('*')
                //join('desired_skills', 'jobs.job_id', '=', 'desired_skills.job_id')
                //->select('desired_skills.*');
                ->where('es_id', '=', $id);
        })->get();

        //fetching data from users table
        $users = DB::table('users')->where(function ($query) use ($id) {
            $query-> select ('*')
                //join('desired_skills', 'jobs.job_id', '=', 'desired_skills.job_id')
                //->select('desired_skills.*');
                ->where('id', '=', $id);
        })->get();
        return view('ESeeker.editProfile', compact('eSeeker','users','ESSkills'));

    }

    public function updateCoreDetails(Request $request,$id){

        $employee = Employees::find($id);
        $employee -> gender = $request -> gender;
        $employee -> mobile_number = $request -> telephone;
        $employee -> nationality = $request -> nationality;
        $employee -> country = $request -> country;
        $employee -> birth_date = $request -> birthdate;
        $employee -> marital_status = $request -> marital;
        $employee -> address_1 = $request -> address1;
        $employee -> address_2 = $request -> address2;
        $employee -> city = $request -> city;
        $employee -> district = $request -> district;
        $employee -> zip = $request -> zip;
        $employee -> web = $request -> web;
        $employee -> target = $request -> target;
        $employee -> role = $request -> Role;
        $employee -> career_level = $request -> level;
        $employee -> target_location = $request -> location;
        $employee -> objective = $request -> objective;
        $employee -> industry = $request -> Industry;
        $employee -> type = $request -> type;

        $employee->save();
        //redirect('jobPostings');
        flash('Profile Updated Successfully!');
        return Redirect::to('/ESProfile/ESId='.$id);

    }

}
