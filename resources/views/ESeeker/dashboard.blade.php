<!-- Sets header files-->
@extends('layouts.main')

<!-- Sets title -->
@section('title')
    <title>Dashboard</title>
@endsection

<!-- gets navbar -->
@extends('layouts.eSeeker')

<!-- Sets dashboard element active -->
@section('workspace')
    class="active"
@endsection

<!-- Sets dashboard element active -->
@section('dashboard')
    class="active"
@endsection

@section('content')
<div class="container down-both-nav">
    <div class="col-xs-4">
        <div class="bs-component">
            <div class="panel panel-default container-fluid" data-spy="affix" data-offset-top="0">
                <div class="panel-heading row">
                    <div class="col-xs-4">
                        <img src="img/profile-small.jpg" />
                    </div>
                    <div class="col-xs-8">
                        <h4>Sample user</h4>
                        <p>Sample occupation</p>
                        <h6><em>Sample location</em></h6>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="bs-component">
                        <div class="list-group">
                            <h4>Jobs</h4>
                            <a href="#recommendedJobs" class="list-group-item smoothScroll">Recommended jobs
                            </a>
                            <a href="#myApplications" class="list-group-item smoothScroll">My job applications
                            </a>
                            <a href="#jobAlerts" class="list-group-item smoothScroll">My job alerts
                            </a>
                            <br />
                            <h4>Events</h4>
                            <a href="#workshops" class="list-group-item smoothScroll">Recommended Workshops
                            </a>
                            <a href="#enrolments" class="list-group-item smoothScroll">My Enrolments
                            </a>
                            <a href="#relatedWorkshops" class="list-group-item smoothScroll">Related Workshops
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-8">
        <div class="panel panel-default container-fluid" id="recommendedJobs">
            <div class="panel-heading row">
                Recommended jobs
            </div>
            <div class="panel-body">
                Sample recommended job
            </div>
        </div>

        <div class="panel panel-default container-fluid" id="myApplications">
            <div class="panel-heading row">
                My job applications
            </div>
            <div class="panel-body">
                Sample job application
            </div>
        </div>

        <div class="panel panel-default container-fluid" id="jobAlerts">
            <div class="panel-heading row">
                My job alerts
            </div>
            <div class="panel-body">
                Sample my job alerts
            </div>
        </div>

        <div class="panel panel-default container-fluid" id="jobAlerts">
            <div class="panel-heading row">
                Recommended workshops
            </div>
            <div class="panel-body">
                Sample recommended workshops
            </div>
        </div>

        <div class="panel panel-default container-fluid" id="workshops">
            <div class="panel-heading row">
                Recommended workshops
            </div>
            <div class="panel-body">
                Sample recommended workshops
            </div>
        </div>

        <div class="panel panel-default container-fluid" id="enrolments">
            <div class="panel-heading row">
                My enrolments
            </div>
            <div class="panel-body">
                Sample enrolments
            </div>
        </div>

        <div class="panel panel-default container-fluid" id="relatedWorkshops">
            <div class="panel-heading row">
                Related workshops
            </div>
            <div class="panel-body">
                Sample workshops
            </div>
        </div>
    </div>
</div>
@endsection
