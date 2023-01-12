@extends('layout')

@section('content')

<div class="container justify-content-start" style="width:80%; margin: 80px 100px">
            <h2 class="fw-bold">Feedback</h2>

            <div class="mb-3">
                <form action="">
                @csrf
                <label for="deskripsi" class="form-label">Apa keluhan atau saran darimu?</label>
                <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3" placeholder="Feedback"></textarea>
            </div>

                <div class="mt-3">
                    <button class="btn btn-primary" type="submit" name="selesai">Kirim</button>
                </div>
            </form>
        </div>
@endsection