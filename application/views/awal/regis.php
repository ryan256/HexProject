<!--model regis-->
<div class="modal fade bd-example-modal-sm" id="regis" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Choose Yours</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="card text-center">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <button type="button" class="btn btn-light active">Talent</button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="btn btn-light" data-toggle="modal" data-target="#regismentor" data-dismiss="modal">Mentor</button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="btn btn-light" data-toggle="modal" data-target="#regiscompany" data-dismiss="modal">Company</button>
                        </li>
                    </ul>
                </div>
                <div class="card-body">

                    <?= $this->session->flashdata('message'); ?>

                    <img class="mb-4" src="<?php echo base_url(); ?>assets/img/hexIcons.png" alt="" width="100">

                    <form action="<?= base_url(); ?>auth/register" method="post">


                        <input type="text" name="tname" id="inputEmail" class="form-control mb-3" placeholder="Full Name">
                        <?= form_error('tname', '<small class="text-danger pl-3">', '</small>'); ?>


                        <input type="text" name="email" id="inputName" class="form-control mb-3" placeholder="Email Address">
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>


                        <input type="password" name="password1" id="inputPassword1" class="form-control mb-3" placeholder="Password">
                        <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>


                        <input type="password" name="password2" id="inputPassword2" class="form-control mb-3" placeholder="Repeat Password">

                        <button class="btn btn-primary btn-block" type="submit">Sign up</button>
                        <p class="mt-3 mb-2 text-muted">Do you have an account ? </p>
                        <button type="submit" class="btn btn-link text-danger" data-toggle="modal" data-target="#login" data-dismiss="modal">
                            <b>Login Now</b></button>
                        </p>
                        <p class="mt-2 mb-3 text-muted">&copy; 2017-2019</p>
                    </form>
                </div>
            </div>

            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>

<!--model mentor-->
<div class="modal fade bd-example-modal-sm" id="regismentor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Choose Yours</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="card text-center">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <button type="button" class="btn btn-light" data-toggle="modal" data-target="#regis" data-dismiss="modal">Talent</button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="btn btn-light active">Mentor</button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="btn btn-light" data-toggle="modal" data-target="#regiscompany" data-dismiss="modal">Company</button>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <img class="mb-4" src="<?php echo base_url(); ?>assets/img/hexIcons.png" alt="" width="100">
                    <form class="form-signin" action="<?= base_url(); ?>" method="post">


                        <input type="mname" id="inputEmail" class="form-control mb-3" placeholder="Full Name">


                        <input type="email" id="inputName" class="form-control mb-3" placeholder="Email Address">



                        <input type="password1" id="inputPassword1" class="form-control mb-3" placeholder="Password">

                        <input type="password2" id="inputPassword2" class="form-control mb-3" placeholder="Repeat Password">

                        <button class="btn btn-primary btn-block" type="submit">Sign up</button>
                        <p class="mt-3 mb-2 text-muted">Do you have an account ? </p>
                        <button type="submit" class="btn btn-link text-danger" data-toggle="modal" data-target="#login" data-dismiss="modal">
                            <b>Login Now</b></button>
                        </p>
                        <p class="mt-2 mb-3 text-muted">&copy; 2017-2019</p>
                    </form>
                </div>
            </div>

            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>

<!--model company-->
<div class="modal fade bd-example-modal-sm" id="regiscompany" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Choose Yours</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="card text-center">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <button type="button" class="btn btn-light" data-toggle="modal" data-target="#regis" data-dismiss="modal">Telent</button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="btn btn-light" data-toggle="modal" data-target="#regismentor" data-dismiss="modal">Mentor</button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="btn btn-light active">Company</button>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <img class="mb-4" src="<?php echo base_url(); ?>assets/img/hexIcons.png" alt="" width="100">
                    <form class="form-signin" action="<?= base_url(); ?>" method="post">


                        <input type="cname" id="inputEmail" class="form-control mb-3" placeholder="Company Name">


                        <input type="email" id="inputName" class="form-control mb-3" placeholder="Email Address">



                        <input type="password1" id="inputPassword1" class="form-control mb-3" placeholder="Password">

                        <input type="password2" id="inputPassword2" class="form-control mb-3" placeholder="Repeat Password">

                        <button class="btn btn-primary btn-block" type="submit">Sign up</button>
                        <p class="mt-3 mb-2 text-muted">Do you have an account ? </p>
                        <button type="submit" class="btn btn-link text-danger" data-toggle="modal" data-target="#login" data-dismiss="modal">
                            <b>Login Now</b></button>
                        </p>
                        <p class="mt-2 mb-3 text-muted">&copy; 2017-2019</p>
                    </form>
                </div>
            </div>

            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>