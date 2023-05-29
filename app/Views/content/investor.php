
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
                                <a class="nav-link active" id="prospektus-tab" data-toggle="tab" href="#prospektus" role="tab"
                                    aria-controls="prospektus" aria-expanded="true">
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
                                <a class="nav-link" id="keterbukaan-tab" data-toggle="tab" href="#keterbukaan" role="tab"
                                    aria-controls="keterbukaan">
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
                        <div class="tab-pane fade show active" id="prospektus" role="tabpanel" aria-labelledby="prospektus-tab">
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
                                <p><a href="../assets/dokumen/Audited-Financial-Statement-PT.-Fidac-Inovasi-Teknologi-2020.pdf">Laporan Keuangan Tahun 2020 (Audited)</a></p>
                                <p><a href="../assets/dokumen/Audited-Financial-Statement-PT.-Fidac-Inovasi-Teknologi-2021.pdf">Laporan Keuangan Tahun 2021 (Audited)</a></p>
                                <p><a href="../assets/dokumen/Audited-Financial-Statement-PT.-Fidac-Inovasi-Teknologi-2022.pdf">Laporan Keuangan Tahun 2022 (Audited)</a></p>
                            </div>
                        </div>
                        </div>  
                        
                        <div class="tab-pane fade" id="keterbukaan" role="tabpanel" aria-labelledby="keterbukaan-tab">
                            <div id="accordion">
                               <p></p>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </section>
    <!-- Schedule Section End -->
 
    <!-- About Section Start -->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-header text-center" style="padding-bottom:0;font-size:15px">
                        <h4 class="title-lembaga wow fadeInUp" data-wow-delay="0.2s">Lembaga dan Profesi Penunjang Pasar Modal</h4>
                    </div>
                </div>
            </div>
            <div style="margin-bottom:20px" >
            <div class="accordion">
            <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i class="fa" aria-hidden="true" ></i>
                    Notaris
                </button>
                
                </h5>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
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
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="fa" aria-hidden="true"></i>
                        Konsultan Hukum
                    </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <i class="fa" aria-hidden="true"></i>
                        Kantor Akuntan Publik
                    </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFour">
                    <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        <i class="fa" aria-hidden="true"></i>
                        Underwriter
                    </button>
                    </h5>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                    <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFive">
                    <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        <i class="fa" aria-hidden="true"></i>
                        BAE
                    </button>
                    </h5>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                    <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
        </div>
        </div>
        <br>
           
        </div>
    </section>
    <!-- About Section End -->

    <!-- Ask Question Section Start -->
    <section id="faq" class="section-padding">
        <div class="container">
        
        </div>
    </section>
    <section id="faq" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-header text-center">
                        <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Ask Question?</h1>
                        <p class="wow fadeInDown" data-wow-delay="0.2s">Global Grand Event on Digital Design</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                    <div class="accordion">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <div class="header-title" data-toggle="collapse" data-target="#questionOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    <i class="fas fa-chevron-down"></i>How to make a new event?
                                </div>
                            </div>
                            <div id="questionOne" class="collapse" aria-labelledby="headingOne" data-parent="#question">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <div class="header-title" data-toggle="collapse" data-target="#questionTwo"
                                    aria-expanded="false" aria-controls="questionTwo">
                                    <i class="lni-pencil"></i> Which payment methods do you accept?
                                </div>
                            </div>
                            <div id="questionTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#question">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <div class="header-title" data-toggle="collapse" data-target="#questionThree"
                                    aria-expanded="false" aria-controls="questionThree">
                                    <i class="lni-pencil"></i> Which document can i bring to meeting?
                                </div>
                            </div>
                            <div id="questionThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#question">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <div class="header-title" data-toggle="collapse" data-target="#questionFour"
                                    aria-expanded="false" aria-controls="questionFour">
                                    <i class="lni-pencil"></i> Who can join at the live event venue?
                                </div>
                            </div>
                            <div id="questionFour" class="collapse" aria-labelledby="headingThree"
                                data-parent="#question">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                    <div class="accordion">
                        <div class="card">
                            <div class="card-header" id="headingOne2">
                                <div class="header-title" data-toggle="collapse" data-target="#questionOne2"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    <i class="lni-pencil"></i> How to make a new event?
                                </div>
                            </div>
                            <div id="questionOne2" class="collapse" aria-labelledby="headingOne"
                                data-parent="#question">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo2">
                                <div class="header-title" data-toggle="collapse" data-target="#questionTwo2"
                                    aria-expanded="false" aria-controls="questionTwo">
                                    <i class="lni-pencil"></i> Which payment methods do you accept?
                                </div>
                            </div>
                            <div id="questionTwo2" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#question">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <div class="header-title" data-toggle="collapse" data-target="#questionFive"
                                    aria-expanded="false" aria-controls="questionFive">
                                    <i class="lni-pencil"></i>How to set price?
                                </div>
                            </div>
                            <div id="questionFive" class="collapse" aria-labelledby="headingThree"
                                data-parent="#question">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <div class="header-title" data-toggle="collapse" data-target="#questionSix"
                                    aria-expanded="false" aria-controls="questionSix">
                                    <i class="lni-pencil"></i> What our price list?
                                </div>
                            </div>
                            <div id="questionSix" class="collapse" aria-labelledby="headingThree"
                                data-parent="#question">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Ask Question Section End -->

    <!-- Footer Section Start -->
    <footer class="footer-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.2s">
                    <h3><img src="assets/img/logo.png" alt=""></h3>
                    <p>
                        Aorem ipsum dolor sit amet elit sed lum tempor incididunt ut labore el dolore alg minim veniam
                        quis nostrud ncididunt.
                    </p>
                </div>
                <div class="col-md-6 col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.4s">
                    <h3>QUICK LINKS</h3>
                    <ul>
                        <li><a href="#">About Conference</a></li>
                        <li><a href="#">Our Speakers</a></li>
                        <li><a href="#">Event Shedule</a></li>
                        <li><a href="#">Latest News</a></li>
                        <li><a href="#">Event Photo Gallery</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.6s">
                    <h3>RECENT POSTS</h3>
                    <ul class="image-list">
                        <li>
                            <figure class="overlay">
                                <img class="img-fluid" src="assets/img/art/a1.jpg" alt="">
                            </figure>
                            <div class="post-content">
                                <h6 class="post-title"> <a href="blog-single.html">Lorem ipsm dolor sumit.</a> </h6>
                                <div class="meta"><span class="date">October 12, 2018</span></div>
                            </div>
                        </li>
                        <li>
                            <figure class="overlay">
                                <img class="img-fluid" src="assets/img/art/a2.jpg" alt="">
                            </figure>
                            <div class="post-content">
                                <h6 class="post-title"><a href="blog-single.html">Lorem ipsm dolor sumit.</a></h6>
                                <div class="meta"><span class="date">October 12, 2018</span></div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.8s">
                    <h3>SUBSCRIBE US</h3>
                    <div class="widget">
                        <div class="newsletter-wrapper">
                            <form method="post" id="subscribe-form" name="subscribe-form" class="validate">
                                <div class="form-group is-empty">
                                    <input type="email" value="" name="Email" class="form-control" id="EMAIL"
                                        placeholder="Your email" required="">
                                    <button type="submit" name="subscribe" id="subscribes"
                                        class="btn btn-common sub-btn"><i class="lni-pointer"></i></button>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.widget -->
                    <div class="widget">
                        <h5 class="widget-title">FOLLOW US ON</h5>
                        <ul class="footer-social">
                            <li><a class="facebook" href="#"><i class="lni-facebook-filled"></i></a></li>
                            <li><a class="twitter" href="#"><i class="lni-twitter-filled"></i></a></li>
                            <li><a class="linkedin" href="#"><i class="lni-linkedin-filled"></i></a></li>
                            <li><a class="google-plus" href="#"><i class="lni-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <div id="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="site-info">
                        <p>© Designed and Developed by <a href="http://uideck.com" rel="nofollow">UIdeck</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
        <i class="lni-chevron-up"></i>
    </a>

    <div id="preloader">
        <div class="sk-circle">
            <div class="sk-circle1 sk-child"></div>
            <div class="sk-circle2 sk-child"></div>
            <div class="sk-circle3 sk-child"></div>
            <div class="sk-circle4 sk-child"></div>
            <div class="sk-circle5 sk-child"></div>
            <div class="sk-circle6 sk-child"></div>
            <div class="sk-circle7 sk-child"></div>
            <div class="sk-circle8 sk-child"></div>
            <div class="sk-circle9 sk-child"></div>
            <div class="sk-circle10 sk-child"></div>
            <div class="sk-circle11 sk-child"></div>
            <div class="sk-circle12 sk-child"></div>
        </div>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/jquery.nav.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/nivo-lightbox.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.min.js"></script>
    <script src="assets/js/map.js"></script>
    <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyCsa2Mi2HqyEcEnM1urFSIGEpvualYjwwM">
    </script>

</body>

</html>