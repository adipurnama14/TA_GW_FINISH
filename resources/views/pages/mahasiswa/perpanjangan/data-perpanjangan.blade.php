@extends('layouts.mahasiswa')

@section('title', 'Data Perpanjangan Beasiswa')
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
                            <th>Mahasiswa</th>
                            <th>Ipk</th>
                            <th>Kejuaraan</th>
                            <th>Akademik</th>
                            <th>Non Akademik</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; ?>
                        @foreach ($items as $item)
                            <tr>
                               <td>{{ $i++ }}</td>
                                <td>{{ $item->tahun->tahun }}</td>
                                <td>{{ $item->semester->semester }}</td>
                                <td>{{ $item->mahasiswa->nama_lengkap }}</td>
                                <td>{{ $item->ipk }}</td>
                                <td>{{ $item->kejuaraan }}</td>
                                <td>{{ $item->akademik }}</td>
                                <td>{{ $item->non_akademik }}</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="7">Hasi Keputusan</td>
                            <td>@if (empty($items))


                                @else
                                {{ $keputusan_ada }}
                            @endif</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>




</div>
@endsection
