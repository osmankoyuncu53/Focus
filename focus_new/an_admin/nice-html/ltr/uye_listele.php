<?php include 'header.php'; ?>
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
                        <h4 class="page-title">Üye Listele</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Anasayfa</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Üye Listele</li>
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
                                            <th scope="col">Ad Soyad</th>
                                            <th scope="col">Kullanıcı Adı</th>
                                            <th scope="col">Şifre</th>
                                            <th scope="col">Durum</th>
                                            <th scope="col">Mail_ID</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while($result_uyeListele=$sql_uyeListele->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
                                            <th scope="row"><?php echo $result_uyeListele['uye_adSoyad']; ?></th>
                                            <td><?php echo $result_uyeListele['uye_kullaniciAdi']; ?></td>
                                            <td><?php echo $result_uyeListele['uye_sifre']; ?></td>

                                            <?php if($result_uyeListele['uye_durum']==0){ ?>
                                            <td>
                                                <a href="../../netting/islem.php?uye_id=<?php echo $result_uyeListele['uye_id'];?>&btn_pasif">
                                                <button class="btn btn-primary btn-floating">
                                                    <i style="width: 30px;" class="fas fa-check"> </i>
                                                </button>
                                                </a>
                                            </td>
                                            <?php } else{ ?>
                                            <td>
                                                <a href="../../netting/islem.php?uye_id=<?php echo $result_uyeListele['uye_id'];?>&btn_aktif">
                                                <button class="btn btn-primary btn-floating">
                                                    <i style="width: 30px;" class="fas fa-times"> </i>
                                                </button>
                                                </a>
                                            </td>
                                            <?php } ?>

                                            <td><?php echo $result_uyeListele['mail_id']; ?></td>
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