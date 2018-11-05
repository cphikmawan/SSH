@extends('layouts.app')

@section('title', 'About')

@section('sidebar')
    @include('layouts.sidebar')
@endsection

@section('header')
    @include('layouts.header')    
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

                    <!-- Team -->
                    <div class="row gutters-tiny py-20">
                        <div class="col-md-6 col-xl-4">
                            <div class="block text-center">
                                <div class="block-content">
                                    <img class="img-avatar img-avatar96" src="/image/penyok.jpg" alt="">
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="font-size-h4 font-w600 mb-0">Udin IMM</div>
                                    <div class="font-size-h5 text-muted">Pendiri</div>
                                </div>
                                <div class="block-content block-content-full bg-body-light">
                                    <a class="btn btn-circle btn-secondary" href="https://cloudy.my.id">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a class="btn btn-circle btn-secondary" href="https://cloudy.my.id">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a class="btn btn-circle btn-secondary" href="https://cloudy.my.id">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="block text-center">
                                <div class="block-content">
                                    <img class="img-avatar img-avatar96" src="/image/fuad.jpg" alt="">
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="font-size-h4 font-w600 mb-0">DR Fu</div>
                                    <div class="font-size-h5 text-muted">Manajer</div>
                                </div>
                                <div class="block-content block-content-full bg-body-light">
                                    <a class="btn btn-circle btn-secondary" href="https://cloudy.my.id">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a class="btn btn-circle btn-secondary" href="https://cloudy.my.id">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a class="btn btn-circle btn-secondary" href="https://cloudy.my.id">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="block text-center">
                                <div class="block-content">
                                    <img class="img-avatar img-avatar96" src="/image/awan.jpeg" alt="">
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="font-size-h4 font-w600 mb-0">Cloud</div>
                                    <div class="font-size-h5 text-muted">Manajer</div>
                                </div>
                                <div class="block-content block-content-full bg-body-light">
                                    <a class="btn btn-circle btn-secondary" href="https://cloudy.my.id">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a class="btn btn-circle btn-secondary" href="https://cloudy.my.id">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a class="btn btn-circle btn-secondary" href="https://cloudy.my.id">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row gutters-tiny py-20">
                        <div class="col-md-6 col-xl-2"></div>
                        <div class="col-md-6 col-xl-4">
                            <div class="block text-center">
                                <div class="block-content">
                                    <img class="img-avatar img-avatar96" src="/image/penyok.jpg" alt="">
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="font-size-h4 font-w600 mb-0">Udin IMM</div>
                                    <div class="font-size-h5 text-muted">Pendiri</div>
                                </div>
                                <div class="block-content block-content-full bg-body-light">
                                    <a class="btn btn-circle btn-secondary" href="https://cloudy.my.id">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a class="btn btn-circle btn-secondary" href="https://cloudy.my.id">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a class="btn btn-circle btn-secondary" href="https://cloudy.my.id">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="block text-center">
                                <div class="block-content">
                                    <img class="img-avatar img-avatar96" src="/image/fuad.jpg" alt="">
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="font-size-h4 font-w600 mb-0">DR Fu</div>
                                    <div class="font-size-h5 text-muted">Manajer</div>
                                </div>
                                <div class="block-content block-content-full bg-body-light">
                                    <a class="btn btn-circle btn-secondary" href="https://cloudy.my.id">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a class="btn btn-circle btn-secondary" href="https://cloudy.my.id">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a class="btn btn-circle btn-secondary" href="https://cloudy.my.id">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-2"></div>
                    </div>
                    <!-- END Team -->

                </div>
                <!-- END Page Content -->
            </main>

@endsection