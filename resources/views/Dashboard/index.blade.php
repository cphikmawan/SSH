@extends('layouts.dashboard.app')

@section('title', 'Dashboard')

@section('aside')
    @include('layouts.dashboard.aside')
@endsection

@section('sidebar')
    @include('layouts.dashboard.sidebar')
@endsection

@section('header')
    @include('layouts.dashboard.header')    
@endsection

@section('content')
<div class="content-heading">
    <div class="dropdown float-right">
        <button type="button" class="btn btn-sm btn-secondary dropdown-toggle" id="ecom-orders-overview-drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Semua Waktu
        </button>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="ecom-orders-overview-drop">
            <a class="dropdown-item active" href="javascript:void(0)">
                <i class="fa fa-fw fa-calendar mr-5"></i>Minggu Ini
            </a>
            <a class="dropdown-item" href="javascript:void(0)">
                <i class="fa fa-fw fa-calendar mr-5"></i>Bulan Ini
            </a>
            <a class="dropdown-item" href="javascript:void(0)">
                <i class="fa fa-fw fa-calendar mr-5"></i>Tahun ini
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="javascript:void(0)">
                <i class="fa fa-fw fa-circle-o mr-5"></i>Semua Waktu
            </a>
        </div>
    </div>
    Posting <small class="d-none d-sm-inline">Ikhtisar</small>
</div>

<!-- Content Heading #1 -->
<!-- <div class="content-heading">
    Posting
    <small class="d-none d-sm-inline">Bulan Ini</small> 
</div> -->
<div class="row invisible" data-toggle="appear">
    <!-- Row #1 -->
    <div class="col-md-4">
        <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
            <div class="block-content block-content-full">
                <i class="fa fa-file-text-o fa-2x text-primary-light"></i>
                <div class="row pt-10 pb-30 text-center">
                    <div class="col-6 border-r">
                        <div class="js-appear-enabled animated fadeInLeft" data-toggle="appear" data-class="animated fadeInLeft">
                            <div class="font-size-h3 font-w600 text-primary" data-toggle="countTo" data-speed="1000" data-to="2">0</div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Total Posting</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="js-appear-enabled animated fadeInRight" data-toggle="appear" data-class="animated fadeInRight">
                            <div class="font-size-h3 font-w600 text-primary" data-toggle="countTo" data-speed="1000" data-to="1">0</div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Posting Baru</div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-4">
        <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
            <div class="block-content block-content-full">
                <i class="si si-doc fa-2x text-elegance-light"></i>
                <div class="row pt-10 pb-30 text-center">
                    <div class="col-6 border-r">
                        <div class="js-appear-enabled animated fadeInLeft" data-toggle="appear" data-class="animated fadeInLeft">
                            <div class="font-size-h3 font-w600 text-elegance" data-toggle="countTo" data-speed="1000" data-to="8">0</div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Total Halaman</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="js-appear-enabled animated fadeInRight" data-toggle="appear" data-class="animated fadeInRight">
                            <div class="font-size-h3 font-w600 text-elegance" data-toggle="countTo" data-speed="1000" data-to="1">0</div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Halaman Baru</div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-4">
        <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
            <div class="block-content block-content-full">
                <i class="si si-bubbles fa-2x text-corporate-light"></i>
                <div class="row pt-10 pb-30 text-center">
                    <div class="col-6 border-r">
                        <div class="js-appear-enabled animated fadeInLeft" data-toggle="appear" data-class="animated fadeInLeft">
                            <div class="font-size-h3 font-w600 text-corporate" data-toggle="countTo" data-speed="1000" data-to="150">0</div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Total Komentar</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="js-appear-enabled animated fadeInRight" data-toggle="appear" data-class="animated fadeInRight">
                            <div class="font-size-h3 font-w600 text-corporate" data-toggle="countTo" data-speed="1000" data-to="20">0</div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Komentar Baru</div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <!-- END Row #1 -->
</div>
<!-- Content Heading #2 -->
<div class="content-heading">
    Pengguna <small class="d-none d-sm-inline">Ikhtisar</small>
</div>
<div class="row invisible" data-toggle="appear">
    <!-- Row #2 -->
    <div class="col-6 col-xl-3">
        <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
            <div class="block-content block-content-full clearfix">
                <div class="float-right mt-15 d-none d-sm-block">
                    <i class="si si-users fa-2x text-pulse-light"></i>
                </div>
                <div class="font-size-h3 font-w600 text-pulse" data-toggle="countTo" data-speed="1000" data-to="94">0</div>
                <div class="font-size-sm font-w600 text-uppercase text-muted">Total Pengguna</div>
            </div>
        </a>
    </div>
    <div class="col-6 col-xl-3">
        <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
            <div class="block-content block-content-full clearfix">
                <div class="float-right mt-15 d-none d-sm-block">
                    <i class="si si-user-follow fa-2x text-pulse-light"></i>
                </div>
                <div class="font-size-h3 font-w600 text-pulse" data-toggle="countTo" data-speed="1000" data-to="15">0</div>
                <div class="font-size-sm font-w600 text-uppercase text-muted">Pengguna Baru</div>
            </div>
        </a>
    </div>
    <div class="col-6 col-xl-3">
        <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
            <div class="block-content block-content-full clearfix">
                <div class="float-right mt-15 d-none d-sm-block">
                    <i class="si si-emoticon-smile fa-2x text-earth-light"></i>
                </div>
                <div class="font-size-h3 font-w600 text-earth" data-toggle="countTo" data-speed="1000" data-to="65">0</div>
                <div class="font-size-sm font-w600 text-uppercase text-muted">Total Donatur</div>
            </div>
        </a>
    </div>
    <div class="col-6 col-xl-3">
        <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
            <div class="block-content block-content-full clearfix">
                <div class="float-right mt-15 d-none d-sm-block">
                    <i class="fa fa-money fa-2x text-earth-light"></i>
                </div>
                <div class="font-size-h3 font-w600 text-earth">Rp. <span data-toggle="countTo" data-speed="1000" data-to="8504000">0</span></div>
                <div class="font-size-sm font-w600 text-uppercase text-muted">Total Donasi</div>
            </div>
        </a>
    </div>
    <!-- END Row #2 -->
</div>
<div class="row invisible" data-toggle="appear">
    <!-- Row #3 -->
    <div class="col-md-12">
        <div class="block block-rounded block-bordered">
            <div class="block-header block-header-default border-b">
                <h3 class="block-title">
                    Donasi <small>Minggu Ini</small>
                </h3>
                <div class="block-options">
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                        <i class="si si-refresh"></i>
                    </button>
                    <button type="button" class="btn-block-option">
                        <i class="si si-wrench"></i>
                    </button>
                </div>
            </div>
            <div class="block-content block-content-full">
                <div class="pull-all pt-50">
                    <!-- Lines Chart Container -->
                    <canvas class="js-chartjs-dashboard-lines"></canvas>
                </div>
            </div>
            <div class="block-content">
                <div class="row items-push text-center">
                    <div class="col-6 col-sm-4">
                        <div class="font-w600 text-success">
                            <i class="fa fa-caret-up"></i> +16%
                        </div>
                        <div class="font-size-h4 font-w600">Rp. 1.440.000</div>
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Bulan Ini</div>
                    </div>
                    <div class="col-6 col-sm-4">
                        <div class="font-w600 text-danger">
                            <i class="fa fa-caret-down"></i> -3%
                        </div>
                        <div class="font-size-h4 font-w600">Rp. 320.000</div>
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Minggu Ini</div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="font-w600 text-success">
                            <i class="fa fa-caret-up"></i> +9%
                        </div>
                        <div class="font-size-h4 font-w600">Rp. 48.600</div>
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Rata - rata</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection