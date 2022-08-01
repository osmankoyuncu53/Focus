<?php include 'header.php'; 
    
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
                        <h4 class="page-title">Ürünleri Listele</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Anasayfa</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Ürünleri Listele</li>
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
                        <div class="card">
                            
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">id</th>
                                            <th scope="col">Ürün Adı</th>
                                            <th scope="col">Ürün Fiyatı</th>
                                            <th scope="col">Urun Cinsiyet</th>
                                            <th scope="col">Urun Beden</th>
                                            <th scope="col">Urun Resim</th>
                                            <th scope="col">Urun Miktar</th>
                                            <th scope="col">Satış Miktar</th>
                                            <th scope="col">Durum 1</th>
                                            <th scope="col">Durum 2</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php while($result_urunListele=$sql_urunListele->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
                                            <th scope="row"><?php echo $result_urunListele['urun_id']; ?></th>
                                            <td><?php echo $result_urunListele['urun_ad']; ?></td>
                                            <td><?php echo $result_urunListele['urun_fiyat']; ?></td>
                                            <td><?php echo $result_urunListele['urun_cinsiyet']; ?></td>
                                            <td><?php echo $result_urunListele['urun_beden']; ?></td>
                                            <td><?php echo $result_urunListele['urun_resim']; ?></td>
                                            <td><?php echo $result_urunListele['urun_miktar']; ?></td>
                                            <td><?php echo $result_urunListele['satis_miktari']; ?></td>
                                            
                                            <td>
                                                <a href="urun_guncelle.php?urun_id=<?php echo $result_urunListele['urun_id'] ?>">
                                                    <button type="button" class="btn btn-primary btn-floating">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                </a>
                                            </td>

                                            <td>
                                                <a href="../../netting/islem.php?urun_id=<?php echo $result_urunListele['urun_id'];?>&btn_urunSil">
                                                <button class="btn btn-primary btn-floating">
                                                    <i class="fas fa-trash"> </i>
                                                </button>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                    
                                </table>
                            </div>
                     </div></div></div></div>
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