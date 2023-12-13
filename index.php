<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PSB(Online)</title>
</head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<style>
body{
	background-image: url("bgimage.jpg");
	background-size: cover;
}
h3,h5{
	color: black;
}
p{
	color: black;
}

</style>
<body>

<br><h3 style="text-align: center;">SELAMAT DATANG DI SISTEM INFORMASI PENERIMAAN SISWA BARU</h3><br><br>
<h5 style="text-align: center;">Pilih menu di bawah ini :</h5><br><br>
 <center>
    <p>Log in</p>
    <a href="loginsiswa.php" class="btn btn-dark">Log in Siswa</a>
    <a href="loginadmin.php" class="btn btn-dark">Log in Admin</a> <br><br>
  	<p>Belum punya account?</p>
  	<a href="formdaftarsiswa.php" class="btn btn-dark">Pendaftaran Siswa</a>
  	<a href="formdaftaradmin.php" class="btn btn-dark">Pendaftaran Admin</a> <br><br>
	<p>Data Siswa</p>
	<a href="datasiswa.php" class="btn btn-success">Cetak Data Siswa</a>
	<a href="datagrafik.php" class="btn btn-success">Lihat Grafik Data Siswa</a>
 </center>

</body>
</html>