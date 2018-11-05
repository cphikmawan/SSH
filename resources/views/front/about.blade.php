@extends('layouts.front.app')

@section('title', 'About')

@section('sidebar')
    @include('layouts.front.sidebar')
@endsection

@section('header')
    @include('layouts.front.header')    
@endsection

@section('content')
            <!-- Main Container -->
            <main id="main-container">
                <!-- Hero -->
                <div class="bg-image" style="background-image: url('image/storage1.jpg');">
                    <div class="bg-black-op-75">
                        <div class="content content-top text-center">
                            <div class="py-100">
                                <h1 class="font-w700 text-white mb-10">RESIK</h1>
                                <h2 class="h4 font-w400 text-white-op">Reservation & Keeping Product</h2>
                                <h2 class="h5 font-w400 text-white-op">~ Solusi Simpan Barang ~</i></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Hero -->

                <!-- Page Content -->
                <div class="content content-full">
                    <!-- Info -->
                    <div class="block">
                        <div class="block-content">
                            <div class="row nice-copy">
                                <div class="col-md-4 py-30">
                                    <h3 class="h4 font-w700 text-uppercase pb-10 border-b border-3x">Siapakah <span class="text-primary">Kami </span>?</h3>
                                    <p class="mb-0">Kami adalah sekumpulan orang yang sedang menempuh 2 SKS mata kuliah tekno dan sedang mengerjakan suatu tugas.</p>
                                </div>
                                <div class="col-md-4 py-30">
                                    <h3 class="h4 font-w700 text-uppercase pb-10 border-b border-3x">Apa yang<span class="text-primary"> kami </span>lakukan?</h3>
                                    <p class="mb-0">Kami menyediakan layanan jasa penyimpanan barang.</p>
                                </div>
                                <div class="col-md-4 py-30">
                                    <h3 class="h4 font-w700 text-uppercase pb-10 border-b border-3x">Simpan barangmu <span class="text-primary">!</span></h3>
                                    <p class="mb-0">Wujudkanlah tempat tinggal yang luas, aman dan nyaman. Keluarga anda senang, kamipun senang.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Info -->

                    <div class="row">
                        <div class="col-md-8">
                            <div class="block">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title"><i class="fa fa-users fa-fw text-primary"></i> Profil Tim</h3>
                                </div>
                                <div class="block-content">
                                    <div class="js-slider text-center" data-autoplay="true" data-dots="true" data-arrows="true" data-slides-to-show="3">
                                        <div class="py-20">
                                            <img class="img-avatar" src="image/fikri.jpg" alt="">
                                            <div class="mt-10 font-w600">Fikri S.</div>
                                            <div class="font-size-sm text-muted">Pendiri</div>
                                        </div>
                                        <div class="py-20">
                                            <img class="img-avatar" src="image/ayis.jpg" alt="">
                                            <div class="mt-10 font-w600">Fitria N.</div>
                                            <div class="font-size-sm text-muted">Sekretaris</div>
                                        </div>
                                        <div class="py-20">
                                            <img class="img-avatar" src="image/dini.jpg" alt="">
                                            <div class="mt-10 font-w600">Dini R.</div>
                                            <div class="font-size-sm text-muted">Manajer</div>
                                        </div>
                                        <div class="py-20">
                                            <img class="img-avatar" src="image/wisnu.jpg" alt="">
                                            <div class="mt-10 font-w600">Wisnu R.</div>
                                            <div class="font-size-sm text-muted">Desainer</div>
                                        </div>
                                        <div class="py-20">
                                            <img class="img-avatar" src="image/awan.jpeg" alt="">
                                            <div class="mt-10 font-w600">Cahya H.</div>
                                            <div class="font-size-sm text-muted">Developer</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="block block-rounded">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">Alamat Kantor</h3>
                                </div>
                                <div class="block-content">
                                    {{-- <div class="font-size-lg text-black mb-5">John Smith</div> --}}
                                    <address>
                                        Jl. Teknik Kimia, Institut Teknologi Sepuluh Nopember<br>
                                        Sukolilo 60111<br>
                                        Surabaya, Jawa Timur<br><br>
                                        <i class="fa fa-phone mr-5"></i> 03183018310<br>
                                        <i class="fa fa-whatsapp mr-5"></i> 08383018310<br>
                                        <i class="fa fa-envelope-o mr-5"></i> <a href="javascript:void(0)">customerservis@resik.co.id</a>
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->
            </main>

@endsection