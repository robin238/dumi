<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->include('header') ?>
</head>

<body>

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
        <?= $this->include('navbar') ?>

        <!-- Main Carousel Section Start -->
        <div id="main-slide" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#main-slide" data-slide-to="0" class="active"></li>
                <li data-target="#main-slide" data-slide-to="1"></li>
                <li data-target="#main-slide" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/img/slider/header_web_1920.png" alt="First slide">
                    <div class="carousel-caption d-md-block">
                        <h1 class="wow fadeInDown heading" data-wow-delay=".4s">
                            Wujudkan Segala Kebutuhan dengan Dana
                            Multiguna</h1>
                        <p class="fadeInUp wow" data-wow-delay=".6s">Plafon
                            hingga Rp300 juta dan tenor maksimal 10.
                            tahun.</p>
                        <span>
                            <p class="fadeInUp wow" data-wow-delay=".6s" style="margin-top: 5px">Berizin & diawasi</p>
                        </span>
                        <div class="row">
                            <div>
                                <img class=" izin" src="assets/img/dumi/OJK.png" alt="">
                            </div>
                            <div>
                                <img class="izin" src="assets/img/dumi/afpi.png" alt="">
                            </div>


                        </div>

                    </div>
                </div>
                <!-- <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/slider/slide2.jpg" alt="Second slide">
                    <div class="carousel-caption d-md-block">
                        <p class="fadeInUp wow" data-wow-delay=".6s">Global Grand Event on Digital Design</p>
                        <h1 class="wow bounceIn heading" data-wow-delay=".7s">22 Amazing Speakers</h1>
                        <a href="#" class="fadeInUp wow btn btn-border btn-lg" data-wow-delay=".8s">Learn More</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/slider/slide3.jpg" alt="Third slide">
                    <div class="carousel-caption d-md-block">
                        <p class="fadeInUp wow" data-wow-delay=".6s">Global Grand Event on Digital Design</p>
                        <h1 class="wow fadeInUp heading" data-wow-delay=".6s">Book Your Seat Now!</h1>
                        <a href="#" class="fadeInUp wow btn btn-common btn-lg" data-wow-delay=".8s">Explore</a>
                    </div>
                </div> -->
            </div>
            <a class="carousel-control-prev" href="#main-slide" role="button" data-slide="prev">
                <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-left"></i></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#main-slide" role="button" data-slide="next">
                <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-right"></i></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- Main Carousel Section End -->

    </header>
    <!-- Header Area wrapper End -->

    <section id="services" class="services section-padding">
        <div class="container">
            <div class="row bangkit">
                <div class="col-6 bangkit1">
                    <h2> Bangkit Bersama Dumi</h2>

                    <p>Dumi adalah
                        platform digital yang
                        memberikan
                        akses layanan keuangan
                        yang berkualitas, aman dan terjangkau dalam rangka meningkatkan kesejahteraan dan kemandirian
                        Aparatur Sipil Negara di
                        Indonesia.</p>
                </div>
                <div class="col-6 bangkit2">

                    <div class="row">
                        <div class="row">
                            <div class="col-4">
                                <img src="assets/img/dumi/money.png" alt="">
                            </div>
                            <div class="col-8">
                                <h5>Rp 632 M</h5>
                                <p>Pendanaan Sejak Berdiri</p>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-4">
                                <img src="assets/img/dumi/coin.png" alt="">
                            </div>
                            <div class="col-8">
                                <h5>Rp 162 M</h5>
                                <p>Pendanaan Tahun Ini</p>
                            </div>

                        </div>
                    </div>

                    <div class="row">

                        <div class="row">
                            <div class="col-4">
                                <img src="assets/img/dumi/user.png" alt="">
                            </div>
                            <div class="col-8">
                                <h5>8.678</h5>
                                <p>Total Penerima Dana</p>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-4">
                                <img src="assets/img/dumi/build.png" alt="">
                            </div>
                            <div class="col-8">
                                <h5 style="margin-left: 15px">3 Institusi</h5>
                                <p style="margin-left: 15px">Pemberi Dana</p>
                            </div>

                        </div>


                    </div>

                </div>

            </div>

            <div class="row apik">
                <div class="col-6 apik1">
                    <img src="../assets/img/dumi/apik.png" alt="">
                </div>
                <div class="col-6 apik2">

                    <h2> Melayani Secara APIK</h2>

                    <p> Dumi APIK merupakan semangat baru Dumi dalam membangun kesadaran masyarakat tentang inklusi
                        keuangan yang memiliki banyak manfaat untuk mewujudkan kehidupan yang lebih baik.</p>

                </div>

            </div>
        </div>


    </section>

    <!-- Coundown Section Start -->
    <!-- <section class="countdown-timer section-padding">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="heading-count">
                        <h2 class="wow fadeInDown" data-wow-delay="0.2s">Event Will Start In</h2>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="row time-countdown justify-content-center wow fadeInUp" data-wow-delay="0.2s">
                        <div id="clock" class="time-count"></div>
                    </div>
                    <a href="pricing.html" class="btn btn-common wow fadeInUp" data-wow-delay="0.3s">Add to My
                        Calender</a>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Coundown Section End -->

    <!-- Services Section Start -->
    <section id="services" class="services section-padding"
        style="background: url(assets/img/dumi/peta.png) ,radial-gradient(circle at top left, #0061d4, #0075d4); ">
        <!-- <img src="assets/img/dumi/peta.png" alt="peta" style="position: absolute;"> -->
        <div class="container">

            <div class="row">

                <div class="col-8">
                    <div class="row">
                        <!-- Services item -->

                        <div class="wow fadeInDown" data-wow-delay="0.2s">
                            <img src="assets/img/dumi/handphone.png" alt="">
                        </div>

                    </div>
                </div>
                <div class="col-4 mt-5">
                    <div class="row">
                        <!-- Services item -->

                        <div class=" wow fadeInDown" data-wow-delay="0.2s">
                            <div class="row">

                                <ul class="list-specification"
                                    style="list-style-type: none;  line-height: 45px; color:white  ">
                                    <h1 style="margin-bottom: 20px; font-weight: bold;">Paling Bisa Diandalkan</h1>
                                    <li><i class="fa-sharp fa-solid fa-circle-check fa-2xl"
                                            style="color: #ffffff; margin-right:20px;"></i>
                                        Bunga kompetitif</li>
                                    <li><i class="fa-sharp fa-solid fa-circle-check fa-2xl"
                                            style="color: #ffffff; margin-right:20px;"></i>
                                        Tenor fleksibel</li>
                                    <li><i class="fa-sharp fa-solid fa-circle-check fa-2xl"
                                            style="color: #ffffff; margin-right:20px;"></i>
                                        Pelayanan responsif</li>
                                    <li><i class="fa-sharp fa-solid fa-circle-check fa-2xl"
                                            style="color: #ffffff; margin-right:20px; "></i>
                                        Jaminan keamanan data</li>
                                    <li><i class="fa-sharp fa-solid fa-circle-check fa-2xl"
                                            style="color: #ffffff; margin-right:20px; "></i>
                                        Berizin dan diawasi OJK</li>
                                </ul>


                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->


    <section id="services" class="section-padding">

        <div class="container">
            <!-- <img src="assets/img/dumi/mini-header_new.png" alt="" style=" position: absolute;"> -->
            <div class="row"
                style="height:511px;width:1256; background-image:url(assets/img/dumi/mini-header_new.png) ; background-repeat: no-repeat;">
                <div class="col-8">
                    <div class="row">
                        <!-- Services item -->

                        <div class="wow fadeInDown" data-wow-delay="0.2s">


                            <p style="font-size:30px ; margin-top: 20% ;width: 60%; margin-left: 25%
                            ; color: #ffffff; line-height: 50px;">
                                Penuhi kebutuhan
                                Anda segera,

                                <b>#AjukanSecaraApik</b> sekarang!
                            </p>

                            <a href="https://play.google.com/store/apps/details?id=com.minjem.dumi" class="btn download"
                                target="_blank"> Download Dumi di Playstore </a>

                            <a href="#" style=" display: inline-block;width: 60%;margin-top: 5%; margin-left: 25%
                            ; color: #ffffff; line-height: 50px; text-decoration: underline;">Pertanyaan umum seputar
                                Dumi</a>
                        </div>

                    </div>
                </div>


            </div>
        </div>

    </section>


    <section id="services" class="section-padding">

        <div class="container">
            <!-- <img src="assets/img/dumi/mini-header_new.png" alt="" style=" position: absolute;"> -->
            <div class="row">

                <!-- Services item -->
                <div class="slider" style="border-radius: 30px;">
                    <div class="slide-track">
                        <div class="slide">
                            <img src="assets/img/dumi/news/media_cnn_1.png" alt="" />
                        </div>
                        <div class="slide">
                            <img src="assets/img/dumi/news/media_detik_1.png" alt="" />
                        </div>
                        <div class="slide">
                            <img src="assets/img/dumi/news/media_kompas_1.png" alt="" />
                        </div>
                        <div class="slide">
                            <img src="assets/img/dumi/news/media_kumparan_1.png" alt="" />
                        </div>
                        <div class="slide">
                            <img src="assets/img/dumi/news/media_liputan6_1.png" alt="" />
                        </div>
                        <div class="slide">
                            <img src="assets/img/dumi/news/media-beritasatu_1.png" alt="" />
                        </div>
                        <div class="slide">
                            <img src="assets/img/dumi/news/media-bisnisindonesia_1.png" alt="" />
                        </div>
                        <div class="slide">
                            <img src="assets/img/dumi/news/media-tirto_1.png" alt="" />
                        </div>

                        <div class="slide">
                            <img src="assets/img/dumi/news/media_cnn_1.png" alt="" />
                        </div>
                        <div class="slide">
                            <img src="assets/img/dumi/news/media_detik_1.png" alt="" />
                        </div>
                        <div class="slide">
                            <img src="assets/img/dumi/news/media_kompas_1.png" alt="" />
                        </div>
                        <div class="slide">
                            <img src="assets/img/dumi/news/media_kumparan_1.png" alt="" />
                        </div>
                        <div class="slide">
                            <img src="assets/img/dumi/news/media_liputan6_1.png" alt="" />
                        </div>
                        <div class="slide">
                            <img src="assets/img/dumi/news/media-beritasatu_1.png" alt="" />
                        </div>
                        <div class="slide">
                            <img src="assets/img/dumi/news/media-bisnisindonesia_1.png" alt="" />
                        </div>
                        <div class="slide">
                            <img src="assets/img/dumi/news/media-tirto_1.png" alt="" />
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </section>

    <section id="faq" class="section-padding">
        <div class="container">
            <div id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                Siapa saja yang dapat mengajukan pinjaman di Dumi?
                            </button>
                            <i class="fa" aria-hidden="true" style="float: right;"></i>
                        </h5>
                    </div>

                    <div id="collapseOne" class=" card-body show faq-answer" aria-labelledby="headingOne"
                        data-parent="#accordion">

                        Pagawai Negeri Sipil atau pegawai berpenghasilan tetap dari instansi yang telah bekerja
                        sama.


                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                                Apa syarat pengajuannya?
                            </button>
                            <i class="fa" aria-hidden="true" style="float: right;"></i>
                        </h5>
                    </div>
                    <div id="collapseTwo" class=" card-body collapse faq-answer" aria-labelledby="headingTwo"
                        data-parent="#accordion">

                        <ol>
                            <li>Pegawai Aktif</li>
                            <li>Instansi Sudah Bekerjasama</li>
                            <li>SK Kepegawaian</li>
                            <li>Surat Rekomendasi Atasan</li>
                            <li>Surat Kuasa Bendahara</li>
                            <li>Slip Gaji</li>
                        </ol>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                                Bagaimana cara mengajukan pinjaman di Dumi?
                            </button>
                            <i class="fa" aria-hidden="true" style="float: right;"></i>
                        </h5>
                    </div>
                    <div id="collapseThree" class=" card-body collapse faq-answer" aria-labelledby="headingThree"
                        data-parent="#accordion">
                        <div>
                            Lakukan kerja sama antara instansi dinas Anda dengan Dumi, lalu download aplikasi Dumi di
                            Playstore dan ajukan sesuai syarat dan ketentuan yang berlaku.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour"
                                aria-expanded="false" aria-controls="collapseFour">
                                Bagaimana cara mengajukan kerjasama?
                            </button>
                            <i class="fa" aria-hidden="true" style="float: right;"></i>
                        </h5>
                    </div>
                    <div id="collapseFour" class=" card-body collapse faq-answer" aria-labelledby="headingFour"
                        data-parent="#accordion">
                        <div>
                            Silakan hubungi nomor berikut hanya dengan WhatsApp: <b>0813-1582-3033</b>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFive">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive"
                                aria-expanded="false" aria-controls="collapseFive">
                                Bagaimana cara melakukan pembayaran angsuran?
                            </button>
                            <i class="fa" aria-hidden="true" style="float: right;"></i>
                        </h5>
                    </div>
                    <div id="collapseFive" class=" card-body collapse faq-answer" aria-labelledby="headingFive"
                        data-parent="#accordion">
                        <div>
                            Pembayaran dilakukan menggunakan virtual akun.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?= $this->include('footer') ?>

</body>

</html>