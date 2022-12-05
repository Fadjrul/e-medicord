    <!-- Page content Header -->
    <div class="page-heading">
        <div class="row">
            <!-- Page Title -->
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Rekam Medis Pengkajian Awal</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <!-- Breadcrumb -->
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard/index'); ?>"> Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Rekam Medis Pengkajian Awal</li>
                    </ol>
                </nav>
            </div>
        </div>
        <?php 
            if ($this->session->flashdata('alert')) {
                echo $this->session->flashdata('alert');
                unset($_SESSION['alert']);
            } 
        ?>
    </div>

    <!-- Page content -->
    <div class="page-content">
        <!-- Data Pengkajian awal start -->
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-2 text-center">
                            <img src="<?php echo base_url(); ?>assets/core-images/kota_kendari.png" alt="Logo Kota Kendari" height="120">
                        </div>
                        <div class="col-8 text-center">
                            <h4>DINAS KESEHATAN KOTA KENDARI</h4>
                            <h2>UPTD PUSKESMAS MEKAR</h2>
                            <p><small><?php echo $setting[0]->setting_address; ?> Telp <?php echo $setting[0]->setting_phone; ?> <br> Email : <?php echo $setting[0]->setting_email; ?></small></p>
                        </div>
                        <div class="col-2 text-center">
                            <img src="<?php echo base_url(); ?>assets/core-images/puskesmas.png" alt="Logo Puskesmas" height="120">
                        </div>
                        <hr>
                    </div>
                </div>

                <div class="card-content">
                    <div class="row me-4">
                        <div class="col-md-12 col-12 text-end">
                            <a href="<?= site_url('pengkajian_awal/create_page'); ?>" class="btn btn-sm btn-primary" title="Tambah data"><i class="fas fa-plus"></i> Tambah</a>
                            <a href="<?php echo site_url('pengkajian_awal')?>" class="btn btn-success btn-sm" title="Refresh halaman"><i class="bi bi-arrow-clockwise"></i> refresh</a>
                        </div>
                    </div>

                    <!-- data tabel -->
                    <div class="row p-4" id="table-hover-row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-hover" id="DataTable">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nomor Rekam Medis</th>
                                            <th>Nama Pasien</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tanggal Periksa</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if ($pengkajian_awal) {
                                            $nox = 1;
                                            $no = 1;
                                            foreach ($pengkajian_awal as $key) {

                                        ?>
                                                <tr>
                                                    <td><?php echo $no + $numbers; ?></td>
                                                    <td><?php echo $key->no_rekam_medis ?></td>
                                                    <td><?php echo $key->nama_pasien ?></td>
                                                    <td><?php echo $key->jenis_kelamin ?></td>
                                                    <td><?php echo $key->createtime ?></td>
                                                    
                                                    <td>
                                                        <div class="btn-group dropstart mb-1">
                                                            <button type="button" class="btn btn-info btn-sm dropdown-toggle" title="Pilih Aksi" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i></button>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <?php echo form_open("pengkajian_awal/detail_page/" . $key->pengkajian_awal_id); ?>
                                                                    <?php echo csrf(); ?>
                                                                    <button type="submit" class="dropdown-item" title="Lihat data"><i class="bi bi-eye"></i> Detail</button>
                                                                    <input type="hidden" class="form-control" name="pengkajian_awal_id" required="required">
                                                                    <?php echo form_close(); ?>
                                                                </li>
                                                                <li>
                                                                    <?php echo form_open("pengkajian_awal/update_page/" . $key->pengkajian_awal_id); ?>
                                                                    <?php echo csrf(); ?>
                                                                    <button type="submit" class="dropdown-item" title="Ubah data"><i class="bi bi-pencil-square"></i> Ubah</button>
                                                                    <input type="hidden" class="form-control" name="pengkajian_awal_id" required="required">
                                                                    <?php echo form_close(); ?>
                                                                </li>
                                                                <li>
                                                                    <?php echo form_open("pengkajian_awal/delete") ?>
                                                                    <?php echo csrf(); ?>
                                                                    <button type="submit" class="dropdown-item" title="Hapus data"><i class="bi bi-x-lg"></i> Hapus</button>
                                                                    <input type="hidden" class="form-control" name="pengkajian_awal_id" required="required" value="<?php echo $key->pengkajian_awal_id; ?>">
                                                                    <?php echo form_close(); ?>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>

                                        <?php
                                                $no++;
                                            }
                                        } else {
                                            echo '
                                                <tr class="text-center">
                                                    <td colspan="6">Tidak ada data ditemukan</td>
                                                </tr>
                                                ';
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p-3">
                    <p><small>Page rendered in <strong>{elapsed_time}</strong> seconds.</small></p>
                </div>
            </div>
    
        </section>
        <!-- Data Pengkajian awal end -->
    </div>