<!--<section>
    <div class="container">
        <div class="row mb-4 pt-5 pb-5">
            <div class="col">
                <h2></h2>
            </div>
        </div>

        <div class="row justify-content-center ">

            <div class="col-lg-2 mr-5">

                <img src="<?= base_url(); ?>assets/img/ngajar.png" class="pb-3" width="200" alt="...">

            </div>



            <div class="col-lg-6 ml-5 pb-4">

                <div class="text-warning">
                    <h4>LANGKAH MENGIKUTI TRAINING DI HEX</h4>
                </div>
                <div class="row ml-2 pb-4 pt-4">
                    <div class="col-sm-4"><b>1. Daftar/Masuk</b></div>
                    <div class="col-sm-5"><b>5. Kuis</b></div>
                </div>
                <div class="row ml-2 pb-4">
                    <div class="col-sm-4"><b>2. Pilih Training</b></div>
                    <div class="col-sm-5"><b>6. E-Sertificate</b></div>
                </div>
                <div class="row ml-2 pb-4">
                    <div class="col-sm-4"><b>3. Pilih Mentor</b></div>
                    <div class="col-sm-5"><b>7. Review</b></div>
                </div>
                <div class="row ml-2 pb-4">
                    <div class="col-sm-4"><b>4. Mulai Training</b></div>
                </div>

            </div>
        </div>

</section>-->

<section>
    <div class="container-fluid shadow-sm p-3 rounded pb-2" style="background-image: url('<?php echo base_url('assets/img/2nd.jpg'); ?>');">

        <div class="row mb-5 pt-5 pb-5 text-center">

            <div class="col-md">
                <a href="<?= base_url(); ?>auth/logout/#login" class="text-decoration-none rounded mb-1 text-light">
                    <img src="<?php echo base_url(); ?>assets/img/log-in.png" width="70">
                    <h6>1. Daftar/Masuk</h6>
                </a>
            </div>

            <div class="col-md"></div>

            <div class="col-md">
                <a href="<?= base_url(); ?>awal/training1" class="nav-link text-decoration-none rounded mb-1 text-white-50 disabled" tabindex="-1" aria-disabled="true">
                    <img src="<?php echo base_url(); ?>assets/img/pmentorb.png" width="70">
                    <h6>3. Pilih Mentor</h6>
                </a>

            </div>

            <div class="col-md"></div>

            <div class="col-md">

                <a href="<?= base_url(); ?>awal/training1" class="nav-link text-decoration-none rounded text-white-50 disabled" tabindex="-1" aria-disabled="true">
                    <img src="<?php echo base_url(); ?>assets/img/kuisb.png" width="70" s>
                    <h6>5. Kuis</h6>
                </a>

            </div>

            <div class="col-md"></div>

            <div class="col-md">
                <a href="<?= base_url(); ?>awal/training1" class="nav-link text-decoration-none rounded mb-1 text-white-50 disabled" tabindex="-1" aria-disabled="true">
                    <img src="<?php echo base_url(); ?>assets/img/reviewb.png" width="70">
                    <h6>7. Review</h6>
                </a>
            </div>

        </div>


        <div class="row mb-4 pb-4 text-center">

            <div class="col-md"></div>

            <div class="col-md">
                <a href="<?= $client['position']; ?>/training1/#training" class="nav-link text-decoration-none rounded text-light">
                    <img src="<?php echo base_url(); ?>assets/img/pilih.png " width="70">
                    <h6>2. Pilih Training</h6>
                </a>
            </div>

            <div class="col-md"></div>

            <div class="col-md">
                <a href="<?php echo base_url(); ?>awal/training1" class="nav-link text-decoration-none rounded text-white-50 disabled" tabindex="-1" aria-disabled="true">
                    <img src="<?php echo base_url(); ?>assets/img/trainingb.png " width="70">
                    <h6>4. Mulai Training</h6>
                </a>
            </div>

            <div class="col-md"></div>

            <div class="col-md">
                <a href="<?php echo base_url(); ?>awal/training1" class="nav-link text-decoration-none rounded text-white-50 disabled" tabindex="-1" aria-disabled="true">
                    <img src="<?php echo base_url(); ?>assets/img/sertifikatb.png" width="70" s>
                    <h6>6. E-Sertificate</h5>
                </a>
            </div>

            <div class="col-md"></div>

        </div>
</section>

<div class="container-fluid text-light pb-1 pt-3 " style="background-color: #FCBA3F;">
    <div class="container">

        <div class="d-flex bd-highlight mb-3">

            <div class="p-2 bd-highlight">
                <h3>PILIH TRAINING KAMU DISINI </h3>
            </div>

        </div>
    </div>
</div>

<section id="training" class="pt-4 pb-4">
    <div class="container">

        <div class="row mb-4 pb-3 pt-3 text-center">

            <div class="col-md ">
                <a href="<?= base_url(); ?><?= $client['position']; ?>/pilihmntsocialmediamng"><img src="<?= base_url(); ?>assets/img/social-media1png " width="90" class="rounded mb-1"></a>
                <h4>Social Media</h4>

            </div>

            <div class="col-md">
                <a href="<?= base_url(); ?><?= $client['position']; ?>/contentmng"><img src="<?= base_url(); ?>assets/img/1472004.svg" width="90" class="rounded mb-1"></a>
                <h4>Content Management</h4>
            </div>

            <div class="col-md">
                <a href="<?= base_url(); ?><?= $client['position']; ?>/social"><img src="<?= base_url(); ?>assets/img/network.png" width="90" class="rounded mb-1"></a>
                <h4>Social</h4>
            </div>

            <div class="col-md">
                <a href="<?= base_url(); ?><?= $client['position']; ?>/tourism"><img src="<?= base_url(); ?>assets/img/tourist.png" width="90" class="rounded mb-1"></a>
                <h4>Tourism</h4>
            </div>
        </div>
        <div class="row mb-4 text-center">

            <div class="col-md">
                <a href="<?= base_url(); ?><?= $client['position']; ?>/education"><img src="<?= base_url(); ?>assets/img/edu.svg" width="90" class="rounded mb-1"></a>
                <h4>Education</h4>
            </div>

            <div class="col-md">
                <a href="<?= base_url(); ?><?= $client['position']; ?>/healty"><img src="<?= base_url(); ?>assets/img/exercise.png" width=" 90" class="rounded mb-1"></a>
                <h4>Healthy</h4>
            </div>

            <div class="col-md">
                <a href="<?= base_url(); ?><?= $client['position']; ?>/energy"><img src="<?= base_url(); ?>assets/img/innovation.png" width="90" class="rounded mb-1"></a>
                <h4>Energy</h4>
            </div>

            <div class="col-md">
                <a href="<?= base_url(); ?><?= $client['position']; ?>/smartcity"><img src="<?= base_url(); ?>assets/img/cloud.png" width="90" class="rounded mb-1"></a>
                <h4>Smart City</h4>
            </div>
        </div>
    </div>
</section>