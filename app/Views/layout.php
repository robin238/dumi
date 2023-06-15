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

    <section id="services" class="services section-padding layout-layer-1">
        <div class="container">
            <div class="row bangkit">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 bangkit1">
                    <h2> Bangkit Bersama Dumi</h2>

                    <p>Dumi adalah
                        platform digital yang
                        memberikan
                        akses layanan keuangan
                        yang berkualitas, aman dan terjangkau dalam rangka meningkatkan kesejahteraan dan kemandirian
                        Aparatur Sipil Negara di
                        Indonesia.</p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 bangkit2">

                    <!-- <table>
                        <tr>
                            <td> <img src="assets/img/dumi/money.png" alt=""></td>
                            <td>
                                <h5>Rp 632 M</h5>
                                <p>Pendanaan Sejak Berdiri</p>
                            </td>
                            <td> <img src="assets/img/dumi/coin.png" alt=""></td>
                            <td>
                                <h5>Rp 162 M</h5>
                                <p>Pendanaan Tahun Ini</p>
                            </td>
                        </tr>
                        <tr>
                            <td> <img src="assets/img/dumi/user.png" alt=""></td>
                            <td>
                                <h5>8.678</h5>
                                <p>Total Penerima Dana</p>
                            </td>
                            <td> <img src="assets/img/dumi/build.png" alt=""></td>
                            <td>
                                <h5>3 Institusi</h5>
                                <p>Pemberi Dana</p>
                            </td>
                        </tr>
                    </table> -->


                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <img src="assets/img/dumi/money.png" alt="">
                                <h5>Rp 632 M</h5>
                                <p>Pendanaan Sejak Berdiri</p>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <img src="assets/img/dumi/money.png" alt="">
                                <h5>Rp 632 M</h5>
                                <p>Pendanaan Sejak Berdiri</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="row">
                                    <img src="assets/img/dumi/money.png" alt="">
                                    <h5>Rp 632 M</h5>
                                    <p>Pendanaan Sejak Berdiri</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="row">
                                    <img src="assets/img/dumi/money.png" alt="">
                                    <h5>Rp 632 M</h5>
                                    <p>Pendanaan Sejak Berdiri</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row apik">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 apik1">
                        <img src="../assets/img/dumi/apik.png" alt="">
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 apik2">

                        <h2> Melayani Secara APIK</h2>

                        <p> Dumi APIK merupakan semangat baru Dumi dalam membangun kesadaran masyarakat tentang
                            inklusi
                            keuangan yang memiliki banyak manfaat untuk mewujudkan kehidupan yang lebih baik.</p>

                    </div>

                </div>
            </div>


    </section>

    <!-- Services Section Start -->
    <section id="services" class="services section-padding layout-layer-2"
        style="background: url(assets/img/dumi/peta.png) ,radial-gradient(circle at top left, #0061d4, #0075d4); ">
        <!-- <img src="assets/img/dumi/peta.png" alt="peta" style="position: absolute;"> -->
        <div class="container">

            <div class="row">

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="row">
                        <!-- Services item -->

                        <div class="wow fadeInDown" data-wow-delay="0.2s">
                            <img src="assets/img/dumi/handphone.png" alt="" style="width: 100%;min-height: 300px;">
                        </div>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 mt-5">
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


    <section id="services" class="section-padding mt-5 layout-layer-3">

        <div class="container">
            <!-- <img src="assets/img/dumi/mini-header_new.png" alt="" style=" position: absolute;"> -->
            <div class="row ajukan" style=" background-image:url(assets/img/dumi/bg-gradient-1.png) ; background-repeat: no-repeat; background-size: auto;
                    min-height: 300px; border-radius:50px ; ">

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="row">
                        <!-- Services item -->

                        <div class="wow fadeInDown" data-wow-delay="0.2s">

                            <p>
                                Penuhi kebutuhan
                                Anda segera,

                                <b>#AjukanSecaraApik</b> sekarang!
                            </p>

                            <button href="https://play.google.com/store/apps/details?id=com.minjem.dumi"
                                class="btn download" target="_blank"> Download Dumi di Playstore </button>

                            <a href="#" class='' style=" ">Pertanyaan
                                umum seputar
                                Dumi</a>
                        </div>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="row" style="position: absolute;bottom: 0px;right: 100px; ">
                        <!-- Services item -->

                        <div class=" wow fadeInDown" data-wow-delay="0.2s">
                            <div class="row">
                                <img src="assets/img/dumi/cewek-pns-hp-cropped.png" alt="">


                            </div>

                        </div>

                    </div>
                </div>
            </div>


        </div>


    </section>


    <section id="services" class="section-padding layout-layer-4">

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

    <section id="services" class="section-padding layout-layer-5">
        <div class="container">
            <div class="wrapper center-block">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading active" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    Siapa saja yang dapat mengajukan pinjaman di Dumi?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                            aria-labelledby="headingOne">
                            <div class="panel-body">
                                Pagawai Negeri Sipil atau pegawai berpenghasilan tetap dari instansi yang telah bekerja
                                sama.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Apa syarat pengajuannya?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingTwo">
                            <div class="panel-body">
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
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Bagaimana cara mengajukan pinjaman di Dumi?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingThree">
                            <div class="panel-body">
                                Lakukan kerja sama antara instansi dinas Anda dengan Dumi, lalu download aplikasi Dumi
                                di Playstore dan ajukan sesuai syarat dan ketentuan yang berlaku.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFour">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Bagaimana cara mengajukan kerjasama?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingFour">
                            <div class="panel-body">
                                Silakan hubungi nomor berikut hanya dengan WhatsApp: <b>0813-1582-3033</b>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFive">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Bagaimana cara melakukan pembayaran angsuran?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingFive">
                            <div class="panel-body">
                                Pembayaran dilakukan menggunakan virtual akun.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <?= $this->include('footer') ?>

</body>

</html>