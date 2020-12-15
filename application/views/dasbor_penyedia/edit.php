<div class="container">
	<div class="row">
		<div class="col-3">
			<?php 
			include('sidebar.php');
			 ?>
		</div>
	
		<div class="col-9 bg-light" style="border: 1px solid black;">
			<h4 class="judul" style="text-align: center;"> Edit Data Kos</h4><br>
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
			echo form_open_multipart(base_url('dasbor_penyedia/edit/'.$kos->id_kos),' class="form-horizontal"');
			 ?>

			<div class="form-group form-group-lg">
				  <label class="col-sm-4 control-label">Nama Kos</label>
				  <div class="col-md-9">
				    <input type="text" name="nama_kos" class="form-control" placeholder="Nama Kos" value="<?php echo $kos->nama_kos ?>" required>
				  </div>
			</div>

			<div class="form-group">
				  <label class="col-sm-4 control-label">Kode Kos</label>
				  <div class="col-md-9">
				    <input type="text" name="kode_kos" class="form-control" placeholder="Kode Kos" value="<?php echo $kos->kode_kos ?>" required>
				  </div>
			</div>

			<div class="form-group">
				  <label class="col-sm-4 control-label">Telepon/No HP Kos </label>
				  <div class="col-md-9">
				   <input type="number" name="telepon" class="form-control" placeholder="Telepon/No HP Kos " value="<?php echo $kos->telepon ?>" required>
				  </div>
			</div>

			<div class="form-group">
				  <label class="col-sm-4 control-label">Wilayah Kos</label>
				  <div class="col-md-9">
				    <select name="id_wilayah" class="form-control">
				    	<?php foreach($wilayah as $wilayah) { ?>
				    	<option value="<?php echo $wilayah->id_wilayah ?>" <?php if ($kos->id_wilayah==$wilayah->id_wilayah) { echo "selected" ; } ?>>
				    			<?php echo $wilayah->nama_wilayah ?>
				    	</option>
				    	<?php } ?>
				    </select>
				  </div>
			</div>

			<div class="form-group">
				  <label class="col-sm-4 control-label">Nomor Rekening</label>
				  <div class="col-md-9">
				   <input type="number" name="no_rekening" class="form-control" placeholder="Nomor Rekening" value="<?php echo $kos->no_rekening ?>" required>
				  </div>
			</div>

			<div class="form-group">
				  <label class="col-sm-4 control-label">Nama Bank</label>
				  <div class="col-md-9">
				    <select name="id_rekening" class="form-control">
				    	<?php foreach($rekening as $rekening) { ?>
				    	<option value="<?php echo $rekening->id_rekening ?>" <?php if ($kos->id_rekening==$rekening->id_rekening) { echo "selected" ; } ?>>
				    			<?php echo $rekening->nama_bank ?>
				    	</option>
				    	<?php } ?>
				    </select>
				  </div>
			</div>

			<div class="form-group">
				  <label class="col-sm-4 control-label">Ukuran Kos</label>
				  <div class="col-md-9">
				    <input type="text" name="ukuran_kos" class="form-control" placeholder="Panjang x Lebar" value="<?php echo $kos->ukuran_kos ?>" required>
				  </div>
			</div>

			<div class="form-group">
				  <label class="col-sm-4 control-label">Kategori Kos</label>
				  <div class="col-md-9">
				  <input type="radio" name="kategori_kos" value="Putra"<?php echo set_radio('kategori_kos','Putra') ?>>Putra &nbsp;
				  <input type="radio" name="kategori_kos" value="Putri"<?php echo set_radio('kategori_kos','Putri') ?>>Putri &nbsp;
				  <input type="radio" name="kategori_kos" value="Putra/Putri"<?php echo set_radio('kategori_kos','Putra/putri') ?>>Putra/Putri &nbsp;
				   <span class="text text-danger" style="font-size: 15px;">*Wajib Diisi jika ingin mengubah data kos </span>
				  </div>
				  

			<div class="form-group">
				  <label class="col-sm-4 control-label">Alamat Kos</label>
				  <div class="col-md-9">
				    <textarea name="alamat_kos" class="form-control" placeholder="Alamat Kos" ><?php echo $kos->alamat_kos ?></textarea>
				  </div>
			</div>

			<div class="form-group">
				  <label class="col-sm-4 control-label">Fasilitas Kamar</label>
				  <div class="col-md-9">
				    <input type="checkbox" name="fasilitas_kos[]" value="Kasur"> Kasur &nbsp;
				    <input type="checkbox" name="fasilitas_kos[]" value="Wifi"> Wifi &nbsp;
				    <input type="checkbox" name="fasilitas_kos[]" value="Lemari Baju"> Lemari Baju &nbsp;
				    <input type="checkbox" name="fasilitas_kos[]" value="Kamar Mandi Pribadi"> Kamar Mandi pribadi &nbsp;
				    <input type="checkbox" name="fasilitas_kos[]" value="Meja"> Meja &nbsp;<br>
				    <input type="checkbox" name="fasilitas_kos[]" value="Kipas Angin"> Kipas Angin &nbsp;
				    <input type="checkbox" name="fasilitas_kos[]" value="Dapur"> Dapur &nbsp; 
				    <input type="checkbox" name="fasilitas_kos[]" value="Televisi"> Televisi &nbsp;
				  </div>
				  <span class="text text-danger" style="font-size: 15px;">&nbsp; *Wajib Diisi jika ingin mengubah data kos </span>
			</div>

			<div class="form-group">
				  <label class="col-sm-4 control-label">Harga(PerBulan)</label>
				  <div class="col-md-9">
				    <input type="number" name="harga" class="form-control" placeholder="Harga Kos" value="<?php echo $kos->harga?>" required>
				  </div>
			</div>

			<div class="form-group">
				  <label class="col-sm-4 control-label">Stok Kamar</label>
				  <div class="col-md-9">
				    <input type="number" name="stok" class="form-control" placeholder="Stok Kamar" value="<?php echo $kos->stok ?>" required>
				  </div>
			</div>

			<div class="form-group">
				  <label class="col-sm-4 control-label">Deskripsi</label>
				  <div class="col-md-9">
				    <textarea name="deskripsi" class="form-control" placeholder="Deskripsi" id="editor"><?php echo $kos->deskripsi ?>
				    </textarea>
				  </div>
			</div>

			<div class="form-group">
				  <label class="col-sm-4 control-label">Upload Gambar</label>
				  <div class="col-md-9">
				    <input type="file" name="gambar" class="form-control">
				  </div>
			</div>

			<div class="form-group">
				  <label class="col-sm-4 control-label"></label>
				  <div class="col-md-9">
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

			</div>		
		</div>
	</div>
</div>
<br>