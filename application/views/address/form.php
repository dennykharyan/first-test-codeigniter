<div class="container">
    <div class="row mt-3">
        <div class="col-md-8 mx-auto">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title text-center"><?= $judul; ?></h5>
                    <hr>


                    <form action="" method="post">
                        <input type="hidden" name="txtEmployeeId" value=<?= $id; ?>>

                        <div class="form-group">
                            <label for="txtAddress">Alamat</label>
                            <textarea name="txtAddress" class="form-control" rows="3"><?= set_value('txtAddress'); ?></textarea>
                            <small class="form-text text-danger"><?= form_error('txtAddress'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="txtCity">Kota</label>
                            <input type="text" name="txtCity" class="form-control" value="<?= set_value('txtCity'); ?>">
                            <small class="form-text text-danger"><?= form_error('txtCity'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="txtProvince">Provinsi</label>
                            <input type="text" name="txtProvince" class="form-control" value="<?= set_value('txtProvince'); ?>">
                            <small class="form-text text-danger"><?= form_error('txtProvince'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="txtZip">Kode Pos</label>
                            <input type="text" name="txtZip" class="form-control" value="<?= set_value('txtZip'); ?>">
                            <small class="form-text text-danger"><?= form_error('txtZip'); ?></small>
                        </div>

                        <div class="form-group">
                            <a href="<?= base_url('employee/detail/') . $id ?>" class="btn btn-secondary btn-block">Batal</a>
                            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>