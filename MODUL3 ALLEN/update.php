<?php
include('config.php');

function update($id, $cont){
    global $conn;
    $name = $cont['name'];
    $deskripsi = $cont['deskripsi'];

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $deskripsi = $_POST['deskripsi'];
    $kategori = implode(",", $_POST['kategori']);
    $tanggal = $_POST['tanggal'];
    $mulai = $_POST['mulai'];
    $berakhir = $_POST['berakhir'];
    $tempat = $_POST['tempat'];
    $harga = $_POST['harga'];
    $benefit = implode(",", $_POST['benefit']);
    $rand = rand();
    $ekstensi =  array('png','jpg','jpeg','gif');
    $filename = $_FILES['gambar']['name'];
    $temp = $_FILES['gambar']['tmp_name'];
    $pathinfo = pathinfo($filename, PATHINFO_EXTENSION);
  

    
}

if(!in_array($pathinfo,$ekstensi) ) {
    header("location:buat.php?alert=gagal_ekstensi");
}else{	
        $img = $rand.'_'.$filename;
        $img = basename($img);
        $path = "foto/$img";
        move_uploaded_file($temp,$path);
        $id   = $_GET['id'];
        $query = "UPDATE event_table SET name='$name', deskripsi='$deskripsi', kategori='$kategori',
            tanggal='$tanggal', mulai='$mulai', berakhir='$berakhir', tempat='$tempat',
             harga='$harga', benefit='$benefit' WHERE id=$id";
    $update = mysqli_query($conn, $query);

        header("location:home.php?alert=berhasil");
    }
}