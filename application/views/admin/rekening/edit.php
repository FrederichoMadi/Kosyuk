<?php 
// error upload
if (isset($error)) {
	echo '<p class="alert alert-warning"> ';
	echo $error;
	echo '</p>';
}


// notifikasi error
echo validation_errors('<div class="alert alert-warning">','</div>');
// form opern
echo form_open_multipart(base_url('admin/rekening/edit/'.$rekening->id_rekening),' class="form-horizontal"');
 ?>
<div class="form-group">
	  <label class="col-sm-2 control-label">Nama Bank</label>
	  <div class="col-md-5">
	    <input type="text" name="nama_bank" class="form-control" placeholder="Nama Bank" value="<?php echo $rekening->nama_bank ?>" required>
	  </div>
</div>

<div class="form-group">
	  <label class="col-sm-2 control-label">Urutan</label>
	  <div class="col-md-5">
	    <input type="number" name="urutan" class="form-control" placeholder="Urutan" value="<?php echo $rekening->urutan ?>" required>
	  </div>
</div>

<div class="form-group">
	  <label class="col-sm-2 control-label">Upload Gambar</label>
	  <div class="col-md-5">
	    <input type="file" name="gambar" class="form-control" value="<?php echo $rekening->gambar ?>">
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