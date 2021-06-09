@extends('templateUsers')
@section('main')

    <!-- banner part start-->
    <section class="breadcrumb_bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="banner_text">
                        <div class="" >
                            <h1 style="color: #ffffff">Temukan Motor Impian Anda</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- banner part start-->
    <section class="search_your_country">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="search_form">
                        <form action="{{ route('user.detailMotor') }}" method="post">
                            {{ csrf_field() }}

                            <div class="form-row">
                                <div class="col-lg-9">
                                    <div class="search_form_iner">
                                        <select class="custom_select" name="merek" id="merek" required>
                                            <option value=""  disabled selected>-- Merek Motor--</option>
                                            @foreach($mereks as $merek)
                                                <option value="{{$merek->id}}">{{$merek->name}}</option>
                                            @endforeach
                                        </select>
                                        <select class="custom_select" id="motor" name="motor" required>
                                            <option  value=""  disabled selected>-- Tipe Motor--</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <input type="submit" value="Cari" class="search_btn">
                                </div>
                            </div>
                        </form>
                        <br>
                        <form action="{{ route('user.anggaranMotor') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-row">
                                <div class="col-lg-9">
                                    <div class="search_form_iner">

                                        <select class="custom_select" name="anggaran" id="inlineFormCustomSelect" required>
                                            <option value=""  disabled selected > -- Pilih Anggaran -- </option>
                                            <option value="1">< Kurang Dari 20 Juta</option>
                                            <option value="2">< Kurang Dari 25 Juta</option>
                                            <option value="3">< Kurang Dari 30 Juta</option>
                                            <option value="4">> Lebih Dari 30 Juta</option>
                                        </select>
                                        <div style="padding-left: 15px">
                                            <input type="submit" value="Cari" class="search_btn">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- use sasu part end-->
            <!-- blog part start-->
            <section class="blog_part padding_top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="section_tittle">
                                <h2>Dealer Sepeda Motor Di Kota Tegal</h2>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        @foreach($dealers as $dealer)
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_blog_part">
                                <a href="{{ route('user.detailDealer', $dealer) }}"><img  src="{{ asset("storage/$dealer->gambar") }}"   style="height: 200px; height: 200px" alt=""> </a>
                                <div class="blog_text">
                                    <h2>{{ $dealer-> name }}</h2>
                                    <p>{{ str_limit($dealer->alamat, 25, '...')  }}<a href="{{ route('user.detailDealer', $dealer) }}" style="color: #0b97c4">Detail</a></p>
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

@stop
@section('footerUser')
@stop
@section('script')
    <script>
        const merek = $('#merek');
        const motor =  $('#motor');
        console.log(motor)

        const url = '{{config('app.url')}}';
        merek.on('change', async function () {
            let option = ``;
             if($(this).val() !== ''){
                 const motors = await fetch(url+'/merek/motor/'+this.value).then(res => res.json()).then(res => res);
                    // console.log(motors)
                 motors.map(m => option += showMotor(m));
                 console.log(option)
                 motor.html(option)
                 motor.niceSelect('update')
             }else {
                 motor.html('')
                 motor.niceSelect('update')
             }
        })

        function showMotor(m) {
            return `<option value="${m.id}">${m.tipe_motor}</option>`
        }

    </script>

    @endsection
