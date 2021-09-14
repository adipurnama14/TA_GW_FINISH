<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Dataset;
use App\Http\Controllers\Controller;
use App\Kakulasi;
use App\Pengajuan;
use App\Perhitungan;
use App\Perpanjangan;
use App\Semester;
use App\Tahun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PerpanjanganController extends Controller
{
    public function halaman_input(){
        $semester = Semester::all();
        $tahun = Tahun::all();

        return view('pages.mahasiswa.perpanjangan.input-pengajuan', [
            'semester' => $semester,
            'tahun' => $tahun
        ]);
    }

    public function proses_perpanjangan(Request $request){
        $data = $request->all();

        // user login
        $user = Auth::user();

        // mahasiswa berlasi user
        $mahasiswa_id = $user->mahasiswa->id;

        $data['mahasiswa_id'] = $mahasiswa_id;


        // input
        if($request->file('ipk')){
            $penyimpanan = 'public/gambar';
            $kejuaraan = $request->file('ipk');
            $ext = $kejuaraan->getClientOriginalName();
            $upload = $request->file('ipk')->storeAs($penyimpanan, $ext);

            $data['ipk'] = $ext;
        }


        // input kejuaraan
        if($request->file('kejuaraan')){
            $penyimpanan = 'public/gambar';
            $kejuaraan = $request->file('kejuaraan');
            $ext = $kejuaraan->getClientOriginalName();
            $upload = $request->file('kejuaraan')->storeAs($penyimpanan, $ext);

            $data['kejuaraan'] = $ext;
        }

        // input akademik
        if($request->file('akademik')){
            $penyimpanan = 'public/gambar';
            $kejuaraan = $request->file('akademik');
            $ext = $kejuaraan->getClientOriginalName();
            $upload = $request->file('akademik')->storeAs($penyimpanan, $ext);

            $data['akademik'] = $ext;
        }



        // input non akademik
        if($request->file('non_akademik')){
            $penyimpanan = 'public/gambar';
            $kejuaraan = $request->file('non_akademik');
            $ext = $kejuaraan->getClientOriginalName();
            $upload = $request->file('non_akademik')->storeAs($penyimpanan, $ext);

            $data['non_akademik'] = $ext;
        }
        Perpanjangan::create($data);

        return redirect()->route('dataperpanjangan');
    }

    public function data_perpanjangan_beasiswa(){
        $user = Auth::user();
        $mahasiswa_id = $user->mahasiswa->id;


        $items = Perpanjangan::whereHas('mahasiswa',
         function($q) use($mahasiswa_id){
            return $q->where('mahasiswa_id', $mahasiswa_id);
        })
        ->with(['tahun', 'semester'])
        ->get();


        $data_kakulasi = Kakulasi::with(['mahasiswa'])->where('mahasiswa_id', $mahasiswa_id)->first();

        $id_kakulasi = $data_kakulasi->id;

        if ($items->isEmpty()) {
           return view('pages.mahasiswa.perpanjangan.data-perpanjangan', [
               'items' => $items

           ]);
        } else {
            $layak1 = Perhitungan::whereHas('kakulasi', function($q) use($id_kakulasi){
                return $q->where('kakulasi_id', $id_kakulasi);
        })->with(['dataset'])->orderby('jarak')->limit(3)->skip(0)->take(1)->get();

        $layak2 = Perhitungan::whereHas('kakulasi', function($q) use($id_kakulasi){
            return $q->where('kakulasi_id', $id_kakulasi);
      })->with(['dataset'])->orderby('jarak')->limit(3)->skip(1)->take(1)->get();

      foreach($layak2 as $layak2);
      $status_k2 = $layak2->dataset->keputusan;

      $layak3 = Perhitungan::whereHas('kakulasi', function($q) use($id_kakulasi){
        return $q->where('kakulasi_id', $id_kakulasi);
  })->with(['dataset'])->orderby('jarak')->limit(3)->skip(2)->take(1)->get();

    foreach($layak3 as $layak3);
    $status_k3 = $layak3->dataset->keputusan;


    $keputusan_ada = '';

    if($status_k3 == 'Layak' && $status_k2 == 'Layak'){
        $keputusan_ada = 'Layak';
    }else{
        $keputusan_ada = 'Tidak Layak';
    }









        return view('pages.mahasiswa.perpanjangan.data-perpanjangan', [
            'items' => $items,
            'keputusan_ada' => $keputusan_ada
        ]);

        }



    }
}
