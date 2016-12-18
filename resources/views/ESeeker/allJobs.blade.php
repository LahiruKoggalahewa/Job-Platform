<!-- Sets header files-->
@extends('layouts.main')

<!-- Sets title -->
@section('title')
    <title>VIew all Jobs</title>
@endsection

<!-- gets navbar -->
@extends('layouts.eSeeker')

<!-- Sets dashboard element active -->
@section('workspace')

@endsection

@section('findJobs')
    class="active"
@endsection



@section('item-1')
    <li><a href="/findJobs/ESId={id}">Recommended Jobs</a></li>
@endsection

@section('item-2')
    <li ><a href="dashboard">Advanced Search</a></li>
@endsection

@section('item-3')
    <li ><a href="dashboard">Find by Company</a></li>
@endsection

@section('item-4')
    <li class="active"><a href="dashboard">All vacancies</a></li>
@endsection

@section('content')
    <style>
        .column { float: left; }
        .size-1of2 { width: 100%; width: 530px; margin-right: 20px; margin-left: 20px;}

        #grid[data-columns]::before {
            content: '2 .column.size-1of2';
        }

        /* These are the classes that are going to be applied: */
        .column { float: left; }
       /* .size-1of3 { width: 80%; }*/
    </style>
    <div class="container down-both-nav">
    @include('flash::message')


      <!--   <div class="col-lg-2">
        </div>
s
-->      @foreach($jobs as $job)
        <div id="grid" data-columns>

            <div class="column size-1of2">
                <div class=" panel panel-default">
                    <div class="panel-heading">
                        <strong>{{$job -> job_title}}</strong> at {{$job -> location}} - {{$job -> city}} <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                        {{$job -> job_role}}

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
                        <div class="bs-component pull-right" style="margin-bottom: 0px;">
                            <span class="label label-info">sdcsdc</span>
                        </div>
                        <a href="/viewToUpdate/EPId={{Auth::user()->id}}/jobId={{$job->job_id}}" class="btn btn-success">Send Application</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach


    </div>
    </div>

    <!--
    <div class="col-lg-2">
    </div>
    -->
    </div>

    <script>
        $('#datepicker').datepicker({
            format: 'yyyy-mm-dd'
        });
    </script>
@endsection