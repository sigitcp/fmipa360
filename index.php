<?php
require 'HomeControllers/HomeControllers.php';
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


    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <!-- Pixel CSS -->
    <link type="text/css" href="./css/neumorphism.css" rel="stylesheet">

    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->
</head>

<body>
    <header class="header-global">
        <nav id="navbar-main" aria-label="Primary navigation"
            class="navbar navbar-main navbar-expand-lg navbar-theme-primary headroom navbar-light navbar-transparent navbar-theme-primary">
            <div class="container position-relative">
                <a class="navbar-brand shadow-soft py-2 px-3 rounded border border-light mr-lg-4" href="./index.php">
                    <img class="navbar-brand-dark" src="./assets/img/brand/favicon.png" alt="Logo light">
                    <img class="navbar-brand-light" src="./assets/img/brand/favicon.png" alt="Logo dark">
                </a>

                <div class="navbar-collapse collapse" id="navbar_global">
                    <div class="navbar-collapse-header ">
                        <div class="row mt-5">
                            <div class="col-6 collapse-brand">
                                <a href="./index.php"
                                    class="navbar-brand shadow-soft py-2 px-3 rounded border border-light mr-lg-4">
                                    <img src="./assets/img/brand/favicon.png">
                                </a>
                            </div>
                            <div class="col-6 collapse-close ">
                                <div class="btn btn-primary">
                                    <a href="#navbar_global" class="fas fa-times" data-toggle="collapse"
                                        data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false"
                                        aria-label="Toggle navigation"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="navbar-nav navbar-nav-hover align-items-lg-center">

                        <li>
                            <a href="#virtualtour" class="nav-link list-style-none">
                                <span class="btn btn-pill btn-primary">Virtual Tour</span>
                            </a>
                        </li>
                        <li>
                            <a href="#room" class="nav-link list-style-none">
                                <span class="btn btn-pill btn-primary"><?= $lang ["Room Guide"];?></span>
                            </a>
                        </li>
                        <li>
                            <a href="#contact" class="nav-link list-style-none">
                                <button class="btn btn-pill btn-primary"><?= $lang ["Contact Us"];?></button>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">
                                <span class="btn btn-pill">
                                    <span class="nav-link-inner-text"><?= $lang ["Language"];?></span>
                                    <span class="fas fa-angle-down nav-link-arrow ml-2"></span>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="index.php?lang=idn">indonesia</a></li>
                                <li><a class="dropdown-item" href="index.php?lang=eng">English</a></li>
                                <li><a class="dropdown-item" href="index.php?lang=jpn">Japanese</a></li>
                                <li><a class="dropdown-item" href="index.php?lang=krn">Korean</a></li>
                                <li><a class="dropdown-item" href="index.php?lang=arb">Arabic</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="d-flex align-items-center">
                    <button class="navbar-toggler ml-2" type="button" data-toggle="collapse"
                        data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
        </nav>
    </header>



    <!-- Hero -->
    <section id="virtualtour" class="section section bg-soft pb-5 overflow-hidden z-2">
        <div class="container z-2">
            <div class="row justify-content-center text-center pt-6">
                <div class="col-lg-8 col-xl-8">
                    <h1 class="display-2 mt-3 mb-3"><?= $lang ["Virtual Tour MIPA Tanjungpura University"];?></h1>
                    <p class="mb-5"><?= $lang ["Feel The Fun Experience of a Virtual Tour With a Guide in The MIPA Faculty Area of Tanjungpura University"];?></p>
                    <div class="d-flex flex-column flex-wrap flex-md-row justify-content-md-center mb-5">
                        <a href="virtualtour.php" class="btn btn-primary mb-3 mb-lg-0 mr-3"><i
                                class="fa fa-binoculars mr-2"></i><?= $lang ["Let's Start Begin"];?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hero end-->

    <section class="" id="room">
        <div class="section section-lg pt-0">


            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-8 text-center mb-3">
                        <h1 class="display-2 font-weight-bold"><?= $lang ["Room Guide"];?></span>
                        </h1>
                        <p class="lead"><?= $lang ["Helping you in finding a route to a room in the Mathematics and Natural Sciences Faculty. Choose one of the rooms that you want to know the location of the class."];?></p>
                    </div>
                </div>
            </div>


            <div class="container">
                <div class="row">

                    <div class="col-12 col-md-6 col-lg-6 mb-5 mt-3 mb-lg-0">
                        <div class="card bg-primary shadow-soft border-light p-4">

                            <!-- Header -->
                            <div class="card-header border-bottom text-center">
                                <span class="d-block">
                                    <span class="display-3 font-weight-bold">
                                        Gedung Baru</span>
                                </span>
                            </div>
                            <!-- End Header -->

                            <!-- Content -->

                            <table  id="gbr1" width="100%" cellspacing="">
                                <thead>
                                    <tr>
                                        <th> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach( $gedungbaru as $gbr ) : ?>
                                    <tr>
                                        <td>
                                            <a type="button" class="btn btn-primary btn-block mb-2" tabindex="0"
                                                data-toggle="modal" data-target="#modaldetail<?= $gbr ["id"];?>"><span
                                                    class="fas fa-home mr-2"></span><span><?= $lang ["Room"];?>
                                                </span><?= $gbr ["nama"];?>
                                            </a>
                                        </td>
                                    </tr>
                                    <!-- modal -->
                                    <div class="modal fade" id="modaldetail<?= $gbr ["id"];?>" tabindex="-1"
                                        role="dialog" aria-labelledby="modaldetail" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                            <div class="modal-content shadow-soft">
                                                <div class="modal-header">
                                                    <div class="modal-title display-4"><?= $lang ["Room Detail"];?></div>
                                                    <button type="button" class="close ml-auto" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body px-6">
                                                    <div class="py-3">
                                                        <div class="text-center">
                                                            <img width="100%"
                                                                src="./assets/img/denah/<?= $gbr ["denah"]; ?>"></img>
                                                            <div class="nav-wrapper position-relative">
                                                                <ul
                                                                    class="nav nav-pills nav-fill flex-column flex-md-row">
                                                                    <li class="nav-item">
                                                                        <span class="nav-link shadow-inset"><span><?= $lang ["Room"];?>
                                                                            </span><?= $gbr ["nama"];?></span>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <span class="nav-link shadow-inset"><span><?= $lang ["Large"];?>
                                                                            </span><?= $gbr ["luas"];?>
                                                                            m<sup>2</sup></span>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <span class="nav-link shadow-inset"><span><?= $lang ["Capacity"];?>
                                                                            </span><?= $gbr ["kapasitas"];?>
                                                                            <?= $lang ["peoples"];?></span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>



                            <!-- End Content -->
                        </div>
                    </div>

                    <!-- -------------------------------------------------------------------------------------------------- -->

                    <div class="col-12 col-md-6 col-lg-6 mb-5 mt-3 mb-lg-0">
                        <div class="card bg-primary shadow-soft border-light p-4">
                            <!-- Header -->
                            <div class="card-header border-bottom text-center">
                                <span class="d-block">
                                    <span class="display-3 font-weight-bold">
                                        Gedung Lama</span>
                                </span>
                            </div>
                            <!-- End Header -->
                            <!-- Content -->
                            <table id="glm1" width="100%" cellspacing="">
                                <thead>
                                    <tr>
                                        <th> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach( $gedunglama as $glm ) : ?>
                                    <tr>
                                        <td>
                                            <a type="button" class="btn btn-primary btn-block mb-2" tabindex="0"
                                                data-toggle="modal" data-target="#modaldetail<?= $glm ["id"];?>"><span
                                                    class="fas fa-home mr-2"></span><span><?= $lang ["Room"];?>
                                                </span><?= $glm ["nama"];?>
                                            </a>
                                        </td>

                                    </tr>
                                    <div class="modal fade" id="modaldetail<?= $glm ["id"];?>" tabindex="-1"
                                        role="dialog" aria-labelledby="modaldetail" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                            <div class="modal-content shadow-soft">
                                                <div class="modal-header">
                                                    <div class="modal-title display-4"><?= $lang ["Room Detail"];?></div>
                                                    <button type="button" class="close ml-auto" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body px-6">
                                                    <div class="py-3">
                                                        <div class="text-center">
                                                            <img width="100%"
                                                                src="./assets/img/denah/<?= $glm ["denah"]; ?>"></img>
                                                            <div class="nav-wrapper position-relative">
                                                                <ul
                                                                    class="nav nav-pills nav-fill flex-column flex-md-row">
                                                                    <li class="nav-item">
                                                                        <span class="nav-link shadow-inset"><span><?= $lang ["Room"];?>
                                                                            </span><?= $glm ["nama"];?></span>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <span class="nav-link shadow-inset"><span><?= $lang ["Large"];?>
                                                                            </span><?= $glm ["luas"];?>
                                                                            m<sup>2</sup></span>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <span class="nav-link shadow-inset"><span><?= $lang ["Capacity"];?>
                                                                            </span><?= $glm ["kapasitas"];?>
                                                                            <?= $lang ["peoples"];?></span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <!-- End Content -->

                        </div>
                    </div>

                    <!-- -------------------------------------------------------------------------------------------------- -->

                    <div class="col-12 col-md-6 col-lg-6 mb-5 mt-3 mb-lg-0">
                        <div class="card bg-primary shadow-soft border-light p-4">
                            <!-- Header -->
                            <div class="card-header border-bottom text-center">
                                <span class="d-block">
                                    <span class="display-3 font-weight-bold">
                                        Gedung Biotek</span>
                                </span>
                            </div>
                            <!-- End Header -->
                            <!-- Content -->
                            <table id="bio1" width="100%" cellspacing="">
                                <thead>
                                    <tr>
                                        <th> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach( $biotek as $bio ) : ?>
                                    <tr>
                                        <td>
                                            <a type="button" class="btn btn-primary btn-block mb-2" tabindex="0"
                                                data-toggle="modal" data-target="#modaldetail<?= $bio ["id"];?>"><span
                                                    class="fas fa-home mr-2"></span><span><?= $lang ["Room"];?>
                                                </span><?= $bio ["nama"];?>
                                            </a>
                                        </td>

                                    </tr>
                                    <div class="modal fade" id="modaldetail<?= $bio ["id"];?>" tabindex="-1"
                                        role="dialog" aria-labelledby="modaldetail" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                            <div class="modal-content shadow-soft">
                                                <div class="modal-header">
                                                    <div class="modal-title display-4"><?= $lang ["Room Detail"];?></div>
                                                    <button type="button" class="close ml-auto" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body px-6">
                                                    <div class="py-3">
                                                        <div class="text-center">
                                                            <img width="100%"
                                                                src="./assets/img/denah/<?= $bio ["denah"]; ?>"></img>
                                                            <div class="nav-wrapper position-relative">
                                                                <ul
                                                                    class="nav nav-pills nav-fill flex-column flex-md-row">
                                                                    <li class="nav-item">
                                                                        <span class="nav-link shadow-inset"><span><?= $lang ["Room"];?>
                                                                            </span><?= $bio ["nama"];?></span>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <span class="nav-link shadow-inset"><span><?= $lang ["Large"];?>
                                                                            </span><?= $bio ["luas"];?>
                                                                            m<sup>2</sup></span>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <span class="nav-link shadow-inset"><span><?= $lang ["Capacity"];?>
                                                                            </span><?= $bio ["kapasitas"];?>
                                                                            <?= $lang ["peoples"];?></span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <!-- End Content -->
                        </div>
                    </div>
                    <!-- -------------------------------------------------------------------------------------------------- -->

                    <div class="col-12 col-md-6 col-lg-6 mb-5 mt-3 mb-lg-0">
                        <div class="card bg-primary shadow-soft border-light p-4">
                            <!-- Header -->
                            <div class="card-header border-bottom text-center">
                                <span class="d-block">
                                    <span class="display-3 font-weight-bold">
                                        Gedung Siskom</span>
                                </span>
                            </div>
                            <!-- End Header -->
                            <!-- Content -->
                            <table id="sis1" width="100%" cellspacing="">
                                <thead>
                                    <tr>
                                        <th> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach( $siskom as $sis ) : ?>
                                    <tr>
                                        <td>
                                            <a type="button" class="btn btn-primary btn-block mb-2" tabindex="0"
                                                data-toggle="modal" data-target="#modaldetail<?= $sis ["id"];?>"><span
                                                    class="fas fa-home mr-2"></span><span><?= $lang ["Room"];?>
                                                </span><?= $sis ["nama"];?>
                                            </a>
                                        </td>

                                    </tr>
                                    <div class="modal fade" id="modaldetail<?= $sis ["id"];?>" tabindex="-1"
                                        role="dialog" aria-labelledby="modaldetail" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                            <div class="modal-content shadow-soft">
                                                <div class="modal-header">
                                                    <div class="modal-title display-4"><?= $lang ["Room Detail"];?></div>
                                                    <button type="button" class="close ml-auto" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body px-6">
                                                    <div class="py-3">
                                                        <div class="text-center">
                                                            <img width="100%"
                                                                src="./assets/img/denah/<?= $sis ["denah"]; ?>"></img>
                                                            <div class="nav-wrapper position-relative">
                                                                <ul
                                                                    class="nav nav-pills nav-fill flex-column flex-md-row">
                                                                    <li class="nav-item">
                                                                        <span class="nav-link shadow-inset"><span><?= $lang ["Room"];?>
                                                                            </span><?= $sis ["nama"];?></span>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <span class="nav-link shadow-inset"><span><?= $lang ["Large"];?>
                                                                            </span><?= $sis ["luas"];?>
                                                                            m<sup>2</sup></span>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <span class="nav-link shadow-inset"><span><?= $lang ["Capacity"];?>
                                                                            </span><?= $sis ["kapasitas"];?>
                                                                            <?= $lang ["peoples"];?></span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <!-- End Content -->
                        </div>
                    </div>

                    <!-- -------------------------------------------------------------------------------------------------- -->

                </div>
            </div>
        </div>
    </section>


    <!-- Section -->
    <section id="contact">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-12 col-lg-12 mb-5">
                    <!-- Contact Card -->
                    <div class="card bg-primary shadow-soft border-light p-2 p-md-3 p-lg-5">
                        <div class="card-header">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="shadow-inset p-4 mb-5 rounded">
                                        <iframe class="map rounded" id="gmap_canvas"
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.816225080557!2d109.34614095765701!3d-0.05871922565173634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d599127523ec9%3A0x752e4fa340c5556d!2sFaculty%20of%20Math%20and%20Science!5e0!3m2!1sen!2sid!4v1659164539498!5m2!1sen!2sid"></iframe>
                                            
                                        </div>
                                </div>
                                <div class="col-12 col-md-8 text-center mb-5">
                                    <h1 class="display-2 mb-3"><?= $lang ["Contact Us"];?></h1>
                                    <p class="lead"><?= $lang ["Want to know more? You can interact with us through the platform provided below. Warm greetings from us Faculty of Mathematics and Natural Sciences, University of Tanjungpura."];?></p>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col-md-4 col-lg-4 text-center">
                                    <!-- Visit Box -->
                                    <div class="icon-box mb-4">
                                        <div class="icon icon-shape shadow-soft border-light rounded-circle mb-4">
                                            <span class="fas fa-map-marker-alt"></span>
                                        </div>
                                        <h2 class="h5 icon-box-title"><?= $lang ["Visit us"];?></h2>
                                        <span>
                                            JL. Prof. Dr. H. Hadari Nawawi
                                            <br>
                                            Kode Pos: 78124
                                        </span>
                                    </div>
                                    <!-- End of Visit Box -->
                                </div>
                                <div class="col-md-4 col-lg-4 text-center">
                                    <!-- Call Box -->
                                    <div class="icon-box mb-4">
                                        <div class="icon icon-shape shadow-soft border-light rounded-circle mb-4">
                                            <span class="fa fa-globe"></span>
                                        </div>
                                        <h2 class="h5 icon-box-title">Website</h2>
                                        <a href="https://mipa.untan.ac.id" target="blank">mipa.untan.ac.id</a>
                                    </div>
                                    <!-- End of Call Box -->
                                </div>
                                <div class="col-md-4 col-lg-4 text-center">
                                    <!-- Email Box -->
                                    <div class="icon-box mb-4">
                                        <div class="icon icon-shape shadow-soft border-light rounded-circle mb-4">
                                            <span class="far fa-paper-plane"></span>
                                        </div>
                                        <h2 class="h5 icon-box-title">Email</h2>
                                        <a href="">info@fmipa.untan.ac.id</a>

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
                        <p class="font-weight-normal font-small mb-0">Copyright © SISTEM INFORMASI FMIPA UNTAN
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

    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="./assets/datatable/datatables-demo.js"></script>

    <!-- Neumorphism JS -->
    <script src="./assets/js/neumorphism.js"></script>
</body>


</html>