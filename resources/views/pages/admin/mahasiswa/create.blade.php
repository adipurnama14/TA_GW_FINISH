@extends('layouts.admin')

@section('title', 'Tambah Mahasiswa')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Data Mahasiswa</h1>
    </div>

    <div class="card shadow">
        <div class="card-body">
           <form action="{{ route('mahasiswa.store') }}" method="POST" enctype="multipart/form-data">
               @csrf

            <div class="form-group">
                <label for="">Npm</label>
                <input type="npm" name="npm" class="form-control" value="{{ old('npm') }}" placeholder="Npm">
            </div>

            <div class="form-group">
                <label for="">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" class="form-control" value="{{ old('nama_lengkap') }}" placeholder="Nama Lengkap">
            </div>

            <div class="form-group">
                <label for="">Akun</label>
               <select name="user_id" class="form-control">
                   <option value="">Pilih Akun</option>
                   @foreach ($user as $user)
                    <option value="{{ $user->id}}">{{ $user->email }}</option>
                   @endforeach
               </select>
            </div>


            <div class="form-group">
                <label for="">Jurusan</label>
               <select name="jurusan_id" class="form-control">
                   <option value="">Pilih Jurusan</option>
                   @foreach ($jurusan as $jurusan)
                    <option value="{{ $jurusan->id}}">{{ $jurusan->nama_jurusan }}</option>
                   @endforeach
               </select>
            </div>

            <div class="form-group">
                <label for="">Alamat</label>
                <textarea name="alamat" rows="10" class="form-control"></textarea>
            </div>


            <div class="form-group">
                <label for="">No Telpon</label>
                <input type="text" name="no_telpon" class="form-control" value="{{ old('no_telpon') }}" placeholder="No Telpon">
            </div>

            <div class="form-group">
                <label for="">Nama Orang Tua</label>
                <input type="text" name="nama_orang_tua" class="form-control" value="{{ old('nama_orang_tua') }}" placeholder="Nama Orang Tua">
            </div>


            <div class="form-group">
                <label for="">Gambar</label>
                <input type="file" name="gambar" class="form-control-file">
            </div>






               <button class="btn btn-block btn-primary" type="submit">
                Simpan
               </button>
           </form>
        </div>
    </div>




</div>
@endsection
