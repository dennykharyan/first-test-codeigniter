<div class="container">
	<div class="row">
		<div class="col-md-10 mx-auto mt-3">
			<div class="row mt-3">
				<div class=" col-md-12">
					<a href="<?= base_url() ?>employee/add_employee" class="btn btn-primary">Tambah Data Karyawan</a>
				</div>
			</div>

			<div class="row mt-3">
				<div class="col-md-12 mx-auto">
					<h3><?= $judul; ?></h3>

					<?php
						if (empty($employee)) {
							# code...
					?>
							<div class="alert alert-danger">Data tidak ditemukan</div>
					<?php
						}
						else{
					?>
							<table class="table table-striped">
								<tr>
									<th>No.</th>
									<th>Nama</th>
									<th>Email</th>
									<th>Posisi</th>
									<th colspan="3"></th>
								</tr>
					<?php
								$no = 1;

								foreach ($employee as $row) {
									# code...
									
					?>
									<tr>
										<td><?= $no; ?></td>
										<td><?= $row['first_name'] . " " . $row['last_name']; ?></td>
										<td><?= $row['email']; ?></td>
										<td><?= $row['position']; ?></td>
										<td>
											<a href="<?= base_url() . "employee/delete_employee/$row[employee_id]" ?>" class="btn btn-danger mx-auto">Hapus</a>
										</td>
										<td>
											<a href="<?= base_url() . "employee/edit_employee/$row[employee_id]" ?>" class="btn btn-success mx-auto">Edit</a>
										</td>
										<td>
											<a href="<?= base_url() . "employee/employee_detail/$row[employee_id]" ?>" class="btn btn-primary mx-auto">Detail</a>
										</td>
									</tr>
					<?php
									$no++;
								}
					?>
							</table>
					<?php
						}
					?>
				</div>
			</div>
		</div>
	</div>
</div>