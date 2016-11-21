<?php

	$id = $stat = "";

	include('../../../incl/validasi.php');

	if ($_SERVER["REQUEST_METHOD"] == "GET") {
		$id = validasi_input($_GET["id"]);
		$stat = validasi_input($_GET["stat"]);
	}

	include('../../../incl/koneksi.php');

	if ($stat != 1) {
		$sql = "UPDATE tbkegiatan SET stat = 1 WHERE id = ?";
	} else {
		$sql = "UPDATE tbkegiatan SET stat = 0 WHERE id = ?";
	}

	if ($acc = mysqli_prepare($conn, $sql) ) {
		mysqli_stmt_bind_param($acc, "s", $id);
		if (mysqli_stmt_execute($acc)) {
			echo '<script>alert("Status tema tbt berhasil di ubah !");window.location.replace("../lihat-tema-tbt.php");</script>';
		} else {
			echo '<script>alert("Telah terjadi kesalahan !");window.location.replace("../lihat-tema-tbt.php");</script>';
		}
	}

?>