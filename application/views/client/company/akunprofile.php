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

                            <h5 class="card-header">Data Penanggung Jawab</h5>
                            <div class="card-body">
                                <nav class="nav">
                                    <a class="nav-link" href="<?= base_url('company/profil/'); ?><?= $client['id']; ?>">Back Profile</a>
                                </nav>

                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active">Penanggung Jawab</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= base_url('company/dataakunprofile2'); ?>">Data Perusahaan</a>
                                    </li>
                                </ul>


                                <form action="<?= base_url('company/dataakunprofile'); ?>" method="post">

                                    <input type="hidden" id="company_id" name="company_id" value="<?= $client['id'] ?>">


                                    <div class="row ml-2 pb-2 pt-4">
                                        <div class="col-sm-4"><b>NIK</b></div>
                                        <div class="col-sm-5">
                                            <input class="form-control form-control-sm" name="nik" id="nik" type="number" placeholder="Masukkan No KTP" value="<?= set_value('nik'); ?>">
                                            <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?></div>
                                    </div>
                                    <div class="row ml-2 pb-2">
                                        <div class="col-sm-4"><b>Nama</b></div>
                                        <div class="col-sm-5">
                                            <input class="form-control form-control-sm" name="name" id="name" type="text" placeholder="Masukkan Nama" value="<?= set_value('name'); ?>">
                                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?></div>
                                    </div>
                                    <div class="row ml-2 pb-2">
                                        <div class="col-sm-4"><b>Tempat Lahir</b></div>
                                        <div class="col-sm-5">
                                            <input class="form-control form-control-sm" name="tempat_lahir" id="tempat_lahir" type="text" placeholder="Tempat Lahir" value="<?= set_value('tempat_lahir'); ?>">
                                            <?= form_error('tempat_lahir', '<small class="text-danger pl-3">', '</small>'); ?></div>
                                    </div>
                                    <div class="row ml-2 pb-2">
                                        <div class="col-sm-4"><b>Tanggal Lahir</b></div>
                                        <div class="col-sm-5">
                                            <input class="form-control form-control-sm" name="tanggal_lahir" id="tanggal_lahir" type="date" placeholder="Tanggal Lahir" value="<?= set_value('tanggal_lahir'); ?>">
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

                                    <div class="row ml-2 pb-2">
                                        <div class="col-sm-4"><b>Alamat</b></div>
                                        <div class="col-sm-5">
                                            <input class="form-control form-control-sm" name="alamat" id="alamat" type="text" placeholder="Alamat Tinggal" value="<?= set_value('alamat'); ?>">
                                            <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?></div>
                                    </div>
                                    <div class="row ml-2 pb-2">
                                        <div class="col-sm-4"><b>Kota</b></div>
                                        <div class="col-sm-5">
                                            <input class="form-control form-control-sm" name="kota" id="kota" type="text" placeholder="Kota" value="<?= set_value('kota'); ?>">
                                            <?= form_error('kota', '<small class="text-danger pl-3">', '</small>'); ?></div>
                                    </div>
                                    <div class="row ml-2 pb-2">
                                        <div class="col-sm-4"><b>Provinsi</b></div>
                                        <div class="col-sm-5">
                                            <input class="form-control form-control-sm" name="provinsi" id="provinsi" type="text" placeholder="Provinsi" value="<?= set_value('provinsi'); ?>">
                                            <?= form_error('provinsi', '<small class="text-danger pl-3">', '</small>'); ?></div>
                                    </div>
                                    <div class="row ml-2 pb-2">
                                        <div class="col-sm-4"><b>Kode Pos</b></div>
                                        <div class="col-sm-5">
                                            <input class="form-control form-control-sm" name="kode_pos" id="kode_pos" type="text" placeholder="Kode Pos" value="<?= set_value('kode_pos'); ?>">
                                            <?= form_error('kode_pos', '<small class="text-danger pl-3">', '</small>'); ?></div>
                                    </div>
                                    <div class="row ml-2 pb-2">
                                        <div class="col-sm-4"><b>Jabatan</b></div>
                                        <div class="col-sm-5">
                                            <input class="form-control form-control-sm" name="jabatan" id="jabatan" type="text" placeholder="Jabatan" value="<?= set_value('jabatan'); ?>">
                                            <?= form_error('jabatan', '<small class="text-danger pl-3">', '</small>'); ?></div>
                                    </div>
                                    <div class="row ml-2 pb-2">
                                        <div class="col-sm-4"><b>No HP</b></div>
                                        <div class="col-sm-5">
                                            <input class="form-control form-control-sm" name="no_hp" id="no_hp" type="number" placeholder="No Handphone Aktif" value="<?= set_value('no_hp'); ?>">
                                            <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?></div>
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