<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    From Tambah Data
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="nama">
                            <small class="form-text text-muted"><?= form_error('nama')?></small>
                        </div>
                        <div class="form-group">
                            <label for="nrp">Nrp</label>
                            <input type="text" class="form-control" name="nrp" id="nrp" placeholder="NRP">
                            <small class="form-text text-muted"><?= form_error('nrp')?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                            <small class="form-text text-muted"><?= form_error('email')?></small>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" name="jurusan" id="jurusan">
                                <option>Sietem Informasi</option>
                                <option>Teknik Informatika</option>
                                <option>Desain Grafis</option>
                                <option>Sastra Indonesia</option>
                            </select>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary"> Tambah </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>