<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Website Amir_Sy</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="<?php echo base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url(); ?>assets/css/clean-blog.min.css" rel="stylesheet">

</head>

<body>

              <!-- Navigation -->
              <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
                <div class="container">
                  <a class="navbar-brand" href="<?php echo site_url(); ?>"><h1>ADMIN<h1></a>
                  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url(); ?>">Home</a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url(); ?>">+ CodeIgniter</a>
                      
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url(); ?>">+ Laravel</a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url(); ?>">+ Docker</a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url(); ?>">+ Kubernetas</a>
                      </li>

                      <!--
                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url(); ?>">Linux Ubuntu</a>
                      </li>
                      -->
                      
                      <?php if(isset($_SESSION['username'])): ?>

                      <li class="nav-item">
                          <a class="nav-link" href="<?php echo site_url('blog/add'); ?> ">
                          Tambah Artikel</a>  <!-- link untuk menambahkan Artikel -->
                    </li>

                    <li class="nav-item">
                          <a class="nav-link" href="<?php echo site_url('blog/logout'); ?> ">
                          Logout</a>  <!-- link untuk menambahkan Artikel // untuk menambahkan logout pada sistem menggunakan session -->
                    </li>

                <?php else: ?>

                    <li class="nav-item">
                          <a class="nav-link" href="<?php echo site_url('blog/login'); ?> ">
                          Login</a>  <!-- link untuk menambahkan Artikel -->
                    </li>

                <?php endif; ?>
                      
                    

        </ul>
      </div>
    </div>
  </nav>
