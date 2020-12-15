<!-- pilihan wilayah -->
<div class="mataram-region">
	<div class="judul-wilayah">
		<h3 style="font-family:Yu Gothic UI Semibold;">Wilayah Kota Mataram </h3>
		<br>
		<div class="wilayah">
			<?php foreach($wilayah as $wilayah) { ?>
			<div class="pembagian-wilayah">
				<img src="<?php echo base_url('assets/upload/image/'.$wilayah->gambar_wilayah) ?>" class="image">
				<div class="nama-wilayah"><a href="<?php echo base_url('daftarkos/wilayah/'.$wilayah->nama_wilayah) ?>"><?php echo $wilayah->nama_wilayah ?></a></div>
			</div>
			<?php } ?>

			<div class="pembagian-wilayah">
				<img src="<?php echo base_url() ?>assets/template/img/products/mataram lainnya.jpg" class="image">
				<div class="nama-wilayah"><a href="<?php echo base_url('daftarkos') ?>">Lainnya...</a></div>
			</div>
		</div>
	</div>	
</div>