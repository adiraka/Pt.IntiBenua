<?php

	$id = "";

	include('../../../incl/validasi.php');

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$id = validasi_input($_POST["id"]);
	}

	include('../../../incl/koneksi.php');

	$sql = "DELETE FROM tbkegiatan WHERE id = ?";

	if ($hapus = mysqli_prepare($conn, $sql)) {
		mysqli_stmt_bind_param($hapus, "s", $id);
		if (mysqli_stmt_execute($hapus)) {
			echo '<script>alert("Tema TBT berhasil dihapus !");window.location.replace("../lihat-tema-tbt.php");</script>';
		} else {
			echo '<script>alert("Telah terjadi kesalahan !");window.location.replace("../lihat-tema-tbt.php");</script>';
		}
	}

?>