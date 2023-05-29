
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
                            
                        </div>
                        <div class="tab-pane fade" id="tahunan" role="tabpanel" aria-labelledby="tahunan-tab">
                            <div id="accordion2">
                                <p></p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="keuangan" role="tabpanel" aria-labelledby="keuangan-tab">
                            <div id="accordion3">
                                <p><a href="../assets/dokumen/Audited-Financial-Statement-PT.-Fidac-Inovasi-Teknologi-2020.pdf">Laporan Keuangan Tahun 2020 (Audited)</a></p>
                                <p><a href="../assets/dokumen/Audited-Financial-Statement-PT.-Fidac-Inovasi-Teknologi-2021.pdf">Laporan Keuangan Tahun 2021 (Audited)</a></p>
                                <p><a href="../assets/dokumen/Audited-Financial-Statement-PT.-Fidac-Inovasi-Teknologi-2022.pdf">Laporan Keuangan Tahun 2022 (Audited)</a></p>
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
                    <div class="section-title-header text-center">
                        <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Lembaga dan Profesi Penunjang Pasar Modal</h1>
                    </div>
                </div>
            </div>
            <div style="text-align:center;margin-bottom:20px" >
                
            </div>
            <br>
           
        </div>
    </section>
    <!-- About Section End -->

    <!-- Ask Question Section Start -->
    <section id="faq" class="section-padding">
    <div class="container">
        <div id="accordion">
            <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">               <i class="fa" aria-hidden="true"></i>
                    Collapsible Group Item #1
                </button>
                </h5>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
            </div>
            </div>
            <div class="card">
            <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <i class="fa" aria-hidden="true"></i>
                    Collapsible Group Item #2
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
                    Collapsible Group Item #3
                </button>
                </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
            </div>
            </div>
        </div>
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
    <!-- Counter Area Start-->
    <section class="counter-section-partner section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-header text-center">
                        <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Partner Kami</h1>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
               
                    <div class="col-2">
                        <img src="../assets/img/dumi/partner/web-bkn-1.png" width="180px">
                    </div>
                    <div class="col-2">
                        <img src="../assets/img/dumi/partner/web-taspen-1.png" width="180px">
                    </div>
                    <div class="col-2">
                        <img src="../assets/img/dumi/partner/web-bni-1.png" width="180px">
                    </div>
                    <div class="col-2">
                        <img src="../assets/img/dumi/partner/bjb.png" width="180px">
                    </div>
                    <div class="col-2">
                        <img src="../assets/img/dumi/partner/askridaa.png" width="180px">
                    </div>
                    <div class="col-2">
                        <img src="../assets/img/dumi/partner/reliance.png" width="180px">
                    </div>
                        <!-- Counter Item -->
                        <!-- <div class="col-md-6 col-lg-3 col-xs-12 work-counter-widget text-center">
                            <div class="counter wow fadeInRight" data-wow-delay="1.2s">
                                <div class="icon"><i class="lni-coffee-cup"></i></div>
                                <p>Free Lunch & Snacks</p>
                                <span>Don’t miss it</span>
                            </div>
                        </div> -->
            </div>
            <div class="row d-flex justify-content-center mb-4">
               
               <div class="col-lg-2 col-md-6 mr-3">
                    <img src="../assets/img/dumi/partner/datacomm.png" width="200px">
               </div>
               <div class="col-lg-2 col-md-6 mr-3">
                   <img src="../assets/img/dumi/partner/digidata.png" width="200px">
               </div>
               <div class="col-lg-2 col-md-6 mr-3">
                   <img src="../assets/img/dumi/partner/digisign.png" width="200px">
               </div>
               <div class="col-lg-2 col-md-6 mr-3">
                   <img src="../assets/img/dumi/partner/instamoney.png" width="200px">
               </div>
               <div class="col-lg-2 col-md-6">
                   <img src="../assets/img/dumi/partner/izidata.png" width="200px">
               </div>
             
            </div>
            <div class="row d-flex justify-content-center ">
               
               <div class="col-lg-2 col-md-6">
                   <img src="../assets/img/dumi/partner/tekenaja.png" width="200px">
               </div>
               <div class="col-lg-2 col-md-6">
                   <img src="../assets/img/dumi/partner/pefindo.png" width="200px">
               </div>
               <div class="col-lg-2 col-md-6">
                   <img src="../assets/img/dumi/partner/ciu.png" width="200px">
               </div>
               <div class="col-lg-2 col-md-6">
                   <img src="../assets/img/dumi/partner/privyid.png" width="200px">
                </div>
             
            </div>
        </div>
    </section>
    <!-- Counter Area End-->

    
    <!-- Team Section Start -->
    <section id="team" class="section-padding text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-header text-center">
                        <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Who's Speaking?</h1>
                        <p class="wow fadeInDown" data-wow-delay="0.2s">Global Grand Event on Digital Design</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <!-- Team Item Starts -->
                    <div class="team-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-img">
                            <img class="img-fluid" src="assets/img/team/team-01.jpg" alt="">
                            <div class="team-overlay">
                                <div class="overlay-social-icon text-center">
                                    <ul class="social-icons">
                                        <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="lni-linkedin-filled" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="lni-behance" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="info-text">
                            <h3><a href="#">JONATHON DOE</a></h3>
                            <p>Product Designer, Tesla</p>
                        </div>
                    </div>
                    <!-- Team Item Ends -->
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <!-- Team Item Starts -->
                    <div class="team-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="team-img">
                            <img class="img-fluid" src="assets/img/team/team-02.jpg" alt="">
                            <div class="team-overlay">
                                <div class="overlay-social-icon text-center">
                                    <ul class="social-icons">
                                        <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="lni-linkedin-filled" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="lni-behance" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="info-text">
                            <h3><a href="#">Patric Green</a></h3>
                            <p>Front-end Developer, Dropbox</p>
                        </div>
                    </div>
                    <!-- Team Item Ends -->
                </div>

                <div class="col-sm-6 col-md-6 col-lg-4">
                    <!-- Team Item Starts -->
                    <div class="team-item wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-img">
                            <img class="img-fluid" src="assets/img/team/team-03.jpg" alt="">
                            <div class="team-overlay">
                                <div class="overlay-social-icon text-center">
                                    <ul class="social-icons">
                                        <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="lni-linkedin-filled" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="lni-behance" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="info-text">
                            <h3><a href="#">Paul Kowalsy</a></h3>
                            <p>Lead Designer, TNW</p>
                        </div>
                    </div>
                    <!-- Team Item Ends -->
                </div>

                <div class="col-sm-6 col-md-6 col-lg-4">
                    <!-- Team Item Starts -->
                    <div class="team-item wow fadeInUp" data-wow-delay="0.8s">
                        <div class="team-img">
                            <img class="img-fluid" src="assets/img/team/team-04.jpg" alt="">
                            <div class="team-overlay">
                                <div class="overlay-social-icon text-center">
                                    <ul class="social-icons">
                                        <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="lni-linkedin-filled" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="lni-behance" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="info-text">
                            <h3><a href="#">Jhon Doe</a></h3>
                            <p>Back-end Developer, ASUS</p>
                        </div>
                    </div>
                    <!-- Team Item Ends -->
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <!-- Team Item Starts -->
                    <div class="team-item wow fadeInUp" data-wow-delay="1s">
                        <div class="team-img">
                            <img class="img-fluid" src="assets/img/team/team-05.jpg" alt="">
                            <div class="team-overlay">
                                <div class="overlay-social-icon text-center">
                                    <ul class="social-icons">
                                        <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="lni-linkedin-filled" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="lni-behance" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="info-text">
                            <h3><a href="#">Daryl Dixon</a></h3>
                            <p>Full-stack Developer, Google</p>
                        </div>
                    </div>
                    <!-- Team Item Ends -->
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <!-- Team Item Starts -->
                    <div class="team-item wow fadeInUp" data-wow-delay="1.2s">
                        <div class="team-img">
                            <img class="img-fluid" src="assets/img/team/team-06.jpg" alt="">
                            <div class="team-overlay">
                                <div class="overlay-social-icon text-center">
                                    <ul class="social-icons">
                                        <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="lni-linkedin-filled" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="lni-behance" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="info-text">
                            <h3><a href="#">Chris Adams</a></h3>
                            <p>UI Designer, Apple</p>
                        </div>
                    </div>
                    <!-- Team Item Ends -->
                </div>
            </div>
            <a href="speakers.html" class="btn btn-common mt-30 wow fadeInUp" data-wow-delay="1.9s">All Speakers</a>
        </div>
    </section>
    <!-- Team Section End -->

    <!-- Gallary Section Start -->
    <section id="gallery" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-header text-center">
                        <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">our event gallery</h1>
                        <p class="wow fadeInDown" data-wow-delay="0.2s">Global Grand Event on Digital Design</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-lg-4">
                    <div class="gallery-box">
                        <div class="img-thumb">
                            <img class="img-fluid" src="assets/img/gallery/img-1.jpg" alt="">
                        </div>
                        <div class="overlay-box text-center">
                            <a class="lightbox" href="assets/img/gallery/img-1.jpg">
                                <i class="lni-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="ccol-md-6 col-sm-6 col-lg-4">
                    <div class="gallery-box">
                        <div class="img-thumb">
                            <img class="img-fluid" src="assets/img/gallery/img-2.jpg" alt="">
                        </div>
                        <div class="overlay-box text-center">
                            <a class="lightbox" href="assets/img/gallery/img-2.jpg">
                                <i class="lni-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="ccol-md-6 col-sm-6 col-lg-4">
                    <div class="gallery-box">
                        <div class="img-thumb">
                            <img class="img-fluid" src="assets/img/gallery/img-3.jpg" alt="">
                        </div>
                        <div class="overlay-box text-center">
                            <a class="lightbox" href="assets/img/gallery/img-3.jpg">
                                <i class="lni-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="ccol-md-6 col-sm-6 col-lg-4">
                    <div class="gallery-box">
                        <div class="img-thumb">
                            <img class="img-fluid" src="assets/img/gallery/img-4.jpg" alt="">
                        </div>
                        <div class="overlay-box text-center">
                            <a class="lightbox" href="assets/img/gallery/img-4.jpg">
                                <i class="lni-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="ccol-md-6 col-sm-6 col-lg-4">
                    <div class="gallery-box">
                        <div class="img-thumb">
                            <img class="img-fluid" src="assets/img/gallery/img-5.jpg" alt="">
                        </div>
                        <div class="overlay-box text-center">
                            <a class="lightbox" href="assets/img/gallery/img-5.jpg">
                                <i class="lni-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="ccol-md-6 col-sm-6 col-lg-4">
                    <div class="gallery-box">
                        <div class="img-thumb">
                            <img class="img-fluid" src="assets/img/gallery/img-6.jpg" alt="">
                        </div>
                        <div class="overlay-box text-center">
                            <a class="lightbox" href="assets/img/gallery/img-6.jpg">
                                <i class="lni-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-xs-12">
                    <a href="#" class="btn btn-common">Browse All</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallary Section End -->

    

    <!-- Sponsors Section Start -->
    <section id="sponsors" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-header text-center">
                        <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Sponsores</h1>
                        <p class="wow fadeInDown" data-wow-delay="0.2s">Global Grand Event on Digital Design</p>
                    </div>
                </div>
            </div>
            <div class="row mb-30 text-center wow fadeInDown" data-wow-delay="0.3s">
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="spnsors-logo">
                        <a href="#"><img class="img-fluid" src="assets/img/sponsors/logo-01.png" alt=""></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="spnsors-logo">
                        <a href="#"><img class="img-fluid" src="assets/img/sponsors/logo-02.png" alt=""></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="spnsors-logo">
                        <a href="#"><img class="img-fluid" src="assets/img/sponsors/logo-03.png" alt=""></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="spnsors-logo">
                        <a href="#"><img class="img-fluid" src="assets/img/sponsors/logo-04.png" alt=""></a>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-common">become a sponsor</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Sponsors Section End -->

    <!-- Ticket Pricing Area Start -->
    <section id="pricing" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-header text-center">
                        <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Our Pricing</h1>
                        <p class="wow fadeInDown" data-wow-delay="0.2s">Global Grand Event on Digital Design</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-xa-12 mb-3">
                    <div class="price-block-wrapper wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="icon">
                            <i class="lni-write"></i>
                        </div>
                        <div class="colmun-title">
                            <h5>Basic Pass</h5>
                        </div>
                        <div class="price">
                            <h2>$29</h2>
                            <p>452 Tickets Available</p>
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li><i class="lni-check-mark-circle"></i><span class="text">Entrance</span></li>
                                <li><i class="lni-check-mark-circle"></i><span class="text">Coffee Break</span></li>
                                <li><i class="lni-check-mark-circle"></i><span class="text">Lunch on all days</span>
                                </li>
                                <li><i class="lni-close"></i><span class="text">Access to all areas</span></li>
                                <li><i class="lni-close"></i><span class="text">Certificate</span></li>
                                <li><i class="lni-check-mark-circle"></i><span class="text">Workshop</span></li>
                            </ul>
                        </div>
                        <a href="#" class="btn btn-common">Buy Ticket</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xa-12 mb-3">
                    <div class="price-block-wrapper wow fadeInUp" data-wow-delay="0.3s">
                        <div class="icon">
                            <i class="lni-layers"></i>
                        </div>
                        <div class="colmun-title">
                            <h5>Standard Pass</h5>
                        </div>
                        <div class="price">
                            <h2>$40</h2>
                            <p>452 Tickets Available</p>
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li><i class="lni-check-mark-circle"></i><span class="text">Entrance</span></li>
                                <li><i class="lni-check-mark-circle"></i><span class="text">Coffee Break</span></li>
                                <li><i class="lni-check-mark-circle"></i><span class="text">Lunch on all days</span>
                                </li>
                                <li><i class="lni-close"></i><span class="text">Access to all areas</span></li>
                                <li><i class="lni-check-mark-circle"></i><span class="text">Certificate</span></li>
                                <li><i class="lni-close"></i><span class="text">Workshop</span></li>
                            </ul>
                        </div>
                        <a href="#" class="btn btn-common">Buy Ticket</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-xa-12 mb-3">
                    <div class="price-block-wrapper wow fadeInRight" data-wow-delay="0.4s">
                        <div class="icon">
                            <i class="lni-leaf"></i>
                        </div>
                        <div class="colmun-title">
                            <h5>Premium Pass</h5>
                        </div>
                        <div class="price">
                            <h2>$68</h2>
                            <p>452 Tickets Available</p>
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li><i class="lni-check-mark-circle"></i><span class="text">Entrance</span></li>
                                <li><i class="lni-check-mark-circle"></i><span class="text">Coffee Break</span></li>
                                <li><i class="lni-close"></i><span class="text">Lunch on all days</span></li>
                                <li><i class="lni-check-mark-circle"></i><span class="text">Access to all areas</span>
                                </li>
                                <li><i class="lni-check-mark-circle"></i><span class="text">Certificate</span></li>
                                <li><i class="lni-close"></i><span class="text">Workshop</span></li>
                            </ul>
                        </div>
                        <a href="#" class="btn btn-common">Buy Ticket</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Ticket Pricing Area End -->

    <!-- Event Slides Section Start -->
    <section id="event-slides" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-header text-center">
                        <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Event Guideline</h1>
                        <p class="wow fadeInDown" data-wow-delay="0.2s">Global Grand Event on Digital Design</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xs-12 wow fadeInRight" data-wow-delay="0.3s">
                    <div class="video">
                        <img class="img-fluid" src="assets/img/about/about.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xs-12 wow fadeInLeft" data-wow-delay="0.3s">
                    <p class="intro-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                        only five centuries.
                    </p>
                    <h2 class="intro-title">Check List</h2>
                    <ul class="list-specification">
                        <li><i class="lni-check-mark-circle"></i> Lorem Ipsum is simply dummy</li>
                        <li><i class="lni-check-mark-circle"></i> Ipsum passages, and more recently</li>
                        <li><i class="lni-check-mark-circle"></i> PageMaker including versions</li>
                        <li><i class="lni-check-mark-circle"></i> Lorem Ipsum is simply dummy</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Event Slides Section End -->

    <!-- Blog Section Start -->
    <section id="blog" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-header text-center">
                        <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Our Latest News & Articles</h1>
                        <p class="wow fadeInDown" data-wow-delay="0.2s">Global Grand Event on Digital Design</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="blog-item">
                        <div class="blog-image">
                            <a href="#">
                                <img class="img-fluid" src="assets/img/blog/img-1.jpg" alt="">
                            </a>
                        </div>
                        <div class="descr">
                            <div class="tag">Design</div>
                            <h3 class="title">
                                <a href="single-blog.html">
                                    The 9 Design Trends You Need to Know
                                </a>
                            </h3>
                            <div class="meta-tags">
                                <span class="date">Jan 20, 2018</span>
                                <span class="comments">| <a href="#"> by Cindy Jefferson</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="blog-item">
                        <div class="blog-image">
                            <a href="#">
                                <img class="img-fluid" src="assets/img/blog/img-2.jpg" alt="">
                            </a>
                        </div>
                        <div class="descr">
                            <div class="tag">Design</div>
                            <h3 class="title">
                                <a href="single-blog.html">
                                    The 9 Design Trends You Need to Know
                                </a>
                            </h3>
                            <div class="meta-tags">
                                <span class="date">Jan 20, 2018 </span>
                                <span class="comments">| <a href="#"> by Cindy Jefferson</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="blog-item">
                        <div class="blog-image">
                            <a href="#">
                                <img class="img-fluid" src="assets/img/blog/img-3.jpg" alt="">
                            </a>
                        </div>
                        <div class="descr">
                            <div class="tag">Design</div>
                            <h3 class="title">
                                <a href="single-blog.html">
                                    The 9 Design Trends You Need to Know
                                </a>
                            </h3>
                            <div class="meta-tags">
                                <span class="date">Jan 20, 2018</span>
                                <span class="comments">| <a href="#"> by Cindy Jefferson</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-common">Read More News</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Subscribe Area Start -->
    <div id="subscribe" class="section-padding">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-10 col-lg-7">
                    <div class="subscribe-inner wow fadeInDown" data-wow-delay="0.3s">
                        <h2 class="subscribe-title">Sign Up For Our Newsletter</h2>
                        <form class="text-center form-inline">
                            <input class="mb-20 form-control" name="email" placeholder="Enter Your Email Here">
                            <button type="submit" class="btn btn-common sub-btn" data-style="zoom-in"
                                data-spinner-size="30" name="submit" id="submit">
                                <span class="ladda-label"><i class="lni-check-box"></i> Submit</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Subscribe Area End -->

    <!-- Map Section Start -->
    <section id="google-map-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div id="conatiner-map"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Map Section End -->

    <!-- Contact Us Section -->
    <section id="contact-map" class="section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title-header text-center">
                        <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Drop A Message</h1>
                        <p class="wow fadeInDown" data-wow-delay="0.2s">Global Grand Event on Digital Design</p>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-xs-12">
                    <div class="container-form wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="form-wrapper">
                            <form role="form" method="post" id="contactForm" name="contact-form"
                                data-toggle="validator">
                                <div class="row">
                                    <div class="col-md-6 form-line">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="name" name="email"
                                                placeholder="First Name" required data-error="Please enter your name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-line">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="Email" required data-error="Please enter your Email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 form-line">
                                        <div class="form-group">
                                            <input type="tel" class="form-control" id="msg_subject" name="subject"
                                                placeholder="Subject" required
                                                data-error="Please enter your message subject">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control" rows="4" id="message" name="message" required
                                                data-error="Write your message"></textarea>
                                        </div>
                                        <div class="form-submit">
                                            <button type="submit" class="btn btn-common" id="form-submit"><i
                                                    class="fa fa-paper-plane" aria-hidden="true"></i> Send Us
                                                Now</button>
                                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Us Section End -->

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