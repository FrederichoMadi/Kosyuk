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

        // ambil data kos
        
        // echo form_hidden('cart['.$pesan['id'].']', $pesan['id']);
         ?>
      <div class="col-md-11 p-b-30">
        <?php 
          if(empty($pesan)){
         ?>
         <p class="alert alert-success">Silahkan Pesan terlebih dahulu</p>
       <?php }else{ 
        $total_bayar = 'Rp. '.number_format($this->cart->total(),'0',',','.');
          foreach($pesan as $pesan) { 
            $id_produk = $pesan['id'];
            // ambil data produk
            $kos = $this->kos_model->detail($id_produk);
            // form update
            #echo form_open(base_url('pesan/update/'.$pesan['rowid']));
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

              </td>
            </tr>
            <tr>
              <th scope="row">Total Bayar</th>
              <td colspan="2">Rp. <?php echo number_format($this->cart->total(),'0',',','.');?></td>
            </tr>
            
          </tbody>
        </table>
        <?php #echo form_close(); 
      } //end foreach
     } //endif 
     ?>
     <br>
     <hr>
     <h2 style="text-align: center; ">Data Pemesan</h2><hr>
      
      <?php 
      echo form_open(base_url('pesan/checkout'));
       // $id_produk=$pesan['id'];
       //      // ambil data produk
       //      $kos = $this->kos_model->detail($id_produk);
            echo form_hidden('id_kos', $kos->id_kos);
      $kode_transaksi = date('dmY').strtoupper(random_string('alnum',8));
       ?>

        <table class="table table-hover">
          <input type="hidden" name="id_pelanggan" value="<?php echo $pelanggan->id_pelanggan; ?>">
          <input type="hidden" name="jumlah_transaksi" value="<?php echo $this->cart->total(); ?>" >
          <input type="hidden" name="tanggal_transaksi" value="<?php echo date('Y-m-d'); ?>" >
          <thead>

            <tr>
              <th scope="col">Detail</th>
              <th scope="col">Detail Kos</th>
            </tr>
          </thead>
          <tbody>
             <tr>
              <th scope="row">Kode Transaksi</th>
              <td><input type="text" name="kode_transaksi" class="form-control" placeholder="Kode Transaksi" required value="<?php echo $kode_transaksi ?>" readonly></td>
            </tr>
            <tr>
              <th scope="row">Nama Pemesan</th>
              <td><input type="text" name="nama_pelanggan" class="form-control" placeholder="Nama Pelanggan" required value="<?php echo $pelanggan->nama_pelanggan ?>" ></td>
              
            </tr>
            <tr>
              <th scope="row">Email Pemesan</th>
              <td><input type="email" name="email" class="form-control" placeholder="E-Mail Pelanggan" required value="<?php echo $pelanggan->email ?>" ></td>
            </tr>
            <tr>
              <th scope="row">Telepon Pemesan</th>
              <td><input type="text" name="telepon" class="form-control" placeholder="Telepon" required value="<?php echo $pelanggan->telepon ?>" ></td>
            </tr>
            <tr>
              <th scope="row">Alamat Pemesan</th>
              <td><textarea name="alamat" class="form-control" placeholder="Alamat Penerima" ><?php echo $pelanggan->alamat ?></textarea></td>
            </tr>
            <tr>
              <td></td>
              <td>

                <button class="btn btn-success btn-lg" type="submit"><i class="fa fa-save"></i>Check out</button>

                <a href="<?php echo base_url('pesan/hapus') ?>" class="btn btn-danger btn-lg" style="color: white;"><i class="fa fa-times"></i>Batal</a>
              </td>
            </tr>
        
          </tbody>
        </table>
     <!-- nice number -->
    
    <script src="<?php echo base_url()?>assets/template/css/jquery.nice-number.js"></script>
    <!-- Jquery -->


       <?php echo form_close(); ?>

        </p>
      </div>
    </div>
  </div>
</div>
<br>


