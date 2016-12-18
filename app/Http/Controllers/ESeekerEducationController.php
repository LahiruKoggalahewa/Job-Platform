<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Education;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ESeekerEducationController extends Controller
{
    public function store($id, Request $request){
        $education = new Education();
        $education -> es_id = $id;
        $education -> start_date = $request -> startDate;
        $education -> end_date = $request -> endDate;
        $education -> course_name = $request -> courseName;
        $education -> institute = $request -> institute;
        $education -> honor = $request -> honor;
        $education -> description = $request -> description;

        $education->save();
        flash('Education info updated Successfully!');
        return Redirect::to('/ESProfile/ESId='.Auth::user()->id);
    }

    public function edit($id, $edu){

        $educations = DB::table('education')
            ->join('employees', 'employees.es_id', '=', 'education.es_id')
            ->where('employees.es_id', '=', $id)
            ->where('education.id', '=', $edu)
            ->get();
        //dd($education);

        return view ('ESeeker.editEducation',compact('educations'));
    }

    public function update($edu, Request $request){

        $education = Education::find($edu);
        $education -> start_date = $request -> startDate;
        $education -> end_date = $request -> endDate;
        $education -> course_name = $request -> courseName;
        $education -> institute = $request -> institute;
        $education -> honor = $request -> honor;
        $education -> description = $request -> description;
        $education->save();
        //redirect('jobPostings');
        flash('Education info Updated Successfully!');
        return Redirect::to('/ESProfile/ESId='.Auth::user()->id);
    }


    public function delete($edu){
       // return "lol";
        $education = Education::find($edu);
        $education -> delete();

        flash('Education info Deleted Successfully!');
        return Redirect::to('/ESProfile/ESId='.Auth::user()->id);
    }
}
