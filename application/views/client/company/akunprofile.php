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
                                        <a href="<?php echo base_url(); ?>company/dataakun" class="list-group-item list-group-item-action">Account</a>
                                        <a href="<?php echo base_url(); ?>talent/dataakunprofile" class="list-group-item list-group-item-action active">Edit Profile</a>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="col-lg-7">

                        <div class="card">

                            <h5 class="card-header">Data Penanggung Jawab</h5>
                            <div class="card-body">

                            <form>
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
		<div class="col-sm-4"><b>Jabatan</b></div>
		<div class="col-sm-5"><input class="form-control form-control-sm" type="text" placeholder="Jabatan Pekerjaan"></div>
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

            <div class="row pt-2 justify-content-center">
		
	<div class="col-lg-4 text-center">
		
		
		</div>
		
	<div class="col-lg-7">
		
		<div class="card">
		
		<h5 class="card-header">Data Usaha</h5>
		<div class="card-body">
			
		<form>
		<div class="row ml-2 pb-2 pt-4">
		<div class="col-sm-4"><b>NPWP</b></div>
		<div class="col-sm-5"><input class="form-control form-control-sm" min="35000000000000" type="number" placeholder="No NPWP"></div>
		</div>
		<div class="row ml-2 pb-2">
		<div class="col-sm-4"><b>Nama</b></div>
		<div class="col-sm-5"><input class="form-control form-control-sm" type="text" placeholder="Nama Perusahaan"></div>
		</div>
		<div class="row ml-2 pb-2">
		<div class="col-sm-4"><b>Alamat</b></div>
		<div class="col-sm-5"><input class="form-control form-control-sm" type="text" placeholder="Alamat Perusahaan"></div>
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
		<div class="col-sm-4"><b>Jml Pendapatan</b></div>
		<div class="col-sm-7"><input class="form-control form-control-sm" type="tel" placeholder="Rata-Rata dlm setahun"></div>
		</div>
		<div class="row ml-2 pb-2">
		<div class="col-sm-4"><b>Jml  Tenaga Kerja</b></div>
		<div class="col-sm-7"><input class="form-control form-control-sm" type="tel" placeholder="Jml Karyawan"></div>
		</div>
		<div class="row ml-2 pb-3">
		<div class="col-sm-4"><b>Jenis Usaha</b></div>
		<div class="col-sm-6">
		<select class="form-control form-control-sm">
		<option selected>Usaha </option>
		<option value="PT">PT</option>
		<option value="CV">CV</option>
		<option value="Koperasi">Koperasi</option>
		<option value="BUMN">BUMN</option>
		<option value="Firma">Firma</option>
		<option value="Lainya">Lainya</option>
		</select>
		</div>
		</div>
		
		<div class="row ml-2 pb-2">
		<div class="col-sm-4"><b>No Tlp</b></div>
		<div class="col-sm-7"><input class="form-control form-control-sm" type="tel" placeholder="No Tlp Perusahaan"></div>
		</div>
		<div class="row ml-2 pb-2">
		<div class="col-sm-4"><b>Website</b></div>
		<div class="col-sm-7"><input class="form-control form-control-sm" type="tel" placeholder="Website Perusahaan"></div>
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
    </div>
</section>