<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a class="site_title"><h6 style="margin-left: 8px;margin-top : 13px">SPK Motor Roda Dua</h6></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="{{asset('img/avatar.png')}}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Super Admin,</span>
                <h2> {{ auth()->user()->name }} </h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br/>

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <ul class="nav side-menu">
                    <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-home"></i> Home </a></li>
                    <li><a href="{{ route('admin.merek') }}"><i class="fa fa-clipboard"></i> Merek Sepeda Motor </a></li>
                    <li><a href="{{ route('admin.jenis') }}"><i class="fa fa-columns"></i> Jenis Sepeda Motor </a></li>
                    <li><a href="{{ route('admin.pusat') }}"><i class="fa fa-users"></i> User Admin Pusat </a></li>
{{--                    <li><a><i class="fa fa-calculator"></i> SPK Weighted Product<span class="fa fa-chevron-down"></span></a>--}}
{{--                    <ul class="nav child_menu">--}}
{{--                        <li><a>Input Data<span class="fa fa-chevron-down"></span></a>--}}
{{--                        <ul class="nav child_menu">--}}
{{--                            <li class="sub_menu"><a href="{{ route('admin.nilai') }}">Nilai</a>--}}
{{--                            </li>--}}
{{--                            <li><a href="{{ route('admin.kriteria') }}">Kriteria</a>--}}
{{--                            </li>--}}
{{--                            <li><a href="{{ route('admin.alternatif') }}">Alternatif</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                        </li>--}}
{{--                        <li><a>Analisa Data<span class="fa fa-chevron-down"></span></a>--}}
{{--                        <ul class="nav child_menu">--}}
{{--                            <li><a href="{{ route('admin.bobot') }}">Bobot</a>--}}
{{--                            </li>--}}
{{--                            <li><a href="{{ route('admin.perangkingan') }}">Perangkingan</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                    </li>--}}
                    <li><a href="{{ url('superAdmin/pengunjung') }}"><i class="fa fa-list-alt"></i> Pengunjung SPK </a></li>
                </ul>
            </div>
        </div>
        <!-- /sidebar menu -->


            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                    <ul class=" navbar-right">
                        <li class="nav-item dropdown open" style="padding-left: 15px;">
                            <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true"
                               id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                <img src="{{asset('img/avatar.png')}}" alt=""> {{ auth()->user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('admin.logout')}}"><i
                                            class="fa fa-sign-out pull-right"></i> Log Out</a>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>