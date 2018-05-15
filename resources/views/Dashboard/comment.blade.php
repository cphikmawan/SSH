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
    <a class="breadcrumb-item" href="{{ url('/post') }}">Posting</a>
    <span class="breadcrumb-item active">Just a small question!</span>
</nav>
<div class="block">
    <div class="block-header block-header-default">
        <h3 class="block-title">Just a small question!</h3>
        <div class="block-options">
            <a class="btn-block-option" href="#forum-reply-form" data-toggle="scroll-to">
                <i class="fa fa-reply"></i> Balas
            </a>
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                <i class="si si-refresh"></i>
            </button>
        </div>
    </div>
    <div class="block-content">
        <!-- Discussion -->
        <table class="table table-borderless">
            <tbody>
                <tr class="table-active">
                    <td class="d-none d-sm-table-cell"></td>
                    <td class="font-size-sm text-muted">
                        <a href="be_pages_generic_profile.html">Betty Kelley</a> on <em>February 1, 2017 16:15</em>
                    </td>
                </tr>
                <tr>
                    <td class="d-none d-sm-table-cell text-center" style="width: 140px;">
                        <div class="mb-10">
                            <a href="be_pages_generic_profile.html">
                                <img class="img-avatar" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/avatars/avatar8.jpg')}}" alt="">
                            </a>
                        </div>
                        <small>488 Posting<br>Level 10</small>
                    </td>
                    <td>
                        <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                        <hr>
                        <p class="font-size-sm text-muted">There is only one way to avoid criticism: do nothing, say nothing, and be nothing.</p>
                    </td>
                </tr>
                <tr class="table-active">
                    <td class="d-none d-sm-table-cell"></td>
                    <td class="font-size-sm text-muted">
                        <a href="be_pages_generic_profile.html">Brian Stevens</a> on <em>February 10, 2017 10:09</em>
                    </td>
                </tr>
                <tr>
                    <td class="d-none d-sm-table-cell text-center" style="width: 140px;">
                        <div class="mb-10">
                            <a href="be_pages_generic_profile.html">
                                <img class="img-avatar" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/avatars/avatar16.jpg')}}" alt="">
                            </a>
                        </div>
                        <small>300 Posting<br>Level 10</small>
                    </td>
                    <td>
                        <p>Felis ullamcorper curae erat nulla luctus sociosqu phasellus posuere habitasse sollicitudin, libero sit potenti leo ultricies etiam blandit id platea augue, erat habitant fermentum lorem commodo taciti tristique etiam curabitur suscipit lacinia habitasse amet mauris eu eget ipsum nec magna in, adipiscing risus aenean turpis proin duis fringilla praesent ornare lorem eros malesuada vitae nullam diam velit potenti consectetur, vehicula accumsan risus lectus tortor etiam facilisis tempus sapien tortor, mi vestibulum taciti dapibus viverra ac justo vivamus erat phasellus turpis nisi class praesent duis ligula, vel ornare faucibus potenti nibh turpis, at id semper nunc dui blandit. Enim et nec habitasse ultricies id tortor curabitur, consectetur eu inceptos ante conubia tempor platea odio, sed sem integer lacinia cras non risus euismod turpis platea erat ultrices iaculis rutrum taciti, fusce lobortis adipiscing dapibus habitant sodales gravida pulvinar, elementum mi tempus ut commodo congue ipsum justo nec dui cursus scelerisque elementum volutpat tellus nulla laoreet taciti, nibh suspendisse primis arcu integer vulputate etiam ligula lobortis nunc, interdum commodo libero aliquam suscipit phasellus sollicitudin arcu varius venenatis erat ornare tempor nullam donec vitae etiam tellus.</p>
                        <p>Felis ullamcorper curae erat nulla luctus sociosqu phasellus posuere habitasse sollicitudin, libero sit potenti leo ultricies etiam blandit id platea augue, erat habitant fermentum lorem commodo taciti tristique etiam curabitur suscipit lacinia habitasse amet mauris eu eget ipsum nec magna in, adipiscing risus aenean turpis proin duis fringilla praesent ornare lorem eros malesuada vitae nullam diam velit potenti consectetur, vehicula accumsan risus lectus tortor etiam facilisis tempus sapien tortor, mi vestibulum taciti dapibus viverra ac justo vivamus erat phasellus turpis nisi class praesent duis ligula, vel ornare faucibus potenti nibh turpis, at id semper nunc dui blandit. Enim et nec habitasse ultricies id tortor curabitur, consectetur eu inceptos ante conubia tempor platea odio, sed sem integer lacinia cras non risus euismod turpis platea erat ultrices iaculis rutrum taciti, fusce lobortis adipiscing dapibus habitant sodales gravida pulvinar, elementum mi tempus ut commodo congue ipsum justo nec dui cursus scelerisque elementum volutpat tellus nulla laoreet taciti, nibh suspendisse primis arcu integer vulputate etiam ligula lobortis nunc, interdum commodo libero aliquam suscipit phasellus sollicitudin arcu varius venenatis erat ornare tempor nullam donec vitae etiam tellus.</p>
                        <hr>
                        <p class="font-size-sm text-muted">Be yourself; everyone else is already taken.</p>
                    </td>
                </tr>
                <tr class="table-active">
                    <td class="d-none d-sm-table-cell"></td>
                    <td class="font-size-sm text-muted">
                        <a href="be_pages_generic_profile.html">Jack Estrada</a> on <em>February 15, 2017 20:17</em>
                    </td>
                </tr>
                <tr>
                    <td class="d-none d-sm-table-cell text-center" style="width: 140px;">
                        <div class="mb-10">
                            <a href="be_pages_generic_profile.html">
                                <img class="img-avatar" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/avatars/avatar12.jpg')}}" alt="">
                            </a>
                        </div>
                        <small>464 Posting<br>Level 1</small>
                    </td>
                    <td>
                        <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                        <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                        <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                        <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                        <hr>
                        <p class="font-size-sm text-muted">Don't cry because it's over, smile because it happened.</p>
                    </td>
                </tr>
                <tr class="table-active">
                    <td class="d-none d-sm-table-cell"></td>
                    <td class="font-size-sm text-muted">
                        <a href="be_pages_generic_profile.html">Betty Kelley</a> on <em>February 20, 2017 20:29</em>
                    </td>
                </tr>
                <tr>
                    <td class="d-none d-sm-table-cell text-center" style="width: 140px;">
                        <div class="mb-10">
                            <a href="be_pages_generic_profile.html">
                                <img class="img-avatar" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/avatars/avatar4.jpg')}}" alt="">
                            </a>
                        </div>
                        <small>418 Posting<br>Level 8</small>
                    </td>
                    <td>
                        <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                        <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                        <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                        <hr>
                        <p class="font-size-sm text-muted">Strive not to be a success, but rather to be of value.</p>
                    </td>
                </tr>
                <tr class="table-active" id="forum-reply-form">
                    <td class="d-none d-sm-table-cell"></td>
                    <td class="font-size-sm text-muted">
                        <a href="be_pages_generic_profile.html">David Fuller</a> Just now
                    </td>
                </tr>
                <tr>
                    <td class="d-none d-sm-table-cell text-center">
                        <div class="mb-10">
                            <a href="be_pages_generic_profile.html">
                                <img class="img-avatar" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/avatars/avatar10.jpg')}}" alt="">
                            </a>
                        </div>
                        <small>199 Posting<br>Level 6</small>
                    </td>
                    <td>
                        <form action="be_pages_forum_discussion.html" method="post" onsubmit="return false;">
                            <div class="form-group row">
                                <div class="col-12">
                                    <!-- CKEditor (js-ckeditor id is initialized in Codebase() -> uiHelperCkeditor()) -->
                                    <!-- For more info and examples you can check out http://ckeditor.com -->
                                    <textarea id="js-ckeditor" name="ckeditor"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-alt-primary">
                                    <i class="fa fa-reply"></i> Balas
                                </button>
                            </div>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- END Discussion -->
    </div>
</div>
@endsection