<?php

	$id = $idkar = $tgl = $tbt = "";

	include('../../../incl/validasi.php');

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$id = validasi_input($_POST["idtbt"]);
		$idkar = validasi_input($_POST["id"]);
		$tgl = validasi_input($_POST["tgl"]);
		$tbt = validasi_input($_POST["tematbt"]);
	}

	include('../../../incl/koneksi.php');

	$sql = "UPDATE tbkegiatan SET tgl = ?, tematbt = ? WHERE id = ?";

	if ($result = mysqli_prepare($conn, $sql)) {
		mysqli_stmt_bind_param($result, "sss", $tgl, $tbt, $id);
		if (mysqli_stmt_execute($result)) {
			echo '<script>alert("Tema TBT berhasil di ubah !");window.location.replace("../lihat-tema-tbt.php");</script>';
		} else {
			echo '<script>alert("Telah terjadi kesalahan !");window.location.replace("../lihat-tema-tbt.php");</script>';
		}
		mysqli_stmt_close($result);
	}

	mysqli_close($conn);

?>