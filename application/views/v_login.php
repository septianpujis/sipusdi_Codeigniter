<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistem Perpustakaan Digital - Latihan Web CI 3</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo base_url("assets/vendor/bootstrap/css/bootstrap.min.css");?>">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/fontastic.css");?>">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo base_url("assets/vendor/font-awesome/css/font-awesome.min.css");?>">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/style.default.css");?>" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/custom.css");?>">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo base_url("assets/img/favicon.ico");?>">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1>Sistem <strong>Perpustakaan</strong> Digital</h1>
                  </div>
                  <p>Sistem Record Data Perpustakaan secara Digital</p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form id="login-form" action="<?php echo base_url('c_login/login');?>" method="post">
                    <?php if($this->session->flashdata()){?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <label><?php echo $this->session->flashdata('message');?></label>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div> 
                    <?php }
                      ?>
                    <div class="form-group">                     
                      <input id="login-username" type="text" name="nama" required class="input-material">
                      <label for="login-username" class="label-material">Nim / Nis / Email</label>
                    </div>
                    <div class="form-group">
                      <input id="login-password" type="password" name="password" required class="input-material">
                      <label for="login-password" class="label-material">Password</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>

                    <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                  </form><a href="#" class="forgot-pass">Lupa Password?</a><br>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights text-center">
        <p>Design by <a href="https://bootstrapious.com/admin-templates" class="external">Bootstrapious</a></p>
        <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
      </div>
    </div>
    <!-- Javascript files-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url("assets/vendor/popper.js/umd/popper.min.js");?>"> </script>
    <script src="<?php echo base_url("assets/vendor/bootstrap/js/bootstrap.min.js");?>"></script>
    <script src="<?php echo base_url("assets/vendor/jquery.cookie/jquery.cookie.js");?>"> </script>
    <script src="<?php echo base_url("assets/vendor/jquery-validation/jquery.validate.min.js");?>"></script>
    <script src="<?php echo base_url("assets/js/front.js");?>"></script>
  </body>
</html>