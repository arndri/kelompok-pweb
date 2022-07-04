<?php
  include "config.php";

  //Check login
  if(!isset($_SESSION['username'])){
    header('Location: index.php');
  }

  if(isset($_POST['logout'])){
    session_destroy();
    header('Location: login.html');
  }
?>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>All Trans</title>
  <script src="https://kit.fontawesome.com/5881a93a4e.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <div id="menu" class="fas fa-bars"></div>
    <a href="#" class="logo"> <span>A</span>llTrans
      <i class="fa-solid fa-person-walking-luggage"></i></a>

    <nav class="navbar">
      <a href="#beranda">Beranda</a>
      <a href="#book">Pesan</a>
      <a href="#paket">Paket</a>
      <a href="#layanan">Layanan</a>
      <a href="#galeri">Galeri</a>
      <a href="#review">Review</a>
      <a href="#kontak">Kontak</a>
    </nav>

    <div class="ikon">
      <i class="fa-solid fa-magnifying-glass" id="search-btn"></i>
      <a href="login.html"><i class="fa-solid fa-user" id="login-btn"></i></a>

    </div>

    <form class="search-container" action="index.html" method="post">
      <input type="search" id="search-bar" placeholder="cari disini">
      <label for="search-bar" class="fa-solid fa-magnifying-glass"></label>
    </form>
  </header>

  <section class="beranda" id="beranda">
    <div class="konten">
      <?php
      $nama=$_SESSION['username'];
      echo "<h3>Hello $nama</h3>";
      ?>
      <h3>Transform your holiday with us.</h3>
      <p>Agen wisata kami akan membawakan pengalaman yang tidak terlupakan untuk Anda.</p>
      <a href="#" class="btn"> Baca Selengkapnya </a>
    </div>
    <div class="kontrol">
      <span class="vid-btn active" data-src="image/bg1.jpg"></span>
      <span class="vid-btn active" data-src="image/bg2.jpg"></span>
      <span class="vid-btn active" data-src="image/bg3.jpg"></span>
    </div>

    <div class="video-container">
      <img src="image/bg1.jpg" id="slider" alt="tokyo-tower-img">
    </div>
  </section>

  <section class="book" id="book">
    <h1 class="heading">
      <span>p</span>
      <span>e</span>
      <span>s</span>
      <span>a</span>
      <span>n</span>
      <span class="space"></span>
      <span>s</span>
      <span>e</span>
      <span>k</span>
      <span>a</span>
      <span>r</span>
      <span>a</span>
      <span>n</span>
      <span>g</span>
    </h1>
    <div class="row">
      <div class="book-img">
        <i class="fa-solid fa-plane-circle-check"></i>
      </div>
      <form action="pesanan.php" method="post">
        <div class="kotak-input">
          <h3>Username</h3>
          <input type="text" name="username" placeholder="username anda">
        </div>
        <div class="kotak-input">
          <h3>Wisata kemana ?</h3>
          <input type="text" name="lokasi" placeholder="lokasi tujuan">
        </div>
        <div class="kotak-input">
          <h3>Berapa orang ?</h3>
          <input type="number" name="jumlah" placeholder="jumlah orang">
        </div>
        <div class="kotak-input">
          <h3>Arrival</h3>
          <input type="date" name="arrival">
        </div>
        <div class="kotak-input">
          <h3>Leaving</h3>
          <input type="date" name="leaving">
        </div>
        <input type="submit" class="btn" name="submit" value="Pesan Sekarang">
      </form>
    </div>
  </section>

  <section class="paket" id="paket">
    <h1 class="heading">
      <span>p</span>
      <span>a</span>
      <span>k</span>
      <span>e</span>
      <span>t</span>
    </h1>
    <div class="box-container">
      <div class="box">
        <img src="image/jp.jpg" alt="jepang-img">
        <div class="konten">
          <h3> <i class="fa-solid fa-map-location-dot"></i> Tokyo </h3>
          <p> Tokyo memberikan pengalaman kota masa depan yang tidak akan anda temui di tempat lain. </p>
          <div class="bintang">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
          </div>
          <div class="harga">
            Rp. 12.500.000,00 <span> Rp. 14.000.000,00</span>
          </div>
          <a href="#" class="btn">Pesan Sekarang</a>
        </div>
      </div>
      <div class="box">
        <img src="image/bl.jpg" alt="bali-img">
        <div class="konten">
          <h3> <i class="fa-solid fa-map-location-dot"></i> Bali </h3>
          <p> Bali memiliki keindahan alam serta budaya yang sangat menarik. </p>
          <div class="bintang">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
          </div>
          <div class="harga">
            Rp. 5.500.000,00 <span> Rp. 9.000.000,00</span>
          </div>
          <a href="#" class="btn">Pesan Sekarang</a>
        </div>
      </div>
      <div class="box">
        <img src="image/pr.jpg" alt="paris-img">
        <div class="konten">
          <h3> <i class="fa-solid fa-map-location-dot"></i> Paris </h3>
          <p> Paris menawarkan nuansa Eropa serta sejarah yang menarik untuk dipelajari. </p>
          <div class="bintang">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
          </div>
          <div class="harga">
            Rp. 15.500.000,00 <span> Rp. 18.000.000,00</span>
          </div>
          <a href="#" class="btn">Pesan Sekarang</a>
        </div>
      </div>
      <div class="box">
        <img src="image/it.jpg" alt="it-img">
        <div class="konten">
          <h3> <i class="fa-solid fa-map-location-dot"></i> Pisa </h3>
          <p> Pisa dengan menara Miring Pisa yang sangat populer. </p>
          <div class="bintang">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
          </div>
          <div class="harga">
            Rp. 15.500.000,00 <span> Rp. 17.000.000,00</span>
          </div>
          <a href="#" class="btn">Pesan Sekarang</a>
        </div>
      </div>
      <div class="box">
        <img src="image/sy.jpg" alt="sydney-img">
        <div class="konten">
          <h3> <i class="fa-solid fa-map-location-dot"></i> Sydney </h3>
          <p> Sydney merupakan kota di Australia dengan keindahan yang memanjakan mata. </p>
          <div class="bintang">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
          </div>
          <div class="harga">
            Rp. 10.500.000,00 <span> Rp. 11.000.000,00</span>
          </div>
          <a href="#" class="btn">Pesan Sekarang</a>
        </div>
      </div>
      <div class="box">
        <img src="image/mb.jpg" alt="mumbai-img">
        <div class="konten">
          <h3> <i class="fa-solid fa-map-location-dot"></i> Mumbai </h3>
          <p> Mumbai merupakan kota di India dengan keindahan yang memanjakan mata. </p>
          <div class="bintang">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
          </div>
          <div class="harga">
            Rp. 8.500.000,00 <span> Rp. 10.000.000,00</span>
          </div>
          <a href="#" class="btn">Pesan Sekarang</a>
        </div>
      </div>
    </div>
  </section>

  <section class="layanan" id="layanan">
    <h1 class="heading">
      <span>l</span>
      <span>a</span>
      <span>y</span>
      <span>a</span>
      <span>n</span>
      <span>a</span>
      <span>n</span>
    </h1>
    <div class="box-container">
      <div class="box">
        <i class="fa-solid fa-utensils"></i>
        <h3>Makan dan Minum</h3>
      </div>
      <div class="box">
        <i class="fa-solid fa-bed"></i>
        <h3>Penginapan</h3>
      </div>
      <div class="box">
        <i class="fa-solid fa-shield-heart"></i>
        <h3>Keamanan</h3>
      </div>
      <div class="box">
        <i class="fa-solid fa-truck-fast"></i>
        <h3>Travel Cepat dan Nyaman</h3>
      </div>
      <div class="box">
        <i class="fa-solid fa-earth-asia"></i>
        <h3>Layanan di Seluruh Dunia</h3>
      </div>
      <div class="box">
        <i class="fa-solid fa-umbrella-beach"></i>
        <h3>Objek Wisata yang Menarik</h3>
      </div>
    </div>
  </section>

  <section class="galeri" id="galeri">

    <h1 class="heading">
      <span>g</span>
      <span>a</span>
      <span>l</span>
      <span>e</span>
      <span>r</span>
      <span>i</span>
    </h1>

    <div class="box-container">
      <div class="box">
        <img src="image/gal1.jpg" alt="galeri-img">
        <div class="konten">
          <h3>Tempat Indah di Indonesia</h3>
        </div>

      </div>
      <div class="box">
        <img src="image/gal2.jpg" alt="galeri-img">
        <div class="konten">
          <h3>Tempat Indah di Jepang</h3>
        </div>

      </div>
      <div class="box">
        <img src="image/gal3.jpg" alt="galeri-img">
        <div class="konten">
          <h3>Tempat Indah di Eropa</h3>
        </div>

      </div>
    </div>
  </section>

  <section class="review" id="review">
    <h1 class="heading">
        <span>r</span>
        <span>e</span>
        <span>v</span>
        <span>i</span>
        <span>e</span>
        <span>w</span>
    </h1>

    <div class="swiper-container review-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="box">
                    <img src="image/profil-sementara.png" alt="profil-img">
                    <h3>Andri</h3>
                    <p>Pelayanan sangat profesional</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="image/profil-sementara.png" alt="profil-img">
                    <h3>Pratama</h3>
                    <p>Worth it!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="box">
      <h1>Tulis Komentar</h1>
      <form action="komentar.php" method="post">
        <div class="kotak-input">
          <h3>Username</h3>
          <input type="text" name="username" placeholder="username anda">
        </div>
        <div class="kotak-input">
          <h3>Komentar</h3>
          <textarea name="komentar" name="komentar" rows="15" cols="30"></textarea>
        </div>
        <input type="submit" class="btn" name="submit" value="Kirim">
      </form>
      <h3> Lihat Komentar Anda <a href="komentar.php">Disini</a></h3>
    </div>
</section>
</section>

<section class="kontak" id="kontak">
    <h1 class="heading">
        <span>k</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>k</span>
    </h1>
    <div class="row">
        <div class="alamat">
          <i class="fa-solid fa-address-book"></i>
        </div>
        <form>
            <div class="kotak-input">
                <input type="text" placeholder="nama">
                <input type="email" placeholder="email">
            </div>
            <div class="kotak-input">
                <input type="text" placeholder="nomor">
                <input type="text" placeholder="subjek">
            </div>
            <textarea placeholder="pesan" name="" id="" cols="30" rows="10"></textarea>
            <input type="submit" class="btn" value="send message">
        </form>
    </div>
</section>

<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>Tentang Kami</h3>
        </div>
        <div class="box">
            <h3>Lokasi Cabang</h3>
            <a href="#">Indonesia</a>
            <a href="#">USA</a>
            <a href="#">Jepang</a>
            <a href="#">Prancis</a>
        </div>
        <div class="box">
            <h3>quick links</h3>
            <a href="#beranda">Beranda</a>
            <a href="#pesan">Pesan</a>
            <a href="#paket">Paket</a>
            <a href="#layanan">Layanan</a>
            <a href="#galeri">Galeri</a>
            <a href="#review">Review</a>
            <a href="#kontak">Kontak</a>
        </div>
        <div class="box">
            <h3>Follow Kami</h3>
            <a href="#">facebook</a>
            <a href="#">instagram</a>
            <a href="#">twitter</a>
            <a href="#">linkedin</a>
        </div>
    </div>
    <h1 class="credit"> Dibuat oleh <span> Andri Pratama(NIM 2100018249) & Shaluna Fasya Elmina(NIM 2100018229) </span> | all rights reserved! </h1>
</section>
<script src="script.js" type="text/javascript">

</script>
</body>

</html>
