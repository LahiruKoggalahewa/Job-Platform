<!-- Sets header files-->
@extends('layouts.main')

<!-- Sets title -->
@section('title')
    <title>Edit Education</title>
@endsection

<!-- gets navbar -->
@extends('layouts.eSeeker')

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
        <div class="col-lg-2">
        </div>

        <div class="col-lg-8">
            <form method="POST" action="/ESId={{Auth::user()->id}}/addEducation">
                {{ csrf_field() }}
                <div class="panel panel-default container-fluid">
                    <div class="panel-heading row">
                        <h3> Personal Information </h3>
                    </div>
                    <div class="panel-body" id="personal">
                        <div class="form-group">
                            <label for="startDate">Start date:</label>
                            <input type="text" class="form-control datepicker" id="startDate" name="startDate" >
                        </div>
                        <div class="form-group">
                            <label for="datepicker">endDate:</label>
                            <input type="text" class="form-control datepicker" id="endDate" name="endDate" >
                        </div>
                        <div class="form-group">
                            <label for="institute">Institute:</label>
                            <input type="text" class="form-control" id="institute"  name="institute" required>
                        </div>

                        <div class="form-group">
                            <label for="courseName">Course Name:</label>
                            <input type="text" class="form-control" id="courseName"  name="courseName" required>
                        </div>
                        <div class="form-group">
                            <label for="honor">Highest Honor :</label>
                            <input type="text" class="form-control" id="honor"  name="honor">
                        </div>

                        <div class="form-group">
                            <label for="description">Description :</label>
                            <textarea class="form-control" id="description"  name="description"></textarea>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-info">Add/Update</button>
                </div>
            </form>
        </div>


    </div>
    </div>

    <div class="col-lg-2">
    </div>
    </div>

    <script>
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd'
        });
    </script>
@endsection