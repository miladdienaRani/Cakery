<?php
include "koneksi.php";

    /*if(isset($_GET['pesan'])) {
        if($_GET['pesan'] == "gagal") {
            echo "Login gagal! Username atau password salah <br/>";
        } else if($_GET['pesan'] == "logout") {
            echo "Anda telah berhasil logout <br/>";
        } else if($_GET['pesan'] == "belum_login") {
            echo "Anda harus login dahulu <br/>";
        }
    }*/

    $user = $_POST['email'];
    $pass = md5($_POST['password']);
    $q1 = "select * from login where email='$user' and password='$pass'";
    $data = mysqli_query($conn, $q1);

    $cek = mysqli_num_rows($data);
    $q2 = mysqli_fetch_array($data);

    if($cek > 0){
        $_SESSION['user'] = $user;
        $_SESSION['status'] = 1;

        if($q2[level] == 'admin') {
            header("location:../index.php");
        } else if ($q2[level] == 'seller') {
            header("location:../Admin/index.html");
        } else {
            header("location:../Shop/shop.php");
        }
        
    }
    //if(isset($_SESSION['user'])) {
    //    $_SESSION['status'] = "login";
    //} 
    else {
        echo "<script>alert('Login Gagal! Username atau Password Salah.')</script>";
        echo "<meta http-equiv='refresh'content='0;url=page-login.html'>";
    }
?>