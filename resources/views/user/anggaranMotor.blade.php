@extends('templateUsers')
@section('main')



    <!-- blog part start-->
    <section class="blog_part padding_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section_tittle">
                        @if($harga == 1)
                            <h2>Daftar Harga Sepeda Motor Kurang Dari 20 Juta</h2>
                        @elseif($harga == 2)
                            <h2>Daftar Harga Sepeda Motor Dari 20-25 Juta</h2>
                        @elseif($harga == 3)
                            <h2>Daftar Harga Sepeda Motor Dari 25-30 Juta</h2>
                        @elseif($harga == 4)
                            <h2>Daftar Harga Sepeda Motor Lebih Dari 30 Juta</h2>
                        @endif

                        <br>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach($motors as $motor)
                    <div class="col-lg-4 col-sm-6">
                        <div class="single_blog_part">
                            <img  src="{{ asset("storage/$motor->gambar") }}" style="height: 200px; height: 200px" alt="">
                            <div class="blog_text">
                                <h2>{{$motor->tipe_motor }}</h2>
                                <p>Rp. {{ number_format($motor->harga_motor) }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <!-- blog part end-->
    <section>
        <div class="row justify-content-center">
            <div class="card-deck">
                <div class="card">
                    <img src="{{asset('img/honda.png')}}" class="card-img-top"
                         style="height: 200px; width: auto" alt="...">
                    <div class="card-footer">
                        <a href="#"><h5 class="text-center">HONDA</h5></a>
                    </div>
                </div>
                <div class="card">
                    <img src="{{asset('img/yamaha.png')}}" class="card-img-top"
                         style="height: 200px; width: auto" alt="...">
                    <div class="card-footer">
                        <a href="#"><h5 class="text-center">YAMAHA</h5></a>
                    </div>
                </div>
                <div class="card">
                    <img src="{{asset('img/suzuki.png')}}" class="card-img-top"
                         style="height: 200px; width: auto" alt="...">
                    <div class="card-footer">
                        <a href="#"><h5 class="text-center">SUZUKI</h5></a>
                    </div>
                </div>
                <div class="card">
                    <img src="{{asset('img/kawasaki.png')}}" class="card-img-top"
                         style="height: 200px; width: auto" alt="...">
                    <div class="card-footer">
                        <a href="#"><h5 class="text-center">KAWASAKI</h5></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
@section('footerUser')
@stop

