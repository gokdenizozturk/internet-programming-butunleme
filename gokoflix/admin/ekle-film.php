<?php
require_once 'include/header.php';
require_once '../db.php';

?>

<div class="dashboard-wrapper">
  <div class="row">
    <div class="col-12 col-xl-12">
      <div class="card card-body border-0 shadow mb-4">
        <h2 class="h5 mb-4">Film Ekle</h2>
        <form action="" method="post" enctype="multipart/form-data">
          <div class="col-12">
            <div class="card card-body border-0 shadow">
              <h2 class="h5 mb-4">Film Fotografi</h2>
              <div class="d-flex align-items-center">
                <div class="me-3">
                  <img class="rounded avatar-xl" id='urunresim' width="100px" height="100px" src="../assets/img/default-urun.png" ">
                </div>
                <div class="file-field">
                  <div class="d-flex justify-content-xl-center ms-xl-3">
                    <div class="d-flex">
                      <input type="file" name="filmFoto" accept="image/*" id='inpfile'>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div><br />
          <div class="row">

            <div class="col-md-6 mb-3">
              <div>

                <label>Film Adi</label>
                <input class="form-control" name="filmAd"type="text" placeholder="Urun Adi" required>
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <div>
                <label>Film Cikis Yili</label>
                <input class="form-control" name="filmYil" type="text" placeholder="Film Yili" required>
              </div>
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col-md-6 mb-3">
              <label>Puani</label>
              <div class="input-group">
                </span>
                <input class="form-control" name="filmPuan" type="number">
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="kategori">Kategori</label>

              <select class="form-select mb-0" id="kategori" name="kategori" aria-label="Kategori">
                <?php
                
                foreach (getirKategoriler() as $row) {

                  echo '<option value="' . $row['id'] . '">' . $row['Ad'] . '</option>';
                }
                
                ?>
              </select>
            </div>
          </div>
          <div class="col-md-12 mb-3">
            <div class="form-group">
              <input class="form-control btn-outline-indigo" name="submit" type="submit" placeholder="50" required>
            </div>
          </div>

        </form>

        <?php 
        if (isset($_POST['submit'])) {

          $filmAdi = $_POST['filmAd'];
          $filmYil = $_POST['filmYil'];
          $filmPuan = $_POST['filmPuan'];
          $kategori = $_POST['kategori'];

          print_r($_FILES['filmFoto']['size']);


          if ($_FILES['filmFoto']['size'] == 0) {
          } else {
            $urunfoto = basename($_FILES['filmFoto']['name']);
            $urunfoto_tmp = $_FILES['filmFoto']['tmp_name'];

            move_uploaded_file($urunfoto_tmp, "../assets/images/uploads/$urunfoto");
          }

          EkleFilm($filmAdi, $kategori, $filmYil, $filmPuan, $urunfoto);
       
        }

        ?>


      </div>

    </div>

  </div>



</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
  var imgavat = $('#urunresim');
  var inpfile = $('#inpfile');
  inpfile.on('change', function() {
    if (this.files[0]) {
      var reader = new FileReader();

      reader.readAsDataURL(this.files[0]);

      reader.onloadend = function() {
        imgavat.attr('src', reader.result);
      };
    }
  });
</script>



</div>
<script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<!-- bootstap bundle js -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<!-- slimscroll js -->
<script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
<!-- main js -->
<script src="assets/libs/js/main-js.js"></script>
</body>

</html>