@extends('layouts.front.app')

@section('title', 'Harga')

@section('sidebar')
    @include('layouts.front.sidebar')
@endsection

@section('header')
    @include('layouts.front.header')    
@endsection

@section('content')
<!-- Projects -->
<h2 class="content-heading">
    {{-- <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary float-right"></button> --}}
    <i class="fa fa-dollar mr-5"></i> Harga Penyimpanan
</h2>
<div class="row items-push">
    <div class="col-md-6 col-xl-4">
        <div class="block block-rounded ribbon ribbon-modern ribbon-danger text-center">
            <div class="ribbon-box">Rp.25K/Bulan</div>
            <div class="block-content block-content-full">
                <div class="item item-circle bg-primary text-danger-light mx-auto my-20">
                    <i class="fa fa-dropbox"></i>
                </div>
            </div>
            <div class="block-content block-content-full block-content-sm bg-body-light">
                <div class="font-w600 mb-5">Kardus atau Box</div>
                <div class="font-size-sm text-muted">36cm x 42cm x 30cm</div>
            </div>
            <div class="block-content block-content-full">
                <a class="btn btn-rounded btn-alt-secondary" href="/formulir">
                    <i class="fa fa-briefcase mr-5"></i>Pesan Sekarang
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="block block-rounded ribbon ribbon-modern ribbon-danger text-center">
            <div class="ribbon-box">Rp.60K/3Bulan</div>
            <div class="block-content block-content-full">
                <div class="item item-circle bg-primary text-danger-light mx-auto my-20">
                    <i class="fa fa-dropbox"></i>
                </div>
            </div>
            <div class="block-content block-content-full block-content-sm bg-body-light">
                <div class="font-w600 mb-5">Kardus atau Box</div>
                <div class="font-size-sm text-muted">36cm x 42cm x 30cm</div>
            </div>
            <div class="block-content block-content-full">
                <a class="btn btn-rounded btn-alt-secondary" href="/formulir">
                    <i class="fa fa-briefcase mr-5"></i>Pesan Sekarang
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="block block-rounded ribbon ribbon-modern ribbon-danger text-center">
            <div class="ribbon-box">Rp.200K/Tahun</div>
            <div class="block-content block-content-full">
                <div class="item item-circle bg-primary text-danger-light mx-auto my-20">
                    <i class="fa fa-dropbox"></i>
                </div>
            </div>
            <div class="block-content block-content-full block-content-sm bg-body-light">
                <div class="font-w600 mb-5">Kardus atau Box</div>
                <div class="font-size-sm text-muted">36cm x 42cm x 30cm</div>
            </div>
            <div class="block-content block-content-full">
                <a class="btn btn-rounded btn-alt-secondary" href="/formulir">
                    <i class="fa fa-briefcase mr-5"></i>Pesan Sekarang
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row items-push">
    <div class="col-md-6 col-xl-4">
        <div class="block block-rounded ribbon ribbon-modern ribbon-danger text-center">
            <div class="ribbon-box">Rp.35K/Bulan</div>
            <div class="block-content block-content-full">
                <div class="item item-circle bg-info text-success-light mx-auto my-20">
                    <i class="si si-social-dropbox"></i>
                </div>
            </div>
            <div class="block-content block-content-full block-content-sm bg-body-light">
                <div class="font-w600 mb-5">Big Box</div>
                <div class="font-size-sm text-muted">1m x 1m x 1m</div>
            </div>
            <div class="block-content block-content-full">
                <a class="btn btn-rounded btn-alt-secondary" href="/formulir">
                    <i class="fa fa-briefcase mr-5"></i>Pesan Sekarang
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="block block-rounded ribbon ribbon-modern ribbon-danger text-center">
            <div class="ribbon-box">Rp.90K/3Bulan</div>
            <div class="block-content block-content-full">
                <div class="item item-circle bg-info text-success-light mx-auto my-20">
                    <i class="si si-social-dropbox"></i>
                </div>
            </div>
            <div class="block-content block-content-full block-content-sm bg-body-light">
                <div class="font-w600 mb-5">Big Box</div>
                <div class="font-size-sm text-muted">1m x 1m x 1m</div>
            </div>
            <div class="block-content block-content-full">
                <a class="btn btn-rounded btn-alt-secondary" href="/formulir">
                    <i class="fa fa-briefcase mr-5"></i>Pesan Sekarang
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="block block-rounded ribbon ribbon-modern ribbon-danger text-center">
            <div class="ribbon-box">Rp.350K/Tahun</div>
            <div class="block-content block-content-full">
                <div class="item item-circle bg-info text-success-light mx-auto my-20">
                    <i class="si si-social-dropbox"></i>
                </div>
            </div>
            <div class="block-content block-content-full block-content-sm bg-body-light">
                <div class="font-w600 mb-5">Big Box</div>
                <div class="font-size-sm text-muted">1m x 1m x 1m</div>
            </div>
            <div class="block-content block-content-full">
                <a class="btn btn-rounded btn-alt-secondary" href="/formulir">
                    <i class="fa fa-briefcase mr-5"></i>Pesan Sekarang
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row items-push">
    <div class="col-md-6 col-xl-4">
        <div class="block block-rounded ribbon ribbon-modern ribbon-danger text-center">
            <div class="ribbon-box">Rp.50K/Bulan</div>
            <div class="block-content block-content-full">
                <div class="item item-circle bg-success text-info-light mx-auto my-20">
                    <i class="si si-home"></i>
                </div>
            </div>
            <div class="block-content block-content-full block-content-sm bg-body-light">
                <div class="font-w600 mb-5">Cage</div>
                <div class="font-size-sm text-muted">2m x 2m x 2m</div>
            </div>
            <div class="block-content block-content-full">
                <a class="btn btn-rounded btn-alt-secondary" href="/formulir">
                    <i class="fa fa-briefcase mr-5"></i>Pesan Sekarang
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="block block-rounded ribbon ribbon-modern ribbon-danger text-center">
            <div class="ribbon-box">Rp.135K/3Bulan</div>
            <div class="block-content block-content-full">
                <div class="item item-circle bg-success text-info-light mx-auto my-20">
                    <i class="si si-home"></i>
                </div>
            </div>
            <div class="block-content block-content-full block-content-sm bg-body-light">
                <div class="font-w600 mb-5">Cage</div>
                <div class="font-size-sm text-muted">2m x 2m x 2m</div>
            </div>
            <div class="block-content block-content-full">
                <a class="btn btn-rounded btn-alt-secondary" href="/formulir">
                    <i class="fa fa-briefcase mr-5"></i>Pesan Sekarang
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="block block-rounded ribbon ribbon-modern ribbon-danger text-center">
            <div class="ribbon-box">Rp.1.500K/Tahun</div>
            <div class="block-content block-content-full">
                <div class="item item-circle bg-success text-info-light mx-auto my-20">
                    <i class="si si-home"></i>
                </div>
            </div>
            <div class="block-content block-content-full block-content-sm bg-body-light">
                <div class="font-w600 mb-5">Cage</div>
                <div class="font-size-sm text-muted">2m x 2m x 2m</div>
            </div>
            <div class="block-content block-content-full">
                <a class="btn btn-rounded btn-alt-secondary" href="/formulir">
                    <i class="fa fa-briefcase mr-5"></i>Pesan Sekarang
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row items-push">
    <div class="col-md-6 col-xl-4"></div>
    <div class="col-md-6 col-xl-4">
        <div class="block block-rounded ribbon ribbon-modern ribbon-danger text-center">
            <div class="ribbon-box">Rp.???/Bulan</div>
            <div class="block-content block-content-full">
                <div class="item item-circle bg-danger text-warning-light mx-auto my-20">
                    <i class="si si-question"></i>
                </div>
            </div>
            <div class="block-content block-content-full block-content-sm bg-body-light">
                <div class="font-w600 mb-5">Tidak ada ukuran yang cocok?</div>
                <div class="font-size-sm text-muted">pesan cage yang lebih besar</div>
            </div>
            <div class="block-content block-content-full">
                <a class="btn btn-rounded btn-alt-secondary" href="/contact">
                    <i class="fa fa-briefcase mr-5"></i>Hubungi Kami
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4"></div>    
</div>
<!-- END Projects -->
@endsection

