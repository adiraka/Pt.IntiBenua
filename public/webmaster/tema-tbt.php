<?php include('partials/header.php') ?>

<div class="container">
	<div class="row">
		<div class="col-md-3 col-sm-3">
			<?php include('partials/tema-tbt-menu.php') ?>
		</div>
		<div class="col-md-9 col-sm-9">
			<div class="panel panel-default">
				<div class="panel-heading">
					<b>TABEL DATA AKUN</b>
				</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-bordered tabel-userakun display">
							<thead>
								<th>ID Karyawan</th>
								<th>Nama Karyawan</th>
								<th>Username</th>
								<th>Hak Akses</th>
								<th>Status</th>
								<th style="width: 40px;">Aksi</th>
							</thead>
							<tbody>
								<?php
									include('../../incl/koneksi.php');
									$sql = "SELECT tbuserakun.idkaryawan, tbuserprofil.nama, tbuserakun.username, tbhakakses.nmhakakses, tbuserakun.status FROM tbuserakun, tbuserprofil, tbhakakses WHERE tbuserprofil.idkaryawan = tbuserakun.idkaryawan AND tbhakakses.idhakakses = tbuserakun.idhakakses";
									$result = mysqli_query($conn, $sql);
									if (mysqli_num_rows($result) > 0) {
										while($row = mysqli_fetch_assoc($result)) {
								?>
									<tr>
										<td><?php echo $row["idkaryawan"] ?></td>
										<td><?php echo $row["nama"] ?></td>
										<td><?php echo $row["username"] ?></td>
										<td><?php echo $row["nmhakakses"] ?></td>
										<td>
											<?php
												if ($row["status"] != 1) {
													echo '<a href="process/ubah-stat.php?id='.$row["idkaryawan"].'&stat='.$row["status"].'" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-unchecked"></span></a> Non Aktif';
												} else {
													echo '<a href="process/ubah-stat.php?id='.$row["idkaryawan"].'&stat='.$row["status"].'" class="btn btn-xs btn-success"><span class="glyphicon glyphicon-check"></span></a> Aktif';
												}
											?>
										</td>
										<td>
											<a href="ubah-user.php?id=<?php echo $row["idkaryawan"] ?>&act=ed" class="btn btn-xs btn-success"><span class="glyphicon glyphicon-lock"></span></a>
											&nbsp;
											<a href="hapus-user.php?id=<?php echo $row["idkaryawan"] ?>&act=del" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
										</td>
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
</div>

<?php include('partials/footer.php') ?>