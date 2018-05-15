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
<!-- Donations Overview -->
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
                <i class="fa fa-fw fa-calendar mr-5"></i>Tahun Ini
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="javascript:void(0)">
                <i class="fa fa-fw fa-circle-o mr-5"></i>Semua
            </a>
        </div>
    </div>
    Donasi
</div>

<!-- Chart.js Chart (initialized in js/pages/be_pages_ecom_dashboard.js), for more examples you can check out http://www.chartjs.org/docs/ -->
<div class="row gutters-tiny">
    <!-- Orders Earnings Chart -->
    <div class="col-md">
        <div class="block block-rounded block-mode-loading-refresh">
            <div class="block-header">
                <h3 class="block-title">
                    Statistik
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
            <div class="block-content block-content-full bg-body-light text-center">
                <div class="row gutters-tiny">
                    <div class="col-4">
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Total Donasi</div>
                        <div class="font-size-h3 font-w600">Rp. 8.504.000</div>
                    </div>
                    <div class="col-4">
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Saldo Sekarang</div>
                        <div class="font-size-h3 font-w600 text-success">Rp. 1.504.000</div>
                    </div>
                    <div class="col-4">
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Pengeluaran</div>
                        <div class="font-size-h3 font-w600 text-danger">Rp. 7.000.000</div>
                    </div>
                </div>
            </div>
            <div class="block-content block-content-full">
                <div class="pull-all">
                    <!-- Earnings Chart Container -->
                    <canvas class="js-chartjs-dashboard-lines"></canvas>
                </div>
            </div>
        </div>
    </div>
    <!-- END Orders Earnings Chart -->
</div>

<!-- Latest Transactions -->
<div class="row gutters-tiny">
    <!-- Latest Transactions -->
    <div class="col-xl">
        <h2 class="content-heading">Donasi Terakhir</h2>
        <div class="block block-rounded">
            <div class="block-content">
                <table class="table table-borderless table-striped">
                    <thead>
                        <tr>
                            <th style="width: 100px;">ID</th>
                            <th>Status</th>
                            <th class="d-none d-sm-table-cell">Pelanggan</th>
                            <th class="text-right">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <a class="font-w600" href="#">DON.151</a>
                            </td>
                            <td>
                                <span class="badge badge-info">Proses</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <a href="#">Satria Ariyawan</a>
                            </td>
                            <td class="text-right">
                                <span class="text-black">Rp. 443.000</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a class="font-w600" href="#">DON.150</a>
                            </td>
                            <td>
                                <span class="badge badge-info">Proses</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <a href="#">Wahyu Pujiono</a>
                            </td>
                            <td class="text-right">
                                <span class="text-black">Rp. 130.000</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a class="font-w600" href="#">DON.149</a>
                            </td>
                            <td>
                                <span class="badge badge-danger">Gagal</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <a href="#">Ilham M. Misbahuddin</a>
                            </td>
                            <td class="text-right">
                                <span class="text-black">Rp. 132.000</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a class="font-w600" href="#">DON.148</a>
                            </td>
                            <td>
                                <span class="badge badge-info">Proses</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <a href="#">Fuad Dary Rosyadi</a>
                            </td>
                            <td class="text-right">
                                <span class="text-black">Rp. 534.000</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a class="font-w600" href="#">DON.147</a>
                            </td>
                            <td>
                                <span class="badge badge-info">Proses</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <a href="#">Afif Ridho Kamal P.</a>
                            </td>
                            <td class="text-right">
                                <span class="text-black">Rp. 968.000</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a class="font-w600" href="#">DON.146</a>
                            </td>
                            <td>
                                <span class="badge badge-success">Sukses</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <a href="#">Afif Ridho Kamal P.</a>
                            </td>
                            <td class="text-right">
                                <span class="text-black">Rp. 620.000</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a class="font-w600" href="#">DON.145</a>
                            </td>
                            <td>
                                <span class="badge badge-success">Sukses</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <a href="#">Hafara Firdausy</a>
                            </td>
                            <td class="text-right">
                                <span class="text-black">Rp. 93.000</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a class="font-w600" href="#">DON.144</a>
                            </td>
                            <td>
                                <span class="badge badge-warning">Tunda</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <a href="#">Cahya Putra Hikmawan</a>
                            </td>
                            <td class="text-right">
                                <span class="text-black">Rp. 166.000</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a class="font-w600" href="#">DON.143</a>
                            </td>
                            <td>
                                <span class="badge badge-danger">Gagal</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <a href="#">Dinda Kharisma F.</a>
                            </td>
                            <td class="text-right">
                                <span class="text-black">Rp. 678.000</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a class="font-w600" href="#">DON.142</a>
                            </td>
                            <td>
                                <span class="badge badge-success">Sukses</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <a href="#">Rizky Fenaldo</a>
                            </td>
                            <td class="text-right">
                                <span class="text-black">Rp. 75.000</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- END Latest Orders -->
</div>
@endsection