<div class="container">
    <div class="row mt-3">
        <div class="col-md-8 mx-auto">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title text-center"><?= $judul; ?></h5>
                    <hr>


                    <form action="" method="post">

                        <input type="hidden" name="txtEmployeeId" class="form-control" value="<?= $karyawan['employee_id']; ?>">

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="txtFirstName">Nama Depan</label>
                                <input type="text" name="txtFirstName" class="form-control" value="<?= $karyawan['first_name']; ?>">
                                <small class="form-text text-danger"><?= form_error('txtFirstName'); ?></small>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="txtLastName">Nama Belakang</label>
                                <input type="text" name="txtLastName" class="form-control" value="<?= $karyawan['last_name']; ?>">
                                <small class="form-text text-danger"><?= form_error('txtLastName'); ?></small>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="txtEmail">Email</label>
                            <input type="text" name="txtEmail" class="form-control" value="<?= $karyawan['email']; ?>">
                            <small class="form-text text-danger"><?= form_error('txtEmail'); ?></small>
                        </div>
                        
                        <div class="form-group">
                            <label for="txtPosition">Posisi</label>
                            <input type="text" name="txtPosition" class="form-control" value="<?= $karyawan['position']; ?>">
                            <small class="form-text text-danger"><?= form_error('txtPosition'); ?></small>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="txtJoinDate">Tanggal Masuk</label>
                                <input type="text" name="txtJoinDate" class="form-control" value="<?= $karyawan['join_date']; ?>">
                                <small class="form-text text-danger"><?= form_error('txtJoinDate'); ?></small>
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="txtPhone">No. Telepon</label>
                                <input type="text" name="txtPhone" class="form-control" value="<?= $karyawan['phone']; ?>">
                                <small class="form-text text-danger"><?= form_error('txtPhone'); ?></small>
                            </div>
                        </div>

                        <div class="form-group mt-3">
                            <button type="reset" class="btn btn-secondary btn-block">Batal</button>
                            <button type="submit" class="btn btn-info btn-block">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>