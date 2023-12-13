<?php


$koneksi = mysqli_connect("localhost", "root", "pwdpwd8", "psbonline");
if (!$koneksi) {
    die("Maaf, gagal terhubung dengan database". mysql_error());
} else {
	include('index.php');
}


$email_admin = $_POST['emailadmin'];
$password_admin = $_POST['passwordadmin'];

$query = "INSERT INTO dataadmin VALUES('$email_admin','$password_admin')";

mysqli_query($koneksi, $query);

?>