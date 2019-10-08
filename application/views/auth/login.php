<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title><?= $title ?></title>
</head>

<body class="bg-secondary">
    <section>
        <div class="container-fluid shadow-sm p-3 rounded pb-2" style="background-image: url('<?php echo base_url('assets/img/2nd.jpg'); ?>');">

            <div class="row mb-5 pt-5 pb-5 text-center">

                <div class="col-md">
                    <a href="#login" class="text-decoration-none rounded mb-1 text-light">
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
                    <a href="<?= base_url(); ?>awal/training1" class="nav-link text-decoration-none rounded text-white-50 disabled" tabindex="-1" aria-disabled="true">
                        <img src="<?php echo base_url(); ?>assets/img/pilihb.png " width="70">
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

    <!-- Outer Row -->

    <div id="login" class=" row justify-content-center pt-5">

        <div class="col-lg-4">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">

                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Please Sigh In</h1>
                                </div>

                                <?= $this->session->flashdata('message'); ?>

                                <form class="user" method="post" action="">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>

                                    <button type="submit" name="auth" class="btn btn-primary btn-user btn-block">
                                        Login

                                    </button>

                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url('auth/register'); ?>">Create an Account!</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url(); ?>awal"><b>Back To Home</b></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>