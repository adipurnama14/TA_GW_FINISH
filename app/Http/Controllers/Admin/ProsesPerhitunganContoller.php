<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Perhitungan;
use Illuminate\Http\Request;

class ProsesPerhitunganContoller extends Controller
{
    // untuk memproses perhitungan metode
    public function peroses(Request $request, $id){
        $item = Perhitungan::with(['dataset', 'kakulasi'])->find($id);


        // id_perhitungan
        $id_perhitugan = $item->id;

        // data kakulasi
        $ipk =   $item->kakulasi->ipk;
        $kejuaraan =  $item->kakulasi->kejuaraan;
        $akademik =  $item->kakulasi->akademik;
        $non_akademik =  $item->kakulasi->non_akademik;

        // data_set
        $ipk_data_set = $item->dataset->ipk;
        $kejuaraan_data_set = $item->dataset->kejuaraan;
        $akademik_data_set = $item->dataset->akademik;
        $non_akademik_data_set = $item->dataset->non_akademik;

        $perhitungan_ipk = ( $ipk_data_set - $ipk) * ( $ipk_data_set - $ipk);
        $pehitungan_kejuaraan = ($kejuaraan_data_set - $kejuaraan) * ($kejuaraan_data_set - $kejuaraan);
        $perhitungan_akademik = ($akademik_data_set - $akademik) * ($akademik_data_set - $akademik);
        $perhitungan_non_akademik = ($non_akademik_data_set - $non_akademik) * ($non_akademik_data_set - $non_akademik);

        $jmlh_awal = $perhitungan_ipk + $pehitungan_kejuaraan + $perhitungan_akademik + $perhitungan_non_akademik;
        $jumlah_akhir = sqrt($jmlh_awal);

        $ubah =     Perhitungan::where('id', $item->id)->update([
            'jarak' => $jumlah_akhir
        ]);

        return redirect()->route('perhitungan.index');

    }
}
