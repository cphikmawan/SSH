@extends('layouts.app')

@section('title', 'Home')

@section('sidebar')
    @include('layouts.sidebar')
@endsection

@section('header')
    @include('layouts.header')    
@endsection

@section('content')
    <main id="main-container">
        <!-- Hero -->
        <div class="bg-primary">
            <div class="bg-pattern bg-black-op-25" style="background-image: url('codebase/02 - Codebase Source (HTML)/src/assets/img/various/bg-pattern.png');">
                <div class="content content-top text-center">
                    <div class="py-50">
                        <h1 class="font-w700 text-white mb-10">Hubungi Kami</h1>
                        <h2 class="h4 font-w400 text-white-op">Apa yang ada dipikiran anda?</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Contact Form -->
        <div class="content content-full">
            <div class="row justify-content-center py-30">
                <div class="col-lg-8 col-xl-6" style="background-color: white">
                    <form class="js-validation-signup" action="/">
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material form-material-primary floating">
                                    <input type="text" class="form-control" id="signup-nama" name="signup-nama">
                                    <label for="signup-nama">Nama</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material form-material-primary floating">
                                    <input type="text" class="form-control" id="signup-email" name="signup-email">
                                    <label for="signup-email">Email</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material form-material-primary floating">
                                    <textarea class="form-control" id="signup-pesan" name="signup-pesan" rows="8"></textarea>
                                    <label for="signup-pesan">Pesan</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-hero btn-alt-primary min-width-175">
                                    <i class="fa fa-send mr-5"></i> Kirim Pesan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- END Contact Form -->
    </main>
@endsection