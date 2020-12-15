<?php 
// ambil data menu dari konfigurasi
$nav_kos = $this->konfigurasi_model->nav_kos();
?>
<!-- HEADER -->
<header class="header-section">
  <div class="container-fluid">
      <div class="inner-header">
          <div class="logo">
              <a href="<?php echo base_url() ?>"><img src="<?php echo base_url('assets/upload/image/'.$site->logo) ?> " alt="<?php echo $site->namaweb?> | <?php echo $site->tagline ?>"></a>
          </div>

          <nav class="main-menu mobile-menu">
              <ul>
                  <li><a href="<?php echo base_url() ?>">Home</a></li>
                  <li><a href="<?php echo base_url('daftarkos') ?>">Daftar Kos</a></li>
                  <li><a href="<?php echo base_url('aboutus') ?>">About</a></li>
                  <li><a href="<?php echo base_url('bantuan') ?>">Bantuan</a></li>
                  <?php if($this->session->userdata('email')) {?>
                  <li><a href="<?php echo base_url('contactus') ?>">Contact</a></li>
                <?php } ?>
                  <!-- search icon -->
                 <!--  <li>
                      <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default"><i class="fa fa-search"></i></button>

                        <div class="modal fade" id="modal-default">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true" style="float: right; margin-right: 30px; margin-top: 30px; ">&times;</span></button>
                                  <h4 class="modal-title">Search</h4>
                                </div>
                                <div class="modal-body">
                                  <div class="form-group">
                                        <div class="form-inline  mr-sm-2">
                                        <input type="text" name="search" class="form-control col-md-10 mr-sm-2" placeholder="Seacrh...">
                                        <button type="submit" class="btn btn-primary" style="width: 80px;"><i class="fa fa-search"></i></button>
                                        </div>
                                  </div>
                                </div>
                              </div>
                               /.modal-content -->
                            <!-- </div> -->
                            <!-- /.modal-dialog -->
                          <!-- </div> --> 
                          <!-- /.modal -->
                  </li>
                  <!-- user icon -->
                  <li> 
                    <?php if ($this->session->userdata('email_pemilik')) { ?>
                      <div class="dropdown">
                      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle panel-primary"  aria-hidden="true"></i> <?php echo $this->session->userdata('nama_pemilik') ?></button>
                       <div class="dropdown-menu drop" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="<?php echo base_url('dasbor_penyedia') ?>"><i class="fa fa-dashboard"></i> Dashboard</a>
                        <a class="dropdown-item" href="<?php echo base_url('dasbor_penyedia/profil') ?>"><i class="fa fa-user"></i> Profil</a>
            
                        <a class="dropdown-item" href="<?php echo base_url('penyedia/logout') ?>"><i class="fa fa-sign-out"></i> Logout</a>
                   </div> 
                 </div>
                     <?php }else if(($this->session->userdata('email'))){ ?>
                      <div class="dropdown">
                      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle panel-primary"  aria-hidden="true"></i> <?php echo $this->session->userdata('nama_pelanggan') ?></button>
                       <div class="dropdown-menu drop" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="<?php echo base_url('dasbor/profil') ?>"><i class="fa fa-user"></i> Profil</a>
                        <a class="dropdown-item" href="<?php echo base_url('dasbor/riwayat') ?>"><i class="fa fa-check"></i> Riwayat Pemesanan</a>
                        <a class="dropdown-item" href="<?php echo base_url('masuk/logout') ?>"><i class="fa fa-sign-out"></i> Logout</a>
                   </div> 
                 </div>
                     
                     <?php } else{ ?>
                  
                     <button class="btn btn-default" class="boom" id="boom"><i class="fa fa-user-circle panel-primary" aria-hidden="true"></i></button>
               <?php } ?>
                   <!--  <button class="btn btn-default" class="boom" id="boom"><i class="fa fa-user-circle panel-primary" aria-hidden="true"></i> <?php echo $this->session->userdata('nama_pelanggan') ?></button> -->
                  </li>
              </ul>
          </nav>
      </div>
  </div>
</header>
<hr class="horizontal">