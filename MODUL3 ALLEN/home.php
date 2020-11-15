<?php
include('config.php');
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title></title>

</head>

<body>

    <title></title>
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: cornflowerblue;">
        <a class="navbar-brand text-white" href="home.php">EAD EVENTS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="justify-content-end collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="home.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a href="buat.php" role="button" class="btn btn-outline-light my-2 my-sm-0">Buat Event</a>
                </li>
            </ul>
        </div>
    </nav>
    <h3 style="text-align:center; color:cornflowerblue">WELCOME TO EAD EVENTS!</h3>

    <div class="container">

        <?php
        $data = mysqli_query($conn, "SELECT * FROM event_table");
        if (mysqli_num_rows($data) == 0) { ?>
            <div class=" d-flex justify-content-center align-items-center">
                <h4>No event found</h4>
            </div>
        <?php } ?>

        <div class="row">
            <?php while ($display = mysqli_fetch_assoc($data)) { ?>

                <div class="col-md">
                    <div class="card" style="width: 18rem;">
                        <img width="150" height="250" src="foto/<?php echo $display['gambar'] ?>" class="card-img-top img-poster" alt="">
                        <div class="card-body">
                            <h3> <?php echo $display['name']; ?> </h3>
                            <p class="card-text">
                                <p><?php echo $display['tanggal']; ?></p>
                                <p><?php echo $display['tempat']; ?></p>
                                <p> Kategori : <?php echo $display['kategori']; ?></p>
                            </p>
                        </div>

                        <div class="card-footer bg-transparent">
                            <a href="detail.php?id=<?= $display['id']; ?>">
                                <p style="text-align: center;"><button type="button" class="btn btn-primary"> Lihat Detail</button></p>
                            </a>
                        </div>

                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>