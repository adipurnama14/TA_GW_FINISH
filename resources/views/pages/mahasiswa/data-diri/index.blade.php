@extends('layouts.mahasiswa')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Diri</h1>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <div class="container">
                @foreach ($items as $item)
                <div class="row">
                    <div class="col-lg-4 mt-4">
                        <table cellspacing="0" width="100%">
                            <tr>
                                <th>Nama Lengkap</th>
                                <td>{{ $item->nama_lengkap }}</td>
                            </tr>
                            <tr>
                                <th>Jurusan</th>
                                <td>{{ $item->jurusan->nama_jurusan }}</td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>{{ $item->alamat }}</td>
                            </tr>
                            <tr>
                                <th>No Telepon</th>
                                <td>{{ $item->no_telpon }}</td>
                            </tr>
                            {{-- <tr>
                                <td><a href="{{ route('halaman_ubah_data_diri', $item->id) }}" class="btn btn-sm btn-warning mt-4">Ubah Data Diri</a></td>
                            </tr> --}}
                        </table>
                    </div>

                    <div class="col-md-4 mt-5">
                        <img src="{{ Storage::url('gambar/'.$item->gambar) }}" alt="" width="250px">
                    </div>
                  </div>
                @endforeach
              </div>
        </div>
    </div>



</div>
@endsection
