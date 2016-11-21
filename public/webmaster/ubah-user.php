<?php include('partials/header.php') ?>

<?php

	$id = $act = "";

	include('../../incl/validasi.php');

	if ($_SERVER["REQUEST_METHOD"] == "GET") {
		$id = validasi_input($_GET["id"]);
		$act = validasi_input($_GET["act"]);
	}

?>

<div class="container">
	<div class="row">
		<div class="col-md-3 col-sm-3">
			<?php include('partials/user-menu.php') ?>
		</div>
		<div class="col-md-9 col-sm-9">
			<div class="panel panel-default">
				<div class="panel-heading">
					<b>FORM UBAH PASSWORD</b>
				</div>
				<div class="panel-body">
					<form action="process/ubah-password.php" role="form" method="POST">
						<div class="form-group">
							<label for="id">ID Karyawan</label>
							<input type="text" name="id" id="id" class="form-control" value="<?php echo $id ?>" required readonly>
						</div>
						<div class="form-group">
							<label for="password">Password Baru</label>
							<input type="password" name="password" id="password" class="form-control" required>
						</div>
						<div class="form-group button">
							<button type="submit" class="btn btn-default">SIMPAN</button>&nbsp;
							<a href="lihat-user.php" class="btn btn-default">BATAL</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include('partials/footer.php') ?>