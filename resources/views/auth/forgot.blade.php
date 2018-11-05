@extends('layouts.auth.app')

@section('title', 'Lupa Password')

@section('content')
    <div class="bg-image" style="background-image: url('image/storage.jpg');">
        <div class="row mx-0 bg-black-op">
            <div class="hero-static col-md-6 col-xl-8 d-none d-md-flex align-items-md-end">
                <div class="p-30 invisible" data-toggle="appear">
                    <p class="font-size-h3 font-w600 text-white">
                        “A person is but the product of their thoughts. What they think, they become.”
                    </p>
                    <p class="font-size-h5 text-white">
                        - Mahatma Gandhi -
                    </p>
                    <p class="font-italic text-white-op">
                        Coded with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="https://cloudy.my.id" target="_blank">Kelompok 6</a>
                    </p>
                </div>
            </div>
            <div class="hero-static col-md-6 col-xl-4 d-flex align-items-center bg-white invisible" data-toggle="appear" data-class="animated fadeInRight">
                <div class="content content-full">
                    {{-- <!-- Header --> --}}
                    <div class="px-30 py-10">
                        <a class="link-effect font-w700" href="/">
                            <i class="si si-fire"></i>
                            <span class="font-size-xl text-primary-dark">RESIK</span>
                        </a>
                        <h1 class="h3 font-w700 mt-30 mb-10">Jangan panik, dapatkan akunmu kembali</h1>
                        <h2 class="h5 font-w400 text-muted mb-0">Masukkan Email</h2>
                    </div>

                    <form class="js-validation-signup px-30" action="/info">
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material form-material-primary floating">
                                    <input type="text" class="form-control" id="signup-email" name="signup-email">
                                    <label for="signup-email">Email</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            {{-- <a class="" href="#" data-toggle="modal" data-target="#modal-terms"> --}}
                                <button type="submit" class="btn btn-sm btn-hero btn-alt-primary">
                                        <i class="fa fa-asterisk mr-10"></i> Lupa Password                                    
                                </button>
                            {{-- </a>                             --}}
                            <div class="mt-30">
                                <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="/masuk">
                                    <i class="fa fa-user text-muted mr-5"></i> Masuk
                                </a>
                                <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="/daftar">
                                    <i class="fa fa-plus mr-5"></i> Buat Akun
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection