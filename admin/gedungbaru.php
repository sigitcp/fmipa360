<?php
session_start();
if( !isset($_SESSION["login"])){
    header("location: login.php");
    exit;
}

require '../AdminControllers/GedungBaruControllers.php';

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

    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav" class="card bg-primary shadow-soft border-light">
            <nav class="sb-sidenav accordion " id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Ruangan Fakultas MIPA</div>
                        <a class="nav-link" href="index.php">
                            <button type="button" class="btn btn-primary btn-block" tabindex="0"><span
                                    class="fas fa-university mr-2"></span>Dashboard</button>
                        </a>
                        <div class="card shadow-inset bg-primary border-light">
                            <div class="sb-sidenav-menu-heading">Denah Ruangan</div>
                            <a class="nav-link" href="gedungbaru.php">
                                <button type="button" class="btn shadow-inset btn-primary btn-block" tabindex="0"><span
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
                <a class="sb-sidenav-footer" href="">
                    <!-- <button class="btn btn-pill btn-primary" type="button">
                        log out
                        <span class="ml-1"><span class="fas fa-power-off text-danger"></span>
                    </button> -->
                </a>
            </nav>
        </div>


        <!-- ---------------------------------------------------------------------------------------------------------- -->


        <div id="layoutSidenav_content">
            <div class="container-fluid">
                <div class="card mb-4">
                    <div class="card-body">
                        <h1 class="mt-0">Gedung Baru</h1>

                        <a class="btn btn-primary text-success mb-3" data-toggle="modal" data-target="#create"
                            type="button"><span class="fa fa-file-upload mr-2"></span>Tambah Data</a>

                        <div class="responsive">
                            <table class="table shadow-soft rounded" id="gbr" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Nama ruangan</th>
                                        <th>Luas</th>
                                        <th>Kapasitas</th>
                                        <th>Foto denah</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php foreach( $gedungbaru as $gbr ) : ?>
                                    <tr>
                                        <td><?= $gbr ["nama"];?></td>
                                        <td><?= $gbr ["luas"];?><span> m</span><sup>2</sup></td>
                                        <td><?= $gbr ["kapasitas"];?><span> Orang</span></td>
                                        <td><img src="../assets/img/denah/<?= $gbr ["denah"]; ?>" width="70"></td>
                                        <td>
                                            <a class="btn btn-primary text-danger mr-2"
                                                onclick="return confirm('Anda yakin menghapus data ini?');"
                                                href="../AdminControllers/DeleteGbrController.php?id=<?= $gbr["id"];?>"
                                                type="button"><span class="fas fa-trash mr-2"></span>Delete</a>

                                            <a class="btn btn-primary text-info" data-toggle="modal"
                                                data-target="#modaledit<?= $gbr ["id"];?>"><span
                                                    class="fas fa-edit mr-2"></span>Edit</a>
                                        </td>
                                    </tr>

                                    <!-- modal edit -->
                                    <div class="modal" tabindex="-1" role="dialog" id="modaledit<?= $gbr ["id"];?>">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit denah gedung baru</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">

                                                    <form action="" method="post" enctype="multipart/form-data">

                                                        <input type="hidden" name="id" value="<?= $gbr ["id"];?>">
                                                        <input type="hidden" name="denahLama"
                                                            value="<?= $gbr ["denah"];?>">
                                                        <div class="form-group">
                                                            <label class="small mb-1" for="nama">Nama Ruangan</label>
                                                            <input class="form-control py-4" id="nama" name="nama"
                                                                type="text" placeholder="Nama Ruangan" required
                                                                value="<?= $gbr["nama"]; ?>" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="small mb-1" for="luas">Luas Ruangan
                                                                (m</span><sup>2</sup>)</label>
                                                            <input class="form-control py-4" id="luas" name="luas"
                                                                type="number" placeholder="Luas Ruangan"
                                                                value="<?= $gbr["luas"]; ?>" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="small mb-1" for="kapasitas">Kapasitas Ruangan
                                                                (orang)</label>
                                                            <input class="form-control py-4" id="kapasitas"
                                                                name="kapasitas" type="number"
                                                                placeholder="Kapasias Ruangan"
                                                                value="<?= $gbr["kapasitas"]; ?>" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="formFile" class="form-label">Gambar
                                                                Denah</label>
                                                            <img class="btn shadow-inset"
                                                                src="../assets/img/denah/<?= $gbr ["denah"]; ?>" alt="">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="formFile" class="form-label">Upload Gambar Denah
                                                                (jpg, png, gif < 5mb)</label>
                                                                    <input class="form-control" type="file" id="denah"
                                                                        name="denah">
                                                        </div>
                                                        <div class="form-group mt-4 mb-0">
                                                            <button class="btn btn-primary btn-block text-success"
                                                                type="submit" name="edit">edit</button>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end modal edit -->

                                    <?php endforeach; ?>
                                </tbody>
                            </table>
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
    </div>

    <!-- ---------modalcreate------ -->
<div class="modal" tabindex="-1" role="dialog" id="create">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah denah gedung baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="small mb-1" for="nama">Nama Ruangan</label>
                        <input class="form-control py-4" id="nama" name="nama" type="text" placeholder="Nama Ruangan"
                            required />
                    </div>
                    <div class="form-group">
                        <label class="small mb-1" for="luas">Luas Ruangan (m</span><sup>2</sup>)</label>
                        <input class="form-control py-4" id="luas" name="luas" type="number"
                            placeholder="Luas Ruangan" />
                    </div>
                    <div class="form-group">
                        <label class="small mb-1" for="kapasitas">Kapasitas Ruangan (orang)</label>
                        <input class="form-control py-4" id="kapasitas" name="kapasitas" type="number"
                            placeholder="Kapasias Ruangan" />
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Upload Gambar Denah (jpg, png, gif < 5mb)</label>
                                <input class="form-control" type="file" id="denah" name="denah">
                    </div>
                    <div class="form-group mt-4 mb-0">
                        <button class="btn btn-primary btn-block text-success" type="submit"
                            name="create">Create</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="../assets/datatable/datatables-demo.js"></script>
</body>


</html>