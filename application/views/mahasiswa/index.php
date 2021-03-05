</div>
<div class="container">
    <?php if ($this->session->flashdata()) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Berhasil!</strong> Data <?= $this->session->flashdata('flash'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>


    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-primary">Tambah Data Mahasiswa</a>
        </div>
    </div>
    <!-- input group -->
    <div class="row-mt-3">
        <div class="col-md-6">
            <form action="" method="post">

                <div class="input-group mb-3 mt-3">
                    <input type="text" class="form-control" placeholder="Cari data mahasiswa" name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <h1 class="mt-3"><?= $judul; ?></h1>
    <?php if (empty($mahasiswa)) : ?>
        <div class="alert alert-danger" role="alert">
            Data Mahasiswa tidak <b>ditemukan!</b>
        </div>
    <?php endif; ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <ul class="list-group list-group-flush">
                <?php foreach ($mahasiswa as $mhs) : ?>
                    <li class="list-group-item"><?= $mhs['nama']; ?><a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('Yakin ingin menghapus?');"> Hapus</a>
                        <a href="<?= base_url(); ?>mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge badge-success float-right"> Ubah</a>
                        <a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary float-right"> Detail</a>

                    </li>

                <?php endforeach; ?>

            </ul>
        </div>
    </div>
</div>