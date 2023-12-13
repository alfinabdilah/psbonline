<?php

$koneksi = mysqli_connect("localhost", "root", "pwdpwd8", "psbonline");
if (!$koneksi) {
	die("Masukan nama dengan benar");
} else {
	include('menuadmin.php'); 
}


$namasiswa = $_POST['namasiswa'];
$hasilpendaftaransiswa = $_POST['hasilpendaftaransiswa'];


$query = ("UPDATE datasiswa SET hasil_pendaftaran = '$hasilpendaftaransiswa' WHERE nama_depan = '$namasiswa'");

mysqli_query($koneksi, $query);

?>
