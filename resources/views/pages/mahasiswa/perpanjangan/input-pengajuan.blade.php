@extends('layouts.mahasiswa')


@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Input Pengajuan Beasiswa</h1>


    </div>

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('proses.perpanjangan') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="">Semester</label>
                    <select name="semester_id" class="form-control">
                        <option value="">Pilih Semester</option>
                        @foreach ($semester as $semester)
                        <option value="{{ $semester->id }}">{{ $semester->semester }}</option>
                        @endforeach
                    </select>
                </div>


                <div class="form-group">
                    <label for="">Tahun</label>
                    <select name="tahun_id" class="form-control">
                        <option value="">Pilih Tahun</option>
                        @foreach ($tahun as $tahun)
                        <option value="{{ $tahun->id }}">{{ $tahun->tahun }}</option>
                        @endforeach
                    </select>
                </div>

             <div class="form-group">
                <label for="">IPK</label>
                <input type="file" name="ipk" class="form-control-file">
             </div>

                <div class="form-group">
                    <label for="">Kejuaraan</label>
                    <input type="file" name="kejuaraan" class="form-control-file">
                </div>


                <div class="form-group">
                    <label for="">Akademik</label>
                    <input type="file" name="akademik" class="form-control-file">
                </div>


                <div class="form-group">
                    <label for="">Non Akademik</label>
                    <input type="file" name="non_akademik" class="form-control-file">
                </div>

                <button class="btn btn-block btn-primary" type="submit">
                    Simpan
                </button>
            </form>
        </div>
    </div>



</div>
@endsection
