@extends('layouts.admin')

@section('title', 'Tambah data perhitungan jarak')
@section('content')
<div class="container-fluid">


    <div class="card shadow">
        <div class="card-body">
           <form action="{{ route('perhitungan.store') }}" method="POST">
               @csrf

            <div class="form-group">
                <label for="">Kakulasi</label>
                <select name="kakulasi_id" class="form-control">
                    <option value="">Pilih data kakulasi</option>
                    @foreach ($kakulasi as $kakulasi)
                    <option value="{{ $kakulasi->id }}">{{ 'id kakulasi ='.$kakulasi->id .' '. $kakulasi->mahasiswa->nama_lengkap }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="">Dataset</label>
                <select name="dataset_id" class="form-control">
                    <option value="">Pilih data dataset</option>
                    @foreach ($dataset as $dataset)
                    <option value="{{ $dataset->id }}">{{ 'id_dataset ='.$dataset->id.' '.$dataset->keputusan }}</option>
                    @endforeach
                </select>
            </div>



               <button class="btn btn-block btn-primary" type="submit">
                Input
               </button>
           </form>
        </div>
    </div>




</div>
@endsection
