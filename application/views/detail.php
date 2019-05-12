<div class="container">
	<div class="row mt-3">
		<div class="col-md-10 mx-auto">
			<div class="card">
				<div class="card-header"><?= $judul ?></div>

				<div class="card-body">
					<?php
						foreach ($employee_data as $row) :
							# code...
					?>
							<div class="row">
								<div class="col-md-12">
									<a href="<?= base_url() . "employee/edit_employee/$row[employee_id]" ?>" class="btn btn-primary float-right">Edit Data</a>
								</div>
							</div>

							<div class="row mt-3">
								<table class="table-borderless">
									<tr>
										<td>Nama Depan</td>
										<td>: <?= $row['first_name']; ?></td>
									</tr>
									<tr>
										<td>Nama Belakang</td>
										<td>: <?= $row['last_name']; ?></td>
									</tr>
									<tr>
										<td>Email</td>
										<td>: <?= $row['email']; ?></td>
									</tr>
									<tr>
										<td>Posisi</td>
										<td>: <?= $row['position']; ?></td>
									</tr>
									<tr>
										<td>Tanggal Bergabung</td>
										<td>: <?= $row['join_date']; ?></td>
									</tr>
									<tr>
										<td>Telepon</td>
										<td>: <?= $row['phone']; ?></td>
									</tr>
						</table>
					</div>

					<div class="row mt-3">
						<div class="col-md-12">
							<a href="<?= base_url() . "address/add_address/$row[employee_id]" ?>" class="btn btn-primary float-right">Tambah Alamat Baru</a>
						</div>
					</div>

					<div class="row mt-3">
						<table class="table table-striped">
							<thead>
								<tr>
									<td>No.</td>
									<td>Alamat</td>
									<td>Kota</td>
									<td>Provinsi</td>
									<td>Kode Pos</td>
									<td></td>
								</tr>
								<?php
									$no = 1;
									foreach ($employee_data as $add_row) {
										# code...
								?>
										<tr>
											<td><?= $no; ?></td>
											<td><?= $add_row['address']; ?></td>
											<td><?= $add_row['city']; ?></td>
											<td><?= $add_row['province']; ?></td>
											<td><?= $add_row['zip_code']; ?></td>
										</tr>
								<?php
									}
								?>
							</thead>
						</table>

						<?php
							endforeach;
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>