@extends('layouts.admin')

@section('title', 'Ubah User')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Data User</h1>
    </div>

    <div class="card shadow">
        <div class="card-body">
           <form action="{{ route('manage_user.update', $item->id) }}" method="POST">
               @csrf

               @method('put')

            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" value="{{ $item->name }}" placeholder="Name">
            </div>


            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" value="{{ $item->email }}" placeholder="Email">
            </div>

            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control" value="{{ $item->password }}" placeholder="Password">
            </div>




               <button class="btn btn-block btn-warning" type="submit">
                Ubah
               </button>
           </form>
        </div>
    </div>




</div>
@endsection
