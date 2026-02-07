<?php
include 'header.php';
?>

<main class="content-wrapper">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card p-0">
                </br> </br>
                      <a href="tambah_layanan.php"><button class="mdc-button mdc-button--unelevated filled-button--success mx-5" style="width:15%">
                        
                        Tambah Layanan
                      
                      </button></a>
                  <h6 class="card-title card-padding pb-0"></h6>
                  <div class="datatable-wrapper mx-auto" style="width:95%">
                    <table class="table table-hoverable display nowrap text-center" id="tabel" style="width:100%">
                      <thead>
                        <tr>
                          <th class="text-center">No</th>
                          <th class="text-center">ID</th>
                          <th class="text-center">Jenis Layanan</th>
                          <th class="text-center">Action</th>
                        </tr>
                      </thead>
                      <tbody>
<?php
$no = 1;
$query = mysqli_query($conn, "SELECT * FROM layanan");
while ($data = mysqli_fetch_assoc($query)) {
?>
                        <tr>
                          <td class="text-center"><?= $no++; ?></td>
                          <td class="text-center"><?= $data['id_layanan']; ?></td>
                          <td class="text-center"><?= $data['jenis_layanan']; ?></td>
                          <td class="text-center">
                            <a href="hapus_layanan.php?id=<?= $data['id_layanan']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><button class="mdc-button mdc-button--raised filled-button--secondary">
                      Hapus
                    </button></a>
                            <a href="edit_layanan.php?id=<?= $data['id_layanan']; ?>"><button class="mdc-button mdc-button--raised filled-button--warning">
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