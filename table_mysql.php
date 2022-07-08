<?php
include "config.php";
$sql = "CREATE TABLE IF NOT EXISTS pengguna (
    id INT(10) NOT NULL PRIMARY KEY,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
    username VARCHAR(20) NOT NULL
  )";
//Ambil Data
$email=mysqli_real_escape_string($conn, $_REQUEST['email']);
$password=mysqli_real_escape_string($conn, $_REQUEST['password']);
$username=mysqli_real_escape_string($conn, $_REQUEST['username']);


$sql = "INSERT INTO pengguna (email,password,username) VALUES ('$email','$password','$username')";
if (mysqli_query($conn, $sql)) {
      echo "<html>
      <head>
      	<link rel='stylesheet' href='login.css'>
      	<link rel='preconnect' href='https://fonts.googleapis.com'>
        <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
        <link href='https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap' rel='stylesheet'>
        <link rel='stylesheet' href='login.css'>
      </head>
      <body>
      	<div id='sign'>
      		<div id='main-sign'>
      			<div id='isi'>
                    <h2 align='center'>Data Sudah Disimpan</h2>
                    <h2 align='center'>Silakan Login <a href='login.html'>Disini</a></h2>
    			</div>
      			</div>
      		</div>
      		<div id='gambar'>
      			<img src='contoh.jpg'>
      		</div>
      	</div>
      </body>
      </html>
";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
