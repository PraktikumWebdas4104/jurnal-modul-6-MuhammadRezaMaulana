<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<h2>Login</h2>
</head>
<body>
	<table>
		
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="text" name="nim" length="10"></td>
		</tr>

		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="password" name="pass"></td>
		</tr>

		<tr>
			<td><input type="submit" name="submit" value="Login"></td>
			<td><input type="submit" name="regis" value="Register"></td>
		</tr>
	</table>

</body>
</html>

<?php 

	if (isset($_POST['submit'])) {
		include 'koneksi.php';
	}

	/*if (isset($_POST)['regis'])) {
		include 'regis.php';
	}*/

 ?>