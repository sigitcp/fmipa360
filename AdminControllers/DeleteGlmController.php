<?php
require '../AdminControllers/GedungLamaControllers.php';

$id = $_GET["id"];


if( delete($id) > 0 ) {
     echo "<script>
                alert('Data Berhasil Dihapus!');
                document.location.href = '../admin/gedunglama.php';
              </script>";
     } else {
        echo "<script>
        alert('Data Gagal Dihapus!');
        document.location.href = '../admin/gedunglama.php';
      </script>";
}



?>