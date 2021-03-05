<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card mt-3">
                <div class="card-header">
                    Form Ubah data Mahasiswa
                </div>
                <div class="card-body">



                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="<?= $mahasiswa['nama']; ?>">
                            <!-- pengecekan ada data atau tidak pake required -->
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>

                        </div>
                        <div class="form-group">
                            <label for="npm">Npm</label>
                            <input type="text" class="form-control" id="npm" name="npm" placeholder="Npm" value="<?= $mahasiswa['npm']; ?>">
                            <!-- pengecekan ada data atau tidak pake required -->
                            <small class="form-text text-danger"><?= form_error('npm'); ?></small>



                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?= $mahasiswa['email']; ?>">
                            <!-- pengecekan ada data atau tidak pake required -->
                            <small class="form-text text-danger"><?= form_error('email'); ?></small>

                        </div>
                        <div class="form-group">
                            <label for="text">Jurusan</label>
                            <select class="form-control" name="jurusan">
                                <option selected>Jurusan</option>
                                <?php foreach ($jurusan as $j) : ?>
                                    <?php if ($j == $mahasiswa['jurusan']) : ?>
                                        <option value="<?= $j; ?>" selected><?= $j; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $j; ?>"><?= $j; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>

                            </select>
                        </div>
                        <a href="<?= base_url(); ?>mahasiswa" class="btn btn-primary">Kembali</a>
                        <button type="submit" name="ubah" class="btn btn-primary mt-3 float-right">Ubah data</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>