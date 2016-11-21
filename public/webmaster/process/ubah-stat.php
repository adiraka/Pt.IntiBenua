<?php 

	$id = $stat = "";

	include('../../../incl/validasi.php');

	if ($_SERVER["REQUEST_METHOD"] == "GET") {
		$id = validasi_input($_GET["id"]);
		$stat = validasi_input($_GET["stat"]);
	}

	include('../../../incl/koneksi.php');

	if ($stat != 1) {
		$sql = "UPDATE tbuserakun SET status = 1 WHERE idkaryawan = ?";
	} else {
		$sql = "UPDATE tbuserakun SET status = 0 WHERE idkaryawan = ?";
	}

	if ($ubah = mysqli_prepare($conn, $sql)) {
		mysqli_stmt_bind_param($ubah, "s", $id);
		if (mysqli_stmt_execute($ubah)) {
			echo '<script>alert("Status akun berhasil di ubah !");window.location.replace("../lihat-user.php");</script>';
		} else {
			echo '<script>alert("Terjadi kesalahan dalam pengubahan status !");window.location.replace("../lihat-user.php");</script>';
		}
	}

	mysqli_stmt_close($ubah);
	mysqli_close($conn);

?>