@extends('admin.layout.app')
{{-- orangtua/parent dari setiap halaman --}}

{{-- extend itu perintah agar kita dapat menggunakan
semua code yang ada di dalam file yang di extend--}}

{{-- halaman dashboard adalah anak dari si parent/orantua --}}

@section('content')
 <div class="container-fluid px-4">
                        <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Produk</li>
                        </ol>
                        <div class="card mb-4">
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
                                           <th>Nama Pesanan</th> 
                                           <th>Alamat Pemesan</th> 
                                           <th>No Hp</th> 
                                           <th>Email</th> 
                                           <th>Jumlah Pesanan</th> 
                                           <th>Deskripsi</th> 
                                           <th>Produk id </th>
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
                                        <td>{{ $pes->produk_id}}</td>
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