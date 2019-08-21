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
                                        <a href="<?= base_url(); ?>talent/profil/<?= $client['id']; ?>" class="list-group-item list-group-item-action active">Profile</a>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>

                    <div class="col-lg-7">

                        <div class="card">

                            <h5 class="card-header">Data Penanggung Jawab</h5>
                            <div class="card-body">
                                <nav class="nav">
                                    <a class="nav-link" href="<?= base_url('talent/dataakunprofile'); ?>">Isi Profile</a>
                                    <a class="nav-link" href="#editprofile" data-toggle="modal" data-target="#editprofile">
                                        Edit Profile
                                    </a>


                                </nav>

                                <form>


                                    <?= $this->session->flashdata('message'); ?>


                                    <div class=" row ml-2 pb-2 pt-4">
                                        <div class="col-sm-4"><b>NIK</b></div>
                                        <div class="col-sm-5"><?= $profiltalent['nik']; ?></div>
                                    </div>

                                    <div class="row ml-2 pb-2">
                                        <div class="col-sm-4"><b>Tempat Lahir</b></div>
                                        <div class="col-sm-5"><?= $profiltalent['tempat_lahir']; ?></div>
                                    </div>

                                    <div class="row ml-2 pb-2">
                                        <div class="col-sm-4"><b>Tanggal Lahir</b></div>
                                        <div class="col-sm-5"><?= $profiltalent['tanggal_lahir']; ?></div>
                                    </div>

                                    <div class="row ml-2 pb-3">
                                        <div class="col-sm-4"><b>Jenis Kelamin</b></div>
                                        <div class="col-sm-6"><?= $profiltalent['jenis_kelamin']; ?></div>
                                    </div>

                                    <div class="row ml-2 pb-3">
                                        <div class="col-sm-4"><b>Pendidkan Terakhir</b></div>
                                        <div class="col-sm-6"><?= $profiltalent['pendidikan_terakhir']; ?></div>
                                    </div>

                                    <div class="row ml-2 pb-2">
                                        <div class="col-sm-4"><b>Alamat</b></div>
                                        <div class="col-sm-5"><?= $profiltalent['alamat']; ?></div>
                                    </div>

                                    <div class="row ml-2 pb-2">
                                        <div class="col-sm-4"><b>Kota</b></div>
                                        <div class="col-sm-5"><?= $profiltalent['kota']; ?></div>
                                    </div>
                                    <div class="row ml-2 pb-2">
                                        <div class="col-sm-4"><b>Provinsi</b></div>
                                        <div class="col-sm-5"><?= $profiltalent['provinsi']; ?></div>
                                    </div>

                                    <div class="row ml-2 pb-2">
                                        <div class="col-sm-4"><b>Kode Pos</b></div>
                                        <div class="col-sm-5"><?= $profiltalent['kode_pos']; ?></div>
                                    </div>
                                    <div class="row ml-2 pb-2">
                                        <div class="col-sm-4"><b>Pekerjaan</b></div>
                                        <div class="col-sm-5"><?= $profiltalent['pekerjaan']; ?></div>
                                    </div>

                                    <div class="row ml-2 pb-2">
                                        <div class="col-sm-4"><b>No HP</b></div>
                                        <div class="col-sm-7"><?= $profiltalent['no_hp']; ?></div>
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
    <!-- Modal -->
    <div class="modal fade" id="editprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Edit Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>