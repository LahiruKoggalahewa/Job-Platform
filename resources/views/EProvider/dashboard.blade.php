<!-- Sets header files-->
@extends('layouts.main')

<!-- Sets title -->
@section('title')
    <title>Dashboard</title>
@endsection

<!-- gets navbar -->
@extends('layouts.eProvider')

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

    <div class="col-lg-4">
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


    <div class="col-lg-8">
        <div class="panel panel-default container-fluid">
            <div class="panel-heading row">
                Quick CV Search
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <div class="form-group col-md-10">
                        <input type="text" class="form-control" id="inputDefault" placeholder="-- Applicant's Name --">
                    </div>
                    <div class="col-md-1">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <div class="form-group col-md-5">
                        <input type="text" class="form-control" id="inputDefault" placeholder="-- Keywords --">
                    </div>
                    <div class="form-group col-md-5">
                        <input type="text" class="form-control" id="inputDefault" placeholder="-- Tag --">
                    </div>
                    <div class="col-md-1">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <div class="form-group col-md-5">
                        <label class="control-label" for="inputDefault">Minimum qualification</label>
                        <select class="form-control" id="sel1">
                            <option>No preference</option>
                            <option>Non-degree holder</option>
                            <option>Bachelor's Degree holder</option>
                            <option>Master's Degree holder</option>
                            <option>Doctorate holder</option>
                        </select>
                    </div>
                    <div class="form-group col-md-5">
                        <label class="control-label" for="inputDefault">Years of experiance</label>
                        <input type="Number" class="form-control" id="inputDefault" value="0">
                    </div>
                    <div class="col-md-1">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <div class="form-group col-md-10">
                        <label class="control-label" for="inputDefault">Employer location</label>
                        <select class="form-control" id="sel1">
                            <option>Any location</option>
                            <option>Ampara</option>
                            <option>Anuradhapura</option>
                            <option>Badulla</option>
                            <option>Batticaloa</option>
                            <option>Colombo</option>
                            <option>Galle</option>
                            <option>Gampaha</option>
                            <option>Hambantota</option>
                            <option>Jaffna</option>
                            <option>Kalutara</option>
                            <option>Kandy</option>
                            <option>Kegalle</option>
                            <option>Kilinochchi</option>
                            <option>Kurunegala</option>
                            <option>Mannar</option>
                            <option>Matale</option>
                            <option>Matara</option>
                            <option>Monaragala</option>
                            <option>Mulativu</option>
                            <option>Nuwara Eliya</option>
                            <option>Polonnaruwa</option>
                            <option>Puttalam</option>
                            <option>Rathnapura</option>
                            <option>Trincomalee</option>
                            <option>Vavniya</option>
                        </select>
                    </div>
                    <div class="col-md-1">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <div class="form-group col-md-5">
                        <label class="control-label" for="inputDefault">Gender</label>
                        <select class="form-control" id="sel1">
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                    <div class="form-group col-md-5">
                        <label class="control-label" for="inputDefault">Age</label>
                        <select class="form-control" id="sel1">
                            <option>Any Age</option>
                            <option>18-25</option>
                            <option>25-30</option>
                            <option>30-35</option>
                            <option>35-40</option>
                            <option>40-45</option>
                            <option>45-50</option>
                            <option>50-55</option>
                            <option>55-60</option>
                        </select>
                    </div>
                    <div class="col-md-1">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <div class="form-group col-md-5">
                        <label class="control-label" for="inputDefault">Gender</label>
                        <select class="form-control" id="sel1">
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                    <div class="form-group col-md-5 btn-correction">
                        <a href="#" class="btn btn-info">Submit</a>
                    </div>
                    <div class="col-md-1">
                    </div>
                </div>


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
                Search Results
            </div>
            <div class="panel-body">
            </div>
        </div>
    </div>

</div>
@endsection
