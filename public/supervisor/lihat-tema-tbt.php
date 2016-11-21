<?php include('partials/header.php') ?>

<div class="container">
	<div class="row">
		<div class="col-md-3 col-sm-3">
			<?php include('partials/tema-tbt-menu.php') ?>
		</div>
		<div class="col-md-9 col-sm-9">
			<div class="panel panel-default">
				<div class="panel-heading">
					<b>TABEL TEMA TBT</b>
				</div>
				<div class="panel-body">
					<table class="table table-bordered tabel-tbt2 display">
						<thead>
							<th>Tanggal</th>
							<th>ID Karyawan</th>
							<th>Nama Karyawan</th>
							<th>Tema TBT</th>
							<th style="width: 40px;">Aksi</th>
						</thead>
						<tbody>
							<?php
								include('../../incl/koneksi.php');
								$sql = "SELECT tbuserprofil.idkaryawan, tbuserprofil.nama, tbkegiatan.id, tbkegiatan.tgl, tbkegiatan.tematbt, tbkegiatan.stat FROM tbuserprofil, tbkegiatan WHERE tbuserprofil.idkaryawan = tbkegiatan.idkaryawan";
								$result = mysqli_query($conn, $sql);
								if (mysqli_num_rows($result) > 0) {
									while($row = mysqli_fetch_assoc($result)) {
							?>
								<tr>
									<td><?php echo $row["tgl"] ?></td>
									<td><?php echo $row["idkaryawan"] ?></td>
									<td><?php echo $row["nama"] ?></td>
									<td><?php echo $row["tematbt"] ?></td>
									<td>
										<?php
											if ($row["stat"] == 1) {
										?>
										<a href="process/acc-tbt.php?id=<?php echo $row["id"] ?>&stat=<?php echo $row["stat"] ?>" class="btn btn-xs btn-success"><span class="glyphicon glyphicon-check">Acc</span></a>
										<?php
											} else {
										?>
										<a href="process/acc-tbt.php?id=<?php echo $row["id"] ?>&stat=<?php echo $row["stat"] ?>" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-unchecked">BelumAcc</span></a>
										<?php } ?>
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

<?php include('partials/footer.php') ?>