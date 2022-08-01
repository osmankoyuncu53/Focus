<?php include 'header.php'; 

$komut=$db->prepare("SELECT * FROM urunler where urun_id=:id");
$komut->execute(array("id"=>$_GET["urun_id"]));
$oku=$komut->fetch(PDO::FETCH_ASSOC);
?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Ürün Güncelle</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Anasayfa</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Ürün Güncelle</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card card-body">
                            <h4 class="card-title">Varsayılan Güncelleme Tablosu</h4>
                            <form class="form-horizontal mt-4" action="../../netting/islem.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Ürün Adı <span class="help"></span></label>
                                    <input type="text" class="form-control" name="txt_urunaAdi" placeholder="Ürün Adı Giriniz..."
                                    value="<?php echo $oku['urun_ad']; ?>"> 
                                </div>
                                <div class="form-group">
                                    <label>Ürün Fiyatı <span class="help"> </span></label>
                                    <input type="text" id="example-email" name="txt_urunFiyati" class="form-control"
                                        placeholder="Ürün Fiyatını Giriniz..." value="<?php echo $oku['urun_fiyat']; ?>">
                                </div>

                                <div class="form-group">
                                    <label>Ürün Cinsiyet</label>
                                    <select name="txt_urunCinsiyet" class="form-select shadow-none col-12" id="inlineFormCustomSelect">
                                        <option selected><?php echo $oku['urun_cinsiyet']; ?></option>
                                        <option value="Erkek">Erkek</option>
                                        <option value="Kadın">Kadın</option>
                                        <option value="Cocuk">Çocuk</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Ürün Beden</label>
                                    <select class="form-select shadow-none col-12" id="inlineFormCustomSelect" name="txt_urunBeden">
                                        <option selected><?php echo $oku['urun_beden']; ?></option>
                                        <option value="s">S</option>
                                        <option value="m">M</option>
                                        <option value="l">L</option>
                                        <option value="xl">XL</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Ürün Resmi</label>
                                    <input id="inputFile" type="file" class="form-control" name="img_urunResim">
                                </div>

                                <div class="form-group">
                                    <label>Ürün Açıklaması</label>
                                    <textarea name="txt_urunAciklamasi" class="form-control" rows="5" placeholder="Ürünün Açıklamasını Giriniz..."><?php echo $oku['urun_aciklama']; ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Ürün Miktarı</label>
                                    <input type="number" class="form-control" name="txt_urunMiktar" value="<?php echo $oku['urun_miktar']; ?>">
                                </div>

                                <div class="form-group">
                                    <label>Ürün Kategorisi</label>
                                    <select class="form-select shadow-none col-12" id="inlineFormCustomSelect" name="txt_urunKategori">
                                        <option selected><?php echo $oku['kategori_id']; ?></option>
                                        <option value="11">Erkek Giyim</option>
                                        <option value="12">Kadın Giyim</option>
                                        <option value="13">Çocuk Giyim</option>
                                        <option value="14">Aksesuar</option>
                                        <option value="15">Çanta</option>
                                        <option value="16">Ayakkabı</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Ürün Miktarı</label>
                                    <input type="text" class="form-control" name="txt_satisMiktari" value="<?php echo $oku['satis_miktari']; ?>">
                                </div>

                                
                                    <input type="hidden" name="urun_id" value="<?php echo $oku['urun_id'];?>">
                                    <button class="form-control" name="btn_urunGuncelle" style="background-color:gray;" type="submit">Ürün Güncelle</button>
                            
                            </form>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Nice admin. Designed and Developed by
                <a href="https://www.wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../dist/js/custom.min.js"></script>
</body>

</html>

<?php  ?>