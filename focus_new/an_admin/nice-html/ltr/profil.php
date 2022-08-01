<?php include 'header.php'; 

$sql_adminSorgu=$db->prepare("SELECT * from admin");
$sql_adminSorgu->execute();
$result_adminSorgu=$sql_adminSorgu->fetch(PDO::FETCH_ASSOC);

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
                        <h4 class="page-title">Profil</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Anasayfa</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Profil</li>
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
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3">
                        <div class="card">
                            <div class="card-body">
                                <center class="mt-4"> <img src="../../assets/images/users/<?php echo $result_adminSorgu['admin_resim']; ?>"
                                        class="rounded-circle" width="150" />
                                    <h4 class="card-title mt-2"><?php echo $result_adminSorgu['admin_adSoyad']; ?></h4>
                                    <h6 class="card-subtitle">Admin</h6>
                                    
                                </center>
                            </div>
                            <div>
                                <hr>
                            </div>
                            <div class="card-body"> <small class="text-muted"></small>
                                <h6><?php echo $result_adminSorgu['admin_mail']; ?></h6> <small class="text-muted pt-4 db">Phone</small>
                                <h6><?php echo $result_adminSorgu['admin_tel'] ?></h6> 
                                
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9">
                        <div class="card">
                            <div class="card-body">
                                <<form class="form-horizontal mt-4" action="../../netting/islem.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label class="col-md-12">Ad ve Soyad</label>
                                        <div class="col-md-12">
                                            <input type="text" name="admin_ad" placeholder="" class="form-control form-control-line" value="<?php echo $result_adminSorgu['admin_adSoyad']; ?>"> 
                                                
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-12">Kullanıcı Ad</label>
                                        <div class="col-md-12">
                                            <input type="text" name="admin_kullaniciAd" placeholder="" value="<?php echo $result_adminSorgu['admin_kullaniciAd']; ?>" 
                                                class="form-control form-control-line"> 
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12">Şifre</label>
                                        <div class="col-md-12">
                                            <input type="password" name="admin_sifre" value="" required 
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Mail Adresi</label>
                                        <div class="col-md-12">
                                            <input type="email" name="admin_mail" placeholder="" value="<?php echo $result_adminSorgu['admin_mail']; ?>" 
                                                class="form-control form-control-line"> 
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12">Admin Tel</label>
                                        <div class="col-md-12">
                                            <input type="text" name="admin_tel" placeholder="" value="<?php echo $result_adminSorgu['admin_tel']; ?>" 
                                                class="form-control form-control-line"> 
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12">Admin Resim</label>
                                        <div class="col-md-12">
                                            <input id="inputFile" class="form-control form-control-line" type="file" class="form-control" name="admin_resim">
                                            
                                        </div>
                                    </div>
                                    
                                  
                                    <div class="form-group" style="margin-top:25px;">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success text-white" name="btn_updateProfil">Update Profile</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
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