<?php include('partials/header.php') ?>

<?php

	$id = $_SESSION["idkaryawan"];

	include '../../incl/koneksi.php';

	$sql = "SELECT idkaryawan, nama, tmplahir, tgllahir, jekel, agama, alamat, telepon, jabatan FROM tbuserprofil WHERE idkaryawan = ?";

	$profil = mysqli_prepare($conn, $sql);
	mysqli_stmt_bind_param($profil, "s", $id);
	mysqli_stmt_execute($profil);
	mysqli_stmt_bind_result($profil, $idkar, $nama, $tmp, $tgl, $jekel, $agama, $alamat, $tlp, $jabatan);
	mysqli_stmt_fetch($profil);

	include '../../incl/validasi.php';

?>

<div class="container">
	<div class="row">
		<div class="col-md-3 col-sm-3">
			<?php include('partials/profil-menu.php') ?>
		</div>
		<div class="col-md-9 col-sm-9">
			<div class="panel panel-default">
				<div class="panel-heading">
					<b>FORM UBAH PROFIL</b>
				</div>
				<div class="panel-body">
					<form action="process/ubah-profile.php" role="form" method="POST">
						<div class="form-group">
							<label for="id">ID Karyawan</label>
							<input type="text" name="id" id="id" class="form-control" value="<?php echo $id ?>" required readonly>
						</div>
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" name="nama" id="nama" class="form-control" value="<?php echo validasi_input($nama) ?>">
						</div>
						<div class="form-group">
							<label for="tmplhr">Tempat Lahir</label>
							<input type="text" name="tmplhr" id="tmplhr" class="form-control" value="<?php echo validasi_input($tmp) ?>">
						</div>
						<div class="form-group">
							<label for="tgllhr">Tanggal Lahir</label>
							<input type="date" name="tgllhr" id="tgllhr" class="form-control" value="<?php echo validasi_input($tgl) ?>" data-provide="datepicker" data-date-format="yyyy-mm-dd">
						</div>
						<div class="form-group">
							<label for="jekel">Jenis Kelamin</label>
							<select name="jekel" id="jekel" class="form-control">
								<?php
									if ($jekel != "") {
										echo '<option value="'.validasi_input($jekel).'">'.validasi_input($jekel).'</option>';
									} else {
										echo '<option value="" selected>--Pilih Jenis Kelamin--</option>';
									}
								?>
								<option value="Pria">Pria</option>
								<option value="Wanita">Wanita</option>
							</select>
						</div>
						<div class="form-group">
							<label for="agama">Agama</label>
							<select name="agama" id="agama" class="form-control">
								<?php
									if ($agama != "") {
										echo '<option value="'.validasi_input($agama).'">'.validasi_input($agama).'</option>';
									} else {
										echo '<option value="" selected>--Pilih Agama--</option>';
									}
								?>
								<option value="Islam">Islam</option>
								<option value="Katolik">Katolik</option>
								<option value="Protestan">Protestan</option>
								<option value="Hindu">Hindu</option>
								<option value="Buddha">Buddha</option>
								<option value="Konghucu">Konghucu</option>
							</select>
						</div>
						<div class="form-group">
							<label for="alamat">Alamat</label>
							<textarea name="alamat" id="alamat" cols="30" class="form-control"><?php echo validasi_input($alamat) ?></textarea>
						</div>
						<div class="form-group">
							<label for="telepon">Telepon</label>
							<input type="telepon" name="telepon" id="telepon" class="form-control" value="<?php echo validasi_input($tlp) ?>">
						</div>
						<div class="form-group">
							<label for="jabatan">Jabatan</label>
							<input type="jabatan" name="jabatan" id="jabatan" class="form-control" value="<?php echo validasi_input($jabatan) ?>">
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