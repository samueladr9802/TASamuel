<?php
    session_start();

    include 'koneksi.php';
 
    // menangkap data yang dikirim dari form login
    $username = $_POST['usrnm'];
    $password = md5($_POST['pwd']);
 
    // menyeleksi data pada tabel admin dengan username dan password yang sesuai
    $data = mysqli_query($conn, "SELECT * FROM table_user WHERE username='$username' and password_user='$password'");
 
    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);
 
    if($cek > 0){
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location:../dashboard/index.html");
    }
    else{
        header("location: ../index.php?p=login-failed");
    }

?>