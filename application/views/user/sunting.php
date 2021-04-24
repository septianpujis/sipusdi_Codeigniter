<section class="dashboard-count">
  <div class="container-fluid">
    <div class="card">
      <div class="card-header d-flex align-items-center">
        <h3 class="h4">Isi semua data dengan teliti</h3>
      </div>
      <div class="card-body">
        <form method="post" action="<?php echo site_url('c_user/sunting/'.$user['id_user']) ?>" enctype="multipart/form-data">
          <input hidden type="text" readonly value="<?php echo $user['id_user']?>" name="id_user">
          <div class="row">
            <div class="col-sm-8">
              <div class="form-group row">
                <label class="col-sm-3 form-control-label">Nomor Induk</label>
                <div class="col-sm-9">
                  <input type="text" name="nomor" class="form-control" placeholder="NIS untuk Siswa, NIP untuk Pegawai" required value="<?php echo $user['nomor_induk'] ?>">
                </div>
              </div>
              <div class="line"> </div>
              <div class="form-group row">
                <label class="col-sm-3 form-control-label">Nama</label>
                <div class="col-sm-9">
                  <input type="text" name="nama" class="form-control" placeholder="Nama Pengguna" required value="<?php echo $user['nama'] ?>">
                </div>
              </div>
              <div class="line"> </div>
              <div class="form-group row">
                <label class="col-sm-3 form-control-label">Level Akun</label>
                <div class="col-sm-9">
                  <div>
                    <input <?php if($user['level']==1) echo "checked" ?> id="optionsRadios1" type="radio" value="1" name="level">
                    <label for="optionsRadios1">Pegawai</label>
                  </div>
                  <div>
                    <input <?php if($user['level']==2) echo "checked" ?> id="optionsRadios2" type="radio" value="2" name="level">
                    <label for="optionsRadios2">Pembaca</label>
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 form-control-label">Kode Kelas</label>
                <div class="col-sm-9 select">
                  <select name="id_kelas" class="form-control" >
                    <?php foreach($kelas as $row):?>
                    <option value="<?php echo $row->id_kelas;?>" <?php if($row->id_kelas == $user['id_kelas'])echo 'selected';?> ><?php echo $row->nama_kelas;?></option>
                    <?php endforeach;?>
                  </select>
                </div>
              </div>
            <div class="form-group row">
              <label class="col-sm-3 form-control-label">Nomor Telepon</label>
              <div class="col-sm-9">
                <input type="text" name="no_telp" class="form-control" placeholder="Nomor Telepon/Handphone yang bisa dihubungi" value="<?php echo $user['no_telp']?>">
              </div>
            </div>
            <div class="line"> </div>
            <div class="line"> </div>
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
              <input type="submit" class="btn btn-primary" value="Simpan Data">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>