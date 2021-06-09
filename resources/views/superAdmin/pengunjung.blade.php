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

            <!--Tabel -->
            <table id="myTable" class="table table-bordered text-center">

                <thead>
                <tr style="background-color: Gainsboro;">
                    <th scope="col">Nama Pengunjung</th>
                    <th scope="col">pengunjung_id</th>
{{--                    <th scope="col">Hasil</th>--}}
{{--                    <th scope="col">Harga Motor</th>--}}
{{--                    <th scope="col">Kapasitas Mesin</th>--}}
{{--                    <th scope="col">Berat</th>--}}
{{--                    <th scope="col">Kapasitas Tengki</th>--}}
{{--                    <th scope="col">Kapasitas Bagasi</th>--}}
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
                    @endphp
                <tr>
                    <td>{{ $d->name }}
                    </td>

                    <td><a href="{{ url('superAdmin/pengunjung',[$d->kunjungan_id]) }}">{{ $d->kunjungan_id }}</a>
                    </td>

{{--                    <td>--}}
{{--                        @php--}}
{{--                            $merek = Merek::find( $m->merek_id);--}}
{{--                        @endphp--}}
{{--                        {{ $merek->name  }}--}}
{{--                    </td>--}}

{{--                    <td>{{ $m -> harga_motor }}--}}
{{--                    </td>--}}

{{--                    <td>{{ $m->kapasitas_mesin }}--}}
{{--                    </td>--}}

{{--                    <td>{{ $m->berat }}--}}
{{--                    </td>--}}
{{--                    <td>{{ $m->kapasitas_tengki }}--}}
{{--                    </td>--}}
{{--                    <td>{{ $m->kapasitas_bagasi }}--}}
{{--                    </td>--}}

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