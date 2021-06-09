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
                        <form action="{{route("admin.kriteria.update", $kriteria)}}" enctype="multipart/form-data"
                              method="post" id="demo-form2" data-parsley-validate
                              class="form-horizontal form-label-left">
                            {{ csrf_field() }}
                            {{ method_field('POST') }}
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Nama Kriteria</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" class="form-control" id="" name="nama_kriteria" placeholder="Nama Kriteria"
                                           value="{{ $kriteria->nama_kriteria }}" required>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="tipe_kriteria">Tipe Kriteria</label>
                                <div class="col-md-6 col-sm-6">
                                    <div id="gender" class="btn-group" data-toggle="buttons">
                                        <label class="btn btn-danger" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                            <input type="radio" name="tipe_kriteria" value="cost" class="join-btn"  required> &nbsp; Cost &nbsp;
                                        </label>
                                        <br>
                                        <label class="btn btn-success" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                            <input type="radio" name="tipe_kriteria" value="benefit" class="join-btn"  required> Benefit
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <input class="btn btn-primary" type="submit" value="Simpan"></input>
                                    <a href="{{ route('admin.kriteria') }}">
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