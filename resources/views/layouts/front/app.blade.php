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
        <link rel="shortcut icon" href="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/favicons/favicon.png')}}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/favicons/favicon-192x192.png')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/favicons/apple-touch-icon-180x180.png')}}">
        <link rel="stylesheet" id="css-main" href="{{('codebase/02 - Codebase Source (HTML)/src/assets/css/codebase.min.css')}}">
        <link rel="stylesheet" href="{{('codebase/02 - Codebase Source (HTML)/src/assets/js/plugins/slick/slick.min.css')}}">
        <link rel="stylesheet" href="{{('codebase/02 - Codebase Source (HTML)/src/assets/js/plugins/slick/slick-theme.min.css')}}">
    </head>
    <body>
        <div id="page-container" class="sidebar-inverse side-scroll page-header-fixed page-header-inverse main-content-boxed">
            
            @yield('sidebar')

            @yield('header')

            {{--  <!-- Main Container -->  --}}
            <main style="padding-top: 20px;" id="main-container">
                {{--  <!-- Page Content -->  --}}
                <div class="content content-full">
                    @yield('content')
                </div>
                {{--  <!-- END Page Content -->  --}}
            </main>
            {{--  <!-- END Main Container -->  --}}

            @include('layouts.front.footer')
        </div>
        {{--  <!-- END Page Container -->  --}}
        
         <div class="modal fade" id="modal-terms" tabindex="-1" role="dialog" aria-labelledby="modal-terms" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-slidedown" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Bantuan</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <p>Bantuan Untuk Pemesanan</p>
                            <p>1. Isi Biodata Diri dan Pilih Waktu Tenggang Penyimpanan</p>
                            <p>2. Pilih Bank Untuk Pembayaran</p>
                            <p>3. Transfer Ke Rekening RESIK</p>
                            <p>4. Simpan Invoice atau Unduh Invoice dari Email</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-alt-success" data-dismiss="modal">
                            <i class="fa fa-check"></i> Close
                        </button>
                    </div>
                </div>
            </div>
        </div> 

        {{--  <!-- Codebase Core JS -->  --}}
        <script src="{{('codebase/02 - Codebase Source (HTML)/src/assets/js/core/jquery.min.js')}}"></script>
        <script src="{{('codebase/02 - Codebase Source (HTML)/src/assets/js/core/bootstrap.bundle.min.js')}}"></script>
        <script src="{{('codebase/02 - Codebase Source (HTML)/src/assets/js/core/jquery.slimscroll.min.js')}}"></script>
        <script src="{{('codebase/02 - Codebase Source (HTML)/src/assets/js/core/jquery.scrollLock.min.js')}}"></script>
        <script src="{{('codebase/02 - Codebase Source (HTML)/src/assets/js/core/jquery.appear.min.js')}}"></script>
        <script src="{{('codebase/02 - Codebase Source (HTML)/src/assets/js/core/jquery.countTo.min.js')}}"></script>
        <script src="{{('codebase/02 - Codebase Source (HTML)/src/assets/js/core/js.cookie.min.js')}}"></script>
        <script src="{{('codebase/02 - Codebase Source (HTML)/src/assets/js/codebase.js')}}"></script>
        <script src="{{('codebase/02 - Codebase Source (HTML)/src/assets/js/plugins/chartjs/Chart.bundle.min.js')}}"></script>
        <script src="{{('codebase/02 - Codebase Source (HTML)/src/assets/js/pages/be_pages_dashboard.js')}}"></script>
        {{--  <!-- Page JS Plugins -->  --}}
        <script src="{{('codebase/02 - Codebase Source (HTML)/src/assets/js/plugins/bootstrap-wizard/jquery.bootstrap.wizard.js')}}"></script>
        <script src="{{('codebase/02 - Codebase Source (HTML)/src/assets/js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
        <script src="{{('codebase/02 - Codebase Source (HTML)/src/assets/js/plugins/jquery-validation/additional-methods.min.js')}}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key="></script>
        <script src="{{('codebase/02 - Codebase Source (HTML)/src/assets/js/plugins/gmapsjs/gmaps.min.js')}}"></script>
        <script src="{{('codebase/02 - Codebase Source (HTML)/src/assets/js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
        {{--  <!-- Page JS Code -->  --}}
        <script src="{{('codebase/02 - Codebase Source (HTML)/src/assets/js/pages/be_forms_wizard.js')}}"></script>
        <script src="{{('codebase/02 - Codebase Source (HTML)/src/assets/js/plugins/slick/slick.min.js')}}"></script>
        <script src="{{('codebase/02 - Codebase Source (HTML)/src/assets/js/pages/op_auth_signup.js') }}"></script>
        <script src="{{('codebase/02 - Codebase Source (HTML)/src/assets/js/pages/be_pages_generic_contact.js')}}"></script>
        <!-- Page JS Code -->
        <script>
            jQuery(function () {
                // Init page helpers (Slick Slider plugin)
                Codebase.helpers('slick');
            });
        </script>
    </body>
</html>