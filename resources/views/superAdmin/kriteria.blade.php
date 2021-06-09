@extends('templateSuperAdmin')
@section('main')

    <div class="right_col" role="main">
        <div class="page-title">
            <div class="title_left">
                @include('layouts.partials._alerts')
                <h3>Data Kriteria</h3>
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
                            <h5 class="modal-title" id="staticBackdropLabel">Tambah Data Kriteria</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route("admin.kriteria.store") }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label for="name">Nama Kriteria</label>
                                    <input type="text" class="form-control" id="" name="nama_kriteria"
                                           placeholder="Nama Kriteria" required>
                                </div>
                                <div class="form-group">
                                    <label for="tipe_kriteria">Tipe Kriteria</label>
                                    <br>
                                    <div class="col-md-6 col-sm-6">
                                        <div id="gender" class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-danger" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                <input type="radio" name="tipe_kriteria" value="cost" class="join-btn" required> &nbsp; Cost &nbsp;
                                            </label>
                                            <br>
                                            <label class="btn btn-success" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                <input type="radio" name="tipe_kriteria" value="benefit" class="join-btn" required> Benefit
                                            </label>
                                        </div>
                                    </div>
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
                    <th scope="col">Nama Kriteria</th>
                    <th scope="col">Tipe Kriteria</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                                @foreach($kriterias as $kriteria)
                <tr>
                    <td>{{$kriteria->nama_kriteria}}
                    </td>

                    <td>{{$kriteria->tipe_kriteria}}
                    </td>

                    <td><a href="{{ route('admin.kriteria.edit', $kriteria) }}"
                           onclick="return confirm('Yakin Anda ingin menngedit Data ini ?')"><i class='fa fa-edit'
                                                                                                style='font-size:25px;color:blue'
                                                                                                alt="logo"
                                                                                                title="Edit"></i>
                        </a>
                        <a href="{{ route('admin.kriteria.delete', $kriteria) }}"
                           onclick="return confirm('Yakin Anda ingin menghapus Data ini ?')"><i class='fa fa-trash'
                                                                                                style='font-size:25px;color:red'
                                                                                                title="Hapus"> </i></a>
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