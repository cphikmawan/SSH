<!doctype html>
<!--[if lte IE 9]>     <html lang="en" class="no-focus lt-ie10 lt-ie10-msg"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>SSH | Dasbor</title>

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
                                    <img class="img-avatar img-avatar32" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/avatars/avatar15.jpg')}}" alt="">
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
                                        <input type="text" class="form-control" id="side-overlay-search" name="side-overlay-search" placeholder="Pencarian..">
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
                                        <div class="font-size-sm font-w600 text-uppercase text-muted">Posting</div>
                                        <div class="font-size-h4">0</div>
                                    </div>
                                    <div class="col-4">
                                        <div class="font-size-sm font-w600 text-uppercase text-muted">Komentar</div>
                                        <div class="font-size-h4">28</div>
                                    </div>
                                    <div class="col-4">
                                        <div class="font-size-sm font-w600 text-uppercase text-muted">Donasi</div>
                                        <div class="font-size-h4">Rp. 860.000</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Mini Stats -->

                        <!-- Teman -->
                        <div class="block pull-r-l">
                            <div class="block-header bg-body-light">
                                <h3 class="block-title"><i class="fa fa-fw fa-users font-size-default mr-5"></i>Teman</h3>
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
                                            <img class="img-avatar" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/avatars/avatar3.jpg')}}" alt="">
                                            <i class="fa fa-circle text-success"></i> Satria Aryawan
                                            <div class="font-w400 font-size-xs text-muted">Photographer</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_profile.html">
                                            <img class="img-avatar" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/avatars/avatar10.jpg')}}" alt="">
                                            <i class="fa fa-circle text-success"></i> Ilham M. Misbahuddin
                                            <div class="font-w400 font-size-xs text-muted">Web Designer</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_profile.html">
                                            <img class="img-avatar" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/avatars/avatar4.jpg')}}" alt="">
                                            <i class="fa fa-circle text-warning"></i> Fuad Dary Rosyadi
                                            <div class="font-w400 font-size-xs text-muted">UI Designer</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_profile.html">
                                            <img class="img-avatar" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/avatars/avatar14.jpg')}}" alt="">
                                            <i class="fa fa-circle text-danger"></i> Cahya Putra Hikmawan
                                            <div class="font-w400 font-size-xs text-muted">Copywriter</div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- END Teman -->

                        <!-- Profil -->
                        <div class="block pull-r-l">
                            <div class="block-header bg-body-light">
                                <h3 class="block-title">
                                    <i class="fa fa-fw fa-pencil font-size-default mr-5"></i>Profil
                                </h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                </div>
                            </div>
                            <div class="block-content">
                                <form action="be_pages_dashboard.html" method="post" onsubmit="return false;">
                                    <div class="form-group mb-15">
                                        <label for="side-overlay-profile-name">Nama</label>
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
                                        <label for="side-overlay-profile-password">Password Baru</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="side-overlay-profile-password" name="side-overlay-profile-password" placeholder="Password Baru..">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="fa fa-asterisk"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-15">
                                        <label for="side-overlay-profile-password-confirm">Konfirmasi Password Baru</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="side-overlay-profile-password-confirm" name="side-overlay-profile-password-confirm" placeholder="Konfirmasi Password Baru..">
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
                                                <i class="fa fa-refresh mr-5"></i> Perbarui
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- END Profil -->

                        <!-- Pengaturan -->
                        <div class="block pull-r-l">
                            <div class="block-header bg-body-light">
                                <h3 class="block-title">
                                    <i class="fa fa-fw fa-wrench font-size-default mr-5"></i>Pengaturan
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
                                            <label class="custom-control-label" for="side-overlay-settings-status">Status Online</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mb-5">
                                            <input type="checkbox" class="custom-control-input" id="side-overlay-settings-public-profile" name="side-overlay-settings-public-profile" value="1">
                                            <label class="custom-control-label" for="side-overlay-settings-public-profile">Profil Publik</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mb-5">
                                            <input type="checkbox" class="custom-control-input" id="side-overlay-settings-notifications" name="side-overlay-settings-notifications" value="1" checked>
                                            <label class="custom-control-label" for="side-overlay-settings-notifications">Pemberitahuan</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="custom-control custom-checkbox mb-5">
                                            <input type="checkbox" class="custom-control-input" id="side-overlay-settings-updates" name="side-overlay-settings-updates" value="1">
                                            <label class="custom-control-label" for="side-overlay-settings-updates">Perbarui Otomatis</label>
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
                        <!-- END Pengaturan -->
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
                                <img class="img-avatar img-avatar32" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/avatars/avatar15.jpg')}}" alt="">
                            </div>
                            <!-- END Visible only in mini mode -->

                            <!-- Visible only in normal mode -->
                            <div class="sidebar-mini-hidden-b text-center">
                                <a class="img-link" href="be_pages_generic_profile.html">
                                    <img class="img-avatar" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/avatars/avatar15.jpg')}}" alt="">
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
                                    <a href="{{ url('/dashboard') }}"><i class="fa fa-coffee"></i><span class="sidebar-mini-hide">Dasbor</span></a>
                                </li>
                                <li>
                                    <a href="{{ url('/post') }}"><i class="fa fa-file-text-o"></i><span class="sidebar-mini-hide">Posting</span></a>
                                </li>
                                <li>
                                    <a href="{{ url('/gallery') }}"><i class="fa fa-photo"></i><span class="sidebar-mini-hide">Galeri</span></a>
                                </li>
                                <li>
                                    <a href="{{ url('/comment') }}"><i class="si si-bubbles"></i><span class="sidebar-mini-hide">Komentar</span></a>
                                </li>
                                <li>
                                    <a href="{{ url('/user') }}"><i class="si si-users"></i><span class="sidebar-mini-hide">Pengguna</span></a>
                                </li>
                                <li>
                                    <a href="{{ url('/donation') }}"><i class="fa fa-money"></i><span class="sidebar-mini-hide">Donasi</span></a>
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
                                    <i class="si si-user mr-5"></i> Profil
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_inbox.html">
                                    <span><i class="si si-envelope-open mr-5"></i> Inbox</span>
                                    <span class="badge badge-primary">3</span>
                                </a>
                                <a class="dropdown-item" href="be_pages_generic_invoice.html">
                                    <i class="si si-note mr-5"></i> Tagihan
                                </a>
                                <div class="dropdown-divider"></div>

                                <!-- Toggle Side Overlay -->
                                <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                                <a class="dropdown-item" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_toggle">
                                    <i class="si si-wrench mr-5"></i> Pengaturan
                                </a>
                                <!-- END Side Overlay -->

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="op_auth_signin.html">
                                    <i class="si si-logout mr-5"></i> Keluar
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
                                <input type="text" class="form-control" placeholder="Cari atau tekan ESC.." id="page-header-search-input" name="page-header-search-input">
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