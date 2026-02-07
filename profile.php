<?php
include 'header.php';
?>

<!-- ===== About Start ===== -->
      <section class="ji gp uq 2xl:ud-py-35 pg">
        <div class="bb ze ki xn wq">
          <div class="tc wf gg qq">
            <!-- About Images -->
            <div class="animate_left xc gn gg jn/2 i">
              <div>
                <img src="images/shape-05.svg" alt="Shape" class="h -ud-left-5 x" />
                <img src="images/about-01.png" alt="About" class="ib" />
                <img src="images/about-02.png" alt="About" />
              </div>
              <div>
                <img src="images/shape-06.svg" alt="Shape" />
                <img src="images/about-03.png" alt="About" class="ob gb" />
                <img src="images/shape-07.svg" alt="Shape" class="bb" />
              </div>
            </div>

            <!-- About Content -->
            <div class="animate_right jn/2">
              <h4 class="ek yj mk gb">Visi dan Misi</h4>
              <h4 class="fk vj zp pr kk wm qb">Menjadi penyedia layanan internet dan solusi jaringan di Indonesia yang terpercaya, inovatif, dan berorientasi pada kepuasan pelanggan.</h4>
              <p class="uo"> 1. Menyediakan layanan internet yang stabil, cepat, dan berkualitas tinggi. </p>
              <p class="uo"> 2. Memberikan solusi jaringan yang aman, efisien, dan sesuai kebutuhan pelanggan. </p>
              <p class="uo"> 3. Mengutamakan pelayanan profesional, responsif, dan berkelanjutan. </p>
              <p class="uo"> 4. Mengembangkan teknologi dan sumber daya manusia secara berkesinambungan. </p>
              <p class="uo"> 5. Mendukung transformasi digital di berbagai sektor usaha dan pemerintahan. </p>

              <a href="https://www.youtube.com/watch?v=xcJtL7QggTI" data-fslightbox class="vc wf hg mb">
                <span class="tc wf xf be dd rg i gh ua">
                  <span class="nf h vc yc vd rg gh qk -ud-z-1"></span>
                  <img src="images/icon-play.svg" alt="Play" />
                </span>
                <span class="kk">SEE HOW WE WORK</span>
              </a>
            </div>
          </div>
        </div>
      </section>
      <!-- ===== About End ===== -->

      <!-- ===== Team Start ===== -->
<section class="i pg ji gp uq">
  <!-- Bg Shapes -->
  <span class="rc h s r vd fd/5 fh rm"></span>
  <img src="images/shape-08.svg" alt="Shape Bg" class="h q r" />
  <img src="images/shape-09.svg" alt="Shape" class="of h y z/2" />
  <img src="images/shape-10.svg" alt="Shape" class="h _ aa" />
  <img src="images/shape-11.svg" alt="Shape" class="of h m ba" />

  <!-- Section Title -->
  <div
    x-data="{ sectionTitle: `Team Kami`, sectionTitleText: `Bersama kami PT Solusi Net Nusantara internet stabil dan berkualitas.`}"
  >
    <div class="animate_top bb ze rj ki xn vq">
      <h2 x-text="sectionTitle" class="fk vj pr kk wm on/5 gq/2 bb _b"></h2>
      <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p>
    </div>
  </div>

  <div class="bb ze i va ki xn xq jb jo">
    <div class="wc qf pn xo gg cp">

<?php 
  $query = mysqli_query($conn, "SELECT * FROM user WHERE role='Admin' ORDER BY id_user ASC");
    while ($row = mysqli_fetch_assoc($query)) :
?>
      <!-- Team Item -->
      <div class="animate_top rj">
        <div class="c i pg z-1">
          <img class="vd" src="admin/uploads/<?php echo htmlspecialchars($row['foto']); ?>" style="width: 100%; height: 350px; object-fit: cover; border-radius: 12px;" alt="Team" />

          <div class="ef im nl il">
            <span class="h -ud-left-5 -ud-bottom-21 rc de gd gh if wa"></span>
            <span class="h s p rc vd hd mh va"></span>
          </div>
        </div>

        <h4 class="yj go kk wm ob zb"><?php echo htmlspecialchars($row['nama']); ?></h4>
        <p><?php echo htmlspecialchars($row['email']); ?></p>
      </div>
      <?php endwhile; ?>

    </div>
  </div>
</section>

      <!-- ===== Team End ===== -->

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
    </main>
<?php
include 'footer.php';
?>