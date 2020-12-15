<div class="container">
	
	<h2 class="judul"><?php echo $title; ?></h2>
	<br>

		<!--Kalau ada pemesanan, tampilkan tabel -->
	<?php if($header_transaksi) { ?>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th width="20%">KODE TRANSAKSI</th>
					<th><?php echo $header_transaksi->kode_transaksi ?></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th>Tanggal</th>
					<td><?php echo date('d-m-Y',strtotime($header_transaksi->tanggal_transaksi)) ?></td>
				</tr>
				<tr>
					<th>Jumlah Total</th>
					<td>Rp. <?php echo number_format($header_transaksi->jumlah_transaksi,'0',',','.') ?></td>
				</tr>
				<tr>
					<th>Status Bayar</th>
					<td><?php echo $header_transaksi->status_bayar ?></td>
				</tr>
				<tr>
					<th>Bukti Bayar</th>
					<td>
						<?php if($header_transaksi->bukti_bayar != "") { ?> <img src="<?php echo base_url('assets/upload/image/'.$header_transaksi->bukti_bayar) ?>" class="img img-thumbnail">
					<?php } else { echo 'Belum Ada Bukti Bayar'; } ?>
					</td>
				</tr>
			</tbody>
		</table>
</div>

<?php 
if(isset($error)) {
	echo '<p class="alert alert-warning" > '.$error.'</p>';
}

// notifikasi error
echo validation_errors('<p class="alert alert-warning" > ','</p>');


 ?>

<div class="register-login-section spad">
	<div class="container">
	    <div class="row">
	        <div class="col-lg-6 offset-lg-3">
	            <div class="register-form">
	                <h2>Konfirmasi Pemesanan</h2>
	                <p class="justifier">Terimakasih sudah memesan kamar melalui <b>KOSYUK</b>. Setelah anda melakukan pembayaran, segera lakukan konfirmasi pembayaran dengan mengisi <b>FORM</b> di bawah ini paling lambat <b>1 x 24 JAM </b>setelah pemesanan. Pembayaran dapat dilakukan dengan transfer bank ke rekening berikut : <br><br>

	                Nama Bank: <b><?php echo $pemilik->nama_bank ?></b><br>
	                Nomor Rekening: <b><?php echo $pemilik->no_rekening ?></b><br>
	                Atas Nama: <b><?php echo $pemilik->nama_pemilik ?></b><br>
	                </p>
	                <?php // form open
					echo form_open_multipart(base_url('dasbor/konfirmasi/'.$header_transaksi->kode_transaksi)); 

					echo form_hidden('id_rekening', $pemilik->id_rekening);

					?>



	                    <div class="group-input">
	                        <label for="tanggal_bayar">Tanggal Bayar</label>
	                        <div id="dateRangePicker" class="input-group input-append date">
	                            <input class="form-control" type="text" name="tanggal_bayar" placeholder="dd/mm/yyyy" value=" <?php if(isset($_POST['tanggal_bayar'])){ echo set_value('tanggal_bayar');}elseif($header_transaksi->tanggal_bayar!=""){ echo $header_transaksi->tanggal_bayar ;}else{ echo date('d-m-Y') ;} ?>">
	                            <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
	                        </div>
	                    </div>

	                    <div class="group-input">
	                        <label for="jumlah_bayar">Jumlah bayar</label>
	                        <input type="number" name="jumlah_bayar" id="jumlah_bayar" class="box" placeholder="Jumlah pembayaran" value="<?php if(isset($_POST['jumlah_bayar'])) { echo set_value('jumlah_bayar');}elseif($header_transaksi->jumlah_bayar!=""){echo $header_transaksi->jumlah_bayar ;}else{ echo $header_transaksi->jumlah_transaksi ;} ?>" required>
	                    </div>
	                    <div class="group-input">
	                        <label for="nama_bank">Dari Bank</label>
	                        <input type="text" name="nama_bank" id="nama_bank" class="box" placeholder="Nama Bank" value="<?php echo $header_transaksi->nama_bank ?>" required>
	                       <small>misal : BANK BNI</small>
	                    </div>

	                    <div class="group-input">
	                        <label for="rekening_pembayaran">Dari Nomor Rekening</label>
	                        <input type="text" name="rekening_pembayaran" id="rekening_pembayaran" class="box" placeholder="Nomor Rekening" value="<?php echo $header_transaksi->rekening_pembayaran ?>" required>
	                       <small>misal : 808319238</small>
	                    </div>

	                     <div class="group-input">
	                        <label for="rekening_pelanggan">Nama Pemilik Rekening</label>
	                        <input type="text" name="rekening_pelanggan" id="rekening_pelanggan" class="box" placeholder="Nama Pemilik Rekening" value="<?php echo $header_transaksi->rekening_pelanggan ?>" required>
	                       <small>misal : Kosyuk</small>
	                    </div>

	                    <div class="group-input">
	                        <label for="rekening_pelanggan">Upload Bukti Bayar</label>
	                       <input type="file" name="bukti_bayar" class="form-control" placeholder="Upload bukti pembayaran">
	                       
	                    </div>

	                   
	                    <button type="submit" name="submit" id="submit" class="site-btn login-btn">Kirim</button> 
	                <?php echo form_close(); ?>
	            </div>
	        </div>
	    </div>
	</div>
</div>
<br><br>


			 
			

			<!-- kalau gak ada tampilkan notifikasi -->
		<?php } else{  ?>
			<p class="alert alert-success">
				<i class="fa fa-warning"></i>Belum ada Data pemesanan
			</p>

			<?php } ?>


<!-- Script -->
 <script type="text/javascript">
        $(document).ready(function () {
            $('#dateRangePicker')
            .datepicker({
                format: 'dd/mm/yyyy',
                startDate: '01/01/1990',
                endDate: '30/12/2100'
            });
        });
    </script>