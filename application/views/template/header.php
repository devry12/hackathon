<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?=$title_template;?></title>
  <link rel="stylesheet" href="<?=base_url('assets/bootstrap/css/bootstrap.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/smartedu/css/smartedu.css')?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">

</head>

<style media="screen">
  html {
    font-family: Lato, 'Helvetica Neue', Arial, Helvetica, sans-serif;
    font-size: 14px;
  }

  h5 {
    font-size: 1.28571429em;
    font-weight: 700;
    line-height: 1.2857em;
    margin: 0;
  }

  .card {
    font-size: 1em;
    overflow: hidden;
    padding: 0;
    border: none;
    border-radius: .28571429rem;
    box-shadow: 0 1px 3px 0 #d4d4d5, 0 0 0 1px #d4d4d5;
  }

  .card-block {
    font-size: 1em;
    position: relative;
    margin: 0;
    padding: 1em;
    border: none;
    border-top: 1px solid rgba(34, 36, 38, .1);
    box-shadow: none;
  }

  .card-img-top {
    display: block;
    width: 100%;
    height: auto;
  }

  .card-title {
    font-size: 1.28571429em;
    font-weight: 700;
    line-height: 1.2857em;
  }

  .card-text {
    clear: both;
    margin-top: .5em;
    color: rgba(0, 0, 0, .68);
  }

  .card-footer {
    font-size: 1em;
    position: static;
    top: 0;
    left: 0;
    max-width: 100%;
    padding: .75em 1em;
    color: rgba(0, 0, 0, .4);
    border-top: 1px solid rgba(0, 0, 0, .05) !important;
    background: #fff;
  }

  .card-inverse .btn {
    border: 1px solid rgba(0, 0, 0, .05);
  }

  .profile {
    position: absolute;
    top: -12px;
    display: inline-block;
    overflow: hidden;
    box-sizing: border-box;
    width: 25px;
    height: 25px;
    margin: 0;
    border: 1px solid #fff;
    border-radius: 50%;
  }

  .profile-avatar {
    display: block;
    width: 100%;
    height: 100%;
    border-radius: 50%;
  }

  .profile-inline {
    position: relative;
    top: 0;
    display: inline-block;
  }

  .profile-inline~.card-title {
    display: inline-block;
    margin-left: 4px;
    vertical-align: top;
  }

  .text-bold {
    font-weight: 700;
  }

  .meta {
    font-size: 1em;
    color: rgba(0, 0, 0, .4);
  }

  .meta a {
    text-decoration: none;
    color: rgba(0, 0, 0, .4);
  }

  .meta a:hover {
    color: rgba(0, 0, 0, .87);
  }
</style>

<body>

  <section id="sidebars">
    <!-- Vertical navbar -->
    <div class="vertical-nav bg-dark" id="sidebar" style="z-index:2">
      <div class="py-4 px-3 mb-4 sm-color-black">
        <div class="media d-flex align-items-center"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556074849/avatar-1_tcnd60.png" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
          <div class="media-body">
            <h4 class="m-0 text-light">Jason Doe</h4>
            <p class="font-weight-light text-muted mb-0">Web developer</p>
          </div>
        </div>
      </div>

      <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Main</p>

      <ul class="nav flex-column sm-color-black mb-0">
        <li class="nav-item">
          <a href="<?=base_url('dashboard');?>" class="nav-link text-light font-italic sm-color-black">
            <i class="fas fa-th-large mr-3"></i>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a href="<?=base_url('parents');?>" class="nav-link text-light font-italic sm-color-black">
            <i class="fas fa-th-large mr-3"></i>
            Data Orang Tua
          </a>
        </li>
        <li class="nav-item">
          <a href="<?=base_url('driver');?>" class="nav-link text-light font-italic sm-color-black">
            <i class="fas fa-th-large mr-3"></i>
            Data Mitra Driver
          </a>
        </li>
      </ul>

      <p class="text-gray font-weight-bold text-uppercase px-3 small py-4 mb-0">Order</p>

      <ul class="nav flex-column sm-color-black mb-0">
        <li class="nav-item">
          <a href="#" class="nav-link text-light font-italic">
            <i class="fa fa-area-chart mr-3 text-primary fa-fw"></i>
            Data Order
          </a>
        </li>
      </ul>
    </div>
    <!-- End vertical navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark sm-color-orange shadow p-3 mb-5 sticky-top" style="z-index:1">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link text-light" href="#"><i class="far fa-bell"></i></a>
          </li>
        </ul>
      </div>
    </nav>
</section>