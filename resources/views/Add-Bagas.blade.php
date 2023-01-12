@extends('layout')

@section('content')

    <div class="row">
        <div class="col">
            <img src="/image/ana.jpg" style="width: 720px; height: 800px; padding-top:20px;" alt="">
        </div>
        <div class="col" style="padding-top: 70px;">
        <h3 style="padding-left:50px; padding-top:10px;"><b>Desain Sepatumu</b></h3>
        <form action="/product" method="POST" enctype="multipart/form-data" style="width:70%; margin: 10px 50px">
            @csrf
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <div class="mb-3" style="padding-top: 10px;">
                <label for="name" class="form-label">Nama</label>
                    <input class="form-control" name="name" id="name" type="text"
                        placeholder="Isi Nama Kamu">
                </div>
                <div class="mb-3">
                <p class="fw-bold">Jenis Sepatu</p>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="Jenis" id="statusPembayaran1" value="High">
                    <label class="form-check-label" for="Jenis">High</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="Jenis" id="Jenis" value="Low">
                    <label class="form-check-label" for="Jenis">Low</label>
                </div>
                </div>

                <div class="mb-3">
                <p class="fw-bold">Warna Dasar Sepatu</p>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="warna_dasar" id="statusPembayaran1" value="Hitam">
                    <label class="form-check-label" for="warna_dasar">Hitam</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="warna_dasar" id="warna_dasar" value="Putih">
                    <label class="form-check-label" for="warna_dasar">Putih</label>
                </div>
                </div>

                <div class="mb-3">
                <p class="fw-bold">Warna Insole</p>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="warna_insole" id="warna_insole" value="Merah">
                    <label class="form-check-label" for="warna_insole">Merah</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="warna_insole" id="warna_insole" value="Biru">
                    <label class="form-check-label" for="warna_insole">Biru</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="warna_insole" id="warna_insole" value="Hitam">
                    <label class="form-check-label" for="warna_insole">Hitam</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="warna_insole" id="warna_insole" value="Putih">
                    <label class="form-check-label" for="warna_insole">Putih</label>
                </div>
                </div>
                <div class="mb-3">
                <p class="fw-bold">Warna Tali Sepatu</p>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="warna_tali" id="warna_tali" value="Merah">
                    <label class="form-check-label" for="warna_tali">Merah</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="warna_tali" id="warna_tali" value="Biru">
                    <label class="form-check-label" for="warna_tali">Biru</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="warna_tali" id="warna_tali" value="Hitam">
                    <label class="form-check-label" for="warna_tali">Hitam</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="warna_tali" id="warna_tali" value="Putih">
                    <label class="form-check-label" for="warna_tali">Putih</label>
                </div>
                </div>
                <div class="mb-3">
                <p class="fw-bold">Warna Lidah Sepatu</p>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="warna_lidah" id="warna_lidah" value="Merah">
                    <label class="form-check-label" for="warna_lidah">Merah</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="warna_lidah" id="warna_lidah" value="Biru">
                    <label class="form-check-label" for="warna_lidah">Biru</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="warna_lidah" id="warna_lidah" value="Hitam">
                    <label class="form-check-label" for="warna_lidah">Hitam</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="warna_lidah" id="warna_lidah" value="Putih">
                    <label class="form-check-label" for="warna_lidah">Putih</label>
                </div>
                </div>
                <div class="mb-3">
                <p class="fw-bold">Warna Midsole</p>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="warna_midsole" id="warna_midsole" value="Merah">
                    <label class="form-check-label" for="warna_midsole">Merah</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="warna_midsole" id="warna_midsole" value="Biru">
                    <label class="form-check-label" for="warna_midsole">Biru</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="warna_midsole" id="warna_midsole" value="Hitam">
                    <label class="form-check-label" for="warna_midsole">Hitam</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="warna_midsole" id="warna_midsole" value="Putih">
                    <label class="form-check-label" for="warna_midsole">Putih</label>
                </div>
                </div>
                <div class="mt-3">
                    <button class="btn btn-primary" type="submit" name="submit">Selesai</button>
                </div>
            </form>
@endsection