@extends('layouts.dashboard.app')

@section('title', 'Pesanan')

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
                <h2 class="h4 font-w400 text-white-op mb-0">Orderan Banyak Alhamdulillah!</h2>
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
            <span class="breadcrumb-item active">Pesanan</span>
        </nav>
    </div>
</div>

<div class="content">
    <div class="content-heading">
        <div class="dropdown float-right">
            <button type="button" class="btn btn-sm btn-secondary dropdown-toggle" id="ecom-orders-stats-drop" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Today
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="ecom-orders-stats-drop">
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
        <!-- Pending -->
        <div class="col-md-6 col-xl-3">
            <a class="block block-rounded block-transparent bg-gd-sun" href="javascript:void(0)">
                <div class="block-content block-content-full block-sticky-options">
                    <div class="block-options">
                        <div class="block-options-item">
                            <i class="fa fa-spinner fa-spin text-white-op"></i>
                        </div>
                    </div>
                    <div class="py-20 text-center">
                        <div class="font-size-h2 font-w700 mb-0 text-white" data-toggle="countTo" data-to="12">0</div>
                        <div class="font-size-sm font-w600 text-uppercase text-white-op">Pending</div>
                    </div>
                </div>
            </a>
        </div>
        <!-- END Pending -->

        <!-- Canceled -->
        <div class="col-md-6 col-xl-3">
            <a class="block block-rounded block-transparent bg-gd-cherry" href="javascript:void(0)">
                <div class="block-content block-content-full block-sticky-options">
                    <div class="block-options">
                        <div class="block-options-item">
                            <i class="fa fa-times text-white-op"></i>
                        </div>
                    </div>
                    <div class="py-20 text-center">
                        <div class="font-size-h2 font-w700 mb-0 text-white" data-toggle="countTo" data-to="2">0</div>
                        <div class="font-size-sm font-w600 text-uppercase text-white-op">Batal</div>
                    </div>
                </div>
            </a>
        </div>
        <!-- END Canceled -->

        <!-- Completed -->
        <div class="col-md-6 col-xl-3">
            <a class="block block-rounded block-transparent bg-gd-lake" href="javascript:void(0)">
                <div class="block-content block-content-full block-sticky-options">
                    <div class="block-options">
                        <div class="block-options-item">
                            <i class="fa fa-check text-white-op"></i>
                        </div>
                    </div>
                    <div class="py-20 text-center">
                        <div class="font-size-h2 font-w700 mb-0 text-white" data-toggle="countTo" data-to="21">0</div>
                        <div class="font-size-sm font-w600 text-uppercase text-white-op">Selesai</div>
                    </div>
                </div>
            </a>
        </div>
        <!-- END Completed -->

        <!-- All -->
        <div class="col-md-6 col-xl-3">
            <a class="block block-rounded block-transparent bg-gd-dusk" href="javascript:void(0)">
                <div class="block-content block-content-full block-sticky-options">
                    <div class="block-options">
                        <div class="block-options-item">
                            <i class="fa fa-archive text-white-op"></i>
                        </div>
                    </div>
                    <div class="py-20 text-center">
                        <div class="font-size-h2 font-w700 mb-0 text-white" data-toggle="countTo" data-to="35">0</div>
                        <div class="font-size-sm font-w600 text-uppercase text-white-op">Semua</div>
                    </div>
                </div>
            </a>
        </div>
        <!-- END All -->
    </div>
    <div class="row gutters-tiny">
        <!-- Latest Orders -->
        <div class="col-xl-12">
            <h2 class="content-heading">Semua Pesanan</h2>
            <div class="block block-rounded">
                <div class="block-content">
                    <table class="table table-borderless table-striped">
                        <thead>
                            <tr>
                                <th class="d-none d-sm-table-cell">ID</th>
                                <th class="d-none d-sm-table-cell">Status</th>
                                <th class="d-none d-sm-table-cell">Pelanggan</th>
                                <th class="d-none d-sm-table-cell">Tanggal Pesanan</th>
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
                                <td class="">
                                    <span class="text-black">09-10-2018</span>
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
                                <td class="">
                                    <span class="text-black">09-10-2018</span>
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
                                <td class="">
                                    <span class="text-black">09-10-2018</span>
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
                                <td class="">
                                    <span class="text-black">09-10-2018</span>
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
                                <td class="">
                                    <span class="text-black">09-10-2018</span>
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
</div>
<!-- END Statistics -->
@endsection