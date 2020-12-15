<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>KOSYUK||KOS GOMONG MURAH</title>
	<!-- css style -->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://kit.fontawesome.com/86bb57e062.js" crossorigin="anonymous"></script>
</head>
<body>

<!-- HEADER -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="inner-header">
                <div class="logo">
                    <a href="home.php"><img src="img/richooo.png" alt=""></a>
                </div>
<!--                 <div class="header-right">
                    <img src="img/icons/search.png" alt="" class="search-trigger"> -->
<!--                     <form action="#" id="menu_search_form" class="menu_search_form">
                       <input type="text" class="search_input" placeholder="Search Item" required="required">
                       <button class="menu_search_button"><img src="images/search.png" alt=""></button>
                    </form> -->
<!--                 </div> -->
<!--                 <div class="user-access">
                    <a href="register.php">Register /</a>
                    <a href="Login.php">Sign in</a>
                </div> -->
                <nav class="main-menu mobile-menu">
                    <ul>
                        <li><a href="home.php">Home</a></li>
                        <li><a href="Daftarmenu.php">Daftar Kos</a></li>
                        <li><a href="Aboutus.php">About</a></li>
                        <li><a href="bantuan.php">Bantuan</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><button class="btn btn-default" class="boom" id="boom"><i class="fa fa-user-circle panel-primary" aria-hidden="true"></i></button></li>
                        <li>
                            <!-- <button><i class="fa fa-search" aria-hidden="true"></i></button> -->
                            <!-- <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default"><i class="fa fa-search" aria-hidden="true"></i></button>
                            <div class="dropdown-menu">
                                <a class="dropdoen-item">Halo</a>
                            </div -->
                            <!-- Large modal -->
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default"><i class="fa fa-search"></i></button>

                              <div class="modal fade" id="modal-default">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true" style="float: right; margin-right: 30px; margin-top: 30px; ">&times;</span></button>
                                        <h4 class="modal-title">Search</h4>
                                      </div>
                                      <div class="modal-body">
                                        <div class="form-group">
                                              <div class="form-inline  mr-sm-2">
                                              <input type="text" name="search" class="form-control col-md-10 mr-sm-2" placeholder="Seacrh...">
                                              <button type="submit" class="btn btn-primary" style="width: 80px;"><i class="fa fa-search"></i></button>
                                              </div>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- /.modal-content -->
                                  </div>
                                  <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal -->
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    
<!-- ISI -->
<hr class="horizontal">
	<h5>
		<div class="poinatas">
			<i class="fa fa-map-marker" aria-hidden="true"><a href="home.php" > Promosi Kos</a> 
			<i class="fa fa-caret-right" aria-hidden="true"><a href="#"> Kos Gomong Murah</a>
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
  <div class="kolomfoto">
    <img class="image" src="img/products/Kos gomong murah/kamar.jpg" alt="Kamar" onclick="myFunction(this);">
  </div>
  <div class="kolomfoto">
    <img class="image" src="img/products/Kos gomong murah/halaman.jpg" alt="Halaman Depan" onclick="myFunction(this);">
  </div>
  <div class="kolomfoto">
    <img class="image" src="img/products/Kos gomong murah/kamar2.jpg" alt="Isi Dalam" onclick="myFunction(this);">
  </div>
  <div class="kolomfoto">
    <img class="image" src="img/products/Kos gomong murah/fasilits.jpg" alt="Fasilitas" onclick="myFunction(this);">
  </div>
  <div class="kolomfoto">
    <img class="image" src="img/products/Kos gomong murah/teras.jpg" alt="Pintu Depan" onclick="myFunction(this);">
  </div>
</div>
<!-- Grid isi -->
<div class="container-grid">
    <div class="preview satu">
        <div class="kotak-satu">
            <b><span class="kat">Putra</span></b>
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
                    <span class="ket"><i class="fas fa-expand-arrows-alt icon">&nbsp;</i>3x4</span>
            </div>
        </div>
        <br>
        
        <span class="title">Deskripsi Kos :</span>
        
        <br>
            <div class="kotak-lima">
                <div class="isi">
                        <p>Kos memiliki lokasi yang strategis karena dekat dengan pusat kota, serta lingkungan sekitar yang nyaman. </p>
                </div>
            </div>

            <span id="dots"></span>
            <span id="more">
            <br>
            <div class="kotak-enam">
                <div class="isi">
                        <span class="title">Lokasi</span><br>
                        <span class="ket"><i class="fas fa-map-marker-alt"></i>Jl. Gomong I/15 Kec.Selaparang, Mataram, NTB</span>
                        <span class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7890.243631127805!2d116.09269867166576!3d-8.58428492532044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdc083af21f071%3A0xb30c9bd5a5fb604!2sGomong%2C%20Kec.%20Selaparang%2C%20Kota%20Mataram%2C%20Nusa%20Tenggara%20Bar.!5e0!3m2!1sid!2sid!4v1589126980044!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></span>
                </div>
            </div>
        </span>
    <div class="lanjut">
    <button onclick="readmore()" id="myBtn">Pelajari Lebih Lanjut</button>
     </div> 
    </div>
    


    <div class="preview dua">
       <div class="card">

            <div class="card-satu">
                    <b><span class="kat">Stok Kamar : 4</span></b>
            </div>
             <div class="card-dua">
                    <span class="title">Harga Kos</span><br>
                    <span class="ket">Perbulan</span>&nbsp;
                    <span class="ket harga">Rp 600.000</span>
            </div>
            <div class="card-tiga">
                <div class="isi-fasilitas">
                    <span class="title">Fasilitas Kos :</span>
                    <br>
                    <ul>
                        <li><span class="ket"><i class="fas fa-bed icon">&nbsp;</i>Kasur</span></li>
                        <li><span class="ket"><i class="fas fa-bath icon">&nbsp;</i>Kamar Mandi</span></li>
                        <li><span class="ket"><i class="fas fa-fan icon">&nbsp;</i>Kipas Angin</span></li>
                        <li><span class="ket"><i class="fas fa-wifi icon">&nbsp;</i>Wifi</span></li>
                        <li><span class="ket"><i class="fas fa-utensils icon">&nbsp;</i>Dapur</span></li>
                    </ul>
                </div>
            </div>
            <br><br>

        <div class="pemesanan">
             <a href="konfirmasipembayaran.php"><button type="button" class="pesan"><i class="far fa-paper-plane">Pesan Sekarang</i></button></a>
             <a href="https://bit.ly/3dHeuPH"><button type="button" class="pesan"><i class="fas fa-phone-alt">Hubungi penjual</i></button></a>
         </div>  
       </div>
    </div>

</div>

<!-- PENUTUPISI -->
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
                <div class="social-links">
                    <br>
                    <a href="https://bit.ly/3dDceJg" class="instagram"><i class="fa fa-instagram"></i><span>kosyuk</span></a>
                    <a href="https://bit.ly/2Wrc5Tv" class="facebook"><i class="fa fa-facebook"></i><span>kosyuk</span></a>
                    <a href="https://bit.ly/3dHeuPH" class="facebook"><i class="fa fa-phone"></i><span>+6281236555236</span></a>
                </div>
            </div>
            <div class="container text-center pt-5">
                <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> Pelayanan Terbaik | KosYuk</p>
            </div>
        </div>
    </footer>


 <!-- OVERLAY LOGIN -->
    <div class="popup">
        <div class="popup-content">
            <a class="close" id="close"><i class="fas fa-times-circle"></i></a>
            <!-- <img src="img/product/close-icon-13577.png" alt="close" class="close" id="close"> -->
            <img src="img/logo.png" alt="user" align="center">
                <h4 class="loginregister">LOGIN</h4>
            <br><br>
            <a href="login.php" class="button">PENCARI KOS</a>
            <a href="login.php" class="button">PENYEDIA KOS</a>
        </div>
    </div>

    <!-- Jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>	
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript" src="js/home.js"></script>
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
    btnText.innerHTML = "Pelajari Lebih Lanjut"; 
    moreText.style.display = "inline";
  }
}
</script>
</body>
</html>