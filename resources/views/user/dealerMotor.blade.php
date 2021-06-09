@extends('templateUsers')
@section('main')

    <section class="blog_part padding_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                </div><div class="section_tittle">
                    <h2>Daftar Dealer Sepeda Motor Di Kota Tegal</h2>
                </div>
            </div>
        </div>
    </section>



    @foreach($data as $key => $dealers)
    <!-- blog part start-->
    <section class="blog_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section_tittle">
                        <h2 style="color: #0b97c4">{{ $key }}</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach($dealers as $dealer)
                <div class="col-lg-4 col-sm-6">
                    <div class="single_blog_part">
                        <a href="{{ route('user.detailDealer', $dealer) }}"> <img src="{{ asset("storage/".$dealer->gambar) }}" style="height: 200px; height: 200px" alt=""></a>
                        <div class="blog_text">
                            <h2>{{ $dealer->name }}</h2>
                            <p>{{ str_limit($dealer->alamat, 25, '...')  }} <a href="{{ route('user.detailDealer', $dealer) }}" style="color: #0b97c4">Detail</a></p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endforeach
    <br>
    <br>
    <br>
    <br>
    <!-- blog part end-->
    <section>
        <div class="row justify-content-center">
            @foreach($mereks as $merek)
                <div class="card-deck"  >
                    <div class="card " style="width: 15rem;">
                        <img src="{{ asset("storage/$merek->gambar") }}" class="card-img-top"
                             style="height: 200px; width: auto;margin-left: 20px" alt="...">
                        <div class="card-footer">
                            <h5 class="text-center">{{ $merek->name }}</h5></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

@stop
@section('footerUser')
@stop

