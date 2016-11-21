<?php

	$username = $password = "";

	include 'validasi.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$username = validasi_input($_POST["username"]);
		$password = validasi_input($_POST["password"]);
	} 

	include 'koneksi.php';

	$sql = "SELECT idkaryawan, password, idhakakses, status FROM tbuserakun WHERE username = ?";

	if ($stmt = mysqli_prepare($conn, $sql)) {
		mysqli_stmt_bind_param($stmt, "s", $username); 
		mysqli_stmt_execute($stmt);
		mysqli_stmt_store_result($stmt);
		if (mysqli_stmt_num_rows($stmt) > 0) {
			mysqli_stmt_bind_result($stmt,$idkar, $pass, $ha, $stat);
			mysqli_stmt_fetch($stmt);
			if (password_verify($password, $pass)) {
				if ($stat == 1) {
					session_start();
					$_SESSION["idkaryawan"] = $idkar;
					$_SESSION["username"] = $username;
					$_SESSION["hakakses"] = $ha;
					if ($ha == 1) {
						echo '<script>alert("Selamat datang Webmaster !");window.location.replace("../public/webmaster/index.php");</script>';
					} else if ($ha == 2) {
						echo '<script>alert("Selamat datang Supervisor !");window.location.replace("../public/supervisor/index.php");</script>';
					} else if ($ha == 3) {
						echo '<script>alert("Selamat datang Karyawan !");window.location.replace("../public/karyawan/index.php");</script>';
					}
				} else {
					echo '<script>alert("Akun anda untuk sementara diblokir !");window.location.replace("../index.php");</script>';
				}
			} else {
				echo '<script>alert("Password yang anda masukkan salah !");window.location.replace("../index.php");</script>';
			}
		} else {
			echo '<script>alert("Username yang anda masukkan salah !");window.location.replace("../index.php");</script>';
		}
		mysqli_stmt_close($stmt);
	}

	mysqli_close($conn);

?>