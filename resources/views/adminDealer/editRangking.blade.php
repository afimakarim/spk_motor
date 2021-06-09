@extends('templateAdminDealer')
@section('main')
    <div class="right_col" role="main">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Form Edit Rangking</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br/>
                        <form action="{{ route('dealer.rangking.update', $alternatif) }}" enctype="multipart/form-data"
                              method="post" id="demo-form2" data-parsley-validate
                              class="form-horizontal form-label-left">
                            {{ csrf_field() }}
                            {{ method_field('POST') }}
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="tipe_id">Tipe Motor</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select class="form-control"  id="tipe_id" name="tipe_motor" >
                                        <option value="" disabled selected>-- Pilih Tipe Motor --</option>
                                        @foreach($motors as $motor)
                                            <option value="{{ $motor->id }}"
                                                    @if ($motor->id === $alternatif->motor_id)
                                                    selected
                                                    @endif
                                            >
                                                {{ $motor->tipe_motor }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="kriteria_id">Kriteria</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select class="form-control"  id="kriteria_id" name="kriteria_id" >
                                        <option value="" disabled selected>-- Pilih Kriteria --</option>
                                        @foreach($kriterias as $kriteria)
                                            <option value="{{ $kriteria->id }}"
                                                    @if ($kriteria ->id === $alternatif->kriteria_id)
                                                    selected
                                                    @endif
                                            >
                                                {{ $kriteria->nama_kriteria }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Nilai</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" class="form-control" id="" name="nilai" placeholder="Nilai"
                                           value="{{$alternatif->nilai}}" required>
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <input class="btn btn-primary" type="submit" value="Simpan"></input>
                                    <a href="{{ route('dealer.rangking') }}">
                                        <button class="btn btn-danger" type="button">Kembali</button>
                                    </a>
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