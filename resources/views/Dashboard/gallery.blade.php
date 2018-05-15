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
            <img class="img-fluid options-item" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo16.jpg')}}" alt="">
            <div class="options-overlay bg-black-op-75">
                <div class="options-overlay-content">
                    <h3 class="h4 text-white mb-5">Gambar</h3>
                    <h4 class="h6 text-white-op mb-15">Keterangan Lebih Lanjut</h4>
                    <a class="btn btn-sm btn-rounded btn-noborder btn-alt-primary min-width-75 img-lightbox" href="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo16@2x.jpg')}}">
                        <i class="fa fa-search-plus"></i> Lihat
                    </a>
                    <a class="btn btn-sm btn-rounded btn-noborder btn-alt-success min-width-75" href="javascript:void(0)"><i class="fa fa-pencil"></i> Ubah</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
        <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
            <img class="img-fluid options-item" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo15.jpg')}}" alt="">
            <div class="options-overlay bg-black-op-75">
                <div class="options-overlay-content">
                    <h3 class="h4 text-white mb-5">Gambar</h3>
                    <h4 class="h6 text-white-op mb-15">Keterangan Lebih Lanjut</h4>
                    <a class="btn btn-sm btn-rounded btn-noborder btn-alt-primary min-width-75 img-lightbox" href="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo15@2x.jpg')}}">
                        <i class="fa fa-search-plus"></i> Lihat
                    </a>
                    <a class="btn btn-sm btn-rounded btn-noborder btn-alt-success min-width-75" href="javascript:void(0)"><i class="fa fa-pencil"></i> Ubah</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
        <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
            <img class="img-fluid options-item" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo14.jpg')}}" alt="">
            <div class="options-overlay bg-black-op-75">
                <div class="options-overlay-content">
                    <h3 class="h4 text-white mb-5">Gambar</h3>
                    <h4 class="h6 text-white-op mb-15">Keterangan Lebih Lanjut</h4>
                    <a class="btn btn-sm btn-rounded btn-noborder btn-alt-primary min-width-75 img-lightbox" href="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo14@2x.jpg')}}">
                        <i class="fa fa-search-plus"></i> Lihat
                    </a>
                    <a class="btn btn-sm btn-rounded btn-noborder btn-alt-success min-width-75" href="javascript:void(0)"><i class="fa fa-pencil"></i> Ubah</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
        <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
            <img class="img-fluid options-item" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo13.jpg')}}" alt="">
            <div class="options-overlay bg-black-op-75">
                <div class="options-overlay-content">
                    <h3 class="h4 text-white mb-5">Gambar</h3>
                    <h4 class="h6 text-white-op mb-15">Keterangan Lebih Lanjut</h4>
                    <a class="btn btn-sm btn-rounded btn-noborder btn-alt-primary min-width-75 img-lightbox" href="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo13@2x.jpg')}}">
                        <i class="fa fa-search-plus"></i> Lihat
                    </a>
                    <a class="btn btn-sm btn-rounded btn-noborder btn-alt-success min-width-75" href="javascript:void(0)"><i class="fa fa-pencil"></i> Ubah</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
        <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
            <img class="img-fluid options-item" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo12.jpg')}}" alt="">
            <div class="options-overlay bg-black-op-75">
                <div class="options-overlay-content">
                    <h3 class="h4 text-white mb-5">Gambar</h3>
                    <h4 class="h6 text-white-op mb-15">Keterangan Lebih Lanjut</h4>
                    <a class="btn btn-sm btn-rounded btn-noborder btn-alt-primary min-width-75 img-lightbox" href="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo12@2x.jpg')}}">
                        <i class="fa fa-search-plus"></i> Lihat
                    </a>
                    <a class="btn btn-sm btn-rounded btn-noborder btn-alt-success min-width-75" href="javascript:void(0)"><i class="fa fa-pencil"></i> Ubah</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
        <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
            <img class="img-fluid options-item" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo11.jpg')}}" alt="">
            <div class="options-overlay bg-black-op-75">
                <div class="options-overlay-content">
                    <h3 class="h4 text-white mb-5">Gambar</h3>
                    <h4 class="h6 text-white-op mb-15">Keterangan Lebih Lanjut</h4>
                    <a class="btn btn-sm btn-rounded btn-noborder btn-alt-primary min-width-75 img-lightbox" href="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo11@2x.jpg')}}">
                        <i class="fa fa-search-plus"></i> Lihat
                    </a>
                    <a class="btn btn-sm btn-rounded btn-noborder btn-alt-success min-width-75" href="javascript:void(0)"><i class="fa fa-pencil"></i> Ubah</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
        <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
            <img class="img-fluid options-item" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo10.jpg')}}" alt="">
            <div class="options-overlay bg-black-op-75">
                <div class="options-overlay-content">
                    <h3 class="h4 text-white mb-5">Gambar</h3>
                    <h4 class="h6 text-white-op mb-15">Keterangan Lebih Lanjut</h4>
                    <a class="btn btn-sm btn-rounded btn-noborder btn-alt-primary min-width-75 img-lightbox" href="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo10@2x.jpg')}}">
                        <i class="fa fa-search-plus"></i> Lihat
                    </a>
                    <a class="btn btn-sm btn-rounded btn-noborder btn-alt-success min-width-75" href="javascript:void(0)"><i class="fa fa-pencil"></i> Ubah</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
        <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
            <img class="img-fluid options-item" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo9.jpg')}}" alt="">
            <div class="options-overlay bg-black-op-75">
                <div class="options-overlay-content">
                    <h3 class="h4 text-white mb-5">Gambar</h3>
                    <h4 class="h6 text-white-op mb-15">Keterangan Lebih Lanjut</h4>
                    <a class="btn btn-sm btn-rounded btn-noborder btn-alt-primary min-width-75 img-lightbox" href="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo9@2x.jpg')}}">
                        <i class="fa fa-search-plus"></i> Lihat
                    </a>
                    <a class="btn btn-sm btn-rounded btn-noborder btn-alt-success min-width-75" href="javascript:void(0)"><i class="fa fa-pencil"></i> Ubah</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
        <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
            <img class="img-fluid options-item" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo8.jpg')}}" alt="">
            <div class="options-overlay bg-black-op-75">
                <div class="options-overlay-content">
                    <h3 class="h4 text-white mb-5">Gambar</h3>
                    <h4 class="h6 text-white-op mb-15">Keterangan Lebih Lanjut</h4>
                    <a class="btn btn-sm btn-rounded btn-noborder btn-alt-primary min-width-75 img-lightbox" href="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo8@2x.jpg')}}">
                        <i class="fa fa-search-plus"></i> Lihat
                    </a>
                    <a class="btn btn-sm btn-rounded btn-noborder btn-alt-success min-width-75" href="javascript:void(0)"><i class="fa fa-pencil"></i> Ubah</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
        <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
            <img class="img-fluid options-item" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo7.jpg')}}" alt="">
            <div class="options-overlay bg-black-op-75">
                <div class="options-overlay-content">
                    <h3 class="h4 text-white mb-5">Gambar</h3>
                    <h4 class="h6 text-white-op mb-15">Keterangan Lebih Lanjut</h4>
                    <a class="btn btn-sm btn-rounded btn-noborder btn-alt-primary min-width-75 img-lightbox" href="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo7@2x.jpg')}}">
                        <i class="fa fa-search-plus"></i> Lihat
                    </a>
                    <a class="btn btn-sm btn-rounded btn-noborder btn-alt-success min-width-75" href="javascript:void(0)"><i class="fa fa-pencil"></i> Ubah</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
        <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
            <img class="img-fluid options-item" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo6.jpg')}}" alt="">
            <div class="options-overlay bg-black-op-75">
                <div class="options-overlay-content">
                    <h3 class="h4 text-white mb-5">Gambar</h3>
                    <h4 class="h6 text-white-op mb-15">Keterangan Lebih Lanjut</h4>
                    <a class="btn btn-sm btn-rounded btn-noborder btn-alt-primary min-width-75 img-lightbox" href="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo6@2x.jpg')}}">
                        <i class="fa fa-search-plus"></i> Lihat
                    </a>
                    <a class="btn btn-sm btn-rounded btn-noborder btn-alt-success min-width-75" href="javascript:void(0)"><i class="fa fa-pencil"></i> Ubah</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
        <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
            <img class="img-fluid options-item" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo5.jpg')}}" alt="">
            <div class="options-overlay bg-black-op-75">
                <div class="options-overlay-content">
                    <h3 class="h4 text-white mb-5">Gambar</h3>
                    <h4 class="h6 text-white-op mb-15">Keterangan Lebih Lanjut</h4>
                    <a class="btn btn-sm btn-rounded btn-noborder btn-alt-primary min-width-75 img-lightbox" href="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo5@2x.jpg')}}">
                        <i class="fa fa-search-plus"></i> Lihat
                    </a>
                    <a class="btn btn-sm btn-rounded btn-noborder btn-alt-success min-width-75" href="javascript:void(0)"><i class="fa fa-pencil"></i> Ubah</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection