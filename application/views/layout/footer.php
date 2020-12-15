<!-- overlay -->
   
    <div class="popup">
        <div class="popup-content">
            <a class="close" id="close"><i class="fas fa-times-circle"></i></a>
            <!-- <img src="img/product/close-icon-13577.png" alt="close" class="close" id="close"> -->
            <img src="<?php echo base_url('assets/upload/image/'.$site->logo) ?>" alt="user" align="center">
                <h4 class="loginregister">LOGIN</h4>
            <br><br>
            <a href="<?php echo base_url('masuk') ?>" class="button">PENCARI KOS</a>
            <a href="<?php echo base_url('penyedia') ?>" class="button">PENYEDIA KOS</a>
        </div>
    </div>

<footer class="footer-section spad">
        <div class="container">
            <div class="footer-widget">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Tentang Kami</h4>
                            <ul>
                                <li>Tentang Kami</li>
                                <li>Komunitas</li>
                                <li>Pekerjaan</li>
                                <li>Hubungi Kami</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Pelayanan Pelanggan</h4>
                            <ul>
                                <li>Pencarian</li>
                                <li>Kebijakan Pribadi</li>
                                <li>Pelayanan 24 Jam</li>
                                <li>Galeri</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Pelayanan Pelanggan</h4>
                            <ul>
                                <li>Gratis Akses Komunikasi</li>
                                <li>Gratis Perabot Rumah Tangga</li>
                                <li>Keuntungan Pelanggan</li>
                                <li>Syarat dan Ketentuan</li>
                                <li>Kebijakan Pribadi</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Informasi KosYuk</h4>
                            <ul>
                                <li>Lapak Kos</li>
                                <li>Jumlah Kamar Tersedia</li>
                                <li>Metode Pembayaran</li>
                                <li>Durasi Pembayaran</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="social-links-warp">
            <div class="container">
                <br>
                <h4 class="text-center" style="color: white;">Our Contact :</h4>
                <div class="social-links">
                    <br>
                    <a href="#" class="facebook"><i class="far fa-envelope"></i><span><?php echo $site->email ?></span></a>
                    <a href="<?php echo $site->instagram ?>" class="instagram"><i class="fab fa-instagram"></i><span>Kosyuk</span></a>
                    <a href="<?php echo $site->facebook ?>" class="facebook"><i class="fab fa-facebook-f"></i><span>Kosyuk</span></a>
                    <a href="#" class="facebook"><i class="fa fa-phone"></i><span><?php echo $site->telepon ?></span></a>
                </div>
            </div>
            <div class="container text-center pt-5">
                <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> Pelayanan Terbaik | KosYuk</p>
            </div>
        </div>
    </footer>


<!-- Jquery -->

     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url() ?>assets/template/js/home.js"></script>
     <!-- Read More -->
    <script>
    function readmore() {
      var dots = document.getElementById("dots");
      var moreText = document.getElementById("more");
      var btnText = document.getElementById("myBtn");

      if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more"; 
        moreText.style.display = "none";
      } else {
        dots.style.display = "none";
        btnText.innerHTML = "Tutup Kembali"; 
        moreText.style.display = "inline";
      }
    }
    </script>
    <script src="<?php echo base_url() ?>assets/template/js/main.js"></script>
    
    <!-- nice number, wajib koneksi internet dulu -->
    <script src="<?php echo base_url()?>assets/template/css/jquery.nice-number.js" type="text/javascript"></script>

     <!-- date picker -->
    <script type="text/javascript" src="<?php echo base_url()?>assets/template/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/template/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/template/js/jquery.min.js"></script>
    

     <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>




</body>
</html>