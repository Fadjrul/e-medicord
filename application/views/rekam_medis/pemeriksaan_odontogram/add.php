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
                        <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard/index');?>"> Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo site_url('pengkajian_awal/index');?>"> Rekam Medis Riwayat Kunjungan Pasien</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Page content -->
    <div class="page-content">
        <!-- Data Pemeriksaan Odontogram start -->
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-2 text-center">
                                    <img src="<?php echo base_url();?>assets/core-images/kota_kendari.png" alt="Logo Kota Kendari" height="120">
                                </div>
                                <div class="col-8 text-center">
                                    <h4>DINAS KESEHATAN KOTA KENDARI</h4>
                                    <h2>UPTD PUSKESMAS MEKAR</h2>
                                    <p><small><?php echo $setting[0]->setting_address;?> Telp <?php echo $setting[0]->setting_phone;?> <br> Email : <?php echo $setting[0]->setting_email;?></small></p>
                                </div>
                                <div class="col-2 text-center">
                                    <img src="<?php echo base_url();?>assets/core-images/puskesmas.png" alt="Logo Puskesmas" height="120">
                                </div>
                                <hr>
                            </div>
                        </div>

                        <div class="card-content">
                            <div class="row me-4 mt-1">
                                <div class="col-md-12 col-12 text-end">
                                    <a href="<?php echo site_url('pemeriksaan_odontogram')?>" class="btn btn-warning btn-sm" title="Kembali ke halaman sebelumya"><i class="bi bi-arrow-left"></i> kembali</a>
                                </div>
                            </div>
                            <div class="card-title">
                                <div class="row p-3">
                                    <div class="col-md-12 col-12 text-center">
                                        <h4>FORMULIR PEMRIKSAAN ODONTOGRAM</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <?php echo form_open_multipart("pemeriksaan_odontogram/create")?>
                                    <form class="form">
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="form-group">
                                                    Nama Lengkap
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group">
                                                <?php echo csrf();?>
                                                <input type="hidden" id="pasien_id" class="form-control" name="pasien_id" required="required" value="<?php echo $pasien[0]->pasien_id; ?>">
                                                : <?php echo $pasien[0]->nama_pasien; ?>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="form-group">
                                                    Jenis Kelamin
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group">
                                                <?php echo csrf();?>
                                                <input type="hidden" id="pasien_id" class="form-control" name="pasien_id" required="required" value="<?php echo $pasien[0]->pasien_id; ?>">
                                                : <?php echo $pasien[0]->nama_pasien; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="form-group">
                                                    NIK/No. KTP
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group">
                                                <?php echo csrf();?>
                                                <input type="hidden" id="pasien_id" class="form-control" name="pasien_id" required="required" value="<?php echo $pasien[0]->pasien_id; ?>">
                                                : <?php echo $pasien[0]->nama_pasien; ?>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="form-group">
                                                    TTL
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group">
                                                <?php echo csrf();?>
                                                <input type="hidden" id="pasien_id" class="form-control" name="pasien_id" required="required" value="<?php echo $pasien[0]->pasien_id; ?>">
                                                : <?php echo $pasien[0]->nama_pasien; ?>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row mt-4 table-responsive">
                                            <table cellpadding="5" class="table-borderless border-start border-end border-top border-bottom text-center">
                                                <tr class="border-bottom">
                                                    <td class="border-end">
                                                        <div class="form-group">
                                                            11 [51]
                                                        </div>
                                                    </td>
                                                    <td class="border-end">
                                                        <div class="form-group">
                                                        <textarea class="form-control" name="odontogram_11[51]" rows="1"></textarea>
                                                    </td>
                                                    <td class="border-end">
                                                        <div class="form-group">
                                                            <textarea class="form-control" name="odontogram_[61]21" rows="1"></textarea>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            [61] 21
                                                    </td>
                                                </tr>
                                                <tr class="border-bottom">
                                                    <td class="border-end">
                                                        <div class="form-group">
                                                            12 [52]
                                                        </div>
                                                    </td>
                                                    <td class="border-end">
                                                        <div class="form-group">
                                                        <textarea class="form-control" name="odontogram_12[52]" rows="1"></textarea>
                                                    </td>
                                                    <td class="border-end">
                                                        <div class="form-group">
                                                            <textarea class="form-control" name="odontogram_[62]22" rows="1"></textarea>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            [62] 22
                                                    </td>
                                                </tr>
                                                <tr class="border-bottom">
                                                    <td class="border-end">
                                                        <div class="form-group">
                                                            13 [53]
                                                        </div>
                                                    </td>
                                                    <td class="border-end">
                                                        <div class="form-group">
                                                        <textarea class="form-control" name="odontogram_13[53]" rows="1"></textarea>
                                                    </td>
                                                    <td class="border-end">
                                                        <div class="form-group">
                                                            <textarea class="form-control" name="odontogram_[63]23" rows="1"></textarea>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            [63] 23
                                                    </td>
                                                </tr>
                                                <tr class="border-bottom">
                                                    <td class="border-end">
                                                        <div class="form-group">
                                                            14 [54]
                                                        </div>
                                                    </td>
                                                    <td class="border-end">
                                                        <div class="form-group">
                                                        <textarea class="form-control" name="odontogram_14[54]" rows="1"></textarea>
                                                    </td>
                                                    <td class="border-end">
                                                        <div class="form-group">
                                                            <textarea class="form-control" name="odontogram_[64]24" rows="1"></textarea>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            [64] 24
                                                    </td>
                                                </tr>
                                                <tr class="border-bottom">
                                                    <td class="border-end">
                                                        <div class="form-group">
                                                            15 [55]
                                                        </div>
                                                    </td>
                                                    <td class="border-end">
                                                        <div class="form-group">
                                                        <textarea class="form-control" name="odontogram_15[55]" rows="1"></textarea>
                                                    </td>
                                                    <td class="border-end">
                                                        <div class="form-group">
                                                            <textarea class="form-control" name="odontogram_[65]25" rows="1"></textarea>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            [65] 25
                                                    </td>
                                                </tr>
                                                <tr class="border-bottom">
                                                    <td class="border-end">
                                                        <div class="form-group">
                                                            16
                                                        </div>
                                                    </td>
                                                    <td class="border-end">
                                                        <div class="form-group">
                                                        <textarea class="form-control" name="odontogram_16" rows="1"></textarea>
                                                    </td>
                                                    <td class="border-end">
                                                        <div class="form-group">
                                                            <textarea class="form-control" name="odontogram_26" rows="1"></textarea>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            26
                                                    </td>
                                                </tr>
                                                <tr class="border-bottom">
                                                    <td class="border-end">
                                                        <div class="form-group">
                                                            17
                                                        </div>
                                                    </td>
                                                    <td class="border-end">
                                                        <div class="form-group">
                                                        <textarea class="form-control" name="odontogram_17" rows="1"></textarea>
                                                    </td>
                                                    <td class="border-end">
                                                        <div class="form-group">
                                                            <textarea class="form-control" name="odontogram_27" rows="1"></textarea>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            27
                                                    </td>
                                                </tr>
                                                <tr class="border-bottom">
                                                    <td class="border-end">
                                                        <div class="form-group">
                                                            18
                                                        </div>
                                                    </td>
                                                    <td class="border-end">
                                                        <div class="form-group">
                                                        <textarea class="form-control" name="odontogram_18" rows="1"></textarea>
                                                    </td>
                                                    <td class="border-end">
                                                        <div class="form-group">
                                                            <textarea class="form-control" name="odontogram_28" rows="1"></textarea>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            28
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>

                                        <div class="row mt-4 text-center">
                                            <div class="col-12">
                                                <img src="<?php echo base_url();?>assets/core-images/odontogram.svg" alt="Gambar Odontogram">
                                            </div>
                                        </div>

                                        <div class="row mt-4 table-responsive">
                                            <table cellpadding="5" class="table-borderless border-start border-end border-top border-bottom text-center">
                                                <tr class="border-bottom">
                                                    <td class="border-end">
                                                        <div class="form-group">
                                                            11 [51]
                                                        </div>
                                                    </td>
                                                    <td class="border-end">
                                                        <div class="form-group">
                                                        <textarea class="form-control" name="odontogram_11[51]" rows="1"></textarea>
                                                    </td>
                                                    <td class="border-end">
                                                        <div class="form-group">
                                                            <textarea class="form-control" name="odontogram_[61]21" rows="1"></textarea>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            [61] 21
                                                    </td>
                                                </tr>
                                                <tr class="border-bottom">
                                                    <td class="border-end">
                                                        <div class="form-group">
                                                            12 [52]
                                                        </div>
                                                    </td>
                                                    <td class="border-end">
                                                        <div class="form-group">
                                                        <textarea class="form-control" name="odontogram_12[52]" rows="1"></textarea>
                                                    </td>
                                                    <td class="border-end">
                                                        <div class="form-group">
                                                            <textarea class="form-control" name="odontogram_[62]22" rows="1"></textarea>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            [62] 22
                                                    </td>
                                                </tr>
                                                <tr class="border-bottom">
                                                    <td class="border-end">
                                                        <div class="form-group">
                                                            13 [53]
                                                        </div>
                                                    </td>
                                                    <td class="border-end">
                                                        <div class="form-group">
                                                        <textarea class="form-control" name="odontogram_13[53]" rows="1"></textarea>
                                                    </td>
                                                    <td class="border-end">
                                                        <div class="form-group">
                                                            <textarea class="form-control" name="odontogram_[63]23" rows="1"></textarea>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            [63] 23
                                                    </td>
                                                </tr>
                                                <tr class="border-bottom">
                                                    <td class="border-end">
                                                        <div class="form-group">
                                                            14 [54]
                                                        </div>
                                                    </td>
                                                    <td class="border-end">
                                                        <div class="form-group">
                                                        <textarea class="form-control" name="odontogram_14[54]" rows="1"></textarea>
                                                    </td>
                                                    <td class="border-end">
                                                        <div class="form-group">
                                                            <textarea class="form-control" name="odontogram_[64]24" rows="1"></textarea>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            [64] 24
                                                    </td>
                                                </tr>
                                                <tr class="border-bottom">
                                                    <td class="border-end">
                                                        <div class="form-group">
                                                            15 [55]
                                                        </div>
                                                    </td>
                                                    <td class="border-end">
                                                        <div class="form-group">
                                                        <textarea class="form-control" name="odontogram_15[55]" rows="1"></textarea>
                                                    </td>
                                                    <td class="border-end">
                                                        <div class="form-group">
                                                            <textarea class="form-control" name="odontogram_[65]25" rows="1"></textarea>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            [65] 25
                                                    </td>
                                                </tr>
                                                <tr class="border-bottom">
                                                    <td class="border-end">
                                                        <div class="form-group">
                                                            16
                                                        </div>
                                                    </td>
                                                    <td class="border-end">
                                                        <div class="form-group">
                                                        <textarea class="form-control" name="odontogram_16" rows="1"></textarea>
                                                    </td>
                                                    <td class="border-end">
                                                        <div class="form-group">
                                                            <textarea class="form-control" name="odontogram_26" rows="1"></textarea>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            26
                                                    </td>
                                                </tr>
                                                <tr class="border-bottom">
                                                    <td class="border-end">
                                                        <div class="form-group">
                                                            17
                                                        </div>
                                                    </td>
                                                    <td class="border-end">
                                                        <div class="form-group">
                                                        <textarea class="form-control" name="odontogram_17" rows="1"></textarea>
                                                    </td>
                                                    <td class="border-end">
                                                        <div class="form-group">
                                                            <textarea class="form-control" name="odontogram_27" rows="1"></textarea>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            27
                                                    </td>
                                                </tr>
                                                <tr class="border-bottom">
                                                    <td class="border-end">
                                                        <div class="form-group">
                                                            18
                                                        </div>
                                                    </td>
                                                    <td class="border-end">
                                                        <div class="form-group">
                                                        <textarea class="form-control" name="odontogram_18" rows="1"></textarea>
                                                    </td>
                                                    <td class="border-end">
                                                        <div class="form-group">
                                                            <textarea class="form-control" name="odontogram_28" rows="1"></textarea>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            28
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-12 d-flex justify-content-end mt-2">
                                                <button type="submit" class="btn btn-primary btn-sm me-1 mb-1" title="tambah">Simpan</button>
                                                <button type="reset" class="btn btn-light-secondary btn-sm me-1 mb-1" title="reset">Reset</button>    
                                            </div>
                                        </div>
                                    </form>
                                    <?php echo form_close(); ?>
                                </div>
                            </div>
                            <div class="p-3">
                                <p><small>Page rendered in <strong>{elapsed_time}</strong> seconds.</small></p>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- Data Pemeriksaan Odontogram end -->
    </div>