@extends('layout')

@section('title', 'Login')

@section('content')
    <div style="max-width: 500px; margin: 50px auto;">
        <h2 style="text-align: center;">Login</h2>

        @if(session('success'))
            <div class="alert">
                {{ session('success') }}
            </div>
        @endif

        <div class="card">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" value="{{ old('email') }}" required autofocus>
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

                <div class="form-group" style="display: flex; align-items: center; gap: 8px;">
                    <input type="checkbox" id="remember" name="remember" style="width: auto; margin: 0;">
                    <label for="remember" style="margin: 0; cursor: pointer;">Ingat Saya</label>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn" style="width: 100%;">Login</button>
                </div>

                <p style="text-align: center; margin-top: 20px; color: #6a6a6a;">
                    Belum punya akun? <a href="{{ route('register') }}" style="color: #697254; font-weight: 600;">Daftar di sini</a>
                </p>
            </form>
        </div>
    </div>
@endsection