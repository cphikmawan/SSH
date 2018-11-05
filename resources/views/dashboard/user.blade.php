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
    Users <small class="d-none d-sm-inline">Ikhtisar</small>
</div>
<div class="row invisible" data-toggle="appear">
    <!-- Row #2 -->
    <div class="col-md-6 col-xl-3">
        <a class="block block-link-shadow text-center" >
            <div class="block-content block-content-full block-content-sm">
                <div class="font-w600">Djohan Prabowo</div>
            </div>
            <div class="block-content block-content-full bg-body-light">
                <img class="img-avatar" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/avatars/avatar5.jpg')}}" alt="">
            </div>
            <div class="block-content">
                <div class="row items-push text-center">
                    <div class="col-6">
                        <div class="item item-circle bg-success-light mx-auto mb-10">
                            <i class="fa fa-money text-success"></i>
                        </div>
                        <div class="text-muted">Rp. 980.000</div>
                    </div>
                    <div class="col-6">
                        <div class="item item-circle bg-info-light mx-auto mb-10">
                            <i class="si si-bubbles text-info"></i>
                        </div>
                        <div class="text-muted">4 Komentar</div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-6 col-xl-3">
        <a class="block block-link-shadow text-center" >
            <div class="block-content block-content-full block-content-sm">
                <div class="font-w600">Tegar Satrio Utomo</div>
            </div>
            <div class="block-content block-content-full bg-body-light">
                <img class="img-avatar" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/avatars/avatar5.jpg')}}" alt="">
            </div>
            <div class="block-content">
                <div class="row items-push text-center">
                    <div class="col-6">
                        <div class="item item-circle bg-success-light mx-auto mb-10">
                            <i class="fa fa-money text-success"></i>
                        </div>
                        <div class="text-muted">Rp 90.000</div>
                    </div>
                    <div class="col-6">
                        <div class="item item-circle bg-info-light mx-auto mb-10">
                            <i class="si si-bubbles text-info"></i>
                        </div>
                        <div class="text-muted">29 Komentar</div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-6 col-xl-3">
        <a class="block block-link-shadow text-center" >
            <div class="block-content block-content-full block-content-sm">
                <div class="font-w600">Firman Aqil</div>
            </div>
            <div class="block-content block-content-full bg-body-light">
                <img class="img-avatar" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/avatars/avatar5.jpg')}}" alt="">
            </div>
            <div class="block-content">
                <div class="row items-push text-center">
                    <div class="col-6">
                        <div class="item item-circle bg-success-light mx-auto mb-10">
                            <i class="fa fa-money text-success"></i>
                        </div>
                        <div class="text-muted">Rp. 209.000</div>
                    </div>
                    <div class="col-6">
                        <div class="item item-circle bg-info-light mx-auto mb-10">
                            <i class="si si-bubbles text-info"></i>
                        </div>
                        <div class="text-muted">9 Komentar</div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-6 col-xl-3">
        <a class="block block-link-shadow text-center" >
            <div class="block-content block-content-full block-content-sm">
                <div class="font-w600">Illham Hanafi</div>
            </div>
            <div class="block-content block-content-full bg-body-light">
                <img class="img-avatar" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/avatars/avatar5.jpg')}}" alt="">
            </div>
            <div class="block-content">
                <div class="row items-push text-center">
                    <div class="col-6">
                        <div class="item item-circle bg-success-light mx-auto mb-10">
                            <i class="fa fa-money text-success"></i>
                        </div>
                        <div class="text-muted">Rp. 260.000</div>
                    </div>
                    <div class="col-6">
                        <div class="item item-circle bg-info-light mx-auto mb-10">
                            <i class="si si-bubbles text-info"></i>
                        </div>
                        <div class="text-muted">8 Komentar</div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-6 col-xl-3">
        <a class="block block-link-shadow text-center" >
            <div class="block-content block-content-full block-content-sm">
                <div class="font-w600">Fuad Dary Rosyadi</div>
            </div>
            <div class="block-content block-content-full bg-body-light">
                <img class="img-avatar" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/avatars/avatar5.jpg')}}" alt="">
            </div>
            <div class="block-content">
                <div class="row items-push text-center">
                    <div class="col-6">
                        <div class="item item-circle bg-success-light mx-auto mb-10">
                            <i class="fa fa-money text-success"></i>
                        </div>
                        <div class="text-muted">Rp. 644.000</div>
                    </div>
                    <div class="col-6">
                        <div class="item item-circle bg-info-light mx-auto mb-10">
                            <i class="si si-bubbles text-info"></i>
                        </div>
                        <div class="text-muted">14 Komentar</div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-6 col-xl-3">
        <a class="block block-link-shadow text-center" >
            <div class="block-content block-content-full block-content-sm">
                <div class="font-w600">Satria Ariyawan</div>
            </div>
            <div class="block-content block-content-full bg-body-light">
                <img class="img-avatar" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/avatars/avatar5.jpg')}}" alt="">
            </div>
            <div class="block-content">
                <div class="row items-push text-center">
                    <div class="col-6">
                        <div class="item item-circle bg-success-light mx-auto mb-10">
                            <i class="fa fa-money text-success"></i>
                        </div>
                        <div class="text-muted">Rp. 80.000</div>
                    </div>
                    <div class="col-6">
                        <div class="item item-circle bg-info-light mx-auto mb-10">
                            <i class="si si-bubbles text-info"></i>
                        </div>
                        <div class="text-muted">17 Komentar</div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-6 col-xl-3">
        <a class="block block-link-shadow text-center" >
            <div class="block-content block-content-full block-content-sm">
                <div class="font-w600">Ichsan Sandi</div>
            </div>
            <div class="block-content block-content-full bg-body-light">
                <img class="img-avatar" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/avatars/avatar5.jpg')}}" alt="">
            </div>
            <div class="block-content">
                <div class="row items-push text-center">
                    <div class="col-6">
                        <div class="item item-circle bg-success-light mx-auto mb-10">
                            <i class="fa fa-money text-success"></i>
                        </div>
                        <div class="text-muted">Rp. 102.000</div>
                    </div>
                    <div class="col-6">
                        <div class="item item-circle bg-info-light mx-auto mb-10">
                            <i class="si si-bubbles text-info"></i>
                        </div>
                        <div class="text-muted">3 Komentar</div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-6 col-xl-3">
        <a class="block block-link-shadow text-center" >
            <div class="block-content block-content-full block-content-sm">
                <div class="font-w600">Azka Yasin</div>
            </div>
            <div class="block-content block-content-full bg-body-light">
                <img class="img-avatar" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/avatars/avatar5.jpg')}}" alt="">
            </div>
            <div class="block-content">
                <div class="row items-push text-center">
                    <div class="col-6">
                        <div class="item item-circle bg-success-light mx-auto mb-10">
                            <i class="fa fa-money text-success"></i>
                        </div>
                        <div class="text-muted">Rp. 276.000</div>
                    </div>
                    <div class="col-6">
                        <div class="item item-circle bg-info-light mx-auto mb-10">
                            <i class="si si-bubbles text-info"></i>
                        </div>
                        <div class="text-muted">2 Komentar</div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-6 col-xl-3">
        <a class="block block-link-shadow text-center" >
            <div class="block-content block-content-full block-content-sm">
                <div class="font-w600">Faris Didin A.</div>
            </div>
            <div class="block-content block-content-full bg-body-light">
                <img class="img-avatar" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/avatars/avatar5.jpg')}}" alt="">
            </div>
            <div class="block-content">
                <div class="row items-push text-center">
                    <div class="col-6">
                        <div class="item item-circle bg-success-light mx-auto mb-10">
                            <i class="fa fa-money text-success"></i>
                        </div>
                        <div class="text-muted">Rp. 134.000</div>
                    </div>
                    <div class="col-6">
                        <div class="item item-circle bg-info-light mx-auto mb-10">
                            <i class="si si-bubbles text-info"></i>
                        </div>
                        <div class="text-muted">0 Komentar</div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-6 col-xl-3">
        <a class="block block-link-shadow text-center" >
            <div class="block-content block-content-full block-content-sm">
                <div class="font-w600">Rohana Qudus</div>
            </div>
            <div class="block-content block-content-full bg-body-light">
                <img class="img-avatar" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/avatars/avatar5.jpg')}}" alt="">
            </div>
            <div class="block-content">
                <div class="row items-push text-center">
                    <div class="col-6">
                        <div class="item item-circle bg-success-light mx-auto mb-10">
                            <i class="fa fa-money text-success"></i>
                        </div>
                        <div class="text-muted">Rp 512.000</div>
                    </div>
                    <div class="col-6">
                        <div class="item item-circle bg-info-light mx-auto mb-10">
                            <i class="si si-bubbles text-info"></i>
                        </div>
                        <div class="text-muted">4 Komentar</div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-6 col-xl-3">
        <a class="block block-link-shadow text-center" >
            <div class="block-content block-content-full block-content-sm">
                <div class="font-w600">Aguel Satria</div>
            </div>
            <div class="block-content block-content-full bg-body-light">
                <img class="img-avatar" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/avatars/avatar5.jpg')}}" alt="">
            </div>
            <div class="block-content">
                <div class="row items-push text-center">
                    <div class="col-6">
                        <div class="item item-circle bg-success-light mx-auto mb-10">
                            <i class="fa fa-money text-success"></i>
                        </div>
                        <div class="text-muted">Rp. 26.000</div>
                    </div>
                    <div class="col-6">
                        <div class="item item-circle bg-info-light mx-auto mb-10">
                            <i class="si si-bubbles text-info"></i>
                        </div>
                        <div class="text-muted">3 Komentar</div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-6 col-xl-3">
        <a class="block block-link-shadow text-center" >
            <div class="block-content block-content-full block-content-sm">
                <div class="font-w600">Khawari Muhammad Dzakwan</div>
            </div>
            <div class="block-content block-content-full bg-body-light">
                <img class="img-avatar" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/avatars/avatar5.jpg')}}" alt="">
            </div>
            <div class="block-content">
                <div class="row items-push text-center">
                    <div class="col-6">
                        <div class="item item-circle bg-success-light mx-auto mb-10">
                            <i class="fa fa-money text-success"></i>
                        </div>
                        <div class="text-muted">Rp. 0</div>
                    </div>
                    <div class="col-6">
                        <div class="item item-circle bg-info-light mx-auto mb-10">
                            <i class="si si-bubbles text-info"></i>
                        </div>
                        <div class="text-muted">0 Komentar</div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <!-- END Row #2 -->
</div>
<div class="row invisible" data-toggle="appear">
    
</div>
@endsection