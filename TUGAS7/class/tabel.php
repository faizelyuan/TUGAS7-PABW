<?php 
$nama = $_POST['nama'];
$namapanggil = $_POST['namapanggil'];
$NIM = $_POST['NIM'];
$radiobutton = $_POST['radiobutton'];
$emailpendaftar = $_POST['emailpendaftar'];
$divisi = $_POST['divisi'];  
$KomitmenPendaftar = $_POST['KomitmenPendaftar'];
$hari = $_POST['hari'];
$tmpFile = $_FILES['fotoPendaftar']['tmp_name'];
$fotoPendaftar = $_FILES['fotoPendaftar']['name'];


move_uploaded_file($tmpFile, "./".$fotoPendaftar);
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<title></title>
</head>
<body>
  <center>
  <h1>Data Pendaftar Panitia Expo Beasiswa</h1><br>
  </center>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Nomor</th>
      <th scope="col">Nama Lengkap</th>
      <th scope="col">Nama Panggil</th>
      <th scope="col">NIM</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Email</th>
      <th scope="col">Divisi Pilihan</th>
      <th scope="col">Komitmen</th>
      <th scope="col">Hari Screening</th>
      <th scope="col">Foto</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $nama;?></td>
      <td><?php echo $namapanggil;?></td>
      <td><?php echo $NIM;?></td>
      <td><?php echo $radiobutton;?></td>
      <td><?php echo $emailpendaftar;?></td>
      <td><?php foreach ($divisi as $key) {
        echo "-".$key."<br>";
      } ;?></td>
      <td><?php echo $KomitmenPendaftar;?></td>
      <td><?php echo $radiobutton;?></td>
      <td><img src="<?php echo $fotoPendaftar ?>" style="height: 100px" width="100px"></td>
    </tr>
    
    
  </tbody>
</table>
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
    <li class="page-item">
      <a class="page-link" href="#">2 </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</body>
</html>