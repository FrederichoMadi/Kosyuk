<div class="container">
	
		<h2 class="judul"><?php echo $title; ?></h2>
		<br>

		<?php 
		if($this->session->flashdata('sukses')){
			echo '<div class="alert alert-success"> ';
			echo $this->session->flashdata('sukses');
			echo '</div>';
		}
		 ?>
			<!--Kalau ada pemesanan, tampilkan tabel -->
		<?php if($header_transaksi) { ?>
			<table class="table table-hover" width="100%"> 
				<thead class="bg-info">
					<tr>
						<th>NO</th>
						<th>KODE TRANSAKSI</th>
						<th>TANGGAL</th>
						<th>TOTAL HARGA</th>
						<th>JUMLAH PEMESANAN</th>
						<th>STATUS BAYAR</th>
						<th>ACTION</th>

					</tr>
				</thead>
				<tbody>
					<?php $i=1; foreach($header_transaksi as $ht){ ?>
					<tr>
						<td><?php echo $i ?></td>
						<td><?php echo $ht->kode_transaksi ?></td>
						<td><?php echo date('d-m-Y',strtotime($ht->tanggal_transaksi)) ?></td>
						<td><?php echo number_format($ht->jumlah_transaksi,'0',',','.') ?></td>
						<td><?php echo $ht->total_pemesanan ?>/bulan</td>
						<td><?php echo $ht->status_bayar ?></td>
						<td>
							<div class="btn-group">
								<a href="<?php echo base_url('dasbor/detail/'.$ht->kode_transaksi) ?>" class="btn btn-primary btn-sm"><i class="fa fa-eye">Detail</i></a>&nbsp;

								<a href="<?php echo base_url('dasbor/konfirmasi/'.$ht->kode_transaksi) ?>" class="btn btn-deault btn-sm konfirmasi"><i class="fa fa-upload">Konfirmasi Bayar</i></a>
							</div>
							
						</td>
					</tr>
				<?php $i++;
			} ?>
				</tbody>
			</table>

			<!-- kalau gak ada tampilkan notifikasi -->
		<?php } else{  ?>
			<p class="alert alert-success">
				<i class="fa fa-warning"></i>Belum ada Data pemesanan
			</p>

			<?php } ?>
</div>