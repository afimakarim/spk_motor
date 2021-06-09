@extends('templateAdminPusat')
@section('main')
    <div class="right_col" role="main">
        <div class="page-title">
            <div class="title_left">
                @include('layouts.partials._alerts')
            </div>
            <br>
            <br>
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Profile Pusat </h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div   profile_left">
                        <div class="profile_img">
                            <div id="crop-avatar">
                                <!-- Current avatar -->
                                <img class="img-responsive avatar-view" src="{{ asset("storage/" . auth()->user()->gambar) }}" style="height: 200px; width: auto" alt="Avatar"
                                     title="Change the avatar">
                            </div>
                        </div>
                        <h3><font color="black">{{ auth()->user()->name }}</font></h3>

                        <ul class="list-unstyled user_data">
                            <li>{{ auth()->user()->email }}</li>
                            <li class="m-top-xs">
                            </li>
                        </ul>
                        <a href="{{ route('pusat.profile.edit', auth()->user()->id) }}" class="btn btn-primary"><i class="fa fa-edit m-right-xs" onclick="return confirm('Yakin Anda ingin mengedit Data ini ?')"></i>Edit Profile</a>
                        <br/>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
@stop
@section('footer')
@stop