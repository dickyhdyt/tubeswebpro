
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