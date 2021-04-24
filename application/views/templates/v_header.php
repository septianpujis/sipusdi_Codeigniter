<header class="header">
  <nav class="navbar">
    <!-- Search Box-->
    <div class="search-box">
      <button class="dismiss"><i class="icon-close"></i></button>
      <form id="searchForm" action="#" role="search">
        <input type="search" placeholder="What are you looking for..." class="form-control">
      </form>
    </div>
    <div class="container-fluid">
      <div class="navbar-holder d-flex align-items-center justify-content-between">
        <!-- Navbar Header-->
        <div class="navbar-header">
          <!-- Navbar Brand --><a href="<?php echo site_url()?>" class="navbar-brand">
            <div class="brand-text brand-big"><span>Sistem</span><strong>Perpustakaan</strong></div>
            <div class="brand-text brand-small"><strong>SPD</strong></div></a>
          <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
        </div>
        <!-- Navbar Menu -->
        <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
          <!-- Messages                        -->
          <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><?php echo $this->session->userdata('email');?>  <i class="fa fa-user-o"></i><i class="fa fa-angle-down"></i></a>
            <ul aria-labelledby="notifications" class="dropdown-menu">
              <!-- Sidebar Header-->
              <li><a rel="nofollow" class="dropdown-item d-flex" disable> 
                  <div class="msg-profile"><img src="<?php echo base_url("assets/img/avatar-1.jpg"); ?>" alt="..." class="img-fluid rounded-circle"></div>
                  <div class="msg-body">
                    <h3 class="h4"> <?php echo $this->session->userdata('nama');?> </h3><span><?php echo $this->session->userdata('kelas');?></span>
                  </div></a></li>
              <li><a rel="nofollow" href="<?php echo site_url('c_transaksi'); ?>" class="dropdown-item d-flex"> 
                  <div class="msg-body">
                    <h3 class="h5">Lihat Buku yang Dipinjam</h3>
                  </div></a></li>
              <li><a rel="nofollow" href="<?php echo site_url('c_transaksi/tambah'); ?>" class="dropdown-item d-flex"> 
                  <div class="msg-body">
                    <h3 class="h5">Pinjam Buku</h3>
                  </div></a></li>
              <li><a rel="nofollow" href="<?php echo site_url('c_user/sunting/'.$this->session->userdata('id')); ?>" class="dropdown-item d-flex"> 
                  <div class="msg-body">
                    <h3 class="h5">Sunting Profil</h3>
                  </div></a></li>
              <li><a rel="nofollow" href="<?php echo base_url('c_index/logout')?>" class="dropdown-item all-notifications text-center"><strong>Logout</strong></a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>