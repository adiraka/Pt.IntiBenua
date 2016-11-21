<?php

	$id = $tgl = $kegiatan = "";

	include('../../../incl/validasi.php');

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$id = validasi_input($_POST["id"]);
		$tgl = validasi_input($_POST["tgl"]);
		$kegiatan = validasi_input($_POST["tematbt"]);
	}

	include('../../../incl/koneksi.php');

	$sql = "INSERT tbkegiatan (tgl, idkaryawan, tematbt) VALUES (?,?,?)";

	if ($tambah = mysqli_prepare($conn, $sql)) {
		mysqli_stmt_bind_param($tambah, "sss", $tgl, $id, $kegiatan);
		if (mysqli_stmt_execute($tambah)) {
			echo '<script>alert("Tema TBT berhasil ditambahkan !");window.location.replace("../tema-tbt.php");</script>';
		} else {
			echo '<script>alert("telah terjadi kesalahan !");window.location.replace("../tema-tbt.php");</script>';
		}

		mysqli_stmt_close($tambah);
	}

	mysqli_close($conn);

?>