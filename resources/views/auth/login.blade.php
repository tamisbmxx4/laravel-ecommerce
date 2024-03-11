@extends('layouts.frontend.app')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="text-left mb-2">
                    <h3>MASUK</h3>
                    <div class="text-left md-3">
                    <span>Selamat datang kembali! Masuk ke akun Anda untuk melakukan Pembayaran yang lebih cepat</span>
                    </div>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control rounded-0" placeholder="Masukan email Anda">
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control rounded-0" placeholder="Masukan Password Anda">
                        @error('password')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="text-right mb-4">
                        <a href="{{ route('password.request') }}">Lupa Password?</a>
                    </div>
                    <button type="submit" class="site-btn w-100 rounded-0 mb-3">Masuk</button>
                    <div class="text-center">
                        <p>Belum Punya Akun? <a href="{{ route('register') }}">Daftar Sekarang</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
