<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Blog Template for Bootstrap</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="<?php echo get_bloginfo( 'template_directory' );?>/style.css" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Anton|Cabin|Fjalla+One|Maven+Pro|Noto+Sans+KR&display=swap" rel="stylesheet">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <?php wp_head();?>
</head>

<body>

<!-- Social Media Bar -->
<nav class="navbar navbar-light bg-blackanddark">
  <div class="row align-top-bar">
    <div class="col-sm-2">
      <i class="fa fa-facebook-square" style="color:white;margin-right:1%;"></i>
      <i class="fa fa-youtube" style="color:white;margin-right:1%;"></i>
      <i class="fa fa-instagram" style="color:white;margin-right:1%;"></i>
      <i class="fa fa-twitter" style="color:white;margin-right:1%;"></i>
    </div>
    <div class="col-sm-2"></div>
    <div class="col-sm-4 padd-menu-bar">
      <p class="address-info"><i class="fa fa-map-marker-alt color-white"></i> 3991 Norman Street, Quenemo, KS, 66528&emsp;(888) 200-4008</p>
    </div>
    <div class="col-sm-4">
      <button class="btn btn-primary right-position-quick-quote">QUICK QUOTE</button>
    </div>
  </div>
</nav>

<!-- Logo and options -->
<nav class="navbar navbar-light bg-light custom-shadow">
  <a class="navbar-brand" href="#">
    <img src="http://localhost:8888/1/wp-content/uploads/2019/10/logo_cleaning_services.png" alt="main logo image" class="top-left-logo">
  </a>
  <div class="row retain-right padd-top">
    <p class="col-sm-6 bold-text">
        GALLERY
    </p>
    <p class="col-sm-6 bold-text">
        MENU
    </p>
  </div>
</nav>

<!-- Bottom menu -->
<div class="background-sub-menu"></div>