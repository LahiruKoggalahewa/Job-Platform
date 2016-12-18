<!-- Sets header files-->
@extends('layouts.main')

<!-- Sets title -->
@section('title')
    <title>Edit Profile</title>
@endsection

<!-- gets navbar -->
@extends('layouts.eSeeker')

<!-- Sets dashboard element active -->
@section('workspace')

@endsection

@section('workshops')
    class="active"
@endsection



@section('item-1')
    <li class="active"><a href="/findJobs/ESId={id}">Recommended Jobs</a></li>
@endsection

@section('item-2')
    <li ><a href="dashboard">Advanced Search</a></li>
@endsection

@section('item-3')
    <li ><a href="dashboard">Find by Company</a></li>
@endsection

@section('content')

    <div class="container down-both-nav">
        <div class="col-lg-2">
        </div>

        <div class="col-lg-8">

                <div class="panel panel-default container-fluid">
                    <div class="panel-heading row">
                        <h3> Personal Information </h3>
                    </div>
                    <div class="panel-body" id="personal">

                    </div>
        </div>


    </div>
    </div>

    <div class="col-lg-2">
    </div>
    </div>

    <script>
        $('#datepicker').datepicker({
            format: 'yyyy-mm-dd'
        });
    </script>
@endsection