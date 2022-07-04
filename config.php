<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data";

//Koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Cek Koneksi
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}

?>
