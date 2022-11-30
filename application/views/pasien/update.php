    <!-- Page content Header -->
    <div class="page-heading">
        <div class="row">
            <!-- Page Title -->
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Ubah Data Pasien</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <!-- Breadcrumb -->
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard/index'); ?>"> Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo site_url('pasien/index'); ?>"> Data Pasien</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Ubah Data Pasien</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Page content -->
    <div class="page-content">
        <!-- Data Pasien start -->
        <section class="section">
            <div class="row" id="table-hover-row">
                <div class="col-12">
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
                            <div class="row me-4 mt-1">
                                <div class="col-md-12 col-12 text-end">
                                    <a href="<?php echo site_url('pasien')?>" class="btn btn-warning btn-sm" title="Kembali ke halaman sebelumya">kembali</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <?php echo form_open_multipart("pasien/update") ?>
                                <form class="form">
                                    <div class="row">
                                        <div class="row">
                                            <div class="col-md-2 col-12">
                                                <label for="nama_pasien">Nama Pasien</label>
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <?php echo csrf(); ?>
                                                <input type="hidden" id="pasien_id" class="form-control" name="pasien_id" required="required" value="<?php echo $pasien[0]->pasien_id; ?>">
                                                <input type="text" id="nama_pasien" class="form-control" placeholder="Cnth. John" name="nama_pasien" required="required" value="<?php echo $pasien[0]->nama_pasien; ?>">
                                            </div>
                                            <div class="col-md-2 col-12">
                                                <label for="nama_kepala_keluarga">Nama Kepala Keluarga</label>
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <input type="text" id="nama_kepala_keluarga" class="form-control" name="nama_kepala_keluarga" placeholder="Cnth. John" required="required" value="<?php echo $pasien[0]->nama_kepala_keluarga; ?>">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2 col-12">
                                                <label for="nik_pasien">NIK / No. KTP </label>
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <input type="text" id="nik_pasien" class="form-control" placeholder="nik atau no. ktp" name="nik_pasien" required="required" value="<?php echo $nik_pasien; ?>">
                                            </div>
                                            <div class="col-md-2 col-12">
                                                <label for="no_kk">No. Kartu Keluarga</label>
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <input type="text" id="no_kk" class="form-control" name="no_kk" value="<?php echo $no_kk; ?>" required="required">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2 col-12">
                                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <div class="row">
                                                    <div class="col">
                                                        <?php
                                                        $l = 'Laki-laki';
                                                        if ($l == $pasien[0]->jenis_kelamin) {
                                                            echo '<input class="form-check-input" type="radio" name="jenis_kelamin" id="Laki-laki" value="Laki-laki" checked>
                                                                    <label for="Laki-laki">Laki-laki</label>';
                                                        } else {
                                                            echo '<input class="form-check-input" type="radio" name="jenis_kelamin" id="Laki-laki" value="Laki-laki">
                                                                    <label for="Laki-laki">Laki-laki</label>';
                                                        }

                                                        ?>
                                                    </div>
                                                    <div class="col">
                                                        <?php
                                                        $p = 'Perempuan';
                                                        if ($p == $pasien[0]->jenis_kelamin) {
                                                            echo '<input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" id="Perempuan" checked>
                                                                    <label for="Perempuan">Perempuan</label>';
                                                        } else {
                                                            echo '<input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" id="Perempuan">
                                                                    <label for="Perempuan">Perempuan</label>';
                                                        }

                                                        ?>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-12">
                                                <label for="no_telp_pasien">Nomor Telepon</label>
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <input type="text" id="no_telp_pasien" class="form-control" placeholder="+62 " name="no_telp_pasien" value="<?php echo $no_telp_pasien; ?>">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2 col-12">
                                                <label for="tgl_lahir_pasien">Tanggal Lahir</label>
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <input type="date" id="tgl_lahir_pasien" class="form-control" name="tgl_lahir_pasien" required="required" value="<?php echo $pasien[0]->tgl_lahir_pasien; ?>">
                                            </div>
                                            <div class="col-md-2 col-12">
                                                <label for="no_bpjs_pasien">Nomor BPJS</label>
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <input type="text" id="no_bpjs_pasien" class="form-control" placeholder="nomor BPJS" name="no_bpjs_pasien" value="<?php echo $pasien[0]->no_bpjs_pasien; ?>">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2 col-12">
                                                <label for="status_pasien_id">Status Pasien</label>
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <fieldset class="form-group">
                                                    <select class="form-select" id="status_pasien_id" name="status_pasien_id">
                                                        <option>- Pilih Status Pasien - </option>
                                                        <?php
                                                        foreach ($status_pasien as $sp) {
                                                            if ($pasien[0]->status_pasien_id == $sp->status_pasien_id) {
                                                                echo '<option value="' . $sp->status_pasien_id . '" selected>' . $sp->nama_status_pasien . '</option>';
                                                            } else {
                                                                echo '<option value="' . $sp->status_pasien_id . '">' . $sp->nama_status_pasien . '</option>';
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-2 col-12">

                                            </div>
                                            <div class="col-md-1 col-12">
                                                <label for="dw">dw</label>
                                            </div>
                                            <div class="col-md-1 form-group">
                                                <input type="text" id="dw" class="form-control" placeholder="dw" name="dw" value="<?php echo $pasien[0]->dw; ?>">
                                            </div>
                                            <div class="col-md-1 col-12">
                                                <label for="lw">lw</label>
                                            </div>
                                            <div class="col-md-1 form-group">
                                                <input type="text" id="lw" class="form-control" placeholder="lw" name="lw" value="<?php echo $pasien[0]->lw; ?>">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2 col-12">
                                                <label for="kepesertaan_pasien_id">Jenis Kepesertaan</label>
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <fieldset class="form-group">
                                                    <select class="form-select" id="kepesertaan_pasien_id" name="kepesertaan_pasien_id">
                                                        <option>- Pilih Jenis Kepesertaan - </option>
                                                        <?php
                                                        foreach ($kepesertaan_pasien as $kp) {
                                                            if ($pasien[0]->kepesertaan_pasien_id == $kp->kepesertaan_pasien_id) {
                                                                echo '<option value="' . $kp->kepesertaan_pasien_id . '" selected>' . $kp->nama_kepesertaan_pasien . '</option>';
                                                            } else {
                                                                echo '<option value="' . $kp->kepesertaan_pasien_id . '">' . $kp->nama_kepesertaan_pasien . '</option>';
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-2 col-12">
                                                    <label for="jns_key_id">Jenis Kunci</label>
                                                </div>
                                            <div class="col-md-4 form-group">
                                                <fieldset class="form-group">
                                                    <select class="form-select" id="jns_key_id" name="jns_key_id">
                                                        <option>- Pilih Jenis Kunci - </option>
                                                        <?php
                                                        foreach ($jns_key as $jk) {
                                                            if ($pasien[0]->jns_key_id == $jk->jns_key_id) {
                                                                echo '<option value="' . $jk->jns_key_id . '" selected>' . $jk->nama_jns_key . '</option>';
                                                            } else {
                                                                echo '<option value="' . $jk->jns_key_id . '">' . $jk->nama_jns_key . '</option>';
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2 col-12">
                                                <label for="alamat_pasien">Alamat</label>
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <textarea id="alamat_pasien" class="form-control" name="alamat_pasien" placeholder="Alamat" rows="4"><?php echo $alamat_pasien; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary btn-sm me-1 mb-1">Simpan</button>
                                        <button type="reset" class="btn btn-light-secondary btn-sm me-1 mb-1">Reset</button>
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
        <!-- Data Pasien end -->
    </div>