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
<button onclick="history.back()" class="btn btn-dark">Back</button>
<h5 style="text-align: center;">Masuk dengan email dan password</h5><br><br>
<form action="authenticationsiswa.php" method="post">
  <div class="form-group">
    <input type="text" class="form-control" name="emailsiswa" placeholder="Masukan Email">
  </div><br>
  <div class="form-group">
    <input type="password" class="form-control" name="passwordsiswa" placeholder="Masukan Password">
  </div><br>
 <center>
  	<button type="submit" name="masuk" class="btn btn-dark">Masuk</button>
 </center>
</form>
</body>
</html>