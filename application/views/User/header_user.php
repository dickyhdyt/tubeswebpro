<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <!-- MY CSS -->

    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css">

    <title><?php echo $judul ?></title>

    <style>
        li a:hover{
            background:lightgray;
            color:black;
        }
    </style>
</head>

<body>

<nav class="navbar nav-pills navbar-expand-lg navbar-fixed-top navbar-dark fixed-top" style="background-color: #005350;height:65px;">
    <div class="container">
    <li class="nav-item nav-link mb-5">
        <a class="navbar-brand pt-4" href=<?= base_url(); ?>>
            <img src="<?= base_url(); ?>assets/header/header.png" width="180" alt="">
        </a>
    </li>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="form-inline my-2 my-sm-0" >
                <li class="nav-item nav-link">
                    <a class="nav-link" style="color:white;font-size:15px;" href="<?= base_url();?>C_teater/index"><img src="<?= base_url(); ?>assets/header/home.png" style="width:20px; height:20px">&nbsp;Now Playing</a>
                </li>
                <li class="nav-item nav-link">
                    <a class="nav-item nav-link" style="color:white;" href="<?= base_url(); ?>C_teater/menuTeater"><img src="<?= base_url(); ?>assets/header/theater.png" style="width:20px; height:20px">&nbsp;Theaters</a>
                </li>
                <li class="nav-item nav-link">
                    <a class="nav-item nav-link" style="color:white;" href="<?= base_url(); ?>C_teater/indexFilmUpcoming"><img src="<?= base_url(); ?>assets/header/film.png" style="width:20px; height:20px">&nbsp;Up Coming</a>
                </li>
                <li class="nav-item nav-link">
                    <a class="nav-item nav-link" style="color:white;" href="<?= base_url(); ?>C_teater/indexFilm">&nbsp;Playing in - JAKARTA ></a>
                </li>
            </div>
        </div>
    </div>
    <div class="form-inline my-2 my-lg-0">
        <li class="nav-item nav-link">
            <a class="nav-item nav-link" style="color:white;" href="<?= base_url(); ?>C_user/aboutus"><img src="<?= base_url(); ?>assets/header/info.png" style="width:20px; height:20px">&nbsp;About Us</a>
        </li>
        <li class="nav-item nav-link dropdown">
            <a class="nav-link dropdown-toggle" style="width:150px;color:white;" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><img src="<?= base_url(); ?>assets/header/mtix.png" style="width:20px; height:20px">&nbsp;Cinema 21</a>
            <div class="dropdown-menu">
                <?php
                if($this->session->userdata('logged_in')){
                ?>
                <a class="dropdown-item  py-3 px-3" href="<?= base_url();?>C_teater/Logout" class="nav_bar-animate"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Logout</a>
                
                <?php 
                }
                else{
                ?>
                    <a class="dropdown-item  py-3 px-3" href="<?= base_url();?>C_teater/login" class="nav_bar-animate"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Login User</a>
                <a class="dropdown-item  py-3 px-3" href="<?= base_url();?>C_teater/loginAdmin" class="nav_bar-animate"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Login Admin</a>
                <a class="dropdown-item  py-3 px-3" href="<?= base_url();?>C_teater/registrasi" class="nav_bar-animate"><span class="glyphicon glyphicon-user"></span>&nbsp;Registrasi</a>
                <div class="dropdown-divider"></div>
                <?php
                }
                ?>
                
            </div>
        </li>
    </div>
</nav> 
</body>
    