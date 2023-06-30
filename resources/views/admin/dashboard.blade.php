@extends('admin.layout.app')
{{-- orangtua/parent dari setiap halaman --}}

{{-- extend itu perintah agar kita dapat menggunakan
semua code yang ada di dalam file yang di extend--}}

{{-- halaman dashboard adalah anak dari si parent/orantua --}}

@section('content')
<h2 style="text-align: center">Hallo {{ Auth::user()->name}}</h2>
<h3 style="text-align: center">Ini adalah halaman dashboard</h3>
@endsection