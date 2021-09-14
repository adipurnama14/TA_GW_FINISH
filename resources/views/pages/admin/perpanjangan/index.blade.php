@extends('layouts.admin')

@section('title', 'Perpanjangan')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Perpanjangan</h1>
    </div>


    <div class="card shadow">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table text-center table-bordered table-hover" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tahun</th>
                            <th>Semester</th>
                            <th>Nama Mahasiswa</th>
                            <th>Ipk</th>
                            <th>Kejuaraan</th>
                            <th>Akademik</th>
                            <th>Non Akademik</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($items as $key => $item)
                            <tr>
                               <td>{{ $items->firstItem() + $key }}</td>
                                <td>{{ $item->tahun->tahun }}</td>
                                <td>{{ $item->semester->semester }}</td>
                                <td>{{ $item->mahasiswa->nama_lengkap }}</td>
                                <td>{{ $item->ipk }}</td>
                                <td>{{ $item->kejuaraan }}</td>
                                <td>{{ $item->akademik }}}</td>
                                <td>{{ $item->non_akademik }}</td>
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
