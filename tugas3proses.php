<!DOCTYPE html>
<html>
<head>
	<title>Masuk</title>
	<style type="text/css">
		body {background-image: url(pic.jpeg);
			background-repeat: no-repeat; background-size: cover;}
		h2 {background: blue; color: white; text-align: center;}
		</style>
</head>
<body>
	<h2>FORM</h2>
<?php
if (empty($_POST['namal'])) {
	echo "<center>Nama anda belum diisi";
} elseif (empty($_POST['nama'])) {
	echo "<center>Nama panggilan anda belum diisi";
} elseif (empty($_POST['jk'])) {
	echo "<center>Hei ".$_POST['nama'].", data Jenis Kelamin belum diisi";
} elseif (empty($_POST['alamat'])) {
	echo "<center>Hei ".$_POST['nama'].", data Alamat belum diisi";
} elseif ($_POST['prov']=="kosong") {
	echo "<center>Hei ".$_POST['nama'].", data Provinsi belum diisi";
} elseif (empty($_POST['email'])) {
	echo "<center>Hei ".$_POST['nama'].", data Email belum diisi";
}  elseif (empty($_POST['motto'])) {
	echo "<center>Hei ".$_POST['nama'].", motto belum diisi";
} else { 
echo "<center>Nama : ".$_POST["nama"]."<br>";
echo "<center>Jenis Kelamin : ".$_POST["jk"]."<br>";
echo "<center>Alamat : ".$_POST["alamat"]."<br>";
echo "<center>Provinsi : ".$_POST["prov"]."<br>";
echo "<center>Email : ".$_POST["email"]."<br>";
echo "<center>Motto : ".$_POST["motto"]."<br>";}
?>
</body>
</html> 