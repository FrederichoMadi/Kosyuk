 <!-- Login -->
 <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="login-form">
                        <h2>Login Pencari</h2>

                                                    
                            <?php 
                            // sukses logout
                            if ($this->session->flashdata('sukses')) {
                                echo '<div class="alert alert-success">';
                                echo $this->session->flashdata('sukses');
                                echo '</div>';
                            }

                            // kalau salah kasi email dan passwod
                            if ($this->session->flashdata('warning')) {
                                echo '<div class="alert alert-danger">';
                                echo $this->session->flashdata('warning');
                                echo '</div>';
                            }

                            // notifikasi error
                            echo validation_errors('<div class="alert alert-danger"> ', '</div>');
                            // form login
                            echo form_open('masuk'); ?>

                                <div class="group-input">
                                    <label for="email">Email (Username)</label>
                                    <input type="email" name="email" id="email" class="box">
                                </div>

                                <div class="group-input">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="box">
                                </div>

                                <button type="submit" name="login" id="login" class="site-btn login-btn">Sign In</button>

                            <?php echo form_close(); ?>

                        <div class="switch-login">
                            <label>Belum punya akun?</label><a href="<?php echo base_url('registrasi') ?>" class="or-login"> Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Batas login -->