<!DOCTYPE html>
<html>
<head>
	<title>Tugas 3</title>
	<style type="text/css">
		body {background-image: url(pic.jpeg); background-repeat:
			no-repeat; background-size: cover;}
		h2 {background: blue; color: white;}
		</style>
</head>
<body>
<h2 align="center">FORM BIODATA</h2>
	<br>
	<form method="POST" action="tugas3proses.php">
		<font type = calibri black font size ="4">
		<table width="400" align="center" cellpadding="2" cellspacing="2">
			<tr>
				<td width="200">Nama</td>
				<td><input type="text" name="namal"></td>
			</tr>
			<tr>
				<td width="200">Nama Panggilan</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td width="200">Jenis Kelamin</td>
				<td><input type="radio" name="jk" value="Laki-laki"> Laki- laki
					<input type="radio" name="jk" value="Perempuan"> Perempuan </td>
			</tr>
			<tr>
				<td width="200">Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td width="200">Provinsi</td>
				<td><select name="prov">
				<option value="kosong"> </option>
				<option value="Jawa Barat"> Jawa Barat</option>
				<option value="Jawa Tengah"> Jawa Tengah</option>
				<option value="Jawa Timur"> Jawa Timur</option>
				<option value="D.I.Yogyakarta"> D.I.Yogyakarta</option></select> </td>
			</tr>
			<tr>
				<td width="200">Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td width="200">Motto</td>
				<td><textarea name ="motto" cols="30" rows="5" align="left"></textarea></td>
			</tr>
			<tr>
				<td width="200"></td>
				<td align="right"><input type="submit" name="login" value="Daftar"></td>
			</tr>
		</table>
			<p align="center"><input type="reset" name="reset" value="Ulangi"></p>
	</form>
</font>
</body>
</html>