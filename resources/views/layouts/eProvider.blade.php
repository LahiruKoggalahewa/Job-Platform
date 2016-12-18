<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a href="../" class="navbar-brand">Company logo</a>
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
            <ul class="nav navbar-nav">
                <li @yield('workspace')>
                    <a href="ePDashboard">My Workspace</a>
                </li>
                <li @yield('jobPostings')>
                    <a href="/jobPostings/EPId={{Auth::user()->id}}">Job Postings</a>
                </li>
                <li @yield('workshopPostings')>
                    <a href="workshopPostings">Workshop Postings</a>
                </li>
                <li @yield('consultant')>
                    <a href="consultant">Consultant Works</a>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <form class="navbar-form navbar-left" role="search">

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                </form>
            </ul>

        </div>
    </div>
</div>

<!-- End of navbar-->

<!-- start second navbar-->

<div class="navbar navbar-default navbar-fixed-top second-navbar down-nav-bar">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".main-nav">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse main-nav">


            <ul class="nav navbar-nav">
                @yield('list-item-1')
                <!-- <li><a href="ePDashboard">Dashboard</a></li>-->
                <li class="divider-vertical"></li>
                @yield('list-item-2')
                <li class="divider-vertical"></li>
                @yield('list-item-3')
                <li class="divider-vertical"></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="profile.html"><i class="fa fa-user" aria-hidden="true"></i> {{Auth::user()->first_name}}</a></li>
                <li><a href="#"><i class="fa fa-bell-o" aria-hidden="true"></i><span class="badge">3</span></a></li>
                <li><a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i> Sign out</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- end second navbar-->
