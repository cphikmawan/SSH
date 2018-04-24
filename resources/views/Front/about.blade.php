@extends('layouts.app')

@section('title', 'Donation')

@section('sidebar')
    @include('layouts.sidebar')
@endsection

@section('header')
    @include('layouts.header')    
@endsection

@section('content')

            <!-- Main Container -->
            <main id="main-container">
                <!-- Hero -->
                <div class="bg-primary">
                    <div class="bg-pattern bg-black-op-25" style="background-image: url('{{('codebase/02 - Codebase Source (HTML)/src/assets/img/various/bg-pattern.png')}}');">
                        <div class="content content-top text-center">
                            <div class="py-50">
                                <h1 class="font-w700 text-white mb-10">SSH</h1>
                                <h2 class="h4 font-w400 text-white-op">Saturday Homeless Sharing</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Hero -->

                <!-- Page Content -->
                <div class="content content-full">
                    <!-- Info -->
                    <div class="block">
                        <div class="block-content">
                            <div class="row nice-copy">
                                <div class="col-md-4 py-30">
                                    <h3 class="h4 font-w700 text-uppercase pb-10 border-b border-3x">Who We <span class="text-primary">Are</span>.</h3>
                                    <p class="mb-0">Posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos.</p>
                                </div>
                                <div class="col-md-4 py-30">
                                    <h3 class="h4 font-w700 text-uppercase pb-10 border-b border-3x">What We <span class="text-primary">Do</span>.</h3>
                                    <p class="mb-0">Posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos.</p>
                                </div>
                                <div class="col-md-4 py-30">
                                    <h3 class="h4 font-w700 text-uppercase pb-10 border-b border-3x">Why Join <span class="text-primary">Us</span>.</h3>
                                    <p class="mb-0">Posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos.</p>
                                </div>
                                <div class="col-md-12 py-30">
                                    <h3 class="h4 font-w700 text-uppercase text-center pb-10 border-b border-3x mb-0">Quick <span class="text-primary">Statistics</span>.</h3>

                                    <!-- CountTo ([data-toggle="countTo"] is initialized in Codebase() -> uiHelperCoreAppearCountTo()) -->
                                    <!-- For more info and examples you can check out https://github.com/mhuggins/jquery-countTo -->
                                    <div class="row text-center">
                                        <div class="col-sm-6 col-md-3 py-30">
                                            <div class="mb-20">
                                                <i class="si si-briefcase fa-3x text-primary"></i>
                                            </div>
                                            <div class="font-size-h1 font-w700 text-black mb-5" data-toggle="countTo" data-to="9600" data-after="+">0</div>
                                            <div class="font-w600 text-muted text-uppercase">Donators</div>
                                        </div>
                                        <div class="col-sm-6 col-md-3 py-30">
                                            <div class="mb-20">
                                                <i class="si si-users fa-3x text-primary"></i>
                                            </div>
                                            <div class="font-size-h1 font-w700 text-black mb-5" data-toggle="countTo" data-to="760" data-after="+">0</div>
                                            <div class="font-w600 text-muted text-uppercase">Volunteer</div>
                                        </div>
                                        <div class="col-sm-6 col-md-3 py-30">
                                            <div class="mb-20">
                                                <i class="si si-wallet fa-3x text-primary"></i>
                                            </div>
                                            <div class="font-size-h1 font-w700 text-black mb-5" data-toggle="countTo" data-to="50" data-after=".000.000+">USD</div>
                                            <div class="font-w600 text-muted text-uppercase">donations (IDR)</div>
                                        </div>
                                        <div class="col-sm-6 col-md-3 py-30">
                                            <div class="mb-20">
                                                <i class="si si-map fa-3x text-primary"></i>
                                            </div>
                                            <div class="font-size-h1 font-w700 text-black mb-5" data-toggle="countTo" data-to="9" data-after="">0</div>
                                            <div class="font-w600 text-muted text-uppercase">cities</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Info -->

<!-- Team -->
                    <div class="row gutters-tiny py-20">
                        <div class="col-md-6 col-xl-4">
                            <div class="block text-center">
                                <div class="block-content">
                                    <img class="img-avatar img-avatar96" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/avatars/avatar1.jpg')}}" alt="">
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="font-size-h4 font-w600 mb-0">Udin IMM</div>
                                    <div class="font-size-h5 text-muted">Founder</div>
                                </div>
                                <div class="block-content block-content-full bg-body-light">
                                    <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="block text-center">
                                <div class="block-content">
                                    <img class="img-avatar img-avatar96" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/avatars/avatar10.jpg')}}" alt="">
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="font-size-h4 font-w600 mb-0">DR Fu</div>
                                    <div class="font-size-h5 text-muted">Co-Founder</div>
                                </div>
                                <div class="block-content block-content-full bg-body-light">
                                    <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="block text-center">
                                <div class="block-content">
                                    <img class="img-avatar img-avatar96" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/avatars/avatar14.jpg')}}" alt="">
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="font-size-h4 font-w600 mb-0">Cloud</div>
                                    <div class="font-size-h5 text-muted">Manager</div>
                                </div>
                                <div class="block-content block-content-full bg-body-light">
                                    <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a class="btn btn-circle btn-secondary" href="javascript:void(0)">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Team -->

                </div>
                <!-- END Page Content -->

                <!-- We are hiring -->
                <div class="bg-body-dark">
                    <div class="content">
                        <div class="py-50 nice-copy text-center">
                            <h3 class="font-w700 mb-10">We Need Your Support !</h3>
                            <h4 class="font-w400 text-muted mb-30">Share Happiness With Us</h4>
                            <a class="btn btn-hero btn-noborder btn-lg btn-rounded btn-primary" href="be_pages_generic_contact.html">DONATE</a>
                        </div>
                    </div>
                </div>
                <!-- END We are hiring -->

            </main>

@endsection