<?php 
include 'connection.php';
 
$nama = $_POST['nama'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$password = $_POST['password'];
 
$query = mysqli_query($koneksi,"INSERT INTO `user`(`id`, `nama`, `email`, `no_hp`, `password`) VALUES ('','$nama','$email','$no_hp','$password')");
 
if($query){
	header( "refresh:0;url=register.php?message=success" );
}else{
	header( "refresh:0;url=register.php?message=gagal" );
}
 
?>