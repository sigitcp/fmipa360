<?php
require 'HomeControllers/LangController.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
    <title>FMIPA 360</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="120x120" href="./assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/img/favicon/favicon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/img/favicon/favicon.png">
    <link rel="manifest" href="./assets/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="./assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- Fontawesome -->
    <link type="text/css" href="./vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- Pixel CSS -->
    <link type="text/css" href="./css/neumorphism.css" rel="stylesheet">

    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->
</head>

<body>
    <section class="mt-5" id="room">
        <div class="section section-lg pt-0">


            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-8 text-center mb-3">
                        <h1 class="display-2 font-weight-bold"><?= $lang ["Select Building"];?></span>
                        </h1>
                        <p class="lead"><?= $lang ["Choose one of the buildings in the Faculty of Mathematics and Natural Sciences, Tanjungpura university to start the extraordinary experience of the virtual tour"];?></p>
                    </div>
                </div>
            </div>


            <div class="container">
                <div class="row">

                    <div class="col-12 col-md-6 col-lg-3 mb-5">
                        <div class="card bg-primary border-light shadow-soft">
                            <img src="assets/img/baru.jpg" class="card-img-top rounded-top">
                            <div class="card-body">
                                <h3 class="card-title mt-2">FMIPA UNTAN Gedung Baru
                                </h3>
                                <p style="text-align:center" class="display-5 shadow-inset rounded"><?= $lang ["V1.0 august 2022"];?>
                                </p>
                                <a href="virtualtour/gbrvirtualtour/"
                                    class="btn btn-primary btn-block text-success font-weight-bold"><?= $lang ["Start"];?></a>
                            </div>
                        </div>
                    </div>

                    <!-- -------------------------------------------------------------------------------------------------- -->

                    <div class="col-12 col-md-6 col-lg-3 mb-5">
                        <div class="card bg-primary border-light shadow-soft">
                            <img src="assets/img/lama.jpg" class="card-img-top rounded-top"
                                >
                            <div class="card-body">
                                <h3 class="h3 card-title mt-2">FMIPA UNTAN Gedung Lama</h3>
                                <p style="text-align:center" class="display-5 shadow-inset rounded"><?= $lang ["V1.0 august 2022"];?>
                                </p>
                                <a href="virtualtour/glmvirtualtour/" class="btn btn-primary btn-block text-success font-weight-bold"><?= $lang ["Start"];?></a>
                            </div>
                        </div>
                    </div>
                    <!-- -------------------------------------------------------------------------------------------------- -->
                    <div class="col-12 col-md-6 col-lg-3 mb-5">
                        <div class="card bg-primary border-light shadow-soft">
                            <img src="assets/img/biotek.png" class="card-img-top rounded-top"
                                >
                            <div class="card-body">
                                <h3 class="h3 card-title mt-2">FMIPA UNTAN Gedung Biotek</h3>
                                <p style="text-align:center" class="display-5 shadow-inset rounded"><?= $lang ["V1.0 august 2022"];?>
                                </p>
                                <a href="virtualtour/biovirtualtour/" class="btn btn-primary btn-block text-success font-weight-bold"><?= $lang ["Start"];?></a>
                            </div>
                        </div>
                    </div>
                    <!-- -------------------------------------------------------------------------------------------------- -->
                    <div class="col-12 col-md-6 col-lg-3 mb-5">
                        <div class="card bg-primary border-light shadow-soft">
                            <img src="assets/img/siskom.jpg" class="card-img-top rounded-top"
                                >
                            <div class="card-body">
                                <h3 class="h3 card-title mt-2">FMIPA UNTAN Gedung Siskom</h3>
                                <p style="text-align:center" class="display-5 shadow-inset rounded"><?= $lang ["V1.0 august 2022"];?>
                                </p>
                                <a href="virtualtour/sisvirtualtour/" class="btn btn-primary btn-block text-success font-weight-bold"><?= $lang ["Start"];?></a>
                            </div>
                        </div>
                    </div>
                    <!-- -------------------------------------------------------------------------------------------------- -->

                </div>
            </div>
        </div>
    </section>


    <!-- Section -->
    <section class="">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-12 col-lg-12 mb-5">
                    <!-- Contact Card -->
                    <div class="card bg-primary shadow-soft border-light p-2 p-md-3 p-lg-5">
                        <div class="card-header">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-8 text-center mb-5">
                                    <h1 class="display-2 mb-3"><span class="font-weight-bold"><?= $lang ["Button Hint"];?></h1>
                                    <p class="lead"><?= $lang ["help you understand the function of each button that will be presented in your virtual tour."];?></p>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col-md-4 col-lg-4 text-center">
                                    <!-- Visit Box -->
                                    <div class="icon-box mb-4">
                                        <div class="icon icon-shape shadow-inset border-light rounded-circle mb-4">
                                            <img src="assets/img/infospot.png" width="60">
                                        </div>
                                        <h2 class="h5 icon-box-title"><?= $lang ["Detail"];?></h2>
                                        <span>
                                        <?= $lang ["Room name details"];?>
                                        </span>
                                    </div>
                                    <!-- End of Visit Box -->
                                </div>
                                <div class="col-md-4 col-lg-4 text-center">
                                    <!-- Call Box -->
                                    <div class="icon-box mb-4">
                                        <div class="icon icon-shape shadow-inset border-light rounded-circle mb-4">
                                            <img src="assets/img/cirle1.png" width="60">
                                        </div>
                                        <h2 class="h5 icon-box-title"><?= $lang ["Point"];?></h2>
                                        <span>
                                        <?= $lang ["Current location details"];?>
                                        </span>
                                    </div>
                                    <!-- End of Call Box -->
                                </div>
                                <div class="col-md-4 col-lg-4 text-center">
                                    <!-- Email Box -->
                                    <div class="icon-box mb-4">
                                        <div class="icon icon-shape shadow-inset border-light rounded-circle mb-4">
                                            <img src="assets/img/arrow.png" width="60">
                                        </div>
                                        <h2 class="h5 icon-box-title"><?= $lang ["Next"];?></h2>
                                        <span>
                                        <?= $lang ["switch scenes"];?>
                                        </span>
                                    </div>
                                    <!-- End of Email Box -->
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- End of Contact Card -->
                </div>
            </div>
        </div>
    </section>
    <!-- End of section -->


    <footer class="d-flex pb-5 pt-6 pt-md-7 border-top border-light bg-primary">
        <div class="container">
            <div class="row">
                <div class="col">
                    <a href="https://themesberg.com" target="_blank" class="d-flex justify-content-center">
                        <img src="./assets/img/brand/favicon.png" height="25" class="mb-3" alt="Themesberg Logo">
                    </a>
                    <div class="d-flex text-center justify-content-center align-items-center" role="contentinfo">
                        <p class="font-weight-normal font-small mb-0">Copyright SISTEM INFORMASI © FMIPA UNTAN
                            <span class="current-year">2022</span>. All rights reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Core -->
    <script src="./vendor/jquery/dist/jquery.min.js"></script>
    <script src="./vendor/popper.js/dist/umd/popper.min.js"></script>
    <script src="./vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="./vendor/headroom.js/dist/headroom.min.js"></script>

    <!-- Vendor JS -->
    <script src="./vendor/onscreen/dist/on-screen.umd.min.js"></script>
    <script src="./vendor/nouislider/distribute/nouislider.min.js"></script>
    <script src="./vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="./vendor/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="./vendor/jarallax/dist/jarallax.min.js"></script>
    <script src="./vendor/jquery.counterup/jquery.counterup.min.js"></script>
    <script src="./vendor/jquery-countdown/dist/jquery.countdown.min.js"></script>
    <script src="./vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="./vendor/prismjs/prism.js"></script>

    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- Neumorphism JS -->
    <script src="./assets/js/neumorphism.js"></script>
</body>

</html>