<?php
include 'header.php';
?>

          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell--span-12">
                <div class="mdc-card">
                  <h6 class="card-title">Form Tambah Layanan</h6>
                  <div class="template-demo">
                    <form method="post" enctype="multipart/form-data">
                    <div class="mdc-layout-grid__inner">
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <?php
                            $random_id = rand(10000000, 99999999); // 8 digit angka
                          ?>
                          <input type="hidden" name="id_layanan" value="<?= $random_id; ?>">
                          <input class="mdc-text-field__input" id="text-field-hero-input" type="text" value="<?= $random_id; ?>" name="id_layanan" disabled>
                        </div>
                      </div>
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <input class="mdc-text-field__input" id="text-field-hero-input" type="text" name="jenis_layanan" required>
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              <label for="text-field-hero-input" class="mdc-floating-label">Jenis Layanan</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </br></br>
                      <a href="account.php"><button class="mdc-button mdc-button--unelevated filled-button--secondary mx-10" style="width:10%"> Kembali </button></a>

                      <button type="submit" name="simpan" class="mdc-button mdc-button--unelevated filled-button--success mx-10" style="width:10%"> Tambah Layanan </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $id_layanan         = $_POST['id_layanan'];
    $jenis_layanan      = $_POST['jenis_layanan'];

    $query = mysqli_query($conn, "INSERT INTO layanan 
        (id_layanan, jenis_layanan) 
        VALUES 
        ('$id_layanan', '$jenis_layanan')");

    if ($query) {
        echo "<script>alert('Data berhasil di tambah');window.location='layanan.php';</script>";
    } else {
        echo "<script>alert('Gagal menyimpan data ke database');</script>";
    }
}
?>


        
 <?php
include 'footer.php';
?>