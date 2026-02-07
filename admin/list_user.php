<?php
include 'header.php';
?>

<main class="content-wrapper">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card p-0">
                </br> </br>
                      <a href="tambah_akun.php"><button class="mdc-button mdc-button--unelevated filled-button--success mx-5" style="width:15%">
                        
                        Tambah Akun Admin
                      
                      </button></a>
                  <h6 class="card-title card-padding pb-0"></h6>
                  <div class="datatable-wrapper mx-auto" style="width:95%">
                    <table class="table table-hoverable display nowrap text-center" id="tabel" style="width:100%">
                      <thead>
                        <tr>
                          <th class="text-center">No</th>
                          <th class="text-center">ID</th>
                          <th class="text-center">Nama</th>
                          <th class="text-center">Email</th>
                          <th class="text-center">No Telepon</th>
                          <th class="text-center">Status</th>
                          <th class="text-center">Alamat</th>
                          <th class="text-center">Action</th>
                        </tr>
                      </thead>
                      <tbody>
<?php
$no = 1;
$query = mysqli_query($conn, "SELECT * FROM user WHERE role='User'");
while ($data = mysqli_fetch_assoc($query)) {
?>
                        <tr>
                          <td class="text-center"><?= $no++; ?></td>
                          <td class="text-center"><?= $data['id_user']; ?></td>
                          <td class="text-center"><?= $data['nama']; ?></td>
                          <td class="text-center"><?= $data['email']; ?></td>
                          <td class="text-center"><?= $data['no_tlp']; ?></td>
                          <td class="text-center"><?= $data['status']; ?></td>
                          <td class="text-center"><?= $data['alamat']; ?></td>
                          <td class="text-center">
                            <a href="hapus_user.php?id=<?= $data['id_user']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><button class="mdc-button mdc-button--raised filled-button--secondary">
                      Hapus
                    </button></a>
                            <a href="edit_akun.php?id=<?= $data['id_user']; ?>"><button class="mdc-button mdc-button--raised filled-button--warning">
                      Edit
                    </button></a>
                          </td>
                        </tr>
<?php } ?>
                      </tbody>
                    </table>
                  </div>
                  </br>
                </div>
              </div>
            </div>
          </div>
        </main>

        
 <?php
include 'footer.php';
?>