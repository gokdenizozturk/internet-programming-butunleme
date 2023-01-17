<?php

require_once '../db.php';
require_once 'include/header.php';

?>
   <?php

if(isset($_POST['sil'])){
    $id = $_POST['id'];
    
    if(silFilm($id)){
        header("Location: index.php");
    }
}

?>

<!-- ============================================================== -->
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                            
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ecommerce-widget">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Filmler</h5>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0">id</th>
                                                <th class="border-0">Foto</th>
                                                <th class="border-0">Film Adi</th>
                                                <th class="border-0">Kategori</th>
                                                <th class="border-0">Puan</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            foreach (getirFilmler() as $film) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $film['id'] ?></td>
                                                    <td>
                                                        <div class="m-r-10"><img src="../assets/images/uploads/<?php echo $film['foto'] ?>" alt="user" class="rounded" width="45"></div>
                                                    </td>
                                                    <td><?php echo $film['ad'] ?></td>
                                                    <td><?php

                                                        foreach (getirKategoriler() as $kategori) {
                                                            if ($kategori["id"] == $film['kategori']) {
                                                                echo $kategori["Ad"];
                                                            }
                                                        }
                                                        ?>
                                                    </td>

                                                    <td><?php echo $film['puan'] ?></td>

                                                    <td> <a class="btn btn-warn" href="film-duzenle.php?id=<?php echo $film['id']  ?>" > Duzenle </td>
                                                    <td> 
                                                        <form action="" method="post">
                                                            <input type="hidden" name="id" value="<?php echo $film['id'] ?>">
                                                            <input type="submit" class="btn btn-danger" name="sil" value="Sil">
                                                        </form>
                                                    </td>

                                                 
                                                    
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>








                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    
    <!-- ============================================================== -->
    <!-- end footer -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- end wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- end main wrapper  -->
<!-- ============================================================== -->
<!-- Optional JavaScript -->
<!-- jquery 3.3.1 -->
<script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<!-- bootstap bundle js -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<!-- slimscroll js -->
<script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
<!-- main js -->
<script src="assets/libs/js/main-js.js"></script>
<!-- chart chartist js -->
<script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
<!-- sparkline js -->
<script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
<!-- morris js -->
<script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
<script src="assets/vendor/charts/morris-bundle/morris.js"></script>
<!-- chart c3 js -->
<script src="assets/vendor/charts/c3charts/c3.min.js"></script>
<script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
<script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
<script src="assets/libs/js/dashboard-ecommerce.js"></script>

</body>

</html>