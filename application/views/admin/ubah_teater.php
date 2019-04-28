<div class="container">
    <div class="row mt-3">
        <div class="col md-6">
            <div class="card">
                <div class="card-header text-center">
                    Form Ubah Data Theater
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $teater['id_teater'] ?>">
                        <div class="form-group">
                            <label for="nama">Nama Theater</label>
                            <input type="text" class="form-control" id="nama_teater" name="nama_teater" value="<?= $teater['nama_teater']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama_teater') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="text">Kota</label>
                            <input type="text" class="form-control" id="kota" name="kota" value="<?= $teater['kota']; ?>">
                            <small class="form-text text-danger"><?= form_error('kota') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="text">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $teater['alamat']; ?>">
                            <small class="form-text text-danger"><?= form_error('alamat') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="text">No TelpoN</label>
                            <input type="text" class="form-control" id="no_telpon" name="no_telpon" value="<?= $teater['no_telpon']; ?>">
                            <small class="form-text text-danger"><?= form_error('no_teater') ?>.</small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div> 