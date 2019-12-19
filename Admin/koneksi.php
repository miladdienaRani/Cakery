<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "akucakery";

error_reporting(0);
$conn = mysqli_connect($host, $user, $pass) or die ("Koneksi database gagal!");

mysqli_select_db($conn, $db) or die ("Database belum ada, Import database.");

session_start();

?>