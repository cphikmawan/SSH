<!-- Sidebar -->
<nav id="sidebar">
    <!-- Sidebar Scroll Container -->
    <div id="sidebar-scroll">
        <!-- Sidebar Content -->
        <div class="sidebar-content">
            <!-- Side Header -->
            <div class="content-header content-header-fullrow bg-black-op-10">
                <div class="content-header-section text-center align-parent">
                    <!-- Close Sidebar, Visible only on mobile screens -->
                    <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                    <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                        <i class="fa fa-times text-danger"></i>
                    </button>
                    <!-- END Close Sidebar -->

                    <!-- Logo -->
                    <div class="content-header-item">
                        <a class="link-effect font-w700" href="index.html">
                            <i class="fa fa-handshake-o text-primary"></i>
                            <span class="font-size-xl text-dual-primary-dark">RESI</span><span class="font-size-xl text-primary">K</span>
                        </a>
                    </div>
                    <!-- END Logo -->
                </div>
            </div>
            <!-- END Side Header -->

            <!-- Side Main Navigation -->
            <div class="content-side content-side-full">
                <!--
                Mobile navigation, desktop navigation can be found in #page-header

                If you would like to use the same navigation in both mobiles and desktops, you can use exactly the same markup inside sidebar and header navigation ul lists
                -->
                <ul class="nav-main">
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
                        <a class="{{ request()->is('harga') ? 'active' : '' }}" href="/harga">
                            <i class="fa fa-dollar"></i>Harga
                        </a>
                    </li>
                    <li>
                        <a class="{{ request()->is('masuk') ? 'active' : '' }}" href="/masuk">
                            <i class="si si-user"></i>Masuk
                        </a>
                    </li>
                </ul>
            </div>
            <!-- END Side Main Navigation -->
        </div>
        <!-- Sidebar Content -->
    </div>
    <!-- END Sidebar Scroll Container -->
</nav>
<!-- END Sidebar -->