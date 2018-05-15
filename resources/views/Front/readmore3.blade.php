@extends('layouts.app')

@section('title', 'Blogs')

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
    <div class="bg-image" style="background-image: url('/image/front9.jpg');">
        <div class="bg-black-op-75">
            <div class="content content-top text-center">
                <div class="py-100">
                    <h1 class="font-w700 text-white mb-10">Sunday Sharing Homeless Ekspedisi Ke 3</h1>
                    <h2 class="h4 font-w400 text-white-op">Area Keputih Kota Surabaya</h2>
                    <div class="font-size-md text-muted">
                        <a class="text-body-bg-dark">Ilham Penyok</a> &bull; 10 Juli 2017
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Story -->
    <div class="content content-full nice-copy-story">
        <div class="row justify-content-center py-30">
            <div class="col-lg-8">
                <h3>Beramal Akan Menenangkan Hati</h3>
                <p>Assalamualaikum warahmatullahi wabarokattuh.<br><br>

                        Alhamdulillah, Wa Syukurillah Wanikmatillah. Segala puji bagi Allah SWT atas Rahmat, Taufik dan Hidayan-Nya yang selama ini telah dianugrahkan begitu luar biasa kepada kita selaku hamba-Nya. Sholawat serta salam, tiada lupa kami haturkan sholawat serta salam kepada junjungan nabi Muhammad SAW, keluarganya dan para sahabatnya.
                        
                        Panti Asuhan Yatim dan Du'afa Muhammadiyah Sungai Bahar adalah salah satu dari 318 Panti Asuhan yang didirikan oleh Organisasi Peryarikatan Muhammadiyah di seluruh Indonesia, berlokasi di Jalan Dahlia No. 1 Desa Marga Mulya, Kecamatan Sungai Bahar, Kabupaten Muaro Jambi, Provinsi Jambi. Panti ini merupakan salah satu amal usaha Pengurus Cabang Muhammadiyah Sungai Bahar Tengah. Berdiri pada tanggal 17 Desember 2015, pada awal berdirinya, panti ini terdapat 8 ruang kamar, 4 kamar mandi dan 1 rumah pengasuh dengan jumlah anak asuh 10 orang.
                        
                        Perkenalkan nama saya Agus Riyadi Sekretaris Pimpinan Daerah Muhammadiyah Muaro Jambi sekaligus Ketua Pengurus Panti yatim dan Dhu'afa Muhammadiyah Sungai Bahar yang memiliki mimpi untuk menjadi pribadi yang bermanfaat dan memberikan kontribusi untuk bangsa Indonesia. Melihat begitu banyak anak-anak yatim dan anak-anak dari keluarga yang tidak mampu, mengetuk pintu hati saya untuk memberikan harapan kepada mereka bahwa mereka bisa merubah hidupnya walaupun dengan keadaan yang tidak ideal dan tentu mereka merupakan aset bangsa yang harus kita jaga.
                        
                        Begitu banyak orang sukses, terlahir dari kepahitan hidup dan proses perjuangan yang melelahkan, alangkah bahagianya kita jika menjadi bagian dari kesuksesan mereka dimasa depan.
                        
                        Karena setiap yang kita miliki akan dimintai pertanggungjawaban oleh sebab itulah mari kita sisihkan harta, pikiran dan tenaga kita untuk peduli kepada sesama.</p>
            </div>
        </div>
        <div class="row justify-content-center py-30">
            <div class="col-lg-8 clearfix">
                <button type="button" class="btn btn-rounded btn-secondary float-right">
                    <i class="fa fa-share-alt text-primary mr-5 "></i> Share
                </button>
            </div>
        </div>
    </div>
    <!-- END Story -->

    <!-- Responses -->
    <div class="bg-body-dark">
        <div class="content content-full">
            <div class="row justify-content-center py-30">
                <div class="col-lg-8">
                    <h3 class="font-w700 mb-50">Komentar (3)</h3>
                    <div class="media mb-30">
                        <img class="img-avatar img-avatar48 d-flex mr-20" src="/image/awan.jpeg" alt="">
                        <div class="media-body">
                            <p class="mb-5"><a class="font-w600" href="javascript:void(0)">Hikmawan</a> “Barangsiapa memberi pinjaman kepada Allah dengan pinjaman yang baik, maka Allah akan melipatgandakan balasan pinjaman itu untuknya dan dia akan memperoleh pahala yang banyak” (QS. Al Hadid: 11)</p>
                            <div class="font-size-sm">
                                <a class="link-effect" href="javascript:void(0)">Suka</a>
                                <span role="presentation" aria-hidden="true"> · </span>
                                <a class="link-effect" href="javascript:void(0)">Balas</a>
                                <span role="presentation" aria-hidden="true"> · </span>
                                <span class="text-muted mr-5">10 Jam yang lalu</span>
                            </div>
                        </div>
                    </div>
                    <div class="media mb-30">
                        <img class="img-avatar img-avatar48 d-flex mr-20" src="/image/fuad.jpg" alt="">
                        <div class="media-body">
                            <p class="mb-5"><a class="font-w600" href="javascript:void(0)">Fuad</a> “Apapun harta yang kalian infakkan maka Allah pasti akan menggantikannya, dan Dia adalah sebaik-baik pemberi rezeki" (QS. Saba: 39)</p>
                            <div class="font-size-sm">
                                <a class="link-effect" href="javascript:void(0)">Suka</a>
                                <span role="presentation" aria-hidden="true"> · </span>
                                <a class="link-effect" href="javascript:void(0)">Balas</a>
                                <span role="presentation" aria-hidden="true"> · </span>
                                <span class="text-muted mr-5">15 Jam yang lalu</span>
                            </div>
                        </div>
                    </div>
                    <div class="media mb-30">
                        <img class="img-avatar img-avatar48 d-flex mr-20" src="/image/penyok.jpg" alt="">
                        <div class="media-body">
                            <p class="mb-5"><a class="font-w600" href="javascript:void(0)">Penyok</a> “Allah menghendaki kemudahan bagimu dan tiada menghendaki kesulitan” (QS. Al-Baqarah: 185)</p>
                            <div class="font-size-sm">
                                <a class="link-effect" href="javascript:void(0)">Suka</a>
                                <span role="presentation" aria-hidden="true"> · </span>
                                <a class="link-effect" href="javascript:void(0)">Balas</a>
                                <span role="presentation" aria-hidden="true"> · </span>
                                <span class="text-muted mr-5">2 hari yang lalu</span>
                            </div>
                        </div>
                    </div>
                    <div class="media mb-30">
                        <img class="img-avatar img-avatar48 d-flex mr-20" src="{{('codebase/02 - Codebase Source (HTML)/src/assets/img/avatars/avatar0.jpg')}}" alt="">
                        <div class="media-body">
                            <form action="be_pages_generic_story.html" method="post" onsubmit="return false;">
                                <textarea class="form-control mb-5" rows="5" placeholder="Beri Komentar"></textarea>
                                <button type="submit" class="btn btn-secondary">
                                    <i class="fa fa-reply mr-5"></i>Komen
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Responses -->
</main>
<!-- END Main Container -->

@endsection