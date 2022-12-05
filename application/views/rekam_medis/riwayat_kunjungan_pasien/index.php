    <!-- Page content Header -->
    <div class="page-heading">
        <div class="row">
            <!-- Page Title -->
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Rekam Medis Riwayat Kunjungan Pasien</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <!-- Breadcrumb -->
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard/index'); ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Rekam Medis Riwayat Kunjungan Pasien</li>
                    </ol>
                </nav>
            </div>
        </div>
        <?php 
            if($this->session->flashdata('alert')){
                echo $this->session->flashdata('alert');
            }
        ?>
    </div>

    <!-- Page content -->
    <div class="page-content">
        <!-- Data Riwayat Kunjungan Pasien start -->
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
                            <button type="button" class="btn btn-sm btn-primary btn-sm" title="Tambah data" data-bs-toggle="modal" data-bs-target="#FormTambah"><i class="fas fa-plus"></i> Tambah</button>
                            <a href="<?php echo site_url('riwayat_kunjungan_pasien')?>" class="btn btn-success btn-sm" title="Refresh halaman"><i class="bi bi-arrow-clockwise"></i> refresh</a>
                        </div>
                    </div>

                     <!-- Modal Tambah Rekam Medis -->
                     <div class="modal fade text-start modal-borderless" id="FormTambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                            <div class="modal-content">
                            <?php
                                foreach($pasien as $key){}
                            ?>
                            <?php echo form_open('riwayat_kunjungan_pasien/create_page/' . $key->pasien_id); ?>
                                <form>
                                    <div class="modal-body">
                                        <div class="row form-group">
                                            <div class="col-12">
                                                <label for=""><strong> PASIEN </strong></label>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-12">
                                            <?php echo csrf(); ?>
                                                <input type="hidden" class="form-control" name="pasien_id" value="<?php echo $key->pasien_id; ?>">
                                                    <select class="choices form-select" name="pasien_id" required style="width:100%">
                                                        <option value="">- Pilih Pasien -</option>
                                                        <?php
                                                            foreach($pasien as $key){
                                                                echo '<option value="'.$key->pasien_id.'">'.$key->no_rekam_medis." | ".$key->nama_pasien.'</option>';
                                                            }
                                                        ?>

                                                    </select>
                                                    <input type="hidden" class="form-control" name="pasien_id" value="<?php echo $key->pasien_id; ?>">
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Buat</button>
                                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">Batal</button>
                                    </div>
                                </form>
                            <?php echo form_close(); ?>
                            </div>
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
                                            <th>Tanggal Kunjungan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if ($riwayat_kunjungan_pasien) {
                                            $nox = 1;
                                            $no = 1;
                                            foreach ($riwayat_kunjungan_pasien as $key) {

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
                                                                    <?php echo form_open("riwayat_kunjungan_pasien/detail_page/" . $key->riwayat_kunjungan_pasien_id); ?>
                                                                    <?php echo csrf(); ?>
                                                                    <button type="submit" class="dropdown-item" title="Lihat data"><i class="bi bi-eye"></i> Detail</button>
                                                                    <input type="hidden" class="form-control" name="riwayat_kunjungan_pasien_id" required="required">
                                                                    <?php echo form_close(); ?>
                                                                </li>
                                                                <li>
                                                                    <?php echo form_open("riwayat_kunjungan_pasien/update_page/" . $key->riwayat_kunjungan_pasien_id); ?>
                                                                    <?php echo csrf(); ?>
                                                                    <button type="submit" class="dropdown-item" title="Ubah data"><i class="bi bi-pencil-square"></i> Ubah</button>
                                                                    <input type="hidden" class="form-control" name="riwayat_kunjungan_pasien_id" required="required">
                                                                    <?php echo form_close(); ?>
                                                                </li>
                                                                <li>
                                                                    <?php echo form_open("riwayat_kunjungan_pasien/delete") ?>
                                                                    <?php echo csrf(); ?>
                                                                    <button type="submit" class="dropdown-item" title="Hapus data"><i class="bi bi-x-lg"></i> Hapus</button>
                                                                    <input type="hidden" class="form-control" name="riwayat_kunjungan_pasien_id" required="required" value="<?php echo $key->riwayat_kunjungan_pasien_id; ?>">
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
        <!-- Data Riwayat Kunjungan Pasien end -->
    </div>