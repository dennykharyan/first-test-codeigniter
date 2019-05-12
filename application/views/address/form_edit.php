<div class="container">

    <?php if ($this->session->flashdata('warning')): ?>
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="alert alert-danger alert-dismissible fade show">
                    Email tersebut telah digunakan, mohon untuk cek kembali
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>


    <div class="row mt-3">
        <div class="col-md-8 mx-auto">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title text-center"><?= $judul; ?></h5>
                    <hr>


                    <form action="" method="post">
                        <input type="hidden" name="txtAddressId" value="<?= $alamat['address_id']; ?>">

                        <div class="form-group">
                            <label for="txtAddress">Alamat</label>
                            <textarea name="txtAddress" class="form-control" rows="3"><?= $alamat['address']; ?></textarea>
                            <small class="form-text text-danger"><?= form_error('txtAddress'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="txtCity">Kota</label>
                            <input type="text" name="txtCity" class="form-control" value="<?= $alamat['city']; ?>">
                            <small class="form-text text-danger"><?= form_error('txtCity'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="txtProvince">Provinsi</label>
                            <input type="text" name="txtProvince" class="form-control" value="<?= $alamat['province']; ?>">
                            <small class="form-text text-danger"><?= form_error('txtProvince'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="txtZip">Kode Pos</label>
                            <input type="text" name="txtZip" class="form-control" value="<?= $alamat['zip_code']; ?>">
                            <small class="form-text text-danger"><?= form_error('txtZip'); ?></small>
                        </div>

                        <div class="form-group">
                            <a href="<?= base_url('employee/detail/') . $alamat['employee_id'] ?>" class="btn btn-secondary btn-block">Batal</a>
                            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>