@extends('layouts.front.app')

@section('title', 'Harga')

@section('sidebar')
    @include('layouts.front.sidebar')
@endsection

@section('header')
    @include('layouts.front.header')    
@endsection

@section('content')
<!-- Projects -->
<h2 class="content-heading">
        <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary float-right">View More..</button>
        <i class="si si-briefcase mr-5"></i> Projects
    </h2>
    <div class="row items-push">
        <div class="col-md-6 col-xl-3">
            <div class="block block-rounded ribbon ribbon-modern ribbon-primary text-center">
                <div class="ribbon-box">$2500</div>
                <div class="block-content block-content-full">
                    <div class="item item-circle bg-danger text-danger-light mx-auto my-20">
                        <i class="fa fa-globe"></i>
                    </div>
                    <div class="text-warning">
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light">
                    <div class="font-w600 mb-5">Website Design</div>
                    <div class="font-size-sm text-muted">https://example.com</div>
                </div>
                <div class="block-content block-content-full">
                    <a class="btn btn-rounded btn-alt-secondary" href="javascript:void(0)">
                        <i class="fa fa-briefcase mr-5"></i>View Project
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="block block-rounded ribbon ribbon-modern ribbon-primary text-center">
                <div class="ribbon-box">$499</div>
                <div class="block-content block-content-full">
                    <div class="item item-circle bg-success text-success-light mx-auto my-20">
                        <i class="fa fa-birthday-cake"></i>
                    </div>
                    <div class="text-warning">
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light">
                    <div class="font-w600 mb-5">Special Icon Set</div>
                    <div class="font-size-sm text-muted">3000 icons</div>
                </div>
                <div class="block-content block-content-full">
                    <a class="btn btn-rounded btn-alt-secondary" href="javascript:void(0)">
                        <i class="fa fa-briefcase mr-5"></i>View Project
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="block block-rounded ribbon ribbon-modern ribbon-primary text-center">
                <div class="ribbon-box">$2999</div>
                <div class="block-content block-content-full">
                    <div class="item item-circle bg-info text-info-light mx-auto my-20">
                        <i class="fa fa-windows"></i>
                    </div>
                    <div class="text-warning">
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light">
                    <div class="font-w600 mb-5">Windows App</div>
                    <div class="font-size-sm text-muted">Accounting Dashboard</div>
                </div>
                <div class="block-content block-content-full">
                    <a class="btn btn-rounded btn-alt-secondary" href="javascript:void(0)">
                        <i class="fa fa-briefcase mr-5"></i>View Project
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="block block-rounded ribbon ribbon-modern ribbon-primary text-center">
                <div class="ribbon-box">$3999</div>
                <div class="block-content block-content-full">
                    <div class="item item-circle bg-warning text-warning-light mx-auto my-20">
                        <i class="fa fa-mobile"></i>
                    </div>
                    <div class="text-warning">
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light">
                    <div class="font-w600 mb-5">iOS App</div>
                    <div class="font-size-sm text-muted">Accounting Dashboard</div>
                </div>
                <div class="block-content block-content-full">
                    <a class="btn btn-rounded btn-alt-secondary" href="javascript:void(0)">
                        <i class="fa fa-briefcase mr-5"></i>View Project
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- END Projects -->
@endsection

