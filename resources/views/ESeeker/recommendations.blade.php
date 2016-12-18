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
@section('recommendations')
    class="active"
@endsection

@section('content')

<div class="container down-both-nav">
    <div class="col-lg-12">
        <div class="panel panel-default container-fluid">
            <div class="panel-heading row">
                <h3><i class="fa fa-check fa-2x" aria-hidden="true"></i> Recommendations</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-2">
                    </div>

                    <div class="col-lg-8">
                        <h2 id="nav-tabs">Tabs</h2>
                        <div class="bs-component">
                            <ul class="nav nav-tabs" style="margin-left: 91px;">
                                <li class="active"><a href="#received" data-toggle="tab"><h4>Recommendations I've given</h4></a></li>
                                <li><a href="#given" data-toggle="tab"><h4>Recommendations I've received</h4></a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <div class="tab-pane fade active in" id="received"><br /><br /><br /><br />
                                    <p>You have 0 recommendations</p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-2">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection