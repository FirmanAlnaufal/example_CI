<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    From Ubah Data
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $mahasiswa['id']?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" value="<?= $mahasiswa['nama'] ?>" placeholder="nama">
                            <small class="form-text text-muted"><?= form_error('nama') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nrp">Nrp</label>
                            <input type="text" class="form-control" name="nrp" id="nrp" value="<?= $mahasiswa['nrp'] ?> placeholder=" NRP">
                            <small class="form-text text-muted"><?= form_error('nrp') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" id="email" value="<?= $mahasiswa['email'] ?> placeholder=" Email">
                            <small class="form-text text-muted"><?= form_error('email') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" name="jurusan" id="jurusan">
                                <?php foreach ($jurusan as $j) : ?>
                                    <?php if ($j == $mahasiswa['jurusan']) : ?>
                                        <option value="<?= $j; ?>" selected><?= $j; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $j; ?>"><?= $j; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary"> Ubah </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>