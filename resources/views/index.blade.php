@extends('layout.master')
@section('content')
    
    <div class="row">
        <h2 class="mt-5">Selamat datang {{ auth()->user()->name }}</h2>
        <div class="container mt-5">
            <p>Pilih menu di sidebar untuk melakukan interaksi</p>
        </div>
    </div>

@endsection