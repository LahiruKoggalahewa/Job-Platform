<!-- Sets header files-->
@extends('layouts.main')

<!-- Sets title -->
@section('title')
    <title>Update job entry</title>
@endsection

<!-- gets navbar -->
@extends('layouts.eProvider')

<!-- Sets dashboard element active -->
@section('jobPostings')
    class="active"
@endsection

<!-- Sets dashboard element active -->
@section('list-item-1')
    <li><a href="postjob/EPId={{Auth::user()->id}}">Post a Job</a></li>
@endsection

@section('list-item-2')
    <li><a href="/jobPostings/EPId={{Auth::user()->id}}">Job Postings</a></li>
@endsection
@section('list-item-3')
    <li class="active"><a>Update Job Post</a></li>
@endsection


@section('content')

    <div class="container down-both-nav">

        <div class="col-md-2">
        </div>
         <div class="col-md-8">
             @include('flash::message')
             <div class="bs-component">
                 <div class="alert alert-dismissible alert-warning">
                     <button type="button" class="close" data-dismiss="alert">&times;</button>
                     <h2><i class="fa fa-frown-o fa-3x" aria-hidden="true"></i> Whoops!</h2>
                     <p>Looks like you haven't posted anything here. Start connecting with people by posting a vacancy in your organization.</p>
                     <br />
                     <div class="row container">
                         <a href="{{'/postjob/EPId='.Auth::user()->id}}" class="btn btn-info">Post a New Vacancy</a>
                         <a href="" class="btn btn-primary">View Organization profile</a>
                     </div>
                 </div>
             </div>
        </div>
    <div class="col-md-2">
    </div>
    </div>
@endsection