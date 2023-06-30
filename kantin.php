<?php 
$kon=mysqli_connect("localhost","root","","sewakantin");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tabel Kantin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<br></br>
<div class="container mt-3">
  <div class="row">
   <h2 class="col-sm-4">Tabel Kantin</h2>
   <div class="col-sm-8">
   <form name="frmcari" method="post" class="input-group mb-8" target="frmhasil" action="hasilcarikantin.php">
   <input type="text" class="form-control" placeholder="Ketik kode rumah yang dicari" name="kCari" id="kCari">
   <button class="btn btn-success" type="submit" name="bCari">Cari</button>
  </form>
   </div>
  </div> 
  <form action="" method="post">
    <div class="mb-3 mt-3">
      <label for="namakantin">Nama Kantin :</label>
      <input type="text" class="form-control" id="namakantin" placeholder="Ketik Nama" name="namakantin">
    </div>
	
    <button type="submit" class="btn btn-primary" name="bSimpan">Simpan</button>
  </form>
  <br></br>
  <iframe name="frmhasil" width="100%" height="400px"></iframe>
  <?php 
  if (isset($_POST['bSimpan'])) {
	  $namapemilik=$_POST['namakantin'];

	  $sql="insert into `tabelkantin` (namakantin) values ('".$namakantin."')";
	  $q=mysqli_query($kon,$sql);
  }
  ?>
</div>

</body>
</html>
