<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Data Siswa</title>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/datatables.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
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

</head>
<body>
<h5 style="text-align: center;">Data Siswa</h5><br><br>
<button onclick="history.back()" class="btn btn-dark">Back</button>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="data_table" style="overflow-x:auto;">
                    <table id="example" class="table">
                        <thead class="table-dark">
                            <tr>
                                <th>No.</th>
                                <th>Nama Depan</th>
                                <th>Nama Belakang</th>
                                <th>Email</th>
                                <th>Tanggal Lahir</th>
                                <th>Kewarganegaraan</th>
                                <th>Alamat</th>
                                <th>Asal Sekolah</th>
                                <th>Status Penerimaan</th>
                            </tr>
                            <?php
                            include 'koneksi.php';
                    
                            $data = mysqli_query($koneksi,"SELECT * FROM datasiswa");
                            $no = 1;
                            while ($d= mysqli_fetch_array($data)){
                            
                            ?>
                        </thead> 

                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $d['nama_depan']; ?></td>
                                <td><?php echo $d['nama_belakang']; ?></td>
                                <td><?php echo $d['email']; ?></td>
                                <td><?php echo $d['tanggal_lahir']; ?></td>
                                <td><?php echo $d['kewarganegaraan']; ?></td>
                                <td><?php echo $d['alamat']; ?></td>
                                <td><?php echo $d['asal_sekolah']; ?></td>
                                <td><?php echo $d['hasil_pendaftaran']; ?></td>
                            </tr>
        <?php
        }
        ?>

                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/datatables.min.js"></script>
    <script src="assets/js/pdfmake.min.js"></script>
    <script src="assets/js/vfs_fonts.js"></script>
    <script src="assets/js/custom.js"></script>

</body>

</html>
