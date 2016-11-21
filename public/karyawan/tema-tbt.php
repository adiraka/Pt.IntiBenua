<?php include('partials/header.php') ?>

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
					<form action="process/simpan-kegiatan.php" role="form" method="POST">
						<div class="form-group">
							<label for="id">ID Karyawan</label>
							<input type="text" name="id" id="id" class="form-control" value="<?php echo $_SESSION["idkaryawan"] ?>" required readonly>
						</div>
						<div class="form-group">
							<label for="tgl">Tanggal</label>
							<input type="text" name="tgl" id="tgl" class="form-control" required readonly value="<?php date_default_timezone_set('Asia/Jakarta'); echo date("Y-m-d"); ?>">
						</div>
						<div class="form-group">
							<label for="tematbt">Tema TBT</label>
							<textarea name="tematbt" id="tematbt" cols="30" class="form-control" required></textarea>
						</div>
						<div class="form-group button">
							<button type="submit" class="btn btn-default">SIMPAN</button>&nbsp;
							<button type="reset" class="btn btn-default">RESET</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include('partials/footer.php') ?>