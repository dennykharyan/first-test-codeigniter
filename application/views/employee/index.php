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


        <?php if(empty($karyawan)) : ?>
            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="alert alert-danger alert-dismissible fade show">
                        Data tidak ditemukan
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        <?php endif ?>

        
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center"><?= $judul; ?></h3>
            </div>
        </div>


        <div class="row">
            <div class="col-md-6">
                <form action="" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Cari data karyawan" name="txtSearch">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-outline-secondary">Cari</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-6">
                <a href="<?= base_url('employee/tambah'); ?>" class="btn btn-primary float-right">+ Karyawan Baru</a>
            </div>
        </div>


        <div class="row mt-3">
            <div class="col-md-12 mx-auto text-center">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Posisi</th>
                            <th colspan="3"></th>
                        </tr>        
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;

                            foreach ($karyawan as $row) {
                                # code...
                        ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $row['last_name'] . ", " . $row['first_name']; ?></td>
                                    <td><?= $row['email']; ?></td>
                                    <td><?= $row['position']; ?></td>
                                    <td>
                                        <a href="<?= base_url('employee/detail/') . $row['employee_id'] ?>" class="btn btn-primary">Detail</a>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('employee/edit/') . $row['employee_id'] ?>" class="btn btn-warning">Edit</a>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('employee/hapus/') . $row['employee_id'] ?>" class="btn btn-danger" onclick="return confirm('Hapus data ini?');">Hapus</a>
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