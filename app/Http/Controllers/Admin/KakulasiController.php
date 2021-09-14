<?php

namespace App\Http\Controllers\Admin;

use App\Dataset;
use App\Http\Controllers\Controller;
use App\Kakulasi;
use App\Mahasiswa;
use Illuminate\Http\Request;

class KakulasiController extends Controller
{
    public function index(){
        $items = Kakulasi::with(['mahasiswa'])->get();
        return view('pages.admin.kakulasi.index', [
            'items' => $items
        ]);
    }

    public function halaman_input(){
        $mahasiswa = Mahasiswa::all();
        return view('pages.admin.kakulasi.create', [
            'mahasiswa' => $mahasiswa
        ]);
    }

    public function tambah_kakulasi(Request $request){
        $data = $request->all();

        Kakulasi::create($data);
    }

    // public function perhitungan(Request $request, $id){
    //     $id_kakulasi = Kakulasi::find($id);

    //     // dd($id_kakulasi);

    //     // mendapatkan data kakulasi
    //     $kakulasi = Kakulasi::where('id', $id_kakulasi->id)->first();

    //     // data kakulasi
    //     $ipk = $kakulasi->ipk;
    //     $kejuaraan = $kakulasi->kejuaraan;
    //     $akademik = $kakulasi->akademik;
    //     $non_akademik = $kakulasi->non_akademik;

    //     // data aset
    //     $datapertama = Dataset::skip(0)->take(1)->get();

    //     // looping data set pertama
    //     foreach($datapertama as $dpertama);
    //     $ipk_set_pertama = $dpertama->ipk;
    //     $kejuaraan_pertama = $dpertama->kejuaraan;
    //     $akademik_pertama = $dpertama->akademik;
    //     $non_akademik_pertama = $dpertama->non_akademik;

    //     // perhitungan_data_ipk_peratama
    //     $ipk_pertama_data_set_dan_data_ipk_kakulasi =  ($ipk_set_pertama - $ipk) * ($ipk_set_pertama - $ipk);
    //     $kakulasi_pertama_data_set_dan_ipk_kakulasi = ($kejuaraan_pertama - $kejuaraan) * ($kejuaraan_pertama - $kejuaraan);
    //     $akademik_pertama_dan_akademik = ($akademik_pertama - $akademik) * ($akademik_pertama - $akademik);
    //     $non_akademik_peratama_dan_non_akademik = ($non_akademik_pertama - $non_akademik) - ($non_akademik_pertama - $non_akademik);


    //     $JMLH_pertama =  $ipk_pertama_data_set_dan_data_ipk_kakulasi + $kakulasi_pertama_data_set_dan_ipk_kakulasi + $akademik_pertama_dan_akademik + $non_akademik_peratama_dan_non_akademik;

    //     $k_jmlh_pertama = sqrt($JMLH_pertama);



    // }
}
