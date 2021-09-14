<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard_mahasiswa(){
        return view('pages.mahasiswa.dashboard');
    }
}
