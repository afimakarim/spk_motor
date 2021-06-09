@extends('templateUsers')
@section('main')
    <section class=" text-center padding_top">
        <div class="container">
                        <div class="feature-img">
                            <img class="img-fluid" src="{{ asset("storage/$motor->gambar") }}" style="width: 400px;height: auto" alt="">
                        </div>
                        <div class="blog_details">
                            <h2>{{ $motor-> tipe_motor }}</h2>
                            <h3>Rp. {{ number_format($motor->harga_motor) }}</h3>
                        </div>
                        <br>
                        <div class="align-middle">
                            <table class="table table-striped" >
                                <tr>
                                    <th>Jenis Kendaraan</th>
                                    <td>{{ $motor->jenis->name }}</td>
                                </tr>
                                <tr>
                                    <th>Warna</th>
                                    <td>{{ $motor-> warna }}</td>
                                </tr>
                                <tr>
                                    <th>Kapasitas Mesin</th>
                                    <td>{{ $motor-> kapasitas_mesin}} CC</td>
                                </tr>
                                <tr>
                                    <th>Tenaga Maksimal</th>
                                    <td>{{ $motor-> tenaga_maksimal }} HP</td>
                                </tr>
                                <tr>
                                    <th>Kapasitas Tengki</th>
                                    <td>{{ $motor-> kapasitas_tengki}} Liter</td>
                                </tr>
                                <tr>
                                    <th>Tenaga Bagasi</th>
                                    <td>{{ $motor-> kapasitas_bagasi }} Liter</td>
                                </tr>
                                <tr>
                                    <th>Tenaga Bagasi</th>
                                    <td>{{ $motor-> berat }} KG</td>
                                </tr>
                                <tr>
                                    <th>Tipe Transmisi</th>
                                    <td>{{ $motor-> jenis_transmisi }}</td>
                                </tr>
                                <tr>
                                    <th>Ban Depan</th>
                                    <td>{{ $motor-> ban_depan }}</td>
                                </tr>
                                <tr>
                                    <th>Ban Depan</th>
                                    <td>{{ $motor-> ban_belakang }}</td>
                                </tr>
                                <tr>
                                    <th>Jenis Ban</th>
                                    <td>{{ $motor-> jenis_ban }}</td>
                                </tr>

                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <section class="blog_part ">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section_tittle">
                        <h2>PROMO  {{$motor->tipe_motor}}</h2>
                        <br>
                        <br>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach($promos as $promo )
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="single_blog_part">
                        <a href="{{ route('user.detailPromo', $promo) }}" ><img src="{{ asset("storage/$promo->gambar") }}" style="height: 200px; height: 200px" alt=""></a>
                        <div class="blog_text ">
                            <h2>{{$promo->judul}}</h2>
                            <a href="{{ route('user.detailPromo', $promo) }}" class="genric-btn success-border circle">Lihat Detail</a>
                            </p>
                        </div>
                    </div>
                </div>
                    @endforeach
            </div>
        </div>

{{--        <div class="text-center">--}}
{{--            <a href="#" class="genric-btn success radius">Lihat Selengkapnya</a>--}}
{{--        </div>--}}
    </section>


@stop
@section('footerUser')
@stop

