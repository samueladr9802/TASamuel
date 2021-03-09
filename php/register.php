<?php

require_once 'koneksi.php';

$user_name = $_POST['usrnm'];
$psw_user = md5($_POST['pwd']);
$kk_num = $_POST['familycardnumber'];
$ktp_num = $_POST['idnumber'];
$kk_name = $_POST['fullname'];
$phone = $_POST['phone'];

$sql = "INSERT INTO table_user (username, password_user, fc_number, id_number, family_name, phone_number)
VALUES ('$user_name', '$psw_user', $kk_num, $ktp_num, '$kk_name', '$phone')";

if (mysqli_query($conn, $sql)) {
  header("Location: ../index.php?p=success");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>