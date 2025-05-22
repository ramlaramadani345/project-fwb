@extends('master')

@section('konten')
<div class="container mt-5">
    <h2 class="text-center mb-4">Register</h2>
    <form method="POST" action="{{ route('registrasi.owner') }}">
        @csrf
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="name" class="form-control" required>
            @error('name') <div class="text-danger">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
            @error('email') <div class="text-danger">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Konfirmasi Password</label>
            <input type="password" name="password_confirmation" class="form-control" required>
        </div>
        <button class="btn btn-success" type="submit">Register</button>
        <p class="mt-3">Sudah punya akun? <a href="{{ route('login') }}">Login di sini</a></p>
    </form>
</div>
@endsection
