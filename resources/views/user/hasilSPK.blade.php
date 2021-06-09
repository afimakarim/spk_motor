@extends('templateUsers')
@section('main')
    <!-- blog part start-->
    <section class="cta_part section_padding">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-8 col-xl-9">
                    <div class="cta_text text-center">

                        <h5>Kalkulasi Perhitungan Selesai</h5>
                        <h2>Daftar Sepeda Motor Yang Disarankan</h2>
                        <h3 class="text-left">Dari semua Alternatif Sepeda Motor yang disarankan. Yang mempunyai nilai
                            Tertinggi sebagai alternatif paling
                            direkomendasikan</h3>

                    </div>
                    <table id="myTable" class="table table-bordered text-center">
                        <thead>
                        <tr style="background-color: Gainsboro;">
                            <th>No</th>
                            <th>Gambar Motor</th>
                            <th>Merek Motor</th>
                            <th>Tipe Motor</th>
                            <th>Nilai Akhir Bobot</th>
                            <th></th>
                        </tr>
                        </thead>
                        @php
                            use App\Motor;
                            use App\Merek;
                            $i = 1;
                        @endphp

                        <tbody>
                        @foreach($data as $d)
                            @php
                                $m = Motor::find($d->motor_id);
                                $merek = Merek::find($m->merek_id);
                            @endphp
                            <tr>
                                <td>{{$i}}</td>
                                <td>
                                    <img src="{{ asset("storage/$m->gambar") }}" style="height: 100px; width: auto"
                                         alt="">
                                </td>
                                <td>
                                    {{ $merek->name  }}
                                </td>
                                <td>
                                    {{$m->tipe_motor}}
                                </td>
                                <td>
                                    {{$d->vektor_v}}
                                </td>
                                <td>
                                    <a href="{{ route('user.show.motor', $m) }}" class="genric-btn primary-border ">Lihat<span
                                                class="lnr lnr-arrow-right"></span></a>
                                </td>
                            </tr>
                            @php
                                $i++;
                            @endphp
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
    </section>

@stop
@section('footerUser')
@stop
