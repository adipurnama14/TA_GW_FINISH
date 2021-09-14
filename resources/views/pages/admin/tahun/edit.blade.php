@extends('layouts.admin')

@section('title', 'Ubah Tahun')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Data Tahun</h1>
    </div>

    <div class="card shadow">
        <div class="card-body">
           <form action="{{ route('tahun.update', $item->id) }}" method="POST">
               @csrf

               @method('put')

            <div class="form-group">
                <label for="">Tahun</label>
                <input type="text" name="tahun" class="form-control" value="{{ $item->tahun }}" placeholder="Tahun">
            </div>



               <button class="btn btn-block btn-warning" type="submit">
                Ubah
               </button>
           </form>
        </div>
    </div>




</div>
@endsection
