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
						<?php if($header_transaksi->bukti_bayar != "") { ?> <img src="<?php echo base_url('assets/upload/image/'.$header_transaksi->bukti_bayar) ?>" class="img img-thumbnail" width='200'>
					<?php } else { echo 'Belum Ada Bukti Bayar'; } ?>
					</td>
				</tr>
				</tbody>
			</table>
			<br>

			<table class="table table-bordered" width="100%"> 
				
				<thead class="bg-info">
					<tr>
						<th>NO</th>
						<th>KODE KOS</th>
						<th>NAMA KOS</th>
						<th>TOTAL HARGA</th>
						<th>JUMLAH PEMESANAN</th>
						<th>HARGA PERBULAN</th>
						<th>ACTION</th>

					</tr>
				</thead>
				<tbody>
					<?php $i=1; foreach($transaksi as $ht){ ?>
					<tr>
						<td><?php echo $i ?></td>
						<td><?php echo $ht->kode_kos ?></td>
						<td><?php echo $ht->nama_kos ?></td>
						<td>Rp. <?php echo number_format($ht->total_harga,'0',',','.') ?></td>
						<td><?php echo $ht->jumlah ?>/bulan</td>
						<td>Rp. <?php echo number_format($ht->harga,'0',',','.') ?></td>
						
					
						<td>
							<a href="<?php echo base_url('pesan/hapus_riwayat/'.$header_transaksi->id_header_transaksi) ?>" class="btn btn-danger btn-xs">
              				<i class="fa fa-times"></i>Batal</a>
						</td>
					</tr>
				<?php $i++;
			} ?>
				</tbody>
				<?php echo form_close(); ?>
			</table>

			<!-- kalau gak ada tampilkan notifikasi -->
		<?php } else{  ?>
			<p class="alert alert-success">
				<i class="fa fa-warning"></i>Belum ada Data pemesanan
			</p>

			<?php } ?>
</div>