<section id="akun" class="akun pb-4">
    <div class="container">

        <div class="row mb-4 pt-5 pb-5">
            <div class="col">
                <h2></h2>
            </div>
        </div>



        <div class="card">
            <h2 class="card-header text-center">Account</h2>
            <div class="card-body">

                <div class="row justify-content-center">

                    <div class="col-lg-4 text-center">
                        <div class="card">
                            <div class="card-body">
                                <img src="<?= base_url('assets/img/') . $client['image']; ?>" class=" pb-3" width="120">
                                <h3><?= $client['name']; ?></h3>

                                <div class="card-body pb-3">
                                    <div class="list-group">
                                        <a href="#" class="list-group-item list-group-item-action">Upload Photo</a>
                                        <a href="#" class="list-group-item list-group-item-action">Aktifkan Notifikasi</a>
                                        <a href="<?= base_url(); ?>talent/dataakun" class="list-group-item list-group-item-action">Account</a>
                                        <a href="<?= base_url(); ?>talent/profil" class="list-group-item list-group-item-action active">Profile</a>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="col-lg-7">

                        <div class="card">

                            <h5 class="card-header">Data Pribadi</h5>
                            <div class="card-body">
                                <nav class="nav">
                                    <a class="nav-link" href="<?= base_url('talent/profil'); ?>">Back Profile</a>
                                </nav>

                                <form>
                                    <div class="row ml-2 pb-2 pt-4">
                                        <div class="col-sm-4"><b>NIK</b></div>
                                        <div class="col-sm-5">
                                            <input class="form-control form-control-sm" name="nik" type="number" placeholder="Masukkan No KTP">
                                            <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?></div>
                                    </div>
                                    <div class="row ml-2 pb-2">
                                        <div class="col-sm-4"><b>Tempat Lahir</b></div>
                                        <div class="col-sm-5">
                                            <input class="form-control form-control-sm" name="tempatlahir" type="text" placeholder="Tempat Lahir">
                                            <?= form_error('tempatlahir', '<small class="text-danger pl-3">', '</small>'); ?></div>
                                    </div>
                                    <div class="row ml-2 pb-2">
                                        <div class="col-sm-4"><b>Tanggal Lahir</b></div>
                                        <div class="col-sm-5">
                                            <input class="form-control form-control-sm" name="tanggallahir" type="date" placeholder="Tanggal Lahir">
                                            <?= form_error('tanggallahir', '<small class="text-danger pl-3">', '</small>'); ?></div>
                                    </div>
                                    <div class="row ml-2 pb-3">
                                        <div class="col-sm-4"><b>Jenis Kelamin</b></div>
                                        <div class="col-sm-6">

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="jeniskelamin" value="laki-laki" checked>
                                                <label class="form-check-label" for="exampleRadios1">
                                                    laki-laki
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="jeniskelamin" value="Perempuan">
                                                <label class="form-check-label" for="exampleRadios2">
                                                    Perempuan
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row ml-2 pb-3">
                                        <div class="col-sm-4"><b>Pendidikan Terakhir</b></div>
                                        <div class="col-sm-6">
                                            <select class="form-control form-control-sm" name="pendidikanterakhir">
                                                <option value="">Pilih--</option>
                                                <option value="SMA">SMA</option>
                                                <option value="SMK">SMK</option>
                                                <option value="S1">S1</option>
                                                <option value="S2">S2</option>
                                            </select>
                                            <?= form_error('pendidikanterakhir', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="row ml-2 pb-2">
                                        <div class="col-sm-4"><b>Alamat</b></div>
                                        <div class="col-sm-5">
                                            <input class="form-control form-control-sm" name="alamat" type="text" placeholder="Alamat Tinggal">
                                            <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?></div>
                                    </div>
                                    <div class="row ml-2 pb-2">
                                        <div class="col-sm-4"><b>Kota</b></div>
                                        <div class="col-sm-5">
                                            <input class="form-control form-control-sm" name="kota" type="text" placeholder="Kota">
                                            <?= form_error('kota', '<small class="text-danger pl-3">', '</small>'); ?></div>
                                    </div>
                                    <div class="row ml-2 pb-2">
                                        <div class="col-sm-4"><b>Provinsi</b></div>
                                        <div class="col-sm-5">
                                            <input class="form-control form-control-sm" name="provinsi" type="text" placeholder="Provinsi">
                                            <?= form_error('provinsi', '<small class="text-danger pl-3">', '</small>'); ?></div>
                                    </div>
                                    <div class="row ml-2 pb-2">
                                        <div class="col-sm-4"><b>Kode Pos</b></div>
                                        <div class="col-sm-5">
                                            <input class="form-control form-control-sm" name="kodepos" type="text" placeholder="Kode Pos">
                                            <?= form_error('kodepos', '<small class="text-danger pl-3">', '</small>'); ?></div>
                                    </div>
                                    <div class="row ml-2 pb-2">
                                        <div class="col-sm-4"><b>Pekerjaan</b></div>
                                        <div class="col-sm-5">
                                            <input class="form-control form-control-sm" name="pekerjaan" type="text" placeholder="Pekerjaan">
                                            <?= form_error('pekerjaan', '<small class="text-danger pl-3">', '</small>'); ?></div>
                                    </div>
                                    <div class="row ml-2 pb-2">
                                        <div class="col-sm-4"><b>No HP</b></div>
                                        <div class="col-sm-7">
                                            <input class="form-control form-control-sm" name="nohp" type="number" placeholder="No Handphone Aktif">
                                            <?= form_error('nohp', '<small class="text-danger pl-3">', '</small>'); ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-2 ml-5 pt-5">
                                            <button type="submit" class="btn btn-primary btn-block btn-sm">Save</button>
                                        </div>
                                    </div>


                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    </div>
</section>