<!-- Tampilan Register -->
    <div class="container">
       <!--  <div class="row">
            <div class="col-lg-6 offset-lg-3"> -->
                <div class="register-form">
                    <h2><?php echo $title ?></h2>
                    <?php 
                        if($this->session->flashdata('sukses')){
                            echo '<div class="alert alert-primary">';
                            echo $this->session->flashdata('sukses');
                            echo '</div>';
                        }
                     ?>

                     <div class="card kartu">
                      <div class="card-header">
                        Proses Pemesanan
                      </div>

                      <div class="card-body">
                        <i class="far fa-check-circle sukses"></i>
                        <h5 class="card-title">Success</h5>
                        <p class="card-text">Lakukan Konfirmasi Pemabayaran</p>
                        <a href="<?php echo base_url('dasbor/riwayat')  ?>" class="btn btn-default konfirmasi"><i class="far fa-calendar-check"></i>Riwayat Pemesanan</a>
                        <br>
                      </div>
                    </div>
                </div>
       <!--      </div>
                        
        </div> -->
    </div>
<br><br>