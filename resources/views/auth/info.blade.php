@extends('layouts.auth.app')

@section('title', 'Info')

@section('content')
    <div class="bg-image" style="background-image: url('image/storage1.jpg');">
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
                        Created with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="https://cloudy.my.id" target="_blank">Kelompok 4</a>
                    </p>
                </div>
            </div>
            <div class="hero-static col-md-6 col-xl-4 d-flex align-items-center bg-white invisible" data-toggle="appear" data-class="animated fadeInRight">
                <div class="content content-full">
                    {{-- <!-- Header --> --}}
                    <div class="px-30 py-10">
                        <a class="link-effect font-w700" action="/dashboard">
                            <img height="46" width="36" src="image/logo.jpg"></img>
                            <span class="font-size-xl text-primary-dark">RESIK</span>
                        </a>
                        <h1 class="h4 font-w700 mt-30 mb-10">
                            <i class="si si-check"> Lupa Password Sukses</i>
                        </h1>
                        <h1 class="h4 font-w700 mt-30 mb-10">
                            <i class="si si-check"> Silahkan Periksa Email</i>
                        </h1><br></br>
                        <a href="/">
                            <button class="btn btn-sm btn-hero btn-alt-primary">
                                <i class="fa fa-home mr-10"></i> Halaman Utama
                            </button>       
                        </a>
                        <div class="mt-30">
                            <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="/masuk">
                                <i class="fa fa-user text-muted mr-5"></i> Masuk
                            </a>
                            <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="/daftar">
                                <i class="fa fa-plus mr-5"></i> Buat Akun
                            </a>
                        </div>      
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
@endsection