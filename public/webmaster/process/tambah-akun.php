<?php 

	$id = $nama = $user = $pass = $ha = "";
	$stat = 1;

	include('../../../incl/validasi.php');

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$id = validasi_input($_POST["id"]);
		$nama = validasi_input($_POST["nama"]);
		$user = validasi_input($_POST["username"]);
		$pass = validasi_input($_POST["password"]);
		$ha = validasi_input($_POST["hak"]);
	}

	$pass = password_hash($pass, PASSWORD_BCRYPT);

	include('../../../incl/koneksi.php');

	$sql1 = "INSERT INTO tbuserakun (idkaryawan, username, password, idhakakses, status) VALUES (?,?,?,?,?)";
	$sql2 = "INSERT INTO tbuserprofil (idkaryawan, nama) VALUES (?,?)";

	$akun = mysqli_prepare($conn, $sql1);
	mysqli_stmt_bind_param($akun, 'ssssi', $id, $user, $pass, $ha, $stat);

	$profil = mysqli_prepare($conn, $sql2);
	mysqli_stmt_bind_param($profil, 'ss', $id, $nama);

	if (mysqli_stmt_execute($akun)) {
		if (mysqli_stmt_execute($profil)) {
			echo '<script>alert("User baru berhasil ditambahkan !");window.location.replace("../user-akun.php");</script>';
		} else {
			echo '<script>alert("Terjadi kesalahan dalam pengisian data !");window.location.replace("../user-akun.php");</script>';
		}
	} else {
		echo '<script>alert("Terjadi kesalahan dalam pengisian data !");window.location.replace("../user-akun.php");</script>';
	}

	mysqli_stmt_close($akun);
	mysqli_stmt_close($profil);
	mysqli_close($conn);

?>