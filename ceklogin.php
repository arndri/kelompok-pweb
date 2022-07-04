<?php
  include "config.php";

  if(isset($_POST['submit'])){
    $username=mysqli_real_escape_string($conn,$_POST['username']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);

    if($username!="" && $password !=""){
      $sql_query="select count(*) as cntUser from pengguna where username='".$username."' and password='".$password."'";
      $result=mysqli_query($conn,$sql_query);
      $row=mysqli_fetch_array($result);

      $count=$row['cntUser'];

      if($count>0){
        $_SESSION['username']=$username;
        header('Location: index.php');
        exit;
      }else{
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
                      <h2 align='center'>Username dan Password Tidak Valid</h2>
                      <h2 align='center'>Ulangi <a href='login.html'>Disini</a></h2>
      			</div>
        			</div>
        		</div>
        		<div id='gambar'>
        			<img src='contoh.jpg'>
        		</div>
        	</div>
        </body>
        </html>";
      }
    }
  }
  else{
    echo "Error";
  }
?>
