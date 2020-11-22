<?php 
if(!isset($_SESSION['loginTime'])){ 
	header( "refresh:0;url=login.php" );
}else{	

} ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  </head>

  <body>
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
                    <a class="nav-link " href="cart.php">
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

	<?php if(isset($_GET['message']) and $_GET['message']=="success"){ 
	?>
	<div class="bg-white pb-1">
		<div class="col-12 alert alert-warning" style="border-radius:0px">
			Berhasil Dihapus!
		</div>	
	</div>
	<?php } ?>
	<?php if(isset($_GET['message']) and $_GET['message']=="gagal"){ 
	?>
	<div class="bg-white pb-1">
		<div class="col-12 alert alert-danger" style="border-radius:0px">
			Gagal Dihapus!
		</div>	
	</div>
	<?php } ?>
    <div class="container" style="margin-top:100px;">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Harga</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>

            <tbody>
				<?php 
				include 'connection.php';
				$user_id = $_SESSION['user_id'];
				$query = mysqli_query($koneksi,"SELECT * FROM `cart` WHERE user_id='$user_id'");
				$no=1;
				$total=0;
				while($display = mysqli_fetch_array($query)){
					$total+=$display['harga'];
				?>
                <tr>
                    <th scope="row"><?= $no++ ?></th>
                    <td><?= $display['nama_barang'] ?></td>
                    <td>Rp. <?= number_format($display['harga']) ?></td>
                    <td><a href="cart_function.php?aksi=hapus&id=<?= $display['id'] ?>" class="btn btn-danger">Hapus</a></td>
                </tr>
				<?php } ?>
            </tbody>

            <thead>
                <tr>
                    <th rowspan="5">Total</th>
                    <th ></th>
                    <th scope="col">Rp. <?= number_format($total) ?></th>
                    <th ></th>
                </tr>
            </thead>
    </table>
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