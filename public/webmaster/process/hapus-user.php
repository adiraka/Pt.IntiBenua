<?php

	$id = "";

	include('../../../incl/validasi.php');

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$id = validasi_input($_POST["id"]);
	}

	include('../../../incl/koneksi.php');

	$sql1 = "DELETE FROM tbuserakun WHERE idkaryawan = ?";
	$sql2 = "DELETE FROM tbuserprofil WHERE idkaryawan = ?";

	if ($user = mysqli_prepare($conn, $sql1)) {
		mysqli_stmt_bind_param($user, "s", $id);
		if (mysqli_stmt_execute($user)) {
			mysqli_stmt_close($user);
			if ($profil = mysqli_prepare($conn, $sql2)) {
				mysqli_stmt_bind_param($profil, "s", $id);
				if (mysqli_stmt_execute($profil)) {
					mysqli_stmt_close($profil);
					echo '<script>alert("User berhasil di hapus !");window.location.replace("../lihat-user.php");</script>';
				}
			}
		}
	}

	echo '<script>alert("Telah terjadi kesalahan !");window.location.replace("../lihat-user.php");</script>';

	mysqli_close($conn);

?>