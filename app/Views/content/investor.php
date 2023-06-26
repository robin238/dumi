<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->include('header') ?>
</head>

<body>

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
        <?= $this->include('navbar') ?>

        <div class="header">
            Hubungan Investor
        </div>

    </header>
    <!-- Header Area wrapper End -->



    <!-- Schedule Section Start -->
    <section id="schedules" class="schedule section-padding">
        <div class="container">
            <div class="schedule-area row wow fadeInDown" data-wow-delay="0.3s">
                <div class="schedule-tab-title col-md-3 col-lg-3 col-xs-12">
                    <div class="table-responsive">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="prospektus-tab" data-toggle="tab" href="#prospektus"
                                    role="tab" aria-controls="prospektus" aria-expanded="true">
                                    <div class="item-text">
                                        <h4>Prospektus</h4>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tahunan-tab" data-toggle="tab" href="#tahunan" role="tab"
                                    aria-controls="tahunan">
                                    <div class="item-text">
                                        <h4>Laporan Tahunan</h4>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="keuangan-tab" data-toggle="tab" href="#keuangan" role="tab"
                                    aria-controls="keuangan">
                                    <div class="item-text">
                                        <h4>Laporan Keuangan</h4>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="keterbukaan-tab" data-toggle="tab" href="#keterbukaan"
                                    role="tab" aria-controls="keterbukaan">
                                    <div class="item-text">
                                        <h4>Keterbukaan Informasi</h4>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="schedule-tab-content col-md-9 col-lg-9 col-xs-12 clearfix">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="prospektus" role="tabpanel"
                            aria-labelledby="prospektus-tab">
                            <div id="accordion1">
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tahunan" role="tabpanel" aria-labelledby="tahunan-tab">
                            <div id="accordion2">
                                <p></p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="keuangan" role="tabpanel" aria-labelledby="keuangan-tab">
                            <div class="card">
                                <div id="accordion3">
                                    <p style=margin-bottom:10px><a
                                            href="../assets/dokumen/Audited-Financial-Statement-PT.-Fidac-Inovasi-Teknologi-2020.pdf"
                                            style="font-size:18px;color:#045089">Laporan
                                            Keuangan Tahun 2020 (Audited)</a></p>
                                    <p style=margin-bottom:10px><a
                                            href="../assets/dokumen/Audited-Financial-Statement-PT.-Fidac-Inovasi-Teknologi-2021.pdf"
                                            style="font-size:18px;color:#045089">Laporan
                                            Keuangan Tahun 2021 (Audited)</a></p>
                                    <p style=margin-bottom:10px><a
                                            href="../assets/dokumen/Audited-Financial-Statement-PT.-Fidac-Inovasi-Teknologi-2022.pdf"
                                            style="font-size:18px;color:#045089">Laporan
                                            Keuangan Tahun 2022 (Audited)</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="keterbukaan" role="tabpanel" aria-labelledby="keterbukaan-tab">
                            <div id="accordion">
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Schedule Section End -->

    <!-- About Section Start -->
    <section id="about-lembaga" class="about-lembaga section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-header text-center" style="padding-bottom:0;font-size:15px">
                        <h4 class="title-lembaga wow fadeInUp" data-wow-delay="0.2s">Lembaga dan Profesi Penunjang Pasar
                            Modal</h4>
                    </div>
                </div>
            </div>
            <div class="lembaga" style="margin-bottom:20px">
                <div class="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne"><i class="fa"
                                        aria-hidden="true"></i>
                                    Notaris
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordion">
                            <div class="card-body">
                                Notaris: <br>
                                <b> Rini Yulianti, S.H.</b>
                                <br>
                                <br>
                                Alamat:
                                <br>
                                <b> Komplek Bina Marga II Jalan Swakarsa V No. 57 B Pondok Kelapa
                                    Jakarta 13450</b>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="fa" aria-hidden="true"></i>
                                    Konsultan Hukum
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <p>
                                    Konsultan Hukum:
                                    <br>
                                    <b> Fahmy Hoessein & Partners (Advocates and Legal Consultant)</b>
                                    <br> <br>
                                    Alamat:
                                    <br>
                                    <b> Komplek Ruko Darmawangsa Square No. 47 Jalan Darmawangsa VI
                                        Kebayoran Baru, Jakarta Selatan</b>
                                    <br><br>
                                    Telepon:
                                    <br>
                                    <b> (+62)21 725 7253 </b>
                                    <br> <br>
                                    Email:
                                    <br>
                                    <b style="">info@fh-legalconsultant.com </b>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <i class="fa" aria-hidden="true"></i>
                                    Kantor Akuntan Publik
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordion">
                            <div class="card-body">
                                Akuntan Publik:
                                <br>
                                <b>Jimy Abadi</b>
                                <br><br>

                                Alamat:
                                <br>
                                <b> Voza, Jl. Mayjen HR. Muhammad No. 31 A Sonokwijenan, Kec. Sukomanunggal
                                    Surabaya, Jawa Timur 60189</b>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <i class="fa" aria-hidden="true"></i>
                                    Underwriter
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                            <div class="card-body">
                                <b> PT Korea Investment and Sekuritas Indonesia</b>
                                <br> <br>
                                Alamat:
                                <br>
                                <b> Equity Tower, Lantai 9 & 22 SCBD Lot 9 Jalan Jenderal Sudirman Kav. 52-53 Senayan
                                    Kebayoran Baru, Jakarta Selatan 12190</b>
                                <br> <br>
                                Telepon:
                                <br>
                                <b> (021) 29911911</b>
                                <br> <br>
                                Email:
                                <br>
                                <a href="mailto:CS@Kisi.co.id">CS@Kisi.co.id</a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFive">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <i class="fa" aria-hidden="true"></i>
                                    BAE
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                            <div class="card-body">
                                BAE:
                                <br>
                                <b> PT Sinartama Gunita (BAE Perseroan)</b>
                                <br> <br>
                                Alamat:
                                <br>
                                <b>
                                    Sinarmas Land Plaza Tower 3
                                    Jl. M.H. Thamrin No.51, RT.9/RW.4 Gondangdia, Menteng
                                    Jakarta Pusat 10350</b>
                                <br> <br>
                                Telepon:
                                <br>
                                <b>(021) 3922332</b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <!-- <div>
                <div class="section-title-header text-left" style="padding-bottom:0;font-size:15px">
                    <h4 class="title-lembaga wow fadeInUp" data-wow-delay="0.2s">Akta Perusahaan</h4>
                    <a href="../assets/dokumen/Akta-PT-Fidac-Inovasi-Teknologi-Tbk..pdf"><i
                            class="fa-solid fa-file-lines fa-2xl"
                            style="color: #949494;font-size:120px;;margin-top:10px"></i>
                    </a>


                </div>

            </div> -->
    </section>
    <!-- About Section End -->


    <?= $this->include('footer') ?>

</body>

</html>