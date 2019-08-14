<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/hexIcons.png">
  <title><?= $title ?></title>
</head>

<body>

  <!---->


  <nav class="navbar fixed-top navbar-expand-lg navbar-light shadow-sm p-3 mb-5 rounded" style="background-color: #e0dfdc;">
    <a class="navbar-brand mr-3" href="<?php echo base_url(); ?>client/index"><img src="<?php echo base_url(); ?>assets/img/hexIcons.png" width="100"></a>


    <ul class="navbar-nav mr-5">

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="<?php echo base_url(); ?>#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Service
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url(); ?>#">Training</a>
          <a class="dropdown-item" href="<?php echo base_url(); ?>#">Mentoring</a>
          <a class="dropdown-item" href="<?php echo base_url(); ?>#">Company</a>
          <a class="dropdown-item" href="<?php echo base_url(); ?>#">Job Linking</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo base_url(); ?>#">About US</a>
        </div>
      </li>

    </ul>
    <div class="col-7">
      <div class="input-group">
        <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
        <div class="input-group-append mr-5">
          <button class="btn btn-outline-primary" type="button" id="button-addon2">Search</button>
        </div>
      </div>
    </div>




    <ul class="navbar-nav ml-auto">

      <div class="topbar-divider d-none d-sm-block"></div>

      <!-- Nav Item - User Information -->
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $client['name']; ?></span>
          <img class="img-profile rounded-circle" width="34" src="<?= base_url('assets/img/') . $client['image']; ?>">
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="<?= base_url(); ?>talent/dataakun">
            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
            Profile
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Logout
          </a>
        </div>
      </li>

    </ul>
  </nav>