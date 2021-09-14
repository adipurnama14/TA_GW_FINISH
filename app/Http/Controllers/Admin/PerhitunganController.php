<?php

namespace App\Http\Controllers\Admin;

use App\Dataset;
use App\Http\Controllers\Controller;
use App\Kakulasi;
use App\Perhitungan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\VarDumper\Cloner\Data;

class PerhitunganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // bagian baca perhitungan

        $items = Perhitungan::with(['dataset', 'kakulasi'])->orderBy('jarak', 'ASC')->get();


        return view('pages.admin.perhitungan.index', [
            'items' => $items,
            // 'hasil' => $hasil
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kakulasi = Kakulasi::all();
        $dataset = Dataset::all();
        return view('pages.admin.perhitungan.halaman_input_data', [
            'kakulasi' => $kakulasi,
            'dataset' => $dataset
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        Perhitungan::create($data);

        return redirect()->route('perhitungan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $item = Perhitungan::find($id);

        $item->delete();

        return redirect()->route('perhitungan.index');
    }
}
