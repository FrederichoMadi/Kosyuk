<div class="bgwhite p-t-66 p-b-60">
<h2 style="text-align: center; ">Data Kos</h2><hr>
<?php 
if($this->session->flashdata('sukses')){
  echo '<div class="alert alert-success" style="text-align: center ; margin : 0 50px;">';
  echo $this->session->flashdata('sukses');
  echo '</div>';
}
 ?>
  <div class="container">
    <div class="row">
        <?php 
        // cek data pemesanan ada atau tidak
        $pesan  = $this->cart->contents();
         ?>
      <div class="col-md-11 p-b-30">
        <?php 
          if(empty($pesan)){
         ?>
         <p class="alert alert-success">Silahkan Pesan terlebih dahulu</p>
       <?php }else{ 
       
          foreach($pesan as $pesan) { 
            $id_kos=$pesan['id'];
            // ambil data produk
            $kos = $this->kos_model->detail($id_kos);
            // form update
            echo form_open(base_url('pesan/update/'.$pesan['rowid']));
            echo form_hidden('cart['.$pesan['id'].']', $kos->id_kos);
            ?>

        <table class="table table-hover">
          <thead>

            <tr>
              <th scope="col">Detail</th>
              <th scope="col">Detail Kos</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Nama Kos</th>
              <td><?php echo $pesan['name'] ?></td>
              
            </tr>
            <tr>
              <th scope="row">Harga</th>
              <td><?php echo $pesan['qty']?> x <?php echo number_format($pesan['price'],'0',',','.') ?>/Bulan</td>
              
            </tr>
            <tr>
              <th scope="row">Ukuran Kos</th>
              <td colspan="2"><?php echo $kos->ukuran_kos ?></td>
            </tr>
            <tr>
              <th scope="row">Fasilitas Kos</th>
              <td colspan="2"><?php echo $kos->fasilitas_kos ?></td>
            </tr>
            <tr>
              <th scope="row">Alamat Kos</th>
              <td colspan="2"><?php echo $kos->alamat_kos ?></td>
            </tr>
            <tr>

              <th scope="row">Berapa Bulan</th>
              <td colspan="2">
                  
                   <div class="nice-number"> 
                  
                  <input type="number" name="qty" value="<?php echo $pesan['qty'] ?>">
                  

                  </div>
                  
                  <button type="submit" name="update" class="btn btn-primary btn-sm float-right"><i class="fa fa-edit"></i>Ubah</button>

              </td>
            </tr>
            <tr>
              <th scope="row">Total Bayar</th>
              <td colspan="2">Rp. <?php echo number_format($this->cart->total(),'0',',','.');?></td>
            </tr>
            
          </tbody>
        </table>
        <?php echo form_close(); 
      } //end foreach
     } //endif 
     ?>
      <p class="pull-right">
            <a href="<?php echo base_url('pesan/hapus') ?>"><button class="btn btn-danger btn-md">
              <i class="fa fa-times"></i>Batal</button></a>

          <a href="<?php echo base_url('pesan/checkout') ?>"><button class="btn btn-success btn-md">
              <i class="fa fa-shopping-cart"></i>Pesan</button></a>

        </p>
      </div>
    </div>
  </div>
 
</div>
<br>

 <!-- nice number -->
   
   
  
     <script type="text/javascript">  
    $(function(){
       $('input[type="number"]').niceNumber();
      });
    </script>
