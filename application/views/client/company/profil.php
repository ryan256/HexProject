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
                                    <a class="nav-link" href="<?= base_url('company/dataakunprofile'); ?>">Isi Profile</a>

                                    <a class="nav-link" href="<?= base_url('company/editprofil/'); ?><?= $client['id']; ?>">Edit Profile</a>
                                </nav>

                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#siji" role="tab" aria-controls="home" aria-selected="true">Profil Penanggung Jawab</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#loro" role="tab" aria-controls="profile" aria-selected="false">Profil Perusahaan</a>
                                    </li>

                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="siji" role="tabpanel" aria-labelledby="home-tab">
                                        <form>
                                            <?= $this->session->flashdata('message'); ?>

                                            <div class="row ml-2 pb-2 pt-4">
                                                <div class="col-sm-4"><b>NIK</b></div>
                                                <div class="col-sm-5"><?= $profilcompany['nik']; ?></div>
                                            </div>

                                            <div class="row ml-2 pb-2">
                                                <div class="col-sm-4"><b>Nama</b></div>
                                                <div class="col-sm-5"><?= $profilcompany['name']; ?></div>
                                            </div>


                                            <div class="row ml-2 pb-2">
                                                <div class="col-sm-4"><b>Tempat Lahir</b></div>
                                                <div class="col-sm-5"><?= $profilcompany['tempat_lahir']; ?></div>
                                            </div>

                                            <div class="row ml-2 pb-2">
                                                <div class="col-sm-4"><b>Tanggal Lahir</b></div>
                                                <div class="col-sm-5"><?= $profilcompany['tanggal_lahir']; ?></div>
                                            </div>

                                            <div class="row ml-2 pb-3">
                                                <div class="col-sm-4"><b>Jenis Kelamin</b></div>
                                                <div class="col-sm-6"><?= $profilcompany['jenis_kelamin']; ?>

                                                </div>
                                            </div>

                                            <div class="row ml-2 pb-2">
                                                <div class="col-sm-4"><b>Alamat</b></div>
                                                <div class="col-sm-5"><?= $profilcompany['alamat']; ?></div>
                                            </div>

                                            <div class="row ml-2 pb-2">
                                                <div class="col-sm-4"><b>Kota</b></div>
                                                <div class="col-sm-5"><?= $profilcompany['kota']; ?></div>
                                            </div>

                                            <div class="row ml-2 pb-2">
                                                <div class="col-sm-4"><b>Provinsi</b></div>
                                                <div class="col-sm-5"><?= $profilcompany['provinsi']; ?></div>
                                            </div>

                                            <div class="row ml-2 pb-2">
                                                <div class="col-sm-4"><b>Kode Pos</b></div>
                                                <div class="col-sm-5"><?= $profilcompany['kode_pos']; ?></div>
                                            </div>

                                            <div class="row ml-2 pb-2">
                                                <div class="col-sm-4"><b>Jabatan</b></div>
                                                <div class="col-sm-5"><?= $profilcompany['jabatan']; ?></div>
                                            </div>

                                            <div class="row ml-2 pb-2">
                                                <div class="col-sm-4"><b>No HP</b></div>
                                                <div class="col-sm-7"><?= $profilcompany['no_hp']; ?></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="loro" role="tabpanel" aria-labelledby="profile-tab">
                                        <form>
                                            <div class="row ml-2 pb-2 pt-4">
                                                <div class="col-sm-4"><b>NPWP</b></div>
                                                <div class="col-sm-5"><?= $profilcompany2['npwp']; ?></div>
                                            </div>
                                            <div class="row ml-2 pb-2">
                                                <div class="col-sm-4"><b>Nama</b></div>
                                                <div class="col-sm-5"><?= $profilcompany2['name']; ?></div>
                                            </div>
                                            <div class="row ml-2 pb-2">
                                                <div class="col-sm-4"><b>Alamat</b></div>
                                                <div class="col-sm-5"><?= $profilcompany2['alamat']; ?></div>
                                            </div>
                                            <div class="row ml-2 pb-2">
                                                <div class="col-sm-4"><b>Kota</b></div>
                                                <div class="col-sm-5"><?= $profilcompany2['kota']; ?></div>
                                            </div>
                                            <div class="row ml-2 pb-2">
                                                <div class="col-sm-4"><b>Provinsi</b></div>
                                                <div class="col-sm-5"><?= $profilcompany2['provinsi']; ?></div>
                                            </div>
                                            <div class="row ml-2 pb-2">
                                                <div class="col-sm-4"><b>Kode Pos</b></div>
                                                <div class="col-sm-5"><?= $profilcompany2['kode_pos']; ?></div>
                                            </div>
                                            <div class="row ml-2 pb-2">
                                                <div class="col-sm-4"><b>Jumlah Pendapatan</b></div>
                                                <div class="col-sm-7"><?= $profilcompany2['jumlah_pendapatan']; ?></div>
                                            </div>
                                            <div class="row ml-2 pb-2">
                                                <div class="col-sm-4"><b>Jumlah Tenaga Kerja</b></div>
                                                <div class="col-sm-7"><?= $profilcompany2['jumlah_tenaga']; ?></div>
                                            </div>
                                            <div class="row ml-2 pb-3">
                                                <div class="col-sm-4"><b>Jenis Usaha</b></div>
                                                <div class="col-sm-6"><?= $profilcompany2['jenis_usaha']; ?>

                                                </div>
                                            </div>

                                            <div class="row ml-2 pb-2">
                                                <div class="col-sm-4"><b>No Telp</b></div>
                                                <div class="col-sm-7"><?= $profilcompany2['no_telp']; ?></div>
                                            </div>
                                            <div class="row ml-2 pb-2">
                                                <div class="col-sm-4"><b>Website</b></div>
                                                <div class="col-sm-7"><a href="https://<?= $profilcompany2['website']; ?>" target=" _blank" rel="nofollow" class="text-decoration-none"><?= $profilcompany2['website']; ?></a></div>
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
    </div>
    </div>
</section>