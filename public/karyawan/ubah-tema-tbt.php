<?php include('partials/header.php') ?>

<?php

	$id = $idkar = $tbt = "";

	include('../../incl/validasi.php');

	if ($_SERVER["REQUEST_METHOD"] == "GET") {
		$id = validasi_input($_GET["id"]);
	}

	include '../../incl/koneksi.php';

	$sql = "SELECT tgl, idkaryawan, tematbt FROM tbkegiatan WHERE id = ?";

	$result = mysqli_prepare($conn, $sql);
	mysqli_stmt_bind_param($result, "s", $id);
	mysqli_stmt_execute($result);
	mysqli_stmt_bind_result($result, $tgl, $idkar, $tbt);
	mysqli_stmt_fetch($result);

?>

<div class="container">
	<div class="row">
		<div class="col-md-3 col-sm-3">
			<?php include('partials/tema-tbt-menu.php') ?>
		</div>
		<div class="col-md-9 col-sm-9">
			<div class="panel panel-default">
				<div class="panel-heading">
					<b>FORM TEMA TBT</b>
				</div>
				<div class="panel-body">
					<form action="process/ubah-tbt.php" role="form" method="POST">
						<div class="form-group">
							<label for="id">ID Karyawan</label>
							<input type="text" name="id" id="id" class="form-control" value="<?php echo $_SESSION["idkaryawan"] ?>" required readonly>
							<input type="hidden" value="<?php echo $id ?>" name="idtbt">
						</div>
						<div class="form-group">
							<label for="tgl">Tanggal</label>
							<input type="text" name="tgl" id="tgl" class="form-control" required readonly value="<?php echo validasi_input($tgl) ?>">
						</div>
						<div class="form-group">
							<label for="tematbt">Tema TBT</label>
							<textarea name="tematbt" id="tematbt" cols="30" class="form-control" required><?php echo validasi_input($tbt) ?></textarea>
						</div>
						<div class="form-group button">
							<button type="submit" class="btn btn-default">SIMPAN</button>&nbsp;
							<a href="lihat-tema-tbt.php" class="btn btn-default">BATAL</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include('partials/footer.php') ?>