<?php
require '../AdminControllers/Db.php';

if (isset($_POST['login'])) {
    global $conn;
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query(
        $conn,
        "SELECT * FROM users WHERE username = '$username'"
    );

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);

        if (password_verify($password, $row['password'])) {
            //session
            $_SESSION['login'] = true;

            header('location: index.php');

            exit();
        }
    }

    $error = true;
}

?>