<?php
include 'header.php';
?>

          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell--span-12">
                <div class="mdc-card">
                  <h6 class="card-title">Form Tambah Product</h6>
                  <div class="template-demo">
                    <form method="post" enctype="multipart/form-data">
                    <div class="mdc-layout-grid__inner">
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <?php
                            $random_id = rand(10000000, 99999999); // 8 digit angka
                          ?>
                          <input type="hidden" name="id_product" value="<?= $random_id; ?>">
                          <input class="mdc-text-field__input" id="text-field-hero-input" type="text" value="<?= $random_id; ?>" name="id_product" disabled>
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              <label for="text-field-hero-input" class="mdc-floating-label">ID Produk</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                      </div>
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <input class="mdc-text-field__input" id="text-field-hero-input" type="text" name="nama_product" required>
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              <label for="text-field-hero-input" class="mdc-floating-label">Nama Produk</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                      </div>
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <input class="mdc-text-field__input" id="text-field-hero-input" type="text" name="deskripsi" required>
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              <label for="text-field-hero-input" class="mdc-floating-label">Deskripsi Produk</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                      </div>
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-trailing-icon">
                          <i class="material-icons mdc-text-field__icon">visibility</i>
                          <input class="mdc-text-field__input" id="text-field-hero-input" type="text" name="harga" required>
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              <label for="text-field-hero-input" class="mdc-floating-label">Harga</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                      </div>
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <div class="mdc-select demo-width-class" data-mdc-auto-init="MDCSelect">
                            
                            <input type="hidden" name="id_layanan">
                            <i class="mdc-select__dropdown-icon"></i>
                            <div class="mdc-select__selected-text"></div>

                            <div class="mdc-select__menu mdc-menu-surface demo-width-class">
                              <ul class="mdc-list">
<?php
$no = 1;
$query = mysqli_query($conn, "SELECT * FROM layanan");
while ($data = mysqli_fetch_assoc($query)) {
?>
                                  <li class="mdc-list-item" data-value="<?= $data['id_layanan']; ?>" role="option">
                                    <?= $data['jenis_layanan']; ?>
                                  </li>
<?php } ?>
                              </ul>
                            </div>

                            <span class="mdc-floating-label">Jenis Layanan</span>
                            <div class="mdc-line-ripple"></div>

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
                      <a href="product.php"><button class="mdc-button mdc-button--unelevated filled-button--secondary mx-10" style="width:10%"> Kembali </button></a>

                      <button type="submit" name="simpan" class="mdc-button mdc-button--unelevated filled-button--success mx-10" style="width:10%"> Tambah Produk </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
<?php
if (isset($_POST['simpan'])) {
    $id_product     = $_POST['id_product'];
    $id_layanan     = $_POST['id_layanan'];
    $nama_product   = $_POST['nama_product'];
    $deskripsi      = $_POST['deskripsi'];
    $harga          = $_POST['harga'];

    $folder = "uploads/";
    $file_name = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    $ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    $allowed = ['jpg', 'jpeg', 'png', 'gif'];

    if (in_array($ext, $allowed)) {
        $nama_baru = uniqid() . "." . $ext;
        if (move_uploaded_file($tmp, $folder . $nama_baru)) {
            $query = mysqli_query($conn, "INSERT INTO product 
                (id_product, id_layanan, nama_product, deskripsi, harga, foto) 
                VALUES 
                ('$id_product', '$id_layanan', '$nama_product', '$deskripsi', '$harga', '$nama_baru')");

            if ($query) {
                echo "<script>alert('Data berhasil disimpan');window.location='product.php';</script>";
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