<?php

session_start();
if($_POST["captcha_code"] == $_SESSION["captcha_code"]){
    include "koneksi.php";
    $id_user = $_POST['id_user'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $email = $_POST['email'];
    $pass = md5($_POST['password']);
    $pass1 = md5($_POST['konfir_password']);
    $sql = "INSERT INTO user(id_user,password, konfir_password, nama_lengkap, email) VALUES ('$id_user', '$pass', '$pass1', '$nama_lengkap','$email')";
    $query=mysqli_query($con, $sql);
    mysqli_close($con); 
    header('location:tampil_user.php');
}
else {
    echo "<center> Captcha tidak sesuai <br>";
    echo "<a href=form_user.php><b>ULANGI LAGI  </b></a></center>";
}

?>