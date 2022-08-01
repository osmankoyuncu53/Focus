<?php include "header.php"; 
      include "netting/islem.php";
?>

      <section >
      	<div class="bannen_inner">
            <div class="container">
               <!--Slider-->
                        <div id="header-carousel" class="carousel slide" data-ride="carousel">
                    		<div class="carousel-inner">
                        		<div class="carousel-item active" style="height: 410px;">
                            		<img class="img-fluid" src="img/carousel-1.jpg" alt="Image">
                            		<div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                		<div class="p-3" style="max-width: 700px;">
                                    		<h4 class="text-light text-uppercase font-weight-medium mb-3">10% Off Your First Order</h4>
                                    		<h3 class="display-4 text-white font-weight-semi-bold mb-4">Fashionable Dress</h3>
                                    		<a href="" class="btn btn-light py-2 px-3">Shop Now</a>
                                		</div>
                            		</div>
                        		</div>
                        <div class="carousel-item" style="height: 410px;">
                            <img class="img-fluid" src="img/carousel-2.jpg" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h4 class="text-light text-uppercase font-weight-medium mb-3">10% Off Your First Order</h4>
                                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">Reasonable Price</h3>
                                    <a href="" class="btn btn-light py-2 px-3">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-prev-icon mb-n2"></span>
                        </div>
                    </a>
                    
                    <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-next-icon mb-n2"></span>
                        </div>
                    </a>
                </div>
            </div>
                        <!--Slider End-->
        </div>
       </div>
     </div>
    </div>
    </section>
	</header>
    <!-- banner end -->
    <!-- choose start -->
    <div id="about" class="choose_section">
    	<div class="container">
    		<div class="col-sm-12">
    			<h1 class="choose_text">En Popüler Ürünler <span class="color">Burada!</span></h1>
    			<p class="lorem_text">Ayın En Çok Satan Ürünlerin <b>Kategorileri Aşağıda Mevcut !!</b></p>
    		</div>
    	</div>
    </div>
    <div class="choose_section_2">  
    	<div class="container">
    	    <div class="row">
    		    
                    <!-- Categories Start  burayı alacan anasayfa için -->
    <div style="margin-top: -45px;" class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
             <?php while($result_kategoriListele=$sql_kategoriListele->fetch(PDO::FETCH_ASSOC)) { ?>
            
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                    
                    <p class="text-right"> 
                         <?php echo $result_kategoriListele['total']; ?>
                    </p>
               
                    <a href="filtre.php?kategori_id=<?php echo $result_kategoriListele['kategori_id']; ?>" class="cat-img position-relative overflow-hidden mb-3">
                        <img class="img-fluid" src="img/<?php echo $result_kategoriListele['kategori_resim']; ?>" alt="">
                    </a>
                    <h5 class="font-weight-semi-bold m-0"><?php echo $result_kategoriListele['kategori_adi'];?></h5>
                
                </div>
            </div>
            <?php  }?>
        </div>
    </div>
    <!-- Categories End  -->
    			</div>
    	    </div>    		
    	</div>
    </div>
    <!-- choose start -->
    <!-- about start -->
    <div style="margin-top:-20px;" class="about_main layout_padding" >
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6">
    				<div class="images">
    					<img src="images/img-1.png" style="max-width: 100%;">
    				</div>
    			</div>
    			<div class="col-md-6">
    				<div class="right_section_main">
    					<h1 class="dolar_tetx" style="margin-top:10px;"><strong style="color: #2ba879;">lotus.com</strong></h1>
    					<h2 class="special_text">Sizin İçin En Avantajlı Teklifler Burada!</h2>
    					<p class="donec_text">Size daha iyi bir hizmet sunabilmek için çalışıyoruz. <br> <br>Lütfen bizi desteklemeyi unutmayın.<br></p>
    					<div class="right_aero"><img src="images/right-aerow.png"></div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
    <!-- about end -->

    <!-- Featured Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Quality Product</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                    <h5 class="font-weight-semi-bold m-0">Free Shipping</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">14-Day Return</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured End -->

    <!--2. Choose Start -->
    <div style="margin-top:-30px;" class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h1 class="choose_text"><span class="px-2">-Trend Ürünler-</span></h1>
        </div>
        <div class="row px-xl-5 pb-3">
            <?php while($result_top4Listele=$sql_top4Listele->fetch(PDO::FETCH_ASSOC)) { ?>

                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">

                        <form action="detay.php?urun_id=<?php echo $result_top4Listele['urun_id']?>" method="POST">

                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/<?php echo $result_top4Listele['urun_resim']; ?>" alt="">
                                </div>
                                
                                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                    <h6 class="text-truncate mb-3"><?php echo $result_top4Listele['urun_ad']; ?></h6>
                                        <div class="d-flex justify-content-center">
                                            <h6>$<?php echo $result_top4Listele['urun_fiyat']; ?></h6>
                                        </div>
                                </div>
                                        
                                <div class="card-footer justify-content-between bg-light border" style="text-align: center;">
                                    <a href="detay.php?urun_id=<?php echo $result_top4Listele['urun_id']?>" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1" name="btn_urunDetay"></i>Detaylı Gör</a>
                                </div>
                            </div>

                        </form>
                </div>
               
            <?php } ?>
        </div>
    </div>  
    <!--2. Choose End-->

    <!-- Vendor Start -->
<!-- Subscribe Start -->
    <div class="container-fluid bg-secondary my-5" style="background-color: #DAEAF1 !important">
        <div class="row justify-content-md-center py-5 px-xl-5" style="margin-top:-50px;">
            <div class="col-md-6 col-12 py-5">
                <div class="text-center mb-2 pb-2">
                    <h2 class="section-title px-5 mb-3"><span class="bg-secondary px-2">Takipte Kal</span></h2>
                    <p>Sizde en yeni fırsatlardan zamanında haberdar olmak ister misiniz?</p>
                </div>
                <form action="netting/islem.php" method="POST">
                    <div class="input-group">
                        <input type="email" name="txt_indexMail" class="form-control border-white p-4" placeholder="Email Goes Here">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-4" name="btn_aboneOl">Abone Ol</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Subscribe End -->

<?php include "footer.php"; ?>

