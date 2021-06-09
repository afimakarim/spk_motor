
    <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a  class="site_title"><h6 style="margin-left: 8px;margin-top : 13px">SPK Motor Roda Dua</h6></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="{{ asset("storage/" . auth()->user()->gambar) }}" class="img-circle profile_img">
            </div>
            <div class="profile_info">
            <span>Dealer,</span>
            <h2> {{ auth()->user()->name }} </h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
            <ul class="nav side-menu">
{{--                <li><a href="{{ route('dealer.dashboard') }}"><i class="fa fa-home"></i> Home </a></li>--}}
                <li><a href="{{ route('dealer.profile') }}"><i class="fa fa-user"></i> Profile Dealer </a></li>
                <li><a href="{{ route('dealer.promo') }}"><i class="fa fa-shopping-bag"></i> Promo Dealer </a></li>
                <li><a href="{{ route('dealer.komentar') }}"><i class="fa fa-comment"></i> Kelola Komentar </a></li>
{{--                <li><a href="{{ route('dealer.rangking') }}"><i class="fa fa-list-alt"></i> Rangking Alternatif </a></li>--}}

                <!-- <li><a><i class="fa fa-calculator"></i> SPK Weighted Product<span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a>Input Data<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                        <li><a href="{{ url('nilaiAdmin') }}">Nilai</a>
                        </li>
                        <li><a href="{{ url('kriteriaAdmin') }}">Kriteria</a>
                        </li>
                        <li><a href="{{ url('alternatifAdmin') }}">Alternatif</a>
                        </li>
                        </ul>
                    </li>
                    <li><a>Analisa Data<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                        <li><a href="{{ url('bobotAdmin') }}">Bobot</a>
                        </li>
                        <li><a href="{{ url('perangkinganAdmin') }}">Perangkingan</a>
                        </li>
                        </ul>
                    </li>
                </ul>
                </li>   -->
                <!-- <li><a href="{{ url('pengunjungAdmin') }}"><i class="fa fa-list-alt"></i> Pengunjung SPK </a></li> -->
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
                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset("storage/" . auth()->user()->gambar) }}" > {{ auth()->user()->name }}
                </a>
                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="{{route('dealer.logout')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                </div>
                </li>
            </ul>
            </nav>
        </div>
    </div>
