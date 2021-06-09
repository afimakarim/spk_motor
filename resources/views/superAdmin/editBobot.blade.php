@extends('templateSuperAdmin')
@section('main')
    <div class="right_col" role="main">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Form Edit Kriteria</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br/>
                        <form action="" enctype="multipart/form-data"
                              method="post" id="demo-form2" data-parsley-validate
                              class="form-horizontal form-label-left">
                            {{ csrf_field() }}
                            {{ method_field('POST') }}
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="kriteria">Kriteria</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select class="form-control"  id="kriteria" name="kriteria" >
                                        <option value="" >-- Pilih Kriteria --</option>
                                        {{--                                        @foreach($jenis as $item)--}}
                                        <option value=""
                                                {{--                                                    @if ($item ->id === $motor->jenis_id)--}}
                                                {{--                                                    selected--}}
                                                {{--                                                    @endif--}}
                                        >
                                        {{--                                                {{ $item->name }}</option>--}}
                                        {{--                                        @endforeach--}}
                                    </select>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="nilai_bobot">Nilai Bobot</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select class="form-control"  id="nilai_bobot" name="nilai_bobot" >
                                        <option value="" >-- Nilai Bobot --</option>
                                        {{--                                        @foreach($jenis as $item)--}}
                                        <option value=""
                                                {{--                                                    @if ($item ->id === $motor->jenis_id)--}}
                                                {{--                                                    selected--}}
                                                {{--                                                    @endif--}}
                                        >
                                        {{--                                                {{ $item->name }}</option>--}}
                                        {{--                                        @endforeach--}}
                                    </select>
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <input class="btn btn-primary" type="submit" value="Simpan"></input>
                                    <a href="{{ route('admin.bobot') }}">
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