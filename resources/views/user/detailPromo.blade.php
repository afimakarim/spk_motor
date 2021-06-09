@extends('templateUsers')
@section('main')
    <!-- Start Align Area -->
    <section class="feature_part padding_top">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6">
                    <div class="feature_img">
                        <img src="{{ asset('storage/' . $promo->gambar) }}" style="height: 600px;width: auto" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="feature_part_text">
                        <img src="{{asset('img/promotion.png')}}" style="height: 50px;width: auto;" alt="#">
                        <h2>{{ $promo->judul }}</h2>
                        <span>
                            {{$promo->ket_promo}}
                        </span><br><br>
                        <div class="row">
                            <div class="col-sm-6 col-md-4">
                                <div class="feature_part_text_iner">
                                    <h4></i>Telephone</h4>
                                    <p>
                                        {{$promo->dealer->telephone}}
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-8 col-md-8">
                                <div class="feature_part_text_iner">
                                    <h4>Lokasi</h4>
                                    <p>
                                        {{$promo->dealer->alamat}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><br><br>

    <section class="card-body">
        <div class="container">
            <div class="row">
                <div class="comment-form">
                    <h4>Komentar</h4>
                    <form class="form-contact comment_form" method="post" action="{{ route('user.komentar', $promo) }}"
                          id="commentForm">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                  <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                            placeholder="Masukan Komentar" required></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="name" id="name" type="text"
                                           placeholder="Masukan Nama" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="email" id="email" type="email"
                                           placeholder="Masukan Email" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm btn_1">
                                Kirim Komentar <i class="flaticon-right-arrow"></i>
                            </button>
                        </div>
                    </form>
                    <div class="comments-area">
                        <h4>{{ $komentars->count() }} Comments</h4>
                        @foreach($komentars as $komentar)
                            <div class="comment-list">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="desc">
                                            <p class="comment">
                                                {{ $komentar->komentar }}
                                            </p>
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <h5>
                                                        @if($komentar->is_admin)
                                                            <a><font color="#1e90ff">{{ $komentar->nama }}</font> </a>
                                                        @else
                                                            <a>{{ $komentar->nama }} </a>
                                                        @endif
                                                    </h5>
                                                    <p class="date">{{ \Carbon\Carbon::parse($komentar->created_at)->format('d, F Y H:i') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </section>

@stop
@section('footerUser')
@stop

