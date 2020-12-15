<!DOCTYPE html>
<html>
<head>
	
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
    <title>KOSYUK</title>
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
                        <li><a href="./contact.html">Contact</a></li>
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
    <hr class="horizontal">
    <!-- Tampilan Register -->
    <div class="form-kos">
        <div class="form-title">
            <h2>Form Pengisian Kos</h2>
        </div>
            <div class="tabel-kos">
                <form action="" method="post">
                    <table>
                        <tr>
                           
                              <td width="20%" height="100%"><label for="nama-kos">Nama Kos     </label></td>
                              <td width="80%"><input type="text" class="form-control" id="nama-kos" placeholder="Nama Kos"></td>                          
                        </tr>

                        <tr>
                              <td width="20%"><label for="ukuran-kos">Ukuran Kos     </label></td>
                              <td width="80%"><input type="text" class="form-control" id="ukuran-kos" placeholder="Panjang x Lebar"></td>                           
                        </tr>

                        <tr>
                            <td width="20%"><label for="kategori-kos">Kategori Kos</label>
                            </td>
                            <td width="80%"><select name="kategori-kos">
                                <option value="putra">Putra</option>
                                <option value="putri">Putri</option>
                                <option value="putra/putri">Putra/Putri</option>
                            </select>  
                            </td>
                        </tr>

                        <tr>
                            <td width="20%"><label for="alamat">Alamat Kos</label></td>
                            <td width="80%"><textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea></td>
                        </tr>

                        <tr>
                            <td width="20%"><label>Fasilitas Kamar</label></td>
                            <td width="80%">
                                <input type="checkbox" name="kasur" id="kasur" value="kasur">Kasur
                                <input type="checkbox" name="wifi" id="wifi" value="wifi">WiFi &nbsp;
                                <input type="checkbox" name="Lemari-baju" id="lemari-baju" value="lemari-baju">Lemari Baju &nbsp;
                                <input type="checkbox" name="meja" id="meja" value="meja">Meja &nbsp;
                                <input type="checkbox" name="meja" id="meja" value="meja">Kamar Mandi Pribadi &nbsp;
                            </td>
                        </tr>

                        <tr>
                            <td width="20%">
                                <label for="harga">Harga (perBulan)</label>
                            </td>
                            <td width="80%">
                               <input type="text" name="harga" id="harga" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td width="20%">
                                <label for="stok-kamar">Stok Kamar</label>
                            </td>
                            <td width="80%">
                               <input type="text" name="stok-kamar" id="stok-kamar" class="form-control">
                            </td>
                        </tr>

                        <tr>
                            <td width="20%">
                                <label for="deskripsi">Deskripsi</label>
                            </td>
                            <td width="80%">
                               <textarea class="form-control" id="deksripsi" name="deskripsi" rows="3"></textarea>
                            </td>
                        </tr>

                        <tr>
                            <td width="20%">
                                <label for="gambar">Gambar</label>
                            </td>
                            <td>
                               <input type="file" class="form-control" id="gambar" name="gambar">
                            </td>
                        </tr>
                    </table> 
                    <div class="btn-kirim">
                        <button type="submit" class="site-btn login-btn" onclick="">Kirim</button>
                    </div>
                    <br><br><br><br>
                </form>
            </div>
    </div>

    <!-- FOOTER -->
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

<!-- SCRIPT -->
<script type="text/javascript" src="js/home.js"></script>


</body>
</html>