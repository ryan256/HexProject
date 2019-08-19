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
										<a href="<?= base_url(); ?>talent/profil" class="list-group-item list-group-item-action active">Profile</a>
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
									<a class="nav-link" href="<?= base_url('company/profil'); ?>">Back Profile</a>
								</nav>

								<ul class="nav nav-tabs">
									<li class="nav-item">
										<a class="nav-link active">Penanggung Jawab</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="<?= base_url('company/dataakunprofile2'); ?>">Data Perusahaan</a>
									</li>
								</ul>


								<form>
									<div class="row ml-2 pb-2 pt-4">
										<div class="col-sm-4"><b>NIK</b></div>
										<div class="col-sm-5"><input class="form-control form-control-sm" name="nik" type="number" placeholder="Masukkan No KTP"></div>
									</div>
									<div class="row ml-2 pb-2">
										<div class="col-sm-4"><b>Tempat Lahir</b></div>
										<div class="col-sm-5"><input class="form-control form-control-sm" name="tempatlahir" type="text" placeholder="Tempat Lahir"></div>
									</div>
									<div class="row ml-2 pb-2">
										<div class="col-sm-4"><b>Tanggal Lahir</b></div>
										<div class="col-sm-5"><input class="form-control form-control-sm" name="tempatlahir" type="date" placeholder="Tanggal Lahir"></div>
									</div>
									<div class="row ml-2 pb-3">
										<div class="col-sm-4"><b>Jenis Kelamin</b></div>
										<div class="col-sm-6">

											<div class="form-check">
												<input class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelamin" value="Laki-laki" checked>
												<label class="form-check-label" for="jeniskelamin">
													Laki-laki
												</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelamin" value="Perempuan">
												<label class="form-check-label" for="jeniskelamin">
													Perempuan
												</label>
											</div>
										</div>
									</div>

									<div class="row ml-2 pb-2">
										<div class="col-sm-4"><b>Alamat</b></div>
										<div class="col-sm-5"><input class="form-control form-control-sm" name="alamat" type="text" placeholder="Alamat Tinggal"></div>
									</div>
									<div class="row ml-2 pb-2">
										<div class="col-sm-4"><b>Kota</b></div>
										<div class="col-sm-5"><input class="form-control form-control-sm" name="kota" type="text" placeholder="Kota"></div>
									</div>
									<div class="row ml-2 pb-2">
										<div class="col-sm-4"><b>Provinsi</b></div>
										<div class="col-sm-5"><input class="form-control form-control-sm" name="provinsi" type="text" placeholder="Provinsi"></div>
									</div>
									<div class="row ml-2 pb-2">
										<div class="col-sm-4"><b>Kode Pos</b></div>
										<div class="col-sm-5"><input class="form-control form-control-sm" name="kodepos" type="number" placeholder="Kode Pos"></div>
									</div>
									<div class="row ml-2 pb-2">
										<div class="col-sm-4"><b>Jabatan</b></div>
										<div class="col-sm-5"><input class="form-control form-control-sm" name="jabatan" type="text" placeholder="Jabatan Pekerjaan"></div>
									</div>
									<div class="row ml-2 pb-2">
										<div class="col-sm-4"><b>No HP</b></div>
										<div class="col-sm-7"><input class="form-control form-control-sm" name="nohp" type="number" placeholder="No Handphone Aktif"></div>
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