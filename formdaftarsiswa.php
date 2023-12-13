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

<br><h3 style="text-align: center;">FORMULIR PENDAFTARAN SISWA BARU</h3><br><br>
<button onclick="history.back()" class="btn btn-dark">Back</button>
<h5 style="text-align: center;">Masukan data pada form di bawah ini dengan benar!</h5><br><br>
<form action="prosesdaftarsiswa.php" method="post">
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="namadepansiswa" placeholder="Nama depan"required><br>
    </div>
    <div class="col">
      <input type="text" class="form-control" name="namabelakangsiswa" placeholder="Nama belakang"required><br>
    </div>
    <div class="form-group">
      <input type="email" class="form-control" name="emailsiswa" placeholder="Masukan Email"required><br>
   </div>
    <div class="form-group">
      <input type="password" class="form-control" name="passwordsiswa" placeholder="Masukan Password"required><br>
  </div>
    </div>
    <label for="Tanggallahirsiswa" class="warnalabel">Tanggal lahir</label>
    <br><input type="date" class="form-control" name="tanggallahirsiswa"required><br>
    </div>
    <div class="form-group">
      <label for="negarasiswa" class="warnalabel">Kewarganegaraan</label>
      <select class="form-control" name="negarasiswa">
        <option>Indonesia</option>
       <option>Luar negeri</option>
      </select>
  <br></div>
    <div>
    <textarea class="form-control" name="alamatsiswa" rows="3" placeholder="Alamat"required></textarea>
    </div>
    <div>
    <br><input type="text" class="form-control" name="asalsekolahsiswa" placeholder="Asal sekolah"required><br>
    </div>
    <center><button type="submit" name="daftar" class="btn btn-dark">Daftar</button></center> 
</form>
</body>
</html>