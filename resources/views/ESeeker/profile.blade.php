<!-- Sets header files-->
@extends('layouts.main')

<!-- Sets title -->
@section('title')
    <title>Profile</title>
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

    @foreach($eSeeker as $emlpoyee)
        @foreach($users as $user)
    <div class="col-lg-4">
        <div class="bs-component">

            <div class="panel panel-default container-fluid" data-spy="affix" data-offset-top="0">
                <div class="panel-heading row">
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-10">
                        <img src="img/profile-medium.jpg" />
                    </div>
                    <div class="col-md-1">
                    </div>
                </div>
                <div class="panel-heading row">
                    <div class="col-md-2"></div>
                    <div class="col-md-2">
                        <a href="#" class="btn btn-default" data-balloon="Edit profile picture" data-balloon-pos="down"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-md-2">
                        <a href="#" class="btn btn-default" data-balloon="Upload a profile picture" data-balloon-pos="down"><i class="fa fa-upload" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-md-2">
                        <a href="#" class="btn btn-default" data-balloon="Delete profile picture" data-balloon-pos="down"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-md-3"></div>
                </div>

                <div class="panel-body">
                    <div class="bs-component">
                        <div class="list-group">
                            <h4>Have a CV? Upload it now.</h4>
                            <label class="btn btn-info btn-file col-md-12">
                                <i class="fa fa-upload" aria-hidden="true"></i> Upload CV<input type="file" style="display: none;">
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="col-lg-8">
        @include('flash::message')
        <div class="panel panel-default container-fluid">
            <div class="panel-heading row">
                <h3><i class="fa fa-user fa-2x" aria-hidden="true"></i> Personal Information <a href="{{'/ESId='.Auth::user()->id.'/editDetails'}}" class="btn btn-default btn-xs pull-right" role="button"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a></h3>
            </div>

            <div class="row">
                <div class="bs-component">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <h4>Name: {{$user->first_name}} {{$user->last_name}}</h4>
                        </li>
                        <li class="list-group-item">
                            <h4> Birth Date: {{$emlpoyee->birth_date}}</h4>
                        </li>
                        <li class="list-group-item">
                            <h4>Gender: {{$emlpoyee->gender}}</h4>
                        </li>
                        <li class="list-group-item">
                            <h4>Nationality: {{$emlpoyee->nationality}}</h4>
                        </li>
                        <li class="list-group-item">
                            <h4> Resident Country:</h4>
                        </li>
                        <li class="list-group-item">
                            <h4>Marital Status:</h4>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="panel panel-default container-fluid">
            <div class="panel-heading row">
                <h3><i class="fa fa-connectdevelop fa-2x" aria-hidden="true"></i> Contact Information<a href="{{'/ESId='.Auth::user()->id.'/editDetails'}}" class="btn btn-default btn-xs pull-right" role="button"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a></h3>
            </div>

            <div class="row">
                <div class="bs-component">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <h4> Email: {{$user->email}}</h4>
                        </li>
                        <li class="list-group-item">
                            <h4>Telephone:</h4>
                        </li>
                        <li class="list-group-item">
                            <h4> Address (Line 1): {{$emlpoyee->address_1}}</h4>
                        </li>
                        <li class="list-group-item">
                            <h4>  Address (Line 2): {{$emlpoyee->address_2}}</h4>
                        </li>
                        <li class="list-group-item">
                            <h4>City: {{$emlpoyee->city}}</h4>
                        </li>
                        <li class="list-group-item">
                            <h4>district/Province: {{$emlpoyee->district}}</h4>
                        </li>
                        <li class="list-group-item">
                            <h4> ZIP code: {{$emlpoyee->zip}}</h4>
                        </li>
                        <li class="list-group-item">
                            <h4> Fax:</h4>
                        </li>
                        <li class="list-group-item">
                            <h4>Website: {{$emlpoyee->web}}</h4>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="panel panel-default container-fluid">
            <div class="panel-heading row">
                <h3><i class="fa fa-bullseye fa-2x" aria-hidden="true"></i> Target Job<a href="{{'/ESId='.Auth::user()->id.'/editDetails'}}" class="btn btn-default btn-xs pull-right" role="button"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a></h3>
            </div>


            <div class="row">
                <div class="bs-component">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <h4> Target Job Title: {{$emlpoyee->target}}</h4>
                       </li>
                        <li class="list-group-item">
                            <h4> Career Level: {{$emlpoyee->career_level}}</h4>
                        </li>
                        <li class="list-group-item">
                            <h4> Target Job Location: {{$emlpoyee->target_location}}</h4>
                        </li>
                        <li class="list-group-item">
                            <h4>Career Objective: {{$emlpoyee->objective}}</h4>
                        </li>
                        <li class="list-group-item">
                            <h4>Target Industry: {{$emlpoyee->industry}}</h4>
                        </li>
                        <li class="list-group-item">
                           <h4> Employment Type: {{$emlpoyee->type}}</h4>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="panel panel-default container-fluid">
            <div class="panel-heading row">
                <h3><i class="fa fa-briefcase fa-2x" aria-hidden="true"></i> Work Experiance<a href="{{'/ESId='.Auth::user()->id.'/addWork'}}" class="btn btn-default btn-xs pull-right" role="button"><i class="fa fa-plus" aria-hidden="true"></i> Add</a></h3>
            </div>

            <div class="row">
                <div class="bs-component">
                    <ul class="list-group">
                        <li class="list-group-item">
                            Target Job Title:
                        </li>
                        <li class="list-group-item">
                            Job Role:
                        </li>
                        <li class="list-group-item">
                            ACareer Level:
                        </li>
                        <li class="list-group-item">
                            Target Job Location:
                        </li>
                        <li class="list-group-item">
                            Career Objective:
                        </li>
                        <li class="list-group-item">
                            Target Industry:
                        </li>
                        <li class="list-group-item">
                            Employment Type:
                        </li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="panel panel-default container-fluid">
            <div class="panel-heading row">
                <h3><i class="fa fa-book fa-2x" aria-hidden="true"></i> Education<a href="{{'/ESId='.Auth::user()->id.'/addEducation'}}" class="btn btn-default btn-xs pull-right" role="button"><i class="fa fa-plus" aria-hidden="true"></i> Add</a></h3>
            </div>

            @foreach($educations as $education)
                <div class="row">
                    <div class="bs-component">

                        <ul class="list-group">
                            <li class="list-group-item">
                                <h4>Has a <strong>{{$education->honor}}</strong> in <strong>{{$education->course_name}}</strong> at <strong>{{$education->institute}}</strong><br />

                                    Started on : <strong>{{$education->start_date}}</strong>
                                    Completed on: <strong>{{$education->end_date}}</strong>

                                 </h4>
                                {{$education->description}}
                                <a class="btn btn-danger btn-xs pull-right deletebtn" role="button"><i class="fa fa-minus-square-o" aria-hidden="true"></i></a>
                                <a href="/ESId={{Auth::user()->id}}/editEducation/eduID={{$education->id}}" style="margin-right: 3px;" class="btn btn-warning btn-xs pull-right" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            </li>
                        </ul>
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
                                    window.location.replace("/deleteEdu/eduId={{$education->id}}");
                                })
                            })
                        </script>
                    </div>
                </div>
            @endforeach
        </div>



        <div class="panel panel-default container-fluid">
            <div class="panel-heading row">
                <h3><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i> Skills<a href="{{'/ESId='.Auth::user()->id.'/editDetails'}}" class="btn btn-default btn-xs pull-right" role="button"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a></h3>
            </div>

            <div class="row">
                <div class="bs-component">
                    <ul class="list-group">
                        @foreach($ESSkills as $skill)
                        <li class="list-group-item">
                            <div class="well">
                                <h4>{{$skill->skill1}}</h4>
                            </div>

                        </li>
                        <li class="list-group-item">
                            <div class="well">
                                <h4>{{$skill->skill2}}</h4>
                            </div>

                        </li>
                        <li class="list-group-item">
                            <div class="well">
                                <h4>{{$skill->skill3}}</h4>
                            </div>

                        </li>
                        <li class="list-group-item">
                            <div class="well">
                                <h4>{{$skill->skill4}}</h4>
                            </div>

                        </li>
                        <li class="list-group-item">
                            <div class="well">
                                <h4>{{$skill->skill5}}</h4>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
        @endforeach
    @endforeach
</div>
<script>
    $( function() {
        $( "#startDate" ).datepicker();
    } );
</script><script>
    $( function() {
        $( "#endDate" ).datepicker();
    } );
</script>
>
@endsection