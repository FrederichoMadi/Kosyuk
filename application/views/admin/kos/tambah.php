<?php 
// error upload
if (isset($error)) {
	echo '<p class="alert alert-warning"> ';
	echo $error;
	echo '</p>';
}
// notifikasi error
echo validation_errors('<div class="alert alert-warning">','</div>');
// form open
echo form_open_multipart(base_url('admin/kos/tambah'),' class="form-horizontal"');
 ?>

<div class="form-group form-group-lg">
	  <label class="col-sm-2 control-label">Nama Kos</label>
	  <div class="col-md-8">
	    <input type="text" name="nama_kos" class="form-control" placeholder="Nama Kos" value="<?php echo set_value('nama_kos') ?>" required>
	  </div>
</div>

<div class="form-group">
	  <label class="col-sm-2 control-label">Kode Kos</label>
	  <div class="col-md-5">
	    <input type="text" name="kode_kos" class="form-control" placeholder="Kode Kos" value="<?php echo set_value('kode_kos') ?>" required>
	  </div>
</div>

<div class="form-group">
	  <label class="col-sm-2 control-label">Telepon/No HP Kos </label>
	  <div class="col-md-5">
	   <input type="number" name="telepon" class="form-control" placeholder="Telepon/No HP Kos " value="<?php echo set_value('telepon') ?>" required>
	  </div>
</div>

<div class="form-group">
	  <label class="col-sm-2 control-label">Wilayah Kos</label>
	  <div class="col-md-5">
	    <select name="id_wilayah" class="form-control">
	    	<?php foreach($wilayah as $wilayah) { ?>
	    	<option value="<?php echo $wilayah->id_wilayah ?>">
	    			<?php echo $wilayah->nama_wilayah ?>
	    	</option>
	    	<?php } ?>
	    </select>
	  </div>
</div>

<div class="form-group">
	  <label class="col-sm-2 control-label">Ukuran Kos</label>
	  <div class="col-md-5">
	    <input type="text" name="ukuran_kos" class="form-control" placeholder="Panjang x Lebar" value="<?php echo set_value('ukuran_kos') ?>" required>
	  </div>
</div>

<div class="form-group">
	  <label class="col-sm-2 control-label">Kategori Kos</label>
	  <div class="col-md-5">
	  <input type="radio" name="kategori_kos" value="Putra"<?php echo set_radio('kategori_kos','Putra') ?>>Putra &nbsp;
	  <input type="radio" name="kategori_kos" value="Putri"<?php echo set_radio('kategori_kos','Putri') ?>>Putri &nbsp;
	  <input type="radio" name="kategori_kos" value="Putra/Putri"<?php echo set_radio('kategori_kos','Putra/putri') ?>>Putra/Putri &nbsp;
	  </div>
</div>

<div class="form-group">
	  <label class="col-sm-2 control-label">Alamat Kos</label>
	  <div class="col-md-8">
	    <textarea name="alamat_kos" class="form-control" placeholder="Alamat Kos" ><?php echo set_value('alamat_kos') ?></textarea>
	  </div>
</div>

<div class="form-group">
	  <label class="col-sm-2 control-label">Fasilitas Kamar</label>
	  <div class="col-md-5">
	    <input type="checkbox" name="fasilitas_kos[]" value="Kasur"> Kasur &nbsp;
	    <input type="checkbox" name="fasilitas_kos[]" value="Wifi"> Wifi &nbsp;
	    <input type="checkbox" name="fasilitas_kos[]" value="Lemari Baju"> Lemari Baju &nbsp;
	    <input type="checkbox" name="fasilitas_kos[]" value="Kamar Mandi Pribadi"> Kamar Mandi pribadi &nbsp;
	    <input type="checkbox" name="fasilitas_kos[]" value="Meja"> Meja &nbsp;<br>
	    <input type="checkbox" name="fasilitas_kos[]" value="Kipas Angin"> Kipas Angin &nbsp;
	    <input type="checkbox" name="fasilitas_kos[]" value="Dapur"> Dapur &nbsp; 
	     <input type="checkbox" name="fasilitas_kos[]" value="Televisi"> Televisi &nbsp; 
	    
	  </div>
</div>

<div class="form-group">
	  <label class="col-sm-2 control-label">Harga(PerBulan)</label>
	  <div class="col-md-5">
	    <input type="number" name="harga" class="form-control" placeholder="Harga Kos" value="<?php echo set_value('harga') ?>" required>
	  </div>
</div>

<div class="form-group">
	  <label class="col-sm-2 control-label">Stok Kamar</label>
	  <div class="col-md-5">
	    <input type="number" name="stok" class="form-control" placeholder="Stok Kamar" value="<?php echo set_value('stok') ?>" required>
	  </div>
</div>

<div class="form-group">
	  <label class="col-sm-2 control-label">Deskripsi</label>
	  <div class="col-md-8">
	    <textarea name="deskripsi" class="form-control" placeholder="Deskripsi" id="editor">
	    	<?php echo set_value('deskripsi') ?>
	    </textarea>
	  </div>
</div>

<div class="form-group">
	  <label class="col-sm-2 control-label">Upload Gambar</label>
	  <div class="col-md-5">
	    <input type="file" name="gambar" class="form-control" value="<?php echo set_value('gambar') ?>" required>
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

 <?php 
 echo form_close(); ?>