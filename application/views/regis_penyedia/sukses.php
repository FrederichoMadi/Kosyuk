<!-- Tampilan Register -->
 <div class="register-login-section spad">
    <div class="container">
        <div class="alert-success">
        </div>
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="register-form">
                    <h2><?php echo $title ?></h2>
                    <?php 
                        if($this->session->flashdata('sukses')){
                            echo '<div class="alert alert-primary">';
                            echo $this->session->flashdata('sukses');
                            echo '</div>';
                        }
                     ?>

                     <p class="alert alert-success">Registrasi Berhasil. silahkan <a href="<?php echo base_url('penyedia') ?>" class="btn btn-info btn-sm">Login di sini</a> </p>
                   
                </div>
            </div>
                        
        </div>
    </div>
</div>
<br><br>