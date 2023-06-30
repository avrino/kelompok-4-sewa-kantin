<?php 
if (isset($_GET['namakantin'])) {
	$namakantindihapus=$_GET['namakantin'];
	$sql="delete from tabelkantin where kantin='".$namakantindihapus."'";
	$kon=mysqli_connect("localhost","root","","sewakantin");
	$q=mysqli_query($kon,$sql);
}
header('location:kantin.php');
?>