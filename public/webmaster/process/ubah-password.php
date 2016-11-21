<?php

	$id = $pass = "";

	include('../../../incl/validasi.php');

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$id = validasi_input($_POST["id"]);
		$pass = validasi_input($_POST["password"]);
	}

	$pass = password_hash($pass, PASSWORD_BCRYPT);

	include('../../../incl/koneksi.php');

	$sql = "UPDATE tbuserakun SET password = ? WHERE idkaryawan = ?";

	if ($ubah = mysqli_prepare($conn, $sql)) {
		mysqli_stmt_bind_param($ubah, "ss", $pass, $id);
		if (mysqli_stmt_execute($ubah)) {
			echo '<script>alert("Password berhasil di ubah !");window.location.replace("../lihat-user.php");</script>';
		} else {
			echo '<script>alert("Telah terjadi kesalahan !");window.location.replace("../lihat-user.php");</script>';
		}
	}

	mysqli_stmt_password($ubah);
	mysqli_close($conn);

?>