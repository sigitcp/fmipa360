<?php
include '../AdminControllers/Db.php';



function create($data){
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $luas = htmlspecialchars($data["luas"]);
    $kapasitas = htmlspecialchars($data["kapasitas"]);
    $denah = upload();
      if(!$denah ){
        return false;
    }


    $query = "INSERT INTO siskom VALUES ('','$nama', '$luas', '$kapasitas', '$denah')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
function upload(){
  $namaFile = $_FILES['denah']['name'];
  $ukuranFile = $_FILES['denah']['size']; 
  $error = $_FILES['denah']['error'];
  $tmpName = $_FILES['denah']['tmp_name'];

    if( $error === 4) { 
      echo "<script>
      alert('pilih gambar denah terlebih dahulu!');
      </script>";
      return false;
    }

    $ekstensiValid = ['jpg', 'jpeg', 'png', 'gif'];
    $ekstensiDenah = explode('.',$namaFile);
    $ekstensiDenah = strtolower (end ($ekstensiDenah)); 
    if(!in_array($ekstensiDenah, $ekstensiValid)) {
      echo "<script>
            alert('yang anda upload bukan gambar!');
            </script>";
      return false;
      }
    
    if( $ukuranFile > 10000000){
      echo "<script>
            alert('ukuran file terlalu besar, minimal 10mb');
            </script>";
      return false;
    }
    $namaFileNew = uniqid();
    $namaFileNew .= '.';
    $namaFileNew .= $ekstensiDenah;
     
    move_uploaded_file($tmpName, '../assets/img/denah/'.$namaFileNew);
    return $namaFileNew;
}


function edit($data){
  global $conn;
  $id = $data["id"];
  $nama = htmlspecialchars($data["nama"]);
  $luas = htmlspecialchars($data["luas"]);
  $kapasitas = htmlspecialchars($data["kapasitas"]);
  $denahLama = htmlspecialchars($data["denahLama"]);

  if( $_FILES['denah']['error'] === 4 ) {
    $denah = $denahLama;
    } else {
    $denah = upload();
    }


  $query = "UPDATE siskom SET nama = '$nama', luas = '$luas', kapasitas = '$kapasitas', denah = '$denah'WHERE id = $id";


  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function delete($id){
  global $conn;
  mysqli_query($conn, "DELETE FROM siskom WHERE id = $id");
  return mysqli_affected_rows($conn);
}


function query($query) {
  global $conn;
  $result = mysqli_query ($conn, $query);
  $rows = [];
  while( $row = mysqli_fetch_assoc($result) ) {
      $rows[] = $row;
  }
  return $rows;
}

if( isset($_POST["edit"]) ) {

    if( edit($_POST) > 0 ){
        echo "<script>
                alert('Data Berhasil Ditambahkan!');
                document.location.href = '../admin/siskom.php';
              </script>";
     } else {
        echo "<script>
        alert('Data Gagal Ditambahkan!');
        document.location.href = '../admin/siskom.php';
      </script>";
    }
 
}

if( isset($_POST["create"]) ) {

  if( create($_POST) > 0 ){
      echo "<script>
              alert('Data Berhasil Ditambahkan!');
              document.location.href = '../admin/siskom.php';
            </script>";
   } else {
      echo "<script>
      alert('Data Gagal Ditambahkan!');
      document.location.href = '../admin/siskom.php';
    </script>";
  }

}


$siskom = query("SELECT * FROM siskom");



?>
