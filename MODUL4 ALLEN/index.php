<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <?php
  session_start();
  if (!isset($_SESSION['loginTime'])) {
    header("refresh:0;url=login.php");
  } else {
  } ?>
  <title></title>
</head>

<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-<?= $_COOKIE['warna'] ?>">
        
        <a class="navbar-brand" href="index.php">
            WAD Beauty
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="cart.php">
                         Selamat datang, <font color="#4594FF"><?= $_SESSION['nama']; ?></font>
                    </a>
                </li> 
                <li class="nav-item dropdown active">
			    	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        
                    </a>
			        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
			        	<a class="dropdown-item" href="profile.php">Profile</a>
			          	<div class="dropdown-divider"></div>
			          	<a class="dropdown-item" href="logout.php">Log Out</a>
			        </div>
		     	</li>
	    
            </ul>
        </div>

    </nav>
    <!-- alert -->
<?php if (isset($_GET['message']) and $_GET['message'] == "success") {
?>
  <div class="bg-white pb-1">
    <div class="col-12 alert alert-warning" style="border-radius:0px">
      Berhasil Ditambahkan!
    </div>
  </div>
<?php } ?>
<?php if (isset($_GET['message']) and $_GET['message'] == "gagal") {
?>
  <div class="bg-white pb-1">
    <div class="col-12 alert alert-danger" style="border-radius:0px">
      Gagal Ditambahkan!
    </div>
  </div>
<?php } ?>

<body> <br>

  <div class="container justify-content-center">
    <div class="card" style="width: 60rem;">
      <ul class="list-group list-group-flush">
        <li class="list-group-item" style="width: 58rem; background: -webkit-linear-gradient(bottom, #9BE8B6, #ABEFFF);">
          <center>
            <h2>WAD BEAUTY</h2><br>
            <h5>Tersedia skin care dengan harga murah tapi bukan murahan dan berkualitas</h5>
          </center>
        </li>
        <li class="list-group-item">
          <div class="card-group">
            <div class="card">
              <img src="1.jpg" class="card-img-top" alt="Garnier">
              <div class="card-body">
                <h5 class="card-title">Garnier Men Turbolight Oil Control Matcha</h5>
                <p class="card-text">Sabun pembersih wajah pertama untuk pria dengan ekstrak matcha yang mengandung 100x kandungan antioksidan Matcha dibandingkan dengan the hijau cina biasa.</p>
                <hr>
                <p class="card-text">Rp. 27.000</p>
              </div>
              <div class="card-footer">
                <center> <a href="cart_function.php?aksi=tambah&nama_barang=Garnier%20Men%20Turbolight%20Oil%20Control%20Matcha&harga=27000" class="card-link btn btn-primary" role="button" style="width: 15rem;">
                    Tambahkan Ke Keranjang
                  </a>
                  <center>
              </div>
            </div>
            <div class="card">
              <img src="2.jpg" class="card-img-top" alt="Biore">
              <div class="card-body">
                <h5 class="card-title">Mens Biore Double Scrub Anti Bacterior</h5>
                <p class="card-text">Mengandung Deep Fighting Scrub dan Tea Tree & Oil Absorber Red Scrub dengan formula Antibacterial, bersihkan kulit yang mudah berjerawat.</p>
                <hr>
                <p class="card-text">Rp. 22.000</p>
              </div>
              <div class="card-footer">
                <center> <a href="cart_function.php?aksi=tambah&nama_barang=Mens%20Biore%20Double%20Scrub%20Anti%20Bacterior&harga=22000" class="card-link btn btn-primary" role="button" style="width: 15rem;">
                    Tambahkan Ke Keranjang
                  </a>
                  <center>
              </div>
            </div>
            <div class="card">
              <img src="3.jpg" class="card-img-top" alt="Ponds">
              <div class="card-body">
                <h5 class="card-title">Ponds Men Energy Charge Face Wash</h5>
                <p class="card-text">POND'S MEN Energy Charge Face Wash Pembersih wajah dari POND’S MEN untuk mengatasi wajah kusam dan lelah. Dapat menjaga wajah tetap sehat, tampak cerah dan aktif!</p>
                <hr>
                <p class="card-text">Rp. 30.000</p>
              </div>
              <div class="card-footer">
                <center> <a href="cart_function.php?aksi=tambah&nama_barang=Ponds%20Men%20Energy%20Charge%20Face%20Wash&harga=30000" class="card-link btn btn-primary" role="button" style="width: 15rem;">
                    Tambahkan Ke Keranjang
                  </a>
                  <center>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>





  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>