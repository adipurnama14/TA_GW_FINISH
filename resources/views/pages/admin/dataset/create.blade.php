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
           <form action="{{ route('dataaset.store') }}" method="POST">
               @csrf

            <div class="form-group">
                <label for="">Npm</label>
                <input type="text" name="npm" class="form-control" placeholder="Npm" value="{{ old('npm') }}">
            </div>

            <div class="form-group">
                <label for="">Ipk</label>
                <input type="text" name="ipk" class="form-control" placeholder="Non Akademik" value="{{ old('non_akademik') }}">
            </div>

            <div class="form-group">
                <label for="">Kejuaraan</label>
                <input type="text" name="kejuaraan" class="form-control" placeholder="Kejuaraan" value="{{ old('kejuaraan') }}">
            </div>

            <div class="form-group">
                <label for="">Akademik</label>
                <input type="text" name="akademik" class="form-control" placeholder="Akademik" value="{{ old('akademik') }}">
            </div>

            <div class="form-group">
                <label for="">Non Akademik</label>
                <input type="text" name="non_akademik" class="form-control" placeholder="Non Akademik" value="{{ old('non_akademik') }}">
            </div>

            <div class="form-group">
                <label for="">Keputusan</label>
                <input type="text" name="keputusan" class="form-control" placeholder="Keputusan" value="{{ old('keputusan') }}">
            </div>

               <button class="btn btn-block btn-primary" type="submit">
                Simpan
               </button>
           </form>
        </div>
    </div>




</div>
@endsection
