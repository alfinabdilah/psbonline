<?php


$koneksi = mysqli_connect("localhost", "root", "pwdpwd8", "psbonline");
if (!$koneksi) {
    die("Maaf, gagal terhubung dengan database". mysql_error());
} else { 
	include('index.php'); 
}



$nama_depan = $_POST['namadepansiswa'];
$nama_belakang = $_POST['namabelakangsiswa'];
$email = $_POST['emailsiswa'];
$password = $_POST['passwordsiswa'];
$tanggal_lahir = $_POST['tanggallahirsiswa'];
$kewarganegaraan = $_POST['negarasiswa'];
$alamat = $_POST['alamatsiswa'];
$asal_sekolah = $_POST['asalsekolahsiswa'];

$query = "INSERT INTO datasiswa VALUES('$nama_depan','$nama_belakang','$email','$password','$tanggal_lahir','$kewarganegaraan','$alamat','$asal_sekolah','Belum tersedia')";

mysqli_query($koneksi, $query);

?>