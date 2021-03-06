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
<div class="bg-image" style="background-image: url('image/storage.jpg');">
    <div class="bg-black-op-75">
        <div class="content content-top content-full text-center">
            <div class="py-20">
                <h1 class="h2 font-w700 text-white mb-10">RESIK @yield('title')</h1>
                <h2 class="h4 font-w400 text-white-op mb-0">Selamat Datang Admin, cek <a class="text-primary-light link-effect" href="/pesanan">12 pesanan yang tertunda</a>.</h2>
            </div>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Breadcrumb -->
<div class="bg-body-light border-b">
    <div class="content py-5 text-center">
        <nav class="breadcrumb bg-body-light mb-0">
            <a class="breadcrumb-item" href="/dashboard">RESIK</a>
            <span class="breadcrumb-item active">Dashboard</span>
        </nav>
    </div>
</div>

<!-- Page Content -->
<div class="content">
    <!-- Statistics -->
    <!-- CountTo ([data-toggle="countTo"] is initialized in Codebase() -> uiHelperCoreAppearCountTo()) -->
    <!-- For more info and examples you can check out https://github.com/mhuggins/jquery-countTo -->
    <div class="content-heading">
        <div class="dropdown float-right">
            <button type="button" class="btn btn-sm btn-secondary dropdown-toggle" id="ecom-dashboard-stats-drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Today
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="ecom-dashboard-stats-drop">
                <a class="dropdown-item active" href="javascript:void(0)">
                    <i class="fa fa-fw fa-calendar mr-5"></i>Today
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-calendar mr-5"></i>This Week
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-calendar mr-5"></i>This Month
                </a>
                <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-calendar mr-5"></i>This Year
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0)">
                    <i class="fa fa-fw fa-circle-o mr-5"></i>All Time
                </a>
            </div>
        </div>
        Statistik
    </div>
    <div class="row gutters-tiny">
        <!-- Earnings -->
        <div class="col-md-6 col-xl-3">
            <a class="block block-rounded block-transparent bg-gd-elegance" href="javascript:void(0)">
                <div class="block-content block-content-full block-sticky-options">
                    <div class="block-options">
                        <div class="block-options-item">
                            <i class="fa fa-area-chart text-white-op"></i>
                        </div>
                    </div>
                    <div class="py-20 text-center">
                        <div class="font-size-h2 font-w700 mb-0 text-white" data-toggle="countTo" data-to="87350000" data-before="Rp.">0</div>
                        <div class="font-size-sm font-w600 text-uppercase text-white-op">Pendapatan</div>
                    </div>
                </div>
            </a>
        </div>
        <!-- END Earnings -->

         <!-- Earnings -->
        <div class="col-md-6 col-xl-3">
            <a class="block block-rounded block-transparent bg-gd-aqua" href="javascript:void(0)">
                <div class="block-content block-content-full block-sticky-options">
                    <div class="block-options">
                        <div class="block-options-item">
                            <i class="fa fa-area-chart text-white-op"></i>
                        </div>
                    </div>
                    <div class="py-20 text-center">
                        <div class="font-size-h2 font-w700 mb-0 text-white" data-toggle="countTo" data-to="21245267" data-before="Rp.">0</div>
                        <div class="font-size-sm font-w600 text-uppercase text-white-op">Pengeluaran</div>
                    </div>
                </div>
            </a>
        </div>
        <!-- END Earnings -->

        <!-- Orders -->
        <div class="col-md-6 col-xl-3">
            <a class="block block-rounded block-transparent bg-gd-dusk" href="/pesanan">
                <div class="block-content block-content-full block-sticky-options">
                    <div class="block-options">
                        <div class="block-options-item">
                            <i class="fa fa-archive text-white-op"></i>
                        </div>
                    </div>
                    <div class="py-20 text-center">
                        <div class="font-size-h2 font-w700 mb-0 text-white" data-toggle="countTo" data-to="223">0</div>
                        <div class="font-size-sm font-w600 text-uppercase text-white-op">Pesanan</div>
                    </div>
                </div>
            </a>
        </div>
        <!-- END Orders -->

        <!-- New Customers -->
        <div class="col-md-6 col-xl-3">
            <a class="block block-rounded block-transparent bg-gd-sea" href="/pelanggan">
                <div class="block-content block-content-full block-sticky-options">
                    <div class="block-options">
                        <div class="block-options-item">
                            <i class="fa fa-users text-white-op"></i>
                        </div>
                    </div>
                    <div class="py-20 text-center">
                        <div class="font-size-h2 font-w700 mb-0 text-white" data-toggle="countTo" data-to="189">0</div>
                        <div class="font-size-sm font-w600 text-uppercase text-white-op">Pelanggan</div>
                    </div>
                </div>
            </a>
        </div>
        <!-- END New Customers -->
    </div>
    <!-- END Statistics -->

    <!-- Latest Orders and Top Products -->
    <div class="row gutters-tiny">
        <!-- Latest Orders -->
        <div class="col-xl-12">
            <h2 class="content-heading">Pesanan Terbaru</h2>
            <div class="block block-rounded">
                <div class="block-content">
                    <table class="table table-borderless table-striped">
                        <thead>
                            <tr>
                                <th class="d-none d-sm-table-cell">ID</th>
                                <th class="d-none d-sm-table-cell">Status</th>
                                <th class="d-none d-sm-table-cell">Pelanggan</th>
                                <th class="text-center d-none d-sm-table-cell">Kode Penyimpanan</th>
                                <th class="text-center d-none d-sm-table-cell">Kode Pesanan</th>
                                <th class="text-center d-none d-sm-table-cell">Tagihan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a class="font-w600" href="/detail_pesanan">ORD.1845</a>
                                </td>
                                <td>
                                    <span class="badge badge-info">Proses</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <a href="/detail_pelanggan">Cahya P.</a>
                                </td>
                                <td class="text-center">
                                    <span class="text-black">PES.1845</span>
                                </td>
                                <td class="text-center">
                                    <span class="text-black">PES.1845</span>
                                </td>
                                <td class="text-center">
                                    <span class="text-black">Rp. 925000</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a class="font-w600" href="/detail_pesanan">ORD.1844</a>
                                </td>
                                <td>
                                    <span class="badge badge-warning">Pending</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <a href="/detail_pelanggan">Wisnu R.</a>
                                </td>
                                <td class="text-center">
                                    <span class="text-black">PES.1845</span>
                                </td>
                                <td class="text-center">
                                    <span class="text-black">PES.1845</span>
                                </td>
                                <td class="text-center">
                                    <span class="text-black">Rp. 111121</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a class="font-w600" href="/detail_pesanan">ORD.1846</a>
                                </td>
                                <td>
                                    <span class="badge badge-success">Selesai</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <a href="/detail_pelanggan">Fitria N.</a>
                                </td>
                                <td class="text-center">
                                    <span class="text-black">PES.1845</span>
                                </td>
                                <td class="text-center">
                                    <span class="text-black">PES.1845</span>
                                </td>
                                <td class="text-center">
                                    <span class="text-black">Rp. 620000</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a class="font-w600" href="/detail_pesanan">ORD.1843</a>
                                </td>
                                <td>
                                    <span class="badge badge-danger">Batal</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <a href="/detail_pelanggan">Fikri S.</a>
                                </td>
                                <td class="text-center">
                                    <span class="text-black">PES.1845</span>
                                </td>
                                <td class="text-center">
                                    <span class="text-black">PES.1845</span>
                                </td>
                                <td class="text-center">
                                    <span class="text-black">Rp. 678000</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a class="font-w600" href="/detail_pesanan">ORD.1842</a>
                                </td>
                                <td>
                                    <span class="badge badge-info">Proses</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <a href="/detail_pelanggan">Dini R.</a>
                                </td>
                                <td class="text-center">
                                    <span class="text-black">PES.1845</span>
                                </td>
                                <td class="text-center">
                                    <span class="text-black">PES.1845</span>
                                </td>
                                <td class="text-center">
                                    <span class="text-black">Rp. 745000</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- END Latest Orders -->
    </div>
    <!-- END Latest Orders and Top Products -->
</div>
<!-- END Page Content -->
@endsection