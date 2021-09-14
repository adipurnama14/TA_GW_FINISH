@extends('layouts.admin')

@section('title', 'Perhitungan')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Perhitungan</h1>
        <a href="{{ route('perhitungan.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-plus-circle fa-sm text-white-50"></i> Tambah Data</a>
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
                            <th>Jarak</th>
                            <th>Keterangan</th>
                            <th>Persoses Hitung</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  $i=1; ?>
                        @foreach ($items as $item)
                            <tr>
                               <td>{{ $i++ }}</td>
                                <td>{{ $item->kakulasi->mahasiswa->nama_lengkap }}</td>
                                <td>{{ $item->kakulasi->ipk }}</td>
                                <td>{{ $item->kakulasi->kejuaraan }}</td>
                                <td>{{ $item->kakulasi->akademik }}</td>
                                <td>{{ $item->kakulasi->non_akademik }}</td>
                                <td>{{ $item->jarak }}</td>
                                <td>{{ $item->dataset->keputusan }}</td>
                                <td>
                                    <form action="{{ route('proses.perhitungan', $item->id) }}" method="POST">
                                        @csrf

                                        <button class="btn btn-sm btn-primary" type="submit">
                                            Proses
                                        </button>
                                    </form>

                                    <form action="{{ route('perhitungan.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    @method('delete')

                                        <button class="btn btn-sm btn-danger" type="submit">
                                            Hapus
                                        </button>
                                    </form>
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
