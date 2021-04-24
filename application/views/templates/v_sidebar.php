<div class="page-content d-flex align-items-stretch">
<!-- Side Navbar -->
<nav class="side-navbar">
  <ul class="list-unstyled">
  	
    <li <?php if ($actual_link==site_url()){echo "class='active'";}?>> <a href="<?php echo site_url();?>"><i class="fa fa-home"></i>Dashboard</a></li>
    <li <?php if ($actual_link==site_url('c_buku')){echo "class='active'";}?>> <a href="<?php echo site_url('c_buku');?>"> <i class="fa fa-book"></i>Buku</a></li>
    <li <?php if ($actual_link==site_url('c_user')){echo "class='active'";}?>> <a href="<?php echo site_url('c_user');?>"> <i class="fa fa-user"></i>Pengguna</a></li>
    <li <?php if ($actual_link==site_url('c_transaksi')){echo "class='active'";}?>> <a href="<?php echo site_url('c_transaksi');?>"> <i class="fa fa-bar-chart"></i>Transaksi</a></li>
	
	<li><a href="#dashvariants" aria-expanded="false" data-toggle="collapse" class="collapsed"> <i class="icon-interface-windows"></i>Laporan</a>
              <ul id="dashvariants" class="list-unstyled collapse" style="">
                <li><a href="#">Data Pengguna</a></li>
                <li><a href="#">Data Buku</a></li>
                <li><a href="#">Data Transaksi Berjalan</a></li>
                <li><a href="#">Data Transaksi Selesai</a></li>
              </ul>
            </li>

	<li> <a href="<?php echo site_url('c_index/logout');?>"> <i class="fa fa-sign-out"></i>Logout</a></li>
  </ul>
</nav>
<div class="content-inner">
