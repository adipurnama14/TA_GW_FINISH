@extends('layouts.admin')

@section('title', 'Ubah Semester')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Data Semester</h1>
    </div>

    <div class="card shadow">
        <div class="card-body">
           <form action="{{ route('semester.update', $item->id) }}" method="POST">
               @csrf

               @method('put')

            <div class="form-group">
                <label for="">Semester</label>
                <input type="text" name="semester" class="form-control" value="{{ $item->semester }}" placeholder="Semester">
            </div>



               <button class="btn btn-block btn-warning" type="submit">
                Ubah
               </button>
           </form>
        </div>
    </div>




</div>
@endsection
