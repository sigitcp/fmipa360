<?php
include '../AdminControllers/Db.php';

function query($query) {
    global $conn;
    $result = mysqli_query ($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
  }

$gedungbaru = query("SELECT * FROM gedungbaru");
$gedunglama = query("SELECT * FROM gedunglama");
$biotek = query("SELECT * FROM biotek");
$siskom = query("SELECT * FROM siskom");

$totalgbr = mysqli_query($conn, "SELECT * FROM gedungbaru");
$countgbr = mysqli_num_rows($totalgbr);

$totalglm = mysqli_query($conn, "SELECT * FROM gedunglama");
$countglm = mysqli_num_rows($totalglm);

$totalbio = mysqli_query($conn, "SELECT * FROM biotek");
$countbio = mysqli_num_rows($totalbio);

$totalsis = mysqli_query($conn, "SELECT * FROM siskom");
$countsis = mysqli_num_rows($totalsis);



?>
