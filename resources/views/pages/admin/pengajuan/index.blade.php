@extends('layouts.admin')

@section('title', 'Halaman Dashboard Admin')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-5">
        <h1 class="h3 mb-0 text-gray-800">Data Pengajuan Beasiswa Mahasiswa</h1>
    </div>


    <div class="card shadow">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" cellspacing="0" width="100%">
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
                            <td>
                                <img src="{{ Storage::url('gambar/'.$item->ipk) }}" alt="" width="300px" class="img-thumbnail">
                            </td>
                            <td>
                                <img src="{{ Storage::url('gambar/'.$item->kejuaraan) }}" alt="" width="300px" class="img-thumbnail">
                            </td>
                            <td>
                                <img src="{{ Storage::url('gambar/'.$item->akademik) }}" alt="" width="300px" class="img-thumbnail">
                            </td>

                            <td>
                                <img src="{{ Storage::url('gambar/'.$item->non_akademik) }}" alt="" width="300px" class="img-thumbnail">
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



</div>
@endsection
