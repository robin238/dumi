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
            Hubungi Kami
        </div>

    </header>
    <!-- Header Area wrapper End -->

    <!-- Coundown Section Start -->
    <section class="section-padding">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12 col-sm-12">
                    <h4 style="color:#208de6;font-size: 30px">Head Office</h4>
                    <h5 style="font-weight: Bold">Salis Building</h5>
                    <p style="font-size:18px;line-height:1.7;color:rgb(48, 48, 48)">Jl. Dr. Setiabudi No. 272, Ledeng,
                        Kec. Cidadap, Kota Bandung, Jawa Barat 40143
                        <br><br> Senin-Jumat: <b style="font-weight: 900;">09.00 - 16.00</b>
                        <br>Sabtu-Minggu: Tutup
                    </p>

                </div>
                <div class="mapouter">
                    <div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no"
                            marginheight="0" marginwidth="0"
                            src="https://maps.google.com/maps?width=900&amp;height=300&amp;hl=en&amp;q=salis building&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a
                            href="https://capcuttemplate.org/">Capcut Template</a></div>
                    <style>
                    .mapouter {
                        position: relative;
                        text-align: right;
                        width: 100%;
                        height: 300px;
                    }

                    .gmap_canvas {
                        overflow: hidden;
                        background: none !important;
                        width: 100%;
                        height: 300px;
                    }

                    .gmap_iframe {
                        height: 300px !important;
                    }
                    </style>
                </div>
            </div>
            <br>
            <div class="row text-center">
                <div class="col-md-12 col-sm-12">
                    <h4 style="color:#208de6;font-size: 30px">Operational Office</h4>
                    <h5 style="font-weight: Bold">Gedung II Lt. 12 - BKN Pusat</h5>
                    <p style="font-size:18px;line-height:1.7;color:rgb(48, 48, 48);margin: bottom 20px;">Jl. Mayjen Sutoyo No. 12, Cililitan, Jakarta Timur, DKI Jakarta 13640
                    <br><br>Senin-Jumat: <b style="font-weight: 900;">09.00 - 16.00</b> 
                    <br>Sabtu-Minggu: Tutup
                    </p>
                </div> 

                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0"
                            marginwidth="0"
                            src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=kantor pusat badan kepegawaian negara&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                    </div>
                </div>
            </div>
            <hr>
            </br>

        </div>
    </section>
    <!-- Coundown Section End -->

    <!-- Sponsors Section Start -->
    <section id="sponsors" class="section-padding" style ="padding-top:0;margin-bottom:50px">
        <div class="container text-center">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="row mb-30 text-center wow fadeInDown" data-wow-delay="0.3s">

                
                <div class="col-md-3 col-sm-3 col-xs-12 ">
                    <i class="fa-solid fa-phone fa-2xl" style ="color:#0693e3;margin-bottom: 40px"></i>
                    <p style ="font-size:16px">(021) 8093008 ext. <br> 4218 <br> 0813-1582-3033 </p>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12"  >
                    <a class="btn" target="_blank" href="mailto: cs@minjem.com" style="padding:0">
                        <i class="fa-solid fa-envelope fa-2xl" style ="color:#0693e3;margin-bottom: 40px;padding:0"></i> 
                    </a>
                    <p><a href = "mailto: cs@minjem.com" style ="font-size:16px;color:black">cs@minjem.com</a></p>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12"  >
                    <a class="btn" target="_blank" href="https://instagram.com/dumi_id" style="padding:0">
                        <i class="fa-brands fa-instagram fa-2xl" style ="color:#0693e3;margin-bottom: 40px"></i>
                    </a>
                    <p><a href = "https://instagram.com/dumi_id" style ="font-size:16px;color:black">@dumi_id</a></p>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12"  >
                    <a target="_blank" href="https://www.facebook.com/Dumi.Indonesia" style="padding:0">
                        <i class="fa-brands fa-facebook fa-2xl" style ="color:#0693e3;margin-bottom: 40px"></i>
                    </a>
                    <p><a href="https://www.facebook.com/Dumi.Indonesia" style ="font-size:16px;color:black">Dumi Indonesia</a></p>
                    <!-- <div class="spnsors-logo">
                   
                    </div> -->
                </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- Sponsors Section End -->


    <?= $this->include('footer') ?>


</body>

</html>