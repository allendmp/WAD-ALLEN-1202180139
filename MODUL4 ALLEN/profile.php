<?php 
session_start();
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

    <!-- alert -->
	<?php if(isset($_GET['message']) and $_GET['message']=="success"){ ?>
	<div class="bg-white pb-1">
		<div class="col-12 alert alert-warning" style="border-radius:0px">
			Berhasil di update!
		</div>	
	</div>
	<?php } ?>
	<?php if(isset($_GET['message']) and $_GET['message']=="gagal"){ ?>
	<div class="bg-white pb-1">
		<div class="col-12 alert alert-danger" style="border-radius:0px">
			Gagal di update!
		</div>	
	</div>
    <?php } ?>
    <div class="container">
    <div id="card"> 
        <h2 style="text-align:center"> Profile </h2> <hr>
       
            <div id="card-content">
                <form action="profile_function.php" method="POST">
                    <fieldset disabled>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input name="email" type="email" class="form-control" id="email" placeholder="Email" value="<?= $_SESSION['email']; ?>">
                        </div>
                    </fieldset>

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input name="nama" type="text" class="form-control" id="nama" placeholder="Nama" value="<?= $_SESSION['nama']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="no_hp">No.Handphone</label>
                        <input name="no_hp" type="text" class="form-control" id="no_hp" placeholder="No. Hp" value="<?= $_SESSION['no_hp']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="password">Kata Sandi</label>
                        <input name="password" type="password" onchange="return konfirmasi_password()" class="form-control" id="password" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="password">Konfirmasi Kata Sandi <font color="#A00" id="pesan"></font></label>
                        <input name="password2" type="password" onchange="return konfirmasi_password()" class="form-control" id="password2" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="warna">Warna Navbar</label>
                        <select class="custom-select mr-sm-2" name="warna" value="warna" id="inlineFormCustomSelect">
                            <option >Pilih warna navbar</option>
                            <option <?php if($_COOKIE['warna']=="light"){echo "selected";}?> value="light">Light</option>
                            <option <?php if($_COOKIE['warna']=="dark"){echo "selected";}?> value="dark">Dark</option>
                        </select>
                    </div>

                    <div class="form-group" style="margin-left: 0px;">
                        <div class="col-sm-15" > <center>
                            <button class="btn btn-primary" type="submit" style="margin-left: 0px; width: 510px;">
                                  Submit
                            </button>
                            </center>
                        </div>
                    </div> 
                    <div class="form-group" style="margin-left: 0px;">
                        <div class="col-sm-15" > <center>
                            <button class="btn btn-secondary" type="reset" style="margin-left: 0px; width: 510px;">
                                  Cancel
                            </button> </center>
                        </div>
                    </div>
                </form>
                
            </div>
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
	<script>
		function konfirmasi_password(){
			
			var password1 = $('#password').val();
			var password2 = $('#password2').val();
			if(password2){
				if(password1 != password2){
					$('#pesan').html(")*Password tidak sesuai");
					$('#pesan').removeAttr("color").attr("color", "#A00");
					$('#submit').removeAttr("type").attr("type", "button");
				}else{
					$('#pesan').html(")*Password sesuai");
					$('#pesan').removeAttr("color").attr("color", "#0A0");
					$('#submit').removeAttr("type").attr("type", "submit");
				}
			}
		}
		function validate(){
			var password1 = $('#password').val();
			var password2 = $('#password2').val();
			if(password1 != password2){
				alert("Password tidak sesuai!");
			}
		}
	</script>
  </body>
</html>