<div class="container">
    
    <?php if ($this->session->flashdata('success')) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Film <strong>berhasil</strong> <?= $this->session->flashdata('success'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <?php if ($this->session->flashdata('update')) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Film <strong>berhasil</strong> <?= $this->session->flashdata('update'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <?php if ($this->session->flashdata('hapus')) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Film <strong>berhasil</strong> <?= $this->session->flashdata('hapus'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari data Film ... " name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col">
            <h3 class="text-center">Daftar Film</h3>
            <?php if (empty($film)) : ?>
            <div class="alert alert-danger" role="alert">
                Data tidak ditemukan
            </div>
            <?php endif; ?>

            <table class="table mt-5">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">NAMA FILM</th>
                        <th class="text-center" scope="col">DURASI</th>
                        <th class="text-center" scope="col">RATING</th>
                        <th class="text-center" scope="col">SINOPSIS</th>
                        <th class="text-center" scope="col">STATUS</th>
                        <th class="text-center" scope="col">POSTER</th>
                        <th class="text-center" scope="col">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach($film as $f){?>
                    <tr>
                        <td class="text-center"><?php echo $f->nama_film ?></td>
                        <td class="text-center"><?php echo $f->durasi ?></td>
                        <td class="text-center"><?php echo $f->rating ?></td>
                        <td class="text-center"><?php echo $f->sinopsis ?></td>
                        <td class="text-center"><?php echo $f->status ?></td>
                        <td class="text-center"><img src="<?php echo base_url() .'images/'.$f->gambar ?>" alt="" width="200"></td>
                        <td class="text-center">
                            <a href="<?php echo base_url();?>C_teater/ubahFilm/<?php echo $f->id_film ?>" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-pencil"></i> Ubah</a>
                            <a href="<?php echo base_url();?>C_teater/hapusFilm/<?php echo $f->id_film ?>" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
                        </td>
                    <?php }?>
                    </tr>
                </tbody>
            </table>
            
            <div class="row mt-3">
                <div class="col md-6 text-center mt-5">
                    <a href="<?= base_url(); ?>C_teater/tambahFilm" class="btn btn-primary">Tambah Data Film</a>
                </div>
            </div>

        </div>
    </div>
</div>