<!DOCTYPE html>
<html>
<head>
	<title>Regist</title>
	<h2>Register</h2>
</head>
<body>
	<table>
		
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>

		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="number" name="nim" length="10"></td>
		</tr>

		<tr>
			<td>Kelas</td>
			<td>:</td>
			<td><input type="radio" name="kelas" value="01">01<br>
				<input type="radio" name="kelas" value="02">02<br>
				<input type="radio" name="kelas" value="03">03<br>
				<input type="radio" name="kelas" value="04">04<br>
				<input type="radio" name="kelas" value="05">05<br>
			</td>
		</tr>

		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>
				<input type="radio" name="jk" value="cwo">Laki-Laki<br>
				<input type="radio" name="jk" value="cwe">Perempuan<br>
			</td>
		</tr>

		<tr>
			<td>Hobi</td>
			<td>:</td>
			<td>
				<input type="checkbox" name="hobi" value="gaming">Gaming<br>
				<input type="checkbox" name="hobi" value="makan">Makan<br>
				<input type="checkbox" name="hobi" value="boong">Boong<br>
				<input type="checkbox" name="hobi" value="hardolin">Hardolin<br>
			</td>
		</tr>

		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td><select name="fakultas">
			<option value="1">Fakultas</option>
				<option value="FIT">Fakultas Ilmu Terapan</option>
				<option value="FKB">Fakultas Komunikasi Bisnis</option>
				<option value="FEB">Fakultas Ekonomi Bisnis</option>
				<option value="FIK">Fakultas Industri Kreatif</option>
				<option value="FRI">Fakultas Rekayasa Industri</option>
				<option value="FTI">Fakultas Teknik Informatik</option>
			</td>
			</select>
		</tr>

		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><input type="textarea" name="alamat"></td>
		</tr>

		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="password" name="password"></td>
		</tr>

		<tr>
			<td><input type="submit" name="regis" value="Register"></td>
		</tr>
	</table>

</body>
</html>


<?php 

	if (isset($_POST['regis'])) {
		include 'login.php';
	}

 ?>