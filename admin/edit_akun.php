<?php
include 'header.php';
?>
<?php
include 'koneksi.php';

// Ambil data berdasarkan id
$id_user = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM user WHERE id_user='$id_user'"));
?>

          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell--span-12">
                <div class="mdc-card">
                  <h6 class="card-title">Form Edit Akun</h6>
                  <div class="template-demo">
                    <form method="post" enctype="multipart/form-data">
                    <div class="mdc-layout-grid__inner">
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <input type="hidden" name="id_user" value="<?= $data['id_user']; ?>">
                          <input class="mdc-text-field__input" id="text-field-hero-input" type="text" name="id_user" value="<?= $data['id_user']; ?>" disabled>
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
                          <input class="mdc-text-field__input" id="text-field-hero-input" type="text" name="nama" value="<?= $data['nama']; ?>" >
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
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <input class="mdc-text-field__input" id="text-field-hero-input" type="text" name="username" value="<?= $data['username']; ?>" >
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              <label for="text-field-hero-input" class="mdc-floating-label">Username</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                      </div>
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-trailing-icon">
                          <i class="material-icons mdc-text-field__icon">visibility</i>
                          <input class="mdc-text-field__input" id="text-field-hero-input" type="text" name="password" value="<?= $data['password']; ?>" >
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              <label for="text-field-hero-input" class="mdc-floating-label">Password</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                      </div>
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined">
                          <input class="mdc-text-field__input" id="text-field-hero-input" type="text" name="email" value="<?= $data['email']; ?>" >
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                              <label for="text-field-hero-input" class="mdc-floating-label">Email</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                      </div>
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--file">
                          <input type="file" name="foto" class="mdc-text-field__input" id="foto-input" accept="image/*">
                          <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                              <div class="mdc-notched-outline__notch">
                                <label for="foto-input" class="mdc-floating-label">Foto Baru</label>
                              </div>
                            <div class="mdc-notched-outline__trailing"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </br></br>
                      <a href="account.php"><button class="mdc-button mdc-button--unelevated filled-button--secondary mx-10" style="width:10%"> Kembali </button></a>

                      <button type="submit" name="update" class="mdc-button mdc-button--unelevated filled-button--success mx-10" style="width:10%"> Edit Akun </button>
                  </div>
                </div>
              </div>
            </div>
          </div>

<?php
// Proses update
if (isset($_POST['update'])) {
    $id_user  = $_POST['id_user'];
    $nama     = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email    = $_POST['email'];

    // Cek apakah upload foto baru
    if (!empty($_FILES['foto']['name'])) {
        $folder = "uploads/";
        $file_name = $_FILES['foto']['name'];
        $tmp = $_FILES['foto']['tmp_name'];
        $ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        $allowed = ['jpg', 'jpeg', 'png', 'gif'];

        if (in_array($ext, $allowed)) {
            $nama_baru = uniqid() . "." . $ext;
            if (move_uploaded_file($tmp, $folder . $nama_baru)) {
                // Update dengan foto baru (tanpa menghapus foto lama)
                $query = mysqli_query($conn, "UPDATE user SET 
                    nama='$nama',
                    username='$username',
                    password='$password',
                    email='$email',
                    foto='$nama_baru'
                    WHERE id_user='$id_user'");
            }
        } else {
            echo "<script>alert('Format file tidak didukung');</script>";
        }
    } else {
        // Update tanpa mengganti foto
        $query = mysqli_query($conn, "UPDATE user SET 
            nama='$nama',
            username='$username',
            password='$password',
            email='$email'
            WHERE id_user='$id_user'");
    }

    if ($query) {
        echo "<script>alert('Data berhasil diupdate');window.location='account.php';</script>";
    } else {
        echo "<script>alert('Gagal mengupdate data');</script>";
    }
}
?>

      
 <?php
include 'footer.php';
?>