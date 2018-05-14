@extends('layouts.auth.app')

@section('title', 'Daftar')

@section('content')
    <div class="bg-image" style="background-image: url('image/sedekah.jpg');">
        <div class="row mx-0 bg-black-op">
            <div class="hero-static col-md-6 col-xl-8 d-none d-md-flex align-items-md-end">
                <div class="p-30 invisible" data-toggle="appear">
                    <p class="font-size-h3 font-w600 text-white">
                        "Apapun harta yang kalian infakkan maka Allah pasti akan menggantikannya, dan Dia adalah sebaik-baik pemberi rezeki"                        
                    </p>
                    <p class="font-size-h5 text-white">
                        (QS. Saba: 39)
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
                        <h1 class="h3 font-w700 mt-30 mb-10">Daftar Akun Baru</h1>
                        <h2 class="h5 font-w400 text-muted mb-0">Mohon Isi Data Akun</h2>
                    </div>
                    <form class="js-validation-signup px-30" action="be_pages_auth_all.html" method="post">
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material floating">
                                    <input type="text" class="form-control" id="signup-username" name="signup-username">
                                    <label for="signup-username">Username</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material floating">
                                    <input type="email" class="form-control" id="signup-email" name="signup-email">
                                    <label for="signup-email">Email</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material floating">
                                    <input type="password" class="form-control" id="signup-password" name="signup-password">
                                    <label for="signup-password">Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material floating">
                                    <input type="password" class="form-control" id="signup-password-confirm" name="signup-password-confirm">
                                    <label for="signup-password-confirm">Konfirmasi Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-sm btn-hero btn-alt-primary">
                                <i class="fa fa-plus mr-10"></i> Buat Akun
                            </button>
                            <div class="mt-30">
                                <p class="link-effect text-muted mr-10 mb-5 d-inline-block">
                                    Sudah Punya Akun?
                                </p>
                                <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="/masuk">
                                    <i class="fa fa-user text-muted mr-5"></i> Masuk
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection