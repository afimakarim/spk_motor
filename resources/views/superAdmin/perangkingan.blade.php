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
        {{--            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop"--}}
        {{--                    title="Tambah" style="float : right"><span class="fa fa-plus"></span> Tambah Data--}}
        {{--            </button>--}}
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
                            <form action="" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="nama_alt">Nama Alternatif</label>
                                    <select class="form-control" id="nama_alt" name="nama_alt">
                                        <option value="" selected>-- Pilih Nama Alternatif --</option>
                                        {{--                                        @foreach($jenis as $item)--}}
                                        <option value=""></option>
                                        {{--                                        @endforeach--}}
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="">Vektor S</label>
                                    <input type="text" class="form-control" id="" name="vektor_s"
                                           placeholder="Vektor S" required>
                                </div>

                                <div class="form-group">
                                    <label for="">Vektor V</label>
                                    <input type="text" class="form-control" id="" name="vektor_v"
                                           placeholder="Vektor V" required>
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
            <div class="table-responsive">
                <table id="myTable" class="table table-bordered text-center table-sm">

                <thead>
                <tr style="background-color: Gainsboro;">
                    <th scope="col">Nama Alternatif</th>
                    <th scope="col">Harga Motor</th>
                    <th scope="col">Teknologi Motor</th>
                    <th scope="col">Keiritan Motor</th>
                    <th scope="col">Kapasitas Mesin</th>
                    <th scope="col">Desain Motor</th>
                    <th scope="col">Vektor S</th>
                    <th scope="col">Vektor V</th>
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

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>

                    <td>
                    </td>
                </tr>
                {{--                @endforeach--}}
                </tbody>
            </table>
            </div>
            <!--End Tabel-->

        </div>
    </div>




@stop
@section('footer')
@stop