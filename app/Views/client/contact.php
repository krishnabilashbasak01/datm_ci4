<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title><?= $page_title ?></title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Place favicon.ico in the root directory -->
    <link
        rel="shortcut icon"
        href="client_assets/images/logo/favicon.png"
        type="image/x-icon" />

    <!-- All css here -->
    <link rel="stylesheet" href="client_assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="client_assets/css/fontawesome-all.min.css" />
    <link rel="stylesheet" href="client_assets/css/jquery-ui.css" />
    <link rel="stylesheet" href="client_assets/css/nice-select.css" />
    <link rel="stylesheet" href="client_assets/css/aos.css" />
    <link rel="stylesheet" href="client_assets/css/leaflet.css" />
    <link rel="stylesheet" href="client_assets/css/animate.css" />
    <link rel="stylesheet" href="client_assets/css/slick.css" />
    <link rel="stylesheet" href="client_assets/css/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="client_assets/css/meanmenu.css" />
    <link rel="stylesheet" href="client_assets/css/all-animations.css" />
    <link rel="stylesheet" href="client_assets/css/default.css" />
    <link rel="stylesheet" href="client_assets/css/style.css" />
    <link rel="stylesheet" href="client_assets/css/responsive.css" />
</head>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!--  ====== preloader=============================================  -->
    <?php include_once('components/preloader.php'); ?>
    <!-- /preloader -->

    <!--  ====== header-area-start=======================================  -->
    <?php include_once('components/header.php'); ?>
    <!-- /side-mobile-menu -->
    <div class="body-overlay"></div>

    

    <!-- header extra info end  -->

    <main>
        

        <!-- ====== contact-area-start
            ==================================================== -->
        <div class="contact-area contact-page contact-page2 mb-0 mt-165">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-8 col-12">
                        <div
                            class="contact-page2-info contact-location contact-page2-info-bg1 text-center pt-60 pb-55 pl-xl-1 mb-30">
                            <div
                                class="contact-icon bg-white d-inline-block text-center mb-25 mr-0">
                                <span class="d-inline-block"><i class="fas fa-map-marker-alt"></i></span>
                            </div>
                            <!-- /contact-icon -->
                            <div class="contact-text">
                                <h4 class="text-white mb-15">Address</h4>
                                <p class="text-white mb-0">
                                    M.G Road <br />
                                    Kolkata, India
                                </p>
                            </div>
                        </div>
                        <!-- /contact-location -->
                    </div>
                    <!-- /col -->

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-8 col-12">
                        <div
                            class="contact-page2-info contact-phone contact-page2-info-bg2 text-center pt-60 pb-50 pl-xl-1 mb-30">
                            <div
                                class="contact-icon bg-white d-inline-block text-center mb-25 mr-0">
                                <span class="d-inline-block"><i class="fas fa-phone-alt"></i></span>
                            </div>
                            <!-- /contact-icon -->
                            <div class="contact-text">
                                <h4 class="text-white mb-3">Phone</h4>
                                <p class="mb-0">
                                    <a class="text-white d-block mb-1" href="tell:+911234567890">+911234567890</a>
                                    <a class="text-white d-block mb-1" href="tell:+911234567890">+911234567890</a>
                                </p>
                            </div>
                        </div>
                        <!-- /contact-location -->
                    </div>
                    <!-- /col -->

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-8 col-12">
                        <div
                            class="contact-page2-info contact-email contact-page2-info-bg3 text-center pt-60 pb-50 pl-xl-1 mb-30">
                            <div
                                class="contact-icon bg-white d-inline-block text-center mb-25 mr-0">
                                <span class="d-inline-block"><i class="fas fa-envelope"></i></span>
                            </div>
                            <!-- /contact-icon -->
                            <div class="contact-text">
                                <h4 class="text-white mb-3">Email</h4>
                                <p class="mb-0">
                                    <a class="text-white d-block" href="#">hello@larna.com</a>
                                </p>
                            </div>
                        </div>
                        <!-- /contact-email -->
                    </div>
                    <!-- /col -->
                </div>
                <!-- /row -->

                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="contact-wrapper contact-page2-form-margin pt-130">
                            <div class="contact-form">
                                <div class="con-title px-md-5 text-center">
                                    <h4 class="mb-30">Feel free to send us a message</h4>
                                    <p class="mb-2">
                                        We always want to hear from you. We will response with in
                                        24 hours.
                                    </p>
                                </div>
                                <!-- /title -->
                                <form action="php/mail.php" method="POST" id="contact-form">
                                    <div class="contact-info text-md-center text-lg-left pt-20">
                                        <div class="row">
                                            <div
                                                class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-30"
                                                data-aos="fade-up"
                                                data-aos-anchor-placement="top-bottom"
                                                data-aos-duration="2000">
                                                <input
                                                    class="name w-100 primary-border2 pl-20 pt-15 pb-15 pr-10"
                                                    type="text"
                                                    name="inputName"
                                                    id="inputName"
                                                    placeholder="Your Name *"
                                                    required /><!-- /name -->
                                            </div>
                                            <!-- /col -->
                                            <div
                                                class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-30"
                                                data-aos="fade-up"
                                                data-aos-anchor-placement="top-bottom"
                                                data-aos-duration="2500">
                                                <input
                                                    class="email w-100 primary-border2 pl-20 pt-15 pb-15 pr-10"
                                                    type="email"
                                                    name="inputEmail"
                                                    id="inputEmail"
                                                    placeholder="Your Email *"
                                                    required /><!-- /email -->
                                            </div>
                                            <!-- /col -->
                                        </div>
                                        <!-- /row -->
                                        <div class="row">
                                            <div
                                                class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-30"
                                                data-aos="fade-up"
                                                data-aos-anchor-placement="top-bottom"
                                                data-aos-duration="2000">
                                                <textarea
                                                    class="massage w-100 primary-border2 pl-20 pt-20"
                                                    name="inputMessage"
                                                    id="inputMessage"
                                                    placeholder="Your query *"
                                                    required></textarea><!-- /textarea -->
                                            </div>
                                            <!-- /col -->
                                        </div>
                                        <!-- /row -->
                                        <div class="my-btn w-100">
                                            <button
                                                class="btn theme-bg text-uppercase rounded-0 f-500 w-100"
                                                type="submit"
                                                name="submit"
                                                data-aos="fade-up"
                                                data-aos-anchor-placement="top-bottom"
                                                data-aos-duration="2500">
                                                Submit
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <p class="form-message mt-20"></p>
                            </div>
                            <!-- /contact-form -->
                        </div>
                        <!-- /contact-wrapper -->
                    </div>
                    <!-- /col -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->

            <div class="over-hidden contact-page-map mt-150">
                <div class="map-wrapper z-index-1 rounded-0" id="mapwrapper"></div>
            </div>
            <!-- /map -->
        </div>
        <!-- contact-area-end  -->
    </main>

    <!-- ====== footer-area-start ============================================ -->
    <?php include_once('components/footer.php'); ?>

    <!-- back top -->
    <div id="scroll" class="scroll-up">
        <div class="top text-center">
            <span class="white-bg theme-color d-block"><i class="fa fa-arrow-alt-up"></i></span>
        </div>
    </div>

    <!-- All js here -->
    <script src="client_assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="client_assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="client_assets/js/popper.min.js"></script>
    <script src="client_assets/js/bootstrap.min.js"></script>
    <script src="client_assets/js/jquery.inputarrow.js"></script>
    <script src="client_assets/js/jquery-ui.js"></script>
    <script src="client_assets/js/jquery.nice-select.min.js"></script>
    <script src="client_assets/js/isotope.pkgd.min.js"></script>
    <script src="client_assets/js/image-loaded.min.js"></script>
    <script src="client_assets/js/jquery.fancybox.min.js"></script>
    <script src="client_assets/js/waypoint.js"></script>
    <script src="client_assets/js/counterup-min.js"></script>
    <script src="client_assets/js/slick.min.js"></script>
    <script src="client_assets/js/tilt.jquery.min.js"></script>
    <script src="client_assets/js/countdown.min.js"></script>
    <script src="client_assets/js/aos.js"></script>
    <script src="client_assets/js/leaflet.js"></script>
    <script src="client_assets/js/plugins.js"></script>
    <script src="client_assets/js/jquery.meanmenu.min.js"></script>
    <script src="client_assets/js/main.js"></script>
</body>

</html>