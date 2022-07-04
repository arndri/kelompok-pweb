<?php
include "config.php";
$sql = "CREATE TABLE IF NOT EXISTS komentar (
    username VARCHAR(20) NOT NULL PRIMARY KEY,
    komentar TEXT NOT NULL
  )";
if(isset($_POST['submit'])){
  $username=mysqli_real_escape_string($conn,$_POST['username']);
  $komentar=mysqli_real_escape_string($conn,$_POST['komentar']);
  $sql="INSERT INTO komentar(username,komentar) VALUES('$username','$komentar')";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

if ($conn->query($sql) === TRUE) {
  header('Location: tampilan_komentar.php');
} else {
  echo "Error creating table: " . $conn->error;
}

mysqli_close($conn);
?>
