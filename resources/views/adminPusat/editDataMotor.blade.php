@extends('templateAdminPusat')
@section('main')
<div class="right_col" role="main">
    <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                    <h2>Form Edit Dealer</h2>
                        <div class="clearfix"></div>
                    </div>
                <div class="x_content">
                    <br />
                    <form action="{{ route('pusat.motor.update', $motor) }}" enctype="multipart/form-data" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                        {{ csrf_field() }}
                        {{ method_field('POST') }}
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="gambar_motor" >Gambar Motor</label>
                            <div class="col-md-6 col-sm-6 ">
                                <img src="{{ asset("storage/$motor->gambar") }}" alt="" class="" height="128">
                                <input type="file" class="form-control" id="gambar_dealer" name="gambar" placeholder="Gambar Admin Dealer" value="{{ $motor->gambar }}">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="jenis_motor">Jenis Motor</label>
                                <div class="col-md-6 col-sm-6 ">
                                <select class="form-control"  id="jenis_motor" name="jenis_motor" >
                                    <option value=""  disabled selected >-- Pilih Jenis Motor --</option>
                                    @foreach($jenis as $item)
                                        <option value="{{ $item->id }}"
                                        @if ($item ->id === $motor->jenis_id)
                                        selected
                                        @endif
                                        >
                                            {{ $item->name }}</option>
                                    @endforeach
                                </select>
                                </div>
                        </div>
                        <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="tipe_motor">Tipe Motor</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" class="form-control" id="tipe_motor" name="tipe_motor" placeholder="Tipe Motor" value="{{ $motor->tipe_motor }}" required>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="jenis_transmisi">Tipe Transmisi</label>
                            <div class="col-md-6 col-sm-6 ">
                            <select class="form-control" id="jenis_transmisi" name="jenis_transmisi">
                                <option value=""  disabled selected >-- Pilih Tipe Motor --</option>
                                <option value="Manual, 4-kecepatan" @if($motor->jenis_transmisi == 'Manual, 4-kecepatan') selected @endif >Manual, 4-kecepatan</option>
                                <option value="Manual, 5-kecepatan"@if($motor->jenis_transmisi == 'Manual, 5-kecepatan') selected @endif>Manual, 5-kecepatan</option>
                                <option value="Manual, 6-kecepatan"@if($motor->jenis_transmisi == 'Manual, 6-kecepatan') selected @endif>Manual, 6-kecepatan</option>
                                <option value="Otomatis, CVT" @if($motor->jenis_transmisi == 'Otomatis, CVT') selected @endif>Otomatis, CVT</option>
                            </select>
                            </div>
                        </div>
                        <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="harga_motor">Harga Motor</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="number" class="form-control" id="harga_motor" name="harga_motor" placeholder="Harga Motor" value="{{ $motor->harga_motor }}" required>
                            </div>
                        </div>
                        <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="warna">Varian Warna</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" class="form-control" id="warna" name="warna" placeholder="warna" value="{{ $motor->warna }}" required>

                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="kapasitas_mesin">Kapasitas Mesin</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="number" step="0.01" class="form-control" id="kapasitas_mesin" name="kapasitas_mesin" placeholder="Kapasitas Mesin" value="{{ $motor->kapasitas_mesin}}" required>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="tenaga_maksimal">Tenaga Maksimal</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="number" step="0.01" class="form-control" id="tenaga_maksimal" name="tenaga_maksimal" placeholder="Tenaga Maksimal" value="{{ $motor->tenaga_maksimal }}" required>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="kapasitas_tengki">Kapasitas Tengki</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="number" step="0.1" class="form-control" id="kapasitas_tengki" name="kapasitas_tengki" placeholder="Kapasitas Tengki" value="{{ $motor->kapasitas_tengki}}" required>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="kapasitas_bagasi">Kapasitas Bagasi</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="number" step="0.1" class="form-control" id="kapasitas_bagasi" name="kapasitas_bagasi" placeholder="Kapasitas Bagasi" value="{{ $motor->kapasitas_bagasi}}" required>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="berat">Berat Isi</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="number" class="form-control" id="berat" name="berat" placeholder="Berat Isi" value="{{ $motor->berat}}" required>
                            </div>
                        </div>
                        <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="ban_depan">Ban Depan</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" class="form-control" id="ban_depan" name="ban_depan" placeholder="Ban Depan" value="{{ $motor->ban_depan }}" required>
                            </div>
                        </div>
                        <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="ban_belakang">Ban Belakang</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" class="form-control" id="ban_belakang" name="ban_belakang" placeholder="Ban Depan" value="{{ $motor->ban_belakang }}" required>
                            </div>
                        </div>
                        <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="jenis_ban">Jenis Ban</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" class="form-control" id="jenis_ban" name="jenis_ban" placeholder="Jenis Ban" value="{{ $motor->jenis_ban }}" required>
                            </div>
                        </div>


                        <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <a href="#"><button class="btn btn-primary" type="submit">Simpan</button></a>
                                    <a href="{{route('pusat.motor')}}"><button class="btn btn-danger" type="button">Kembali</button></a>
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