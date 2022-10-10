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



?>
