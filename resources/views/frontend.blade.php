@extends('layout.app')
@section('content')
    <h3 style="text-align: center"> Hallo{{ Auth::user()->name  }} </h3>
    <h2>Selamat Datang di dashboard Frontend</h2>
@endsection