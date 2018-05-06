<?php 

class FormView {

	public function formAwal (){
		?>
		<!DOCTYPE html> 

		<html>
		<head>
			<link rel="stylesheet" type="text/css" href="http://localhost/TUGAS7/css/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="http://localhost/TUGAS7/css/bootstrap-grid.min.css">
			<script type="text/javascript" src="js/bootstrap.min.js"></script>
			<title>TUGAS PAK ARYO</title>
		</head>
		<body style="background-image: url(http://localhost/TUGAS7/class/rainbow-lines-44425-1920x1080.jpg); " >
		  <center>
			<p><h1 style="background-color: #80ced6">Form Pendaftaran Panitia Expo Beasiswa</h1></p>
		  </center>
		<div class="container">
			<div class="row">
				<div class="col-lg-8">

					<form action="http://localhost/TUGAS7/router.php/FormController/getFormAkhir/" method="POST" enctype="multipart/form-data">

		<div class="form-group">
		    <label for="namaLengkap">Nama Lengkap</label>
		    <input type="namaLengkap" class="form-control" name="nama" id="namaLengkap" placeholder="Nama Lengkap Anda">
		</div>

		<div class="form-group">
		    <label for="namaPanggil">Nama Panggil</label>
		    <input type="NamaPanggi" class="form-control" name="namapanggil" id="namaPanggil" placeholder="Nama Panggil Anda">
		</div>
		<div class="form-group">
		    <label for="nimPendaftar">NIM</label>
		    <input type="NIM" class="form-control" name="NIM" id="nimPendaftar" placeholder="NIM Anda">
		</div>
		  
			<p>Jenis Kelamin</p>
		<div class="form-check">
		  <input class="form-check-input" type="radio" name="radiobutton" id="lakiLaki" value="Laki Laki">
		  <label class="form-check-label" for="lakiLaki">
		    Laki Laki
		  </label>
		</div>

		<div class="form-check">
		  <input class="form-check-input" type="radio" name="radiobutton" id="Perempuan" value="Perempuan">
		  <label class="form-check-label" for="Perempuan">
		    Perempuan
		  </label>
		</div>

		<div class="form-group">
		  	<br>
		    <label for="EmailPendaftar">Email</label>
		    <input type="email" class="form-control" name="emailpendaftar" id="EmailPendaftar" aria-describedby="emailHelp" placeholder="Email">
		</div>
		  
		  <p>Divisi Pilihan (Pilih Maksimal 2)</p>
		<div class="form-check">
		    <input type="checkbox" class="form-check-input" name="divisi[]" value="Acara" id="Acara">  
		    <label class="form-check-label" for="Acara" >Acara</label>
		    <br>
		    <input type="checkbox" class="form-check-input" name="divisi[]" value="Humas" id="Humas">
		    <label class="form-check-label" for="Humas" >Humas</label>
		    <br>
		    <input type="checkbox" class="form-check-input" name="divisi[]" value="DDM" id="DDM">
		    <label class="form-check-label" for="DDM" >DDM</label>
		    <br>
		    <input type="checkbox" class="form-check-input" name="divisi[]" value="transkoper" id="Transkoper">
		    <label class="form-check-label" for="Transkoper" >Transkoper</label>
		</div>
		<br>
		<div class="form-group">
		    <label for="KomitmenPendaftar">Komitmen Anda Mengikuti Kepanitiaan Ini</label>
		    <textarea class="form-control" name="KomitmenPendaftar" id="KomitmenPendaftar" rows="3"></textarea>
		  </div>
		  <br>
		  <p>Pilih Hari Screening</p>
		<div class="form-group">
		  	<select name="hari" class="form-control">
		  	<option value="Senin">Senin</option>
		  	<option value="Selasa">Selasa</option>
		  	<option value="Rabu">Rabu</option>
		  	</select>
		</div>
		  
		<div class="form-group">
		    <label for="fotoPendaftar">Masukkan Pas Foto</label>
		    <input type="file" class="form-control-file" name="fotoPendaftar" id="fotoPendaftar">
		  </div>
		  <button name="submit" type="submit" class="btn btn-primary">Submit</button>
		</form>
		</div>


		</body>
		</html>
	<?php
	}
    public function FormAkhir ($data){
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
			<link rel="stylesheet" type="text/css" href="http://localhost/TUGAS7/css/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="http://localhost/TUGAS7/css/bootstrap-grid.min.css">
			<script type="text/javascript" src="js/bootstrap.min.js"></script>
			<title></title>
		</head>
		<body style="background-image: url(http://localhost/TUGAS7/class/rainbow-lines-44425-1920x1080.jpg); ">
		  <center>
		  <h1 style="background-color: #80ced6">Data Pendaftar Panitia Expo Beasiswa</h1><br>
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
		      <th scope="col">Ruangan Screening</th>
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
		      <td><?php echo $data;?></td>
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
    <?php
    }
}