@extends('layouts.app')

@section('title', 'Blogs')

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
    <div class="bg-image" style="background-image: url('{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo27@2x.jpg')}}');">
        <div class="bg-black-op-75">
            <div class="content content-top text-center">
                <div class="py-100">
                    <h1 class="font-w700 text-white mb-10">Sunday Sharing Homeless Expedisi 4</h1>
                    <h2 class="h4 font-w400 text-white-op">Area Lempuyangan Kota Surabaya</h2>
                    <div class="font-size-md text-muted">
                        <a class="text-body-bg-dark" href="be_pages_generic_profile.html">Cloud</a> &bull; January 5, 2018
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Story -->
    <div class="content content-full nice-copy-story">
        <div class="row justify-content-center py-30">
            <div class="col-lg-8">
                <h3>Short Story</h3>
                <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                <h3>Documentation</h3>
                <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>

                <!-- Simple Gallery (.js-gallery class is initialized in Codebase() -> uiHelperMagnific()) -->
                <!-- For more info and examples you can check out http://dimsemenov.com/plugins/magnific-popup/ -->
                <div class="row no-gutters push js-gallery img-fluid-100">
                    <div class="col-6 animated fadeIn">
                        <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo32@2x.jpg')}}">
                            <img class="img-fluid" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo32.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="col-6 animated fadeIn">
                        <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo31@2x.jpg')}}">
                            <img class="img-fluid" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo31.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="col-4 animated fadeIn">
                        <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo33@2x.jpg')}}">
                            <img class="img-fluid" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo33.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="col-4 animated fadeIn">
                        <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo30@2x.jpg')}}">
                            <img class="img-fluid" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo30.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="col-4 animated fadeIn">
                        <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo28@2x.jpg')}}">
                            <img class="img-fluid" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo28.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="col-6 animated fadeIn">
                        <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo25@2x.jpg')}}">
                            <img class="img-fluid" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo25.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="col-6 animated fadeIn">
                        <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="assets/img/photos/photo26@2x.jpg">
                            <img class="img-fluid" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo26.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
                <!-- END Simple Gallery -->

            </div>
        </div>
        <div class="row justify-content-center py-30">
            <div class="col-lg-8 clearfix">
                <button type="button" class="btn btn-rounded btn-secondary float-right">
                    <i class="fa fa-share-alt text-primary mr-5 "></i> Share
                </button>
                <button type="button" class="btn btn-rounded btn-secondary mr-5">
                    <i class="fa fa-heart text-danger mr-5 "></i> Reccomend
                </button>
            </div>
        </div>
    </div>
    <!-- END Story -->

    <!-- Responses -->
    <div class="bg-body-dark">
        <div class="content content-full">
            <div class="row justify-content-center py-30">
                <div class="col-lg-8">
                    <h3 class="font-w700 mb-50">Responses (5)</h3>
                    <div class="media mb-30">
                        <img class="img-avatar img-avatar48 d-flex mr-20" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/avatars/avatar2.jpg')}}" alt="">
                        <div class="media-body">
                            <p class="mb-5"><a class="font-w600" href="javascript:void(0)">Carol White</a> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                            <div class="font-size-sm">
                                <a class="link-effect" href="javascript:void(0)">Like</a>
                                <span role="presentation" aria-hidden="true"> · </span>
                                <a class="link-effect" href="javascript:void(0)">Reply</a>
                                <span role="presentation" aria-hidden="true"> · </span>
                                <span class="text-muted mr-5">2 days</span>
                            </div>
                            <div class="media my-20">
                                <img class="img-avatar img-avatar48 d-flex mr-20" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/avatars/avatar5.jpg')}}" alt="">
                                <div class="media-body">
                                    <p class="mb-5"><a class="font-w600" href="javascript:void(0)">Melissa Rice</a> Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                    <div class="font-size-sm">
                                        <span class="badge badge-primary"><i class="fa fa-thumbs-up"></i> 3</span>
                                        <a class="link-effect" href="javascript:void(0)">Like</a>
                                        <span role="presentation" aria-hidden="true"> · </span>
                                        <a class="badge badge-secondary" href="javascript:void(0)"><i class="fa fa-comments"></i> 4</a>
                                        <a class="link-effect" href="javascript:void(0)">Reply</a>
                                        <span role="presentation" aria-hidden="true"> · </span>
                                        <span class="text-muted mr-5">1 day</span>
                                    </div>
                                </div>
                            </div>
                            <div class="media my-20">
                                <img class="img-avatar img-avatar48 d-flex mr-20" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/avatars/avatar1.jpg')}}" alt="">
                                <div class="media-body">
                                    <p class="mb-5"><a class="font-w600" href="javascript:void(0)">Jack Greene</a> Purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                    <div class="font-size-sm">
                                        <span class="badge badge-primary mr-5"><i class="fa fa-thumbs-up"></i> 1</span>
                                        <a class="link-effect" href="javascript:void(0)">Like</a>
                                        <span role="presentation" aria-hidden="true"> · </span>
                                        <a class="link-effect" href="javascript:void(0)">Reply</a>
                                        <span role="presentation" aria-hidden="true"> · </span>
                                        <span class="text-muted mr-5">1 day</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="media mb-30">
                        <img class="img-avatar img-avatar48 d-flex mr-20" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/avatars/avatar3.jpg')}}" alt="">
                        <div class="media-body">
                            <p class="mb-5"><a class="font-w600" href="javascript:void(0)">Jack Greene</a> In gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                            <div class="font-size-sm">
                                <span class="badge badge-primary mr-5"><i class="fa fa-thumbs-up"></i> 10</span>
                                <a class="link-effect" href="javascript:void(0)">Like</a>
                                <span role="presentation" aria-hidden="true"> · </span>
                                <a class="link-effect" href="javascript:void(0)">Reply</a>
                                <span role="presentation" aria-hidden="true"> · </span>
                                <span class="text-muted mr-5">10 hrs</span>
                            </div>
                        </div>
                    </div>
                    <div class="media mb-30">
                        <img class="img-avatar img-avatar48 d-flex mr-20" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/avatars/avatar5.jpg')}}" alt="">
                        <div class="media-body">
                            <p class="mb-5"><a class="font-w600" href="javascript:void(0)">Barbara Scott</a> Vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                            <div class="font-size-sm">
                                <a class="link-effect" href="javascript:void(0)">Like</a>
                                <span role="presentation" aria-hidden="true"> · </span>
                                <a class="link-effect" href="javascript:void(0)">Reply</a>
                                <span role="presentation" aria-hidden="true"> · </span>
                                <span class="text-muted mr-5">3 hrs</span>
                            </div>
                        </div>
                    </div>
                    <div class="media mb-30">
                        <img class="img-avatar img-avatar48 d-flex mr-20" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/avatars/avatar0.jpg')}}" alt="">
                        <div class="media-body">
                            <form action="be_pages_generic_story.html" method="post" onsubmit="return false;">
                                <textarea class="form-control mb-5" rows="5" placeholder="Write a response.."></textarea>
                                <button type="submit" class="btn btn-secondary">
                                    <i class="fa fa-reply mr-5"></i>Respond
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Responses -->
</main>
<!-- END Main Container -->

@endsection