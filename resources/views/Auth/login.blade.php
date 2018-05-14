@extends('layouts.auth.app')

@section('title', 'Masuk')

@section('content')
    <div class="bg-image" style="background-image: url('image/sedekah.jpg');">
        <div class="row mx-0 bg-black-op">
            <div class="hero-static col-md-6 col-xl-8 d-none d-md-flex align-items-md-end">
                <div class="p-30 invisible" data-toggle="appear">
                    <p class="font-size-h3 font-w600 text-white">
                        “Barangsiapa memberi pinjaman kepada Allah dengan pinjaman yang baik, maka Allah akan melipatgandakan balasan pinjaman itu untuknya dan dia akan memperoleh pahala yang banyak”
                    </p>
                    <p class="font-size-h5 text-white">
                        (QS. Al Hadid: 11)
                    </p>
                    <p class="font-italic text-white-op">
                        Coded with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="https://github.com/fuaddary/SSH" target="_blank">Kelompok IMK</a>
                    </p>
                </div>
            </div>
            <div class="hero-static col-md-6 col-xl-4 d-flex align-items-center bg-white invisible" data-toggle="appear" data-class="animated fadeInRight">
                <div class="content content-full">
                    {{-- <!-- Header --> --}}
                    <div class="px-30 py-10">
                        <a class="link-effect font-w700" href="/">
                            <i class="si si-fire"></i>
                            <span class="font-size-xl text-primary-dark">SSH</span>
                        </a>
                        <h1 class="h3 font-w700 mt-30 mb-10">Selamat Datang</h1>
                        <h2 class="h5 font-w400 text-muted mb-0">Silahkan Masuk Untuk Lanjut</h2>
                    </div>

                    <form class="js-validation-signup px-30" action="/dashboard">
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material form-material-primary floating">
                                    <input type="text" class="form-control" id="signup-username" name="signup-username">
                                    <label for="signup-username">Username</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material form-material-primary floating">
                                    <input type="password" class="form-control" id="signup-password" name="signup-password">
                                    <label for="signup-password">Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="login-remember-me" name="login-remember-me">
                                    <label class="custom-control-label" for="login-remember-me">Ingat Saya</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-sm btn-hero btn-alt-primary">
                                <i class="si si-login mr-10"></i> Masuk
                            </button>
                            <div class="mt-30">
                                <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="/daftar">
                                    <i class="fa fa-plus mr-5"></i> Buat Akun
                                </a>
                                <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="/lupa_password">
                                    <i class="fa fa-warning mr-5"></i> Lupa Password
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection