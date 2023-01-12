@extends('app')
@section('content')
@if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
    <div class="row" style="background-color:#ECE8DD;">
        <div class="col"">
            <img src="/image/5.png" style="width: 700px; height: 700px;" alt="">
        </div>
        <div class="col" style="padding-top: 80px;">
        <h3 style="padding-left:30px;"><b>Register</b></h3>
        <form action="{{ route('register.action') }}" method="POST" style="width:80%; margin: 10px 30px">
            @csrf
            <div class="mb-3" style="padding-top: 20px;">
                <label for="email" class="form-label">Email*</label>
                <input class="form-control" name="email" id="email" type="email">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input class="form-control" name="nama" id="nama" type="text">
            </div>
            <div class="mb-3">
                <label for="no_hp" class="form-label">Nomor Handphone*</label>
                <input class="form-control" name="no_hp" id="no_hp" type="text">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Kata Sandi*</label>
                <input class="form-control" name="password" id="password" type="password">
            </div>
            <div class="mb-3">
                <label for="password_confirm" class="form-label">Konfirmasi Kata Sandi*</label>
                <input class="form-control" name="password_confirm" id="password_confirm" type="password">
            </div> 
            <div style="padding-top: 10px;">
                <button type="submit" class="btn btn-primary" role="button" name="Daftar">Daftar</button>
            </div>
            <div>
                <a> Anda sudah punya akun ? </a>
                <a href="{{ route('login') }}">Login</a>
            </div>
@endsection