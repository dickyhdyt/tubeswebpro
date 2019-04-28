
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
        <?php foreach ($film as $f) { ?> 
            <div class="row" style="margin:0px; padding:0px;">
                <div>
                    <h2><?php echo $f->nama_film?></h2>  
                </div>
                <hr width="100%">
            </div>                                  
            <div class="row" style="margin:0px; padding:0px;">   
                <div>
                    <img src="<?php echo base_url() .'images/'.$f->gambar ?>" alt="" style="width:50%; margin-right:10px; margin-bottom: 10px;">
                </div>
            </div>
            <div>
                <p><?php echo $f->sinopsis?></p>
                <br>
            </div>
            <div style="margin-bottom: 5px">
                <strong>Durasi :</strong>
                <p><?php echo $f->durasi?> minutes</p>
            </div>   
            <div style="margin-bottom: 5px">
                <strong>Rating:</strong>
                <p><?php echo $f->rating?></p>
            </div>
            <div style="margin-bottom: 5px">
                <strong>Status:</strong>
                <p><?php echo $f->status?></p>
            </div>                              
        </div>
        <?php }?>
      </div>
        <div class="row mt-3">
            <div class="col md-6 text-center mt-5">
                <a href="<?= base_url(); ?>C_teater/index" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
  </div>
</div>
</body>
</html>