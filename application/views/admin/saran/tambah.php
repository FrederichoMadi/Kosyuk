<?php 
// notifikasi error
echo validation_errors('<div class="alert alert-warning">','</div>');
// form open
echo form_open(base_url('admin/saran/tambah'),' class="form-horizontal"');
 ?>
<div class="form-group">
	  <label class="col-sm-2 control-label">Nama Pelanggan</label>
	  <div class="col-md-5">
	    <select name="id_pelanggan" class="form-control">
	    	<option>Choose One</option>
	    	<?php foreach($pelanggan as $pelanggan){ ?>
	    	<option value="<?php echo $pelanggan->id_pelanggan ?>">
	    		<?php echo $pelanggan->nama_pelanggan ?>
	    		
	    	</option>
	    	<?php } ?>
	    </select>
	  </div>
</div>

<div class="form-group">
	  <label class="col-sm-2 control-label">Saran</label>
	  <div class="col-md-5">
	   <textarea name="saran" class="form-control"><?php echo set_value('saran') ?></textarea>
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