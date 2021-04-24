<section class="dashboard-count">
  <div class="container-fluid">
    <div class="card">
      <div class="card-header d-flex align-items-center">
        <h3 class="h4">Isi semua data dengan teliti</h3>
      </div>
      <div class="card-body">
        <form method="post" action="<?php echo site_url('c_transaksi/tambah') ?>">
          <div class="row">
            <div class="col-sm-8">
              <div class="form-group row">
                <label class="col-sm-3 form-control-label">Waktu Pinjam</label>
                <div class="col-sm-9">
                  <input type="date" name="waktu_pinjam" class="form-control" readonly="" required value="<?php echo date("Y-m-d");?>">
                </div>
              </div>
              <div class="line"> </div>
              <div class="form-group row">
                <label class="col-sm-3 form-control-label">Peminjam</label>
                <div class="col-sm-9">
                  <select name="user" class="form-control" <?php if ($this->session->userdata('level')=='2') echo "disabled"; ?> >
                    <option>Pilih Data Pengguna</option>
                    <?php foreach($kelas as $row):?>
                    <option value="<?php echo $row->id_user;?>" <?php if($row->id_user == $this->session->userdata('id')) echo 'selected';?>><?php echo $row->nama;?></option>
                    <?php endforeach;?>
                  </select>
                </div>
              </div>
              <div class="line"> </div>
              <div class="form-group row">
                <label class="col-sm-3 form-control-label">Judul Buku Yang Dipinjam</label>
                <div class="col-sm-9">
                  <select name="buku" class="form-control" required="">
                    <option>Pilih Buku</option>
                    <?php foreach($buku as $row):?>
                    <option value="<?php echo $row->id_buku;?>" <?php if ($row->id_buku == $this->input->post('id_buku')){echo "selected";}?>><?php echo $row->judul;?></option>
                    <?php endforeach;?>
                  </select>
                </div>
              </div>
              <div class="line"> </div>
            </div>
            <div class="line"> </div>
            <div class="col-sm-4">
              <div>Waktu Peminjaman Terhitung 7 (Tujuh) Hari sejak buku diambil (Status 'belum diambil' berubah menjadi 'belum dikembalikan'</div>
            </div>
          </div>
          <div class="line"></div>
          <div class="form-group row">
            <div class="col-sm-4 offset-sm-2">
              <a href="<?php echo site_url('c_transaksi')?>" class="btn btn-secondary">Batal</a>
              <button type="reset" class="btn btn-secondary">Reset</button>
              <input type="submit" class="btn btn-primary" value="Tambah Data">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>