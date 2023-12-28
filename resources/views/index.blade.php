@extends('_layouts.app')
@section('content')

    <section class="banner">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-11 col-12">
                    <div class="row">
                        <div class="col-lg-6 col-12 copywriting">
                            <p class="story">
                                INCREASING MOBILITY AND IMPROVING LIFE QUALITY
                            </p>
                            <h1 class="header">
                                Ayo Mulai Naik <span class="text-purple"> MRT <br>Jakarta </span> Sekarang!
                            </h1>
                            <p class="support">
                                Mari jadi bagian dari #UbahJakarta  <br> dengan cara naik transportasi umum dari sekarang.
                            </p>
                            <p class="cta">
                                <a href="#" class="btn btn-master btn-primary">
                                    Mulai Sekarang!
                                </a>
                            </p>
                        </div>
                        <div class="col-lg-6 col-12 text-center">
                            <a href="#">
                                <img src="{{asset('images/banner.png')}}" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row brands">
                <div class="col-lg-12 col-12 text-center">
                    <img src="{{asset('images/brands.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="benefits">
        <div class="container">
            <div class="row text-center pb-70">
                <div class="col-lg-12 col-12 header-wrap">
                    <p class="story">
                        Berita
                    </p>
                    <h2 class="primary-header">
                        Info Terkini!
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-12">
                    <div class="item-benefit">
                        <img src="{{asset('images/1.png')}}" class="icon" alt="">
                        <h3 class="title">
                            27 Dec 2023
                        </h3>
                        <p class="support">
                            Dorong Kerja Kolaboratif, MRT Jakarta <br> Selenggarakan Forum Komunitas
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="item-benefit">
                        <img src="{{asset('images/2.png')}}" class="icon" alt="">
                        <h3 class="title">
                            22 Dec 2023
                        </h3>
                        <p class="support">
                            Gelar Donor Darah Bagi Karyawan, <br> MRT Jakarta Dorong Kepedulian Sosial
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="item-benefit">
                        <img src="{{asset('images/3.png')}}" class="icon" alt="">
                        <h3 class="title">
                            22 Dec 2023
                        </h3>
                        <p class="support">
                           PT MRT Jakarta (Perseroda) Raih <br> Trusted Company Dalam CGPI Ke-22
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="item-benefit">
                        <img src="{{asset('images/4.png')}}" class="icon" alt="">
                        <h3 class="title">
                            15 Dec 2023
                        </h3>
                        <p class="support">
                            Presiden Joko Widodo: <br> Progress MRT Jakarta Melebihi Target
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="steps">
        <div class="container">
            <div class="row item-step pb-70">
                <div class="col-lg-6 col-12 text-center">
                    <img src="{{asset('images/step1.png')}}" class="cover" alt="">
                </div>
                <div class="col-lg-6 col-12 text-left copywriting">
                    <p class="story">
                        BEKERJASAMA
                    </p>
                    <h2 class="primary-header">
                        Membangun Negeri
                    </h2>
                    <p class="support">
                        Sebagai upaya merangkul berbagai pihak untuk membangun jakarta, <br> PT MRT Jakarta (Perseroda) menyelenggarakan Forum Komunitas.
                    </p>
                    <p class="mt-5">
                        <a href="#" class="btn btn-master btn-secondary me-3">
                            Baca Selanjutnya
                        </a>
                    </p>
                </div>
            </div>
            <div class="row item-step pb-70">
                <div class="col-lg-6 col-12 text-left copywriting pl-150">
                    <p class="story">
                        Caring
                    </p>
                    <h2 class="primary-header">
                        Bentuk Sosial
                    </h2>
                    <p class="support">
                        Sebagai bentuk program tanggung jawab sosial dan lingkungan Perseroan, <br> PT MRT Jakarta (Perseroda) menggelar acara donor darah bagi karyawan MRT Jakarta.
                    </p>
                    <p class="mt-5">
                        <a href="#" class="btn btn-master btn-secondary me-3">
                            Baca Selanjutnya
                        </a>
                    </p>
                </div>
                <div class="col-lg-6 col-12 text-center">
                    <img src="{{asset('images/step2.png')}}" class="cover" alt="">
                </div>

            </div>
            <div class="row item-step">
                <div class="col-lg-6 col-12 text-center">
                    <img src="{{asset('images/step3.png')}}" class="cover" alt="">
                </div>
                <div class="col-lg-6 col-12 text-left copywriting">
                    <p class="story">
                        Pencapaian
                    </p>
                    <h2 class="primary-header">
                        Meraih Penghargaan
                    </h2>
                    <p class="support">
                        PT MRT Jakarta (Perseroda) meraih penghargaan “Trusted Company” atau perusahaan terpercaya dengan skor 84,00 <br> dalam ajang program Corporate Governance Perception Index (CGPI) 2022 yang berlangsung di Hotel Shangri-La, Jakarta, pada Selasa (20-12-2023).
                    </p>
                    <p class="mt-5">
                        <a href="#" class="btn btn-master btn-secondary me-3">
                            Baca Selanjutnya
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="pricing">
        <div class="container">
            <div class="row pb-70">
                <div class="col-lg-5 col-12 header-wrap copywriting">
                    <p class="story">
                        PILIHAN TERBAIK
                    </p>
                    <h2 class="primary-header text-white">
                        Hematlah dalam Pengeluaranmu
                    </h2>
                    <p class="support">
                        Hematlah waktu, perjalanan, uang, dan lainnya! <br> Gabunglah dengan Subscription MRT.ID dengan harga lebih murah.
                    </p>
                    <p class="mt-5">
                        <a href="#" class="btn btn-master btn-thirdty me-3">
                            My Subscriptions
                        </a>
                    </p>
                </div>
                <div class="col-lg-7 col-12">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="table-pricing paket-gila">
                                <p class="story text-center">
                                    MRT Unlimited
                                </p>
                                <h1 class="price text-center">
                                    Rp.500.000
                                </h1>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Penghematan Biaya
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Tidak Perlu Membeli Tiket Lagi
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Dapat Point 2x Setiap Perjalanan
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Tempat Duduk Terjamin
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Dapatkan Promo Dari Bisnis Mitra Lainnya
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Dapat Digunakan Pada Transportasi Umum Lainnya
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Dapatkan Perjalanan Gratis
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Tidak Perlu Takut Kehabisan Saldo
                                    </p>
                                    <div class="clear"></div>
                                </div>
                                <p>
                                    <a href="{{route('checkout.create', 'gila-belajar')}}" 
                                    class="btn btn-master btn-primary w-100 mt-3">
                                        Take This Subscription
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="table-pricing paket-biasa">
                                <p class="story text-center">
                                    MRT x Viu
                                </p>
                                <h1 class="price text-center">
                                    Rp.250.000
                                </h1>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Penghematan Biaya
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Dapat Point 2x Setiap Perjalanan
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing mb-4">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Dapatkan Langganan Viu Selama 1 Bulan
                                    </p>
                                    <div class="clear"></div>
                                    <div class="divider"></div>
                                </div>
                                <div class="item-benefit-pricing">
                                    <img src="{{asset('images/ic_check.svg')}}" alt="">
                                    <p>
                                        Nikmati Viu Tanpa Kuota
                                    </p>
                                    <div class="clear"></div>
                                </div>
                                <p>
                                    <a href="{{route('checkout.create','gila-belajar')}}" class="btn btn-master btn-secondary w-100 mt-3">
                                        Start With This Subscription
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pb-70">
                <div class="col-lg-12 col-12 text-center">
                    <img src="{{asset('images/brands.png')}}" height="30" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials">
        <div class="container">
            <div class="row text-center pb-70">
                <div class="col-lg-12 col-12 header-wrap">
                    <p class="story">
                        WE LOVE MRT ID
                    </p>
                    <h2 class="primary-header">
                        Kami Pengguna Setia MRT Jakarta
                    </h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10 col-12">
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <div class="item-review">
                                <img src="{{asset('images/stars.svg')}}" alt="">
                                <p class="message">
                                    Stasiun dan kereta bersih, menciptakan lingkungan yang menyenangkan dan Tersedia diskon dan program loyalitas untuk penumpang setia.
                                </p>
                                <div class="user">
                                    <img src="{{asset('images/fanny_photo.png')}}" class="photo" alt="">
                                    <div class="info">
                                        <h4 class="name">
                                            Fanny
                                        </h4>
                                        <p class="role">
                                            BA Kosmetik Watson
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="item-review">
                                <img src="{{asset('images/stars.svg')}}" alt="">
                                <p class="message">
                                    Penggunaan teknologi bersih yang mendukung keberlanjutan dan Sistem keamanan yang baik memberikan rasa aman kepada penumpang.
                                </p>
                                <div class="user">
                                    <img src="{{asset('images/angga.png')}}" class="photo" alt="">
                                    <div class="info">
                                        <h4 class="name">
                                            Citra
                                        </h4>
                                        <p class="role">
                                            Assistant Manager SPA
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="item-review">
                                <img src="{{asset('images/stars.svg')}}" alt="">
                                <p class="message">
                                    Harga tiket yang wajar, memberikan nilai yang baik untuk layanan yang diberikan dan Operasional yang handal dan jarang mengalami keterlambatan.
                                </p>
                                <div class="user">
                                    <img src="{{asset('images/beatrice.png')}}" class="photo" alt="">
                                    <div class="info">
                                        <h4 class="name">
                                            Angelo
                                        </h4>
                                        <p class="role">
                                            Barista Part Time
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row copyright">
                        <div class="col-lg-12 col-12">
                            <p>
                                All Rights Reserved. Copyright MRT ID.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection