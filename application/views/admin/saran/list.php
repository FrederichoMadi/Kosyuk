<?php 
// notifikasi
if ($this->session->flashdata('sukses')) {
	echo '<p class="alert alert-success">';
	echo $this->session->flashdata('sukses');
	echo '</div>';
}

 ?>

 <table class="table table-bordered" id="example1">
 	<thead>
 		<tr>
 			<th class="col-md-1">NO</th>
 			<th class="col-md-3">NAMA</th>
 			<th>SARAN/KELUHAN</th>
 			

 		</tr>
 	</thead>
 	<tbody>
 		<?php $no=1; foreach($saran as $saran) { ?>
 		<tr>
 			<td><?php echo $no ?></td>
 			<td><?php echo $saran->nama_pelanggan ?></td>
 			<td><?php echo $saran->saran ?></td>
 			
 		</tr>
 		<?php $no++; ?>
 	<?php } ?>
 	</tbody>
 </table>