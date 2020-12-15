<?php 
// loading konfigurasi web
$site = $this->konfigurasi_model->listing();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- ICON DIAMBIL DARI KONFIGURASI WEBSITE -->
	 <link rel="icon" type="image/png" href="<?php echo base_url('assets/upload/image/'.$site->icon) ?>">

  	<!-- SEO Google -->
  	<meta name="keywords" content="<?php echo $site->keywords ?>">
  	<meta name="description" content="<?php echo $title ?>, <?php echo $site->deskripsi ?>">

	<!-- css style -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/template/css/font-awesome.min.css" type="text/css">

   
    <link rel="stylesheet" href="<?php echo base_url()?>assets/template/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/template/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/template/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/template/css/slicknav.min.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/template/css/style.css" type="text/css">
	<!-- nice number -->
	<link href="<?php echo base_url()?>assets/template/css/jquery.nice-number.css" rel="stylesheet">

	<!-- date picker -->
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.min.css">


	
   

	
	<title><?php echo $title ?></title>
</head>
<body>