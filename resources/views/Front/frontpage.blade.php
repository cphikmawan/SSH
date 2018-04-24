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

                <!-- Slider with inner dots and black arrows -->
                <div class="block">
                    <div class="block-header block-header-default">
                    </div>
                    <div class="js-slider slick-nav-black slick-dotted-inner slick-dotted-white" data-dots="true" data-arrows="true">
                        <div>
                <div class="bg-image" style="background-image: url('{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo27@2x.jpg')}}');">
                    <div class="bg-black-op-75">
                        <div class="content content-top text-center">
                            <div class="py-100">
                                <h1 class="font-w700 text-white mb-10">SSH</h1>
                                <h2 class="h4 font-w400 text-white-op">Saturday Sharing Homeless</h2>
                            </div>
                        </div>
                    </div>
                </div>

                        </div>
                        <div>
                <div class="bg-image" style="background-image: url('{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo22@2x.jpg')}}');">
                    <div class="bg-black-op-75">
                        <div class="content content-top text-center">
                            <div class="py-100">
                                <h1 class="font-w700 text-white mb-10">SSH</h1>
                                <h2 class="h4 font-w400 text-white-op">Sunday Sharing Homeless</h2>
                            </div>
                        </div>
                    </div>
                </div>

                        </div>
                        <div>
                <div class="bg-image" style="background-image: url('{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo23@2x.jpg')}}');">
                    <div class="bg-black-op-75">
                        <div class="content content-top text-center">
                            <div class="py-100">
                                <h1 class="font-w700 text-white mb-10">SSH</h1>
                                <h2 class="h4 font-w400 text-white-op">Sunday Sharing Homeless</h2>
                            </div>
                        </div>
                    </div>
                </div>

                        </div>
                </div>
                <!-- END Slider with inner dots and black arrows -->
                </div>

                <!-- Blog and Sidebar -->
                <div class="content">
                    <div class="row items-push py-30">
                        <!-- Posts -->
                        <div class="col-xl-8">
                            <div class="mb-50">
                                <div class="overflow-hidden rounded mb-20" style="height: 200px;">
                                    <a class="img-link" href="be_pages_generic_story.html">
                                        <img class="img-fluid" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo3@2x.jpg')}}"" alt="">
                                    </a>
                                </div>
                                <h3 class="h4 font-w700 text-uppercase mb-5">Sunday Sharing Homeless Expedisi 4</h3>
                                <div class="text-muted mb-10">
                                    <span class="mr-15">
                                        <i class="fa fa-fw fa-calendar mr-5"></i>July 16, 2017
                                    </span>
                                    <a class="text-muted mr-15" href="be_pages_generic_profile.html">
                                        <i class="fa fa-fw fa-user mr-5"></i>John Smith
                                    </a>
                                    <a class="text-muted" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-tag mr-5"></i>News
                                    </a>
                                </div>
                                <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                                <a class="link-effect font-w600" href="be_pages_generic_story.html">Read More..</a>
                            </div>
                            <div class="mb-50">
                                <div class="overflow-hidden rounded mb-20" style="height: 200px;">
                                    <a class="img-link" href="be_pages_generic_story.html">
                                        <img class="img-fluid" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo7@2x.jpg')}}" alt="">
                                    </a>
                                </div>
                                <h3 class="h4 font-w700 text-uppercase mb-5">Sunday Sharing Homeless Expedisi 3</h3>
                                <div class="text-muted mb-10">
                                    <span class="mr-15">
                                        <i class="fa fa-fw fa-calendar mr-5"></i>July 10, 2017
                                    </span>
                                    <a class="text-muted mr-15" href="be_pages_generic_profile.html">
                                        <i class="fa fa-fw fa-user mr-5"></i>John Smith
                                    </a>
                                    <a class="text-muted" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-tag mr-5"></i>Inpiration
                                    </a>
                                </div>
                                <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                                <a class="link-effect font-w600" href="be_pages_generic_story.html">Read More..</a>
                            </div>
                            <div class="mb-50">
                                <div class="overflow-hidden rounded mb-20" style="height: 200px;">
                                    <a class="img-link" href="be_pages_generic_story.html">
                                        <img class="img-fluid" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo28@2x.jpg')}}" alt="">
                                    </a>
                                </div>
                                <h3 class="h4 font-w700 text-uppercase mb-5">Sunday Sharing Homeless Expedisi 2</h3>
                                <div class="text-muted mb-10">
                                    <span class="mr-15">
                                        <i class="fa fa-fw fa-calendar mr-5"></i>July 5, 2017
                                    </span>
                                    <a class="text-muted mr-15" href="be_pages_generic_profile.html">
                                        <i class="fa fa-fw fa-user mr-5"></i>John Smith
                                    </a>
                                    <a class="text-muted" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-tag mr-5"></i>Travel
                                    </a>
                                </div>
                                <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                                <a class="link-effect font-w600" href="be_pages_generic_story.html">Read More..</a>
                            </div>
                            <div class="mb-50">
                                <div class="overflow-hidden rounded mb-20" style="height: 200px;">
                                    <a class="img-link" href="be_pages_generic_story.html">
                                        <img class="img-fluid" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo30@2x.jpg')}}" alt="">
                                    </a>
                                </div>
                                <h3 class="h4 font-w700 text-uppercase mb-5">Sunday Sharing Homeless Expedisi 1</h3>
                                <div class="text-muted mb-10">
                                    <span class="mr-15">
                                        <i class="fa fa-fw fa-calendar mr-5"></i>July 1, 2017
                                    </span>
                                    <a class="text-muted mr-15" href="be_pages_generic_profile.html">
                                        <i class="fa fa-fw fa-user mr-5"></i>John Smith
                                    </a>
                                    <a class="text-muted" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-tag mr-5"></i>Motivation
                                    </a>
                                </div>
                                <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                                <a class="link-effect font-w600" href="be_pages_generic_story.html">Read More..</a>
                            </div>
                            <nav class="clearfix push">
                                <a class="btn btn-secondary min-width-100 float-right" href="javascript:void(0)">
                                    Next <i class="fa fa-arrow-right ml-5"></i>
                                </a>
                                <a class="btn btn-secondary min-width-100 float-left" href="javascript:void(0)">
                                    <i class="fa fa-arrow-left mr-5"></i> Prev
                                </a>
                            </nav>
                            <hr class="d-xl-none">
                        </div>
                        <!-- END Posts -->

                        <!-- Sidebar -->
                        <div class="col-xl-4">
                            <!-- Twitter Feed -->
                            <div class="block block-transparent">
                                <div class="block-header">
                                    <h3 class="block-title text-uppercase">Comments</h3>
                                </div>
                                <div class="block-content">
                                    <div class="media mb-20">
                                        <img class="img-avatar img-avatar32 d-flex mr-20" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/avatars/avatar13.jpg')}}" alt="">
                                        <div class="media-body">
                                            <p class="mb-5">In gravida nulla. Nulla vel metus scelerisque ante sollicitudin. <a class="text-elegance" href="javascript:void(0)">#startup</a> <a class="text-elegance" href="javascript:void(0)">#life</a></p>
                                            <div class="font-size-sm text-muted">10 hrs ago</div>
                                        </div>
                                    </div>
                                    <div class="media mb-20">
                                        <img class="img-avatar img-avatar32 d-flex mr-20" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/avatars/avatar5.jpg')}}" alt="">
                                        <div class="media-body">
                                            <p class="mb-5">Vestibulum in vulputate at, tempus viverra turpis. Fusce <a href="javascript:void(0)">condimentum</a> nunc ac nisi vulputate fringilla.</p>
                                            <div class="font-size-sm text-muted">15 hrs ago</div>
                                        </div>
                                    </div>
                                    <div class="media mb-20">
                                        <img class="img-avatar img-avatar32 d-flex mr-20" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/avatars/avatar6.jpg')}}" alt="">
                                        <div class="media-body">
                                            <p class="mb-5">In gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</p>
                                            <div class="font-size-sm text-muted">2 days ago</div>
                                        </div>
                                    </div>
                                    <div class="media mb-20">
                                        <img class="img-avatar img-avatar32 d-flex mr-20" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/avatars/avatar16.jpg')}}" alt="">
                                        <div class="media-body">
                                            <p class="mb-5">Vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum <a href="javascript:void(0)">nunc</a> ac nisi vulputate fringilla. <a class="text-elegance" href="javascript:void(0)">#web</a> <a class="text-elegance" href="javascript:void(0)">#stuff</a></p>
                                            <div class="font-size-sm text-muted">5 days ago</div>
                                        </div>
                                    </div>
                                    <div class="media mb-20">
                                        <img class="img-avatar img-avatar32 d-flex mr-20" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/avatars/avatar8.jpg')}}" alt="">
                                        <div class="media-body">
                                            <p class="mb-5">Vestibulum in vulputate at, tempus viverra turpis. Fusce <a href="javascript:void(0)">condimentum</a> nunc ac nisi vulputate fringilla.</p>
                                            <div class="font-size-sm text-muted">1 week ago</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Twitter Feed -->

                            <!-- Categories -->
                            <div class="block block-transparent">
                                <div class="block-header">
                                    <h3 class="block-title text-uppercase">
                                        <i class="fa fa-fw fa-list mr-5"></i> Category
                                    </h3>
                                </div>
                                <div class="block-content">
                                    <ul class="nav nav-pills flex-column push">
                                        <li class="nav-item">
                                            <a class="nav-link d-flex align-items-center justify-content-between active" href="javascript:void(0)">
                                                <span><i class="fa fa-fw fa-star mr-5"></i> News</span>
                                                <span class="badge badge-pill badge-secondary">59</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                                <span><i class="fa fa-fw fa-magic mr-5"></i> Events</span>
                                                <span class="badge badge-pill badge-secondary">40</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                                <span><i class="fa fa-fw fa-briefcase mr-5"></i> Donators</span>
                                                <span class="badge badge-pill badge-secondary">95</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                                <span><i class="fa fa-fw fa-pencil mr-5"></i> Documentation</span>
                                                <span class="badge badge-pill badge-secondary">25</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                                <span><i class="fa fa-fw fa-book mr-5"></i> Volunteer</span>
                                                <span class="badge badge-pill badge-secondary">49</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                                <span><i class="fa fa-fw fa-newspaper-o mr-5"></i> Updates</span>
                                                <span class="badge badge-pill badge-secondary">78</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- END Categories -->

                            <!-- Tag Cloud -->
                            <div class="block block-transparent">
                                <div class="block-header">
                                    <h3 class="block-title text-uppercase">
                                        <i class="fa fa-fw fa-tags mr-5"></i> Tag
                                    </h3>
                                </div>
                                <div class="block-content block-content-full">
                                    <a class="btn btn-sm btn-alt-secondary mb-5" href="javascript:void(0)">
                                        <i class="fa fa-tag text-muted mr-5"></i>Social
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary mb-5" href="javascript:void(0)">
                                        <i class="fa fa-tag text-muted mr-5"></i>Donator
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary mb-5" href="javascript:void(0)">
                                        <i class="fa fa-tag text-muted mr-5"></i>Event
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary mb-5" href="javascript:void(0)">
                                        <i class="fa fa-tag text-muted mr-5"></i>Surabaya
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary mb-5" href="javascript:void(0)">
                                        <i class="fa fa-tag text-muted mr-5"></i>Lempuyangan
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary mb-5" href="javascript:void(0)">
                                        <i class="fa fa-tag text-muted mr-5"></i>Maps
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary mb-5" href="javascript:void(0)">
                                        <i class="fa fa-tag text-muted mr-5"></i>Volunteer
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary mb-5" href="javascript:void(0)">
                                        <i class="fa fa-tag text-muted mr-5"></i>Keputih
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary mb-5" href="javascript:void(0)">
                                        <i class="fa fa-tag text-muted mr-5"></i>Makanan
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary mb-5" href="javascript:void(0)">
                                        <i class="fa fa-tag text-muted mr-5"></i>Pakaian
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary mb-5" href="javascript:void(0)">
                                        <i class="fa fa-tag text-muted mr-5"></i>Gebang
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary mb-5" href="javascript:void(0)">
                                        <i class="fa fa-tag text-muted mr-5"></i>Tegal
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary mb-5" href="javascript:void(0)">
                                        <i class="fa fa-tag text-muted mr-5"></i>Nginden
                                    </a>
                                </div>
                            </div>
                            <!-- END Tag Cloud -->
                        </div>
                        <!-- END Sidebar -->
                    </div>
                </div>
                <!-- END Blog and Sidebar -->
            </main>
            <!-- END Main Container -->

@endsection