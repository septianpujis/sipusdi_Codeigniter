<section class="dashboard-count">
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
            <a href="<?php echo site_url('c_user/tambah')?>" class="btn btn-success"><i class="fa fa-user-plus"></i> Tambah Data</a>
            <?php }?>
          </div>
          <div class="project-date"><span class="hidden-sm-down">Total Anggota: </span> <strong><?php echo $jumlah?></strong></div>
        </div>
        <div class="right-col col-lg-6 d-flex align-items-center">
          <form action="<?php echo site_url('c_user');?>" method="get">
            <div class="input-group">  
                <input type="text" class="form-control" placeholder="Cari Anggota" name="query" required>
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
        <div class="col-lg-12 d-flex">
          <table class="table table-striped table-hover">
            <thead>
              <tr align="center">
                <th>#</th>
                <th>Nomor Induk</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Email</th>
                <th>Nomor Telepon</th>
                <th>Aksi</th>
              </tr>
            </thead>          
            <tbody>
              <?php $no=0; foreach($user as $row ): $no++;?>
              <tr >
                <th scope="row"><?php echo $no;?></th>
                <td><?php echo $row->nomor_induk;?></td>
                <td><?php echo $row->nama;?></td>
                <td><?php foreach ($kelas as $key) {if($key->id_kelas==$row->id_kelas){echo $key->nama_kelas;}}?></td>
                <td><?php echo $row->email;?></td>
                <td><?php echo $row->no_telp;?></td>
                <td align="center">
                  <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#modalUserDetail" data-id="<?php echo $row->id_user;?>" data-nomor="<?php echo $row->nomor_induk;?>" data-nama="<?php echo $row->nama;?>" data-email="<?php echo $row->email;?>" data-kelas="<?php foreach ($kelas as $key) {if($key->id_kelas==$row->id_kelas){echo $key->nama_kelas;}}?>" data-telp="<?php echo $row->no_telp;?>" data-level="<?php echo $row->level;?>" data-foto="<?php echo $row->foto;?>"><i class="fa fa-clipboard"></i></a>
                  <?php if($this->session->userdata('level')=='1'){?>
                  <a class="btn btn-success" href="<?php echo site_url('c_user/sunting/'.$row->id_user);?>" class="btn btn-secondary"><i class="fa fa-edit"></i></a>
                  <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#modalHapusUser" data-id_user="<?php echo $row->id_user;?>"><i class="fa fa-trash"></i></a>
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

<!-- MODAL LIHAT DETAIL DATA USER-->

<div id="modalUserDetail" tabindex="-1" role="dialog" aria-labelledby="modaluser" aria-hidden="true" class="modal fade text-left bd-example-modal-lg">
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
                <td style="width: 25%;">Nomor Induk</td>          
                <td style="width: 5%;">:</td>
                <td style="width: 70%;" id="nomor_induk"></td>
              </tr>
              <tr>
                <td>Nama</td>            
                <td>:</td>
                <td id="nama">#</td>
              </tr>
              <tr>
                <td>Kelas</td>            
                <td>:</td>
                <td id="kelas">#</td>
              </tr>
              <tr>
                <td>Status</td>            
                <td>:</td>
                <td id="level">#</td>
              </tr>
              <tr>
                <td>Email</td>            
                <td>:</td>
                <td id="email">#</td>
              </tr>
              <tr>
                <td>Nomor HP.</td>            
                <td>:</td>
                <td id="telp">#</td>
              </tr>
            </table>
          </div>
          <div class="col-lg-4">
            <p align="center"><img src="#" alt="Foto Profil Pengguna Tidak Ditemukan" width="180px" height="260px" align="center"></p>
          </div>
        </div>        
      </div>
    </div>
  </div>
</div>

<!-- MODAL HAPUS -->

<div id="modalHapusUser" tabindex="-1" role="dialog" aria-labelledby="modaluser" aria-hidden="true" class="modal fade text-left">
  <div role="document" class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 id="exampleModalLabel" class="modal-title">Hapus Data Pengguna</h4>
        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
      </div>
      <form method="post" action="<?php echo site_url('c_user/hapus');?>">
      <div class="modal-body">
        <span>Kamu Yakin Ingin Menghapus Data ini?</span>
        <input id="id_user" readonly name="id_user" hidden>
      </div>
      <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-secondary">Batal</button>
        <input type="submit" class="btn btn-danger" value="Hapus">
      </div>
      </form>
    </div>
  </div>
</div>