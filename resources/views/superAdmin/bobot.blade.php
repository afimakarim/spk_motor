@extends('templateSuperAdmin')
@section('main')

    <div class="right_col" role="main">
        <div class="page-title">
            <div class="title_left">
                @include('layouts.partials._alerts')
                <h3>Data Bobot </h3>
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
                            <h5 class="modal-title" id="staticBackdropLabel">Tambah Bobot</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="kriteria">Kriteria</label>
                                    <select class="form-control" id="kriteria" name="kriteria">
                                        <option value="" selected>-- Pilih Kriteria --</option>
                                        {{--                                        @foreach($jenis as $item)--}}
                                        <option value=""></option>
                                        {{--                                        @endforeach--}}
                                    </select>
                                </div>

                                <div class="form-group has-feedback{{ $errors->has('nilai_bobot') ? ' has-error' : '' }}">
                                    <label for="nilai_bobot">Nilai Bobot</label>
                                    <select class="form-control" id="nilai_bobot" name="nilai_bobot">
                                        <option value="" selected>-- Nilai Bobot --</option>
                                        {{--                                        @foreach($jenis as $item)--}}
                                        <option value=""></option>
                                        {{--                                        @endforeach--}}
                                    </select>
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
                    <th scope="col">Kriteria</th>
                    <th scope="col">Nilai Bobot</th>
                    <th scope="col">Hasil Bobot</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                {{--                @foreach($jenis as $jenis)--}}
                <tr>
                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td><a href="{{ route('admin.bobot.edit') }}"
                           onclick="return confirm('Yakin Anda ingin menngedit Data ini ?')"><i class='fa fa-edit'
                                                                                                style='font-size:25px;color:blue'
                                                                                                alt="logo"
                                                                                                title="Edit"></i>
                        </a>
                        <a href=""
                           onclick="return confirm('Yakin Anda ingin menghapus Data ini ?')"><i class='fa fa-trash'
                                                                                                style='font-size:25px;color:red'
                                                                                                title="Hapus"> </i></a>
                    </td>
                </tr>
                {{--                @endforeach--}}
                </tbody>
            </table>
            <!--End Tabel-->

        </div>
    </div>




@stop
@section('footer')
@stop