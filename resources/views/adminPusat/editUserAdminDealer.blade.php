@extends('templateAdminPusat')
@section('main')
<div class="right_col" role="main">
    <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                    <h2>Form Edit User Dealer</h2>
                        <div class="clearfix"></div>
                    </div>
                <div class="x_content">
                    <br />
                    <form action="{{ route('pusat.dealer.update', $dealer) }}" enctype="multipart/form-data" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                        {{ csrf_field() }}
                        {{ method_field('POST') }}
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="gambar_dealer">Gambar</label>
                            <div class="col-md-6 col-sm-6 ">
                                <img src="{{ asset("storage/$dealer->gambar") }}" alt="" class="" height="128">
                                <input type="file" class="form-control" id="gambar_dealer" name="gambar" placeholder="Gambar Admin Dealer" value="{{ $dealer->gambar }}">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align"for="username_dealer">Nama Admin Dealer</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" class="form-control"  id="nama_dealer" name="name" placeholder="Nama Admin Dealer"value="{{ $dealer->name }}" required>
                            </div>
                        </div>
                        <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align"for="email_dealer">Email</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="email" class="form-control" id="email_dealer" name="email" placeholder="Email" value="{{ $dealer->email }}" required>
                            </div>
                        </div>
                        <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align"for="password_dealer">Password Dealer</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="password" class="form-control"  id="password_pusat" name="password" data-toggle="password" placeholder="Password"  value="">
                            </div>
                        </div>
                        
                        <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <a href="#"><button class="btn btn-primary" type="submit">Simpan</button></a>
                                    <a href="{{route('pusat.dealer')}}"><button class="btn btn-danger" type="button">Kembali</button></a>
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