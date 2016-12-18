<!-- Sets header files-->
@extends('layouts.main')

<!-- Sets title -->
@section('title')
    <title>Profile</title>
@endsection

<!-- gets navbar -->
@extends('layouts.eProvider')

<!-- Sets dashboard element active -->
@section('workspace')
    class="active"
@endsection

<!-- Sets dashboard element active -->
@section('profile')
    class="active"
@endsection

@section('content')

<div class="container down-both-nav">

    <div class="col-lg-4" >
        <div class="bs-component">

            <div class="panel panel-default container-fluid" data-spy="affix" data-offset-top="0">
                <div class="panel-heading row">
                    <div class="col-md-4">
                        <img src="img/profile-small.jpg" />
                    </div>
                    <div class="col-md-8">
                        <h4>Sample user</h4>
                        <p>Sample occupation</p>
                        <h6><em>Sample location</em></h6>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="bs-component">
                        <div class="list-group">
                            <h4>Jobs</h4>
                            <a href="#" class="list-group-item active">Recommended jobs
                            </a>
                            <a href="#" class="list-group-item">My job applications
                            </a>
                            <a href="#" class="list-group-item">My job alerts
                            </a>
                            <br />
                            <h4>Events</h4>
                            <a href="#" class="list-group-item">Recommended Workshops
                            </a>
                            <a href="#" class="list-group-item">My Enrolments
                            </a>
                            <a href="#" class="list-group-item">Related Workshops
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-8 pull-right">
        <div class="panel panel-default">
            <div class="panel-body">
                Basic panel
            </div>
        </div>

        <div class="panel panel-default container-fluid">
            <div class="panel-heading row">
                Recommended CVs
            </div>
            <div class="panel-body">
                Sample job application
            </div>
        </div>

        <div class="panel panel-default container-fluid">
            <div class="panel-heading row">
                Search Results<br />
                Search Results<br />
                Search Results<br />
                Search Results<br />Search Results<br />
                Search Results<br />
                Search Results<br />
                Search Results<br />
                Search Results<br />
                Search Results<br />Search Results<br />Search Results<br />Search Results<br />
                Search Results<br />Search Results<br />
                Search Results<br />Search Results<br />Search Results<br />
                Search Results<br />Search Results<br />Search Results<br />Search Results<br />
                Search Results<br />
                Search Results<br />
                Search Results<br />
                Search Results<br />
                Search Results<br />
                Search Results<br />
            </div>
            <div class="panel-body">
            </div>
        </div>
    </div>


</div>
@endsection
