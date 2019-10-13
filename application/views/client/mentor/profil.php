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
                                        <a href="<?= base_url(); ?><?= $client['position']; ?>/profil" class="list-group-item list-group-item-action active">Profile</a>
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
                                    <a class="nav-link" href="<?= base_url(); ?><?= $client['position']; ?>/dataakunprofile">Isi Profile</a>

                                    <a class="nav-link" href="<?= base_url(); ?><?= $client['position']; ?>/editprofil/<?= $client['id']; ?>">Edit Profile</a>
                                </nav>

                                <form>
                                    <?= $this->session->flashdata('message'); ?>


                                    <div class=" row ml-2 pb-2 pt-4">
                                        <div class="col-sm-4"><b>NIK</b></div>
                                        <div class="col-sm-5"><?= $profilmentor['nik']; ?></div>
                                    </div>

                                    <div class="row ml-2 pb-2">
                                        <div class="col-sm-4"><b>Tempat Lahir</b></div>
                                        <div class="col-sm-5"><?= $profilmentor['tempat_lahir']; ?></div>
                                    </div>

                                    <div class="row ml-2 pb-2">
                                        <div class="col-sm-4"><b>Tanggal Lahir</b></div>
                                        <div class="col-sm-5"><?= $profilmentor['tanggal_lahir']; ?></div>
                                    </div>

                                    <div class="row ml-2 pb-3">
                                        <div class="col-sm-4"><b>Jenis Kelamin</b></div>
                                        <div class="col-sm-6"><?= $profilmentor['jenis_kelamin']; ?></div>
                                    </div>

                                    <div class="row ml-2 pb-3">
                                        <div class="col-sm-4"><b>Pendidkan Terakhir</b></div>
                                        <div class="col-sm-6"><?= $profilmentor['pendidikan_terakhir']; ?></div>
                                    </div>

                                    <div class="row ml-2 pb-2">
                                        <div class="col-sm-4"><b>Alamat</b></div>
                                        <div class="col-sm-5"><?= $profilmentor['alamat']; ?></div>
                                    </div>

                                    <div class="row ml-2 pb-2">
                                        <div class="col-sm-4"><b>Kota</b></div>
                                        <div class="col-sm-5"><?= $profilmentor['kota']; ?></div>
                                    </div>
                                    <div class="row ml-2 pb-2">
                                        <div class="col-sm-4"><b>Provinsi</b></div>
                                        <div class="col-sm-5"><?= $profilmentor['provinsi']; ?></div>
                                    </div>

                                    <div class="row ml-2 pb-2">
                                        <div class="col-sm-4"><b>Kode Pos</b></div>
                                        <div class="col-sm-5"><?= $profilmentor['kode_pos']; ?></div>
                                    </div>
                                    <div class="row ml-2 pb-2">
                                        <div class="col-sm-4"><b>Pekerjaan</b></div>
                                        <div class="col-sm-5"><?= $profilmentor['pekerjaan']; ?></div>
                                    </div>

                                    <div class="row ml-2 pb-2">
                                        <div class="col-sm-4"><b>No HP</b></div>
                                        <div class="col-sm-7"><?= $profilmentor['no_hp']; ?></div>
                                    </div>

                                    <div class="row ml-2 pb-2">
                                        <div class="col-sm-4"><b>Materi</b></div>
                                        <div class="col-sm-7"><?= $profilmentor['materi']; ?></div>
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