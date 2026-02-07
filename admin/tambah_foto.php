<?php
include 'header.php';
?>

          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell--span-12">
                <div class="mdc-card">
                  <h6 class="card-title">Form Tambah Gambar</h6>
                  <div class="template-demo">
                    <form method="post" enctype="multipart/form-data">
                    <div class="mdc-layout-grid__inner">
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <?php
                            $random_id = rand(10000000, 99999999); // 8 digit angka
                          ?>
                          <input type="hidden" name="id_foto" value="<?= $random_id; ?>">
                          <input class="mdc-text-field__input" id="text-field-hero-input" type="text" value="<?= $random_id; ?>" name="id_foto" disabled>
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              <label for="text-field-hero-input" class="mdc-floating-label">ID User</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                      </div>
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <input class="mdc-text-field__input" id="text-field-hero-input" type="text" name="nama" required>
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              <label for="text-field-hero-input" class="mdc-floating-label">Nama</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                      </div>
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--file">
                          <input type="file" name="foto" class="mdc-text-field__input" id="foto-input" accept="image/*" required>
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                              <div class="mdc-notched-outline__notch">
                                <label for="foto-input" class="mdc-floating-label">Foto</label>
                              </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </br></br>
                      <a href="galery.php"><button class="mdc-button mdc-button--unelevated filled-button--secondary mx-10" style="width:10%"> Kembali </button></a>

                      <button type="submit" name="simpan" class="mdc-button mdc-button--unelevated filled-button--success mx-10" style="width:10%"> Tambah Foto </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
<?php
if (isset($_POST['simpan'])) {
    $id_foto  = $_POST['id_foto'];
    $nama     = $_POST['nama'];

    $folder = "uploads/";
    $file_name = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    $ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    $allowed = ['jpg', 'jpeg', 'png', 'gif'];

    if (in_array($ext, $allowed)) {
        $nama_baru = uniqid() . "." . $ext;
        if (move_uploaded_file($tmp, $folder . $nama_baru)) {
            $query = mysqli_query($conn, "INSERT INTO galery 
                (id_foto, nama, foto) 
                VALUES 
                ('$id_foto', '$nama', '$nama_baru')");

            if ($query) {
                echo "<script>alert('Data berhasil disimpan');window.location='galery.php';</script>";
            } else {
                echo "<script>alert('Gagal menyimpan data ke database');</script>";
            }
        } else {
            echo "<script>alert('Upload foto gagal');</script>";
        }
    } else {
        echo "<script>alert('Format file tidak didukung. Gunakan JPG, PNG, atau GIF');</script>";
    }
}
?>

        
 <?php
include 'footer.php';
?>