
<html>
<head>
  <title>Form Edit Film</title>
  <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
  <style>
  .file {
    visibility: hidden;
    position: absolute;
  }
  </style>
</head>
<body>
   <div class="container">
     <h3 align="center"><b>MERUBAH DATA FILM</b></h3>
 <div class="col-md-3">
 </div>
 <div class="jumbotron col-md-6">
   <?php foreach($film as $f) {?>
     <?=form_open_multipart('C_teater/proses_ubah/'.$f->id_film)?>
    <div class="form-group">
      <label for="nama_film">Nama Film :</label>
      <input type="text" name="nama_film" class="form-control" placeholder="Masukan Nama Film" id="nama_film" value="<?php echo $f->nama_film ?>" required>
    </div>
    <div class="form-group">
      <label for="durasi">durasi :</label>
      <input type="text" name="durasi" class="form-control" placeholder="Masukan Durasi Film" id="durasi" value="<?php echo $f->durasi ?>" required>
    </div>
    <div class="form-group">
      <label for="durasi">rating :</label>
      <select class="form-control" id="rating" name="rating">
                                <option value="SU">SU</option>
                                <option value="R">R</option>
                                <option value="R">RBO</option>
                                <option value="R">D</option>  
                            </select>
    </div>
    <div class="form-group">
      <label for="sinopsis">sinopsis:</label>
      <input type="text" name="sinopsis" class="form-control" placeholder="Masukan Sinopsis Film" id="sinopsis" value="<?php echo $f->sinopsis ?>" required>
    </div>
    <div class="form-group">
      <label for="status">status :</label>
      <select class="form-control" id="status" name="status">
                                <option value="Playing">Playing</option>
                                <option value="Up Coming">Up Coming</option>
                            </select>
    </div>
    <div class="form-group">
      <label for="userfile">Gambar :</label>
      <input type="file" name="userfile" class="file">
      <div class="input-group col-xs-12">
        <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
        <input type="text" class="form-control input-lg" disabled placeholder="Upload Gambar">
        <span class="input-group-btn">
          <button class="browse btn btn-primary input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Telusuri</button>
        </span>
      </div><br>
    </div>
  <?php }?>
        <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
 </div>

</div> <!-- /container -->
  <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/bootstrap/js/jquery.min.js'); ?>"></script>
  <script type="text/javascript">
  $(document).on('click', '.browse', function(){
    var file = $(this).parent().parent().parent().find('.file');
    file.trigger('click');
  });
  $(document).on('change', '.file', function(){
    $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
  });
  </script>
</body>
</html>
