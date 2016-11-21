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
			<?php include('partials/tema-tbt-menu.php') ?>
		</div>
		<div class="col-md-9 col-sm-9">
			<div class="panel panel-default">
				<div class="panel-heading">
					<b>HAPUS TEMA TBT</b>
				</div>
				<div class="panel-body">
					<form action="process/hapus-tbt.php" role="form" method="POST">
						<div class="form-group">
							<input type="hidden" name="id" id="id" class="form-control" value="<?php echo $id ?>" required readonly>
						</div>
						<div class="form-group">
							<p>
								Apakah anda yakin ingin menghapus tema tbt ini ?
							</p>
						</div>
						<div class="form-group button">
							<button type="submit" class="btn btn-default">HAPUS</button>&nbsp;
							<a href="lihat-tema-tbt.php" class="btn btn-default">BATAL</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include('partials/footer.php') ?>