@extends('layouts.app')

@section('title', 'About')

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
                <div class="bg-image" style="background-image: url('image/anggota2.jpg');">
                    <div class="bg-black-op-75">
                        <div class="content content-top text-center">
                            <div class="py-100">
                                <h1 class="font-w700 text-white mb-10">SSH</h1>
                                <h2 class="h4 font-w400 text-white-op">Saturday Sharing Homeless</h2>
                                <h2 class="h5 font-w400 text-white-op"><i class="fa fa-heart text-pulse"></i> Komunitas Sosial - Peduli - Berbagi <i class="fa fa-heart text-pulse"></i></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Hero -->

                <!-- Page Content -->
                <div class="content content-full">
                    <!-- Info -->
                    <div class="block">
                        <div class="block-content">
                            <div class="row nice-copy">
                                <div class="col-md-4 py-30">
                                    <h3 class="h4 font-w700 text-uppercase pb-10 border-b border-3x">Siapakah <span class="text-primary">Kami </span>?</h3>
                                    <p class="mb-0">Kami adalah sekumpulan orang yang suka berbagi dengan sesama khususnya para tunawisma di Kota Surabaya. Sekumpulan orang yang meluangkan waktu untuk berbagi.</p>
                                </div>
                                <div class="col-md-4 py-30">
                                    <h3 class="h4 font-w700 text-uppercase pb-10 border-b border-3x">Apa yang<span class="text-primary"> kami </span>lakukan?</h3>
                                    <p class="mb-0">Sesempatnya jika ada rezeki kami akan berbagi kepada para tunawisma Daerah Surabaya, baik itu makanan, pakaian atau uang santunan. Begitupula saling mengenal dan berbincang.</p>
                                </div>
                                <div class="col-md-4 py-30">
                                    <h3 class="h4 font-w700 text-uppercase pb-10 border-b border-3x">Bergabunglah dengan <span class="text-primary">kami</span></h3>
                                    <p class="mb-0">Bersama kita bisa berbagi kepada sesama. "Apapun harta yang kalian infakkan maka Allah pasti akan menggantikannya, dan Dia adalah sebaik-baik pemberi rezeki" (QS. Saba: 39)</p>
                                </div>
                                <div class="col-md-12 py-30">
                                    <h3 class="h4 font-w700 text-uppercase text-center pb-10 border-b border-3x mb-0"><span class="text-primary">Statistik </span>Sementara</h3>

                                    <!-- CountTo ([data-toggle="countTo"] is initialized in Codebase() -> uiHelperCoreAppearCountTo()) -->
                                    <!-- For more info and examples you can check out https://github.com/mhuggins/jquery-countTo -->
                                    <div class="row text-center">
                                        <div class="col-sm-6 col-md-3 py-30">
                                            <div class="mb-20">
                                                <i class="si si-briefcase fa-3x text-primary"></i>
                                            </div>
                                            <div class="font-size-h1 font-w700 text-black mb-5" data-toggle="countTo" data-to="234" data-after="+">0</div>
                                            <div class="font-w600 text-muted text-uppercase">Donatur</div>
                                        </div>
                                        <div class="col-sm-6 col-md-3 py-30">
                                            <div class="mb-20">
                                                <i class="si si-users fa-3x text-primary"></i>
                                            </div>
                                            <div class="font-size-h1 font-w700 text-black mb-5" data-toggle="countTo" data-to="98" data-after="+">0</div>
                                            <div class="font-w600 text-muted text-uppercase">Anggota</div>
                                        </div>
                                        <div class="col-sm-6 col-md-3 py-30">
                                            <div class="mb-20">
                                                <i class="si si-wallet fa-3x text-primary"></i>
                                            </div>
                                            <div class="font-size-h1 font-w700 text-black mb-5" data-toggle="countTo" data-to="5" data-after=".000.000+">0</div>
                                            <div class="font-w600 text-muted text-uppercase">Total Donasi (Rupiah)</div>
                                        </div>
                                        <div class="col-sm-6 col-md-3 py-30">
                                            <div class="mb-20">
                                                <i class="si si-map fa-3x text-primary"></i>
                                            </div>
                                            <div class="font-size-h1 font-w700 text-black mb-5" data-toggle="countTo" data-to="90" data-after="">0</div>
                                            <div class="font-w600 text-muted text-uppercase">Kota</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Info -->

<!-- Team -->
                    <div class="row gutters-tiny py-20">
                        <div class="col-md-6 col-xl-4">
                            <div class="block text-center">
                                <div class="block-content">
                                    <img class="img-avatar img-avatar96" src="/image/penyok.jpg" alt="">
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="font-size-h4 font-w600 mb-0">Udin IMM</div>
                                    <div class="font-size-h5 text-muted">Pendiri</div>
                                </div>
                                <div class="block-content block-content-full bg-body-light">
                                    <a class="btn btn-circle btn-secondary" href="https://github.com/fuaddary/SSH">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a class="btn btn-circle btn-secondary" href="https://github.com/fuaddary/SSH">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a class="btn btn-circle btn-secondary" href="https://github.com/fuaddary/SSH">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="block text-center">
                                <div class="block-content">
                                    <img class="img-avatar img-avatar96" src="/image/fuad.jpg" alt="">
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="font-size-h4 font-w600 mb-0">DR Fu</div>
                                    <div class="font-size-h5 text-muted">Manajer</div>
                                </div>
                                <div class="block-content block-content-full bg-body-light">
                                    <a class="btn btn-circle btn-secondary" href="https://github.com/fuaddary/SSH">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a class="btn btn-circle btn-secondary" href="https://github.com/fuaddary/SSH">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a class="btn btn-circle btn-secondary" href="https://github.com/fuaddary/SSH">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="block text-center">
                                <div class="block-content">
                                    <img class="img-avatar img-avatar96" src="/image/awan.jpeg" alt="">
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="font-size-h4 font-w600 mb-0">Cloud</div>
                                    <div class="font-size-h5 text-muted">Manajer</div>
                                </div>
                                <div class="block-content block-content-full bg-body-light">
                                    <a class="btn btn-circle btn-secondary" href="https://github.com/fuaddary/SSH">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a class="btn btn-circle btn-secondary" href="https://github.com/fuaddary/SSH">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a class="btn btn-circle btn-secondary" href="https://github.com/fuaddary/SSH">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Team -->

                </div>
                <!-- END Page Content -->

                <!-- We are hiring -->
                <div class="bg-body-dark">
                    <div class="content">
                        <div class="py-50 nice-copy text-center">
                            <h3 class="font-w700 mb-10">Kita Peduli Sesama !</h3>
                            <h4 class="font-w400 text-muted mb-30">Berbagi Kebaikan Dengan Kami</h4>
                            <a class="btn btn-hero btn-noborder btn-lg btn-rounded btn-primary" href="/donasi">DONASI</a>
                        </div>
                    </div>
                </div>
                <!-- END We are hiring -->

            </main>

@endsection