<!DOCTYPE html>
<html>
<head>
	<title>Tugas 1 Hasil Login</title>
</head>
<body>
<h3>HASIL LOGIN</h3>
<?php
echo "Nama : ".$_GET["nama"]."<br>";
echo "Email : ".$_GET["email"]."<br>";
date_default_timezone_set('Asia/Jakarta');
echo "Waktu Masuk : <br>";
echo "- Hari : ".date("l")."<br>- Tanggal : ".date("d-F-Y")."<br>- Pukul : ".date("g:i:s a");
?>
</body>
</html>
