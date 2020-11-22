<!doctype html>
<html lang="en">
<?php
session_start();
?>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <title></title>
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: lavender;">
  <a class="navbar-brand text-black" href="home.php">WAD BEAUTY</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="justify-content-end collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link text-black" href="login.php">Login <span class="sr-only"></span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link text-black" href="register.php">Register <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>

<!-- Session buat alart -->

<?php if(isset($_SESSION['message'])){?>
	<div class="bg-white pb-1">
        
		<div class="col-12 alert alert-warning" style="border-radius:0px">
		<?= $_SESSION['message']; ?>
		</div>	
	</div>
        <?php unset($_SESSION['message']); ?>
	<?php } ?>

<?php if(isset($_GET['message']) and $_GET['message']=="success"){ 
	header( "refresh:1;url=index.php" );
	?>
	<div class="bg-white pb-1">
		<div class="col-12 alert alert-warning" style="border-radius:0px">
			Berhasil Login
		</div>	
	</div>
	<?php } ?>
	<?php if(isset($_GET['message']) and $_GET['message']=="gagal"){ ?>
	<div class="bg-white pb-1">
		<div class="col-12 alert alert-danger" style="border-radius:0px">
			Gagal Login
		</div>	
	</div>
  <?php } ?>
  
<br>

<!-- Form buat login -->
<body style="background-color: paleturquoise;">
  <div class="card" style="width: 25rem;  margin: 0 auto">
    <div class="card-body">
      <center>
        <h5 class="card-title">Login</h5>
      </center>
      <p class="card-text">
        <form action="login_function.php" method="POST">
          <div class="form-group">
            <label for="exampleFormControlInput1">Email</label>
            <input type="email" class="form-control" name="email" id="email" value="<?php if(isset($_COOKIE['email'])) {echo $_COOKIE['email'];}?>">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Kata sandi</label>
            <input type="password" class="form-control" name="password" id="password" value="<?php if(isset($_COOKIE['password'])) {echo $_COOKIE['password'];}?>">
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="remember" name="remember">
            <label class="form-check-label" for="remember">
              Remember me
            </label>
        </form>
      </p>
      <center><button type="submit" class="btn btn-primary" name="submit">Login</button> <br>
        Belum punya akun ? <a href="register.php">Registrasi</a> <br></center>
      </center>
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