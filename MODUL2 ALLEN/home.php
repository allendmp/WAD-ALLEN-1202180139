<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title></title>
    <ul class="nav justify-content-center bg-dark" >
  <li class="nav-item">
    <a class="nav-link active" href="home.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="booking.php">Booking</a>
  </li>

</ul>

  </head>
  
  <body>
      <h4 style="text-align:center; color:dodgerblue" >EAD HOTEL</h4>
      <h6 style="text-align:center; color:dodgerblue">Welcome to 5 star hotel</h6>

      <div class="container" bac>
        <div class="row">
          <div class="col-sm-4" id="standar">
          <div class="card" style="width: 18rem;">
  <img src="standard.jpg" class="card-img-top" alt="..." width="400px" height="200px">
  <div class="card-body">
  <h5 class="card-text" style="text-align: center;">Standard</h5>
    <h6 class="card-text" style="text-align: center;">$90/day</h6>
    <div class="card-header" style="text-align: center;">
    Facilities
  </div>
  <ul class="list-group list-group-flush" style="text-align: center;">
    <li class="list-group-item">1 Single Bed</li>
    <li class="list-group-item">1 Bathroom</li>
    
  </ul>
  <div class="card-footer" style="text-align: center;">
  <form action="booking.php" method="post">
  
<input type="hidden" value="Standard" name="tipe">
<button class="btn btn-primary">Book now</a>
  </form>
  </div>
  
  </div>
  
          </div>
</div>
<div class="col-sm-4" id="Superior">
<div class="card" style="width: 18rem;">
  <img src="superior.jpg" class="card-img-top" alt="..." width="400px" height="200px">
  <div class="card-body">
    <h5 class="card-text" style="text-align: center;">Superior</h5>
    <h6 class="card-text" style="text-align: center;">$150/day</h6>
    <div class="card-header" style="text-align: center;">
    Facilities
  </div>
  <ul class="list-group list-group-flush" style="text-align: center;">
    <li class="list-group-item">1 Double Bed</li>
    <li class="list-group-item">1 Television and Wi-Fi</li>
    <li class="list-group-item">1 Bathroom with hot water</li>
    
  </ul>
  <div class="card-footer" style="text-align: center;">
  <form action="booking.php" method="post">
  
<input type="hidden" value="Superior" name="tipe">
<button class="btn btn-primary">Book now</a>
  </form>
  </div>
  </div>

  </div>
          </div>

          <div class="col-sm-4" id="Luxury">
<div class="card" style="width: 18rem;">
  <img src="luxury.jpg" class="card-img-top" alt="..." width="400px" height="200px">
  <div class="card-body">
    <h5 class="card-text" style="text-align: center;">Luxury</h5>
    <h6 class="card-text" style="text-align: center;">$200/day</h6>
    <div class="card-header" style="text-align: center;">
    Facilities
  </div>
  <ul class="list-group list-group-flush" style="text-align: center;">
    <li class="list-group-item">2 Double Bed</li>
    <li class="list-group-item">2 Bathroom with hot water</li>
    <li class="list-group-item">1 Kitchen</li>
    <li class="list-group-item">1 Television and Wi-Fi</li>
    <li class="list-group-item">1 Workroom</li>
    
  </ul>
  <div class="card-footer" style="text-align: center;">
  <form action="booking.php" method="post">
  
<input type="hidden" value="Luxury" name="tipe">
<button class="btn btn-primary">Book now</a>
  </form>
  </div>


          </div>
          
</div>

      
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>