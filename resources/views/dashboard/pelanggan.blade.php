@extends('layouts.dashboard.app')

@section('title', 'Pelanggan')

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
                <h2 class="h4 font-w400 text-white-op mb-0">Layani Pelanggan Dengan Senyum, Sapa, Salam.</h2>
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
            <span class="breadcrumb-item active">Pelanggan</span>
        </nav>
    </div>
</div>
<div class="content">
    <div class="row gutters-tiny">
        <!-- Latest Orders -->
        <div class="col-xl-12">
            <h2 class="content-heading">Pelanggan</h2>
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
@endsection