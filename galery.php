<?php
include 'header.php';
?>


      <!-- ===== Projects Start ===== -->
<section class="pg pj vp mr oj wp nr">
  <!-- Section Title Start -->
  <div x-data="{ sectionTitle: `Kegiatan Kami.`, sectionTitleText: `Berikut merupakan kegiatan kami.`}">
    <div class="animate_top bb ze rj ki xn vq">
      <h2 x-text="sectionTitle" class="fk vj pr kk wm on/5 gq/2 bb _b"></h2>
      <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p>
    </div>
  </div>
  <!-- Section Title End -->

  <!-- Container Grid -->
  <div style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: flex-start;">

    <?php
    include 'admin/koneksi.php';
    $query = mysqli_query($conn, "SELECT * FROM galery");
    while ($row = mysqli_fetch_assoc($query)) {
    ?>
      <!-- Project Item -->
        <div class="project-item" style="flex: 0 0 320px;">
          <div class="c i pg sg z-1">
            <img 
              src="admin/uploads/<?= $row['foto']; ?>" 
              alt="Project"
              style="
                width: 300%;
                height: 280px;
                object-fit: contain;
                border-radius: 12px;
                background-color: #f5f5f5;
                padding: 8px;
              "
            />
          </div>
        </div>

    <?php } ?>

  </div>
</section>

      <!-- ===== Projects End ===== -->


<?php
include 'footer.php';
?>