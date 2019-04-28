
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <style>
    div.grid_movie{
      margin-bottom:10px;
      background-color: white;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
  </style>
</head>

<body style="background-color:#f2f2f2FF;height:100%">

<div class="container mt-5 pt-5 pb-3" style="height:100%;">
  <div class="row justify-content-md-center">
    <div class="col-md-9  pt-4" style="background-color:white;height:100%;">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
          <li data-target="#myCarousel" data-slide-to="4"></li>
          <li data-target="#myCarousel" data-slide-to="5"></li>
          <li data-target="#myCarousel" data-slide-to="6"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" style="width:100%; height:90%">
          <div class="item active">
            <img src="<?= base_url(); ?>assets/carousel/1.jpg" alt="gambar1" style="width:100%;">
          </div>

          <div class="item">
            <img src="<?= base_url(); ?>assets/carousel/2.jpg" alt="gambar2" style="width:100%;">
          </div>
        
          <div class="item">
            <img src="<?= base_url(); ?>assets/carousel/3.jpeg" alt="gambar3" style="width:100%;">
          </div>

          <div class="item">
            <img src="<?= base_url(); ?>assets/carousel/4.jpg" alt="gambar4" style="width:100%;">
          </div>
        
          <div class="item">
            <img src="<?= base_url(); ?>assets/carousel/5.jpg" alt="gambar5" style="width:100%;">
          </div>

          <div class="item">
            <img src="<?= base_url(); ?>assets/carousel/6.jpg" alt="gambar6" style="width:100%;">
          </div>
        
          <div class="item">
            <img src="<?= base_url(); ?>assets/carousel/7.jpg" alt="gambar7" style="width:100%;">
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <?php if (empty($film)) : ?>
            <div class="alert alert-danger" role="alert">
                Data tidak ditemukan
            </div>
            <?php endif; ?>

      <div class="row">
        <?php foreach ($film as $f) { ?>

        <div class="col-3 pt-4" style="background-color:white;height:100%;">
          <div class="grid_movie" >
            <center>
            <a href="<?php echo base_url();?>C_teater/indexDeskripsiFilm/<?php echo $f->id_film ?>">
              <img src="<?php echo base_url() .'images/'.$f->gambar ?>" alt="" style="max-height:250px">
            </a>
            <div class="clearfix pt-3"> </div>
            <div class="title"><?php echo $f->nama_film?></div>
            <div class="btn-group-sm rating pt-5 pb-5 "style="width:100%">
            <span class="btn btn-default btn-outline disabled" style="color: #005350;">2D</span>
            <a class="btn btn-default btn-outline disabled" style="color: #005350;"><?php echo $f->rating ?></a>
            <div class="clearfix"></div>
            <span style="color:red; font-size:9px; margin-top:5px"></span>
            </center>
          </div> 
        </div>
        <?php }?>
      </div>
      </div>
  </div>
</div>
</body>
</html>