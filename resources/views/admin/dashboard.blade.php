@extends('admin.layout.app')
{{-- orangtua/parent dari setiap halaman --}}

{{-- extend itu perintah agar kita dapat menggunakan
semua code yang ada di dalam file yang di extend--}}

{{-- halaman dashboard adalah anak dari si parent/orantua --}}

@section('content')
<h1 style="text-align: center">Ini adalah halaman dashboard</h1>
@endsection