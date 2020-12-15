<?php 
// Form Pemesanan kos
echo form_open(base_url('pesan/add'));
// Elemen yang dibawa
echo form_hidden('id', $kos->id_kos);
echo form_hidden('qty', 1);
echo form_hidden('price', $kos->harga);
echo form_hidden('name', $kos->nama_kos);

// elemen redirect
// echo form_hidden('redirect_page',str_replace('index.php/','',current_url()));
 ?>

<h5>
		<div class="poinatas">
			<i class="fa fa-map-marker" aria-hidden="true"><a href="<?php echo base_url() ?>" > Home</a> 
			<i class="fa fa-caret-right" aria-hidden="true"><a href="#"> <?php echo $kos->nama_kos ?></a>
				</i>
			</i>
		</div>
	</h5>
<!-- The expanding image container -->
<div class="gambarbesar">
  <!-- Close the image -->
  <span onclick="this.parentElement.style.display='none'" class="closegambar">&times;</span>

  <!-- Expanded image -->
  	<img id="expandedImg" style="width:100%" class="fotobesar">

  <!-- Image text -->
  <div id="imgtext"></div>
</div> 
	 <!-- The grid: four columns -->
  
<div class="barisfoto">
  <div class="kolomfoto" data-thumb>
    <img class="image" src="<?php echo base_url('assets/upload/image/'.$kos->gambar) ?>" alt="<?php echo $kos->nama_kos ?>" onclick="myFunction(this);">
  </div>
  <?php if($gambar) { 
      foreach($gambar as $gambar) { ?>
  <div class="kolomfoto" data-thumb>
    <img class="image" src="<?php echo base_url('assets/upload/image/'.$gambar->gambar) ?>" alt="<?php echo $gambar->judul_gambar ?>" onclick="myFunction(this);">
  </div>
    <?php }
            } 
      ?>
</div>
<br><br>

<!-- Grid isi -->
<div class="container-grid">
    <div class="preview satu">
        <div class="kotak-satu">
            <b><span class="kat"><?php echo $kos->kategori_kos ?></span></b>
        </div>
        <br><br><br>
        <div class="kotak-dua">
            <div class="isi">
                    <span class="rating">Rating : </span> 
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
            </div>
        </div>
        <br>
        <div class="kotak-tiga">
            <div class="isi">
                    <span class="title">Luas Kamar :</span>
                    <span class="ket"><i class="fas fa-expand-arrows-alt icon">&nbsp;</i><?php echo $kos->ukuran_kos?></span>
            </div>
        </div>
        <br>
        
        <span class="title">Deskripsi Kos :</span>
        
        <br>
            <div class="kotak-lima">
                <div class="isi">
                        <p><?php echo $kos->deskripsi ?> </p>
                </div>
            </div>
            <br>
            <div class="kotak-enam">
                <div class="isi">
                        <span class="title">Lokasi</span><br>
                        <span class="ket"><i class="fas fa-map-marker-alt"></i><?php echo $kos->alamat_kos ?></span>
                        <span class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63121.22135040055!2d116.08520973748031!3d-8.588659499428015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdbf591a7f5ec7%3A0x830b122bdd101dc5!2sKota%20Mataram%2C%20Nusa%20Tenggara%20Bar.!5e0!3m2!1sid!2sid!4v1589874499837!5m2!1sid!2sid" width="850" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></span>
                </div>
            </div>
        
    <div class="lanjut">
  
     </div> 
    </div>
    


    <div class="preview dua">
       <div class="card">

            <div class="card-satu">
                    <b><span class="kat">Stok Kamar:<?php echo $kos->stok ?></span></b>
            </div>
             <div class="card-dua">
                    <span class="title">Harga Kos</span><br>
                    <span class="ket">Perbulan</span>&nbsp;
                    <span class="ket harga">Rp <?php echo number_format($kos->harga,'0',',','.') ?></span>
            </div>
            <div class="card-tiga">
                <div class="isi-fasilitas">
                    <span class="title">Fasilitas Kos :</span>
                    <br>
                      <span class="ket"><?php echo $kos->fasilitas_kos; ?></span>

                </div>
            </div>
            <br>

        <div class="pemesanan">
             <a href="<?php echo base_url('pesan/add') ?>"><button type="submit" value="submit" class="pesan"><i class="far fa-paper-plane">Pesan Sekarang</i></button></a>
             <a href="https://bit.ly/3dHeuPH"><button type="button" class="pesan"><i class="fas fa-phone-alt">Hubungi penjual</i></button></a>
         </div>  
       </div>
    </div>
</div>


<?php echo form_close(); ?>

<!-- Promosi kos -->
<div class="page-wrapper">

  <div class="post-slider">
    <h3 class="slider-title" style="font-family:Yu Gothic UI Semibold;">Promosi Kos</h3>
    <i class="fas fa-chevron-left prev"></i>
    <i class="fas fa-chevron-right next"></i>
      <div class="post-wrapper">
          <?php foreach($kos_lainnya as $kos){ ?>
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
<script>
  // promosi kos
$(document).ready(function() {
  $('.post-wrapper').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    nextArrow: $('.next'),
    prevArrow: $('.prev'),
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
  });


}); 
</script>
<br>
<br>
