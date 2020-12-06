<?php
$dbhost = "localhost";
$dbuser = "root";
$dbname = "wad_modul3_allen";
$dbpass = "";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn) {
  echo "<script>
                alert( 'Failed connect into database');
                </script>";
}