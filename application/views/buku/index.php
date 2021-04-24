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
        <div class="left-col col-lg-6 d-flex align-items-center justify-content-between">
          <div class="project-title d-flex align-items-center">
            <?php if($this->session->userdata('level')=='1'){?>
            <a href="<?php echo site_url('c_buku/tambah')?>" class="btn btn-success"><i class="fa fa-user-plus"></i> Tambah Buku</a>
            <?php }?>
          </div>
          <div class="project-date"><span class="hidden-sm-down">Total Buku: </span> <strong><?php echo $jumlah?></strong></div>
        </div>
        <div class="right-col col-lg-6 d-flex align-items-center">
          <form action="<?php echo site_url('c_buku');?>" method="get">
            <div class="input-group">  
                <input type="text" class="form-control" placeholder="Cari Judul Buku" name="query" required>
                <span class="input-group-btn">
                  <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Cari!</button>
                </span>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="project">
      <div class="row bg-white has-shadow">
        <div class="col-xl-12 col-sm-6">
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th>#</th>
                <th>Judul Buku</th>
                <th style="width: 160px;">Penulis</th>
                <th>Tahun</th>
                <th>Genre</th>
                <th>Ketersediaan</th>
                <th style="width: 160px;">Aksi</th>
              </tr>
            </thead>          
            <tbody>
              <?php $no=0; foreach($buku as $row ): $no++;?>
              <tr >
                <th scope="row"><?php echo $no;?></th>
                <td><?php echo $row->judul;?></td>
                <td><?php echo $row->penulis;?></td>
                <td><?php echo $row->tahun;?></td>
                <td><?php echo $row->genre;?></td>
                <td><?php if($row->sedia){echo "Tersedia";}else{echo "Tidak Tersedia";};?></td>
                <td align="center">
                  <form action="<?php echo site_url('c_transaksi/tambah');?>" method="post">
                    <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#modalBukuDetail" data-id="<?php echo $row->id_buku;?>" data-sedia="<?php echo $row->sedia; ?>" data-sinopsis="<?php echo $row->sinopsis; ?>" data-genre="<?php echo $row->genre; ?>" data-halaman="<?php echo $row->halaman; ?>" data-tahun="<?php echo $row->tahun; ?>" data-penerbit="<?php echo $row->penerbit; ?>" data-penulis="<?php echo $row->penulis; ?>" data-judul="<?php echo $row->judul; ?>"><i class="fa fa-clipboard"></i></a>
                    <?php if($row->sedia=='1'){?>
                    <button class="btn btn-success" value="<?php echo $row->id_buku;?>" name="id_buku"> <i class="fa fa-plus"></i></button>
                    <?php }?>
                    </form>
                    <?php if($this->session->userdata('level')=='1'){?>
                    <a class="btn btn-success" href="<?php echo site_url('c_buku/sunting/'.$row->id_buku);?>"><i class="fa fa-edit"></i></a>
                    <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#modalHapusBuku" data-id_buku="<?php echo $row->id_buku;?>"><i class="fa fa-trash"></i></a>
                  <?php }?>
                </td>
              </tr>
              <?php endforeach;?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- MODAL BUKU DETAIL -->

<div id="modalBukuDetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
  <div role="document" class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 id="exampleModalLabel" class="modal-title">Data Detail Pengguna</h4>
        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-8">
            <table class="table table table-no-border">
              <tr>
                <td style="width: 25%;">Id Buku</td>
                <td style="width: 5%;">:</td>
                <td style="width: 70%;" id="id">#</td>
              </tr>
              <tr>
                <td>Ketersediaan</td>            
                <td>:</td>
                <td id="sedia">#</td>
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
                <td>Penerbit</td>            
                <td>:</td>
                <td id="penerbit">#</td>
              </tr>
              <tr>
                <td>Tahun Terbit</td>            
                <td>:</td>
                <td id="tahun">#</td>
              </tr>
              <tr>
                <td>Jumlah Halaman</td>            
                <td>:</td>
                <td id="halaman">#</td>
              </tr>
              <tr>
                <td>Genre Buku</td>            
                <td>:</td>
                <td id="genre">#</td>
              </tr>
              <tr>
                <td>Sinopsis</td>            
                <td>:</td>
                <td id="sinopsis">#</td>
              </tr>
            </table>
          </div>
          <div class="col-lg-4">
            <p align="center"><img src="#" alt="Sampul Buku Tidak Ditemukan" width="180px" height="260px" align="center"></p>
          </div>
        </div>        
      </div>
    </div>
  </div>
</div>

<!-- MODAL HAPUS -->

<div id="modalHapusBuku" tabindex="-1" role="dialog" aria-labelledby="modaluser" aria-hidden="true" class="modal fade text-left">
  <div role="document" class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 id="exampleModalLabel" class="modal-title">Hapus Data Buku</h4>
        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
      </div>
      <form method="post" action="<?php echo site_url('c_buku/hapus');?>">
      <div class="modal-body">
        <span>Kamu Yakin Ingin Menghapus Data ini?</span>
        <input id="id_buku" readonly name="id_buku" hidden>
      </div>
      <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-secondary">Batal</button>
        <input type="submit" class="btn btn-danger" value="Hapus">
      </div>
      </form>
    </div>
  </div>
</div>