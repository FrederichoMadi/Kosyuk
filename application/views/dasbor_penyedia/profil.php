<div class="container">
	<div class="row">
		<div class="col-3">
			<?php 
			include('sidebar.php');
			 ?>
		</div>
	
		<div class="col-9 ">
			<div class="container">
			  <div>
			    <h3 class="judul" style="text-align: center">Data <?php echo $pemilik_kos->nama_pemilik ?></h3>

			  </div>
			  <br>
			  <?php 
			  // notifikasi
			  if ($this->session->flashdata('sukses')) {
			      echo '<div class="alert alert-success">';
			      echo $this->session->flashdata('sukses');
			      echo '</div>';
			  }

			  //display error
			  echo validation_errors('<div class="alert alert-warning">','</div>');
			  // form open
			  echo form_open('dasbor_penyedia/profil');
			   ?>
			    <div class="form-row">
			      <div class="form-group col-md-6">
			        <label for="inputEmail4">Email</label>
			        <input type="email" name="email_pemilik" class="form-control" id="inputEmail4" placeholder="Email" value="<?php echo $pemilik_kos->email_pemilik ?>" readonly>
			      </div>
			      <div class="form-group col-md-6">
			        <label for="inputPassword4">Password</label>
			        <input type="password" name="password_pemilik_kos" class="form-control" id="inputPassword4" placeholder="Password" value="<?php echo $pemilik_kos->password_pemilik ?>">
			        <span class="text text-danger" style="font-size: 15px;">Ketik Minimal 6 karakter untuk mengganti Password baru atau biarkan</span>
			      </div>
			    </div>
			    <div class="form-group">
			      <label for="inputAddress2">Nama Penyedia</label>
			      <input type="text" name="nama_pemilik" class="form-control" id="inputAddress2" placeholder="Nama Pengguna" value="<?php echo $pemilik_kos->nama_pemilik ?>" required>
			    </div>
			     <div class="form-group">
			      <label for="inputAddress2">Telepon/No HP</label>
			      <input type="text" name="telepon" class="form-control" id="inputAddress2" placeholder="Telepon/No HP" value="<?php echo $pemilik_kos->telepon ?>" required>
			    </div>
			    <div class="form-group">
			      <label for="inputAddress">Address</label>
			      <textarea name="alamat" class="form-control" placeholder="Alamat Saya" required><?php echo $pemilik_kos->alamat; ?></textarea>
			    </div>
			   
			    
			    <button type="submit" class="btn btn-success btn-md"><i class="fa fa-check"></i>Update Profil</button>
			  <?php echo form_close(); ?>
			<br>
			</div>

			
		</div>
	</div>
</div>
<br>