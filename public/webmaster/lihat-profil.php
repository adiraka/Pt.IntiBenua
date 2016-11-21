<?php include('partials/header.php') ?>

<div class="container">
	<div class="row">
		<div class="col-md-3 col-sm-3">
			<?php include('partials/profil-menu.php') ?>
		</div>
		<div class="col-md-9 col-sm-9">
			<div class="panel panel-default">
				<div class="panel-heading">
					<b>TABEL DATA AKUN</b>
				</div>
				<div class="panel-body">
					<table class="table table-bordered tabel-profil display">
						<thead>
							<th>ID Karyawan</th>
							<th>Nama</th>
							<th>Tmp/Tgl Lahir</th>
							<th>Jenis Kelamin</th>
							<th>Agama</th>
							<th>Alamat</th>
							<th>Telepon</th>
							<th>Jabatan</th>
						</thead>
						<tbody>
							<?php
								include('../../incl/koneksi.php');
								$sql = "SELECT * FROM tbuserprofil";
								$result = mysqli_query($conn, $sql);
								if (mysqli_num_rows($result) > 0) {
									while($row = mysqli_fetch_assoc($result)) {
							?>
								<tr>
									<td><?php echo $row["idkaryawan"] ?></td>
									<td><?php echo $row["nama"] ?></td>
									<td><?php echo $row["tmplahir"].' / '.$row["tgllahir"] ?></td>
									<td><?php echo $row["jekel"] ?></td>
									<td><?php echo $row["agama"] ?></td>
									<td><?php echo $row["alamat"] ?></td>
									<td><?php echo $row["telepon"] ?></td>
									<td><?php echo $row["jabatan"] ?></td>
								</tr>
							<?php
									}
								}
								mysqli_close($conn);
							?>
						</tbody>

					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include('partials/footer.php') ?>