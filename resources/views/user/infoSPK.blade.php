@extends('templateUsers')
@section('main')

    <!-- banner part start-->
    <section class="banner_part3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-9">
                    <div class="banner_text2">
                        <div class="banner_text_iner">
                            <h5>Sistem Pendukung Keputusan   ????</h5>
                            <h1>Weighted Product (WP)</h1>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=" sample-text-area">
        <div class="container box_1170">
            <h4 class="text-heading">Sistem Pendukung Keputusan</h4>
            <p class="sample-text">
                Sistem Pendukung Keputusan (SPK) adalah suatu sistem informasi berbasis komputer yang melakukan pendekatan
                untuk menghasilkan berbagai alternatif keputusan untuk membantu pihak tertentu dalam menangani permasalahan
                dengan menggunakan data dan model. SPK hanya memberikan alternatif keputusan dan selanjutnya diserahkan
                kepada user untuk mengambil keputusan.
            </p>
        </div>
    </section>
    <section class="sample-text-area">
        <div class="container box_1170">
            <h4 class="text-heading">Metode Weighted Product</h4>
            <p class="sample-text">
                Metode Weighted Product (WP) merupakan salah satu metode untuk menyelesaikan masalah Multi Attribute
                Decision Making(MADM) yang menggunakan perkalian untuk menghubungkan rating atribut,dimana rating setiap
                atribut harus dipangkatkan dulu dengan bobot atribut yang bersangkutan.
                Dan hasil akhir sebagai rekomendasi dalam metode WP yaitu perhitungan dengan nilai Besar.
                proses tersebut sama halnya dengan proses normalisasi.
                Pembobotan metode Weighted Product dihitung berdasarkan tingkat kepentingan.
                Tingkat kepentingan metode Weghted Product, yaitu : <br>

                1. Sangat Tidak Penting<br>
                2. Tidak Penting<br>
                3. Cukup Penting<br>
                4. Penting<br>
                5. Sangat Penting<br>
                <br>
                Langkah-langkah penyelesaian WP sebagai berikut:
                <br><br>
                <strong>1. Menentukan kriteria-kriteria </strong><br>
                Yaitu kriteria yang akan dijadikan acuan dalam pengambilan keputusan, yaitu Ci dan sifat dari masing-masing kriteria. <br><br>
                <strong>2. Menentukan rating </strong> <br>
                Yaitu rating kecocokan setiap alternatif pada setiap kriteria, dan buat matriks keputusan. <br><br>
                <strong>3. Melakukan normalisasi bobot</strong><br>
                Bobot Ternormalisasi = Bobot setiap kriterian / penjumlahan semua bobot kriteria.<br>
                Nilai dari total bobot harus memenuhi persamaan: <br><br>
                <img src="{{asset('template/img/rumus1.jpg')}}" style="height: 50px; width: auto" alt="..."> <br><br>
                <strong>4. Menentukan nilai vektor S</strong><br>
                Dengan cara mengalikan seluruh kriteria bagi sebuah alternatif dengan bobot sebagai pangkat positif untuk
                kriteria benefit dan bobot berfungsi sebagai pangkat negatif pada kriteria cost.<br>
                Rumus untuk menghitung nilai preferensi untuk alternatif Ai, diberikan sebagai berikut:<br><br>
                <img src="{{asset('template/img/rumus2.jpg')}}" style="height: 50px; width: auto" alt="..."> <br>
                Keterangan:<br>

                S : menyatakan preferensi alternatif yang dianalogikan sebagai vektor S<br>
                x : menyatakan nilai kriteria<br>
                w : menyatakan bobot kriteria<br>
                i : menyatakan alternatif<br>
                j : menyatakan kriteria<br>
                n : menyatakan banyaknya kriteria<br><br>

                <strong>5. Menentukan nilai vektor V</strong><br>
                Yaitu nilai yang akan digunakan untuk perangkingan.<br>
                Nilai preferensi relatif dari setiap alternatif dapat dihitung dengan rumus:<br><br>
                <img src="{{asset('template/img/rumus3.jpg')}}" style="height: 50px; width: auto" alt="..."> <br>
                Keterangan:<br>
                V : menyatakan preferensi alternatif yang dianalogikan sebagai vektor V<br>
                x : menyatakan nilai kriteria<br>
                w : menyatakan bobot kriteria<br>
                i : menyatakan alternatif<br>
                j : menyatakan kriteria<br>
                n : menyatakan banyaknya kriteria<br><br>
                <strong>6. Merangking Nilai Vektor V </strong><br>
                Sekaligus membuat kesimpulan sebagai tahap akhir.
            </p>
        </div>
    </section>


@stop
@section('footerUser')
@stop

