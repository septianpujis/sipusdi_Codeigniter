<!-- Transaksi berjalan dan transaksi selesai-->
<section class="dashboard-counts no-padding-bottom">
  <div class="container-fluid">
    <div class="row bg-white has-shadow">
      <!-- Item -->
      <div class="col-xl-4">
        <div class="item d-flex align-items-center">
          <div class="icon bg-violet"><i class="fa fa-book"></i></div>
          <div class="title"><span>Buku yang <br>sedang dipinjam</span>
          </div>
          <div class="number"><strong><?php echo $status1;?></strong></div>   <!-- STATUS TR 1-3 -->
        </div>
      </div>
      <!-- Item -->
      <div class="col-xl-4">
        <div class="item d-flex align-items-center">
          <div class="icon bg-red"><i class="fa fa-calendar-o"></i></div>
          <div class="title"><span>Buku yang <br>belum diambil</span>
          </div>
          <div class="number"><strong><?php echo $status5;?></strong></div> <!-- STATUS 5 -->
        </div>
      </div>
      <div class="col-xl-4">
        <div class="item d-flex align-items-center">
          <div class="icon bg-green"><i class="icon-padnote"></i></div>
          <div class="title"><span>Peminjaman yang<br>sudah selesai</span>
          </div>
          <div class="number"><strong><?php echo $status2;?></strong></div> <!-- STATUS TR 2-4 -->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- total data masing-masing, chart peminjaman harian tampilan perbulan-->
<section class="dashboard-header">
  <div class="container-fluid">
    <div class="row">
      <!-- Statistics -->
      <div class="chart col-lg-3 col-12">
        <div class="statistic d-flex align-items-center bg-white has-shadow">
          <div class="icon bg-red"><i class="fa fa-tasks"></i></div>
          <div class="text"><strong><?php echo $jumlahBuku;?></strong><br><small>Buku</small></div>
        </div>
        <div class="statistic d-flex align-items-center bg-white has-shadow">
          <div class="icon bg-green"><i class="fa fa-calendar-o"></i></div>
          <div class="text"><strong><?php echo $jumlahUser;?></strong><br><small>Pengguna</small></div>
        </div>
        <div class="statistic d-flex align-items-center bg-white has-shadow">
          <div class="icon bg-orange"><i class="fa fa-paper-plane-o"></i></div>
          <div class="text"><strong><?php echo $jumlahTrans;?></strong><br><small>Transaksi</small></div>
        </div>
      </div>
      <!-- Line Chart-->
      <div class="chart col-lg-9 col-12">
        <div class="line-chart bg-white d-flex align-items-center justify-content-center has-shadow">
          <canvas id="lineCahrt"></canvas>
        </div>
      </div>
    </div>
  </div>
</section>