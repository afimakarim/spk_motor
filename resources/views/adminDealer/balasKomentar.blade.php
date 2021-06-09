@extends('templateAdminDealer')
@section('main')

    <div class="right_col" role="main" xmlns="http://www.w3.org/1999/html">
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
                        <h2>Data Komentar pada Promo atau Event <a style="color: #0b97c4">{{ $promo->judul }}</a></h2>
                        <br>
                        <br>
                        <h2> Balas Komentar</h2>
                        <br>
                        <form method="post" action="{{ route('dealer.komentar.update', $promo) }}">
                            {{ csrf_field() }}
                        <textarea placeholder="Tulis komentar.." id="message" required="required" class="form-control"
                                  name="message"></textarea>
                        <br/>
                            <button type="submit" class="btn btn-primary">Balas</button>
                        </form>
                        <br><br>
                        <div class="x_panel">
                            <div class="x_content">
                                <ul class="list-unstyled timeline">
                                    @foreach($komentars as $date => $items)
                                        <li>
                                            <div class="block">
                                                <div class="tags">
                                                    <a href="" class="tag">
                                                        <span>{{ $date }}</span>
                                                    </a>
                                                </div>
                                                @foreach($items as $item)
                                                    <div class="block_content">
                                                        <div class="byline">
                                                            <span>{{ \Carbon\Carbon::parse($item->created_at)->format('H:i') }}</span>
                                                            by <a href="{{ route('dealer.komentar.delete', $item) }}"
                                                                  onclick="return confirm('Yakin Anda ingin menghapus Data ini ?')">{{ $item->nama }} <i class='fa fa-trash' style='font-size:15px;color:red' title="Hapus"></i></a>
                                                        </div>
                                                        <p class="excerpt">{{ $item->komentar }}</p>
                                                    </div>
                                                @endforeach
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