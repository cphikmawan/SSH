<!doctype html>
<!--[if lte IE 9]>     <html lang="en" class="no-focus lt-ie10 lt-ie10-msg"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>SSH | Dasbor</title>

        <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created oleh pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- Open Graph Meta -->
        <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
        <meta property="og:site_name" content="Codebase">
        <meta property="og:description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created oleh pixelcave and published on Themeforest">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used oleh desktop and mobile browsers -->
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
            'sidebar-o'                                 Visible Sidebar oleh default (screen width > 991px)
            'sidebar-o-xs'                              Visible Sidebar oleh default (screen width < 992px)
            'sidebar-inverse'                           Dark themed sidebar

            'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
            'side-overlay-o'                            Visible Side Overlay oleh default

            'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

        HEADER

            ''                                          Static Header if no class is added
            'page-header-fixed'                         Fixed Header

        HEADER STYLE

            ''                                          Classic Header style if no class is added
            'page-header-modern'                        Modern Header style
            'page-header-inverse'                       Dark themed Header (works only with classic Header style)
            'page-header-glass'                         Light themed Header with transparency oleh default
                                                        (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
            'page-header-glass page-header-inverse'     Dark themed Header with transparency oleh default
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
                        <span class="breadcrumb-item active">Posting</span>
                    </nav>
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Posting</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option">
                                    <i class="fa fa-plus"></i> Posting Baru
                                </button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <!-- Topics -->
                            <table class="table table-striped table-borderless table-vcenter">
                                <thead class="thead-light">
                                    <tr>
                                        <th colspan="2">Judul Posting</th>
                                        <th class="d-none d-md-table-cell text-center" style="width: 100px;">Balasan</th>
                                        <th class="d-none d-md-table-cell text-center" style="width: 100px;">Dilihat</th>
                                        <th class="d-none d-md-table-cell" style="width: 200px;">Komentar Terakhir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center" style="width: 65px;">
                                            <i class="si si-pin fa-2x"></i>
                                        </td>
                                        <td>
                                            <a class="font-w600" href="be_pages_forum_discussion.html">Welcome to our forums!</a>
                                            <div class="font-size-sm text-muted mt-5">
                                                <a href="be_pages_generic_profile.html">Ralph Murray</a> pada <em>June 20, 2017</em>
                                            </div>
                                        </td>
                                        <td class="d-none d-md-table-cell text-center">
                                            <a class="font-w600" href="javascript:void(0)">191</a>
                                        </td>
                                        <td class="d-none d-md-table-cell text-center">
                                            <a class="font-w600" href="javascript:void(0)">248</a>
                                        </td>
                                        <td class="d-none d-md-table-cell">
                                            <span class="font-size-sm">oleh <a href="be_pages_generic_profile.html">Jack Greene</a><br>pada <em>January 21, 2017</em></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center" style="width: 65px;">
                                            <i class="si si-pin fa-2x"></i>
                                        </td>
                                        <td>
                                            <a class="font-w600" href="be_pages_forum_discussion.html">Big upgrades are coming soon!</a>
                                            <div class="font-size-sm text-muted mt-5">
                                                <a href="be_pages_generic_profile.html">Wayne Garcia</a> pada <em>June 25, 2017</em>
                                            </div>
                                        </td>
                                        <td class="d-none d-md-table-cell text-center">
                                            <a class="font-w600" href="javascript:void(0)">231</a>
                                        </td>
                                        <td class="d-none d-md-table-cell text-center">
                                            <a class="font-w600" href="javascript:void(0)">1213</a>
                                        </td>
                                        <td class="d-none d-md-table-cell">
                                            <span class="font-size-sm">oleh <a href="be_pages_generic_profile.html">Jesse Fisher</a><br>pada <em>January 18, 2017</em></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center" style="width: 65px;">
                                            <i class="si si-pin fa-2x"></i>
                                        </td>
                                        <td>
                                            <a class="font-w600" href="be_pages_forum_discussion.html">Tips &amp; tricks for staying motivated</a>
                                            <div class="font-size-sm text-muted mt-5">
                                                <a href="be_pages_generic_profile.html">Jack Greene</a> pada <em>January 15, 2017</em>
                                            </div>
                                        </td>
                                        <td class="d-none d-md-table-cell text-center">
                                            <a class="font-w600" href="javascript:void(0)">131</a>
                                        </td>
                                        <td class="d-none d-md-table-cell text-center">
                                            <a class="font-w600" href="javascript:void(0)">749</a>
                                        </td>
                                        <td class="d-none d-md-table-cell">
                                            <span class="font-size-sm">oleh <a href="be_pages_generic_profile.html">Adam McCoy</a><br>pada <em>January 13, 2017</em></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <a class="font-w600" href="be_pages_forum_discussion.html">2017, all the new features!</a>
                                            <div class="font-size-sm text-muted mt-5">
                                                <a href="be_pages_generic_profile.html">Jose Mills</a> pada <em>January 21, 2017</em>
                                            </div>
                                        </td>
                                        <td class="d-none d-md-table-cell text-center">
                                            <a class="font-w600" href="javascript:void(0)">203</a>
                                        </td>
                                        <td class="d-none d-md-table-cell text-center">
                                            <a class="font-w600" href="javascript:void(0)">2186</a>
                                        </td>
                                        <td class="d-none d-md-table-cell">
                                            <span class="font-size-sm">oleh <a href="be_pages_generic_profile.html">Carol White</a><br>pada <em>January 13, 2017</em></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <a class="font-w600" href="be_pages_forum_discussion.html">Issue when saving a file, can you help me?</a>
                                            <div class="font-size-sm text-muted mt-5">
                                                <a href="be_pages_generic_profile.html">Brian Stevens</a> pada <em>May 26, 2017</em>
                                            </div>
                                        </td>
                                        <td class="d-none d-md-table-cell text-center">
                                            <a class="font-w600" href="javascript:void(0)">275</a>
                                        </td>
                                        <td class="d-none d-md-table-cell text-center">
                                            <a class="font-w600" href="javascript:void(0)">1912</a>
                                        </td>
                                        <td class="d-none d-md-table-cell">
                                            <span class="font-size-sm">oleh <a href="be_pages_generic_profile.html">Carol Ray</a><br>pada <em>January 2, 2017</em></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <a class="font-w600" href="be_pages_forum_discussion.html">New Features!</a>
                                            <div class="font-size-sm text-muted mt-5">
                                                <a href="be_pages_generic_profile.html">Scott Young</a> pada <em>June 29, 2017</em>
                                            </div>
                                        </td>
                                        <td class="d-none d-md-table-cell text-center">
                                            <a class="font-w600" href="javascript:void(0)">145</a>
                                        </td>
                                        <td class="d-none d-md-table-cell text-center">
                                            <a class="font-w600" href="javascript:void(0)">2021</a>
                                        </td>
                                        <td class="d-none d-md-table-cell">
                                            <span class="font-size-sm">oleh <a href="be_pages_generic_profile.html">Ryan Flores</a><br>pada <em>January 2, 2017</em></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <a class="font-w600" href="be_pages_forum_discussion.html">Question about the new features!</a>
                                            <div class="font-size-sm text-muted mt-5">
                                                <a href="be_pages_generic_profile.html">Scott Young</a> pada <em>June 28, 2017</em>
                                            </div>
                                        </td>
                                        <td class="d-none d-md-table-cell text-center">
                                            <a class="font-w600" href="javascript:void(0)">230</a>
                                        </td>
                                        <td class="d-none d-md-table-cell text-center">
                                            <a class="font-w600" href="javascript:void(0)">2344</a>
                                        </td>
                                        <td class="d-none d-md-table-cell">
                                            <span class="font-size-sm">oleh <a href="be_pages_generic_profile.html">Jose Parker</a><br>pada <em>January 1, 2017</em></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <a class="font-w600" href="be_pages_forum_discussion.html">Which plan to choose?</a>
                                            <div class="font-size-sm text-muted mt-5">
                                                <a href="be_pages_generic_profile.html">Amber Harvey</a> pada <em>March 12, 2017</em>
                                            </div>
                                        </td>
                                        <td class="d-none d-md-table-cell text-center">
                                            <a class="font-w600" href="javascript:void(0)">213</a>
                                        </td>
                                        <td class="d-none d-md-table-cell text-center">
                                            <a class="font-w600" href="javascript:void(0)">1170</a>
                                        </td>
                                        <td class="d-none d-md-table-cell">
                                            <span class="font-size-sm">oleh <a href="be_pages_generic_profile.html">Lisa Jenkins</a><br>pada <em>January 1, 2017</em></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <a class="font-w600" href="be_pages_forum_discussion.html">Your web app saved me tons of time</a>
                                            <div class="font-size-sm text-muted mt-5">
                                                <a href="be_pages_generic_profile.html">Helen Jacobs</a> pada <em>January 23, 2017</em>
                                            </div>
                                        </td>
                                        <td class="d-none d-md-table-cell text-center">
                                            <a class="font-w600" href="javascript:void(0)">100</a>
                                        </td>
                                        <td class="d-none d-md-table-cell text-center">
                                            <a class="font-w600" href="javascript:void(0)">1774</a>
                                        </td>
                                        <td class="d-none d-md-table-cell">
                                            <span class="font-size-sm">oleh <a href="be_pages_generic_profile.html">Henry Harrison</a><br>pada <em>January 12, 2017</em></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <a class="font-w600" href="be_pages_forum_discussion.html">Is it easy to upgrade my plan?</a>
                                            <div class="font-size-sm text-muted mt-5">
                                                <a href="be_pages_generic_profile.html">Brian Stevens</a> pada <em>May 10, 2017</em>
                                            </div>
                                        </td>
                                        <td class="d-none d-md-table-cell text-center">
                                            <a class="font-w600" href="javascript:void(0)">265</a>
                                        </td>
                                        <td class="d-none d-md-table-cell text-center">
                                            <a class="font-w600" href="javascript:void(0)">1537</a>
                                        </td>
                                        <td class="d-none d-md-table-cell">
                                            <span class="font-size-sm">oleh <a href="be_pages_generic_profile.html">Jesse Fisher</a><br>pada <em>January 6, 2017</em></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <a class="font-w600" href="be_pages_forum_discussion.html">Check out all those tips &amp; tricks!</a>
                                            <div class="font-size-sm text-muted mt-5">
                                                <a href="be_pages_generic_profile.html">Laura Carr</a> pada <em>May 5, 2017</em>
                                            </div>
                                        </td>
                                        <td class="d-none d-md-table-cell text-center">
                                            <a class="font-w600" href="javascript:void(0)">296</a>
                                        </td>
                                        <td class="d-none d-md-table-cell text-center">
                                            <a class="font-w600" href="javascript:void(0)">1379</a>
                                        </td>
                                        <td class="d-none d-md-table-cell">
                                            <span class="font-size-sm">oleh <a href="be_pages_generic_profile.html">Lori Grant</a><br>pada <em>January 5, 2017</em></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <a class="font-w600" href="be_pages_forum_discussion.html">Review needed</a>
                                            <div class="font-size-sm text-muted mt-5">
                                                <a href="be_pages_generic_profile.html">Justin Hunt</a> pada <em>May 3, 2017</em>
                                            </div>
                                        </td>
                                        <td class="d-none d-md-table-cell text-center">
                                            <a class="font-w600" href="javascript:void(0)">254</a>
                                        </td>
                                        <td class="d-none d-md-table-cell text-center">
                                            <a class="font-w600" href="javascript:void(0)">675</a>
                                        </td>
                                        <td class="d-none d-md-table-cell">
                                            <span class="font-size-sm">oleh <a href="be_pages_generic_profile.html">Melissa Rice</a><br>pada <em>January 4, 2017</em></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <a class="font-w600" href="be_pages_forum_discussion.html">Testing out the API</a>
                                            <div class="font-size-sm text-muted mt-5">
                                                <a href="be_pages_generic_profile.html">Lori Grant</a> pada <em>April 25, 2017</em>
                                            </div>
                                        </td>
                                        <td class="d-none d-md-table-cell text-center">
                                            <a class="font-w600" href="javascript:void(0)">118</a>
                                        </td>
                                        <td class="d-none d-md-table-cell text-center">
                                            <a class="font-w600" href="javascript:void(0)">888</a>
                                        </td>
                                        <td class="d-none d-md-table-cell">
                                            <span class="font-size-sm">oleh <a href="be_pages_generic_profile.html">Thomas Riley</a><br>pada <em>January 4, 2017</em></span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- END Topics -->

                            <!-- Pagination -->
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-end mr-20">
                                    <li class="page-item">
                                        <a class="page-link" href="javascript:void(0)" aria-label="Previous">
                                            <span aria-hidden="true">
                                                <i class="fa fa-angle-left"></i>
                                            </span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="javascript:void(0)">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="javascript:void(0)">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="javascript:void(0)">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="javascript:void(0)">4</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="javascript:void(0)" aria-label="Next">
                                            <span aria-hidden="true">
                                                <i class="fa fa-angle-right"></i>
                                            </span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <!-- END Pagination -->
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
                        Coded with <i class="fa fa-heart text-pulse"></i> oleh <a class="font-w600" href="https://github.com/fuaddary/SSH" target="_blank">Kelompok IMK</a>
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