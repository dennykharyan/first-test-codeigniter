<div class="container">


    <?php if ($this->session->flashdata('message')): ?>
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="alert alert-success alert-dismissible fade show">
                    Data berhasil <?= $this->session->flashdata('message'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>
    
    <div class="row mt-3">
        <div class="col-md-12">
            <a href="<?= base_url('employee/edit/') . $karyawan['employee_id']; ?>"  class="btn btn-warning float-right">Ubah data karyawan</a>
        </div>
    </div>
    

    <dl class="row mt-3">
        <dt class="col-md-3">Nama Depan</dt>
        <dt class="col-md-9"><b>:</b> <?= $karyawan['first_name']; ?></dt>

        <dt class="col-md-3">Nama Belakang</dt>
        <dt class="col-md-9"><b>:</b> <?= $karyawan['last_name']; ?></dt>

        <dt class="col-md-3">Email</dt>
        <dt class="col-md-9"><b>:</b> <?= $karyawan['email']; ?></dt>

        <dt class="col-md-3">Posisi</dt>
        <dt class="col-md-9"><b>:</b> <?= $karyawan['position']; ?></dt>

        <dt class="col-md-3">Tanggal Bergabung</dt>
        <dt class="col-md-9"><b>:</b> <?= $karyawan['join_date']; ?></dt>

        <dt class="col-md-3">No. Telepon</dt>
        <dt class="col-md-9"><b>:</b> <?= $karyawan['phone']; ?></dt>
    </dl>


    <div class="row mt-3">
        <div class="col-md-12">
            <a href="<?= base_url('address/tambah/') . $karyawan['employee_id']; ?>"  class="btn btn-primary float-right">Tambah alamat</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-12 mx-auto text-center">
            <table class="table table-stdiped">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Alamat</th>
                        <th>Kota</th>
                        <th>Provinsi</th>
                        <th>Kode Pos</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        $no = 1;

                        foreach ($alamat as $row) {
                            # code...
                    ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $row['address']; ?></td>
                                <td><?= $row['city']; ?></td>
                                <td><?= $row['province']; ?></td>
                                <td><?= $row['zip_code']; ?></td>
                                <td>
                                    <a href="<?= base_url('address/edit/') . $karyawan['employee_id'] . '/' . $row['address_id']; ?>" class="btn btn-warning">Ubah</a>
                                </td>
                                <td>
                                    <a href="<?= base_url('address/hapus/') . $karyawan['employee_id'] . '/' . $row['address_id']; ?>" class="btn btn-danger" onclick="return confirm('Hapus alamat ini?')">Hapus</a>
                                </td>
                            </tr>
                    <?php
                            $no++;
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>