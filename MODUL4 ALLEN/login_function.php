<?php 
include 'connection.php';
session_start();
 
$email = $_POST['email'];
$password = $_POST['password'];
 
$query = mysqli_query($koneksi,"SELECT * FROM `user` WHERE email='$email' and password='$password'");
$baris = mysqli_num_rows($query);

if($baris > 0){
	if(isset($_POST['remember'])){
		$cookie_name = 'email';
		$cookie_value = $email;
		setcookie($cookie_name, $cookie_value);

		$cookie_name = 'password';
		$cookie_value = $password;
		setcookie($cookie_name, $cookie_value);
		}
		

	while($display = mysqli_fetch_array($query)){
		$_SESSION['user_id'] = $display['id'];
		$_SESSION['nama'] = $display['nama'];
		$_SESSION['no_hp'] = $display['no_hp'];
	}
	$_SESSION['email'] = $email;
	$_SESSION['loginTime'] = time();
	$_SESSION['nav'] = "Light";
	header( "refresh:0;url=login.php?message=success" );
}else{
	header( "refresh:0;url=login.php?message=gagal" );
}
 
?>