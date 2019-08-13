<section id="akun" class="akun pb-4">
	<div class="container">

		<div class="row mb-4 pt-5 pb-5">
			<div class="col">
				<h2></h2>
			</div>
		</div>



		<div class="card">
			<h2 class="card-header text-center">Perbarui Profile</h2>
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
										<a href="<?php echo base_url(); ?>crud/index" class="list-group-item list-group-item-action">Account</a>
										<a href="<?php echo base_url(); ?>client/dataakun" class="list-group-item list-group-item-action active">Edit Profile</a>
									</div>
								</div>

							</div>
						</div>



					</div>

					<div class="col-lg-7">

						<div class="card">

							<h5 class="card-header">Data Pribadi</h5>
							<div class="card-body">

								<form action="" method="POST">
									<div class="row ml-2 pb-2 pt-4">
										<div class="col-sm-4"><b>NIK</b></div>
										<div class="col-sm-5"><input class="form-control form-control-sm" min="35000000000000" type="number" placeholder="Masukkan No KTP"></div>
									</div>
									<div class="row ml-2 pb-2">
										<div class="col-sm-4"><b>Nama</b></div>
										<div class="col-sm-5"><input class="form-control form-control-sm" type="text" placeholder="Nama Lengkap"></div>
									</div>
									<div class="row ml-2 pb-2">
										<div class="col-sm-4"><b>Tempat Lahir</b></div>
										<div class="col-sm-5"><input class="form-control form-control-sm" type="text" placeholder="Tempat Lahir"></div>
									</div>
									<div class="row ml-2 pb-2">
										<div class="col-sm-4"><b>Tanggal Lahir</b></div>
										<div class="col-sm-5"><input class="form-control form-control-sm" type="date" placeholder="Tanggal Lahir"></div>
									</div>
									<div class="row ml-2 pb-3">
										<div class="col-sm-4"><b>Jenis Kelamin</b></div>
										<div class="col-sm-6">

											<div class="form-check">
												<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
												<label class="form-check-label" for="exampleRadios1">
													laki-laki
												</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
												<label class="form-check-label" for="exampleRadios2">
													Perempuan
												</label>
											</div>
										</div>
									</div>
									<div class="row ml-2 pb-3">
										<div class="col-sm-4"><b>Pendidikan Terakhir</b></div>
										<div class="col-sm-6">
											<select class="form-control form-control-sm">
												<option selected>Small select</option>
												<option value="sma">SMA</option>
												<option value="smk">SMK</option>
												<option value="s1">S1</option>
												<option value="s2">S2</option>
											</select>
										</div>
									</div>
									<div class="row ml-2 pb-2">
										<div class="col-sm-4"><b>Alamat</b></div>
										<div class="col-sm-5"><input class="form-control form-control-sm" type="text" placeholder="Alamat Tinggal"></div>
									</div>
									<div class="row ml-2 pb-2">
										<div class="col-sm-4"><b>Kota</b></div>
										<div class="col-sm-5"><input class="form-control form-control-sm" type="text" placeholder="Kota"></div>
									</div>
									<div class="row ml-2 pb-2">
										<div class="col-sm-4"><b>Provinsi</b></div>
										<div class="col-sm-5"><input class="form-control form-control-sm" type="text" placeholder="Provinsi"></div>
									</div>
									<div class="row ml-2 pb-2">
										<div class="col-sm-4"><b>Kode Pos</b></div>
										<div class="col-sm-5"><input class="form-control form-control-sm" type="text" placeholder="Kode Pos"></div>
									</div>
									<div class="row ml-2 pb-2">
										<div class="col-sm-4"><b>Pekerjaan</b></div>
										<div class="col-sm-5"><input class="form-control form-control-sm" type="text" placeholder="Pekerjaan"></div>
									</div>
									<div class="row ml-2 pb-2">
										<div class="col-sm-4"><b>No HP</b></div>
										<div class="col-sm-7"><input class="form-control form-control-sm" type="tel" placeholder="No Handphone Aktif"></div>
									</div>
									<div class="row ml-2 pb-2">
										<div class="col-sm-4"><b>Email</b></div>
										<div class="col-sm-7"><input class="form-control form-control-sm" type="email" placeholder="Email"></div>
									</div>


									<div class="ml-5 pt-5 ">
										<button type="submit" class="btn btn-primary btn-sm">Save</button>
								</form>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>