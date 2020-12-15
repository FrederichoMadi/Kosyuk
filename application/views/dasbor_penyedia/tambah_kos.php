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
echo form_open_multipart(base_url('dasbor_penyedia/tambah_kos'),' class="form-horizontal"');

 ?>
  <!-- Tampilan Register -->
<div class="form-kos">
    <div class="form-title">
        <h2>Form Pengisian Kos</h2>
    </div>
        <div class="tabel-kos">
            <form action="" method="post">
                <table>
                    <tr>
                          <td width="20%" height="100%"><label for="nama_kos">Nama Kos </label></td>
                          <td width="80%"><input type="text" class="form-control" name="nama_kos" id="nama_kos" placeholder="Nama Kos" value="<?php echo set_value('nama_kos') ?>"></td>                          
                    </tr>

                     <tr>
                          <td width="20%" height="100%"><label for="kode_kos">Kode Kos</label></td>
                          <td width="80%"><input type="text" class="form-control" name="kode_kos" id="kode_kos" placeholder="Kode Kos" value="<?php echo set_value('kode_kos') ?>"></td>                          
                    </tr>

                     <tr>
                          <td width="20%" height="100%"><label for="telepon">Telepon/No HP Kos</label></td>
                          <td width="80%"><input type="number" class="form-control" name="telepon" id="telepon" placeholder="Telepon/No HP Kos" value="<?php echo set_value('telepon') ?>"></td>                          
                    </tr>

                    <tr>
                          <td width="20%"><label for="wilayah_kos">Wilayah_kos</label></td>
                          <td width="80%">
                          	 <select name="id_wilayah" class="form-control">
          						    	<?php foreach($wilayah as $wilayah) { ?>
          						    	<option value="<?php echo $wilayah->id_wilayah ?>">
          						    			<?php echo $wilayah->nama_wilayah ?>
          						    	</option>
          						    	<?php } ?>
          						    </select>
                          </td>                           
                    </tr>

                    <tr>
                          <td width="20%" height="100%"><label for="kode_kos">Nomor Rekening</label></td>
                          <td width="80%"><input type="text" class="form-control" name="no_rekening" id="no_rekening" placeholder="Nomor Rekening" value="<?php echo set_value('no_rekening') ?>"></td>                          
                    </tr>

                     <tr>
                          <td width="20%"><label for="wilayah_kos">Wilayah_kos</label></td>
                          <td width="80%">
                             <select name="id_rekening" class="form-control">
                            <?php foreach($rekening as $rekening) { ?>
                            <option value="<?php echo $rekening->id_rekening ?>">
                                <?php echo $rekening->nama_bank ?>
                            </option>
                            <?php } ?>
                          </select>
                          </td>                           
                    </tr>

                    <tr>
                          <td width="20%" height="100%"><label for="ukuran_kos">Ukuran Kos</label></td>
                          <td width="80%"><input type="text" class="form-control" name="ukuran_kos" id="ukuran_kos" placeholder="Ukuran Kos" value="<?php echo set_value('ukuran_kos') ?>"></td>                          
                    </tr>

                    <tr>
                        <td width="20%"><label for="kategori)kos">Kategori Kos</label>
                        </td>
                        <td width="80%">
                        	<input type="radio" name="kategori_kos" value="Putra"<?php echo set_radio('kategori_kos','Putra') ?>>Putra &nbsp;
							  <input type="radio" name="kategori_kos" value="Putri"<?php echo set_radio('kategori_kos','Putri') ?>>Putri &nbsp;
							  <input type="radio" name="kategori_kos" value="Putra/Putri"<?php echo set_radio('kategori_kos','Putra/putri') ?>>Putra/Putri &nbsp;
                        </td>
                    </tr>

                    <tr>
                        <td width="20%"><label for="alamat_kos">Alamat Kos</label></td>
                        <td width="80%">
                        	 <textarea name="alamat_kos" class="form-control" placeholder="Alamat Kos" ><?php echo set_value('alamat_kos') ?></textarea>
                        </td>
                    </tr>

                    <tr>
                        <td width="20%"><label>Fasilitas Kamar</label></td>
                        <td width="80%">
                             <input type="checkbox" name="fasilitas_kos[]" value="Kasur"> Kasur &nbsp;
						    <input type="checkbox" name="fasilitas_kos[]" value="Wifi"> Wifi &nbsp;
						    <input type="checkbox" name="fasilitas_kos[]" value="Lemari Baju"> Lemari Baju &nbsp;
						    <input type="checkbox" name="fasilitas_kos[]" value="Kamar Mandi Pribadi"> Kamar Mandi pribadi &nbsp;
						    <input type="checkbox" name="fasilitas_kos[]" value="Meja"> Meja &nbsp;<br>
						    <input type="checkbox" name="fasilitas_kos[]" value="Kipas Angin"> Kipas Angin &nbsp;
						    <input type="checkbox" name="fasilitas_kos[]" value="Dapur"> Dapur &nbsp; 
						    <input type="checkbox" name="fasilitas_kos[]" value="Televisi(TV)"> Televisi(TV) &nbsp; 
                        </td>
                    </tr>

                    <tr>
                        <td width="20%">
                            <label for="harga">Harga (perBulan)</label>
                        </td>
                        <td width="80%">
                           <input type="number" name="harga" id="harga" class="form-control" placeholder="Harga (perBulan)" value="<?php echo set_value('harga') ?>">
                        </td>
                    </tr>
                    <tr>
                        <td width="20%">
                            <label for="stok_kamar">Stok Kamar</label>
                        </td>
                        <td width="80%">
                           <input type="number" name="stok" id="stok_kamar" placeholder="Stok Kamar" class="form-control" value="<?php echo set_value('stok') ?>">
                        </td>
                    </tr>

                    <tr>
                        <td width="20%">
                            <label for="deskripsi">Deskripsi</label>
                        </td>
                        <td width="80%">
                            <textarea name="deskripsi" class="form-control" placeholder="Deskripsi" id="editor"><?php echo set_value('deskripsi') ?></textarea>
                        </td>
                    </tr>

                    <tr>
                        <td width="20%">
                            <label for="gambar">Gambar</label>
                        </td>
                        <td>
                            <input type="file" name="gambar" class="form-control" value="<?php echo set_value('gambar') ?>" required>
                        </td>
                    </tr>
                </table> 
                <div class="btn-kirim">
                    <button type="submit" name="submit" class="site-btn login-btn" onclick="">Kirim</button>
                </div>
                <br><br><br><br>
            </form>
        </div>
</div>

 <?php 
 echo form_close(); ?>


<br>