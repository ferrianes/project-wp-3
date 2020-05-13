<!--

=========================================================
* Now UI Kit - v1.3.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-kit
* Copyright 2019 Creative Tim (http://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/now-ui-kit/blob/master/LICENSE.md)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('/assets/img/apple-icon.png'); ?>">
  <link rel="icon" type="image/png" href="<?= base_url('/assets/img/assets/icon.png'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    <?= $title; ?>
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="<?= base_url('/assets/css/bootstrap.min.css'); ?>" rel="stylesheet" />
  <link href="<?= base_url('/assets/css/now-ui-kit.css?v=1.3.0'); ?>" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?= base_url('/assets/demo/demo.css'); ?>" rel="stylesheet" />
  <!-- Custom CSS For this Website -->
  <link href="<?= base_url('/assets/css/custom.css'); ?>" rel="stylesheet" />
</head>

<body class="<?= $nav == 'Home' ? 'index-page' : ($nav == 'Login' ? 'login-page' : ''); ?> sidebar-collapse">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="https://demos.creative-tim.com/now-ui-kit/index.html" rel="tooltip" title="Sistem Informasi Portal Berita serta Pengaduan RT 04 RW 04 Jatipadang" data-placement="bottom" target="_blank">
        <i class="now-ui-icons business_bulb-63"></i>
          RT 04 RW 04
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar top-bar"></span>
          <span class="navbar-toggler-bar middle-bar"></span>
          <span class="navbar-toggler-bar bottom-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="">
              <p>Beranda</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">
              <p>Semua Berita</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">
              <p>Pengaduan</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">
              <p>Tentang</p>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="Login" data-toggle="dropdown">
              <i class="now-ui-icons users_circle-08"></i>
              <p>Log in</p>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="Login">
              <a class="dropdown-item" href="">
                <i class="now-ui-icons objects_key-25"></i> Masuk
              </a>
              <a class="dropdown-item" target="_blank" href="">
                <i class="now-ui-icons business_badge"></i> Daftar
              </a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <?php
    if ($nav == 'Home') {
  ?>
  <div class="wrapper">
    <div class="page-header clear-filter" filter-color="blue-ocean">
      <div class="page-header-image" data-parallax="true" style="background-image:url('<?= base_url('assets/img/assets/page-header.png') ?>');">
      </div>
      <div class="container">
        <div class="content-center brand">
          <img class="n-logo" src="./assets/img/now-logo.png" alt="">
          <h1 class="h1-seo">Selamat Datang.</h1>
          <h3>Website Resmi Portal Berita dan Pengaduan RT 04/04 Jatipadang.</h3>
        </div>
        <h6 class="category category-absolute">Designed & Coded by UBSI Students.</h6>
      </div>
    </div>
  <?php } ?>