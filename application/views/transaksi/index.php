<section class="dashboard">
  <div class="container-fluid">
    <?php if($this->session->flashdata('pesan')){?>
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <label><?php echo $this->session->flashdata('pesan'); $this->session->set_flashdata('pesan', '');?></label>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php }?>
    <div class="project">
      <div class="row bg-white has-shadow">
        <div class="left-col col-lg-8 d-flex align-items-center justify-content-between">
          <div class="project-title d-flex align-items-center">
            <a href="<?php echo site_url('c_transaksi/tambah')?>" class="btn btn-success"><i class="fa fa-user-plus"></i> Tambah transaksi</a>
          </div>
          <div class="project-date"><span class="hidden-sm-down">Total transaksi: </span> <strong><?php echo $jumlah?></strong></div>
        </div>
        <div class="right-col col-lg-4 d-flex align-items-right">
          <form action="<?php echo site_url('c_transaksi');?>" method="get">
            <div class="input-group">  
                <input type="date" class="form-control" placeholder="Cari Judul transaksi" name="query" required>
                <span class="input-group-btn">
                  <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Cari!</button>
                </span>
            </div>
          </form>
      </div>
    </div>
    <div class="project">
    <div class="row bg-white has-shadow">
      <!-- Item -->
      <div class="col-xl-12 col-sm-6">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th>ID</th>
              <th style="width: 100px;">Tanggal Peminjaman</th>
              <th style="width: 125px;">Peminjam</th>
              <th>Buku yang Dipinjamn</th>
              <th >Status Peminjaman</th>
              <th style="width: 160px;">Aksi</th>
            </tr>
          </thead>          
          <tbody>
            <?php foreach($transaksi as $row ):;?>
            <tr >
              <th scope="row"><?php echo $row->id_trans;?></th>
              <td><?php echo $row->waktu_pinjam;?></td>
              <td><?php echo $row->nama;?></td>
              <td><?php echo $row->judul;?></td>
              <td><?php echo $row->nama_status?></td>
              <td align="center">
                  <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#modalTransDetail" data-id_trans="<?php echo $row->id_trans;?>" data-waktu_pinjam="<?php echo $row->waktu_pinjam;?>" data-waktu_kembali="<?php echo $row->waktu_kembali;?>" data-nama="<?php echo $row->nama;?>" data-nama_kelas="<?php echo $row->nama_kelas;?>" data-no_telp="<?php echo $row->no_telp;?>" data-judul="<?php echo $row->judul;?>" data-penulis="<?php echo $row->penulis;?>" data-status="<?php echo $row->nama_status;?>" ><i class="fa fa-clipboard"></i></a>
                  <?php if($this->session->userdata('level')=='1'){?>
                  <a class="btn btn-success" href="<?php echo site_url('c_transaksi/sunting/'.$row->id_trans);?>"><i class="fa fa-edit"></i></a>
                  <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#modalHapusTrans" data-id_trans="<?php echo $row->id_trans;?>"><i class="fa fa-trash"></i></a>
                  <?php }?>
            </tr>
            <?php endforeach;?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  </div>
</section>
<div id="modalTransDetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
  <div role="document" class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 id="exampleModalLabel" class="modal-title">Data Detail Pengguna</h4>
        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <table class="table table table-no-border">
            <tr>
              <td style="width: 25%;">Id Transaksi</td>
              <td style="width: 5%;">:</td>
              <td style="width: 70%;" id="id_trans">#</td>
            </tr>
            <tr>
              <td>Tanggal Peminjaman</td>            
              <td>:</td>
              <td id="waktu_pinjam">#</td>
            </tr>
            <tr>
              <td>Nama Peminjam</td>            
              <td>:</td>
              <td id="nama">#</td>
            </tr>
            <tr>
              <td>Kelas</td>            
              <td>:</td>
              <td id="nama_kelas">#</td>
            </tr>
            <tr>
              <td>No. Telp</td>            
              <td>:</td>
              <td id="no_telp">#</td>
            </tr>
            <tr>
              <td>Judul Buku</td>            
              <td>:</td>
              <td id="judul">#</td>
            </tr>
            <tr>
              <td>Penulis</td>            
              <td>:</td>
              <td id="penulis">#</td>
            </tr>
            <tr>
              <td>Status Peminjaman</td>            
              <td>:</td>
              <td id="status">#</td>
            </tr>
            <tr>
              <td>Tangggal Pengembalian</td>
              <td>:</td>
              <td id="waktu_kembali">#</td>
            </tr>
          </table>
        </div>        
      </div>
    </div>
  </div>
</div>


<!-- MODAL HAPUS -->
<div id="modalHapusTrans" tabindex="-1" role="dialog" aria-labelledby="modaluser" aria-hidden="true" class="modal fade text-left">
  <div role="document" class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 id="exampleModalLabel" class="modal-title">Hapus Data Transaksi</h4>
        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
      </div>
      <div class="modal-body">
        <span>Kamu Yakin Ingin Menghapus Data ini?</span>
        <form method="post" action="<?php echo site_url('c_transaksi/hapus');?>">
        <input id="id_trans" readonly name="id_trans" hidden>
      </div>
      <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-secondary">Batal</button>
        <input type="submit" class="btn btn-danger" value="Hapus">
        </form>
      </div>
    </div>
  </div>
</div>