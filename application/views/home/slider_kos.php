<!-- Promosi kos -->
<div class="page-wrapper">

	<div class="post-slider">
		<h3 class="slider-title" style="font-family:Yu Gothic UI Semibold;">Promosi Kos</h3>
		<i class="fas fa-chevron-left prev"></i>
		<i class="fas fa-chevron-right next"></i>
	<div class="post-wrapper">
			<?php foreach($kos as $kos){ ?>
				<?php if($kos->harga <= 650000){ ?>
				<div class="post">
					<img src="<?php echo base_url('assets/upload/image/'.$kos->gambar) ?>" alt="" class="slider-image">
					<div class="post-info">
						<i class="fas fa-user-circle"><?php echo $kos->kategori_kos?></i>
						&nbsp;
						<i class="fas fa-map-marker-alt"><?php echo $kos->nama_wilayah ?></i>
						<br>
						<a href="<?php echo base_url('daftarkos/detail/'.$kos->slug_kos) ?>"><?php echo $kos->nama_kos ?></a>
						<p>Rp <?php echo number_format($kos->harga,'0',',','.') ?>/bulan</p>
						<i class="fas fa-phone"> <?php echo $kos->telepon ?></i>
					</div>
				</div>
				<?php } ?>
			<?php } ?>
		</div>
	</div>
</div>