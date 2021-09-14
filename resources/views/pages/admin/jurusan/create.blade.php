@extends('layouts.admin')

@section('title', 'Tambah Jurusan')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Data Jurusan</h1>
    </div>

    <div class="card shadow">
        <div class="card-body">
           <form action="{{ route('jurusan.store') }}" method="POST">
               @csrf

            <div class="form-group">
                <label for="">Kode Jurusan</label>
                <input type="text" name="kode_jurusan" class="form-control" value="{{ old('kode_jurusan') }}" placeholder="Kode Jurusan">
            </div>

            <div class="form-group">
                <label for="">Nama Jurusan</label>
                <input type="text" name="nama_jurusan" class="form-control" value="{{ old('nama_jurusan') }}" placeholder="Nama Jurusan">
            </div>



               <button class="btn btn-block btn-primary" type="submit">
                Simpan
               </button>
           </form>
        </div>
    </div>




</div>
@endsection
