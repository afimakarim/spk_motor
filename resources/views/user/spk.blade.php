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
                        <p>Masukan Nama Anda</p>
                        @php
                        Session::forget('nama');
                        @endphp
                        <form action=" {{url('pengunjung',[])}} " method="post"  >
                            {{ csrf_field() }}
                        <div class="input-group">
                            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" aria-label="Recipient's username with two button addons" aria-describedby="button-addon4" required>
                            <div class="input-group-append" id="button-addon4">
                                <input type="submit" class="subs_btn" value="Mulai">
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

@stop
@section('footerUser')
@stop

