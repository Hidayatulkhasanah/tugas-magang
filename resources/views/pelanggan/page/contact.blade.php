@extends('pelanggan.layout.index')

@section('content')
    <div class="row mt-4 align-items-center">
        <div class="col-md-6">
            <div class="content-text p-5">
                "Selamat datang di Daily Hida, tempat di mana gaya dan keanggunan bersatu dalam setiap jahitan. Kami bukan
                hanya toko fashion, melainkan panggung di mana setiap pakaian memiliki cerita uniknya. Dengan koleksi
                terkini, Daily Hida memenuhi kebutuhan fashionista modern, menghadirkan tren terbaru yang tak hanya gaya,
                tapi juga kenyamanan dan kualitas.

                Setiap desain kami bukan hanya pengejaran gaya, melainkan karya seni yang mencerminkan keindahan dan
                keanggunan, memberikan keajaiban pada gaya sehari-hari Anda. Bergabunglah dengan komunitas Daily Hida,
                tempat inspirasi dan wawasan fashion bersatu. Temukan kemewahan dalam setiap detail dan buat setiap hari
                istimewa dengan sentuhan khusus dari Daily Hida. Selamat berbelanja, di mana gaya dan keindahan harmonis
                bersatu."
            </div>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('assets/images/logo.JPG') }}" style="width: 80%;" alt="Logo">
        </div>
    </div>

    <div class="d-flex justify-content-lg-between mt-5">
        <div class="d-flex align-items-center gap-4">
            <i class="fa fa-users fa-2x"></i>
            <p class="m-0 fs-5"> + 5000 pelanggan</p>
        </div>
        <div class="d-flex align-items-center gap-4">
            <i class="fa fa-home fa-2x"></i>
            <p class="m-0 fs-5"> + 500 seller</p>
        </div>
        <div class="d-flex align-items-center gap-4">
            <i class="fa fa-tshirt fa-2x"></i>
            <p class="m-0 fs-5"> + 50 product</p>
        </div>
    </div>

    <h4 class="text-center mt-md-5 mb-md-5">Contact Us</h4>
    <hr class="mb-5">

    <div class="row mb-md-5">
        <div class="col-md-5">
            <div class="bg-secondary" style="width: 100%; height: 50vh; border-radius: 10px;"></div>
        </div>
        <div class="col-md-7">
            <div class="card">
                <div class="card-header text-center">
                    <h4>Kritik dan Saran</h4>
                </div>
                <div class="card-body">
                    <p class="p-0 mb-5 text-lg-center">Masukkan kritik dan saran anda kepada aplikasi yang telah saya buat
                        agar Saya dapat memberikan apa yang menjadi kebutuhan anda dan saya dapat mengembangkan lebih baik
                        lagi.</p>

                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" value=""
                                placeholder="Masukan Email Anda">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="pesan" class="col-sm-2 col-form-label">Pesan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="pesan" value=""
                                placeholder="Masukan Pesan Anda">
                        </div>
                    </div>
                    <button class="btn btn-primary mt-4 w-100">Kirim</button>
                </div>
            </div>
        </div>
    </div>
@endsection
