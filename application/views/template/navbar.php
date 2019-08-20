<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->

  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="shortcut icon" href="<?= base_url(); ?>assets/img/hexIcons.png">
  <title><?= $title ?></title>
</head>

<body>

  <!---->


  <nav class="navbar fixed-top navbar-expand-lg navbar-light shadow-sm p-3 mb-5 rounded" style="background-color: #e0dfdc;">
    <a class="navbar-brand mr-3" href="<?= base_url(); ?>"><img src="<?= base_url(); ?>assets/img/hexIcons.png" width="100"></a>


    <ul class="navbar-nav mr-5">

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Service
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?= base_url(); ?>#">Training</a>
          <a class="dropdown-item" href="<?= base_url(); ?>#">Mentoring</a>
          <a class="dropdown-item" href="<?= base_url(); ?>#">Company</a>
          <a class="dropdown-item" href="<?= base_url(); ?>#">Job Linking</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?= base_url(); ?>#">About US</a>
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

    <div class="d-flex justify-content-end">
      <div class="p-2 bd-highlight">
        <a href="<?= base_url() ?>auth" type=" button" class="btn btn-danger btn-block mr-5">

          Masuk
        </a></div>

      <div class="p-2 bd-highlight">
        <a href="<?= base_url() ?>auth/register" type=" button" class="btn btn-warning btn-block mr-5">
          Daftar
        </a></div>
    </div>
  </nav>