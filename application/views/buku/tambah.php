<section class="dashboard-count">
  <div class="container-fluid">
    <div class="card">
      <div class="card-header d-flex align-items-center">
        <h3 class="h4">Isi semua data dengan teliti</h3>
      </div>
      <div class="card-body">
        <form method="post" action="<?php echo site_url('c_buku/tambah') ?>">
          <div class="row">
            <div class="col-sm-8">
              <div class="form-group row">
                <label class="col-sm-3 form-control-label">Judul Buku</label>
                <div class="col-sm-9">
                  <input type="text" name="judul" class="form-control" placeholder="Judul Buku Lengkap" required>
                </div>
              </div>
              <div class="line"> </div>
              <div class="form-group row">
                <label class="col-sm-3 form-control-label">Penulis</label>
                <div class="col-sm-9">
                  <input type="text" name="penulis" class="form-control" placeholder="Nama Penulis Buku" required>
                </div>
              </div>
              <div class="line"> </div>
              <div class="form-group row">
                <label class="col-sm-3 form-control-label">Penerbit</label>
                <div class="col-sm-9">
                  <input type="text" name="penerbit" class="form-control" placeholder="Nama Penerbit Buku" required>
                </div>
              </div>
              <div class="line"> </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group row">
                    <label class="col-sm-6 form-control-label">Tahun Terbit</label>
                    <div class="col-sm-6">
                      <input type="number" min="1950" max="3000" name="tahun" class="form-control" placeholder="Cth: 2016" required>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group row">
                    <label class="col-sm-4 form-control-label">Halaman</label>
                    <div class="col-sm-8">
                      <input type="number" name="halaman" min="10" max="8000" class="form-control" placeholder="Cth: 200" required>
                    </div>
                  </div>
                </div>
              </div>
              <div class="line"> </div>
              <div class="form-group row">
                <label class="col-sm-3 form-control-label">Genre</label>
                <div class="col-sm-9">
                  <input type="text" name="genre" class="form-control" placeholder="Genre Buku" required>
                </div>
              </div>
              <div class="line"> </div>
              <div class="form-group row">
                <label class="col-sm-3 form-control-label">Sinopsis</label>
                <div class="col-sm-9">
                  <textarea type="text" name="sinopsis" class="form-control" rows="12" placeholder="Sinopsis Buku Maksimal 500 Karakter" required ></textarea>
                </div>
              </div>
              <div class="line"> </div>
            </div>
            <div class="line"> </div>
            <div class="col-sm-4">
              <div class="image has-shadow"><img class="img-fluid" src="#" alt="Foto Sampul Buku" width="300" height="360"></div>
              <br/>
              <input type="file" nama="sampul">
            </div>
          </div>
          <div class="line"></div>
          <div class="form-group row">
            <div class="col-sm-4 offset-sm-2">
              <a href="<?php echo site_url('c_buku')?>" class="btn btn-secondary">Batal</a>
              <button type="reset" class="btn btn-secondary">Reset</button>
              <input type="submit" class="btn btn-primary" value="Tambah Data">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>