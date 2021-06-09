@extends('templateAdminDealer')
@section('main')
<div class="right_col" role="main">
    <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                    <h2>Form Edit Promo Motor</h2>
                        <div class="clearfix"></div>
                    </div>
                <div class="x_content">
                    <br />
                    <form action="{{ route('dealer.promo.update', $promo) }}" enctype="multipart/form-data" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                        {{ csrf_field() }}
                        {{ method_field('POST') }}
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="gambar_promo" >Gambar Motor</label>
                            <div class="col-md-6 col-sm-6 ">
                                <img src="{{ asset("storage/$promo->gambar") }}" alt="" class="" height="128">
                                <input type="file" class="form-control" id="gambar_promo" name="gambar" placeholder="Gambar Promo"value="{{ $promo->gambar }}" >
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="tipe_motor">Tipe Motor</label>
                            <div class="col-md-6 col-sm-6 ">
                                <select class="form-control"  id="tipe_motor" name="tipe_motor" >
                                    <option value="" disabled selected>-- Pilih Tipe Motor --</option>
                                    @foreach($motors as $motor)
                                        <option value="{{ $motor->id }}"
                                                @if ($motor->id === $promo->motor_id)
                                                selected
                                                @endif
                                        >
                                            {{ $motor->tipe_motor }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align"for="">Judul Promo</label>
                            <div class="col-md-6 col-sm-6 ">
                                <textarea type="text" id="" cols="30" rows="5" class="form-control" name="judul" placeholder="Judul Promo" required>{{ $promo->judul }}</textarea>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align"for="">Keterangan Promo</label>
                            <div class="col-md-6 col-sm-6 ">
                                <textarea type="text" id="" cols="30" rows="5" class="form-control" name="ket_promo" placeholder="Keterangan Promo" required>{{ $promo->ket_promo }}</textarea>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <a href="#"><button class="btn btn-primary" type="submit">Simpan</button></a>
                                <a href="{{route('dealer.promo')}}"><button class="btn btn-danger" type="button">Kembali</button></a>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
@section('footer')
@stop