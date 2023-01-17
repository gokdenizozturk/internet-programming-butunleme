<?php
require_once '../db.php';
require_once 'include/header.php';

if (isset($_GET['id'])) {
    $film_id = $_GET['id'];
    $film = filmGetir($film_id);
} else {
    echo "<script>window.location.href='index.php'</script>";
    exit;
}
?>


<?php

if(isset($_POST['submit'])){
    $filmAd = $_POST['filmAd'];
    $filmPuan = $_POST['filmPuan'];
    $filmCikisYili = $_POST['filmCikisYili'];
    $filmKategori = $_POST['filmKategori'];
    $filmFoto = $_FILES['filmFoto'];

    $filmFotoAd = $filmFoto['name'];
    $filmFotoTmp = $filmFoto['tmp_name'];
    $filmFotoBoyut = $filmFoto['size'];
    $filmFotoTip = $filmFoto['type'];

    move_uploaded_file($filmFotoTmp, "../assets/images/uploads/$filmFotoAd");



    





   

    echo $filmAd;
    echo $filmPuan;
    echo $filmCikisYili;
    echo $filmKategori;

    guncelleFilm($_GET['id'], $filmAd, $filmKategori, $filmCikisYili, $filmPuan, $filmFotoAd);
   
    echo ("<script> window.location.href='index.php' </script>");
}


?>



<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-body p-0">
            <div class="card p-3 p-lg-4">
                <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center text-md-center mb-4 mt-md-0">
                    <h1 class="mb-0 h4">Ürün Düzenle</h1>
                </div>
                <form action="" method="post" class="mt-4" enctype="multipart/form-data">
                    <!-- Form -->
                    <div class="form-group mb-4">
                        <label for="email">Film Adı</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">
                            </span>
                            <input type="text" name="filmAd" class="form-control" value="<?php echo $film['ad']  ?>" placeholder="Film Adı" id="text" autofocus required>
                        </div>
                    </div>

                    <div class="row align-items-center">
                        <div class="col-md-6 mb-3">
                            <label>Film Puani</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                </span>
                                <input type="number" name="filmPuan" value="<?php echo $film['puan'] ?>" class="form-control" placeholder="Film Puani" required>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Film Cikis Yili</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                </span>
                                <input type="number" name="filmCikisYili" value="<?php echo $film['cikis_yili'] ?>" class="form-control" placeholder="Ürün Stok" required>
                            </div>
                        </div>
                    </div>



                    <select class="form-select mb-0" id="kategori" name="filmKategori" aria-label="Kategori">
                        <option value="0">Kategori Seçiniz</option>
                        <?php
                        $kategoriler = getirKategoriler();
                        foreach ($kategoriler as $kategori) {
                            if ($kategori['id'] == $film['kategori']) {
                                echo "<option selected value='" . $kategori['id'] . "' selected>" . $kategori['Ad'] . "</option>";
                                continue;
                            }
                            echo "<option value='" . $kategori['id'] . "'>" . $kategori['Ad'] . "</option>";
                        }
                        ?>
                    </select><br />

                    <div class="form-group mb-4">
                        <div class="input-group">

                            <div class="d-flex align-items-center">
                                <input type="file" name="filmFoto" accept="image/*">
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="d-grid">
            <button type="submit" name="submit" class="btn btn-gray-800">Duzenle</button>


        </div>
        </form>
        <div class="mt-3 mb-4 text-center">
            <span class="fw-normal"></span>
        </div>


    </div>
</div>
</div>

