<?php 

	$host 		= "localhost";
	$user 		= "root";
	$pass 		= "";
	$database	= "biodata";

	$conn = mysqli_connect($host, $user, $pass, $database);

	if (isset($_POST['submit'])) {
		$nama		= $_POST['nama'];
		$nim		= $_POST['nim'];
		$kelas		= $_POST['kelas'];
		$jk			= $_POST['jk'];
		$hobi		= $_POST['hobi'];
		$fakultas	= $_POST['fakultas'];
		$alamat		= $_POST['alamat'];
		$pass		= $_POST['pass'];

	if (strlen($nama) == 35) {
		if (strlen($nim == 10)) {
			
			$query = $conn -> query("INSERT INTO `bio`(`nama`, `nim`, `kelas`, `jk`, `hobi`, `fakultas`, `alamat`, `pass`
									 VALUES ('$nama', '$nim', '$kelas', '$jk', '$hobi', '$fakultas', '$alamat', '$pass')")
			echo "Register Successful";
			echo "<button><a href='login.php'>Finish</button></a>";
		}else{
			echo "Register Failed";
		}
	}else{
		echo "Register Failed";
	}
	}else{
		echo "Register Failed";
	}

 ?>