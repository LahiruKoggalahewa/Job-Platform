<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('main');
});

Route::get('/main', function () {
    return view('main');
});





Auth::routes();



Route::post('/main', 'Auth\LoginController@login');

/**
 * Employment Seeker
 */
Route::post('/ES/register', 'ESAuthController@register');
/**
 *
 * Employment Provider
 */
Route::post('/Ep/register', 'EPAuthController@register');

/**
 *
 *
 * Education Institute
 */
Route::post('Ei/register', 'EIAuthController@register');

/**
Route::get('/details', function () {
    return view('ESeeker.details');
});
*/

Route::get('/ePProfile/epID={id}', 'EProviderProfileController@view');
//Route::post('/details', 'ESeekerProfileController@addSkills');
//Route::post('/ESDetails/addSkills', 'ESeekerProfileController@addSkills');
/**
Route::get('addPreferences/{userId}', function($userId){
    return view('ESeeker.addPreferences');
});*/

//Route::get( 'ESProfile', 'LoginController@authenticated');

/**
Route::get('ESProfile/{id}', function($id) {
    return view('ESeeker.details')->with('$id');
})->name('ESProfile');
*/

//Route::post('ES/details', 'ESeekerProfile@addSkills');
/**
Route::post('ES/details', 'ESeekerProfileController@addSkills');

/**
 * Employment Seeker
 */
//Route::post('/ES/details', 'ESAuthController@register');

//testing set to create view
Route::get('/dashboard', function () {
    return view('ESeeker.dashboard');
});

Route::get('/profile/{id}', 'ESeekerProfileController@view');


Route::get('/ESProfile', function () {
return view('ESeeker.profile');
});

Route::get('/recommendations', function () {
return view('ESeeker.recommendations');
});

Route::get('/ePDashboard', function () {
    return view('EProvider.dashboard');
});



/*********************************************
 *          Job Related Routes
 *********************************************
 */
//post job

Route::get('postjob/EPId={id}', function () {
    return view('EProvider.postJob');
});
Route::post('postjob/EPId={id}', 'JobController@store');

//view job posts

Route::get('/jobPostings/EPId={id}', 'JobController@show');

// view single job post to update

Route::get('viewToUpdate/EPId={id}/jobId={job}', 'JobController@viewToUpdate');

// update job post

Route::post('/editJob/EPId={id}/jobId={job}', 'JobController@update');

// delete job posts
Route::get('deleteJob/jobId={job}', 'JobController@delete');

/*********************************************
 *          End job related routes
 *********************************************
 */

/**
 * **********************************************
 *          ESeeker skills
 * **********************************************
 */
Route::post('addPreferences/ESId={id}', 'ESeekerProfileController@addSkills');
Route::get('addPreferences/ESId={id}', function(){
    return view('ESeeker.addPreferences');
});
/**
 * **********************************************
 *          ESeeker Profile
 * **********************************************
 */
// Changed to take ID Route::get('/ESProfile', 'ESeekerProfileController@view');
Route::get('ESId={id}/editDetails', 'ESeekerProfileController@viewToUpdate');
Route::post('ESId={id}/editDetails', 'ESeekerProfileController@updateCoreDetails');

Route::get('/ESProfile/ESId={id}', 'ESeekerProfileController@view');
/**
 *
 *
 *
 */
Route::get('/ESId={id}/addEducation', function(){
    return view ('ESeeker.addEducation');
});
Route::post('/ESId={id}/addEducation', 'ESeekerEducationController@store');

Route::get('/ESId={id}/editEducation/eduID={edu}', 'ESeekerEducationController@edit');
Route::get('/deleteEdu/eduId={edu}', 'ESeekerEducationController@delete');
Route::post('/ESId={id}/editEducation/eduID={edu}', 'ESeekerEducationController@update');



/**
 * **********************************************
 *          Find jobs
 ************************************************
 */
/**
Route::get('/findJobs/ESId={id}',function(){
return view('ESeeker.findJobs');
});
 */
Route::get('/findJobs/ESId={id}','ESeekerJobsController@view');

Route::get('/viewToUpdate/EPId={id}/jobId={job}', 'ESeekerJobsController@apply');