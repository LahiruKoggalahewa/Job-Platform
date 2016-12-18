@extends('layouts.main')
@section('title')
    <title>Welcome</title>
@endsection
@section('content')

    <body class="register-bg">
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a href="../" class="navbar-brand">Company Logo</a>
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div class="navbar-collapse collapse" id="navbar-main">
                    <div class="navbar-form navbar-right">
                        <label class="navbar-text-correction">
                            <span class="white-text">Already a member? </span>
                         <a class="white-text" href="{{ url('/login') }}"> &nbsp;Login here</a>
                        </label>
                    </div>
            </div>
        </div>
    </div>
    <!-- End of navbar-->

    <div class="col-md-6">
        <div class="down-nav-bar">
            <div class="container">
                <h1 class="white-text ">Welcome on SomeName</h1>
            </div>
        </div>
    </div>

    <div class="col-md-5">
        <div class="" id="loginModal" class="border-reg">
            <div class="modal-body down-nav-bar">
                <div class="well">
                    <ul class="nav nav-tabs">
                        <li class=""><a href="#login" data-toggle="tab">Employement seeker</a></li>
                        <li><a href="#ep" data-toggle="tab">Employer</a></li>
                        <li><a href="#ei" data-toggle="tab">Educational Institute</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">

                        <!-- tabbed login first element -->
                        <div class="tab-pane active in" id="login">
                            <br />

                            <form class="form-horizontal" role="form" data-toggle="validator" action="{{ url('/ES/register') }}" method="POST">
                                {{ csrf_field() }}
                                <fieldset>
                                    <legend>Welcome</legend>
                                    <div class="form-group" {{ $errors->has('email') ? ' has-error' : '' }}>
                                        <label for="inputEmail" class="col-lg-3 control-label">Email</label>
                                        <div class="col-lg-9">
                                            <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" placeholder="Email" data-error="Please enter a valid Email" required autofocus>
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="form-group" {{ $errors->has('name') ? ' has-error' : '' }}>
                                        <label for="inputFirst" class="col-lg-3 control-label">First Name</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="firstName" id="firstName" placeholder="First Name" required>
                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group" {{ $errors->has('name') ? ' has-error' : '' }}>
                                        <label for="inputLast" class="col-lg-3 control-label">Last Name</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" id="lastName"  name="lastName" placeholder="Last Name">
                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group" {{ $errors->has('password') ? ' has-error' : '' }}>
                                        <label for="inputPass" class="col-lg-3 control-label">Password</label>
                                        <div class="col-lg-9">
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password-confirm" class="col-lg-3 control-label">Retype</label>
                                        <div class="col-lg-9">
                                            <input type="password" class="form-control" id="password-confirm" name="password_confirmation" placeholder="Retype Password" data-match="#password" data-match-error="Whoops, these don't match"required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-3">
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" required /> I agree with terms and policies
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-4">
                                        </div>
                                        <div class="col-lg-4">
                                            <button type="submit" class="btn btn-info">Register >></button>
                                        </div>
                                        <div class="col-lg-4">
                                        </div>
                                    </div>
                                    </legend>
                                </fieldset>
                            </form>
                        </div>

                        <!-- tabbed second tab items -->
                        <div class="tab-pane fade" id="ep">
                            <br />
                            <form class="form-horizontal" role="form" data-toggle="validator" action="{{ url('/Ep/register') }}" method="POST">
                                {{ csrf_field() }}
                                <fieldset>
                                    <legend>Welcome</legend>
                                    <div class="form-group" {{ $errors->has('email') ? ' has-error' : '' }}>
                                        <label for="inputEmail" class="col-lg-3 control-label">Email</label>
                                        <div class="col-lg-9">
                                            <input type="email" class="form-control" id="inputEmail"  name="email" value="{{ old('email') }}" placeholder="Email" data-error="Please enter a valid Email" required>
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="form-group {{ $errors->has('firstName') ? ' has-error' : '' }}">
                                        <label for="inputPosterName" class="col-lg-3 control-label">Poster's Name</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" id="postersName" name="firstName" placeholder="Poster's Name" required>
                                            @if ($errors->has('firstName'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('firstName') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group {{ $errors->has('lastName') ? ' has-error' : '' }}">
                                        <label for="inputInstitute" class="col-lg-3 control-label">Company Name</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" id="companyName" name="lastName" placeholder="Name of the Organization" required>
                                            @if ($errors->has('lastName'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('lastName') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="inputPassEP" class="col-lg-3 control-label">Password</label>
                                        <div class="col-lg-9">
                                            <input type="password" class="form-control" id="inputPassEP" name="password" placeholder="Password" required>
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password-confirm" class="col-lg-3 control-label">Retype</label>
                                        <div class="col-lg-9">
                                            <input type="password" class="form-control" id="password-confirm" name="password_confirmation" placeholder="Retype Password" data-match="#inputPassEP" data-match-error="Whoops, these don't match"required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-3">
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" required /> I agree with terms and policies
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-4">
                                        </div>
                                        <div class="col-lg-4">
                                            <button type="submit" class="btn btn-info">Register >></button>
                                        </div>
                                        <div class="col-lg-4">
                                        </div>
                                    </div>
                                    </legend>
                                </fieldset>
                            </form>
                        </div>

                        <!-- tabbed login third element -->
                        <div class="tab-pane fade" id="ei">
                            <br />
                            <form class="form-horizontal" role="form" data-toggle="validator" action="{{ url('/Ei/register') }}" method="POST">
                                {{ csrf_field() }}
                                <fieldset>
                                    <legend>Welcome</legend>
                                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="inputEmail" class="col-lg-3 control-label">Email</label>
                                        <div class="col-lg-9">
                                            <input type="email" class="form-control" id="inputEmail" name="email" value="{{ old('email') }}" placeholder="Email" data-error="Please enter a valid Email" required>
                                            <div class="help-block with-errors"></div>
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group" {{ $errors->has('firstName') ? ' has-error' : '' }}>
                                        <label for="inputPosterName" class="col-lg-3 control-label">Poster's Name</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" id="postersName" name="firstName" placeholder="Poster's Name" required>
                                            @if ($errors->has('firstName'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('firstName') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group {{ $errors->has('lastName') ? ' has-error' : '' }}">
                                        <label for="inputInstitute" class="col-lg-3 control-label">Institute Name</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" id="instituteName" name="lastName" placeholder="Institute Name" required>
                                            @if ($errors->has('lastName'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('lastName') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="inputPassEI" class="col-lg-3 control-label">Password</label>
                                        <div class="col-lg-9">
                                            <input type="password" class="form-control" id="inputPassEI" name="password" placeholder="Password" required>
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputRetype" class="col-lg-3 control-label">Retype</label>
                                        <div class="col-lg-9">
                                            <input type="password" class="form-control" id="confirmPassEI" name="password_confirmation" placeholder="Retype Password" data-match="#inputPassEI" data-match-error="Whoops, these don't match"required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-3">
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" required/> I agree with terms and policies
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-4">
                                        </div>
                                        <div class="col-lg-4">
                                            <button type="submit" class="btn btn-info">Register >></button>
                                        </div>
                                        <div class="col-lg-4">
                                        </div>
                                    </div>
                                    </legend>
                                </fieldset>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-1">
    </div>
@endsection
