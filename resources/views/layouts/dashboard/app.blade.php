<!doctype html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>RESIK | @yield('title')</title>

        <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
        <meta property="og:site_name" content="Codebase">
        <meta property="og:description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="icon" type="image/png" sizes="192x192" href="favicon.ico">
        <link rel="apple-touch-icon" sizes="180x180" href="favicon.ico">
        <link rel="stylesheet" id="css-main" href="{{('codebase/02 - Codebase Source (HTML)/src/assets/css/codebase.min.css')}}">

    </head>
    <body>
        <div id="page-container" class="sidebar-o sidebar-inverse side-scroll page-header-glass page-header-inverse main-content-boxed">
            
            @yield('aside')

            @yield('sidebar')

            @yield('header')

            <!-- Main Container -->
            <main id="main-container">
                @yield('content')
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            @include('layouts.dashboard.footer')
            
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
        <script src="{{('codebase/02 - Codebase Source (HTML)/src/assets/js/pages/be_pages_ecom_dashboard.js')}}"></script>
        <script src="{{('codebase/02 - Codebase Source (HTML)/src/assets/js/pages/be_pages_dashboard.js')}}"></script>
    </body>
</html> 