<?php include "header.php"; 
?>
</div></div>
   	<section >
      	<div class="bannen_inner">
            <!-- Page Header Start -->
				<div class="container-fluid bg-secondary mb-5" style="width:100%;">
					<div class="d-flex flex-column align-items-center justify-content-center" style="min-height:300px">
					    <h1 class="font-weight-semi-bold text-uppercase mb-3">URUNLER</h1>
					        <div class="d-inline-flex">
					            <p class="m-0"><a href="">Anasayfa</a></p>
					            <p class="m-0 px-2">-</p>
					            <p class="m-0">Urunler</p>
					        </div>
					</div>
				</div>
        </div>
    <section>           

    <!-- service end -->


    <!-- Shop Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <!-- Shop Sidebar Start -->
            <div class="col-lg-3 col-md-12">
                <!-- Price Start -->
                <div class="border-bottom mb-4 pb-4">
                    <h5 class="font-weight-semi-bold mb-4">Fiyata Göre Listele</h5>
                    <form action="search_filter.php" method="POST">
                        <input type="text" name="txt_min" placeholder="Min" style="width: 70px;">
                        <input type="text" name="txt_max" placeholder="Max" style="width: 70px;">
                           
                        <button name="btn_fiyatAralik" type="submit">Filtrele</button>
                    </form>
                </div>
                <!-- Price End -->

                <!-- Cinsiyet Start -->
                <div class="border-bottom mb-4 pb-4">
                    <h5 class="font-weight-semi-bold mb-4">Kategoriye Göre Listele</h5>
                    <form>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <a href="filtre2.php?kategori_id=11">
                                <label for="color-1">Erkek</label> 
                            </a>
                        </div>

                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <a href="filtre2.php?kategori_id=12">
                                <label for="color-1">Kadın</label> 
                            </a>
                        </div>

                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <a href="filtre2.php?kategori_id=13">
                                <label for="color-1">Çocuk</label> 
                            </a>
                        </div>

                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <a href="filtre2.php?kategori_id=14">
                                <label for="color-1">Aksesuar</label> 
                            </a>
                        </div>

                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <a href="filtre2.php?kategori_id=15">
                                <label for="color-1">Çanta</label> 
                            </a>
                        </div>

                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <a href="filtre2.php?kategori_id=16">
                                <label for="color-1">Ayakkabı</label> 
                            </a>
                        </div>

                    </form>
                </div>
                <!-- Cinsiyet End -->

                
            </div>

            <!-- Shop Sidebar End -->


            <!-- Shop Product Start -->
            <div class="col-lg-9 col-md-12">
                <div class="row pb-3">
                    <div class="col-12 pb-1">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div>
                            <form action="search_filter.php" method="POST">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Ürün ara" name="txt_urunAdi">
                                    <div class="input-group-append">
                                        <button type="submit" name="btn_ara" class="btn btn-primary btn-floating">
                                            <i class="fas fa-search"> </i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                             </div>
                             <div class="dropdown ml-4">
                                <button class="btn border dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                            Sırala
                                        </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">
                                    <a class="dropdown-item" href="#">Sırala</a>
                                    <a class="dropdown-item" href="#">A-Z</a>
                                    <a class="dropdown-item" href="#">Z-A</a>
                                </div>
                            </div>
                        </div>
                    </div>

    <!-- Products Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Ürünler</span></h2>
        </div>
        <div class="row px-xl-5 pb-3">
            
            <?php while($result_listele=$sql_sorguListele->fetch(PDO::FETCH_ASSOC)) {  ?>

                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">

                        <form action="detay.php?urun_id=<?php echo $result_listele['urun_id']?>" method="POST">

                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img class="img-fluid w-100" src="img/<?php echo $result_listele['urun_resim']; ?>" alt="">
                                </div>
                                
                                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                    <h6 class="text-truncate mb-3"><?php echo $result_listele['urun_ad']; ?></h6>
                                        <div class="d-flex justify-content-center">
                                            <h6>$<?php echo $result_listele['urun_fiyat']; ?></h6>
                                        </div>
                                </div>
                                        
                                <div class="card-footer justify-content-between bg-light border" style="text-align: center;">
                                    <a href="detay.php?urun_id=<?php echo $result_listele['urun_id']?>" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1" name="btn_urunDetay"></i>Detaylı Gör</a>
                                </div>

                                
                            </div>

                        </form>
                </div>
               
            <?php } ?>

        </div>
    </section>

<?php include "footer.php"; ?>



