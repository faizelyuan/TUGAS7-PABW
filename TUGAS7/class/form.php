
<!DOCTYPE html> 

<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<title>TUGAS PAK ARYO</title>
</head>
<body>
  <center>
	<p><h1>Form Pendaftaran Panitia Expo Beasiswa</h1></p>
  </center>
<div class="container">
	<div class="row">
		<div class="col-lg-8">
			<form action="tabel.php" method="POST" enctype="multipart/form-data">

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
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>


</body>
</html>