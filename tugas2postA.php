<!DOCTYPE html>
<html>
<head>
	<title>Tugas 2</title>
</head>
<body>
<?php
if (empty($_POST['nama'])) {
	header("Location:tugas2nkosong.php");
} elseif (empty($_POST['email'])) {
	header("Location:tugas2ekosong.php");
} else {
	echo "Nama : ".$_POST["nama"]."<br>";
	echo "Email : ".$_POST["email"]."<br>";
	date_default_timezone_set('Asia/Jakarta');
	echo "Waktu Masuk : <br>";
	echo "- Hari : ".date("l")."<br>- Tanggal : ".date("d-F-Y")."<br>- Pukul : ".date("g:i:s a");
}
?>
</body>
</html>
