<?php
session_start();
if( !isset($_SESSION["login"])){
    header("location: login.php");
    exit;
}

require '../AdminControllers/DashboardControllers.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - Denah Fmipa</title>
    <link href="../css/styles.css" rel="stylesheet" />

    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous">
    </script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-white">
        <a class="navbar-brand text-gray" href="index.html"><img src="../assets/img/Lambang_Universitas_Tanjungpura.png"
                width="Logo"> FMIPA 360</a>
        <!-- <button class="btn btn-primary " id="sidebarToggle" href="#!"><i class="fa fa-bars"></i></button> -->
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav" class="card bg-primary shadow-soft border-light">
            <nav class="sb-sidenav accordion " id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Ruangan Fakultas MIPA</div>
                        <a class="nav-link" href="index.php">
                            <button type="button" class="btn shadow-inset btn-primary btn-block" tabindex="0"><span
                                    class="fas fa-university mr-2"></span>Dashboard</button>
                        </a>
                        <div class="card shadow-inset bg-primary border-light">
                            <div class="sb-sidenav-menu-heading">Denah Ruangan</div>
                            <a class="nav-link" href="gedungbaru.php">
                                <button type="button" class="btn btn-primary btn-block" tabindex="0"><span
                                        class="fas fa-map-signs mr-2"></span>Gedung Baru</button>
                            </a>
                            <a class="nav-link" href="gedunglama.php">
                                <button type="button" class="btn btn-primary btn-block" tabindex="0"><span
                                        class="fas fa-map-signs mr-2"></span>Gedung Lama</button>
                            </a>
                            <a class="nav-link" href="biotek.php">
                                <button type="button" class="btn btn-primary btn-block" tabindex="0"><span
                                        class="fas fa-map-signs mr-2"></span>Biotek</button>
                            </a>
                            <a class="nav-link" href="siskom.php">
                                <button type="button" class="btn btn-primary btn-block" tabindex="0"><span
                                        class="fas fa-map-signs mr-2"></span>Siskom</button>
                            </a>
                        </div>
                    </div>
                </div>
                <a class="sb-sidenav-footer" href="Logout.php">
                    <button class="btn btn-pill btn-primary" type="button">
                        log out
                        <span class="ml-1"><span class="fas fa-power-off text-danger"></span>
                    </button>
                </a>
            </nav>
        </div>


        <!-- ---------------------------------------------------------------------------------------------------------- -->

        <div id="layoutSidenav_content">
            <div class="container-fluid">

                <div class="card mb-0">
                    <div class="card-body">
                        <h1 class="mt-4">Dashboard</h1>

                        <div class="card-group">
                            <div class="card shadow-inset">

                                <div class="card-body">
                                    <h5 class="card-title display-5 text-info">Ruangan Gedung Baru</h5>
                                    <p class="card-text display-2 text-center text-success">23<span
                                            class="text-danger font-small"> Ruangan</span></p>
                                </div>

                            </div>
                            <div class="card shadow-inset">

                                <div class="card-body">
                                    <h5 class="card-title display-5 text-info">Ruangan Gedung Lama</h5>
                                    <p class="card-text display-2 text-center text-success">23<span
                                            class="text-danger font-small"> Ruangan</span></p>
                                </div>

                            </div>
                            <div class="card shadow-inset">

                                <div class="card-body">
                                    <h5 class="card-title display-5 text-info">Ruangan Biotek</h5>
                                    <p class="card-text display-2 text-center text-success">23<span
                                            class="text-danger font-small"> Ruangan</span></p>
                                </div>

                            </div>
                        </div>

                        <div class="card shadow-inset mt-2">
                            <div class="card-body">
                                <h3 class="mt-4">Gedung Baru</h3>
                                <div class="responsive" class="row justify-content-center">
                                    <table class="table shadow-soft rounded" id="gbr" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Nama ruangan</th>
                                                <th>Luas</th>
                                                <th>Kapasitas</th>
                                                <th>Foto denah</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php foreach( $gedungbaru as $gbr ) : ?>
                                            <tr>
                                                <td><?= $gbr ["nama"];?></td>
                                                <td><?= $gbr ["luas"];?><span> m</span><sup>2</sup></td>
                                                <td><?= $gbr ["kapasitas"];?><span> Orang</span></td>
                                                <td><img src="../assets/img/denah/<?= $gbr ["denah"]; ?>" width="70">
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="card shadow-inset mt-2">
                            <div class="card-body">
                                <h3 class="mt-4">Gedung Lama</h3>
                                <div class="responsive" class="row justify-content-center">
                                    <table class="table shadow-soft rounded" id="glm" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Nama ruangan</th>
                                                <th>Luas</th>
                                                <th>Kapasitas</th>
                                                <th>Foto denah</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php foreach( $gedunglama as $glm ) : ?>
                                            <tr>
                                                <td><?= $glm ["nama"];?></td>
                                                <td><?= $glm ["luas"];?><span> m</span><sup>2</sup></td>
                                                <td><?= $glm ["kapasitas"];?><span> Orang</span></td>
                                                <td><img src="../assets/img/denah/<?= $glm ["denah"]; ?>" width="70">
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="card shadow-inset mt-2">
                            <div class="card-body">
                                <h3 class="mt-4">Gedung Biotek</h3>
                                <div class="responsive" class="row justify-content-center">
                                    <table class="table shadow-soft rounded" id="bio" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Nama ruangan</th>
                                                <th>Luas</th>
                                                <th>Kapasitas</th>
                                                <th>Foto denah</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php foreach( $biotek as $bio ) : ?>
                                            <tr>
                                                <td><?= $bio ["nama"];?></td>
                                                <td><?= $bio ["luas"];?><span> m</span><sup>2</sup></td>
                                                <td><?= $bio ["kapasitas"];?><span> Orang</span></td>
                                                <td><img src="../assets/img/denah/<?= $bio ["denah"]; ?>" width="70">
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="card shadow-inset mt-2">
                            <div class="card-body">
                                <h3 class="mt-4">Gedung Siskom</h3>
                                <div class="responsive" class="row justify-content-center">
                                    <table class="table shadow-soft rounded" id="sis" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Nama ruangan</th>
                                                <th>Luas</th>
                                                <th>Kapasitas</th>
                                                <th>Foto denah</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php foreach( $siskom as $sis ) : ?>
                                            <tr>
                                                <td><?= $sis ["nama"];?></td>
                                                <td><?= $sis ["luas"];?><span> m</span><sup>2</sup></td>
                                                <td><?= $sis ["kapasitas"];?><span> Orang</span></td>
                                                <td><img src="../assets/img/denah/<?= $sis ["denah"]; ?>" width="70">
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>




            <!-- --------------------------------------------------------------------------------------------------------- -->
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2020</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="../js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="../assets/datatable/datatables-demo.js"></script>
</body>

</html>