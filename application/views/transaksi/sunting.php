<section class="dashboard-count">
  <div class="container-fluid">
    <div class="card">
      <div class="card-header d-flex align-items-center">
        <h3 class="h4">Isi semua data dengan teliti</h3>
      </div>
      <div class="card-body">
        <form method="post" action="<?php echo site_url('c_transaksi/sunting/'.$trans['id_trans']) ?>" enctype="multipart/form-data">
          <input hidden type="text" readonly value="<?php echo $trans['id_trans']?>" name="id_trans">
          <div class="row">
            <div class="col-sm-8">
              <div class="form-group row">
                <label class="col-sm-3 form-control-label">Tanggal Pembuatan Transaksi</label>
                <div class="col-sm-9">
                  <input type="date" name="waktu_pinjam" class="form-control" readonly="" required value="<?php echo $trans['waktu_pinjam'];?>">
                </div>
              </div>
              <div class="line"> </div>
              <div class="form-group row">
                <label class="col-sm-3 form-control-label">Tanggal Pengambilan Buku</label>
                <div class="col-sm-9">
                  <input type="date" name="waktu_ambil" class="form-control" value="<?php echo $trans['waktu_ambil'];?>" >
                </div>
              </div>
              <div class="line"> </div>
              <div class="form-group row">
                <label class="col-sm-3 form-control-label">Tanggal Pengembalian Buku</label>
                <div class="col-sm-9">
                  <input type="date" name="waktu_kembali" class="form-control" value="<?php echo $trans['waktu_kembali'];?>">
                </div>
              </div>
              <div class="line"> </div>
              <div class="form-group row">
                <label class="col-sm-3 form-control-label">Peminjam</label>
                <div class="col-sm-9">
                  <select name="user" class="form-control">
                    <?php foreach($user as $row):?>
                    <option value="<?php echo $row->id_user;?>" <?php if($row->id_user == $trans['id_user'])echo 'selected';?>><?php echo $row->nama;?></option>
                    <?php endforeach;?>
                  </select>
                </div>
              </div>
              <div class="line"> </div>
              <div class="form-group row">
                <label class="col-sm-3 form-control-label">Judul Buku Yang Dipinjam</label>
                <div class="col-sm-9">
                  <select name="buku" class="form-control" required="">
                    <?php foreach($buku as $row):?>
                    <option value="<?php echo $row->id_buku;?>" <?php if($row->id_buku == $trans['id_buku'])echo 'selected';?>><?php echo $row->judul;?></option>
                    <?php endforeach;?>
                  </select>
                </div>
              </div>
              <div class="line"> </div>
              <div class="form-group row">
                <label class="col-sm-3 form-control-label">Status Peminjaman</label>
                <div class="col-sm-9">
                  <select name="status" class="form-control" required="">
                    <?php foreach($status as $row):?>
                    <option value="<?php echo $row->id_status;?>" <?php if($row->id_status == $trans['id_status'])echo 'selected';?>><?php echo $row->nama_status;?></option>
                    <?php endforeach;?>
                  </select>
                </div>
              </div>
            </div>
            <div class="line"> </div>
            <div class="col-sm-4">

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