<?php
include './UserControllers/Db.php';



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

if( isset($_POST["search"])) {
    $gedungbaru = search($_POST["keyword"]);
}



function search($keyword){
  $query = "SELECT * FROM gedungbaru WHERE nama LIKE '%$keyword%'";

  return query($query);
}
?>