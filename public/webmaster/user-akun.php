<?php include('partials/header.php') ?>

<div class="container">
	<div class="row">
		<div class="col-md-3 col-sm-3">
			<?php include('partials/user-menu.php') ?>
		</div>
		<div class="col-md-9 col-sm-9">
			<div class="panel panel-default">
				<div class="panel-heading">
					<b>FORM TAMBAH AKUN</b>
				</div>
				<div class="panel-body">
					<form action="process/tambah-akun.php" role="form" method="POST">
						<div class="form-group">
							<label for="id">ID Karyawan</label>
							<input type="text" name="id" id="id" class="form-control" required>
						</div>
						<div class="form-group">
							<label for="nama">Nama Lengkap Karyawan</label>
							<input type="text" name="nama" id="nama" class="form-control" required>
						</div>
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" name="username" id="username" class="form-control" required>
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" name="password" id="password" class="form-control" required>
						</div>
						<div class="form-group">
							<label for="hak">Hak Akses</label>
							<select name="hak" id="hak" class="form-control" required>
								<option value="" selected>--Pilih Hak Akses--</option>
								<?php
									include('../../incl/koneksi.php');
									$sql = "SELECT idhakakses, nmhakakses FROM tbhakakses";
									$result = mysqli_query($conn, $sql);
									if (mysqli_num_rows($result) > 0) {
										while($row = mysqli_fetch_assoc($result)) {
											echo '<option value="'.$row['idhakakses'].'">'.$row['nmhakakses'].'</option>';
										}
									}
									mysqli_close($conn);
								?>
							</select>
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