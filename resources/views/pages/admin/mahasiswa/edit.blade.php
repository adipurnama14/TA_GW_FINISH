@extends('layouts.admin')

@section('title', 'Ubah Mahasiswa')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Data Mahasiswa</h1>
    </div>

    <div class="card shadow">
        <div class="card-body">
           <form action="{{ route('mahasiswa.update', $item->id) }}" method="POST" enctype="multipart/form-data">
               @csrf
                @method('put')


            <div class="form-group">
                <label for="">Npm</label>
                <input type="npm" name="npm" class="form-control" value="{{ $item->npm }}" placeholder="Npm">
            </div>

            <div class="form-group">
                <label for="">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" class="form-control" value="{{ $item->nama_lengkap }}" placeholder="Nama Lengkap">
            </div>

            <div class="form-group">
                <label for="">Akun</label>
               <select name="user_id" class="form-control">
                   <option value="{{ $item->user_id }}">Jangan Diubah ({{ $item->user->email }})</option>
                   @foreach ($user as $user)
                    <option value="{{ $user->id}}">{{ $user->email }}</option>
                   @endforeach
               </select>
            </div>


            <div class="form-group">
                <label for="">Jurusan</label>
               <select name="jurusan_id" class="form-control">
                   <option value="{{ $item->jurusan_id }}">Data Sebelumnya ({{ $item->jurusan->nama_jurusan }})</option>
                   @foreach ($jurusan as $jurusan)
                    <option value="{{ $jurusan->id}}">{{ $jurusan->nama_jurusan }}</option>
                   @endforeach
               </select>
            </div>

            <div class="form-group">
                <label for="">Alamat</label>
                <textarea name="alamat" rows="10" class="form-control">{{ $item->alamat }}</textarea>
            </div>


            <div class="form-group">
                <label for="">No Telpon</label>
                <input type="text" name="no_telpon" class="form-control" value="{{ $item->no_telpon }}" placeholder="No Telpon">
            </div>

            <div class="form-group">
                <label for="">Nama Orang Tua</label>
                <input type="text" name="nama_orang_tua" class="form-control" value="{{ $item->nama_orang_tua }}" placeholder="Nama Orang Tua">
            </div>

            <div class="col">
                <img src="{{ Storage::url('gambar/'.$item->gambar) }}" alt="" width="150px" class="img-thumbnail">
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
