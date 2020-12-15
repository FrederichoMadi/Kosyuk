<div class="container">
  <div>
    <h3 class="judul" style="text-align: center">Data <?php echo $pelanggan->nama_pelanggan ?></h3>

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
  echo form_open('dasbor/profil');
   ?>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label>
        <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email" value="<?php echo $pelanggan->email ?>" readonly>
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Password</label>
        <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password" value="<?php echo $pelanggan->password ?>">
        <span class="text text-danger" style="font-size: 15px;">Ketik Minimal 6 karakter untuk mengganti Password baru atau biarkan</span>
      </div>
    </div>
    <div class="form-group">
      <label for="inputAddress2">Nama Pengguna</label>
      <input type="text" name="nama_pelanggan" class="form-control" id="inputAddress2" placeholder="Nama Pengguna" value="<?php echo $pelanggan->nama_pelanggan ?>" required>
    </div>
     <div class="form-group">
      <label for="inputAddress2">Telepon/No HP</label>
      <input type="text" name="telepon" class="form-control" id="inputAddress2" placeholder="Telepon/No HP" value="<?php echo $pelanggan->telepon ?>" required>
    </div>
    <div class="form-group">
      <label for="inputAddress">Address</label>
      <textarea name="alamat" class="form-control" placeholder="Alamat Saya" required><?php echo $pelanggan->alamat; ?></textarea>
    </div>
   
    
    <button type="submit" class="btn btn-success btn-md"><i class="fa fa-check"></i>Update Profil</button>
  <?php echo form_close(); ?>
<br>
</div>