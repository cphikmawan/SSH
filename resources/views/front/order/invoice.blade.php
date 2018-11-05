@extends('layouts.front.app')

@section('title', 'Invoice')

@section('sidebar')
    @include('layouts.front.sidebar')
@endsection

@section('header')
    @include('layouts.front.header')    
@endsection

@section('content')
<h2 class="content-heading d-print-none">
    <span class="badge badge-sm badge-danger float-right">Invoice Juga Dikirimkan Ke Email</span>
    <i class="fa fa-envelope"> Invoice</i>
</h2>
<div class="block">
    <div class="block-header block-header-default">
        <h3 class="block-title">#INV0015</h3>
        <div class="block-options">
            <!-- Print Page functionality is initialized in Codebase() -> uiHelperPrint() -->
            <button type="button" class="btn-block-option" onclick="Codebase.helpers('print-page');">
                <i class="si si-printer"></i> Cetak Invoice
            </button>
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                <i class="si si-refresh"></i>
            </button>
        </div>
    </div>
    <div class="block-content">
        <!-- Invoice Info -->
        <div class="row my-20">
            <!-- Company Info -->
            <div class="col-6">
                <p class="h3">Perusahaan</p>
                <address>
                    Jl. Teknik Kimia, Institut Teknologi Sepuluh Nopember<br>
                    Sukolilo 60111<br>
                    Surabaya, Jawa Timur<br><br>
                    <i class="fa fa-phone mr-5"></i> 03183018310<br>
                    <i class="fa fa-whatsapp mr-5"></i> 08383018310<br>
                    <i class="fa fa-envelope-o mr-5"></i> <a href="javascript:void(0)">customerservis@resik.co.id</a>
                </address>
            </div>
            <!-- END Company Info -->

            <!-- Client Info -->
            <div class="col-6 text-right">
                <p class="h3">Pelanggan</p>
                <address>
                    Jawa Timur<br>
                    Surabaya<br>
                    Sukolilo, 60111<br>
                    client@gmail.com
                </address>
            </div>
            <!-- END Client Info -->
        </div>
        <!-- END Invoice Info -->

        <!-- Table -->
        <div class="table-responsive push">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 60px;"></th>
                        <th>Pesanan</th>
                        <th class="text-center" style="width: 90px;">Durasi</th>
                        <th class="text-right" style="width: 120px;">Satuan</th>
                        <th class="text-right" style="width: 120px;">Harga Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td>
                            <p class="font-w600 mb-5">Cage</p>
                            <div class="text-muted">2m x 2m x 2m</div>
                        </td>
                        <td class="text-center">
                            <span class="badge badge-pill badge-primary">5</span>
                        </td>
                        <td class="text-right">Rp. 50.000</td>
                        <td class="text-right">Rp. 250.000</td>
                    </tr>
                    <tr>
                        <td colspan="4" class="font-w600 text-right">Total Pembayaran</td>
                        <td class="text-right">Rp. 250.000</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- END Table -->
    </div>
</div>
<!-- END Invoice -->
@endsection

