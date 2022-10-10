<?php
require '../app/Db.php';
function registrasi($data){
    global $conn;
    $username=strtolower(stripslashes($data["username"]));
    $password=mysqli_real_escape_string($conn, $data["password"]);
    $password2=mysqli_real_escape_string($conn, $data["password2"]);

    if( $password !== $password2 ){
    echo "<script>
            alert('konfirmasi password tidak sesuai!');
          </script>";

     return false;
     }
     $password = password_hash ($password,PASSWORD_DEFAULT);
     
     mysqli_query($conn,"INSERT INTO users VALUES('','$username','$password')");

     return mysqli_affected_rows($conn);
}
if( isset($_POST["register"]) ) {

     if( registrasi($_POST) > 1 ){
         echo "<script>
                 alert('user baru berhasil
                    ditambahkan!');
               </script>";
      } else {
           echo mysqli_error($conn);
     }
  
  }
?>