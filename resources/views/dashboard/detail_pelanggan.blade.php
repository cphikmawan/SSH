@extends('layouts.dashboard.app')

@section('title', 'Detail Pelanggan')

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
                <h2 class="h4 font-w400 text-white-op mb-0">Detail Data Pelanggan.</h2>
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
            <a class="breadcrumb-item" href="/pelanggan">Pelanggan</a>
            <span class="breadcrumb-item active">Detail Pelanggan</span>
        </nav>
    </div>
</div>
@endsection