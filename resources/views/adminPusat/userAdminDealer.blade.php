@extends('templateAdminPusat')
@section('main')

    <div class="right_col" role="main">
        <div class="page-title">
            <div class="title_left">
                @include('layouts.partials._alerts')
                <h3>User Admin Dealer </h3>
            </div>

            <br>
            <br>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop"
                    title="Tambah" style="float : right"><span class="fa fa-plus"></span> Tambah Data
            </button>
            <!-- End Button trigger modal -->

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
                 role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Tambah User</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('pusat.dealer.store') }}" method="post"
                                  enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label for="">Gambar</label>
                                    <input type="file" class="form-control" id="gambar_dealer" name="gambar"
                                           placeholder="gambar" required>

                                </div>
                                <div class="form-group">
                                    <label for="">Username</label>
                                    <input type="text" class="form-control" id="username_dealer" name="name"
                                           placeholder="Nama Admin Dealer" required>

                                </div>

                                <div class="form-group">
                                    <label for="email_dealer">Email </label>
                                    <input type="email" class="form-control" id="email_dealer" name="email"
                                           placeholder="Email" required>

                                </div>
                                <div class="form-group">
                                    <label for="">Password Dealer</label>
                                    <input type="password" class="form-control" id="" name="password"
                                           data-toggle="password"
                                           placeholder="Password" required>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-primary" value="save">Tambah</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Modal -->


            <!--Tabel -->
            <table id="myTable" class="table table-bordered text-center">
                <thead>
                <tr style="background-color: Gainsboro;">
                    <th scope="col">Gambar Dealer</th>
                    <th scope="col">Nama Dealer</th>
                    <th scope="col">Email</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($dealers as $dealer)
                    <tr>
                        <td><img src="{{ asset("storage/$dealer->gambar") }}" style="height: 100px; width: auto" alt="">
                        </td>
                        <td>{{ $dealer->name }}</td>
                        <td>{{ $dealer->email }}</td>
                        <td>
                            <a href="{{ route('pusat.dealer.edit', $dealer) }}"
                               onclick="return confirm('Yakin Anda ingin mengedit Data ini ?')">
                                <i class='fa fa-edit' style='font-size:25px;color:blue' alt="logo" title="Edit"></i>
                            </a>
                            <a href="{{ route('pusat.dealer.delete', $dealer) }}"
                               onclick="return confirm('Yakin Anda ingin menghapus Data ini ?')">
                                <i class='fa fa-trash' style='font-size:25px;color:red' title="Hapus"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <!--End Tabel-->

        </div>
    </div>




@stop
@section('footer')
@stop