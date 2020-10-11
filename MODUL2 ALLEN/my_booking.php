<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title></title>
    <ul class="nav justify-content-center bg-dark">
    <li class="nav-item">
      <a class="nav-link" href="home.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link  active" href="booking.php">Booking</a>
    </li>

  </ul>
  <br>
  </head>
  <body>
  
    <?php
    $nama = $_POST['nama'];
    $durasi = $_POST['durasi'];
    $tanggal = $_POST['tanggal'];
    $tipe = $_POST['tipe'];
    $services = isset($_POST['service']) ? $_POST['service'] : "no service";
    $hp = $_POST['hp'];
    $checkout = date('d/m/Y', strtotime($tanggal . ' + '. $durasi .' days'));
    $tanggal = date('d/m/Y', strtotime($tanggal));

    if( $tipe == "Standard" ){
        $harga = 90;
    } elseif($tipe == "Superior"){
        $harga = 150;
    } else if($tipe == "Luxury"){
        $harga = 200;
    }
$harga = $harga*$durasi;
    if ($services != "no service");{
        foreach ($services as $value){
            $harga = $value + (20 * $durasi);
        }
    }
    ?>

    <div class="container">
        <h2 style="text-align: center;"></h2>
        <fieldset>
            <table class="table" >
                <tr>
                    <th>Booking Number</th>
                    <th>Name</th>
                    <th>Check-in</th>
                    <th>Check-out</th>
                    <th>Room Type</th>
                    <th>Phone Number</th>
                    <th>Services</th>
                    <th>Total Price</th>
                </tr>
                <tr>
                <td> <?php (rand(1000,9999)); ?></td>
                <td> <?php echo $nama ?> </td>
                <td> <?php echo $tanggal ?> </td>
                <td> <?php echo $checkout ?> </td>
                <td> <?php echo $tipe ?> </td>
                <td> <?php echo $hp ?> </td>
                <td> <?php
							if ($services == "no service") {
								echo($services);
							}
							else {
								echo '<ul>';
								foreach ($services as $value){
									echo '<li>'. $value .'</li>';
								}
								echo '</ul>';
							}
							
						?> </td>
                <td> <?php echo $harga; ?> </td>
                </tr>
            </table>
        </fieldset>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>