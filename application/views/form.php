<div class="container">
	<div class="row mt-3 mx-auto">
		<div class="col-md-7 mx-auto">
			<div class="card">
				<div class="card-header">
					<?= $judul; ?>
				</div>

				<div class="card-body">
					<form method="post" action="<?= base_url('employee/add_employee') ?>">
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="txtFirstName">First Name</label>
								<input type="text" class="form-control" name="txtFirstName" id="txtFirstName" value="<?= set_value('txtFirstName'); ?>">
								<small class="form-text text-danger"><?= form_error('txtFirstName'); ?></small>
							</div>
							<div class="form-group col-md-6">
								<label for="txtLastName">Last Name</label>
								<input type="text" class="form-control" name="txtLastName" id="txtLastName" value="<?= set_value('txtLastName'); ?>">
								<small class="form-text text-danger"><?= form_error('txtLastName'); ?></small>
							</div>
						</div>
						<div class="form-group">
							<label for="txtEmail">Email</label>
							<input type="text" class="form-control" name="txtEmail" id="txtEmail" value="<?= set_value('txtEmail'); ?>">
							<small class="form-text text-danger"><?= form_error('txtEmail'); ?></small>
						</div>
						<div class="form-group">
							<label for="txtPosition">Position</label>
							<input type="text" class="form-control" name="txtPosition" id="txtPosition" value="<?= set_value('txtPosition'); ?>">
							<small class="form-text text-danger"><?= form_error('txtPosition'); ?></small>
						</div>
						<div class="form-group">
							<label for="txtJoinDate">Join Date</label>
							<input type="text" class="form-control" name="txtJoinDate" id="txtJoinDate" value="<?= set_value('txtJoinDate'); ?>">
							<small class="form-text text-danger"><?= form_error('txtJoinDate'); ?></small>
						</div>
						<div class="form-group">
							<label for="txtPhone">Phone Number</label>
							<input type="text" class="form-control" name="txtPhone" id="txtPhone" value="<?= set_value('txtPhone'); ?>">
							<small class="form-text text-danger"><?= form_error('txtPhone'); ?></small>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="txtCreatedBy">Create by</label>
								<input type="text" class="form-control" name="txtCreatedBy" id="txtCreatedBy" value="<?= set_value('txtCreatedBy'); ?>">
								<small class="form-text text-danger"><?= form_error('txtCreatedBy'); ?></small>
							</div>
							<div class="form-group col-md-6">
								<label for="txtCreateAt">Create at</label>
								<input type="text" class="form-control" name="txtCreateAt" id="txtCreateAt" value="<?= set_value('txtCreateAt'); ?>">
								<small class="form-text text-danger"><?= form_error('txtCreateAt'); ?></small>
							</div>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-block">Save</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>