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
echo form_open_multipart(base_url('admin/wilayah/edit/'.$wilayah->id_wilayah),' class="form-horizontal"');
 ?>
<div class="form-group">
	  <label class="col-sm-2 control-label">Nama wilayah</label>
	  <div class="col-md-5">
	    <input type="text" name="nama_wilayah" class="form-control" placeholder="Nama Wilayah" value="<?php echo $wilayah->nama_wilayah ?>" required>
	  </div>
</div>

<div class="form-group">
	  <label class="col-sm-2 control-label">Urutan</label>
	  <div class="col-md-5">
	    <input type="number" name="urutan" class="form-control" placeholder="Urutan" value="<?php echo $wilayah->urutan ?>" required>
	  </div>
</div>

<div class="form-group">
	  <label class="col-sm-2 control-label">Upload Gambar</label>
	  <div class="col-md-5">
	    <input type="file" name="gambar_wilayah" class="form-control">
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