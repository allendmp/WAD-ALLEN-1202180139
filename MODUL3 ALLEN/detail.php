<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <title></title>
  <?php
        include ('config.php');
        include_once('update.php');
        $id = $_GET['id'];
        $query = "SELECT * FROM event_table WHERE id = $id";
        $select = mysqli_query($conn, $query);

        if(isset($_POST['submit'])){
            update($id,$_POST);
        }
        
?>
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

  <h5 style="text-align:center; color:cornflowerblue;">Detail Event</h5>

  <div class="container mt-5 d-flex justify-content-center">
  
  <div class="col-6">
    
    <div class="card mb-3">
      
      <?php
      $id = $_GET['id'];
      $data = mysqli_query($conn, "SELECT * FROM event_table WHERE id=$id");
      while ($display = mysqli_fetch_array($data)) {
        $benefit = explode(",", $display['benefit']);
      ?>
        <img width="150" height="400" src="foto/<?php echo $display['gambar']; ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="card-title"><?php echo $display['name']; ?></h5>
            <p class="card-text"><strong>Deskripsi</strong></p>
            <p class="card-text"><?php echo $display['deskripsi']; ?></p>

            <p class="card-text"><strong>Informasi Event </strong></p>
            <p class="card-text"><?php echo $display['tanggal']; ?></p>
            <p class="card-text"><?php echo $display['tempat']; ?></p>
            <p class="card-text"><?php echo $display['mulai']; ?> - <?php echo $display['berakhir']; ?></p>
            <p class="card-text"><strong>Kategori : </strong> <?php echo $display['kategori']; ?></p>
            <p class="card-text"><strong>HTM Rp. <?php echo $display['harga']; ?> </strong></p>
            <p class="card-text"><strong>Benefit : </strong> <?php echo $display['benefit']; ?></p>

            <!-- Button trigger modal -->
            <div class="container mt-5 d-flex justify-content-center">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
  Edit
</button>

                        <a href="delete.php?id=<?= $display['id']; ?>">
                            <button type="button" class="btn btn-danger mr-sm-2">Delete</button>
                        </a>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-xl">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <?php
                    include('config.php');
                    $id = $_GET['id'];

                    $query = "SELECT * FROM event_table WHERE id='$id'";
                    $select = mysqli_query($conn, $query);
                    $display = mysqli_fetch_assoc($select);
                    ?>

                    <form action="" method="post" enctype="multipart/form-data">
                      <div class="row no-gutters">

                        <div class="col-md-6">
                          <div class="container">
                            <div class="card">
                              <div class="card-header bg-danger">

                              </div>

                              <div class="card-body">

                                <div class="form-group ">
                                  <label for="name">Name</label>
                                  <input type="name" class="form-control" id="name" name="name" value="<?= $display['name'] ?>">
                                </div>

                                <div class="form-group ">
                                  <label for="deskripsi">Deskripsi</label><br>
                                  <textarea name="deskripsi" id="" cols="63" rows="3"><?php echo $display['deskripsi']; ?></textarea>
                                </div>

                                <div class="form-group ">
                                  <label for="gambar">Upload Gambar</label>
                                  <div class="custom-file" style="margin-top:1px;">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                    <input type="file" class="custom-file-input form-control" id="gambar" name="gambar" value="<?= $display['gambar'] ?>">
                                  </div>
                                </div>


                                <fieldset class="form-group">
                                  <label for="kategori" style="margin:5px;">Kategori</label>
                                  <div class="col-sm-6">
                                    <div class="form-check">
                                      <div class="row">
                                        <div class="col-5">
                                          <input <?php echo ($display['kategori'] == 'Online') ? 'checked' : '' ?> class="form-check-input" type="radio" name="kategori[]" id="gridRadios1" value="Online" action="" checked>
                                          <label class="form-check-label" for="online">
                                            Online
                                          </label>
                                        </div>
                                        
                                        <div class="col">
                                          <input <?php echo ($display['kategori'] == 'Offline') ? 'checked' : '' ?> class="form-check-input" type="radio" name="kategori[]" id="gridRadios2" value="Offline" action="">
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

                        <div class="col-md-6">

                          <div class="container">
                            <div class="card">
                              <div class="card-header bg-primary"></div>
                              <div class="card-body">
                                <div class="form-group ">
                                  <label for="tanggal">Tanggal</label>
                                  <input class="form-control" type="date" id="" name="tanggal" value="<?= $display['tanggal'] ?>">
                                </div>

                                <div class="form-row">



                                  <div class="col-md-6">
                                    <label for="mulai">Jam Mulai</label>
                                    <input type="time" class="form-control" name="mulai" value="<?= $display['mulai'] ?>" id="inlineFormCustomSelect" style="width: 240px;">

                                  </div>

                                  <div class="col-md-6">
                                    <label for="berakhir">Jam Berakhir</label>
                                    <input type="time" class="form-control" name="berakhir" value="<?= $display['berakhir'] ?>" id="inlineFormCustomSelect" style="width: 240px;">

                                  </div>
                                </div>

                                <div class="form-group ">
                                  <label for="tempat">Tempat</label>
                                  <input type="tempat" class="form-control" id="tempat" name="tempat" value="<?= $display['tempat'] ?>">
                                </div>

                                <div class="form-group ">
                                  <label for="harga">Harga</label>
                                  <input type="harga" class="form-control" id="harga" name="harga" value="<?= $display['harga'] ?>">
                                </div>




                                <fieldset class="form-group">
                                  <label for="benefit" style="margin:5px;">Benefit</label>
                                  <div class="col-sm-12">
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                      <input type="checkbox" class="custom-control-input" value="snacks" id="snacks" name="benefit[]" <?php if (in_array("snacks",$benefit)) : ?> checked  <?php endif; ?>>
                                      <label class="custom-control-label" for="snacks">Snacks</label>
                                    </div>

                                    <div class="custom-control custom-checkbox custom-control-inline">
                                      <input type="checkbox" class="custom-control-input" value="sertifikat" id="sertifikat" name="benefit[]" <?php if (in_array("sertifikat",$benefit)) : ?> checked  <?php endif; ?>>
                                      <label class="custom-control-label" for="sertifikat">Sertifikat</label>
                                    </div>

                                    <div class="custom-control custom-checkbox custom-control-inline">
                                      <input type="checkbox" class="custom-control-input" value="souvenir" id="souvenir" name="benefit[]" <?php if (in_array("ssouvenir",$benefit)) : ?> checked  <?php endif; ?>>
                                      <label class="custom-control-label" for="souvenir">Souvenir</label>
                                    </div>
                                  </div>
                                </fieldset>


                              </div>

                            </div>

                          </div>


                        </div>
                      </div>
                    
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="submit">Save Changes</button>
                    </form>  
                    
                  </div>
                </div>
              </div>
            </div>

        </div>

        
      <?php
      }
      ?>

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