@extends('templateUsers')
@section('main')

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h1>Konsultasikan Motor    Impianmu</h1>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- use sasu part end-->
    <section class="popular_place padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="section_tittle text-center">
                        <img src="template/img/motorr.png" style="width: 100px; height: auto" alt="logo">
                        <h2>Selamat Datang </h2>
                        <p>"Website ini bertujuan untuk membantu calon pembeli sepeda motor roda dua dalam menentukan pilihan
                            sesuai dengan kemampuan dan keinginannya, serta merekomendasikan sepeda motor roda yang cocok
                            dengan cara mengisi pertanyaan berdasarkan kriteria yang terdapat pada menu <a href="{{ route('user.spk') }}" style="color: #0b97c4">SPK Pemilihan Sepeda Motor</a>
                            dan kemudian sistem akan memberikan alternatif terbaik yang sesuai dengan apa yang di inputkan oleh konsumen"</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach($mereks as $merek)
                <div class="card-deck"  >
                    <div class="card " style="width: 15rem;">
                        <img src="{{ asset("storage/$merek->gambar") }}" class="card-img-top"
                             style="height: 200px; width: auto" alt="...">
                        <div class="card-footer">
                            <h5 class="text-center">{{ $merek->name }}</h5></a>
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

