@extends('templateUsers')
@section('main')
    <!-- blog part start-->
    <section class="cta_part section_padding">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-8 col-xl-9">
                    <div class="cta_text text-center">
                        <h5>Welcome</h5>
                        <h5>Sistem Pendukung Keputusan</h5>
                        <h2>Konsultasikan Motor Impian Anda</h2>
                        <p>Pilih Jenis Motor dan Tingkat Kepentingan</p>

                            @php

                                use App\Jenis;
                                $data = Jenis::all();
                            @endphp
                        <form action="{{url("pengunjung",[])}}" method="post">
                            {{ csrf_field()  }}
                            <div class="input-group">
                                <select name="jenis" class="form-control custom_select3">
                                    <option value=""  disabled selected > -- Jenis Motor -- </option>

                            @foreach($data as $item)
                                    <option value= "{{$item->id}} "> {{$item->name}} </option>
                            @endforeach
                                    <option value="0">Semua</option>
                                </select>
                            </div><br>
                            <div class="input-group">
                                <select name="harga"  class="form-control custom_select3" required>
                                    <option value=""  disabled selected > -- Harga Motor -- </option>
                                    <option value="5">(5) Sangat Penting</option>
                                    <option value="4">(4) Penting</option>
                                    <option value="3">(3) Cukup Penting</option>
                                    <option value="2">(2) Tidak Penting</option>
                                    <option value="1">(1) Sangat Tidak Penting</option>
                                </select>
                            </div><br>
                            <div class="input-group">
                                <select name="mesin" class="form-control custom_select3" required>
                                    <option value=""  disabled selected > -- Kapasitas Mesin -- </option>
                                    <option value="5">(5) Sangat Penting</option>
                                    <option value="4">(4) Penting</option>
                                    <option value="3">(3) Cukup Penting</option>
                                    <option value="2">(2) Tidak Penting</option>
                                    <option value="1">(1) Sangat Tidak Penting</option>
                                </select>
                            </div><br>
                            <div class="input-group">
                                <select name="tengki" class="form-control custom_select3" required>
                                    <option value=""  disabled selected > -- Kapasitas Tengki -- </option>
                                    <option value="5">(5) Sangat Penting</option>
                                    <option value="4">(4) Penting</option>
                                    <option value="3">(3) Cukup Penting</option>
                                    <option value="2">(2) Tidak Penting</option>
                                    <option value="1">(1) Sangat Tidak Penting</option>
                                </select>
                            </div><br>
                            <div class="input-group">
                                <select name="bagasi" class="form-control custom_select3" required>
                                    <option value=""  disabled selected > -- Kapasitas Bagasi -- </option>
                                    <option value="5">(5) Sangat Penting</option>
                                    <option value="4">(4) Penting</option>
                                    <option value="3">(3) Cukup Penting</option>
                                    <option value="2">(2) Tidak Penting</option>
                                    <option value="1">(1) Sangat Tidak Penting</option>
                                </select>
                            </div><br>
                            <div class="input-group">
                                <select name="berat" class="form-control custom_select3" required>
                                    <option value=""  disabled selected > -- Berat Isi-- </option>
                                    <option value="5">(5) Sangat Penting</option>
                                    <option value="4">(4) Penting</option>
                                    <option value="3">(3) Cukup Penting</option>
                                    <option value="2">(2) Tidak Penting</option>
                                    <option value="1">(1) Sangat Tidak Penting</option>
                                </select>
                            </div><br>
                            <input type="submit" value="Hasil" class="genric-btn primary circle">
                        </form>
                            </div>
                            </div>
                    </div>
                </div>
    </section>

@stop
@section('footerUser')
@stop

