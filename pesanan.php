<?php
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

$sql = "CREATE TABLE IF NOT EXISTS pesanan ( `username` VARCHAR(20) NOT NULL ,
 `lokasi` VARCHAR(50) NOT NULL ,
  `jumlah` INT(50) NOT NULL ,
   `arrival` DATE NOT NULL ,
   `leaving`DATE NOT NULL )";

if(isset($_POST['submit'])){
  $username=$_POST['username'];
  $lokasi=$_POST['lokasi'];
  $jumlah=$_POST['jumlah'];
  $arrival=$_POST['arrival'];
  $leaving=$_POST['leaving'];

$sql = "INSERT INTO pesanan (username,lokasi,jumlah,arrival,leaving) VALUES ('$username','$lokasi','$jumlah','$arrival','$leaving')";
} else{
  echo "Ambil Data Error";
}
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
                    <h2 align='center'>Pesanan Sudah Disimpan</h2>
                    <h2 align='center'>Kami Akan Mengirim Tagihan ke Email Anda</h2>
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
