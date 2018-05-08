<!doctype html>
<!--[if lte IE 9]>     <html lang="en" class="no-focus lt-ie10 lt-ie10-msg"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>SSH | Dashboard</title>

        <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- Open Graph Meta -->
        <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
        <meta property="og:site_name" content="Codebase">
        <meta property="og:description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/favicons/favicon.png')}}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/favicons/favicon-192x192.png')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/favicons/apple-touch-icon-180x180.png')}}">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Codebase framework -->
        <link rel="stylesheet" id="css-main" href="{{('codebase/02 - Codebase Source (HTML)/src/assets/css/codebase.min.css')}}">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body>
        <!-- Page Container -->
        <!--
            Available classes for #page-container:

        GENERIC

            'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Codebase() -> uiHandleTheme())

        SIDEBAR & SIDE OVERLAY

            'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
            'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
            'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
            'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
            'sidebar-inverse'                           Dark themed sidebar

            'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
            'side-overlay-o'                            Visible Side Overlay by default

            'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

        HEADER

            ''                                          Static Header if no class is added
            'page-header-fixed'                         Fixed Header

        HEADER STYLE

            ''                                          Classic Header style if no class is added
            'page-header-modern'                        Modern Header style
            'page-header-inverse'                       Dark themed Header (works only with classic Header style)
            'page-header-glass'                         Light themed Header with transparency by default
                                                        (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
            'page-header-glass page-header-inverse'     Dark themed Header with transparency by default
                                                        (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

        MAIN CONTENT LAYOUT

            ''                                          Full width Main Content if no class is added
            'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
            'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
        -->
        <div id="page-container" class="sidebar-o sidebar-inverse side-scroll page-header-fixed page-header-modern main-content-boxed">
            <!-- Side Overlay-->
            <aside id="side-overlay">
                <!-- Side Overlay Scroll Container -->
                <div id="side-overlay-scroll">
                    <!-- Side Header -->
                    <div class="content-header content-header-fullrow">
                        <div class="content-header-section align-parent">
                            <!-- Close Side Overlay -->
                            <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                            <button type="button" class="btn btn-circle btn-dual-secondary align-v-r" data-toggle="layout" data-action="side_overlay_close">
                                <i class="fa fa-times text-danger"></i>
                            </button>
                            <!-- END Close Side Overlay -->

                            <!-- User Info -->
                            <div class="content-header-item">
                                <a class="img-link mr-5" href="be_pages_generic_profile.html">
                                    <img class="img-avatar img-avatar32" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/avatars/avatar15.jpg')}}')}}" alt="">
                                </a>
                                <a class="align-middle link-effect text-primary-dark font-w600" href="be_pages_generic_profile.html">Administrator</a>
                            </div>
                            <!-- END User Info -->
                        </div>
                    </div>
                    <!-- END Side Header -->

                    <!-- Side Content -->
                    <div class="content-side">
                        <!-- Search -->
                        <div class="block pull-t pull-r-l">
                            <div class="block-content block-content-full block-content-sm bg-body-light">
                                <form action="be_pages_generic_search.html" method="post">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="side-overlay-search" name="side-overlay-search" placeholder="Search..">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-secondary px-10">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- END Search -->

                        <!-- Mini Stats -->
                        <div class="block pull-r-l">
                            <div class="block-content block-content-full block-content-sm bg-body-light">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="font-size-sm font-w600 text-uppercase text-muted">Posts</div>
                                        <div class="font-size-h4">0</div>
                                    </div>
                                    <div class="col-4">
                                        <div class="font-size-sm font-w600 text-uppercase text-muted">Comments</div>
                                        <div class="font-size-h4">28</div>
                                    </div>
                                    <div class="col-4">
                                        <div class="font-size-sm font-w600 text-uppercase text-muted">Donations</div>
                                        <div class="font-size-h4">Rp. 860.000</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Mini Stats -->

                        <!-- Friends -->
                        <div class="block pull-r-l">
                            <div class="block-header bg-body-light">
                                <h3 class="block-title"><i class="fa fa-fw fa-users font-size-default mr-5"></i>Friends</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                        <i class="si si-refresh"></i>
                                    </button>
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                </div>
                            </div>
                            <div class="block-content">
                                <ul class="nav-users push">
                                    <li>
                                        <a href="be_pages_generic_profile.html">
                                            <img class="img-avatar" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/avatars/avatar3.jpg')}}')}}" alt="">
                                            <i class="fa fa-circle text-success"></i> Satria Aryawan
                                            <div class="font-w400 font-size-xs text-muted">Photographer</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_profile.html">
                                            <img class="img-avatar" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/avatars/avatar10.jpg')}}')}}" alt="">
                                            <i class="fa fa-circle text-success"></i> Ilham M. Misbahuddin
                                            <div class="font-w400 font-size-xs text-muted">Web Designer</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_profile.html">
                                            <img class="img-avatar" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/avatars/avatar4.jpg')}}')}}" alt="">
                                            <i class="fa fa-circle text-warning"></i> Fuad Dary Rosyadi
                                            <div class="font-w400 font-size-xs text-muted">UI Designer</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_profile.html">
                                            <img class="img-avatar" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/avatars/avatar14.jpg')}}')}}" alt="">
                                            <i class="fa fa-circle text-danger"></i> Cahya Putra Hikmawan
                                            <div class="font-w400 font-size-xs text-muted">Copywriter</div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- END Friends -->

                        <!-- Profile -->
                        <div class="block pull-r-l">
                            <div class="block-header bg-body-light">
                                <h3 class="block-title">
                                    <i class="fa fa-fw fa-pencil font-size-default mr-5"></i>Profile
                                </h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                </div>
                            </div>
                            <div class="block-content">
                                <form action="be_pages_dashboard.html" method="post" onsubmit="return false;">
                                    <div class="form-group mb-15">
                                        <label for="side-overlay-profile-name">Name</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="side-overlay-profile-name" name="side-overlay-profile-name" placeholder="Your name.." value="Administrator">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="fa fa-user"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-15">
                                        <label for="side-overlay-profile-email">Email</label>
                                        <div class="input-group">
                                            <input type="email" class="form-control" id="side-overlay-profile-email" name="side-overlay-profile-email" placeholder="Your email.." value="admin@sshomeless.id">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-15">
                                        <label for="side-overlay-profile-password">New Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="side-overlay-profile-password" name="side-overlay-profile-password" placeholder="New Password..">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="fa fa-asterisk"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-15">
                                        <label for="side-overlay-profile-password-confirm">Confirm New Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="side-overlay-profile-password-confirm" name="side-overlay-profile-password-confirm" placeholder="Confirm New Password..">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="fa fa-asterisk"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-6">
                                            <button type="submit" class="btn btn-block btn-alt-primary">
                                                <i class="fa fa-refresh mr-5"></i> Update
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- END Profile -->

                        <!-- Settings -->
                        <div class="block pull-r-l">
                            <div class="block-header bg-body-light">
                                <h3 class="block-title">
                                    <i class="fa fa-fw fa-wrench font-size-default mr-5"></i>Settings
                                </h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                </div>
                            </div>
                            <div class="block-content">
                                <div class="row gutters-tiny">
                                    <div class="col-6">
                                        <div class="custom-control custom-checkbox mb-5">
                                            <input type="checkbox" class="custom-control-input" id="side-overlay-settings-status" name="side-overlay-settings-status" value="1" checked>
                                            <label class="custom-control-label" for="side-overlay-settings-status">Online Status</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mb-5">
                                            <input type="checkbox" class="custom-control-input" id="side-overlay-settings-public-profile" name="side-overlay-settings-public-profile" value="1">
                                            <label class="custom-control-label" for="side-overlay-settings-public-profile">Public Profile</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mb-5">
                                            <input type="checkbox" class="custom-control-input" id="side-overlay-settings-notifications" name="side-overlay-settings-notifications" value="1" checked>
                                            <label class="custom-control-label" for="side-overlay-settings-notifications">Notifications</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="custom-control custom-checkbox mb-5">
                                            <input type="checkbox" class="custom-control-input" id="side-overlay-settings-updates" name="side-overlay-settings-updates" value="1">
                                            <label class="custom-control-label" for="side-overlay-settings-updates">Auto updates</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mb-5">
                                            <input type="checkbox" class="custom-control-input" id="side-overlay-settings-api-access" name="side-overlay-settings-api-access" value="1" checked>
                                            <label class="custom-control-label" for="side-overlay-settings-api-access">API Access</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mb-5">
                                            <input type="checkbox" class="custom-control-input" id="side-overlay-settings-limit-requests" name="side-overlay-settings-limit-requests" value="1">
                                            <label class="custom-control-label" for="side-overlay-settings-limit-requests">API Requests</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Settings -->
                    </div>
                    <!-- END Side Content -->
                </div>
                <!-- END Side Overlay Scroll Container -->
            </aside>
            <!-- END Side Overlay -->

            <!-- Sidebar -->
            <!--
                Helper classes

                Adding .sidebar-mini-hide to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
                Adding .sidebar-mini-show to an element will make it visible (opacity: 1) when the sidebar is in mini mode
                    If you would like to disable the transition, just add the .sidebar-mini-notrans along with one of the previous 2 classes

                Adding .sidebar-mini-hidden to an element will hide it when the sidebar is in mini mode
                Adding .sidebar-mini-visible to an element will show it only when the sidebar is in mini mode
                    - use .sidebar-mini-visible-b if you would like to be a block when visible (display: block)
            -->
            <nav id="sidebar">
                <!-- Sidebar Scroll Container -->
                <div id="sidebar-scroll">
                    <!-- Sidebar Content -->
                    <div class="sidebar-content">
                        <!-- Side Header -->
                        <div class="content-header content-header-fullrow px-15">
                            <!-- Mini Mode -->
                            <div class="content-header-section sidebar-mini-visible-b">
                                <!-- Logo -->
                                <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                                    <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                                </span>
                                <!-- END Logo -->
                            </div>
                            <!-- END Mini Mode -->

                            <!-- Normal Mode -->
                            <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                                <!-- Close Sidebar, Visible only on mobile screens -->
                                <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                                <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                                    <i class="fa fa-times text-danger"></i>
                                </button>
                                <!-- END Close Sidebar -->

                                <!-- Logo -->
                                <div class="content-header-item">
                                    <a class="link-effect font-w700" href="/">
                                        <i class="fa fa-handshake-o text-primary"></i>
                                        <span class="font-size-xl text-dual-primary-dark">SSH</span>
                                    </a>
                                </div>
                                <!-- END Logo -->
                            </div>
                            <!-- END Normal Mode -->
                        </div>
                        <!-- END Side Header -->

                        <!-- Side User -->
                        <div class="content-side content-side-full content-side-user px-10 align-parent">
                            <!-- Visible only in mini mode -->
                            <div class="sidebar-mini-visible-b align-v animated fadeIn">
                                <img class="img-avatar img-avatar32" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/avatars/avatar15.jpg')}}')}}" alt="">
                            </div>
                            <!-- END Visible only in mini mode -->

                            <!-- Visible only in normal mode -->
                            <div class="sidebar-mini-hidden-b text-center">
                                <a class="img-link" href="be_pages_generic_profile.html">
                                    <img class="img-avatar" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/avatars/avatar15.jpg')}}')}}" alt="">
                                </a>
                                <ul class="list-inline mt-10">
                                    <li class="list-inline-item">
                                        <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="be_pages_generic_profile.html">Admin</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                                        <a class="link-effect text-dual-primary-dark" data-toggle="layout" data-action="sidebar_style_inverse_toggle" href="javascript:void(0)">
                                            <i class="si si-drop"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="link-effect text-dual-primary-dark" href="op_auth_signin.html">
                                            <i class="si si-logout"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- END Visible only in normal mode -->
                        </div>
                        <!-- END Side User -->

                        <!-- Side Navigation -->
                        <div class="content-side content-side-full">
                            <ul class="nav-main">
                                <li>
                                    <a href="{{ url('/dashboard') }}"><i class="fa fa-coffee"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                                </li>
                                <li>
                                    <a href="{{ url('/post') }}"><i class="fa fa-file-text-o"></i><span class="sidebar-mini-hide">Posts</span></a>
                                </li>
                                <li>
                                    <a href="{{ url('/media') }}"><i class="fa fa-photo"></i><span class="sidebar-mini-hide">Medias</span></a>
                                </li>
                                <li>
                                    <a href="{{ url('/comment') }}"><i class="si si-bubbles"></i><span class="sidebar-mini-hide">Comments</span></a>
                                </li>
                                <li>
                                    <a href="{{ url('/user') }}"><i class="si si-users"></i><span class="sidebar-mini-hide">Users</span></a>
                                </li>
                                <li>
                                    <a href="{{ url('/donation') }}"><i class="fa fa-money"></i><span class="sidebar-mini-hide">Donations</span></a>
                                </li>
                            </ul>
                        </div>
                        <!-- END Side Navigation -->
                    </div>
                    <!-- Sidebar Content -->
                </div>
                <!-- END Sidebar Scroll Container -->
            </nav>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="page-header">
                <!-- Header Content -->
                <div class="content-header">
                    <!-- Left Section -->
                    <div class="content-header-section">
                        <!-- Toggle Sidebar -->
                        <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
                            <i class="fa fa-navicon"></i>
                        </button>
                        <!-- END Toggle Sidebar -->

                        <!-- Open Search Section -->
                        <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="header_search_on">
                            <i class="fa fa-search"></i>
                        </button>
                        <!-- END Open Search Section -->
                    </div>
                    <!-- END Left Section -->

                    <!-- Right Section -->
                    <div class="content-header-section">
                        <!-- User Dropdown -->
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Admin<i class="fa fa-angle-down ml-5"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right min-width-150" aria-labelledby="page-header-user-dropdown">
                                <a class="dropdown-item" href="be_pages_generic_profile.html">
                                    <i class="si si-user mr-5"></i> Profile
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_inbox.html">
                                    <span><i class="si si-envelope-open mr-5"></i> Inbox</span>
                                    <span class="badge badge-primary">3</span>
                                </a>
                                <a class="dropdown-item" href="be_pages_generic_invoice.html">
                                    <i class="si si-note mr-5"></i> Invoices
                                </a>
                                <div class="dropdown-divider"></div>

                                <!-- Toggle Side Overlay -->
                                <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                                <a class="dropdown-item" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_toggle">
                                    <i class="si si-wrench mr-5"></i> Settings
                                </a>
                                <!-- END Side Overlay -->

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="op_auth_signin.html">
                                    <i class="si si-logout mr-5"></i> Sign Out
                                </a>
                            </div>
                        </div>
                        <!-- END User Dropdown -->

                        <!-- Toggle Side Overlay -->
                        <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="side_overlay_toggle">
                            <i class="fa fa-tasks"></i>
                        </button>
                        <!-- END Toggle Side Overlay -->
                    </div>
                    <!-- END Right Section -->
                </div>
                <!-- END Header Content -->

                <!-- Header Search -->
                <div id="page-header-search" class="overlay-header">
                    <div class="content-header content-header-fullrow">
                        <form action="be_pages_generic_search.html" method="post">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <!-- Close Search Section -->
                                    <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                                    <button type="button" class="btn btn-secondary" data-toggle="layout" data-action="header_search_off">
                                        <i class="fa fa-times"></i>
                                    </button>
                                    <!-- END Close Search Section -->
                                </div>
                                <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-secondary">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END Header Search -->

                <!-- Header Loader -->
                <!-- Please check out the Activity page under Elements category to see examples of showing/hiding it -->
                <div id="page-header-loader" class="overlay-header bg-primary">
                    <div class="content-header content-header-fullrow text-center">
                        <div class="content-header-item">
                            <i class="fa fa-sun-o fa-spin text-white"></i>
                        </div>
                    </div>
                </div>
                <!-- END Header Loader -->
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="content">
                    <!-- Simple Gallery (.js-gallery class is initialized in Codebase() -> uiHelperMagnific()) -->
                    <!-- For more info and examples you can check out http://dimsemenov.com/plugins/magnific-popup/ -->
                    <!-- <h2 class="content-heading">Gallery <small>Simple</small></h2>
                    <div class="row items-push js-gallery img-fluid-100">
                        <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                            <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo17@2x.jpg')}}">
                                <img class="img-fluid" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo17.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                            <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo18@2x.jpg')}}">
                                <img class="img-fluid" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo18.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                            <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo19@2x.jpg')}}">
                                <img class="img-fluid" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo19.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                            <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo20@2x.jpg')}}">
                                <img class="img-fluid" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo20.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                            <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo21@2x.jpg')}}">
                                <img class="img-fluid" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo21.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                            <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo22@2x.jpg')}}">
                                <img class="img-fluid" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo22.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                            <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo23@2x.jpg')}}">
                                <img class="img-fluid" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo23.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                            <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo24@2x.jpg')}}">
                                <img class="img-fluid" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo24.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                            <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo25@2x.jpg')}}">
                                <img class="img-fluid" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo25.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                            <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo26@2x.jpg')}}">
                                <img class="img-fluid" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo26.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                            <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo27@2x.jpg')}}">
                                <img class="img-fluid" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo27.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                            <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo28@2x.jpg')}}">
                                <img class="img-fluid" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo28.jpg')}}" alt="">
                            </a>
                        </div>
                    </div> -->
                    <!-- END Simple Gallery -->

                    <!-- Advanced Gallery (.js-gallery class is initialized in Codebase() -> uiHelperMagnific()) -->
                    <!-- For more info and examples you can check out http://dimsemenov.com/plugins/magnific-popup/ -->
                    <h2 class="content-heading">Gallery <small>Events</small></h2>
                    <div class="breadcrumb bg-white push">
                        <button type="button" class="btn btn-sm btn-rounded btn-noborder btn-alt-success">
                            <i class="fa fa-plus text-earth-light"></i> New Image
                        </button>
                    </div>
                    <div class="row items-push js-gallery">
                        <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                            <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
                                <img class="img-fluid options-item" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo16.jpg')}}" alt="">
                                <div class="options-overlay bg-black-op-75">
                                    <div class="options-overlay-content">
                                        <h3 class="h4 text-white mb-5">Image</h3>
                                        <h4 class="h6 text-white-op mb-15">More Details</h4>
                                        <a class="btn btn-sm btn-rounded btn-noborder btn-alt-primary min-width-75 img-lightbox" href="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo16@2x.jpg')}}">
                                            <i class="fa fa-search-plus"></i> View
                                        </a>
                                        <a class="btn btn-sm btn-rounded btn-noborder btn-alt-success min-width-75" href="javascript:void(0)"><i class="fa fa-pencil"></i> Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                            <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
                                <img class="img-fluid options-item" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo15.jpg')}}" alt="">
                                <div class="options-overlay bg-black-op-75">
                                    <div class="options-overlay-content">
                                        <h3 class="h4 text-white mb-5">Image</h3>
                                        <h4 class="h6 text-white-op mb-15">More Details</h4>
                                        <a class="btn btn-sm btn-rounded btn-noborder btn-alt-primary min-width-75 img-lightbox" href="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo15@2x.jpg')}}">
                                            <i class="fa fa-search-plus"></i> View
                                        </a>
                                        <a class="btn btn-sm btn-rounded btn-noborder btn-alt-success min-width-75" href="javascript:void(0)"><i class="fa fa-pencil"></i> Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                            <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
                                <img class="img-fluid options-item" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo14.jpg')}}" alt="">
                                <div class="options-overlay bg-black-op-75">
                                    <div class="options-overlay-content">
                                        <h3 class="h4 text-white mb-5">Image</h3>
                                        <h4 class="h6 text-white-op mb-15">More Details</h4>
                                        <a class="btn btn-sm btn-rounded btn-noborder btn-alt-primary min-width-75 img-lightbox" href="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo14@2x.jpg')}}">
                                            <i class="fa fa-search-plus"></i> View
                                        </a>
                                        <a class="btn btn-sm btn-rounded btn-noborder btn-alt-success min-width-75" href="javascript:void(0)"><i class="fa fa-pencil"></i> Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                            <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
                                <img class="img-fluid options-item" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo13.jpg')}}" alt="">
                                <div class="options-overlay bg-black-op-75">
                                    <div class="options-overlay-content">
                                        <h3 class="h4 text-white mb-5">Image</h3>
                                        <h4 class="h6 text-white-op mb-15">More Details</h4>
                                        <a class="btn btn-sm btn-rounded btn-noborder btn-alt-primary min-width-75 img-lightbox" href="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo13@2x.jpg')}}">
                                            <i class="fa fa-search-plus"></i> View
                                        </a>
                                        <a class="btn btn-sm btn-rounded btn-noborder btn-alt-success min-width-75" href="javascript:void(0)"><i class="fa fa-pencil"></i> Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                            <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
                                <img class="img-fluid options-item" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo12.jpg')}}" alt="">
                                <div class="options-overlay bg-black-op-75">
                                    <div class="options-overlay-content">
                                        <h3 class="h4 text-white mb-5">Image</h3>
                                        <h4 class="h6 text-white-op mb-15">More Details</h4>
                                        <a class="btn btn-sm btn-rounded btn-noborder btn-alt-primary min-width-75 img-lightbox" href="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo12@2x.jpg')}}">
                                            <i class="fa fa-search-plus"></i> View
                                        </a>
                                        <a class="btn btn-sm btn-rounded btn-noborder btn-alt-success min-width-75" href="javascript:void(0)"><i class="fa fa-pencil"></i> Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                            <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
                                <img class="img-fluid options-item" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo11.jpg')}}" alt="">
                                <div class="options-overlay bg-black-op-75">
                                    <div class="options-overlay-content">
                                        <h3 class="h4 text-white mb-5">Image</h3>
                                        <h4 class="h6 text-white-op mb-15">More Details</h4>
                                        <a class="btn btn-sm btn-rounded btn-noborder btn-alt-primary min-width-75 img-lightbox" href="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo11@2x.jpg')}}">
                                            <i class="fa fa-search-plus"></i> View
                                        </a>
                                        <a class="btn btn-sm btn-rounded btn-noborder btn-alt-success min-width-75" href="javascript:void(0)"><i class="fa fa-pencil"></i> Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                            <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
                                <img class="img-fluid options-item" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo10.jpg')}}" alt="">
                                <div class="options-overlay bg-black-op-75">
                                    <div class="options-overlay-content">
                                        <h3 class="h4 text-white mb-5">Image</h3>
                                        <h4 class="h6 text-white-op mb-15">More Details</h4>
                                        <a class="btn btn-sm btn-rounded btn-noborder btn-alt-primary min-width-75 img-lightbox" href="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo10@2x.jpg')}}">
                                            <i class="fa fa-search-plus"></i> View
                                        </a>
                                        <a class="btn btn-sm btn-rounded btn-noborder btn-alt-success min-width-75" href="javascript:void(0)"><i class="fa fa-pencil"></i> Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                            <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
                                <img class="img-fluid options-item" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo9.jpg')}}" alt="">
                                <div class="options-overlay bg-black-op-75">
                                    <div class="options-overlay-content">
                                        <h3 class="h4 text-white mb-5">Image</h3>
                                        <h4 class="h6 text-white-op mb-15">More Details</h4>
                                        <a class="btn btn-sm btn-rounded btn-noborder btn-alt-primary min-width-75 img-lightbox" href="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo9@2x.jpg')}}">
                                            <i class="fa fa-search-plus"></i> View
                                        </a>
                                        <a class="btn btn-sm btn-rounded btn-noborder btn-alt-success min-width-75" href="javascript:void(0)"><i class="fa fa-pencil"></i> Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                            <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
                                <img class="img-fluid options-item" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo8.jpg')}}" alt="">
                                <div class="options-overlay bg-black-op-75">
                                    <div class="options-overlay-content">
                                        <h3 class="h4 text-white mb-5">Image</h3>
                                        <h4 class="h6 text-white-op mb-15">More Details</h4>
                                        <a class="btn btn-sm btn-rounded btn-noborder btn-alt-primary min-width-75 img-lightbox" href="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo8@2x.jpg')}}">
                                            <i class="fa fa-search-plus"></i> View
                                        </a>
                                        <a class="btn btn-sm btn-rounded btn-noborder btn-alt-success min-width-75" href="javascript:void(0)"><i class="fa fa-pencil"></i> Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                            <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
                                <img class="img-fluid options-item" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo7.jpg')}}" alt="">
                                <div class="options-overlay bg-black-op-75">
                                    <div class="options-overlay-content">
                                        <h3 class="h4 text-white mb-5">Image</h3>
                                        <h4 class="h6 text-white-op mb-15">More Details</h4>
                                        <a class="btn btn-sm btn-rounded btn-noborder btn-alt-primary min-width-75 img-lightbox" href="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo7@2x.jpg')}}">
                                            <i class="fa fa-search-plus"></i> View
                                        </a>
                                        <a class="btn btn-sm btn-rounded btn-noborder btn-alt-success min-width-75" href="javascript:void(0)"><i class="fa fa-pencil"></i> Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                            <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
                                <img class="img-fluid options-item" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo6.jpg')}}" alt="">
                                <div class="options-overlay bg-black-op-75">
                                    <div class="options-overlay-content">
                                        <h3 class="h4 text-white mb-5">Image</h3>
                                        <h4 class="h6 text-white-op mb-15">More Details</h4>
                                        <a class="btn btn-sm btn-rounded btn-noborder btn-alt-primary min-width-75 img-lightbox" href="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo6@2x.jpg')}}">
                                            <i class="fa fa-search-plus"></i> View
                                        </a>
                                        <a class="btn btn-sm btn-rounded btn-noborder btn-alt-success min-width-75" href="javascript:void(0)"><i class="fa fa-pencil"></i> Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                            <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
                                <img class="img-fluid options-item" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo5.jpg')}}" alt="">
                                <div class="options-overlay bg-black-op-75">
                                    <div class="options-overlay-content">
                                        <h3 class="h4 text-white mb-5">Image</h3>
                                        <h4 class="h6 text-white-op mb-15">More Details</h4>
                                        <a class="btn btn-sm btn-rounded btn-noborder btn-alt-primary min-width-75 img-lightbox" href="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/photos/photo5@2x.jpg')}}">
                                            <i class="fa fa-search-plus"></i> View
                                        </a>
                                        <a class="btn btn-sm btn-rounded btn-noborder btn-alt-success min-width-75" href="javascript:void(0)"><i class="fa fa-pencil"></i> Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Advanced Gallery -->
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="opacity-0">
                <div class="content py-20 font-size-xs clearfix">
                    <div class="float-right">
                        Coded with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="https://github.com/fuaddary/SSH" target="_blank">Kelompok IMK</a>
                    </div>
                    <div class="float-left">
                        <a class="font-w600" href="https://github.com/fuaddary/SSH" target="_blank">SSH</a> &copy; <span class="js-year-copy">2017</span>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!-- Codebase Core JS -->
        <script src="{{('codebase/02 - Codebase Source (HTML)/src/assets/js/core/jquery.min.js')}}"></script>
        <script src="{{('codebase/02 - Codebase Source (HTML)/src/assets/js/core/bootstrap.bundle.min.js')}}"></script>
        <script src="{{('codebase/02 - Codebase Source (HTML)/src/assets/js/core/jquery.slimscroll.min.js')}}"></script>
        <script src="{{('codebase/02 - Codebase Source (HTML)/src/assets/js/core/jquery.scrollLock.min.js')}}"></script>
        <script src="{{('codebase/02 - Codebase Source (HTML)/src/assets/js/core/jquery.appear.min.js')}}"></script>
        <script src="{{('codebase/02 - Codebase Source (HTML)/src/assets/js/core/jquery.countTo.min.js')}}"></script>
        <script src="{{('codebase/02 - Codebase Source (HTML)/src/assets/js/core/js.cookie.min.js')}}"></script>
        <script src="{{('codebase/02 - Codebase Source (HTML)/src/assets/js/codebase.js')}}"></script>

        <!-- Page JS Plugins -->
        <script src="{{('codebase/02 - Codebase Source (HTML)/src/assets/js/plugins/chartjs/Chart.bundle.min.js')}}"></script>

        <!-- Page JS Code -->
        <script src="{{('codebase/02 - Codebase Source (HTML)/src/assets/js/pages/be_pages_dashboard.js')}}"></script>
    </body>
</html> 