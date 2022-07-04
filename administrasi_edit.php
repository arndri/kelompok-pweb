<?php
  include "config.php";
  if(isset($_POST['submit'])){
    $pilihan=$_POST['pilihan'];
    $tabel=$_POST['tabel'];
    $username=$_POST['username'];
    $kolom=$_POST['kolom'];
    $data=$_POST['data'];

    if($pilihan =='update'){
      if($tabel=='komentar'){
        $query=mysqli_query("UPDATE komentar SET komentar =  '$data' WHERE username = '$username' ");
      }
      elseif ($tabel=='pesanan') {
        if($kolom!='arrival' and $kolom!='leaving'){
          $query=mysqli_query("UPDATE pesanan SET '$kolom' = '$data' WHERE username = '$username'");
        }

        else {
          $tanggal=strtotime($data);
          $query=mysqli_query("UPDATE pesanan SET '$kolom' = '$tanggal' WHERE username = '$username'");
        }
      }
    }
    elseif ($pilihan='delete') {
      $query=mysqli_query("DELETE FROM '$tabel' WHERE username='$username'")
    }
    header('location: administrasi.php');
  }else{
    echo "Error";
  }
  mysqli_close($conn);
 ?>
