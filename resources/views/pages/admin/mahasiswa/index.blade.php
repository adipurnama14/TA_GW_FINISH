@extends('layouts.admin')

@section('title', 'Mahasiswa')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Mahasiwa</h1>
        <a href="{{ route('mahasiswa.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus-circle fa-sm text-white-50"></i> Tambah Data</a>
    </div>

    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif

    <div class="card shadow">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table text-center table-bordered table-hover" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Npm</th>
                            <th>Nama Legkap</th>
                            <th>Akun</th>
                            <th>Jurusan</th>
                            <th>Alamat</th>
                            <th>No Telpon</th>
                            <th>Nama Orang Tua</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($items as $key => $item)
                            <tr>
                               <td>{{ $items->firstItem() + $key }}</td>
                                <td>{{ $item->npm }}</td>
                                <td>{{ $item->nama_lengkap }}</td>
                                <td>{{ $item->user['email'] }}</td>
                                <td>{{ $item->jurusan->nama_jurusan }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->no_telpon }}</td>
                                <td>{{ $item->nama_orang_tua }}</td>
                                <td>
                                    <img src="{{ Storage::url('gambar/'.$item->gambar) }}" alt="" class="img-thumbnail" width="150px">
                                </td>
                                <td>
                                    <a href="{{ route('mahasiswa.edit', $item->id) }}" class="btn btn-sm btn-warning">
                                        <i class="fas fa-sm fa-edit"></i>
                                    </a>

                                    <form action="{{ route('mahasiswa.destroy', $item->id) }}" method="POST" style="display: inline-block">
                                        @csrf
                                        @method('delete')

                                        <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('anda yakin ingin menghapus data?');">
                                            <i class="fas fa-sm fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $items->links() }}
        </div>
    </div>




</div>
@endsection
