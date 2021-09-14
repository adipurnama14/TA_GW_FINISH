@extends('layouts.admin')

@section('title', 'Tambah Semester')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Data Semester</h1>
    </div>

    <div class="card shadow">
        <div class="card-body">
           <form action="{{ route('semester.store') }}" method="POST">
               @csrf

            <div class="form-group">
                <label for="">Semester</label>
                <input type="text" name="semester" class="form-control" value="{{ old('semester') }}" placeholder="Semester">
            </div>



               <button class="btn btn-block btn-primary" type="submit">
                Simpan
               </button>
           </form>
        </div>
    </div>




</div>
@endsection
