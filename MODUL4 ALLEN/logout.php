<?php
session_start();
session_unset();
$_SESSION['message'] = 'Berhasil Logout';
    header("Location: login.php");
?>