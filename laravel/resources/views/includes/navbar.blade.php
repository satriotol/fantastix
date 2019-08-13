<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                POS - Multi Outlets </a>
            <ul class="user-menu">
                <li class="dropdown pull-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user">
                            <use xlink:href="#stroked-male-user"></use>
                        </svg> Owner <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#"><i class="icono-power"
                                    style="color: #30a5ff;"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="user-menu">
                <li class="dropdown pull-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{asset('img/english_flag.png')}}"> </a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="#" style="text-decoration: none; color: #00598c;">
                                <img src="{{asset('img/english_flag.png')}}">
                                &nbsp;&nbsp;English
                            </a>
                        </li>
                        <li>
                            <a href="#" style="text-decoration: none; color: #00598c;">
                                <img src="{{ asset('img/spanish_flag.png') }}">
                                &nbsp;&nbsp;Spanish
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div><!-- /.container-fluid -->

</nav>
