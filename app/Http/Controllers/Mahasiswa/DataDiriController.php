<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DataDiriController extends Controller
{
    public function index(){

        $user = Auth::user()->id;

        $items = Mahasiswa::whereHas('user', function($q) use($user){
            return $q->where('user_id', $user);
        })->
        with(['jurusan'])
        ->get();

        return view('pages.mahasiswa.data-diri.index', [
            'items' => $items
        ]);
    }
}
