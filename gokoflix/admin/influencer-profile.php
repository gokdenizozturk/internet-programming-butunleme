<?php
require_once 'include/header.php';
require_once '../db.php';
?>

<div class="dashboard-wrapper">
    <div class="influence-profile">
        <div class="container-fluid dashboard-content ">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h3 class="mb-2">Admin Profil</h3>
                        <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                               
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- content -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- ============================================================== -->
                <!-- profile -->
                <!-- ============================================================== -->
                <div class="col-xl-3 col-lg-3 col-md-5 col-sm-12 col-12">
                    <!-- ============================================================== -->
                    <!-- card profile -->
                    <!-- ============================================================== -->
                    <div class="card">
                        <div class="card-body">
                            <div class="user-avatar text-center d-block">
                                <img src="../assets/images/John-Wick-3.jpg" alt="User Avatar" class="rounded-circle user-avatar-xxl">
                            </div>
                            <div class="text-center">
                                <h2 class="font-24 mb-0"><?php print_r(adminGetir()[0]['adSoyad']) ?></h2>
                                <p>Admin</p>
                            </div>
                        </div>
                        <div class="card-body border-top">
                            <h3 class="font-16">Iletisim</h3>
                            <div class="">
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><i class="fas fa-fw fa-envelope mr-2"></i><?php print_r(adminGetir()[0]['kullAdi']) ?>@gmail.com</li>
                                    <li class="mb-0"><i class="fas fa-fw fa-phone mr-2"></i>(900) 123 4567</li>
                                </ul>
                            </div>
                        </div>
                       
                        <div class="card-body border-top">
                            <h3 class="font-16">Sosyal Medya</h3>
                            <div class="">
                                <ul class="mb-0 list-unstyled">
                                    <li class="mb-1"><a href="#"><i class="fab fa-fw fa-facebook-square mr-1 facebook-color"></i>fb.me/gokdeniz</a></li>
                                    <li class="mb-1"><a href="#"><i class="fab fa-fw fa-twitter-square mr-1 twitter-color"></i>twitter.com/gokdeniz</a></li>
                                    <li class="mb-1"><a href="#"><i class="fab fa-fw fa-instagram mr-1 instagram-color"></i>instagram.com/gokdeniz</a></li>
                                    <li class="mb-1"><a href="#"><i class="fas fa-fw fa-rss-square mr-1 rss-color"></i>gokdeniz.com/blog</a></li>
                                    <li class="mb-1"><a href="#"><i class="fab fa-fw fa-pinterest-square mr-1 pinterest-color"></i>pinterest.com/gokdeniz</a></li>
                                    <li class="mb-1"><a href="#"><i class="fab fa-fw fa-youtube mr-1 youtube-color"></i>youtube/gokdeniz</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end card profile -->
                    <!-- ============================================================== -->
                </div>
                <!-- ============================================================== -->
                <!-- end profile -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- campaign data -->
                <!-- ============================================================== -->
                <div class="col-xl-9 col-lg-9 col-md-7 col-sm-12 col-12">
                    <!-- ============================================================== -->
                    <!-- campaign tab one -->
                    <!-- ============================================================== -->
                    <div class="influence-profile-content pills-regular">
                       
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-campaign" role="tabpanel" aria-labelledby="pills-campaign-tab">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h1 class="mb-1"><?php print_r(kacKullaniciVar()['count(*)']) ?></h1>
                                                <p>Admin Sayisi</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h1 class="mb-1"><?php print_r(kacFilmVar()['count(*)']) ?></h1>
                                                <p>Film Sayisi</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h1 class="mb-1"><?php print_r(kacKategoriVar()['count(*)']) ?></h1>
                                                <p>Kategori Sayisi</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h1 class="mb-1"><?php print_r(ortalamaFilmPuan()['AVG(puan)']) ?></h1>
                                                <p>Puan Ortalamasi</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end campaign tab one -->
                    <!-- ============================================================== -->
                </div>
                <!-- ============================================================== -->
                <!-- end campaign data -->
                <!-- ============================================================== -->
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end content -->
    <!-- ============================================================== -->
   
    <!-- ============================================================== -->
    <!-- end footer -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- end wrapper -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- end main wrapper -->
<!-- ============================================================== -->
<!-- Optional JavaScript -->
<!-- jquery 3.3.1  -->
<script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<!-- bootstap bundle js -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<!-- slimscroll js -->
<script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
<!-- main js -->
<script src="assets/libs/js/main-js.js"></script>

</body>

</html>