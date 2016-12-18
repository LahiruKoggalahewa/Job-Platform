<!-- Sets header files-->
@extends('layouts.main')

<!-- Sets title -->
@section('title')
    <title>Job Postings</title>
@endsection

<!-- gets navbar -->
@extends('layouts.eProvider')

<!-- Sets dashboard element active -->
@section('jobPostings')
    class="active"
@endsection

<!-- Sets dashboard element active -->
@section('list-item-1')
    <li class=""><a href="postjob/EPId={{Auth::user()->id}}">Post a Job</a></li>
@endsection

@section('list-item-2')
    <li  class="active"><a href="/jobPostings/EPId={{Auth::user()->id}}" >Job Postings</a></li>
@endsection


@section('content')
 <div class="container down-both-nav">
    <div class="col-md-2">
    </div>

     <div class="col-md-8">
         @include('flash::message')
         <h3>Posted Jobs</h3>
              @foreach($jobs as $job)
                    <div class=" panel panel-default">
                        <div class="panel-heading">
                            <strong>{{$job -> job_title}}</strong> at {{$job -> location}} - {{$job -> city}} <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                            {{$job -> job_role}}
                            <div class="bs-component pull-right" style="margin-bottom: 0px;">
                                <span class="label label-info">{{$job -> tag_1}}</span>
                                <span class="label label-info">{{$job -> tag_2}}</span>
                                <span class="label label-info">{{$job -> tag_3}}</span>
                            </div>
                        </div>

                        <div class="panel-body">
                            <ul>
                                <li><strong>Company Industry: </strong> {{$job->company_industry}}</li>
                                <li><strong>Job description: </strong> {{$job->job_description}}</li>
                                <li><strong>Employment Status: </strong> {{$job->employment_status}} </li>
                                <li><strong>Employment Type: </strong> {{$job->employment_type}} </li>
                            <hr />
                                <li><strong>Career Level: </strong> {{$job->career_level}}</li>
                                <li><strong>Experiance: </strong>Minimum of {{$job->experiance}} Years</li>
                                <li><strong>Major in: </strong> {{$job->major}} </li>
                                <li><strong>Qualification: </strong> Minimum of {{$job->degree}} </li>
                            </ul>
                        </div>
                        <div class="panel-footer">
                            <a href="/viewToUpdate/EPId={{Auth::user()->id}}/jobId={{$job->job_id}}" class="btn btn-warning">Edit</a>
                            <a class="btn btn-danger deletebtn">Delete</a>
                        </div>
                    </div>
                @endforeach
        </div>
     </div>

     <div class="col-md-2">
     </div>
</div>

 <script>
     $(".deletebtn").on('click', function () {
         swal({
             title: 'Are you sure?',
             text: "You won't be able to revert this!",
             type: 'warning',
             showCancelButton: true,
             confirmButtonColor: '#ba2e2e',
             cancelButtonColor: '#6dba2e',
             confirmButtonText: 'Yes, delete it!'
         }).then(function () {
             window.location.replace("/deleteJob/jobId={{$job->job_id}}");
         })
     })
 </script>
@endsection
