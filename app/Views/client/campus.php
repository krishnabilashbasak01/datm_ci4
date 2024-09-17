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

    <style>
        .grid_list {
            column-count: 4;
            margin: 0;
        }

        .grid-item {
            position: relative;
            display: inline-block;
        }

        .grid-item img {
            width: 100%;
            height: auto;

            display: block;
        }

        /* Overlay that appears on hover */
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
            cursor: pointer;
        }

        .grid-item:hover .overlay {
            opacity: 1;
        }

        .grid-item .overlay .fa-eye {
            font-size: 2em;
        }

        @media only screen and (max-width: 768px) {
            .grid_list {
                column-count: 3;
            }
        }

        @media only screen and (max-width: 450px) {
            .grid_list {
                column-count: 2;
            }
        }
    </style>

</head>

<body>

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
                <div class="grid_list">

                    <?php

                    $list = glob("assets/uploads/gallery/*.*");
                    natsort($list);
                    foreach ($list as $image) {
                        echo '<div class="grid-item">
                                <a data-fancybox="gallery" href="' . $image . '"><img src="' . $image . '"></a>
                                <div data-fancybox="gallery" href="' . $image . '" class="overlay"><i class="fa fa-eye"></i></div>
                             </div>';
                    }

                    ?>
                </div>
            </div>
            <!-- /container -->

         
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