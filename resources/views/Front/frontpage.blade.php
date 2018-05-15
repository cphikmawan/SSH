@extends('layouts.app')

@section('title', 'Home')

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
                <div class="bg-image" style="background-image: url('image/front4.jpg');">
                    <div class="bg-black-op-75">
                        <div class="content content-top text-center">
                            <div class="py-100">
                                <h1 class="font-w700 text-white mb-10">SSH</h1>
                                <h2 class="h4 font-w400 text-white-op">Saturday Sharing Homeless</h2>
                                <h2 class="h5 font-w400 text-white-op">Komunitas Sosial</h2>                                
                            </div>
                        </div>
                    </div>
                </div>

                        </div>
                        <div>
                <div class="bg-image" style="background-image: url('image/front5.jpg');">
                    <div class="bg-black-op-75">
                        <div class="content content-top text-center">
                            <div class="py-100">
                                <h1 class="font-w700 text-white mb-10">SSH</h1>
                                <h2 class="h4 font-w400 text-white-op">Sunday Sharing Homeless</h2>
                                <h2 class="h5 font-w400 text-white-op">Peduli</h2>
                            </div>
                        </div>
                    </div>
                </div>

                        </div>
                        <div>
                <div class="bg-image" style="background-image: url('image/front1.jpg');">
                    <div class="bg-black-op-75">
                        <div class="content content-top text-center">
                            <div class="py-100">
                                <h1 class="font-w700 text-white mb-10">SSH</h1>
                                <h2 class="h4 font-w400 text-white-op">Sunday Sharing Homeless</h2>
                                <h2 class="h5 font-w400 text-white-op">Berbagi</h2>                                
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
                                    <a class="img-link" href="/readmore4">
                                        <img class="img-fluid" src="/image/front7.jpg" alt="">
                                    </a>
                                </div>
                                <h3 class="h4 font-w700 text-uppercase mb-5">Sunday Sharing Homeless Ekspedisi Ke 4</h3>
                                <div class="text-muted mb-10">
                                    <span class="mr-15">
                                        <i class="fa fa-fw fa-calendar mr-5"></i>16 Juli 2017
                                    </span>
                                    <a class="text-muted mr-15">
                                        <i class="fa fa-fw fa-user mr-5"></i>Fuad Dary
                                    </a>
                                    <a class="text-muted" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-tag mr-5"></i>Surabaya
                                    </a>
                                    <a class="text-muted" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-tag mr-5"></i>Sosial
                                    </a>
                                    <a class="text-muted" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-tag mr-5"></i>Dokumentasi
                                    </a>
                                </div>
                                <p>Assalamualaikum warahmatullahi wabarokattuh.</p>
                                <p>Alhamdulillah, Wa Syukurillah Wanikmatillah. Segala puji bagi Allah SWT atas Rahmat, Taufik dan Hidayan-Nya yang selama ini telah dianugrahkan begitu luar biasa kepada kita selaku hamba-Nya. Sholawat serta salam, tiada lupa kami haturkan sholawat serta salam kepada junjungan nabi Muhammad SAW, keluarganya dan para sahabatnya.</p>
                                <a class="link-effect font-w600" href="/readmore4">Selengkapnya..</a>
                            </div>
                            <div class="mb-50">
                                <div class="overflow-hidden rounded mb-20" style="height: 200px;">
                                    <a class="img-link" href="/readmore3">
                                        <img class="img-fluid" src="/image/front9.jpg" alt="">
                                    </a>
                                </div>
                                <h3 class="h4 font-w700 text-uppercase mb-5">Sunday Sharing Homeless Ekspedisi Ke 3</h3>
                                <div class="text-muted mb-10">
                                    <span class="mr-15">
                                        <i class="fa fa-fw fa-calendar mr-5"></i>10 Juli 2017
                                    </span>
                                    <a class="text-muted mr-15">
                                        <i class="fa fa-fw fa-user mr-5"></i>Ilham Penyok
                                    </a>
                                    <a class="text-muted" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-tag mr-5"></i>Keputih
                                    </a>
                                    <a class="text-muted" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-tag mr-5"></i>Sosial
                                    </a>
                                    <a class="text-muted" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-tag mr-5"></i>Dokumentasi
                                    </a>
                                </div>
                                <p>Assalamualaikum warahmatullahi wabarokattuh.</p>
                                <p>Alhamdulillah, Wa Syukurillah Wanikmatillah. Segala puji bagi Allah SWT atas Rahmat, Taufik dan Hidayan-Nya yang selama ini telah dianugrahkan begitu luar biasa kepada kita selaku hamba-Nya. Sholawat serta salam, tiada lupa kami haturkan sholawat serta salam kepada junjungan nabi Muhammad SAW, keluarganya dan para sahabatnya.</p>
                                <a class="link-effect font-w600" href="/readmore3">Selengkapnya..</a>
                            </div>
                            <div class="mb-50">
                                <div class="overflow-hidden rounded mb-20" style="height: 200px;">
                                    <a class="img-link" href="/readmore2">
                                        <img class="img-fluid" src="/image/front3.jpg" alt="">
                                    </a>
                                </div>
                                <h3 class="h4 font-w700 text-uppercase mb-5">Sunday Sharing Homeless Ekspedisi Ke 2</h3>
                                <div class="text-muted mb-10">
                                    <span class="mr-15">
                                        <i class="fa fa-fw fa-calendar mr-5"></i>05 Juli 2017
                                    </span>
                                    <a class="text-muted mr-15">
                                        <i class="fa fa-fw fa-user mr-5"></i>Cahya Putra
                                    </a>
                                    <a class="text-muted" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-tag mr-5"></i>Lempuyangan
                                    </a>
                                    <a class="text-muted" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-tag mr-5"></i>Sosial
                                    </a>
                                    <a class="text-muted" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-tag mr-5"></i>Dokumentasi
                                    </a>
                                </div>
                                <p>Assalamualaikum warahmatullahi wabarokattuh.</p>
                                <p>Alhamdulillah, Wa Syukurillah Wanikmatillah. Segala puji bagi Allah SWT atas Rahmat, Taufik dan Hidayan-Nya yang selama ini telah dianugrahkan begitu luar biasa kepada kita selaku hamba-Nya. Sholawat serta salam, tiada lupa kami haturkan sholawat serta salam kepada junjungan nabi Muhammad SAW, keluarganya dan para sahabatnya.</p>
                                <a class="link-effect font-w600" href="/readmore2">Selengkapnya..</a>
                            </div>
                            <div class="mb-50">
                                <div class="overflow-hidden rounded mb-20" style="height: 200px;">
                                    <a class="img-link" href="/readmore1">
                                        <img class="img-fluid" src="/image/front10.jpg" alt="">
                                    </a>
                                </div>
                                <h3 class="h4 font-w700 text-uppercase mb-5">Sunday Sharing Homeless Ekspedisi Ke 1</h3>
                                <div class="text-muted mb-10">
                                    <span class="mr-15">
                                        <i class="fa fa-fw fa-calendar mr-5"></i>01 juli 2017
                                    </span>
                                    <a class="text-muted mr-15">
                                        <i class="fa fa-fw fa-user mr-5"></i>Hikmawan
                                    </a>
                                    <a class="text-muted" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-tag mr-5"></i>Nginden
                                    </a>
                                    <a class="text-muted" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-tag mr-5"></i>Sosial
                                    </a>
                                    <a class="text-muted" href="javascript:void(0)">
                                        <i class="fa fa-fw fa-tag mr-5"></i>Dokumentasi
                                    </a>
                                </div>
                                <p>Assalamualaikum warahmatullahi wabarokattuh.</p>
                                <p>Alhamdulillah, Wa Syukurillah Wanikmatillah. Segala puji bagi Allah SWT atas Rahmat, Taufik dan Hidayan-Nya yang selama ini telah dianugrahkan begitu luar biasa kepada kita selaku hamba-Nya. Sholawat serta salam, tiada lupa kami haturkan sholawat serta salam kepada junjungan nabi Muhammad SAW, keluarganya dan para sahabatnya.</p>
                                <a class="link-effect font-w600" href="/readmore1">Selengkapnya..</a>
                            </div>
                            <nav class="clearfix push">
                                <a class="btn btn-secondary min-width-100 float-right disabled" href="javascript:void(0)">
                                    Selanjutnya <i class="fa fa-arrow-right ml-5"></i>
                                </a>
                                <a class="btn btn-secondary min-width-100 float-left disabled" href="javascript:void(0)">
                                    <i class="fa fa-arrow-left mr-5"></i> Sebelummnya
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
                                    <h3 class="block-title text-uppercase">Komentar</h3>
                                </div>
                                <div class="block-content">
                                    <div class="media mb-20">
                                        <img class="img-avatar img-avatar32 d-flex mr-20" src="/image/awan.jpeg" alt="">
                                        <div class="media-body">
                                            <p class="mb-5"><a class="font-w600" href="javascript:void(0)">Hikmawan</a> - “Barangsiapa memberi pinjaman kepada Allah dengan pinjaman yang baik, maka Allah akan melipatgandakan balasan pinjaman itu untuknya dan dia akan memperoleh pahala yang banyak” (QS. Al Hadid: 11)</p>
                                            <div class="font-size-sm text-muted">10 Jam yang lalu</div>
                                        </div>
                                    </div>
                                    <div class="media mb-20">
                                        <img class="img-avatar img-avatar32 d-flex mr-20" src="/image/fuad.jpg" alt="">
                                        <div class="media-body">
                                            <p class="mb-5"><a class="font-w600" href="javascript:void(0)">Fuad</a> - “Apapun harta yang kalian infakkan maka Allah pasti akan menggantikannya, dan Dia adalah sebaik-baik pemberi rezeki" (QS. Saba: 39)</p>                                            
                                            <div class="font-size-sm text-muted">15 Jam yang lalu</div>
                                        </div>
                                    </div>
                                    <div class="media mb-20">
                                        <img class="img-avatar img-avatar32 d-flex mr-20" src="/image/penyok.jpg" alt="">
                                        <div class="media-body">
                                            <p class="mb-5"><a class="font-w600" href="javascript:void(0)">Penyok</a> - “Allah menghendaki kemudahan bagimu dan tiada menghendaki kesulitan” (QS. Al-Baqarah: 185)</p>                                            
                                            <div class="font-size-sm text-muted">2 hari yang lalu</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Twitter Feed -->

                            <!-- Categories -->
                            <div class="block block-transparent">
                                <div class="block-header">
                                    <h3 class="block-title text-uppercase">
                                        <i class="fa fa-fw fa-list mr-5"></i> Kategori
                                    </h3>
                                </div>
                                <div class="block-content">
                                    <ul class="nav nav-pills flex-column push">
                                        <li class="nav-item">
                                            <a class="nav-link d-flex align-items-center justify-content-between active" href="javascript:void(0)">
                                                <span><i class="fa fa-fw fa-star mr-5"></i> Berita</span>
                                                <span class="badge badge-pill badge-secondary">0</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                                <span><i class="fa fa-fw fa-pencil mr-5"></i> Dokumentasi</span>
                                                <span class="badge badge-pill badge-secondary">4</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                                <span><i class="fa fa-fw fa-briefcase mr-5"></i> Donasi</span>
                                                <span class="badge badge-pill badge-secondary">10</span>
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
                                        <i class="fa fa-tag text-muted mr-5"></i>Dokumentasi
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary mb-5" href="javascript:void(0)">
                                        <i class="fa fa-tag text-muted mr-5"></i>Sosial
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary mb-5" href="javascript:void(0)">
                                        <i class="fa fa-tag text-muted mr-5"></i>Surabaya
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary mb-5" href="javascript:void(0)">
                                        <i class="fa fa-tag text-muted mr-5"></i>Lempuyangan
                                    </a>
                                    <a class="btn btn-sm btn-alt-secondary mb-5" href="javascript:void(0)">
                                        <i class="fa fa-tag text-muted mr-5"></i>Keputih
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