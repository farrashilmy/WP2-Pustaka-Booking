<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Row for UX -->
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2 bg-primary">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-md font-weight-bold text-white text-uppercase mb-1">Jumlah Anggota</div>
                            <div class="h1 mb-0 font-weight-bold text-white">
                                <?= $this->ModelUser->getUserWhere(['role_id' => 1])->num_rows(); ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <a href="<?= base_url('user/anggota'); ?>"><i class="fas fa-users fa-3x text-warning"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add similar card structures for other data -->
    </div>
    <!-- End of Row for UX -->

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Row for Tables -->
    <div class="row">
        <!-- Data User Table -->
        <div class="table-responsive table-bordered col-sm-5 ml-auto mr-auto mt-2">
            <div class="page-header">
                <span class="fas fa-users text-primary mt-2"> Data User</span>
                <a class="text-danger" href="<?= base_url('user/data_user'); ?>">
                    <i class="fas fa-search mt-2 float-right"> Tampilkan</i>
                </a>
            </div>
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Anggota</th>
                        <th>Email</th>
                        <th>Role ID</th>
                        <th>Aktif</th>
                        <th>Member Sejak</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($anggota as $a) { ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $a['nama']; ?></td>
                            <td><?= $a['email']; ?></td>
                            <td><?= $a['role_id']; ?></td>
                            <td><?= $a['is_active']; ?></td>
                            <td><?= date('Y', $a['tanggal_input']); ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <!-- Data Buku Table -->
        <div class="table-responsive table-bordered col-sm-5 ml-auto mr-auto mt-2">
            <div class="page-header">
                <span class="fas fa-book text-warning mt-2"> Data Buku</span>
                <a href="<?= base_url('buku'); ?>">
                    <i class="fas fa-search text-primary mt-2 float-right"> Tampilkan</i>
                </a>
            </div>
            <div class="table-responsive">
                <table class="table mt-3" id="table-datatable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Judul Buku</th>
                            <th>Pengarang</th>
                            <th>Penerbit</th>
                            <th>Tahun Terbit</th>
                            <th>ISBN</th>
                            <th>Stok</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($buku as $b) { ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $b['judul_buku']; ?></td>
                                <td><?= $b['pengarang']; ?></td>
                                <td><?= $b['penerbit']; ?></td>
                                <td><?= $b['tahun_terbit']; ?></td>
                                <td><?= $b['isbn']; ?></td>
                                <td><?= $b['stok']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- End of Row for Tables -->
</div>
<!-- /.container-fluid -->
<!-- End of Main Content -->
