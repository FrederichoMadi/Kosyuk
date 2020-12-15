<!-- Tampilan Register -->
 <div class="register-login-section spad">
    <div class="container">
        <div class="alert-success">
        </div>
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="register-form">
                    <h2>Form Data Diri Pelanggan</h2>
                    <?php 
                        if($this->session->flashdata('sukses')){
                            echo '<div class="alert alert-primary">';
                            echo $this->session->flashdata('sukses');
                            echo '</div>';
                        }
                     ?>
                    
                    <!-- display errror -->
                    <?php echo validation_errors('<div class="alert alert-warning"> ', '</div>');
                    // form open
                      echo form_open(base_url('registrasi')); 
                      ?>

                      <p class="alert alert-success">Sudah Memiliki Akun? Silahkan <a href="<?php echo base_url('masuk') ?>" class="btn btn-primary btn-sm">Login Disini</a></p>

                        <div class="group-input">
                            <label for="nama_pengguna">Nama Lengkap</label>
                            <input class="form-control col-md-12" type="text" name="nama_pelanggan" id="nama_pelanggan" class="box" placeholder="Nama Lengkap" value="<?php echo set_value('nama_pelanggan') ?>" required>
                        </div>

                        <div class="group-input">
                            <label for="email">E-Mail</label>
                            <input class="form-control col-md-12" type="email" name="email" id="email" class="box" placeholder="E-Mail" value="<?php echo set_value('email') ?>" required>
                        </div>

                        <div class="group-input">
                            <label for="password">Password Akun</label>
                            <input class="form-control col-md-12" type="password" name="password" id="password" class="box" placeholder="Password Akun"
                            value="<?php echo set_value('password') ?>" required>
                        </div>

                        <div class="group-input">
                            <label for="telepon">Telepon</label>
                            <input class="form-control col-md-12" type="text" name="telepon" id="telepon" class="box" placeholder="Telepon" value="<?php echo set_value('telepon') ?>" required>
                        </div>

                         <div class="group-input">
                            <label for="telepon">Alamat</label>
                            <textarea name="alamat" id="alamat" placeholder="Alamat" class="form-control col-md-12"><?php echo set_value('alamat') ?></textarea>
                        </div>
                        
                        <button type="submit" name="submit" id="submit" class="site-btn login-btn">DAFTAR</button> 
                    <?php echo form_close(); ?>
                </div>
            </div>
                        
        </div>
    </div>
</div>
<br><br>