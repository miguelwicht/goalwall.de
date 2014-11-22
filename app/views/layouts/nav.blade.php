<header class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
            <button type="button"class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Interactive Goal Wall</a>
        </div>
        <!-- Everything you want hidden at 940px or less, place within here -->
        <div class="collapse navbar-collapse" role="navigation">
            <ul class="nav navbar-nav">
                <li{{ Request::is('/*') ? ' class="active"' : '' }}><?php echo link_to('/', 'Home', $attributes = array(), $secure = null); ?></li>
                <li{{ Request::is('events*') ? ' class="active"' : '' }}><?php echo link_to('events', 'Events', $attributes = array(), $secure = null); ?></li>
            </ul>
{{--
            <ul class="nav navbar-nav navbar-right">
                @if (!Auth::user())
                    <li>{{ HTML::linkAction('SessionsController@create', 'Login') }}</li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->username }} <b class="caret"></b></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><?php echo link_to_route('logout', 'Log out'); ?></li>
                        </ul>
                    </li>
                @endif
            </ul>
--}}
            <!-- .nav, .navbar-search, .navbar-form, etc -->
        </div>

    </div>
</header>