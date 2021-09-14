<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jurusan;
use App\Mahasiswa;
use App\User;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Mahasiswa::with(['jurusan', 'user'])->paginate(5);

        return view('pages.admin.mahasiswa.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jurusan = Jurusan::all();
        $user = User::all()->where('role', 'user')->whereIn('status_akun', '');

        return view('pages.admin.mahasiswa.create', [
            'jurusan' => $jurusan,
            'user' => $user
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

        if($request->hasFile('gambar')){
            $penyimpanan = 'public/gambar';
            $gambar = $request->file('gambar');
            $ext = $gambar->getClientOriginalName();
            $upload = $request->file('gambar')->storeAs($penyimpanan, $ext);

            $data['gambar'] = $ext;
        }

        // dd($data);

        Mahasiswa::create($data);


        User::with(['mahasiswa'])->where('id', $request->user_id)->update([
            'status_akun' => 'sudah digunakan'
        ]);


        return redirect()->route('mahasiswa.index')->with('status', 'Data berhasil ditambah');
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
        $item = Mahasiswa::find($id);
        $user = User::all()->where('role', 'user')->whereIn('status_akun', '');
        $jurusan = Jurusan::all();

        return view('pages.admin.mahasiswa.edit', [
            'item' => $item,
            'user' => $user,
            'jurusan' => $jurusan
        ]);
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
        $item = Mahasiswa::find($id);

        $data = $request->all();

        if($request->hasFile('gambar')){
            $penyimpanan = 'public/gambar';
            $gambar = $request->file('gambar');
            $ext = $gambar->getClientOriginalName();
            $upload = $request->file('gambar')->storeAs($penyimpanan, $ext);

            $data['gambar'] = $ext;
        }

        $item->update($data);


        return redirect()->route('mahasiswa.index')->with('status', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Mahasiswa::find($id);

        $item->delete();

        return redirect()->route('mahasiswa.index')->with('status', 'Data berhasil dihapus');
    }
}
