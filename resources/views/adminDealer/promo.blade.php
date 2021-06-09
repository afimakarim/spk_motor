@extends('templateAdminDealer')
@section('main')

    <div class="right_col" role="main">
        <div class="page-title">
            <div class="title_left">
                <h3>Daftar Promo Motor </h3>
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
                            <h5 class="modal-title" id="staticBackdropLabel">Tambah Promo</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('dealer.promo.store')}}" method="post"
                                  enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="gambar_promo">Gambar Promo </label>
                                    <input type="file" class="form-control" id="gambar_promo" name="gambar" required>
                                </div>
                                <div class="form-group">
                                    <label for="tipe_motor">Tipe Motor</label>
                                    <select class="form-control" id="" multiple="multiple" name="tipe_motor[]" required>
                                        @foreach($motors as $motor)
                                            <option value="{{ $motor->id }}">{{ $motor->tipe_motor }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="judul_promo">Judul Promo</label>
                                    <textarea type="text" id="" cols="30" rows="5" class="form-control" name="judul" placeholder="Judul Promo" required></textarea>

                                </div>
                                <div class="form-group">
                                    <label for="keterangan_promo">Keterangan Promo</label>
                                    <textarea type="text" id="" cols="30" rows="5" class="form-control" name="ket_promo" placeholder="Keterangan Promo" required></textarea>

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
            <table id="myTable" class="table-responsive table table-bordered text-center table-sm">
                <thead>
                <tr style="background-color: Gainsboro;">
                    <th scope="col">Gambar Promo</th>
                    <th scope="col">Tipe Motor</th>
                    <th scope="col">Judul Promo</th>
                    <th scope="col">Keterangan Promo</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($promos as $promo)
                <tr>
                    <td>
                        <img src="{{ asset("storage/$promo->gambar") }}" style="height: 100px; width: auto"
                             alt="">
                    </td>
                    <td>{{$promo->motor->tipe_motor}}</td>
                    <td style="text-align:left;">{{$promo->judul}}</td>
                    <td style="text-align:left;">{{$promo->ket_promo}}</td>
                    <td>
                        <a href="{{ route('dealer.promo.edit', $promo) }}"
                           onclick="return confirm('Yakin Anda ingin mengedit Data ini ?')">
                            <i class='fa fa-edit' style='font-size:25px;color:blue' alt="logo" title="Edit"></i>
                        </a>
                        <a href="{{ route('dealer.promo.delete', $promo) }}"
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




@stop
@section('footer')
@stop