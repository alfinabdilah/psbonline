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
<h5 style="text-align: center;">Edit data siswa</h5><br><br>

<form action="proseseditdatasiswa.php" method="post">
  <div class="form-group">
    <input type="text" class="form-control" name="namasiswa" placeholder="Masukan nama siswa">
  </div><br>
   <div class="form-group">
      <label for="hasilpendaftaransiswa" class="warnalabel">Hasil pendaftaran</label>
      <select class="form-control" name="hasilpendaftaransiswa">
        <option>Diterima</option>
       <option>Tidak diterima</option>
       <option>Cadangan</option>
      </select>
 <br></div>
 <center>
  	<button type="submit" name="masuk" class="btn btn-dark">Edit</button>
 </center>
</form>
</body>
</html>