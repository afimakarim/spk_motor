@extends('templateAdminDealer')
@section('main')

    <div class="right_col" role="main">
        <div class="page-title">
            <div class="title_left">
                @include('layouts.partials._alerts')
            </div>
            <br>
            <br>
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Data Komentar</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-12 col-sm-12  ">
                        <div class="x_panel">
                            <h2>Data Komentar</h2>
                            <div class="x_content">
                                <ul class="list-unstyled timeline">
                                    @foreach($promos as $promo)
                                        <li>
                                            <div class="block">
                                                <div class="tags">
                                                    <a href="" class="tag">
                                                        <span>{{ \Carbon\Carbon::parse($promo->komentar->last()->created_at)->format('d/m/Y') }}</span>
                                                    </a>
                                                </div>
                                                <div class="block_content">
                                                    <h2 class="title">
                                                        <a>{{ $promo->judul }}</a>
                                                    </h2>
                                                    <div class="byline">
                                                        <span>{{ \Carbon\Carbon::parse($promo->komentar->last()->created_at)->format('H:i') }}</span>
                                                        by <a>{{ $promo->komentar->last()->nama }}</a>
                                                    </div>
                                                    <p class="excerpt">{{ $promo->komentar->last()->komentar }} <a
                                                                href="{{ route('dealer.komentar.edit', $promo) }}"
                                                                style="color: #0b97c4">Lihat</a></p>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    </div>




@stop
@section('footer')
@stop