@extends('layouts.front.app')

@section('title', 'Home')

@section('sidebar')
    @include('layouts.front.sidebar')
@endsection

@section('header')
    @include('layouts.front.header')
@endsection

@section('content')
<!-- Main Container -->
<main id="main-container">
    <!-- Slider with inner dots and black arrows -->
    <div class="js-slider slick-nav-black slick-dotted-inner slick-dotted-white" data-dots="true" data-autoplay="true" data-arrows="true">
        <div>
            <div class="bg-image" style="background-image: url('image/storage2.jpg');">
                <div class="bg-black-op-75">
                    <div class="content content-top text-center">
                        <div class="py-100">
                            <h1 class="font-w700 text-white mb-10">RESIK</h1>
                            <h2 class="h4 font-w400 text-white-op">Reservation & Keeping Product</h2>
                            <h2 class="h5 font-w400 text-white-op">Solusi Simpan Barang</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="bg-image" style="background-image: url('image/storage3.webp');">
                <div class="bg-black-op-75">
                    <div class="content content-top text-center">
                        <div class="py-100">
                            <h1 class="font-w700 text-white mb-10">RESIK</h1>
                            <h2 class="h4 font-w400 text-white-op">Reservation & Keeping Product</h2>
                            <h2 class="h5 font-w400 text-white-op">Solusi Simpan Barang</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="bg-image" style="background-image: url('image/storage1.jpg');">
                <div class="bg-black-op-75">
                    <div class="content content-top text-center">
                        <div class="py-100">
                            <h1 class="font-w700 text-white mb-10">RESIK</h1>
                            <h2 class="h4 font-w400 text-white-op">Reservation & Keeping Product</h2>
                            <h2 class="h5 font-w400 text-white-op">Solusi Simpan Barang</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Slider with inner dots and black arrows -->

    <!-- keunggulan -->
    <h2 class="content-heading">KEUNGGULAN <small>anda tidak salah memilih kami!</small></h2>
    <div class="row">
        <div class="col-sm-3">
            <div class="block block-bordered block-rounded invisible" data-toggle="appear" data-class="animated flipInX">
                <div class="block-content block-content-full">
                    <div class="py-30 text-center">
                        <div class="item item-2x item-circle bg-primary-lighter text-white mx-auto">
                            <i class="fa fa-video-camera text-primary"></i>
                        </div>
                        <div class="h4 pt-20 mb-0">Keamanan</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="block block-bordered block-rounded invisible" data-toggle="appear" data-class="animated flipInX">
                <div class="block-content block-content-full">
                    <div class="py-30 text-center">
                        <div class="item item-2x item-circle bg-danger-light text-white mx-auto">
                            <i class="fa fa-user-secret text-danger"></i>
                        </div>
                        <div class="h4 pt-20 mb-0">Privasi</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="block block-bordered block-rounded invisible" data-toggle="appear" data-class="animated flipInX">
                <div class="block-content block-content-full">
                    <div class="py-30 text-center">
                        <div class="item item-2x item-circle bg-info-light text-white mx-auto">
                            <i class="fa fa-envelope text-info"></i>
                        </div>
                        <div class="h4 pt-20 mb-0">Asuransi</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="block block-bordered block-rounded invisible" data-toggle="appear" data-class="animated flipInX">
                <div class="block-content block-content-full">
                    <div class="py-30 text-center">
                        <div class="item item-2x item-circle bg-success-light text-white mx-auto">
                            <i class="fa fa-building text-success"></i>
                        </div>
                        <div class="h4 pt-20 mb-0">Ruang Penyimpanan</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- cara order -->
    <h2 class="content-heading">CARA ORDER <small>online</small></h2>
    <div class="row">
        <div class="col-sm-2">
            <div class="block block-bordered block-rounded invisible" data-toggle="appear" data-offset="-200">
                <div class="block-content block-content-full ribbon ribbon-primary">
                    <div class="ribbon-box">1</div>
                    <div class="text-center">
                        <div class="item item-circle bg-info-light text-white mx-auto">
                            <i class="fa fa-desktop text-info"></i>
                        </div>
                        <div class="h4 pt-20 mb-0">Kunjungi Website</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="block block-bordered block-rounded invisible" data-toggle="appear" data-offset="-200" data-timeout="200">
                <div class="block-content block-content-full ribbon ribbon-primary">
                    <div class="ribbon-box">2</div>
                    <div class="text-center">
                        <div class="item item-circle bg-warning-light text-white mx-auto">
                            <i class="si si-cursor text-warning"></i>
                        </div>
                        <div class="h4 pt-20 mb-0">Pilih Ukuran & Harga</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="block block-bordered block-rounded invisible" data-toggle="appear" data-offset="-200" data-timeout="400">
                <div class="block-content block-content-full ribbon ribbon-primary">
                    <div class="ribbon-box">3</div>
                    <div class="text-center">
                        <div class="item item-circle bg-danger-light text-white mx-auto">
                            <i class="si si-pencil text-danger"></i>
                        </div>
                        <div class="h4 pt-20 mb-0">Isi Data Pribadi</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="block block-bordered block-rounded invisible" data-toggle="appear" data-offset="-200" data-timeout="600">
                <div class="block-content block-content-full ribbon ribbon-primary">
                    <div class="ribbon-box">4</div>
                    <div class="text-center">
                        <div class="item item-circle bg-danger-light text-white mx-auto">
                            <i class="fa fa-dollar text-danger"></i>
                        </div>
                        <div class="h4 pt-20 mb-0">Bayar Tagihan</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="block block-bordered block-rounded invisible" data-toggle="appear" data-offset="-200" data-timeout="800">
                <div class="block-content block-content-full ribbon ribbon-primary">
                    <div class="ribbon-box">5</div>
                    <div class="text-center">
                        <div class="item item-circle bg-primary-lighter text-white mx-auto">
                            <i class="si si-basket-loaded text-primary"></i>
                        </div>
                        <div class="h4 pt-20 mb-0">Pengiriman Barang</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="block block-bordered block-rounded invisible" data-toggle="appear" data-offset="-200" data-timeout="1000">
                <div class="block-content block-content-full ribbon ribbon-primary">
                    <div class="ribbon-box">6</div>
                    <div class="text-center">
                        <div class="item item-circle bg-success-light text-white mx-auto">
                            <i class="fa fa-save text-success"></i>
                        </div>
                        <div class="h4 pt-20 mb-0">Barang Tersimpan</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- END Main Container -->

@endsection