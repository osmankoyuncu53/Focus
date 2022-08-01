<?php include "header.php"; 

$sql_sorguUrunDetayListele=$conn->prepare("SELECT * FROM urunler WHERE urun_id=:id");
$sql_sorguUrunDetayListele->execute(array('id'=>$_GET['urun_id']));
$result_detayListele=$sql_sorguUrunDetayListele->fetch(PDO::FETCH_ASSOC);

?>
</div>
   	<section >
      	<div class="bannen_inner">
            <!-- Page Header Start -->
				<div class="container-fluid bg-secondary mb-5" style="width:100%;">
					<div class="d-flex flex-column align-items-center justify-content-center" style="min-height:300px">
					    <h1 class="font-weight-semi-bold text-uppercase mb-3">DETAY</h1>
					        <div class="d-inline-flex">
					            <p class="m-0"><a href="">Urunler</a></p>
					            <p class="m-0 px-2">-</p>
					            <p class="m-0">Detay</p>
					        </div>
					</div>
				</div>
        </div>
    </section>



    <!-- Shop Detail Start -->
    <div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col-lg-5 pb-5">
                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner border">
                        <div class="carousel-item active">
                            <img class="w-100 h-100" src="img/<?php echo $result_detayListele['urun_resim']; ?>" alt="Image">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                        <i class="fa fa-2x fa-angle-left text-dark"></i>
                    </a>
                    <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                        <i class="fa fa-2x fa-angle-right text-dark"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-7 pb-5">
                <h3 class="font-weight-semi-bold"><?php echo $result_detayListele['urun_ad']; ?></h3>
                <div class="d-flex mb-3">
                    <div class="text-primary mr-2">
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star-half-alt"></small>
                        <small class="far fa-star"></small>
                    </div>
                    <small class="pt-1">(50 Reviews)</small>
                </div>
                <h3 class="font-weight-semi-bold mb-4"><?php echo $result_detayListele['urun_fiyat']; ?>$</h3>
                <p class="mb-4"><?php echo $result_detayListele['urun_aciklama']; ?></p>
                <div class="d-flex mb-3">
                     
                    
                </div>
                
                <div class="d-flex align-items-center mb-4 pt-2">
                    <div class="input-group quantity mr-3" style="width: 130px;">
                        <div class="input-group-btn">
                            <button class="btn btn-primary btn-minus" >
                            <i class="fa fa-minus"></i>
                            </button>
                        </div>
                        <input type="text" class="form-control bg-secondary text-center" value="1">
                        <div class="input-group-btn">
                            <button class="btn btn-primary btn-plus">
                                <i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                
                <form action="netting/islem.php" method="POST">
                    <input type="hidden" name="urun_id" value="<?php echo $result_detayListele['urun_id'];?>">
                    <button class="btn btn-primary px-3" name="btn_satinAl"><i class="fa fa-shopping-cart mr-1"></i>Satın Al</button>
                 
                </form>
                </div>
                <div class="d-flex pt-2">
                    <p class="text-dark font-weight-medium mb-0 mr-2">Share on:</p>
                    <div class="d-inline-flex">
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-pinterest"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!-- Shop Detail End -->


<?php include "footer.php"; ?>



	