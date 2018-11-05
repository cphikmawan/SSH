@extends('layouts.front.app')

@section('title', 'Formulir')

@section('sidebar')
    @include('layouts.front.sidebar')
@endsection

@section('header')
    @include('layouts.front.header')    
@endsection

@section('content')
{{--  <!-- Progress Wizards -->  --}}
<h2 class="content-heading">
    <a href="/harga"><button type="button" class="btn btn-sm btn-rounded btn-alt-secondary float-right">Batal</button></a>
    <i class="fa fa-calculator"> Pembayaran</i>
</h2>
<div class="row">
    <div class="col-md-12">
        {{--  <!-- Progress Wizard 2 -->  --}}
        <div class="js-wizard-validation-material block">
            {{--  <!-- Step Tabs -->  --}}
            <ul class="nav nav-tabs nav-tabs-alt nav-fill" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" onclick="check()" style="pointer-events: none;" href="#wizard-validation-material-step1" data-toggle="tab">Step 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" onclick="check()" style="pointer-events: none;" href="#wizard-validation-material-step2" data-toggle="tab">Step 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" onclick="check()"  style="pointer-events: none;" href="#wizard-validation-material-step3" data-toggle="tab">Step 3</a>
                </li>
            </ul>
            {{--  <!-- END Step Tabs -->  --}}

            {{--  <!-- Form -->  --}}
            <form class="js-wizard-validation-material-form" action="/invoice">
                <div class="block-content block-content-full tab-content" style="min-height: 274px;">
                    {{-- Step 1 --}}
                    <div class="tab-pane active" id="wizard-validation-material-step1" role="tabpanel">
                        <div class="form-group">
                            <div class="form-material form-material-primary floating">
                                <input class="form-control" type="text" id="wizard-nama" name="wizard-nama">
                                <label for="wizard-nama">Nama</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material form-material-primary floating">
                                <input class="form-control" type="text" id="wizard-identitas" name="wizard-identitas">
                                <label for="wizard-identitas">Nomer Identitas</label>
                                <small>KTP, SIM, Kartu Lainnya</small>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material form-material-primary floating">
                                <input class="form-control" type="text" id="wizard-alamat" name="wizard-alamat">
                                <label for="wizard-alamat">Alamat</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material form-material-primary floating">
                                <input class="form-control" type="text" id="wizard-telepon" name="wizard-telepon">
                                <label for="wizard-telepon">Nomer Telepon</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material form-material-primary floating">
                                <input class="form-control" type="email" id="wizard-email" name="wizard-email">
                                <label for="wizard-email">Email</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-material form-material-primary floating">
                                <input class="form-control" type="text" id="wizard-barang" name="wizard-barang">
                                <label for="wizard-barang">Jenis Barang</label>
                                <small>contoh: perabotan, barang eventual</small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12">Jasa Antar Jemput Barang?</label>
                            <div class="col-12">
                                <div class="custom-control custom-checkbox custom-control-inline mb-5">
                                    <input class="custom-control-input" type="checkbox" name="example-inline-checkbox1" id="example-inline-checkbox1" value="option1" checked="">
                                    <label class="custom-control-label" for="example-inline-checkbox1">Ya</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline mb-5">
                                    <input class="custom-control-input" type="checkbox" name="example-inline-checkbox2" id="example-inline-checkbox2" value="option2">
                                    <label class="custom-control-label" for="example-inline-checkbox2">Tidak</label>
                                </div>
                            </div>
                            <small class="col-12">Akan otomatis ditolak jika diluar Surabaya</small>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <div class="form-material form-material-primary floating">
                                    <textarea class="form-control" id="wizard-catatan" name="wizard-catatan" rows="3"></textarea>
                                    <label for="wizard-catatan">Catatan</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <a class="link-effect" href="#" data-toggle="modal" data-target="#modal-terms">
                                <i class="si si-question fa-2x float-right"></i><br>
                            </a>
                        </div>
                    </div>
                    {{-- Step 2 --}}
                    <div class="tab-pane" id="wizard-validation-material-step2" role="tabpanel">
                        <label>Pembayaran</label>
                        <div class="row">
                            <div class="col-3">
                                <label class="css-control css-control-primary css-radio">
                                    <input type="radio" class="css-control-input" id="mandiri" name="radio-group2" checked>
                                    <span class="css-control-indicator"></span>
                                    <img src="https://i1.wp.com/www.technoaiti.com/wp-content/uploads/2017/12/limit-transfer-internet-banking-mandiri.jpg?fit=400%2C400"
                                        alt="Mandiri" width="150px" />
                                </label>
                            </div>
                            <div class="col-3">
                                <label class="css-control css-control-primary css-radio">
                                    <input type="radio" class="css-control-input" id="bni" name="radio-group2" checked>
                                    <span class="css-control-indicator"></span>
                                    <img src="/image/syariah.jpg" alt="BNI syariah" width="150px" />
                                </label>
                            </div>
                            <div class="col-3" style="padding: 50px">
                                <label class="css-control css-control-primary css-radio">
                                    <input type="radio" class="css-control-input" id="bca" name="radio-group2" checked>
                                    <span class="css-control-indicator"></span>
                                    <img src="https://belanjanyaman.files.wordpress.com/2012/10/bankbca.jpg" alt="BCA" width="150px" />
                                </label>
                            </div>
                            <div class="col-3">
                                <label class="css-control css-control-primary css-radio">
                                    <input type="radio" class="css-control-input" id="bri" name="radio-group2" checked>
                                    <span class="css-control-indicator"></span>
                                    <img src="http://img.phone.baidu.com/public/uploads/store_0/e/1/b/56bf4b5c20ab4dce5ba024f6e6eb4e66.png"
                                        alt="BRI" width="150px" />
                                </label>
                            </div>
                        </div>
                    </div>
                    {{-- Step 3  --}}
                    <div class="tab-pane" id="wizard-validation-material-step3" role="tabpanel">
                        <div class="form-group" id="final" style="display:block">
                            <div class="col-lg-12 col-xl-12">
                                <div class="block block-fx-shadow text-center">
                                    <a class="d-block bg-success font-w600 text-uppercase py-5" data-toggle="modal">
                                        <span class="text-white">Nominal</span>
                                    </a>
                                    <div class="block-content block-content-full">
                                        <div class="pt-20 pb-30">
                                            <div class="font-size-h2 font-w700" id="nominal">nominal</div>
                                            <div class="font-size-sm font-w600 text-muted" id="bank">bank</div>
                                            <div class="font-size-h4 font-w600 text-uppercase text-muted" id="nomorrekening">rekening</div>
                                            <div class="font-size-sm font-w600 text-muted" id="atasnama">atas nama</div>
                                        </div>
                                        <p style="color:red;">Harap transfer sampai 3 digit terakhir agar pembayaran terverifikasi otomatis</p>
                                        <p style="color:red;">Batas transfer 3x24 Jam</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end step 3 --}}
                </div>

                <div class="block-content block-content-sm block-content-full bg-body-light">
                    <div class="row">
                        <div class="col-6">
                            <button type="button" class="btn btn-alt-secondary" data-wizard="prev">
                                <i class="fa fa-angle-left mr-5"></i> Sebelumnya
                            </button>
                        </div>
                        <div class="col-6 text-right">
                            <button onclick="check()" type="button" class="btn btn-alt-secondary" data-wizard="next">
                                Selanjutnya <i class="fa fa-angle-right ml-5"></i>
                            </button>
                            <button type="submit" class="btn btn-alt-primary d-none" data-wizard="finish">
                                <i class="fa fa-check mr-5"></i> Konfirmasi Pengiriman
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
function rupiah(x){
    return x.toLocaleString('id-ID');
}
function check() {
    var donasi = parseInt(document.getElementById("wizard-telepon").value);
    var kodeunik = parseInt(Math.random() * (999 - 20) + 20);
    donasi = donasi + kodeunik;
    console.log (donasi + kodeunik);
    
    if (donasi == null) {
        alert("nominal donasi harus diisi");
    }
    var mandiri = document.getElementById("mandiri");
    var bni = document.getElementById("bni");
    var bca = document.getElementById("bca");
    var bri = document.getElementById("bri");
    var transfer = document.getElementById("transfer");
    if (mandiri.checked == true){
            final.style.display = "block";
            document.getElementById("nominal").innerHTML = "Rp " + rupiah(donasi);
            document.getElementById("bank").innerHTML = "Tranfer Bank Mandiri";
            document.getElementById("nomorrekening").innerHTML = "13000-1499-4464";
            document.getElementById("atasnama").innerHTML = "atas nama kelompok tekno 4";
        } else {
        //final.style.display = "none";
    }
    if (bni.checked == true){
            final.style.display = "block";
            document.getElementById("nominal").innerHTML = "Rp " + rupiah(donasi);
            document.getElementById("bank").innerHTML = "Tranfer Bank BNI";
            document.getElementById("nomorrekening").innerHTML = "150-81-2726";
            document.getElementById("atasnama").innerHTML = "atas nama kelompok tekno 4";
        } else {
        //final.style.display = "none";
    }
    if (bca.checked == true){
            final.style.display = "block";
            document.getElementById("nominal").innerHTML = "Rp " + rupiah(donasi);
            document.getElementById("bank").innerHTML = "Tranfer Bank BCA";
            document.getElementById("nomorrekening").innerHTML = "7750-314-613";
            document.getElementById("atasnama").innerHTML = "atas nama kelompok tekno 4";
        } else {
        //final.style.display = "none";
    }
    if (bri.checked == true){
            final.style.display = "block";
            document.getElementById("nominal").innerHTML = "Rp " + rupiah(donasi);
            document.getElementById("bank").innerHTML = "Tranfer Bank BRI";
            document.getElementById("nomorrekening").innerHTML = "037 701 000 435 301";
            document.getElementById("atasnama").innerHTML = "atas nama kelompok tekno 4";
        } else {
        // final.style.display = "none";
    }
    
}
</script>
@endsection


