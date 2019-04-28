<div class="container">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-header text-center">
                    Form Tambah Data Teater
                </div>
                <div class="card-body">
                    <form action="" method="post">
                    <?=form_open_multipart('C_teater/proses_tambah')?>
                        <div class="form-group">
                            <label for="nama_teater">Nama Theater</label>
                            <input type="text" class="form-control" id="nama_teater" name="nama_teater">
                            <small class="form-text text-danger"><?= form_error('nama_teater') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="kota">Kota</label>
                            <input type="text" class="form-control" id="kota" name="kota">
                            <small class="form-text text-danger"><?= form_error('kota') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="text">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat">
                            <small class="form-text text-danger"><?= form_error('alamat') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="text">No Telpon</label>
                            <input type="text" class="form-control" id="no_telpon" name="no_telpon">
                            <small class="form-text text-danger"><?= form_error('no_telpon') ?>.</small>
                        </div>
                        
                        <button type="submit" name="tambahTeater" class="btn btn-primary float-right">Tambah Data</button>
                        
                    </form>
                </div>
            </div>

        </div>
    </div>
</div> 