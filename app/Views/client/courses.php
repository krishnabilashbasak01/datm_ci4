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
    <link rel="stylesheet" href="client_assets/css/nice-select.css" />
    <link rel="stylesheet" href="client_assets/css/aos.css" />
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
        

        <!-- ====== course-header-area-start=============================================== -->
        <div class="course-header-area mt-160">
            <div class="container">
                <div class="row align-items-center">
                    <div
                        class="col-xl-6 col-lg-6 col-md-6 col-sm-8 col-12 d-flex align-items-center">
                        <div class="view-mode d-flex align-items-center">
                            <ul class="course-tab nav" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a
                                        class="nav-link active secondary-color p-tab-btn"
                                        id="s-p-list1-tab"
                                        data-toggle="tab"
                                        href="#s-p-list1"
                                        role="tab"
                                        aria-controls="s-p-list1"
                                        aria-selected="true"
                                        title="Grid">
                                        <i class="fas fa-th"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a
                                        class="nav-link secondary-color p-tab-btn"
                                        id="s-p-list2-tab"
                                        data-toggle="tab"
                                        href="#s-p-list2"
                                        role="tab"
                                        aria-controls="s-p-list2"
                                        aria-selected="false"
                                        title="List">
                                        <i class="fas fa-list"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- /course-tab nav -->
                        </div>
                        <!-- /view-mode -->

                        <div class="course-title">
                            <p class="mb-0">Showing 1 - 12 of 300 Course</p>
                        </div>
                    </div>
                    <!-- /col -->
                    <div
                        class="col-xl-6 col-lg-6 col-md-6 col-sm-4 col-12 d-flex align-items-center justify-content-sm-end">
                        
                    </div>
                    <!-- /col -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- course-header-area-end -->

        <!-- ====== course-tabs-area-start================================ -->
        <div class="course-tabs-area course-page-area pt-20 mb-170 over-hidden">
            <div class="container">
                <div class="course-page-content">
                    <div
                        class="single-course-tab-content tab-content"
                        id="myTabContent">
                        <div
                            class="tab-pane show active"
                            id="s-p-list1"
                            role="tabpanel"
                            aria-labelledby="s-p-list1">
                            <div class="row courses-tab-grid">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="single-popular-course zoom-img-hover">
                                        <div class="position-relative">
                                            <div class="p-course-img over-hidden position-relative">
                                                <img
                                                    class="w-100 img"
                                                    src="assets/uploads/courses/1.jpg"
                                                    alt="course-image01" />

                                                <div class="pc-category z-index1 position-absolute">
                                                    <span
                                                        class="text-white f-500 theme-bg d-inline-block py-1 px-3">M.SC</span>
                                                </div>
                                                <!-- /pc-category  -->
                                            </div>
                                            <!-- /p-course img -->

                                           
                                        </div>

                                        <div
                                            class="popular-course-content-wrapper bg-white pt-25 pl-30 pr-30">
                                            <div
                                                class="popular-course-review d-flex align-items-center mb-1">
                                                <ul class="review-ratting mr-10">
                                                    <li>
                                                        <span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                    </li>
                                                </ul>
                                                <!-- /review-ratting -->
                                                <div class="p-c-review">
                                                    <p class="mb-0">243 Review</p>
                                                </div>
                                                <!-- /p-c-review -->
                                            </div>
                                            <!-- /popular-course-review -->

                                            <div
                                                class="single-popular-course-content primary-border-bottom pb-6">
                                                <h3>
                                                    <a href="course-details.html">M.SC IN Computer Science</a>
                                                </h3>
                                                
                                            </div>
                                            <!-- /course-content -->

                                        </div>
                                        <!-- /popular-course-content-wrapper -->
                                    </div>
                                    <!-- /single-course -->
                                </div>
                                <!-- /col -->
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="single-popular-course zoom-img-hover">
                                        <div class="position-relative">
                                            <div class="p-course-img over-hidden position-relative">
                                                <img
                                                    class="w-100 img"
                                                    src="assets/uploads/courses/2.jpg"
                                                    alt="course-image01" />

                                                <div class="pc-category z-index1 position-absolute">
                                                    <span
                                                        class="text-white f-500 theme-bg d-inline-block py-1 px-3">M.SC</span>
                                                </div>
                                                <!-- /pc-category  -->
                                            </div>
                                            <!-- /p-course img -->

                                           
                                        </div>

                                        <div
                                            class="popular-course-content-wrapper bg-white pt-25 pl-30 pr-30">
                                            <div
                                                class="popular-course-review d-flex align-items-center mb-1">
                                                <ul class="review-ratting mr-10">
                                                    <li>
                                                        <span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                    </li>
                                                </ul>
                                                <!-- /review-ratting -->
                                                <div class="p-c-review">
                                                    <p class="mb-0">243 Review</p>
                                                </div>
                                                <!-- /p-c-review -->
                                            </div>
                                            <!-- /popular-course-review -->

                                            <div
                                                class="single-popular-course-content primary-border-bottom pb-6">
                                                <h3>
                                                    <a href="course-details.html">Dietetics & Nutrition</a>
                                                </h3>
                                                
                                            </div>
                                            <!-- /course-content -->

                                        </div>
                                        <!-- /popular-course-content-wrapper -->
                                    </div>
                                    <!-- /single-course -->
                                </div>
                                <!-- /col -->
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="single-popular-course zoom-img-hover">
                                        <div class="position-relative">
                                            <div class="p-course-img over-hidden position-relative">
                                                <img
                                                    class="w-100 img"
                                                    src="assets/uploads/courses/3.jpg"
                                                    alt="course-image01" />

                                                <div class="pc-category z-index1 position-absolute">
                                                    <span
                                                        class="text-white f-500 theme-bg d-inline-block py-1 px-3">MASTER</span>
                                                </div>
                                                <!-- /pc-category  -->
                                            </div>
                                            <!-- /p-course img -->

                                           
                                        </div>

                                        <div
                                            class="popular-course-content-wrapper bg-white pt-25 pl-30 pr-30">
                                            <div
                                                class="popular-course-review d-flex align-items-center mb-1">
                                                <ul class="review-ratting mr-10">
                                                    <li>
                                                        <span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                    </li>
                                                </ul>
                                                <!-- /review-ratting -->
                                                <div class="p-c-review">
                                                    <p class="mb-0">243 Review</p>
                                                </div>
                                                <!-- /p-c-review -->
                                            </div>
                                            <!-- /popular-course-review -->

                                            <div
                                                class="single-popular-course-content primary-border-bottom pb-6">
                                                <h3>
                                                    <a href="course-details.html">Master In Public Health</a>
                                                </h3>
                                                
                                            </div>
                                            <!-- /course-content -->

                                        </div>
                                        <!-- /popular-course-content-wrapper -->
                                    </div>
                                    <!-- /single-course -->
                                </div>
                                <!-- /col -->
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="single-popular-course zoom-img-hover">
                                        <div class="position-relative">
                                            <div class="p-course-img over-hidden position-relative">
                                                <img
                                                    class="w-100 img"
                                                    src="assets/uploads/courses/4.jpg"
                                                    alt="course-image01" />

                                                <div class="pc-category z-index1 position-absolute">
                                                    <span
                                                        class="text-white f-500 theme-bg d-inline-block py-1 px-3">M.SC</span>
                                                </div>
                                                <!-- /pc-category  -->
                                            </div>
                                            <!-- /p-course img -->

                                           
                                        </div>

                                        <div
                                            class="popular-course-content-wrapper bg-white pt-25 pl-30 pr-30">
                                            <div
                                                class="popular-course-review d-flex align-items-center mb-1">
                                                <ul class="review-ratting mr-10">
                                                    <li>
                                                        <span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                    </li>
                                                </ul>
                                                <!-- /review-ratting -->
                                                <div class="p-c-review">
                                                    <p class="mb-0">243 Review</p>
                                                </div>
                                                <!-- /p-c-review -->
                                            </div>
                                            <!-- /popular-course-review -->

                                            <div
                                                class="single-popular-course-content primary-border-bottom pb-6">
                                                <h3>
                                                    <a href="course-details.html">M.SC In Clinical Psychology</a>
                                                </h3>
                                                
                                            </div>
                                            <!-- /course-content -->

                                        </div>
                                        <!-- /popular-course-content-wrapper -->
                                    </div>
                                    <!-- /single-course -->
                                </div>
                                <!-- /col -->
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="single-popular-course zoom-img-hover">
                                        <div class="position-relative">
                                            <div class="p-course-img over-hidden position-relative">
                                                <img
                                                    class="w-100 img"
                                                    src="assets/uploads/courses/5.jpg"
                                                    alt="course-image01" />

                                                <div class="pc-category z-index1 position-absolute">
                                                    <span
                                                        class="text-white f-500 theme-bg d-inline-block py-1 px-3">M.SC</span>
                                                </div>
                                                <!-- /pc-category  -->
                                            </div>
                                            <!-- /p-course img -->

                                           
                                        </div>

                                        <div
                                            class="popular-course-content-wrapper bg-white pt-25 pl-30 pr-30">
                                            <div
                                                class="popular-course-review d-flex align-items-center mb-1">
                                                <ul class="review-ratting mr-10">
                                                    <li>
                                                        <span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                    </li>
                                                </ul>
                                                <!-- /review-ratting -->
                                                <div class="p-c-review">
                                                    <p class="mb-0">243 Review</p>
                                                </div>
                                                <!-- /p-c-review -->
                                            </div>
                                            <!-- /popular-course-review -->

                                            <div
                                                class="single-popular-course-content primary-border-bottom pb-6">
                                                <h3>
                                                    <a href="course-details.html">M.SC In Medical Lab Technology</a>
                                                </h3>
                                               
                                            </div>
                                            <!-- /course-content -->

                                        </div>
                                        <!-- /popular-course-content-wrapper -->
                                    </div>
                                    <!-- /single-course -->
                                </div>
                                <!-- /col -->
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="single-popular-course zoom-img-hover">
                                        <div class="position-relative">
                                            <div class="p-course-img over-hidden position-relative">
                                                <img
                                                    class="w-100 img"
                                                    src="assets/uploads/courses/6.jpg"
                                                    alt="course-image01" />

                                                <div class="pc-category z-index1 position-absolute">
                                                    <span
                                                        class="text-white f-500 theme-bg d-inline-block py-1 px-3">BMLT</span>
                                                </div>
                                                <!-- /pc-category  -->
                                            </div>
                                            <!-- /p-course img -->

                                           
                                        </div>

                                        <div
                                            class="popular-course-content-wrapper bg-white pt-25 pl-30 pr-30">
                                            <div
                                                class="popular-course-review d-flex align-items-center mb-1">
                                                <ul class="review-ratting mr-10">
                                                    <li>
                                                        <span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                    </li>
                                                </ul>
                                                <!-- /review-ratting -->
                                                <div class="p-c-review">
                                                    <p class="mb-0">243 Review</p>
                                                </div>
                                                <!-- /p-c-review -->
                                            </div>
                                            <!-- /popular-course-review -->

                                            <div
                                                class="single-popular-course-content primary-border-bottom pb-6">
                                                <h3>
                                                    <a href="course-details.html">BMLT (Bachelor Of Medical Laboratory Technology)</a>
                                                </h3>
                                                
                                            </div>
                                            <!-- /course-content -->

                                        </div>
                                        <!-- /popular-course-content-wrapper -->
                                    </div>
                                    <!-- /single-course -->
                                </div>
                                <!-- /col -->
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="single-popular-course zoom-img-hover">
                                        <div class="position-relative">
                                            <div class="p-course-img over-hidden position-relative">
                                                <img
                                                    class="w-100 img"
                                                    src="assets/uploads/courses/7.jpg"
                                                    alt="course-image01" />

                                                <div class="pc-category z-index1 position-absolute">
                                                    <span
                                                        class="text-white f-500 theme-bg d-inline-block py-1 px-3">BCA</span>
                                                </div>
                                                <!-- /pc-category  -->
                                            </div>
                                            <!-- /p-course img -->

                                           
                                        </div>

                                        <div
                                            class="popular-course-content-wrapper bg-white pt-25 pl-30 pr-30">
                                            <div
                                                class="popular-course-review d-flex align-items-center mb-1">
                                                <ul class="review-ratting mr-10">
                                                    <li>
                                                        <span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                    </li>
                                                </ul>
                                                <!-- /review-ratting -->
                                                <div class="p-c-review">
                                                    <p class="mb-0">243 Review</p>
                                                </div>
                                                <!-- /p-c-review -->
                                            </div>
                                            <!-- /popular-course-review -->

                                            <div
                                                class="single-popular-course-content primary-border-bottom pb-6">
                                                <h3>
                                                    <a href="course-details.html">BCA (Bachelor Of Computer Applications)</a>
                                                </h3>
                                                
                                            </div>
                                            <!-- /course-content -->

                                        </div>
                                        <!-- /popular-course-content-wrapper -->
                                    </div>
                                    <!-- /single-course -->
                                </div>
                                <!-- /col -->
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="single-popular-course zoom-img-hover">
                                        <div class="position-relative">
                                            <div class="p-course-img over-hidden position-relative">
                                                <img
                                                    class="w-100 img"
                                                    src="assets/uploads/courses/8.jpg"
                                                    alt="course-image01" />

                                                <div class="pc-category z-index1 position-absolute">
                                                    <span
                                                        class="text-white f-500 theme-bg d-inline-block py-1 px-3">BOPTM</span>
                                                </div>
                                                <!-- /pc-category  -->
                                            </div>
                                            <!-- /p-course img -->

                                           
                                        </div>

                                        <div
                                            class="popular-course-content-wrapper bg-white pt-25 pl-30 pr-30">
                                            <div
                                                class="popular-course-review d-flex align-items-center mb-1">
                                                <ul class="review-ratting mr-10">
                                                    <li>
                                                        <span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                    </li>
                                                </ul>
                                                <!-- /review-ratting -->
                                                <div class="p-c-review">
                                                    <p class="mb-0">243 Review</p>
                                                </div>
                                                <!-- /p-c-review -->
                                            </div>
                                            <!-- /popular-course-review -->

                                            <div
                                                class="single-popular-course-content primary-border-bottom pb-6">
                                                <h3>
                                                    <a href="course-details.html">BOPTM (Bachelor Of Optometry)</a>
                                                </h3>
                                               
                                            </div>
                                            <!-- /course-content -->

                                        </div>
                                        <!-- /popular-course-content-wrapper -->
                                    </div>
                                    <!-- /single-course -->
                                </div>
                                <!-- /col -->
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="single-popular-course zoom-img-hover">
                                        <div class="position-relative">
                                            <div class="p-course-img over-hidden position-relative">
                                                <img
                                                    class="w-100 img"
                                                    src="assets/uploads/courses/9.jpg"
                                                    alt="course-image01" />

                                                <div class="pc-category z-index1 position-absolute">
                                                    <span
                                                        class="text-white f-500 theme-bg d-inline-block py-1 px-3">BBA</span>
                                                </div>
                                                <!-- /pc-category  -->
                                            </div>
                                            <!-- /p-course img -->

                                           
                                        </div>

                                        <div
                                            class="popular-course-content-wrapper bg-white pt-25 pl-30 pr-30">
                                            <div
                                                class="popular-course-review d-flex align-items-center mb-1">
                                                <ul class="review-ratting mr-10">
                                                    <li>
                                                        <span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                    </li>
                                                </ul>
                                                <!-- /review-ratting -->
                                                <div class="p-c-review">
                                                    <p class="mb-0">243 Review</p>
                                                </div>
                                                <!-- /p-c-review -->
                                            </div>
                                            <!-- /popular-course-review -->

                                            <div
                                                class="single-popular-course-content primary-border-bottom pb-6">
                                                <h3>
                                                    <a href="course-details.html">BBA (Bachelor Of Business Administration)</a>
                                                </h3>
                                               
                                            </div>
                                            <!-- /course-content -->

                                        </div>
                                        <!-- /popular-course-content-wrapper -->
                                    </div>
                                    <!-- /single-course -->
                                </div>
                                <!-- /col -->
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="single-popular-course zoom-img-hover">
                                        <div class="position-relative">
                                            <div class="p-course-img over-hidden position-relative">
                                                <img
                                                    class="w-100 img"
                                                    src="assets/uploads/courses/10.jpg"
                                                    alt="course-image01" />

                                                <div class="pc-category z-index1 position-absolute">
                                                    <span
                                                        class="text-white f-500 theme-bg d-inline-block py-1 px-3">B.SC</span>
                                                </div>
                                                <!-- /pc-category  -->
                                            </div>
                                            <!-- /p-course img -->

                                           
                                        </div>

                                        <div
                                            class="popular-course-content-wrapper bg-white pt-25 pl-30 pr-30">
                                            <div
                                                class="popular-course-review d-flex align-items-center mb-1">
                                                <ul class="review-ratting mr-10">
                                                    <li>
                                                        <span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                    </li>
                                                </ul>
                                                <!-- /review-ratting -->
                                                <div class="p-c-review">
                                                    <p class="mb-0">243 Review</p>
                                                </div>
                                                <!-- /p-c-review -->
                                            </div>
                                            <!-- /popular-course-review -->

                                            <div
                                                class="single-popular-course-content primary-border-bottom pb-6">
                                                <h3>
                                                    <a href="course-details.html">B.SC (Bachelor Of Science)</a>
                                                </h3>
                                                
                                            </div>
                                            <!-- /course-content -->

                                        </div>
                                        <!-- /popular-course-content-wrapper -->
                                    </div>
                                    <!-- /single-course -->
                                </div>
                                <!-- /col -->
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="single-popular-course zoom-img-hover">
                                        <div class="position-relative">
                                            <div class="p-course-img over-hidden position-relative">
                                                <img
                                                    class="w-100 img"
                                                    src="assets/uploads/courses/11.jpg"
                                                    alt="course-image01" />

                                                <div class="pc-category z-index1 position-absolute">
                                                    <span
                                                        class="text-white f-500 theme-bg d-inline-block py-1 px-3">BHM</span>
                                                </div>
                                                <!-- /pc-category  -->
                                            </div>
                                            <!-- /p-course img -->

                                           
                                        </div>

                                        <div
                                            class="popular-course-content-wrapper bg-white pt-25 pl-30 pr-30">
                                            <div
                                                class="popular-course-review d-flex align-items-center mb-1">
                                                <ul class="review-ratting mr-10">
                                                    <li>
                                                        <span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                    </li>
                                                </ul>
                                                <!-- /review-ratting -->
                                                <div class="p-c-review">
                                                    <p class="mb-0">243 Review</p>
                                                </div>
                                                <!-- /p-c-review -->
                                            </div>
                                            <!-- /popular-course-review -->

                                            <div
                                                class="single-popular-course-content primary-border-bottom pb-6">
                                                <h3>
                                                    <a href="course-details.html">BHM (Bachelor Of Hotel Management)</a>
                                                </h3>
                                                
                                            </div>
                                            <!-- /course-content -->

                                        </div>
                                        <!-- /popular-course-content-wrapper -->
                                    </div>
                                    <!-- /single-course -->
                                </div>
                                <!-- /col -->
                               

                                
                            </div>
                            <!-- /row -->
                        </div>
                        <div
                            class="tab-pane"
                            id="s-p-list2"
                            role="tabpanel"
                            aria-labelledby="s-p-list2">
                            <!-- ====== course-list-view-area-start============================ -->
                            <div class="course-list-view course-tabs-area course-area">
                                <div class="courses-list-grid">
                                    <div
                                        class="row single-course-list-wrapper zoom-img-hover align-items-center bg-white mb-50 mx-0">
                                        <div
                                            class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 pr-0 pl-0">
                                            <div class="p-course-img over-hidden position-relative">
                                                <img
                                                    class="w-100 img"
                                                    src="client_assets/images/course/popular-course-img1.jpg"
                                                    alt="course-image01" />
                                            </div>
                                            <!-- /p-course img -->
                                        </div>
                                        <!-- /col -->

                                        <div
                                            class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12 pr-0 pl-0">
                                            <div
                                                class="popular-course-content bg-white pt-25 pb-10 pl-40 pr-30">
                                                <div
                                                    class="popular-course-review d-flex align-items-center mb-12">
                                                    <div class="pc-category z-index1 mr-20">
                                                        <span
                                                            class="text-white f-500 theme-bg text-uppercase d-inline-block py-1 px-3">Softweare</span>
                                                    </div>
                                                    <!-- /pc-category  -->
                                                    <ul class="review-ratting mr-10">
                                                        <li>
                                                            <span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span>
                                                        </li>
                                                    </ul>
                                                    <!-- /review-ratting -->
                                                    <div class="p-c-review">
                                                        <p class="mb-0">243 Review</p>
                                                    </div>
                                                    <!-- /p-c-review -->
                                                </div>
                                                <!-- /popular-course-review -->

                                                <div class="single-popular-course-content">
                                                    <h3 class="mb-12">
                                                        <a href="course-details.html">Design for the web with Abobe Illustrator and
                                                            photoshop</a>
                                                    </h3>

                                                    <p>
                                                        At torem ipsum conse icing elit, sed do eiusmod
                                                        tempor iur onre dol torem ipsum conse icing elit,
                                                        sed do eiusmod tempor iur onre dol torem ipsum
                                                        conse icing elit, sed do eiusmod tempor iur onre
                                                        dol...
                                                    </p>
                                                </div>
                                                <!-- /course-content -->

                                                <div
                                                    class="pc-info d-sm-flex align-items-center justify-content-between pt-sm-2 pb-15">
                                                    <div class="pc-info-left d-flex align-items-center">
                                                        <div class="pc-author-img mr-10">
                                                            <img
                                                                class="rounded-circle"
                                                                src="client_assets/images/course-page/course-list-author.jpg"
                                                                alt="" />
                                                        </div>
                                                        <!-- /author-img -->
                                                        <p class="admin mb-0">
                                                            By<span
                                                                class="theme-color f-500 d-inline-block pl-2">Cristofer Neilson</span>
                                                        </p>
                                                    </div>

                                                    <div
                                                        class="pc-info-right d-flex align-items-center justify-content-between justify-content-sm-end">
                                                        <p class="pc-student mb-0">
                                                            <span><i class="fal fa-user"></i></span>
                                                            3584
                                                        </p>
                                                        <div class="pc-price ml-20">
                                                            <span class="primary-color f-500 d-inline-block">$199</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /popular-course-content-wrapper -->
                                        </div>
                                        <!-- /col -->
                                    </div>
                                    <!-- /row -->

                                    <div
                                        class="row single-course-list-wrapper zoom-img-hover align-items-center bg-white mb-50 mx-0">
                                        <div
                                            class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 pr-0 pl-0">
                                            <div class="p-course-img over-hidden position-relative">
                                                <img
                                                    class="w-100 img"
                                                    src="client_assets/images/course/popular-course-img2.jpg"
                                                    alt="course-image02" />
                                            </div>
                                            <!-- /p-course img -->
                                        </div>
                                        <!-- /col -->

                                        <div
                                            class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12 pr-0 pl-0">
                                            <div
                                                class="popular-course-content bg-white pt-25 pb-10 pl-40 pr-30">
                                                <div
                                                    class="popular-course-review d-flex align-items-center mb-12">
                                                    <div class="pc-category z-index1 mr-20">
                                                        <span
                                                            class="text-white f-500 theme-bg text-uppercase d-inline-block py-1 px-3">Softweare</span>
                                                    </div>
                                                    <!-- /pc-category  -->
                                                    <ul class="review-ratting mr-10">
                                                        <li>
                                                            <span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span>
                                                        </li>
                                                    </ul>
                                                    <!-- /review-ratting -->
                                                    <div class="p-c-review">
                                                        <p class="mb-0">243 Review</p>
                                                    </div>
                                                    <!-- /p-c-review -->
                                                </div>
                                                <!-- /popular-course-review -->

                                                <div class="single-popular-course-content">
                                                    <h3 class="mb-12">
                                                        <a href="course-details.html">Design for the web with Abobe Illustrator and
                                                            photoshop</a>
                                                    </h3>

                                                    <p>
                                                        At torem ipsum conse icing elit, sed do eiusmod
                                                        tempor iur onre dol torem ipsum conse icing elit,
                                                        sed do eiusmod tempor iur onre dol torem ipsum
                                                        conse icing elit, sed do eiusmod tempor iur onre
                                                        dol...
                                                    </p>
                                                </div>
                                                <!-- /course-content -->

                                                <div
                                                    class="pc-info d-sm-flex align-items-center justify-content-between pt-sm-2 pb-15">
                                                    <div class="pc-info-left d-flex align-items-center">
                                                        <div class="pc-author-img mr-10">
                                                            <img
                                                                class="rounded-circle"
                                                                src="client_assets/images/course-page/course-list-author.jpg"
                                                                alt="" />
                                                        </div>
                                                        <!-- /author-img -->
                                                        <p class="admin mb-0">
                                                            By<span
                                                                class="theme-color f-500 d-inline-block pl-2">Cristofer Neilson</span>
                                                        </p>
                                                    </div>

                                                    <div
                                                        class="pc-info-right d-flex align-items-center justify-content-between justify-content-sm-end">
                                                        <p class="pc-student mb-0">
                                                            <span><i class="fal fa-user"></i></span>
                                                            3584
                                                        </p>
                                                        <div class="pc-price ml-20">
                                                            <span class="primary-color f-500 d-inline-block">$199</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /popular-course-content-wrapper -->
                                        </div>
                                        <!-- /col -->
                                    </div>
                                    <!-- /row -->

                                    <div
                                        class="row single-course-list-wrapper zoom-img-hover align-items-center bg-white mb-50 mx-0">
                                        <div
                                            class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 pr-0 pl-0">
                                            <div class="p-course-img over-hidden position-relative">
                                                <img
                                                    class="w-100 img"
                                                    src="client_assets/images/course/popular-course-img3.jpg"
                                                    alt="course-image03" />
                                            </div>
                                            <!-- /p-course img -->
                                        </div>
                                        <!-- /col -->

                                        <div
                                            class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12 pr-0 pl-0">
                                            <div
                                                class="popular-course-content bg-white pt-25 pb-10 pl-40 pr-30">
                                                <div
                                                    class="popular-course-review d-flex align-items-center mb-12">
                                                    <div class="pc-category z-index1 mr-20">
                                                        <span
                                                            class="text-white f-500 theme-bg text-uppercase d-inline-block py-1 px-3">Softweare</span>
                                                    </div>
                                                    <!-- /pc-category  -->
                                                    <ul class="review-ratting mr-10">
                                                        <li>
                                                            <span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span>
                                                        </li>
                                                    </ul>
                                                    <!-- /review-ratting -->
                                                    <div class="p-c-review">
                                                        <p class="mb-0">243 Review</p>
                                                    </div>
                                                    <!-- /p-c-review -->
                                                </div>
                                                <!-- /popular-course-review -->

                                                <div class="single-popular-course-content">
                                                    <h3 class="mb-12">
                                                        <a href="course-details.html">Design for the web with Abobe Illustrator and
                                                            photoshop</a>
                                                    </h3>

                                                    <p>
                                                        At torem ipsum conse icing elit, sed do eiusmod
                                                        tempor iur onre dol torem ipsum conse icing elit,
                                                        sed do eiusmod tempor iur onre dol torem ipsum
                                                        conse icing elit, sed do eiusmod tempor iur onre
                                                        dol...
                                                    </p>
                                                </div>
                                                <!-- /course-content -->

                                                <div
                                                    class="pc-info d-sm-flex align-items-center justify-content-between pt-sm-2 pb-15">
                                                    <div class="pc-info-left d-flex align-items-center">
                                                        <div class="pc-author-img mr-10">
                                                            <img
                                                                class="rounded-circle"
                                                                src="client_assets/images/course-page/course-list-author.jpg"
                                                                alt="" />
                                                        </div>
                                                        <!-- /author-img -->
                                                        <p class="admin mb-0">
                                                            By<span
                                                                class="theme-color f-500 d-inline-block pl-2">Cristofer Neilson</span>
                                                        </p>
                                                    </div>

                                                    <div
                                                        class="pc-info-right d-flex align-items-center justify-content-between justify-content-sm-end">
                                                        <p class="pc-student mb-0">
                                                            <span><i class="fal fa-user"></i></span>
                                                            3584
                                                        </p>
                                                        <div class="pc-price ml-20">
                                                            <span class="primary-color f-500 d-inline-block">$199</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /popular-course-content-wrapper -->
                                        </div>
                                        <!-- /col -->
                                    </div>
                                    <!-- /row -->

                                    <div
                                        class="row single-course-list-wrapper zoom-img-hover align-items-center bg-white mb-50 mx-0">
                                        <div
                                            class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 pr-0 pl-0">
                                            <div class="p-course-img over-hidden position-relative">
                                                <img
                                                    class="w-100 img"
                                                    src="client_assets/images/course/popular-course-img4.jpg"
                                                    alt="course-image04" />
                                            </div>
                                            <!-- /p-course img -->
                                        </div>
                                        <!-- /col -->

                                        <div
                                            class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12 pr-0 pl-0">
                                            <div
                                                class="popular-course-content bg-white pt-25 pb-10 pl-40 pr-30">
                                                <div
                                                    class="popular-course-review d-flex align-items-center mb-12">
                                                    <div class="pc-category z-index1 mr-20">
                                                        <span
                                                            class="text-white f-500 theme-bg text-uppercase d-inline-block py-1 px-3">Softweare</span>
                                                    </div>
                                                    <!-- /pc-category  -->
                                                    <ul class="review-ratting mr-10">
                                                        <li>
                                                            <span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span>
                                                        </li>
                                                    </ul>
                                                    <!-- /review-ratting -->
                                                    <div class="p-c-review">
                                                        <p class="mb-0">243 Review</p>
                                                    </div>
                                                    <!-- /p-c-review -->
                                                </div>
                                                <!-- /popular-course-review -->

                                                <div class="single-popular-course-content">
                                                    <h3 class="mb-12">
                                                        <a href="course-details.html">Design for the web with Abobe Illustrator and
                                                            photoshop</a>
                                                    </h3>

                                                    <p>
                                                        At torem ipsum conse icing elit, sed do eiusmod
                                                        tempor iur onre dol torem ipsum conse icing elit,
                                                        sed do eiusmod tempor iur onre dol torem ipsum
                                                        conse icing elit, sed do eiusmod tempor iur onre
                                                        dol...
                                                    </p>
                                                </div>
                                                <!-- /course-content -->

                                                <div
                                                    class="pc-info d-sm-flex align-items-center justify-content-between pt-sm-2 pb-15">
                                                    <div class="pc-info-left d-flex align-items-center">
                                                        <div class="pc-author-img mr-10">
                                                            <img
                                                                class="rounded-circle"
                                                                src="client_assets/images/course-page/course-list-author.jpg"
                                                                alt="" />
                                                        </div>
                                                        <!-- /author-img -->
                                                        <p class="admin mb-0">
                                                            By<span
                                                                class="theme-color f-500 d-inline-block pl-2">Cristofer Neilson</span>
                                                        </p>
                                                    </div>

                                                    <div
                                                        class="pc-info-right d-flex align-items-center justify-content-between justify-content-sm-end">
                                                        <p class="pc-student mb-0">
                                                            <span><i class="fal fa-user"></i></span>
                                                            3584
                                                        </p>
                                                        <div class="pc-price ml-20">
                                                            <span class="primary-color f-500 d-inline-block">$199</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /popular-course-content-wrapper -->
                                        </div>
                                        <!-- /col -->
                                    </div>
                                    <!-- /row -->

                                    <div
                                        class="row single-course-list-wrapper zoom-img-hover align-items-center bg-white mb-50 mx-0">
                                        <div
                                            class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 pr-0 pl-0">
                                            <div class="p-course-img over-hidden position-relative">
                                                <img
                                                    class="w-100 img"
                                                    src="client_assets/images/course/popular-course-img5.jpg"
                                                    alt="course-image05" />
                                            </div>
                                            <!-- /p-course img -->
                                        </div>
                                        <!-- /col -->

                                        <div
                                            class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12 pr-0 pl-0">
                                            <div
                                                class="popular-course-content bg-white pt-25 pb-10 pl-40 pr-30">
                                                <div
                                                    class="popular-course-review d-flex align-items-center mb-12">
                                                    <div class="pc-category z-index1 mr-20">
                                                        <span
                                                            class="text-white f-500 theme-bg text-uppercase d-inline-block py-1 px-3">Softweare</span>
                                                    </div>
                                                    <!-- /pc-category  -->
                                                    <ul class="review-ratting mr-10">
                                                        <li>
                                                            <span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span><span><i class="fa fa-star"></i></span>
                                                        </li>
                                                    </ul>
                                                    <!-- /review-ratting -->
                                                    <div class="p-c-review">
                                                        <p class="mb-0">243 Review</p>
                                                    </div>
                                                    <!-- /p-c-review -->
                                                </div>
                                                <!-- /popular-course-review -->

                                                <div class="single-popular-course-content">
                                                    <h3 class="mb-12">
                                                        <a href="course-details.html">Design for the web with Abobe Illustrator and
                                                            photoshop</a>
                                                    </h3>

                                                    <p>
                                                        At torem ipsum conse icing elit, sed do eiusmod
                                                        tempor iur onre dol torem ipsum conse icing elit,
                                                        sed do eiusmod tempor iur onre dol torem ipsum
                                                        conse icing elit, sed do eiusmod tempor iur onre
                                                        dol...
                                                    </p>
                                                </div>
                                                <!-- /course-content -->

                                                <div
                                                    class="pc-info d-sm-flex align-items-center justify-content-between pt-sm-2 pb-15">
                                                    <div class="pc-info-left d-flex align-items-center">
                                                        <div class="pc-author-img mr-10">
                                                            <img
                                                                class="rounded-circle"
                                                                src="client_assets/images/course-page/course-list-author.jpg"
                                                                alt="" />
                                                        </div>
                                                        <!-- /author-img -->
                                                        <p class="admin mb-0">
                                                            By<span
                                                                class="theme-color f-500 d-inline-block pl-2">Cristofer Neilson</span>
                                                        </p>
                                                    </div>

                                                    <div
                                                        class="pc-info-right d-flex align-items-center justify-content-between justify-content-sm-end">
                                                        <p class="pc-student mb-0">
                                                            <span><i class="fal fa-user"></i></span>
                                                            3584
                                                        </p>
                                                        <div class="pc-price ml-20">
                                                            <span class="primary-color f-500 d-inline-block">$199</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /popular-course-content-wrapper -->
                                        </div>
                                        <!-- /col -->
                                    </div>
                                    <!-- /row -->
                                </div>
                                <!-- /row -->
                            </div>
                            <!-- /course-list-view -->
                            <!-- course-list-view-area-end  -->
                        </div>
                    </div>
                </div>
                <!-- /course-content -->
            </div>
            <!-- /container -->

            <!-- ====== pagination-area-start================================ -->
            <div class="pagination-area mt-25 over-hidden">
                <div class="container-wrapper extra-padding-15">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <nav
                                class="pagination-page"
                                aria-label="Page navigation example">
                                <ul
                                    class="pagination align-items-center justify-content-center">
                                    <!-- <li class="page-item">
                                        <a class="page-link" href="#"><i class="fas fa-angle-left"></i></a>
                                    </li> -->
                                    <li class="page-item active">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#"><i class="fas fa-angle-right"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- /col -->
                    </div>
                    <!-- /row -->
                </div>
                <!-- /container -->
            </div>
            <!-- pagination-area-end -->
        </div>
        <!-- course-area-end  -->
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
    <script src="client_assets/js/plugins.js"></script>
    <script src="client_assets/js/jquery.meanmenu.min.js"></script>
    <script src="client_assets/js/main.js"></script>
</body>

</html>