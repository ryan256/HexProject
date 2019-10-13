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
                                        <a href="<?= base_url() ?><?= $client['position']; ?>/uploadphotoprofil" class="list-group-item list-group-item-action active">Upload Photo</a>
                                        <a href="#" class="list-group-item list-group-item-action">Aktifkan Notifikasi</a>
                                        <a href="<?= base_url(); ?><?= $client['position']; ?>/dataakun" class="list-group-item list-group-item-action">Account</a>
                                        <a href="<?= base_url(); ?><?= $client['position']; ?>/profil/<?= $client['id']; ?>" class="list-group-item list-group-item-action">Profile</a>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="col-lg-7">

                        <div class="card">

                            <h5 class="card-header">Data Pribadi</h5>
                            <div class="card-body">

                                <?= $this->session->flashdata('message'); ?>



                                <form>
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Upload Foto</label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </div>

                                    <button type="button" class="btn btn-primary mt-3">Upload</button>
                                </form>



                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>