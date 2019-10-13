<section>
    <div class="container mt-4 mb-4">

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
                                        <a href="<?= base_url() ?><?= $client['position']; ?>/uploadphotoprofil" class="list-group-item list-group-item-action">Upload Photo</a>
                                        <a href="#" class="list-group-item list-group-item-action">Aktifkan Notifikasi</a>
                                        <a href="<?= base_url(); ?><?= $client['position']; ?>/dataakun" class="list-group-item list-group-item-action">Account</a>
                                        <a href="<?= base_url(); ?><?= $client['position']; ?>/profil/<?= $client['id']; ?>" class="list-group-item list-group-item-action active">Profile</a>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="col-lg-7">

                        <div class="card">

                            <h5 class="card-header">Edit Profile</h5>
                            <div class="card-body">
                                <nav class="nav">
                                    <a class="nav-link" href="<?= base_url('talent/profil/'); ?><?= $client['id']; ?>">Back Profile</a>
                                </nav>

                                <form action="<?= base_url('talent/editprofil/'); ?><?= $client['id']; ?>" method="post">

                                    <input type="hidden" id="talent_id" name="talent_id" value="<?= $client['id'] ?>">
                                    <input type="hidden" id="name" name="name" value="<?= $client['name'] ?>">


                                    <div class="row ml-2 pb-2 pt-4">
                                        <div class="col-sm-4"><b>NIK</b></div>
                                        <div class="col-sm-5">
                                            <input class="form-control form-control-sm" name="nik" id="nik" type="number" placeholder="Masukkan No KTP" value="<?= $profiltalent['nik']; ?>">
                                            <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?></div>
                                    </div>
                                    <div class="row ml-2 pb-2">
                                        <div class="col-sm-4"><b>Tempat Lahir</b></div>
                                        <div class="col-sm-5">
                                            <input class="form-control form-control-sm" name="tempat_lahir" id="tempat_lahir" type="text" placeholder="Tempat Lahir" value="<?= $profiltalent['tempat_lahir']; ?>">
                                            <?= form_error('tempat_lahir', '<small class="text-danger pl-3">', '</small>'); ?></div>
                                    </div>
                                    <div class="row ml-2 pb-2">
                                        <div class="col-sm-4"><b>Tanggal Lahir</b></div>
                                        <div class="col-sm-5">
                                            <input class="form-control form-control-sm" name="tanggal_lahir" id="tanggal_lahir" type="date" placeholder="Tanggal Lahir" value="<?= $profiltalent['tanggal_lahir']; ?>">
                                            <?= form_error('tanggal_lahir', '<small class="text-danger pl-3">', '</small>'); ?></div>
                                    </div>
                                    <div class="row ml-2 pb-3">
                                        <div class="col-sm-4"><b>Jenis Kelamin</b></div>
                                        <div class="col-sm-6">

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="laki-laki" checked>
                                                <label class="form-check-label" for="jenis_kelamin">
                                                    laki-laki
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan">
                                                <label class="form-check-label" for="jenis_kelamin">
                                                    Perempuan
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row ml-2 pb-3">
                                        <div class="col-sm-4"><b>Pendidikan Terakhir</b></div>
                                        <div class="col-sm-6">
                                            <select class="form-control form-control-sm" name="pendidikan_terakhir" id="pendidikan_terakhir" value="<?= $profiltalent['pendidikan_terakhir']; ?>">
                                                <option value="">Pilih--</option>
                                                <option value="SMA">SMA</option>
                                                <option value="SMK">SMK</option>
                                                <option value="S1">S1</option>
                                                <option value="S2">S2</option>
                                            </select>
                                            <?= form_error('pendidikan_terakhir', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="row ml-2 pb-2">
                                        <div class="col-sm-4"><b>Alamat</b></div>
                                        <div class="col-sm-5">
                                            <input class="form-control form-control-sm" name="alamat" id="alamat" type="text" placeholder="Alamat Tinggal" value="<?= $profiltalent['alamat']; ?>">
                                            <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?></div>
                                    </div>
                                    <div class="row ml-2 pb-2">
                                        <div class="col-sm-4"><b>Kota</b></div>
                                        <div class="col-sm-5">
                                            <input class="form-control form-control-sm" name="kota" id="kota" type="text" placeholder="Kota" value="<?= $profiltalent['kota']; ?>">
                                            <?= form_error('kota', '<small class="text-danger pl-3">', '</small>'); ?></div>
                                    </div>
                                    <div class="row ml-2 pb-2">
                                        <div class="col-sm-4"><b>Provinsi</b></div>
                                        <div class="col-sm-5">
                                            <input class="form-control form-control-sm" name="provinsi" id="provinsi" type="text" placeholder="Provinsi" value="<?= $profiltalent['provinsi']; ?>">
                                            <?= form_error('provinsi', '<small class="text-danger pl-3">', '</small>'); ?></div>
                                    </div>
                                    <div class="row ml-2 pb-2">
                                        <div class="col-sm-4"><b>Kode Pos</b></div>
                                        <div class="col-sm-5">
                                            <input class="form-control form-control-sm" name="kode_pos" id="kode_pos" type="text" placeholder="Kode Pos" value="<?= $profiltalent['kode_pos']; ?>">
                                            <?= form_error('kode_pos', '<small class="text-danger pl-3">', '</small>'); ?></div>
                                    </div>
                                    <div class="row ml-2 pb-2">
                                        <div class="col-sm-4"><b>Pekerjaan</b></div>
                                        <div class="col-sm-5">
                                            <input class="form-control form-control-sm" name="pekerjaan" id="pekerjaan" type="text" placeholder="Pekerjaan" value="<?= $profiltalent['pekerjaan']; ?>">
                                            <?= form_error('pekerjaan', '<small class="text-danger pl-3">', '</small>'); ?></div>
                                    </div>
                                    <div class="row ml-2 pb-2">
                                        <div class="col-sm-4"><b>No HP</b></div>
                                        <div class="col-sm-7">
                                            <input class="form-control form-control-sm" name="no_hp" id="no_hp" type="number" placeholder="No Handphone Aktif" value="<?= $profiltalent['no_hp']; ?>">
                                            <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-2 ml-5 pt-5">
                                            <button type="submit" class="btn btn-primary btn-block btn-sm">Save</button>
                                        </div>
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