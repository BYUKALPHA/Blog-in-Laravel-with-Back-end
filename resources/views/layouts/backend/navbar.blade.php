<header class="main-header">
    <!-- Logo -->
    <a href="/" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>M</b>B</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>MY</b>BLOG</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <!-- <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a> -->

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">

                    <?php $currentuser = Auth::user() ?>

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{$currentuser->gravatar()}}" class="user-image" alt="{{$currentuser->name}}">
                        <span class="hidden-xs">{{$currentuser->name }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{$currentuser->gravatar()}}" class="img-circle" alt="User Image">

                            <p>
                                {{$currentuser->name}} - {{$currentuser->roles->first()->display_name}}
                                <small>Member since Nov. 2016</small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="{{ url('/edit-account') }}" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="{{url('/logout')}}" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>