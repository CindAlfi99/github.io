<div class="container">
    <h3>List Of Peoples</h3>
    <div class="row">
        <div class="col-md-5">
            <form action="<?= base_url(); ?>peoples" method="post">

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search..." name="keyword">
                    <div class="input-group-append">
                        <input class="btn btn-primary" type="submit" name="btn" value="Cari" autocomplete="off" autofocus></input>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <div class="row">
        <div class="col-md-10 mt-3">
            <!-- <h5>Result : -->
            <!-- </h5> -->
            <table class="table">
                <thead>
                    <tr>

                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <!-- ini adalah error ketika data tidak ada -->
                <?php if (empty($peoples)) : ?>
                    <div class="alert alert-danger" role="alert">
                        Data peoples tidak <b>ditemukan!</b>
                    </div>
                <?php endif; ?>
                <tbody>
                    <?php $start; ?>
                    <?php foreach ($peoples as $people) : ?>
                        <tr>
                            <td><?= ++$start; ?></td>
                            <th><?= $people['name']; ?></th>
                            <td><?= $people['email']; ?></td>
                            <td>
                                <a href="" class="badge badge-warning">detail</a>
                                <a href="" class="badge badge-success">edit</a>
                                <a href="" class="badge badge-danger">hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <!-- menampilkan pagination -->
            <?= $this->pagination->create_links(); ?>
        </div>
    </div>
</div>