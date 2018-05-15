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
<nav class="breadcrumb bg-white push">
    <a class="breadcrumb-item" href="{{ url('/dashboard') }}">Dasbor</a>
    <span class="breadcrumb-item active">Posting</span>
</nav>
<div class="block">
    <div class="block-header block-header-default">
        <h3 class="block-title">Posting</h3>
        <div class="block-options">
            <button type="button" class="btn-block-option">
                <i class="fa fa-plus"></i> Posting Baru
            </button>
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                <i class="si si-refresh"></i>
            </button>
        </div>
    </div>
    <div class="block-content">
        <!-- Topics -->
        <table class="table table-striped table-borderless table-vcenter">
            <thead class="thead-light">
                <tr>
                    <th colspan="2">Judul Posting</th>
                    <th class="d-none d-md-table-cell text-center" style="width: 100px;">Balasan</th>
                    <th class="d-none d-md-table-cell text-center" style="width: 100px;">Dilihat</th>
                    <th class="d-none d-md-table-cell" style="width: 200px;">Komentar Terakhir</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center" style="width: 65px;">
                        <i class="si si-pin fa-2x"></i>
                    </td>
                    <td>
                        <a class="font-w600" href="#">Sunday Sharing Homeless Ekspedisi Ke 4</a>
                        <div class="font-size-sm text-muted mt-5">
                            <a href="be_pages_generic_profile.html">Fuad Dary</a> pada <em>16 Juli 2017</em>
                        </div>
                    </td>
                    <td class="d-none d-md-table-cell text-center">
                        <a class="font-w600" href="javascript:void(0)">45</a>
                    </td>
                    <td class="d-none d-md-table-cell text-center">
                        <a class="font-w600" href="javascript:void(0)">25</a>
                    </td>
                    <td class="d-none d-md-table-cell">
                        <span class="font-size-sm">oleh <a href="be_pages_generic_profile.html">Hikmawan</a><br>pada <em>14 Mei 2018</em></span>
                    </td>
                </tr>
                <tr>
                    <td class="text-center" style="width: 65px;">
                        <i class="si si-pin fa-2x"></i>
                    </td>
                    <td>
                        <a class="font-w600" href="#">Sunday Sharing Homeless Ekspedisi Ke 3</a>
                        <div class="font-size-sm text-muted mt-5">
                            <a href="be_pages_generic_profile.html">Ilham Penyok</a> pada <em>10 Juli 2017</em>
                        </div>
                    </td>
                    <td class="d-none d-md-table-cell text-center">
                        <a class="font-w600" href="javascript:void(0)">39</a>
                    </td>
                    <td class="d-none d-md-table-cell text-center">
                        <a class="font-w600" href="javascript:void(0)">91</a>
                    </td>
                    <td class="d-none d-md-table-cell">
                        <span class="font-size-sm">oleh <a href="be_pages_generic_profile.html">Hikmawan</a><br>pada <em>14 Mei 2018</em></span>
                    </td>
                </tr>
                <tr>
                    <td class="text-center" style="width: 65px;">
                        <i class="si si-pin fa-2x"></i>
                    </td>
                    <td>
                        <a class="font-w600" href="#">Sunday Sharing Homeless Ekspedisi Ke 2</a>
                        <div class="font-size-sm text-muted mt-5">
                            <a href="be_pages_generic_profile.html">Cahya Putra</a> pada <em>5 Juli 2017</em>
                        </div>
                    </td>
                    <td class="d-none d-md-table-cell text-center">
                        <a class="font-w600" href="javascript:void(0)">30</a>
                    </td>
                    <td class="d-none d-md-table-cell text-center">
                        <a class="font-w600" href="javascript:void(0)">75</a>
                    </td>
                    <td class="d-none d-md-table-cell">
                        <span class="font-size-sm">oleh <a href="be_pages_generic_profile.html">Hikmawan</a><br>pada <em>14 Mei 2018</em></span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <a class="font-w600" href="#">Sunday Sharing Homeless Ekspedisi Ke 1</a>
                        <div class="font-size-sm text-muted mt-5">
                            <a href="be_pages_generic_profile.html">Hikmawan</a> pada <em>1 Juli 2017</em>
                        </div>
                    </td>
                    <td class="d-none d-md-table-cell text-center">
                        <a class="font-w600" href="javascript:void(0)">36</a>
                    </td>
                    <td class="d-none d-md-table-cell text-center">
                        <a class="font-w600" href="javascript:void(0)">43</a>
                    </td>
                    <td class="d-none d-md-table-cell">
                        <span class="font-size-sm">oleh <a href="be_pages_generic_profile.html">Hikmawan</a><br>pada <em>14 Mei 2018</em></span>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- END Topics -->

        <!-- Pagination -->
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-end mr-20">
                <li class="page-item">
                    <a class="page-link" href="javascript:void(0)" aria-label="Previous">
                        <span aria-hidden="true">
                            <i class="fa fa-angle-left"></i>
                        </span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item active">
                    <a class="page-link" href="javascript:void(0)">1</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="javascript:void(0)" aria-label="Next">
                        <span aria-hidden="true">
                            <i class="fa fa-angle-right"></i>
                        </span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- END Pagination -->
    </div>
</div>
@endsection