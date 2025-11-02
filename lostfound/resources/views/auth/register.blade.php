@extends('layout')

@section('title', 'Register')

@section('content')
    <div style="max-width: 500px; margin: 50px auto;">
        <h2 style="text-align: center;">Daftar Akun Baru</h2>

        <div class="card">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                
                <div class="form-group">
                    <label for="name">Nama Lengkap</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" required autofocus>
                    @error('name')
                        <span class="error-text">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" value="{{ old('email') }}" required>
                    @error('email')
                        <span class="error-text">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                    @error('password')
                        <span class="error-text">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Konfirmasi Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn" style="width: 100%;">Daftar</button>
                </div>

                <p style="text-align: center; margin-top: 20px; color: #6a6a6a;">
                    Sudah punya akun? <a href="{{ route('login') }}" style="color: #697254; font-weight: 600;">Login di sini</a>
                </p>
            </form>
        </div>
    </div>
@endsection