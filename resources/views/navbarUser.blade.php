<header class="main_menu home_menu">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href=""> <img src="{{ asset('img/tr.png') }}" style="width: 100px; height: auto" alt="logo"> </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu_icon"><i class="fa fa-bars" style="color: black"></i></span>
                    </button>

                    <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link"  href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"  href="{{ route('user.cariMotor') }}">Cari Motor</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"  href="{{ route('user.dealerMotor') }}">Dealer Motor</a>
                            </li>
{{--                            <li class="nav-item dropdown">--}}
{{--                                <a class="nav-link dropdown-toggle" href="" id="navbarDropdown"--}}
{{--                                   role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                    Motor--}}
{{--                                </a>--}}
{{--                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--                                    <a class="dropdown-item" href="{{ route('user.cariMotor') }}">Cari Motor</a>--}}
{{--                                    <a class="dropdown-item" href="{{ route('user.dealerMotor') }}">Dealer Motor</a>--}}
{{--                                </div>--}}
{{--                            </li>--}}

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.infoSPK') }}">Info SPK dan Metode WP</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.spk') }}">SPK Pemilihan Sepeda Motor </a>
                            </li>



                        </ul>
                        <div class="nav-item dropdown fa-pull-right">
                            <a class="btn_1 d-none d-lg-block" href="" id="navbarDropdown"
                               role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Login
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('admin.login') }}">Super Admin</a>
                                <a class="dropdown-item" href="{{ route('pusat.login') }}">Admin Pusat</a>
                                <a class="dropdown-item" href="{{ route('dealer.login') }}">Admin Dealer</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header part end-->