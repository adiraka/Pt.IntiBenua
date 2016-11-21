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
					<table class="table table-bordered tabel-tbt display">
						<thead>
							<th>Tanggal</th>
							<th>Tema TBT</th>
							<th style="width: 40px;">Aksi</th>
						</thead>
						<tbody>
							<?php
								include('../../incl/koneksi.php');
								$idkar = $_SESSION["idkaryawan"];
								$sql = "SELECT id, tgl, tematbt, stat FROM tbkegiatan WHERE idkaryawan = '".$idkar."'";
								$result = mysqli_query($conn, $sql);
								if (mysqli_num_rows($result) > 0) {
									while($row = mysqli_fetch_assoc($result)) {
							?>
								<tr>
									<td><?php echo $row["tgl"] ?></td>
									<td><?php echo $row["tematbt"] ?></td>
									<td>
										<?php
											if ($row["stat"] == 1) {
												echo "Validate";
											} else {
										?>
										<a href="ubah-tema-tbt.php?id=<?php echo $row["id"] ?>&act=ed" class="btn btn-xs btn-success"><span class="glyphicon glyphicon-edit"></span></a>
										&nbsp;
										<a href="hapus-tema-tbt.php?id=<?php echo $row["id"] ?>&act=del" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
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