<section class="dashboard-count">
  <div class="container-fluid">
    <div class="card">
      <div class="card-header d-flex align-items-center">
        <h3 class="h4">Isi semua data dengan teliti</h3>
      </div>
      <div class="card-body">
        <form method="post" action="<?php echo site_url('c_user/tambah') ?>">
          <div class="row">
            <div class="col-sm-8">
              <div class="form-group row">
                <label class="col-sm-3 form-control-label">Nomor Induk</label>
                <div class="col-sm-9">
                  <input type="text" name="nomor" class="form-control" placeholder="NIS untuk Siswa, NIP untuk Pegawai" required>
                </div>
              </div>
              <div class="line"> </div>
              <div class="form-group row">
                <label class="col-sm-3 form-control-label">Nama</label>
                <div class="col-sm-9">
                  <input type="text" name="nama" class="form-control" placeholder="Nama Pengguna" required>
                </div>
              </div>
              <div class="line"> </div>
              <div class="form-group row">
                <label class="col-sm-3 form-control-label">Level Akun</label>
                <div class="col-sm-9">
                  <div>
                    <input id="optionsRadios1" type="radio" checked value="1" name="level">
                    <label for="optionsRadios1">Pegawai</label>
                  </div>
                  <div>
                    <input id="optionsRadios2" type="radio" value="2" name="level">
                    <label for="optionsRadios2">Pembaca</label>
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 form-control-label">Kode Kelas</label>
                <div class="col-sm-9 select">
                  <select name="id_kelas" class="form-control">
                    <?php foreach($kelas as $row):?>
                    <option value="<?php echo $row->id_kelas;?>"><?php echo $row->nama_kelas;?></option>
                    <?php endforeach;?>
                  </select>
                </div>
              </div>
            <div class="form-group row">
              <label class="col-sm-3 form-control-label">Nomor Telepon</label>
              <div class="col-sm-9">
                <input type="text" name="no_telp" class="form-control" placeholder="Nomor Telepon/Handphone yang bisa dihubungi">
              </div>
            </div>
            <div class="line"> </div>
            <div class="line"> </div>
            <div class="form-group row">
              <label class="col-sm-3 form-control-label">Login Data</label>
              <div class="col-sm-9">
                <div class="form-group-material">
                  <input id="register-email" type="email" name="email" required class="input-material">
                  <label for="register-email" class="label-material">Email</label>
                </div>
                <div class="form-group-material">
                  <input id="register-password" type="password" name="password" required class="input-material">
                  <label for="register-password" class="label-material">Password</label>
                </div>
                <div class="form-group-material">
                  <input id="register-password" type="password" name="password2" required class="input-material">
                  <label for="register-password" class="label-material">Ulangi Password</label>
                </div>
              </div>
            </div>
            </div>
            <div class="col-sm-4">
              <div class="image has-shadow"><img class="img-fluid" src="#" alt="Foto Profil Pengguna" width="300" height="360"></div>
              <br/>
              <input type="file" nama="foto_profil">
            </div>
          </div>
          <div class="line"></div>
          <div class="form-group row">
            <div class="col-sm-4 offset-sm-2">
              <a href="<?php echo site_url('c_user')?>" class="btn btn-secondary">Batal</a>
              <button type="reset" class="btn btn-secondary">Reset</button>
              <input type="submit" class="btn btn-primary" value="Tambah Data">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>