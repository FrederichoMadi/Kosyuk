<?php 
// notifikasi error
echo validation_errors('<div class="alert alert-warning">','</div>');
// form opern
echo form_open(base_url('admin/saran/edit/'.$saran->id_saran),' class="form-horizontal"');
 ?>
<div class="form-group">
	  <label class="col-sm-2 control-label">Nama Pengguna</label>
	  <div class="col-md-5">
	    <input type="text" name="nama" class="form-control" placeholder="Nama Pengguna" value="<?php echo $saran->nama?>" required>
	  </div>
</div>

<div class="form-group">
	  <label class="col-sm-2 control-label">E-Mail</label>
	  <div class="col-md-5">
	    <input type="email" name="email" class="form-control" placeholder="E-Mail" value="<?php echo $saran->email ?>" required>
	  </div>
</div>

<div class="form-group">
	  <label class="col-sm-2 control-label">Saranname</label>
	  <div class="col-md-5">
	    <input type="text" name="saranname" class="form-control" placeholder="Saranname" value="<?php echo $saran->saranname ?>" readonly>
	  </div>
</div>

<div class="form-group">
	  <label class="col-sm-2 control-label">Password</label>
	  <div class="col-md-5">
	    <input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo $saran->password ?>" required>
	  </div>
</div>


<div class="form-group">
	  <label class="col-sm-2 control-label">Level Hak Akses</label>
	  <div class="col-md-5">
	    <select name="akses_level" class="form-control">
	    	<option value="Admin">Admin</option>
	    	<option value="penyedia_kos" <?php if($saran->akses_level=="penyedia_kos") {echo "selected" ; } ?>>Penyedia Kos</option>
	    </select>
	  </div>
</div>

<div class="form-group">
	  <label class="col-sm-2 control-label"></label>
	  <div class="col-md-5">
	   <button class="btn btn-success btn-lg" name="submit" type="submit">
	   	<i class="fa fa-save"></i>Simpan
	   </button>
	   <button class="btn btn-info btn-lg" name="reset" type="reset">
	   	<i class="fa fa-times"></i>Reset
	   </button>	
	  </div>
</div>

 <?php echo form_close(); ?>