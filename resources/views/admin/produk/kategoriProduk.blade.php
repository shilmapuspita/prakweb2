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
                                Data Kategori Produk
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Id</th> 
                                           <th>Nama</th> 
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    @php
                                        $no = 1; 
                                    @endphp
                                    @foreach ($kategoriProduk as $ktg)
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $ktg->nama }}</td>
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