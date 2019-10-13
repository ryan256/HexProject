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
										<a href=" <?= base_url() ?><?= $client['position']; ?>/uploadphotoprofil" class=" list-group-item list-group-item-action">Upload Photo</a>
										<a href="#" class="list-group-item list-group-item-action">Aktifkan Notifikasi</a>
										<a href="<?= base_url(); ?><?= $client['position']; ?>/dataakun" class="list-group-item list-group-item-action active">Account</a>
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

								<div class="card mb-3" style="max-width: 540px;">
									<div class="row no-gutters">
										<div class="col-md-8">
											<div class="card-body">
												<h5 class="card-title"><?= $client['email']; ?></h5>
												<p class="card-text"><?= $client['position']; ?></p>
												<p class="card-text"><small class="text-muted">Member Since <?= date('d F Y', $client['date_created']); ?></p>
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
	</div>
</section>