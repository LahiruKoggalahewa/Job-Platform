<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EProviderProfileController extends Controller
{
    //
    public function view($id){
        //dd(Auth::user()->first_name);
        return view ('eProvider.profile');
    }
}
