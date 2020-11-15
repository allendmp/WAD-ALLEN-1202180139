<?php
include('config.php');
$query = "SELECT * FROM event_table";
$select = mysqli_query($conn, $query);

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

    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: cornflowerblue;">
        <a class="navbar-brand text-white" href="home.php">EAD EVENTS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="justify-content-end collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="home.php">Home <span class="sr-only"></span></a>
                </li>
                <li class="nav-item active">
                    <a href="buat.php" role="button" class="btn btn-outline-light my-2 my-sm-0">Buat Event</a>
                </li>
            </ul>
        </div>
    </nav>

    <h5 style="text-align:center; color:cornflowerblue;">Buat Event</h5>
    <form action="Create.php" method="get" enctype="multipart/form-data">
    <div class="container mt-5 d-flex justify-content-center">

        <div class="col-6">
                <div class="container">
                    <div class="card">
                        <div class="card-header bg-danger">
                        </div>

                        <div class="card-body">

                            <div class="form-group">
                                <label>Name</label>
                                <input type="name" class="form-control" id="name" name="name">
                            </div>

                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea class="form-control" name="deskripsi" id="deskripsi" value="" action="" cols="35" rows="4"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Upload Gambar</label>
                                <div class="custom-file">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                    <input type="file" class="custom-file-input form-control" id="gambar" name="gambar">
                                </div>
                            </div>


                            <fieldset class="form-group">
                                <label>Kategori</label>
                                <div class="col-sm-6">
                                    <div class="form-check">
                                        <div class="row">
                                            <div class="col-5">
                                                <input class="form-check-input" type="radio" name="kategori[]" id="gridRadios1" value="Online" action="" checked>
                                                <label class="form-check-label" for="online">
                                                    Online
                                                </label>
                                            </div>

                                            <div class="col">
                                                <input class="form-check-input" type="radio" name="kategori[]" id="gridRadios2" value="Offline" action="">
                                                <label class="form-check-label" for="offline">
                                                    Offline
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                        </div>

                    </div>
                </div>
            </div>

            <div class="col-6">

                <div class="container">
                    <div class="card">
                        <div class="card-header bg-primary"></div>
                        <div class="card-body">
                            <div class="form-group ">
                                <label>Tanggal</label>
                                <input class="form-control" type="date" id="" name="tanggal">
                            </div>

                            <div class="form-row">



                                <div class="col-md-6 mb-3">
                                    <label>Jam Mulai</label>
                                    <input type="time" class="form-control" name="mulai" value="mulai" id="inlineFormCustomSelect" style="width: 180px;">

                                </div>

                                <div class="col-md-6 mb-3">
                                    <label>Jam Berakhir</label>
                                    <input type="time" class="form-control" name="berakhir" value="berakhir" id="inlineFormCustomSelect" style="width: 200px;">

                                </div>
                            </div>

                            <div class="form-group ">
                                <label>Tempat</label>
                                <input type="tempat" class="form-control" id="tempat" placeholder="" name="tempat">
                            </div>

                            <div class="form-group ">
                                <label>Harga</label>
                                <input type="harga" class="form-control" id="harga" placeholder="" name="harga">
                            </div>




                            <fieldset class="form-group">
                                <label>Benefit</label>
                                <div class="col-sm-12">
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        <input type="checkbox" class="custom-control-input" value="snacks" id="snacks" name="benefit[]">
                                        <label class="custom-control-label" for="snacks">Snacks</label>
                                    </div>

                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        <input type="checkbox" class="custom-control-input" value="sertifikat" id="sertifikat" name="benefit[]">
                                        <label class="custom-control-label" for="sertifikat">Sertifikat</label>
                                    </div>

                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        <input type="checkbox" class="custom-control-input" value="souvenir" id="souvenir" name="benefit[]">
                                        <label class="custom-control-label" for="souvenir">Souvenir</label>
                                    </div>
                                </div>
                            </fieldset>

                            <div class="form-group">
                                <button type="submit" class="justify-content-end btn btn-primary" name="submit">Submit</button>
                                <!-- <button type="button" class="justify-content-end btn btn-danger" name="cancel">Cancel</button> -->
                                <a href="home.php" role="button" class="justify-content-end btn btn-danger">Cancel</a>
                            </div>
                        </div>

                    </div>

                </div>


            </div>
        </div>
    </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>