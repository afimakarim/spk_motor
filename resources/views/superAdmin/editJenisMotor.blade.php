@extends('templateSuperAdmin')
@section('main')
    <div class="right_col" role="main">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Form Edit Jenis Sepeda Motor</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br/>
                        <form action="{{ route('admin.jenis.update', $jenis) }}" enctype="multipart/form-data"
                              method="post" id="demo-form2" data-parsley-validate
                              class="form-horizontal form-label-left">
                            {{ csrf_field() }}
                            {{ method_field('POST') }}
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Jenis Motor</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" class="form-control" id="" name="name" placeholder="Jenis Motor"
                                           value="{{ $jenis->name }}" required>
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <input class="btn btn-primary" type="submit" value="Simpan"></input>
                                    <a href="{{ route('admin.jenis') }}">
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