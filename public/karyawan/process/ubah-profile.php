<?php

	$id = $nama = $tmp = $tgl = $jekel = $agama = $alamat = $tlp = $jabatan = "";

	include('../../../incl/validasi.php');

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$id = validasi_input($_POST["id"]);
		$nama = validasi_input($_POST["nama"]);
		$tmp = validasi_input($_POST["tmplhr"]);
		$tgl = validasi_input($_POST["tgllhr"]);
		$jekel = validasi_input($_POST["jekel"]);
		$agama = validasi_input($_POST["agama"]);
		$alamat = validasi_input($_POST["alamat"]);
		$tlp = validasi_input($_POST["telepon"]);
		$jabatan = validasi_input($_POST["jabatan"]);
	}

	include('../../../incl/koneksi.php');

	$sql = "UPDATE tbuserprofil SET nama = ?, tmplahir = ?, tgllahir = ?, jekel = ?, agama = ?, alamat = ?, telepon = ?, jabatan = ? WHERE idkaryawan = ?";

	if ($ubah = mysqli_prepare($conn, $sql)) {
		mysqli_stmt_bind_param($ubah, "sssssssss", $nama, $tmp, $tgl, $jekel, $agama, $alamat, $tlp, $jabatan, $id);
		if (mysqli_stmt_execute($ubah)) {
			echo '<script>alert("Profile berhasil di ubah !");window.location.replace("../profil.php");</script>';
		} else {
			echo '<script>alert("Telah terjadi kesalahan !");window.location.replace("../profil.php");</script>';
		}
	}

	mysqli_stmt_close($ubah);	
	mysqli_close($conn);

?>