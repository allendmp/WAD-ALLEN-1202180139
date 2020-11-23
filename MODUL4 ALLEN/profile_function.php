<?php 
include 'connection.php';

session_start();


$id = $_SESSION['user_id'];
$nama = $_POST['nama'];
$no_hp = $_POST['no_hp'];
$password = $_POST['password'];
$_SESSION['nama'] = $_POST['nama'];
$_SESSION['no_hp'] = $_POST['no_hp'];
$cookie_name = 'warna';
$cookie_value = $_POST['warna'];;

 
 

$query = mysqli_query($koneksi,"UPDATE user SET `nama`='$nama',`no_hp`='$no_hp',`password`='$password' WHERE `id`='$id'");
 
if($query){
	header( "refresh:0;url=profile.php?message=success" );
}else{
	header( "refresh:0;url=profile.php?message=gagal" );
}
 
?>