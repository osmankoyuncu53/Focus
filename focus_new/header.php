<?php include 'netting/baglan.php'; 
      include 'netting/islem.php';
      session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>Focus</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">	
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="css/responsive.css">
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="https://kit.fontawesome.com/081d03dba3.js" crossorigin="anonymous"></script> <!--icon-->
<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

<!-- Customized Bootstrap Stylesheet -->
<link href="css/ekStyle.css" rel="stylesheet">

</head>
<body>
	<header id="home"class="section">
	<div class="header_main">
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full" >
                        <div class="center-desk">
                           <div class="logo"><a href="#home"><img src="images/logo.png" style="max-width: 100%;"></a> 
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <?php if(isset($_SESSION["kullanici_adi"])){ ?>
                     <div class="menu-area">
                        <div class="limit-box">
                           <nav class="main-menu">
                              <ul class="menu-area-main">
                                 <li><a href="index.php">Anasayfa</a></li>
                                 <li><a href="urunler.php">Ürünler</a></li>
                                 <li><a href="hakkimizda.php">Hakkımızda</a></li>
                                 <li><a href="iletisim.php">İletisim</a></li>
                                 
                                 <li style="margin-left:10px; margin-right:-20px;"><a href="cikis.php"><i class="fas fa-door-open"></i>Çıkış </a></li>
                                 <li><a href="#"><i class="fas fa-user-alt"></i>Hoşgeldin <?php echo $_SESSION['kullanici_adi']; ?> </a></li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                     <?php } 
                     else{ ?>
                        <div class="menu-area">
                        <div class="limit-box">
                           <nav class="main-menu">
                              <ul class="menu-area-main">
                                 <li><a href="index.php">Anasayfa</a></li>
                                 <li><a href="urunler.php">Ürünler</a></li>
                                 <li><a href="hakkimizda.php">Hakkımızda</a></li>
                                 <li><a href="iletisim.php">İletisim</a></li>
                                 
                                 <li style="margin-left: 25px;"><a href="kullanici_login/index.php"><i class="fas fa-sign-in-alt"></i>Giriş Yap </a></li>
                      
                              </ul>
                           </nav>
                        </div>
                     </div>
                     <?php } ?>

                 </div>
               </div>
            </div>
         </div>
         <!-- end header inner -->

         <?php
                       if(isset($_SESSION["Kullanici"])){ ?>
                                <div class="header-icons">
                                     <a href="Sepetim.php"><i class="fas fa-shopping-basket"></i></a>
                                     <a href="KullaniciCikis.php"> <i class="fas fa-door-open"> </i><span class="d-none d-md-inline-block"> &nbsp;Çıkış</span></a>
                                     <a href="KullaniciProfil.php"> <i class="fas fa-user-alt"> </i><span class="d-none d-md-inline-block">&nbsp;<?php echo $KullaniciAd ?></span></a>
                        </div>
               <?php }