<?php 
require 'database.php';

if ( isset($_POST["submit"]) ) {
    
    if ( registrasi($_POST) > 0 ) {
        echo "<script>
                alert('Data BERHASIL Ditambahkan!');
                document.location.href = 'form-kos.php';
            </script>
            ";
    } else {
        echo "<script>
                alert('Data GAGAL Ditambahkan!');
            </script>";
    }
 } 

?>

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
     <div class="register-login-section spad">
        <div class="container">
            <div class="alert-success">
            </div>
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="register-form">
                        <h2>Form Data Diri Pemilik Kos</h2>
                        
                         <form action="" method="post">

                            <div class="group-input">
                                <label for="nama_lengkap">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" id="nama_lengkap" class="box" placeholder="Nama Lengkap" required>
                            </div>

                            <div class="group-input">
                                <label for="username">Username Akun</label>
                                <input type="text" name="username" id="username" class="box" placeholder="Username Akun" required>
                            </div>

                            <div class="group-input">
                                <label for="password">Password Akun</label>
                                <input type="password" name="password" id="password" class="box" placeholder="Password Akun" required>
                            </div>

                            <div class="group-input">
                                <label for="password2">Konfirmasi Password Akun</label>
                                <input type="password" name="password2" id="password2" class="box" placeholder="Konfirmasi Password Akun" required>
                            </div>

                            <div class="group-input">
                                <label for="email">E-Mail</label>
                                <input type="email" name="email" id="email" class="box" placeholder="E-Mail" required>
                            </div>

                            <div class="group-input">
                                <label for="no_hp">Nomor HP/Telepon</label>
                                <input type="text" name="no_hp" id="no_hp" class="box" placeholder="Nomor HP/Telepon" required>
                            </div>


                            <div class="group-input">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" id="alamat" class="box" placeholder="Alamat" required>
                            </div>
                            <div class="group-input">
                                <label for="alamat">No-Rek</label>
                                <input type="text" name="norekening" id="norekening" class="box" placeholder="norekening" required>
                            </div>

                            <button type="submit" name="submit" id="submit" class="site-btn login-btn">Kirim</button> 
                        </form>
                    </div>
                </div>
                            
            </div>
        </div>
    </div>
    <br><br>

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
<script type="text/javascript" src="js/home.js"></script>
</body>
</html>