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
<h2 class="content-heading">Galeri <small>Acara</small></h2>
<div class="breadcrumb bg-white push">
    <button type="button" class="btn btn-sm btn-rounded btn-noborder btn-alt-success">
        <i class="fa fa-plus text-earth-light"></i> Tambah Gambar
    </button>
</div>
<div class="row items-push js-gallery">
    <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
        <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
            <img class="img-fluid options-item" src="{{('image/front1.jpg')}}" alt="">
            <div class="options-overlay bg-black-op-75">
                <div class="options-overlay-content">
                    <h3 class="h4 text-white mb-5">Gambar</h3>
                    <h4 class="h6 text-white-op mb-15">Keterangan Lebih Lanjut</h4>
                    <a class="btn btn-sm btn-rounded btn-noborder btn-alt-primary min-width-75 img-lightbox" href="{{('image/front1.jpg')}}">
                        <i class="fa fa-search-plus"></i> Lihat
                    </a>
                    <a class="btn btn-sm btn-rounded btn-noborder btn-alt-success min-width-75" href="javascript:void(0)"><i class="fa fa-pencil"></i> Ubah</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
        <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
            <img class="img-fluid options-item" src="{{('image/front2.jpg')}}" alt="">
            <div class="options-overlay bg-black-op-75">
                <div class="options-overlay-content">
                    <h3 class="h4 text-white mb-5">Gambar</h3>
                    <h4 class="h6 text-white-op mb-15">Keterangan Lebih Lanjut</h4>
                    <a class="btn btn-sm btn-rounded btn-noborder btn-alt-primary min-width-75 img-lightbox" href="{{('image/front2.jpg')}}">
                        <i class="fa fa-search-plus"></i> Lihat
                    </a>
                    <a class="btn btn-sm btn-rounded btn-noborder btn-alt-success min-width-75" href="javascript:void(0)"><i class="fa fa-pencil"></i> Ubah</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
        <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
            <img class="img-fluid options-item" src="{{('image/front5.jpg')}}" alt="">
            <div class="options-overlay bg-black-op-75">
                <div class="options-overlay-content">
                    <h3 class="h4 text-white mb-5">Gambar</h3>
                    <h4 class="h6 text-white-op mb-15">Keterangan Lebih Lanjut</h4>
                    <a class="btn btn-sm btn-rounded btn-noborder btn-alt-primary min-width-75 img-lightbox" href="{{('image/front5.jpg')}}">
                        <i class="fa fa-search-plus"></i> Lihat
                    </a>
                    <a class="btn btn-sm btn-rounded btn-noborder btn-alt-success min-width-75" href="javascript:void(0)"><i class="fa fa-pencil"></i> Ubah</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
        <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
            <img class="img-fluid options-item" src="{{('image/front8.jpg')}}" alt="">
            <div class="options-overlay bg-black-op-75">
                <div class="options-overlay-content">
                    <h3 class="h4 text-white mb-5">Gambar</h3>
                    <h4 class="h6 text-white-op mb-15">Keterangan Lebih Lanjut</h4>
                    <a class="btn btn-sm btn-rounded btn-noborder btn-alt-primary min-width-75 img-lightbox" href="{{('image/front8.jpg.jpg')}}">
                        <i class="fa fa-search-plus"></i> Lihat
                    </a>
                    <a class="btn btn-sm btn-rounded btn-noborder btn-alt-success min-width-75" href="javascript:void(0)"><i class="fa fa-pencil"></i> Ubah</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
        <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
            <img class="img-fluid options-item" src="{{('image/front3.jpg')}}" alt="">
            <div class="options-overlay bg-black-op-75">
                <div class="options-overlay-content">
                    <h3 class="h4 text-white mb-5">Gambar</h3>
                    <h4 class="h6 text-white-op mb-15">Keterangan Lebih Lanjut</h4>
                    <a class="btn btn-sm btn-rounded btn-noborder btn-alt-primary min-width-75 img-lightbox" href="{{('image/front3.jpg')}}">
                        <i class="fa fa-search-plus"></i> Lihat
                    </a>
                    <a class="btn btn-sm btn-rounded btn-noborder btn-alt-success min-width-75" href="javascript:void(0)"><i class="fa fa-pencil"></i> Ubah</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
        <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
            <img class="img-fluid options-item" src="{{('image/front6.jpg')}}" alt="">
            <div class="options-overlay bg-black-op-75">
                <div class="options-overlay-content">
                    <h3 class="h4 text-white mb-5">Gambar</h3>
                    <h4 class="h6 text-white-op mb-15">Keterangan Lebih Lanjut</h4>
                    <a class="btn btn-sm btn-rounded btn-noborder btn-alt-primary min-width-75 img-lightbox" href="{{('image/front6.jpg')}}">
                        <i class="fa fa-search-plus"></i> Lihat
                    </a>
                    <a class="btn btn-sm btn-rounded btn-noborder btn-alt-success min-width-75" href="javascript:void(0)"><i class="fa fa-pencil"></i> Ubah</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
        <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
            <img class="img-fluid options-item" src="{{('image/front9.jpg')}}" alt="">
            <div class="options-overlay bg-black-op-75">
                <div class="options-overlay-content">
                    <h3 class="h4 text-white mb-5">Gambar</h3>
                    <h4 class="h6 text-white-op mb-15">Keterangan Lebih Lanjut</h4>
                    <a class="btn btn-sm btn-rounded btn-noborder btn-alt-primary min-width-75 img-lightbox" href="{{('image/front9.jpg')}}">
                        <i class="fa fa-search-plus"></i> Lihat
                    </a>
                    <a class="btn btn-sm btn-rounded btn-noborder btn-alt-success min-width-75" href="javascript:void(0)"><i class="fa fa-pencil"></i> Ubah</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
        <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
            <img class="img-fluid options-item" src="{{('image/front4.jpg')}}" alt="">
            <div class="options-overlay bg-black-op-75">
                <div class="options-overlay-content">
                    <h3 class="h4 text-white mb-5">Gambar</h3>
                    <h4 class="h6 text-white-op mb-15">Keterangan Lebih Lanjut</h4>
                    <a class="btn btn-sm btn-rounded btn-noborder btn-alt-primary min-width-75 img-lightbox" href="{{('image/front4.jpg')}}">
                        <i class="fa fa-search-plus"></i> Lihat
                    </a>
                    <a class="btn btn-sm btn-rounded btn-noborder btn-alt-success min-width-75" href="javascript:void(0)"><i class="fa fa-pencil"></i> Ubah</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
        <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
            <img class="img-fluid options-item" src="{{('image/front7.jpg')}}" alt="">
            <div class="options-overlay bg-black-op-75">
                <div class="options-overlay-content">
                    <h3 class="h4 text-white mb-5">Gambar</h3>
                    <h4 class="h6 text-white-op mb-15">Keterangan Lebih Lanjut</h4>
                    <a class="btn btn-sm btn-rounded btn-noborder btn-alt-primary min-width-75 img-lightbox" href="{{('image/front7.jpg')}}">
                        <i class="fa fa-search-plus"></i> Lihat
                    </a>
                    <a class="btn btn-sm btn-rounded btn-noborder btn-alt-success min-width-75" href="javascript:void(0)"><i class="fa fa-pencil"></i> Ubah</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
        <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
            <img class="img-fluid options-item" src="{{('image/front10.jpg')}}" alt="">
            <div class="options-overlay bg-black-op-75">
                <div class="options-overlay-content">
                    <h3 class="h4 text-white mb-5">Gambar</h3>
                    <h4 class="h6 text-white-op mb-15">Keterangan Lebih Lanjut</h4>
                    <a class="btn btn-sm btn-rounded btn-noborder btn-alt-primary min-width-75 img-lightbox" href="{{('image/front10.jpg')}}">
                        <i class="fa fa-search-plus"></i> Lihat
                    </a>
                    <a class="btn btn-sm btn-rounded btn-noborder btn-alt-success min-width-75" href="javascript:void(0)"><i class="fa fa-pencil"></i> Ubah</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection