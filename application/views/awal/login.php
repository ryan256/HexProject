<!--LOGIN-->
<div class="modal fade bd-example-modal-sm" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Please Sign In</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <form action="<?= base_url(); ?>auth/login" method="post">
                    <img class="mb-4" src="<?php echo base_url(); ?>assets/img/hexIcons.png" alt="" width="100">


                    <input type="email" id="inputEmail" class="form-control mb-3" placeholder="Username" required autofocus>
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>

                    <input type="password" id="inputPassword" class="form-control mb-3" placeholder="Password" required>
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>

                    <button class="btn btn-primary btn-block" type="submit">Sign up</button>

                    <p class="mt-3 mb-2 text-muted">Don't have an account ? Sign Up
                        <button type="submit" class="btn btn-link text-danger" data-toggle="modal" data-target="#regis" data-dismiss="modal">
                            <b>Daftar Sekarang</b></button>
                    </p>

                    <p class="mt-2 mb-3 text-muted">&copy; 2017-2019</p>
                </form>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>