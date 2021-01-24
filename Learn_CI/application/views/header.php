<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/offcanvas/">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url("assets/bootstrap/css/bootstrap.css"); ?>">
    <link rel="stylesheet" href="<?= base_url("assets/fontawesome/css/font-awesome.css"); ?>">
   
    <!-- Custome CSS -->
    <link rel="stylesheet" href="<?= base_url("assets/template/style.css"); ?>">

    <title>Learning Codeigniter</title>
  </head>
  <body class="bg-light">
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Learning Codeigniter</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        
          <li class="nav-item active">
            <a class="nav-link" href="<?= base_url("home"); ?>">Home</a>
          </li>

          <?php
            echo menu_help('main_menu', 'set_menu', 'link', 'icon');
          ?>
        </ul>
      </div>
    </nav>    

    <div class="nav-scroller bg-white shadow-sm">
      <nav class="nav nav-underline">
        <a class="nav-link active" href="#">Dashboard</a>
        <a class="nav-link" href="<?php echo base_url('logout') ?>">Logout</a>
      </nav>
    </div>

    <main role="main" class="container">
      <div class="my-3 p-3 bg-white rounded shadow-sm">

