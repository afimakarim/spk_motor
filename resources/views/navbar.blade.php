<nav class="navbar navbar-expand-lg navbar-dark bg-dark"  >

    <a class="navbar-brand"href="{{ url('/') }}"><img src="{{asset('img/tr.png')}}"style="height: 50px; width: auto" ></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon "></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mr-auto">
            <li class="nav-item " >
                <a class="nav-link"  href="{{ url('/') }}"><i class='fas fa-home' ></i> Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  href="{{ route('user.cariMotor') }}"><i class="fas fa-search"></i> Cari Motor<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  href="#"><i class='fa fa-motorcycle'></i> Dealer Motor<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  href="#"><i class='fas fa-table'></i></i> Promo & Event<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link"   href="#"><i class='fas fa-info-circle'></i> Info SPK dan Metode WP<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  href="#"><i class='fa fa-calculator'></i></i> SPK Pemilihan Sepeda Motor<span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <div  class="navbar-nav navbar-right col-sm-2" >
            <li class="nav-item dropdown open" style="padding-left: 15px;">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class='fa fa-sign-alt'>Login</i>
            </a>
            <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('admin.login') }}">Super Admin</a>
                <a class="dropdown-item" href="{{ route('pusat.login') }}">Admin Pusat</a>
                <a class="dropdown-item" href="{{ route('dealer.login') }}">Admin Dealer</a>
            </div>
        </li>
        </div>
    </div>
</nav>