@extends('layouts.front.app')

@section('title', 'Home')

@section('sidebar')
    @include('layouts.front.sidebar')
@endsection

@section('header')
    @include('layouts.front.header')    
@endsection

@section('content')
    <main id="main-container">
        <!-- Hero -->
        <div class="bg-primary">
            <div class="bg-pattern bg-black-op-25" style="background-image: url('codebase/02 - Codebase Source (HTML)/src/assets/img/various/bg-pattern.png');">
                <div class="content text-center">
                    <h1 class="font-w700 text-white mb-10">Hubungi Kami</h1>
                    <h2 class="h4 font-w400 text-white-op">Apa yang ada dipikiran anda?</h2>
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

        <div class="row">
            <div class="col-md-8">
                <div id="js-map-be-contact" style="height: 380px;"></div>
            </div>
            <div class="col-md-4">
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <div class="font-size-lg text-black mb-5">Hubungi Kami :</div>
                    </div>
                    <div class="block-content">
                        <address>
                            <div class="font-size-lg text-black mb-5">Alamat</div>                            
                            Jl. Teknik Kimia, Institut Teknologi Sepuluh Nopember<br>
                            Sukolilo 60111<br>
                            Surabaya, Jawa Timur<br><br>
                            <div class="font-size-lg text-black mb-5">Customer Service</div>
                            <i class="fa fa-phone mr-5"></i> 03183018310<br>
                            <i class="fa fa-whatsapp mr-5"></i> 08383018310<br>
                            <i class="fa fa-envelope-o mr-5"></i> <a href="javascript:void(0)">customerservis@resik.co.id</a>
                        </address>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection