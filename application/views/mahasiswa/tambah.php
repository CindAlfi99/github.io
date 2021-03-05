<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card mt-3">
                <div class="card-header">
                    Form Tambah data Mahasiswa
                </div>
                <div class="card-body">



                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                            <!-- pengecekan ada data atau tidak pake required -->
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>

                        </div>
                        <div class="form-group">
                            <label for="npm">Npm</label>
                            <input type="text" class="form-control" id="npm" name="npm" placeholder="Npm">
                            <!-- pengecekan ada data atau tidak pake required -->
                            <small class="form-text text-danger"><?= form_error('npm'); ?></small>



                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                            <!-- pengecekan ada data atau tidak pake required -->
                            <small class="form-text text-danger"><?= form_error('email'); ?></small>

                        </div>
                        <label for="text">Jurusan</label>
                        <select class="custom-select" name="jurusan">
                            <option selected>Jurusan</option>
                            <option value="1">Manajemen Informatika</option>
                            <option value="2">Teknik Informatika</option>
                            <option value="3">Teknik Komputer</option>
                        </select>
                        <button type="submit" name="tambah" class="btn btn-primary mt-3 float-right">Tambah data</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>