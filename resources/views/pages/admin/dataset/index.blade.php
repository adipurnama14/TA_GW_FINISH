@extends('layouts.admin')

@section('title', 'Dataset')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dataset</h1>
        <a href="{{ route('dataaset.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus-circle fa-sm text-white-50"></i> Tambah Data</a>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table text-center table-bordered table-hover" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Npm</th>
                            <th>Ipk</th>
                            <th>Kejuaraan</th>
                            <th>Akademik</th>
                            <th>Non Akademik</th>
                            <th>Keputusan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; ?>
                        @foreach ($items as $item)
                            <tr>
                               <td>{{ $i++}}</td>
                                <td>{{ $item->npm }}</td>
                                <td>{{ $item->ipk }}</td>
                                <td>{{ $item->kejuaraan }}</td>
                                <td>{{ $item->akademik }}</td>
                                <td>{{ $item->non_akademik }}</td>
                                <td>{{ $item->keputusan }}</td>
                                <td>
                                    <a href="{{ route('dataaset.edit', $item->id) }}" class="btn btn-sm btn-warning">
                                        <i class="fas fa-sm fa-edit"></i>
                                    </a>

                                    <form action="{{ route('dataaset.destroy', $item->id) }}" method="POST" style="display: inline-block">
                                        @csrf
                                        @method('delete')

                                        <button class="btn btn-sm btn-danger" type="submit">
                                            <i class="fas fa-sm fa-trash"></i>
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
