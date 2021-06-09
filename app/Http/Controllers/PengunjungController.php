<?php

namespace App\Http\Controllers;
use App\pengunjung;
use App\Promo;
use Session;
use App\Motor;
use Illuminate\Http\Request;

class PengunjungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = pengunjung::groupBy("kunjungan_id")->get();
//        return $data;
        return view('user.hasilSPK',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->has("nama")) {
            Session::push("nama", $request->nama);
            return view("user.spk2");
        } elseif ($request->has("jenis")) {
            $idkunjungan = random_int(111111111,999999999);
            $jenis_id = $request->jenis;
            $harga = $request->harga;
            $mesin = $request->mesin;
            $tengki = $request->tengki;
            $bagasi = $request->bagasi;
            $berat = $request->berat;
            $bobot = [$harga, $mesin, $tengki, $bagasi, $berat];
//return $harga;
            $normalizebobot = [];
            $i = 1;
            foreach ($bobot as $b) {
                $sumbobot = array_sum($bobot);
                if ($i == 1) {
                    array_push($normalizebobot, round($b / $sumbobot, 9) * -1);
                } else {
                    array_push($normalizebobot, round($b / $sumbobot, 9));
                }
                $i++;
            }
//return $normalizebobot;

//        dd($request->all());
                // jumlah angka dibelakang koma
                $digit_decimal = 18;

                // ambil semua alternatif dalam database
                if ($jenis_id == 0) {
                    $motors = Motor::all();
                } else {
                    $motors = Motor::where("jenis_id", $jenis_id)->get();
                }
                $hargaBobot = [];
                $mesinBobot = [];
                $beratBobot = [];
                $tengkiBobot = [];
                $bagasiBobot = [];
                foreach ($motors as $item)
                {
                    $h = $item->harga_motor;
                    array_push($hargaBobot, pow($h, $normalizebobot[0]));
                }
                foreach ($motors as $item)
                {
                    $h = $item->kapasitas_mesin;
                    array_push($mesinBobot, pow($h, $normalizebobot[1]));
                }
                foreach ($motors as $item)
                {
                    $h = $item->kapasitas_tengki;
                    array_push($tengkiBobot, pow($h, $normalizebobot[2]));
                }
                foreach ($motors as $item)
                {
                    $h = $item->kapasitas_bagasi;
                    array_push($bagasiBobot, pow($h, $normalizebobot[3]));
                }
//            $check = [];
                foreach ($motors as $item)
                {
                    $h = $item->berat;
//                    array_push($check,$h);
                    array_push($beratBobot, pow($h, $normalizebobot[4]));
                }
//            $data = ["check"=>$check,"normal"=>$bobot];
//      return $data;
//                            return $hargaBobot;

//      return $motors;
                $vector_s = [];
                for ($i = 0; $i < count($motors); $i++) {
                    array_push($vector_s, $hargaBobot[$i] * $mesinBobot[$i]
                        * $tengkiBobot[$i] * $bagasiBobot[$i] * $beratBobot[$i]);
                }
//                return $vector_s;
//                $data = ["harga"=>$hargaBobot,"mesin"=>$mesinBobot,"tengki"=>$tengkiBobot,
//                    "bagasi"=>$bagasiBobot,"berat"=>$beratBobot];
//                return $data;
                $vector_v = [];
                foreach ($vector_s as $vs) {
                    array_push($vector_v, $vs / array_sum($vector_s));
                }
                $hasil = max($vector_v);
//return $vector_v;
                $nama = Session::get('nama');
                $nama = $nama[0];
                $i = 0;
//return $nama;
//            $fakedatabase=[];
                foreach ($motors as $m) {
                    $data = ["name" => $nama,
                        "motor_id" => $m->id,
                        "kunjungan_id"=>$idkunjungan,
                        "vektor_v" => $vector_v[$i],
                        "hasil" => $hasil];

                    pengunjung::create($data);
//                    array_push($fakedatabase, $data);
                    $i++;
                }
//                return pengunjung::all();
            Session::forget('nama');

               return redirect()->to(url('pengunjung',[$idkunjungan]));
            }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $data = pengunjung::where("kunjungan_id",$id)->orderBy('vektor_v','desc')->take(5)->get();
        return view('user.hasilSPK',compact("data"));
    }

    public function showMotor(Motor $motor)
    {
//        dd($motor);
        $promos = Promo::where('motor_id', $motor->id)->get();
        return view('user.detailMotorSPK', compact('motor', 'promos'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
