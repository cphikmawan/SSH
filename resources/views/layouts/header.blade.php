<!-- Header -->
<header id="page-header">
    <!-- Header Content -->
    <div class="content-header">
        <!-- Left Section -->
        <div class="content-header-section">
            <!-- Logo -->
            <div class="content-header-item">
                <a class="link-effect font-w700 mr-5" href="/">
                    <i class="fa fa-handshake-o text-primary"></i>
                    <span class="font-size-xl text-dual-primary-dark">SS</span><span class="font-size-xl text-primary">H</span>
                </a>
            </div>
            <!-- END Logo -->
        </div>
        <!-- END Left Section -->

        

        <!-- Right Section -->
        <div class="content-header-section">
            <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
                <i class="fa fa-navicon"></i>
            </button>
            <!-- END Toggle Sidebar -->
        </div>
        <!-- END Right Section -->

        <!-- Middle Section -->

        <div class="content-header-section d-none d-lg-block">
            <ul class="nav-main-header">
                <li>
                    <a class="{{ request()->is('/') ? 'active' : '' }}" href="/">
                        <i class="si si-home"></i>Home
                    </a>
                </li>
                <li>
                    <a class="{{ request()->is('about') ? 'active' : '' }}" href="/about">
                        <i class="si si-info"></i>Tentang Kami
                    </a>
                </li>
                <li>
                    <a class="{{ request()->is('contact') ? 'active' : '' }}" href="/contact">
                        <i class="si si-phone"></i>Hubungi Kami
                    </a>
                </li>
                <li>
                    <a class="{{ request()->is('donasi') ? 'active' : '' }}" href="/donasi">
                        <i class="fa fa-dollar"></i>Donasi
                    </a>
                </li>
                <li>
                    <a class="{{ request()->is('masuk') ? 'active' : '' }}" href="/masuk">
                        <i class="si si-user"></i>Masuk
                    </a>
                </li>
            </ul>
            <!-- END Header Navigation -->
        </div>
        <!-- END Middle Section -->
    </div>
    <!-- END Header Content -->

    <!-- Header Loader -->
    <!-- Please check out the Activity page under Elements category to see examples of showing/hiding it -->
    <!-- <div id="page-header-loader" class="overlay-header bg-primary">
        <div class="content-header content-header-fullrow text-center">
            <div class="content-header-item">
                <i class="fa fa-sun-o fa-spin text-white"></i>
            </div>
        </div>
    </div> -->
    <!-- END Header Loader -->
</header>
<!-- END Header -->