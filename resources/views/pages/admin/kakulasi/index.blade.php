@extends('layouts.admin')

@section('title', 'Kakulasi')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kakulasi</h1>
        <a href="{{ route('kakulasi.input') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus-circle fa-sm text-white-50"></i> Tambah data</a>
    </div>



    <div class="card shadow">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table text-center table-bordered table-hover" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Mahasiswa</th>
                            <th>Ipk</th>
                            <th>Kejuaraan</th>
                            <th>Akademik</th>
                            <th>Non Akademik</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  $i=1; ?>
                        @foreach ($items as $item)
                            <tr>
                               <td>{{ $i++ }}</td>
                                <td>{{ $item->mahasiswa->nama_lengkap }}</td>
                                <td>{{ $item->ipk }}</td>
                                <td>{{ $item->kejuaraan }}</td>
                                <td>{{ $item->akademik }}</td>
                                <td>{{ $item->non_akademik }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>




</div>
@endsection
