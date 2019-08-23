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
								<img src="<?= base_url('assets/img/') . $client['image']; ?>" class=" pb-3" width="120">
								<h3><?= $client['name']; ?></h3>

								<div class="card-body pb-3">
									<div class="list-group">
										<a href="#" class="list-group-item list-group-item-action">Upload Photo</a>
										<a href="#" class="list-group-item list-group-item-action">Aktifkan Notifikasi</a>
										<a href="<?= base_url(); ?>company/dataakun" class="list-group-item list-group-item-action">Account</a>
										<a href="<?= base_url(); ?>company/profil/<?= $client['id']; ?>" class="list-group-item list-group-item-action active">Profile</a>
									</div>
								</div>

							</div>
						</div>

					</div>

					<div class="col-lg-7">

						<div class="card">

							<h5 class="card-header">Data Usaha</h5>
							<div class="card-body">
								<nav class="nav">
									<a class="nav-link" href="<?= base_url('company/profil/'); ?><?= $client['id']; ?>">Back Profile</a>
								</nav>

								<ul class="nav nav-tabs">
									<li class="nav-item">
										<a class="nav-link" href="<?= base_url('company/dataakunprofile'); ?>">Penanggung Jawab</a>
									</li>
									<li class="nav-item">
										<a class="nav-link active">Data Perusahaan</a>
									</li>
								</ul>

								<form action="<?= base_url('company/dataakunprofile2'); ?>" method="post">

									<input type="hidden" id="company2_id" name="company2_id" value="<?= $client['id'] ?>">

									<div class="row ml-2 pb-2 pt-4">
										<div class="col-sm-4"><b>NPWP</b></div>
										<div class="col-sm-5"><input class="form-control form-control-sm" id="npwp" name="npwp" type="number" placeholder="No NPWP" value="<?= set_value('npwp'); ?>"><?= form_error('npwp', '<small class="text-danger pl-3">', '</small>'); ?></div>
									</div>

									<div class="row ml-2 pb-2">
										<div class="col-sm-4"><b>Nama</b></div>
										<div class="col-sm-5"><input class="form-control form-control-sm" id="name" name="name" type="text" placeholder="Nama Perusahaan" value="<?= set_value('name'); ?>"><?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?></div>
									</div>

									<div class="row ml-2 pb-2">
										<div class="col-sm-4"><b>Alamat</b></div>
										<div class="col-sm-5"><input class="form-control form-control-sm" id="alamat" name="alamat" type="text" placeholder="Alamat Perusahaan" value="<?= set_value('alamat'); ?>">
											<?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?></div>
									</div>

									<div class="row ml-2 pb-2">
										<div class="col-sm-4"><b>Kota</b></div>
										<div class="col-sm-5">
											<input class="form-control form-control-sm" name="kota" id="kota" type="text" placeholder="Kota" value="<?= set_value('kota'); ?>">
											<?= form_error('kota', '<small class="text-danger pl-3">', '</small>'); ?></div>
									</div>

									<div class="row ml-2 pb-2">
										<div class="col-sm-4"><b>Provinsi</b></div>
										<div class="col-sm-5">
											<input class="form-control form-control-sm" name="provinsi" id="provinsi" type="text" placeholder="Provinsi" value="<?= set_value('provinsi'); ?>">
											<?= form_error('provinsi', '<small class="text-danger pl-3">', '</small>'); ?></div>
									</div>

									<div class="row ml-2 pb-2">
										<div class="col-sm-4"><b>Kode Pos</b></div>
										<div class="col-sm-5"><input class="form-control form-control-sm" id="kode_pos" name="kode_pos" type="number" placeholder="Kode Pos" value=" <?= set_value('kode_pos'); ?>">
											<?= form_error('kode_pos', '<small class="text-danger pl-3">', '</small>'); ?></div>
									</div>

									<div class="row ml-2 pb-2">
										<div class="col-sm-4"><b>Jumlah Pendapatan</b></div>
										<div class="col-sm-5">
											<input class="form-control form-control-sm" name="jumlah_pendapatan" id="jumlah_pendapatan" type="text" placeholder="Jumlah Pendapatan" value="<?= set_value('jumlah_pendapatan'); ?>">
											<?= form_error('jumlah_pendapatan', '<small class="text-danger pl-3">', '</small>'); ?></div>
									</div>

									<div class="row ml-2 pb-2">
										<div class="col-sm-4"><b>Jumlah Tenaga Kerja</b></div>
										<div class="col-sm-5">
											<input class="form-control form-control-sm" name="jumlah_tenaga" id="jumlah_tenaga" type="text" placeholder="Jumlah Tenaga Kerja" value="<?= set_value('jumlah_tenaga'); ?>">
											<?= form_error('jumlah_tenaga', '<small class="text-danger pl-3">', '</small>'); ?></div>
									</div>

									<div class="row ml-2 pb-3">
										<div class="col-sm-4"><b>Jenis Usaha</b></div>
										<div class="col-sm-5">
											<select class="form-control form-control-sm" id="jenis_usaha" name="jenis_usaha" value="<?= set_value('jenis_usaha'); ?>">
												<option value="">Pilih--</option>
												<option value=" PT">PT</option>
												<option value="CV">CV</option>
												<option value="Koperasi">Koperasi</option>
												<option value="BUMN">BUMN</option>
												<option value="Firma">Firma</option>
												<option value="Lainya">Lainya</option>
											</select>
											<?= form_error('jenis_usaha', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
									</div>

									<div class="row ml-2 pb-2">
										<div class="col-sm-4"><b>No Telp</b></div>
										<div class="col-sm-5"><input class="form-control form-control-sm" id="no_telp" name="no_telp" type="numeric" placeholder="No Telphone Perusahaan" value="<?= set_value('no_telp'); ?>"><?= form_error('no_telp', '<small class="text-danger pl-3">', '</small>'); ?></div>
									</div>

									<div class="row ml-2 pb-2">
										<div class="col-sm-4"><b>Website</b></div>
										<div class="col-sm-5">
											<input class="form-control form-control-sm" name="website" id="website" type="text" placeholder="website" value="<?= set_value('website'); ?>">
											<?= form_error('website', '<small class="text-danger pl-3">', '</small>'); ?></div>
									</div>


									<div class="row">
										<div class="col-2 ml-5 pt-5">
											<button type="submit" class="btn btn-primary btn-block btn-sm">Save</button>
										</div>
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