<div class="container">
	<div class="row mt-3 mx-auto">
		<div class="col-md-7 mx-auto">
			<div class="card">
				<div class="card-header">
					<?= $judul; ?>
				</div>

				<div class="card-body">
					<form method="post" action="">
						<?php
							foreach ($employee as $row) :
						?>
						<input type="hidden" name="txtEmployeeId" value="<?= $row['employee_id'] ?>">
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="txtFirstName">First Name</label>
								<input type="text" class="form-control" name="txtFirstName" id="txtFirstName" value="<?= $row['first_name'] ?>">
								<small class="form-text text-danger"><?= form_error('txtFirstName'); ?></small>
							</div>
							<div class="form-group col-md-6">
								<label for="txtLastName">Last Name</label>
								<input type="text" class="form-control" name="txtLastName" id="txtLastName" value="<?= $row['last_name']; ?>">
								<small class="form-text text-danger"><?= form_error('txtLastName'); ?></small>
							</div>
						</div>
						<div class="form-group">
							<label for="txtEmail">Email</label>
							<input type="text" class="form-control" name="txtEmail" id="txtEmail" value="<?= $row['email']; ?>">
							<small class="form-text text-danger"><?= form_error('txtEmail'); ?></small>
						</div>
						<div class="form-group">
							<label for="txtPosition">Position</label>
							<input type="text" class="form-control" name="txtPosition" id="txtPosition" value="<?= $row['position']; ?>">
							<small class="form-text text-danger"><?= form_error('txtPosition'); ?></small>
						</div>
						<div class="form-group">
							<label for="txtJoinDate">Join Date</label>
							<input type="text" class="form-control" name="txtJoinDate" id="txtJoinDate" value="<?= $row['join_date']; ?>">
							<small class="form-text text-danger"><?= form_error('txtJoinDate'); ?></small>
						</div>
						<div class="form-group">
							<label for="txtPhone">Phone Number</label>
							<input type="text" class="form-control" name="txtPhone" id="txtPhone" value="<?= $row['phone']; ?>">
							<small class="form-text text-danger"><?= form_error('txtPhone'); ?></small>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="txtCreatedBy">Create by</label>
								<input type="text" class="form-control" name="txtCreatedBy" id="txtCreatedBy" value="<?= $row['create_by']; ?>">
								<small class="form-text text-danger"><?= form_error('txtCreatedBy'); ?></small>
							</div>
							<div class="form-group col-md-6">
								<label for="txtCreateAt">Create at</label>
								<input type="text" class="form-control" name="txtCreateAt" id="txtCreateAt" value="<?= $row['create_at']; ?>">
								<small class="form-text text-danger"><?= form_error('txtCreateAt'); ?></small>
							</div>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-block">Save</button>
						</div>
						<?php endforeach ?>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>