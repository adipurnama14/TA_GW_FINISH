@extends('layouts.admin')

@section('title', 'Tambah User')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Data User</h1>
    </div>

    <div class="card shadow">
        <div class="card-body">
           <form action="{{ route('manage_user.store') }}" method="POST">
               @csrf

            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Name">
            </div>


            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Email">
            </div>

            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control" value="{{ old('password') }}" placeholder="Password">
            </div>




               <button class="btn btn-block btn-primary" type="submit">
                Simpan
               </button>
           </form>
        </div>
    </div>




</div>
@endsection
