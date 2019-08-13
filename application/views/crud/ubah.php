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
								<img src="<?php echo base_url(); ?>assets/img/kirik.jpg" class="pb-3" width="120" alt="...">
								<h3>Courage</h3>

								<div class="card-body pb-3">
									<div class="list-group">
										<a href="#" class="list-group-item list-group-item-action">Upload Photo</a>
										<a href="#" class="list-group-item list-group-item-action">Aktifkan Notifikasi</a>
										<a href="<?php echo base_url(); ?>crud/index " class="list-group-item list-group-item-action active">Account</a>
										<a href="<?php echo base_url(); ?>client/dataakun" class="list-group-item list-group-item-action">Edit Profile</a>
									</div>
								</div>

							</div>
						</div>

					</div>

					<div class="col-lg-7">

						<div class="card">

							<h5 class="card-header">Data Pribadi</h5>
							<div class="card-body">

								<!--<? php // if(validation_errors()) :
									?>
		
		<div class="alert alert-danger" role="alert">
		<? //=validation_errors(); 
		?>
		</div>
		
		<? php // endif;
		?>-->

								<div class="row pb-4">
									<div class="col-6">

										<form action="" method="post">

											<div class="form-group">
												<label for="username">Username</label>
												<input type="text" name="username" value="<?= $reg['username']; ?>" class="form-control" placeholder="Enter Username...">
												<small class="form-text text-danger"><?= form_error('username'); ?></small>
											</div>

											<div class="form-group">
												<label for="email">Email</label>
												<input type="text" name="email" value="<?= $reg['email']; ?>" class="form-control" placeholder="Enter Email...">
												<small class="form-text text-danger"><?= form_error('email'); ?></small>
											</div>

											<div class="form-group">
												<label for="notelp">No.Telp</label>
												<input type="text" name="notelp" value="<?= $reg['notelp']; ?>" class="form-control" placeholder="Enter Number...">
												<small class="form-text text-danger"><?= form_error('notelp'); ?></small>
											</div>

											<button type="submit" name="ubah" class="btn btn-info float-right">Ubah</button>
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
</section>