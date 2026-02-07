<?php
include 'header.php';
?>

<!-- ===== Pricing Table Start ===== -->
<section class="i pg fh rm ji gp uq">
  <!-- Bg Shapes -->
  <img src="images/shape-06.svg" alt="Shape" class="h aa y" />
  <img src="images/shape-03.svg" alt="Shape" class="h ca u" />
  <img src="images/shape-07.svg" alt="Shape" class="h w da ee" />
  <img src="images/shape-12.svg" alt="Shape" class="h p s" />
  <img src="images/shape-13.svg" alt="Shape" class="h r q" />

  <!-- Section Title -->
  <div class="animate_top bb ze rj ki xn vq">
    <h2 class="fk vj pr kk wm on/5 gq/2 bb _b">
      Layanan yang tersedia saat ini!
    </h2>
    <p class="bb on/5 wo/5 hq">
      Temukan paket dan layanan khusus untuk kamu hari ini!.
    </p>
  </div>

  <!-- Pricing Table -->
  <div class="bb ze i va ki xn yq bc">
    <div class="wc qf pn xo jg">

      <?php
      include 'admin/koneksi.php';
      $query = mysqli_query($conn, "SELECT * FROM product");
      while ($row = mysqli_fetch_assoc($query)) {
      ?>

      <!-- Pricing Item -->
      <div class="animate_top rj sg hh sm vk xm hi nj oj">
        <h4 class="wj kk wm fb" style="font-size: 2.10rem; font-weight: 550; text-align: center;"><?= $row['nama_product']; ?></h4>
</br>
        <div class="tc wf xf kg cc">
          <h2 class="fk _j kk wm text-green-500">
            Rp <?= number_format($row['harga'], 0, ',', '.'); ?>
          </h2>
        </div>
</br></br>
        <p class="ur dc"><?= htmlspecialchars(substr($row['deskripsi'], 0, 135)); ?><?= strlen($row['deskripsi']) > 135 ? '...' : ''; ?></p>
</br>
        <!-- Button -->
        <a href="order.php?id=<?= $row['id_product']; ?>" class="ek rg lk ml il gi ri mh tl">
          Order Now
        </a>
</br></br></br>
        <!-- Foto Produk -->
        <?php if (!empty($row['foto'])) { ?>
    <div class="mt-4">
      <img 
        src="admin/uploads/<?= $row['foto']; ?>" 
        alt="<?= htmlspecialchars($row['nama_product']); ?>" 
        style="width: 100%; height: 200px; object-fit: cover; border-radius: 12px;" >
    </div>

        <?php } ?>
</br>
        <p class="kk wm mt-3">7-day free trial</p>
      </div>

      <?php } ?>

    </div>
  </div>
</section>
<!-- ===== Pricing Table End ===== -->

      <!-- ===== Pricing Table End ===== -->

      <!-- ===== Services Start ===== -->
      <section class="lj tp kr">
        <!-- Section Title Start -->
        <div
          x-data="{ sectionTitle: `Layanan Utama PT Solusi Net Nusantara`, sectionTitleText: `Temukan layanan khusus untuk kamu sekarang!.`}"
        >
          <div class="animate_top bb ze rj ki xn vq">
    <h2
            x-text="sectionTitle"
            class="fk vj pr kk wm on/5 gq/2 bb _b"
    >
    </h2>
    <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p>
</div>


        </div>
        <!-- Section Title End -->

        <div class="bb ze ki xn yq mb en">
          <div class="wc qf pn xo ng">
            <!-- Service Item -->
            <div class="animate_top sg oi pi zq ml il am cn _m">
              <img src="images/icon-04.svg" alt="Icon" />
              <h4 class="ek zj kk wm nb _b">Layanan Internet Dedicated & Broadband</h4>
              <p>Akses internet stabil untuk perusahaan, instansi, dan residensial.</p>
            </div>

            <!-- Service Item -->
            <div class="animate_top sg oi pi zq ml il am cn _m">
              <img src="images/icon-05.svg" alt="Icon" />
              <h4 class="ek zj kk wm nb _b">Instalasi & Manajemen Jaringan</h4>
              <p>Perancangan, pemasangan, dan pemeliharaan jaringan LAN, WAN, dan wireless.</p>
            </div>

            <!-- Service Item -->
            <div class="animate_top sg oi pi zq ml il am cn _m">
              <img src="images/icon-06.svg" alt="Icon" />
              <h4 class="ek zj kk wm nb _b">Solusi Infrastruktur IT</h4>
              <p>Server, firewall, routing, switching, dan sistem keamanan jaringan.</p>
            </div>

            <!-- Service Item -->
            <div class="animate_top sg oi pi zq ml il am cn _m">
              <img src="images/icon-07.svg" alt="Icon" />
              <h4 class="ek zj kk wm nb _b">Managed Services</h4>
              <p>Monitoring jaringan, support teknis, dan layanan pemeliharaan berkala.</p>
            </div>

            <!-- Service Item -->
            <div class="animate_top sg oi pi zq ml il am cn _m">
              <img src="images/icon-05.svg" alt="Icon" />
              <h4 class="ek zj kk wm nb _b">Solusi Konektivitas Antar Kantor</h4>
              <p>VPN, MPLS, dan koneksi antar lokasi usaha.</p>
            </div>

            <!-- Service Item -->
            <div class="animate_top sg oi pi zq ml il am cn _m">
              <img src="images/icon-06.svg" alt="Icon" />
              <h4 class="ek zj kk wm nb _b">Cloud Services & Data Center</h4>
              <p>hosting, cloud server, dan backup data</p>
            </div>
          </div>
        </div>
      </section>
      <!-- ===== Services End ===== -->

            <!-- ===== CTA Start ===== -->
      <section class="i pg gh ji">
  <!-- Bg Shape -->
  <img class="h p q" src="images/shape-16.svg" alt="Bg Shape" />

  <div class="bb ye i z-10 ki xn dr">
    <div class="tc uf sn tn un gg">
      <div class="animate_left to/2">
        <h2 class="fk vj zp pr lk ac">
            Mari bergabung bersama kami!
        </h2>
        <p class="lk">
            Tentukan layanan yang kamu pilih dan gabung bersama kami!
        </p>
      </div>
      <div class="animate_right bf">
        <a href="#" class="vc ek kk hh rg ol il cm gi hi">
            Get Started Now
        </a>
      </div>
    </div>
  </div>
</section>
      <!-- ===== CTA End ===== -->

    </main>
<?php
include 'footer.php';
?>