@extends('admin.layout.app')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Tables</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Pesanan</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <a href="{{ url('admin/pesanan/create') }}" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Pesanan
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nama Pemesan</th>
                        <th>Alamat</th>
                        <th>No HP</th>
                        <th>Email</th>
                        <th>Jumlah Pesanan</th>
                        <th>Deskripsi</th>
                        <th>Nama Produk</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                       $no = 1; 
                    @endphp
                    @foreach ($pesanan as $pes)
                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $pes->tanggal }}</td>
                        <td>{{ $pes->nama_pemesan }}</td>
                        <td>{{ $pes->alamat_pemesan }}</td>
                        <td>{{ $pes->no_hp }}</td>
                        <td>{{ $pes->email }}</td>
                        <td>{{ $pes->jumlah_pesanan }}</td>
                        <td>{{ $pes->deskripsi }}</td>
                        <td>{{ $pes->nama_produk }}</td>
                        <td><a href="{{ url('admin/pesanan/edit/'. $pes->id) }}" class="btn btn-success">Edit</a></td>
                        <td><a href="{{ url('admin/pesanan/delete/'. $pes->id) }}" class="btn btn-danger">Delete</a></td>
                    </tr>
                    @php
                        $no++
                    @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection