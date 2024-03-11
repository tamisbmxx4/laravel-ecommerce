@extends('layouts.frontend.app')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="text-left mb-2">
                    <h3>BERGABUNG DENGAN KAMI</h3>
                    <span>Masukkan keterangan lebih lanjut disini Halo, untuk memberikan pengalaman berbelanja yang lebih aman dan menyenangkan, silahkan gunakan alamat email yang valid untuk mendaftar. </span>
                </div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Lengkap</label>
                        <input type="text" name="name" class="form-control rounded-0">
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control rounded-0" placeholder="example@gmail.com">
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control rounded-0" placeholder="Password harus terdiri 8 karakter">
                        @error('password')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Konfirmasi Password</label>
                        <input type="password" name="password_confirmation" class="form-control rounded-0" placeholder="Ulangi Password">
                    </div>
                    <input type="checkbox" name="terms" value="1">
                    <a class="nav-link-style fs-ms text-black-50 text-primary text-decoration-none" href="#">
                        {{ __('Terms & Conditions **') }}</a>
                    <label>Saya menyetujui untuk mengizinkan memproses data pribadi saya untuk mengelola akun pribadi saya, sesuai dengan Privacy policy eShop</label>
                    <button type="submit" class="site-btn w-100 rounded-0 mb-3">Daftar</button>
                    <div class="text-center">
                        <p>Sudah Punya Akun? <a href="{{ route('login') }}">Masuk</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
