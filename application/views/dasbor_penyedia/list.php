<div class="container">
	<div class="row">
		<div class="col-3">
			<?php 
			include('sidebar.php');
			 ?>
		</div>
	
		<div class="col-9 ">
			<p class="alert alert-success text-center">Selamat Datang <Strong><?php echo $this->session->userdata('nama_pemilik') ?></Strong></p>
			 <table class="table table-bordered" id="example1">
			<?php 
			if($this->session->flashdata('sukses'))
			{
				echo '<div class="alert alert-primary text-center">';
				echo $this->session->flashdata('sukses');
				echo '</div>';
			}
			 ?>
			
 	
		
 	<thead>
 		<tr>
 			<th>GAMBAR</th>
 			<th>NAMA</th>
 			<th>WILAYAH</th>
 			<th>HARGA</th>
 			<th>STOK</th>
 			<th>ACTION</th>
 		</tr>
 	</thead>
 	<tbody>

 		<tr>

 			<td>
 				<img src="<?php echo base_url('assets/upload/image/thumbs/'.$pemilik->gambar) ?>" class="img img-responsive img-thumbnail" width="60" >
 			</td>
 			<td><?php echo $pemilik->nama_pemilik ?></td>
 			<td><?php echo $pemilik->nama_wilayah ?></td>
 			<td><?php echo number_format($pemilik->harga,'0',',','.') ?></td>
 			<td><?php echo $pemilik->stok ?></td>
 			<td>

 				<a href="<?php echo base_url('dasbor_penyedia/gambar/'.$pemilik->id_kos) ?>" class= "btn btn-success btn-xs">
				<i class="fa fa-image"></i>Gambar(<?php echo $pemilik->total_gambar ?>)</a>

			 	<a href="<?php echo base_url('dasbor_penyedia/edit/'.$pemilik->id_kos) ?>" class= "btn btn-warning btn-xs">
				<i class="fa fa-edit"></i>Edit</a>
 			</td>
 		</tr>

 	</tbody>
 </table>


			</div>
		</div>
	</div>
</div>
<br>