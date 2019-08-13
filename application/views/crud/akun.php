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

								<div class="row">
									<div class="col-md-6">
										<form action="" method="post">

											<div class="input-group mb-3">
												<input type="text" class="form-control" placeholder="Cari Data" name="keyword">
												<div class="input-group-append">
													<button class="btn btn-primary" type="submit">Cari</button>
												</div>
											</div>

											<?php if (empty($reg)) : ?>

											<div class="alert alert-dark alert-dismissible fade show" role="alert">
												Data Tidak DITeMukan
												<button type="button" class="close" data-dismiss="alert" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>

											<?php endif; ?>

										</form>
									</div>
								</div>

								<?php if ($this->session->flashdata('flash')) : ?>

								<div class="alert alert-success alert-dismissible fade show" role="alert">

									Data <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>.

									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<?php endif; ?>

								<div class="row pb-4">
									<div class="col-md-6">
										<a href="<?php echo base_url(); ?>crud/tambah" class="btn btn-danger">tambah data mahasiswa</a>
									</div>

								</div>

								<ul class="list-group">
									<?php foreach ($reg as $re) : ?>
									<li class="list-group-item">
										<?= $re['username']; ?>

										<a href="<?= base_url(); ?>crud/hapus/<?= $re['username'] ?>" class="badge badge-danger float-right" onclick="return confirm('yakin?');">Hapus</a>

										<a href="<?= base_url(); ?>crud/ubah/<?= $re['username'] ?>" class="badge badge-success float-right mr-1">Ubah</a>

										<a href="<?= base_url(); ?>crud/detail/<?= $re['username'] ?>" class="badge badge-primary float-right mr-1">Detail</a>

									</li>
								</ul>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	</div>
</section>