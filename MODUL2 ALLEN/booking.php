<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title></title>
  
</head>

<body>
<ul class="nav justify-content-center bg-dark">
    <li class="nav-item">
      <a class="nav-link" href="home.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link  active" href="booking.php">Booking</a>
    </li>

  </ul>
  <br>

  
  <div class="container">
    <div class="row">
      <div class="col-6">
        <form action="my_booking.php" metohd="get">
          <div class="form-group">
            <label for="exampleFormControlInput1">Name</label>
            <input type="name" class="form-control" id="exampleFormControlInput1" name="nama">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Check in</label>
            <input type="date" class="form-control" id="exampleFormControlInput1" name="tanggal">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Duration</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" name="durasi">
            <small id="passwordHelpBlock" class="form-text text-muted">
              Days(s)
            </small>
          </div>
          <?php
          if (isset($_GET['tipe'])) {
            echo '
				<div class="form-group">
					<label for="exampleFormControlSelect1">Room type</label>
				';

            echo '<input class="form-control" type="text" name="tipe" value="' . $_GET['tipe'] . '" readonly>';

            echo '
				</div>
				';
          } else {
            echo '
				<div class="form-group">
					<label for="exampleFormControlSelect1">Room type</label>
					<select class="form-control" id="exampleFormControlSelect1" name="tipe">
						<option value="Standard">Standard</option>
						<option value="Superior">Superior</option>
						<option value="Luxury">Luxury</option>
					</select>
				</div>
				';
          }
          ?>

          <div class="form-check">
            Add Services<br>
            <small id="passwordHelpBlock" class="form-text text-muted">
              $20/Service
            </small>
            <input class="form-check-input" type="checkbox" value="Room Service" id="defaultCheck1" name="service[]">
            <label class="form-check-label" for="defaultCheck1">
              Room Service
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="Breakfast" id="defaultCheck1" name="service[]">
            <label class="form-check-label" for="defaultCheck2">
              Breakfast
            </label>
          </div>
          <br>
          <div class="form-group">
            <label for="exampleFormControlInput1">Phone Number</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="hp">
          </div>
          <button type="submit" class="btn btn-primary btn-lg btn-block">Book</button>
        </form>
      </div>
      <div class="col-6">
      <?php if (empty($_GET['tipe'])) {?>
              <div class="d-flex justify-content-center align-item-center">
                  <img src="standard.jpg" class="img-fluid" alt="Responsive image">
                </div>
            <?php }else{ ?>
              <div> 
                <img src="<?php echo $_GET ['tipe'] ?>.jpg" alt="" width="600px"> 
              </div>
            <?php } ?> 
     
 
      </div>
    </div>
  </div>
  






  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>