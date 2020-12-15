<div class="badan">
   
    <h2><i class="fa fa-map-marker" aria-hidden="true"></i>Wilayah Kos di
       <div class="btn-group">
          <button type="button" class="btn btn-default dropdown-toggle col-md-18" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 24px;">
            Plih Wilayah
          </button>
          <div class="dropdown-menu">
            <?php foreach($listing_wilayah as $wilayah) { ?>
                <a  id="$wilayah->nama_wilayah" class="dropdown-item" href="<?php echo base_url('daftarkos/wilayah/'.$wilayah->slug_wilayah) ?>"><?php echo $wilayah->nama_wilayah ?></a>
            <?php } ?>
          </div>
        </div>
    </h2>
     <div class="form-group">
      <?php echo form_open('daftarkos/cari')?>
        <div class="input-group">
            <button class="btn btn-outline-primary">Search</button>
            <input type="text" name="nama_kos" id="search_text" placeholder="Cari kos..." class="form-control col-md-5" autofocus autocomplete="off">
        </div>
        <?php 
        $nama_kos = $this->input->post('nama_kos');
        if($nama_kos) { ?>
          <br>
          <div class="container">
                <i class="far fa-frown wrong text-center"></i>
                <br>
                <br>
                <h5 class="alert alert-info text-center">Kos tidak dapat ditemukan</h5>
          </div>
        <?php 
        }
        echo form_close(); ?>
    </div> 
        <?php foreach($kos as $kos)  { ?>
              
            <div class="list-produk">
                <img src="<?php echo base_url('assets/upload/image/thumbs/'.$kos->gambar) ?>">

                <h4><?php echo $kos->nama_kos ?></h4>
                <h5>Rp <?php echo number_format($kos->harga,'0',',','.') ?>/bulan</h5>
        
                <a class="tombol tombol-detail" href="<?php echo base_url('daftarkos/detail/'.$kos->slug_kos) ?>"><i class="fa fa-list"></i> Cek Detail</a>
               
            </div>
            
        <?php } ?>

</div>
