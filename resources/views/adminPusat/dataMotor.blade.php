@extends('templateAdminPusat')
@section('main')

    <div class="right_col" role="main">
        <div class="page-title">
            <div class="title_left">
                @include('layouts.partials._alerts')
                <h3>Daftar Motor </h3>
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
                            <h5 class="modal-title" id="staticBackdropLabel">Tambah Motor</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('pusat.motor.store') }}" method="post"
                                  enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="">Gambar Motor </label>
                                    <input type="file" class="form-control" id="gambar_motor" name="gambar" required>

                                </div>
                                <div class="form-group">
                                    <label for="jenis_motor">Jenis Motor</label>
                                    <select class="form-control" id="jenis_motor" name="jenis_motor" required>
                                        <option value=""  disabled selected>-- Pilih Jenis Motor --</option>
                                        @foreach($jenis as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="tipe_motor">Tipe Motor</label>
                                    <input type="text" class="form-control" id="tipe_motor" name="tipe_motor"
                                           placeholder="Tipe Motor" required>
                                <div class="form-group">
                                    <label for="jenis_transmisi">Tipe Transmisi</label>
                                    <select class="form-control" id="jenis_transmisi" name="jenis_transmisi" required>
                                        <option value=""  disabled selected>-- Pilih Jenis Transmisi --</option>
                                        <option value="Manual, 4-kecepatan">Manual, 4-kecepatan</option>
                                        <option value="Manual, 5-kecepatan">Manual, 5-kecepatan</option>
                                        <option value="Manual, 6-kecepatan">Manual, 6-kecepatan</option>
                                        <option value="Otomatis, CVT">Otomatis, CVT</option>
                                    </select>
                                </div>
                                </div>
                                <div class="form-group">
                                    <label for="harga_motor">Harga Motor</label>
                                    <input type="number"  class="form-control" id="harga_motor" name="harga_motor"
                                           placeholder="Harga Motor" required>

                                </div>
                                <div class="form-group">
                                    <label for="warna">Varian Warna</label>
                                    <input type="text" class="form-control" id="warna" name="warna"
                                           placeholder="warna" required>
                                    <p style="color: yellow">*) Warna sepeda motor, jika lebih dari satu, dipisah koma (cth: Merah, Putih)</p>
                                </div>

                                <div class="form-group">
                                    <label for="kapasitas_mesin">Kapasitas Mesin</label>
                                    <input type="number" step="0.01" class="form-control" id="kapasitas_mesin" name="kapasitas_mesin"
                                           placeholder="Kapasitas Mesin" required>
                                </div>

                                <div class="form-group">
                                    <label for="tenaga_maksimal">Tenaga Maksimal</label>
                                    <input type="number" step="0.01" class="form-control" id="tenaga_maksimal" name="tenaga_maksimal"
                                           placeholder="Tenaga Maksimal" required>
                                </div>

                                <div class="form-group">
                                    <label for="kapasitas_tengki">Kapasitas Tengki</label>
                                    <input type="number" step="0.1" class="form-control" id="kapasitas_tengki" name="kapasitas_tengki"
                                           placeholder="kapasitas Tengki" required>

                                </div>
                                <div class="form-group">
                                    <label for="kapasitas_bagasi">Kapasitas Bagasi</label>
                                    <input type="number" step="0.1" class="form-control" id="kapasitas_bagasi" name="kapasitas_bagasi"
                                           placeholder="kapasitas Bagasi" required>
                                </div>

                                <div class="form-group">
                                    <label for="berat">Berat Isi</label>
                                    <input type="number" class="form-control" id="berat" name="berat"
                                           placeholder="Berat Isi" required>

                                </div>
                                <div class="form-group">
                                    <label for="ban_depan">Ban Depan</label>
                                    <input type="text" class="form-control" id="ban_depan" name="ban_depan"
                                           placeholder="Ban Depan" required>
                                </div>

                                <div class="form-group">
                                    <label for="ban_belakang">Ban Belakang</label>
                                    <input type="text" class="form-control" id="ban_belakang" name="ban_belakang"
                                           placeholder="Ban Belakang" required>
                                </div>

                                <div class="form-group">
                                    <label for="jenis_ban">Jenis Ban</label>
                                    <input type="text" class="form-control" id="jenis_ban" name="jenis_ban"
                                           placeholder="Jenis Ban" required>
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
{{--            <div class="table-responsive">--}}
                <table id="myTable"  class="table table-bordered table-responsive text-center table-sm">
                    <thead>
                    <tr style="background-color: Gainsboro;">
                        <th scope="col">Gambar Motor</th>
                        <th scope="col">Jenis Motor</th>
                        <th scope="col">Tipe Motor</th>
                        <th scope="col">Tipe Transmisi</th>
                        <th scope="col">Harga Motor</th>
                        <th scope="col">Varian Warna</th>
                        <th scope="col">Kapasitas Mesin</th>
                        <th scope="col">Kapasitas Tengki</th>
                        <th scope="col">Kapasitas Bagasi</th>
                        <th scope="col">Berat Isi</th>
                        <th scope="col">Tenaga Maksimal</th>
                        <th scope="col">Ban Depan</th>
                        <th scope="col">Ban Belakang</th>
                        <th scope="col">Jenis Ban</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($motors as $motor)
                        <tr>
                            <td><img src="{{ asset("storage/$motor->gambar") }}" style="height: 100px; width: auto"
                                     alt="">
                            </td>
                            <td>{{$motor->jenis->name}}</td>
                            <td>{{$motor->tipe_motor}}</td>
                            <td>{{$motor->jenis_transmisi}}</td>
                            <td>{{$motor->harga_motor}}</td>
                            <td>{{$motor->warna}}</td>
                            <td>{{$motor->kapasitas_mesin}}</td>
                            <td>{{$motor->kapasitas_tengki}}</td>
                            <td>{{$motor->kapasitas_bagasi}}</td>
                            <td>{{$motor->berat}}</td>
                            <td>{{$motor->tenaga_maksimal}}</td>
                            <td>{{$motor->ban_depan}}</td>
                            <td>{{$motor->ban_belakang}}</td>
                            <td>{{$motor->jenis_ban}}</td>
                            <td>
                                <a href="{{ route('pusat.motor.edit', $motor) }}"
                                   onclick="return confirm('Yakin Anda ingin mengedit Data ini ?')">
                                    <i class='fa fa-edit' style='font-size:25px;color:blue' alt="logo" title="Edit"></i>
                                </a>
                                <a href="{{ route('pusat.motor.delete', $motor) }}"
                                   onclick="return confirm('Yakin Anda ingin menghapus Data ini ?')">
                                    <i class='fa fa-trash' style='font-size:25px;color:red' title="Hapus"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
{{--            </div>--}}
            <!--End Tabel-->

        </div>
    </div>

@endsection


@section('footer')
@stop