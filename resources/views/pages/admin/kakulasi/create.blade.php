@extends('layouts.admin')

@section('title', 'Input perhitungan jarak')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Perhitungan Jarak</h1>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('kakulasi.tambah_kakulasi') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="">Mahasiswa</label>
                    <select name="mahasiswa_id" class="form-control">
                        <option value="">Pilih Mahasiswa</option>
                        @foreach ($mahasiswa as $mahasiswa)
                        <option value="{{ $mahasiswa->id }}">{{ $mahasiswa->nama_lengkap }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="">IPK</label>
                    <input type="text" name="ipk" class="form-control" value="{{ old('ipk') }}">
                </div>

                <div class="form-group">
                    <label for="">Kejuaraan</label>
                    <input type="text" name="kejuaraan" class="form-control" value="{{ old('kejuaraan') }}">
                </div>

                <div class="form-group">
                    <label for="">Akademik</label>
                    <input type="text" name="akademik" class="form-control" value="{{ old('akademik') }}">
                </div>

                <div class="form-group">
                    <label for="">Non Akademik</label>
                    <input type="text" name="non_akademik" class="form-control" value="{{ old('non_akademik') }}">
                </div>

                <button class="btn btn-sm btn-primary" type="submit">
                    proses
                </button>


            </form>
        </div>
    </div>




</div>
@endsection
