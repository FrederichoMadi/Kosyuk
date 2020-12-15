<!DOCTYPE html>
<html>
<head>
    <title>KOSYUK</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Css Styles -->
<!--     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"> -->
<!--     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
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


<hr class="horizontal">
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="register-form">
                        <h2>Konfirmasi Pemesanan</h2>
                        <p class="justifier">Terimakasih sudah memesan kamar melalui <b>KOSYUK</b>. Setelah anda melakukan pembayaran, segera lakukan konfirmasi pembayaran dengan mengisi <b>FORM</b> di bawah ini paling lambat <b>1 x 24 JAM </b>setelah pemesanan. Pembayaran dapat dilakukan dengan transfer bank ke rekening berikut : <br>
                        Nomor rekening: <b>xxx</b><br>
                        Atas Nama: <b>xxx</b></p>
                        
                         <form action="" method="post">

                            <div class="group-input">
                                <label for="nama_lengkap">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" id="nama_lengkap" class="box" placeholder="Nama Lengkap" required>
                            </div>
                            <div class="group-input">
                                <label for="Tanggal_lahir">Tanggal Lahir</label>
                                <div id="dateRangePicker" class="input-group input-append date">
                                    <input class="form-control" type="text" name="tanggal_lahir" placeholder="dd/mm/yyyy">
                                    <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                                </div>
                            </div>

                            <div class="group-input">
                                <label for="deskripsi">Alamat</label>
                                <textarea class="form-control" id="deksripsi" name="deskripsi" rows="3" placeholder="Alamat detail"></textarea>
                            </div>
                            <div class="group-input">
                                <label for="pekerjaan">Pekerjaan</label>
                                <input type="text" name="pekerjaan" id="pekerjaan" class="box" placeholder="Pekerjaan" required>
                            </div>
                            <div class="group-input">
                                <label for="nomor_telepon">No Telp /HP</label>
                                <input type="text" name="nomor_telepon" id="nomor_telepon" class="box" placeholder="No Telp /HP" required>
                            </div>
                            <div class="group-input">
                                <input type="checkbox" name="bayar" id="bayar" value="bayar"> Saya Sudah Bayar
                            </div>
                            <button type="submit" name="submit" id="submit" class="site-btn login-btn">Kirim</button> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
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
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript" src="js/home.js"></script>
    <script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#dateRangePicker')
            .datepicker({
                format: 'dd/mm/yyyy',
                startDate: '01/01/1990',
                endDate: '30/12/2100'
            });
        });
    </script>
</body>
</html>