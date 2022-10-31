<?php
include './HomeControllers/Db.php';



function query($query) {
  global $conn;
  $result = mysqli_query ($conn, $query);
  $rows = [];
  while( $row = mysqli_fetch_assoc($result) ) {
      $rows[] = $row;
  }
  return $rows;
}

// $jumlahDataPerHalaman = 1;
// $jumlahData = count (query("SELECT * FROM gedungbaru"));
// $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
// $halamanAktif = ( isset($_GET["p"])) ? $_GET["p"] : 1;
// $awalData = ($jumlahDataPerHalaman * $halamanAktif ) - $jumlahDataPerHalaman;

// $gedungbaru = query("SELECT * FROM gedungbaru LIMIT $awalData, $jumlahDataPerHalaman");


// if( isset($_POST["search"])) {
//     $gedungbaru = search($_POST["keyword"]);
// }



// function search($keyword){
//   $query = "SELECT * FROM gedungbaru WHERE nama LIKE '%$keyword%'";

//   return query($query);
// }
$gedungbaru = query("SELECT * FROM gedungbaru");
$gedunglama = query("SELECT * FROM gedunglama");
$biotek = query("SELECT * FROM biotek");
$siskom = query("SELECT * FROM siskom");
?>