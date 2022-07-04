<?php include "config.php";
  $result = mysqli_query($conn,"SELECT * FROM komentar");

  echo "<!DOCTYPE html>
  <html lang='en' dir='ltr'>
    <head>
      <meta charset='utf-8'>
      <title></title>
      <link rel='stylesheet' href='style.css'>
    </head>
    <body>
    <section class='review' id='review'>
    <h1 align='center'> Komentar Customer</h1>
      <div class='swiper-container review-slider'>
          <div class='swiper-wrapper'>
              ";

while($row = mysqli_fetch_array($result)){
  echo"<div class='swiper-slide'><div class='box'><img src='image/profil-sementara.png' alt='profil-img'><h3>"
  . $row['username'] .
  "</h3>"."<p>"
  . $row['komentar'] .
  "</p> </div> </div>";
}
echo "</div>
</div>     </section> ";

mysqli_close($conn);
 ?>
