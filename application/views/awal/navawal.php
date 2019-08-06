<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="shortcut icon" href="<?php echo base_url();?>assets/img/hexIcons.png">
    <title>Beranda</title>
  </head>
  <body>
  
  <!---->
  
  
<nav class="navbar fixed-top navbar-expand-lg navbar-light shadow-sm p-3 mb-5 rounded" style="background-color: #e0dfdc;">
  <a class="navbar-brand mr-3" href="<?php echo base_url();?>#"><img src="<?php echo base_url();?>assets/img/hexIcons.png" width="100"></a>

   
   <ul class="navbar-nav mr-5">
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Service
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url();?>#">Training</a>
          <a class="dropdown-item" href="<?php echo base_url();?>#">Mentoring</a>
		  <a class="dropdown-item" href="<?php echo base_url();?>#">Company</a>
		  <a class="dropdown-item" href="<?php echo base_url();?>#">Job Linking</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo base_url();?>#">About US</a>
        </div>
      </li>

    </ul>
	
   <div class="input-group">
	<input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
	<div class="input-group-append mr-5">
    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
	</div>
	</div>

	<div class="d-flex justify-content-end">
	<div class="p-2 bd-highlight"><button type="button" class="btn btn-danger btn-block mr-5" data-toggle="modal" data-target="#login">
    Masuk
	</button></div>

	<div class="p-2 bd-highlight"><button type="button" class="btn btn-warning btn-block mr-5" data-toggle="modal" data-target="#regis">
    Daftar
    </button></div>
</div>
</nav>

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
  <img class="mb-4" src="<?php echo base_url();?>assets/img/hexIcons.png" alt="" width="100">
  <form class="form-signin">
		
		<label for="inputEmail" class="sr-only">Email address</label>
		<input type="email" id="inputEmail" class="form-control mb-3" placeholder="Email address" required autofocus>
		
		<label for="inputName" class="sr-only">Username</label>
		<input type="name" id="inputName" class="form-control mb-3" placeholder="Username" required autofocus>
	
		  
		<label for="inputPassword" class="sr-only">Password</label>
		<input type="password" id="inputPassword" class="form-control mb-3" placeholder="Password" required>
	
  <button class="btn btn-primary btn-block" type="submit">Sign up</button>
  <p class="mt-3 mb-2 text-muted">Do you have an account ? </p>
  <button type="button" class="btn btn-link text-danger" data-toggle="modal" data-target="#login" data-dismiss="modal">
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
  <img class="mb-4" src="<?php echo base_url();?>assets/img/hexIcons.png" alt="" width="100">
  <form class="form-signin">
		
		<label for="inputEmail" class="sr-only">Email address</label>
		<input type="email" id="inputEmail" class="form-control mb-3" placeholder="Email address" required autofocus>
		
		<label for="inputName" class="sr-only">Username</label>
		<input type="name" id="inputName" class="form-control mb-3" placeholder="Username" required autofocus>
		
		  
		<label for="inputPassword" class="sr-only">Password</label>
		<input type="password" id="inputPassword" class="form-control mb-3" placeholder="Password" required>
	
  <button class="btn btn-primary btn-block" type="submit">Sign up</button>
  <p class="mt-3 mb-2 text-muted">Do you have an account ? </p>
  <button type="button" class="btn btn-link text-danger" data-toggle="modal" data-target="#login" data-dismiss="modal">
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
  <img class="mb-4" src="<?php echo base_url();?>assets/img/hexIcons.png" alt="" width="100">
  <form class="form-signin">
		
		<label for="inputEmail" class="sr-only">Company Email</label>
		<input type="email" id="inputEmail" class="form-control mb-3" placeholder="Company Email" required autofocus>
		
		<label for="inputName" class="sr-only">Company Name</label>
		<input type="name" id="inputName" class="form-control mb-3" placeholder="Company Name" required autofocus>
		
		  
		<label for="inputPassword" class="sr-only">Password</label>
		<input type="password" id="inputPassword" class="form-control mb-3" placeholder="Password" required>
	
  <button class="btn btn-primary btn-block" type="submit">Sign up</button>
  <p class="mt-3 mb-2 text-muted">Do you have an account ? </p>
  <button type="button" class="btn btn-link text-danger" data-toggle="modal" data-target="#login" data-dismiss="modal">
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
      <form class="form-signin" action="<?= base_url();?>masuk/berandamasuk" method="POST">
		<img class="mb-4" src="<?php echo base_url();?>assets/img/hexIcons.png" alt="" width="100">
		
		<label for="inputName" class="sr-only">Username</label>
		<input type="name" id="inputEmail" class="form-control mb-3" placeholder="Username" required autofocus>
		
			  
		<label for="inputPassword" class="sr-only">Password</label>
		<input type="password" id="inputPassword" class="form-control mb-3" placeholder="Password" required>
		
  <button class="btn btn-primary btn-block" type="submit">Sign up</button>
  
  <p class="mt-3 mb-2 text-muted">Don't have an account ? Sign Up 
  <button type="button" class="btn btn-link text-danger" data-toggle="modal" data-target="#regis" data-dismiss="modal">
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