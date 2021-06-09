@extends('templateUsers')
@section('main')
    <!-- Start Align Area -->
    <section class="feature_part padding_top">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-7">
                    <div class="feature_img">
                        <img src="{{ asset('storage/' . $dealer->gambar) }}" alt="">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="feature_part_text">
                        <img src="{{ asset('img/company.png')}}" style="height: 50px;width: auto;" alt="#">
                        <h2>{{ $dealer->name }}</h2>
                        <span>{{ $dealer->ket_dealer }}</span>
                        <span>{{ $dealer->jam_buka }}</span><br>
                        <div class="row">
                            <div class="col-sm-6 col-md-4">
                                <div class="feature_part_text_iner">
                                    <h4>Telephone</h4>
                                    <p>
                                        {{$dealer->telephone}}
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-8 col-md-8">
                                <div class="feature_part_text_iner">
                                    <h4>Lokasi</h4>
                                    <p>
                                        {{$dealer->alamat}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </div>
        </div>
    </section>

    <section class="blog_part ">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section_tittle">
                        <br>
                        <br>
                        <h2>Promo dan Event</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach($promos as $promo)
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="single_blog_part">
                        <a href="{{ route('user.detailPromo', $promo) }}"><img src="{{ asset('storage/' . $promo->gambar) }}" style="height: 200px; height: 200px" alt=""></a>
                        <div class="blog_text ">
                            <h2>{{ $promo->judul }}</h2>
                            <a href="{{ route('user.detailPromo', $promo) }}" class="genric-btn success-border circle">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@stop
@section('footerUser')
@stop

