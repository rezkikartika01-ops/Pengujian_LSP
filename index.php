<?php
include 'header.php';
?>

      <!-- ===== Small Features Start ===== -->
      <section id="features">
        <div class="bb ze ki yn 2xl:ud-px-12.5">
          <div class="tc uf zo xf ap zf bp mq">
            <!-- Small Features Item -->
            <div class="animate_top kn to/3 tc cg oq">
              <div class="tc wf xf cf ae cd rg mh">
                <img src="images/icon-01.svg" alt="Icon" />
              </div>
              <div>
                <h4 class="ek yj go kk wm xb">24/7 Support</h4>
                <p>Team teknis kami akan melayani ada.</p>
              </div>
            </div>

            <!-- Small Features Item -->
            <div class="animate_top kn to/3 tc cg oq">
              <div class="tc wf xf cf ae cd rg nh">
                <img src="images/icon-02.svg" alt="Icon" />
              </div>
              <div>
                <h4 class="ek yj go kk wm xb">Jangkauan Jaringan</h4>
                <p>Kami tersedia di seluruh provinsi di Indonesia</p>
              </div>
            </div>

            <!-- Small Features Item -->
            <div class="animate_top kn to/3 tc cg oq">
              <div class="tc wf xf cf ae cd rg oh">
                <img src="images/icon-03.svg" alt="Icon" />
              </div>
              <div>
                <h4 class="ek yj go kk wm xb">Segmentasi Pelanggan</h4>
                <p>Kami sudah melayani berbagai macam kebutuhan jaringan.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ===== Small Features End ===== -->

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

      <!-- ===== Pricing Table Start ===== -->
      <section x-data="setup()" class="i pg fh rm ji gp uq">
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
        <h4 class="wj kk wm fb" style="font-size: 2.10rem; font-weight: 550; text-align: center;"><?= $row['nama_product']; ?></h4></br>
          <div class="tc wf xf kg cc">
            <h2 class="fk _j kk wm text-green-500">
              Rp <?= number_format($row['harga'], 0, ',', '.'); ?>
            </h2>
          </div>
        </br></br>
        <p class="ur dc"><?= htmlspecialchars(substr($row['deskripsi'], 0, 135)); ?><?= strlen($row['deskripsi']) > 135 ? '...' : ''; ?></p>
        </br>

      <!-- Button -->
        <a href="order.php?id=<?= $row['id_product']; ?>" class="ek rg lk ml il gi ri mh tl"> Order Now </a>
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
        
      <!-- ===== Projects End ===== -->

      <!-- ===== Counter Start ===== -->
      <section class="i pg qh rm ji hp">
        <img src="images/shape-11.svg" alt="Shape" class="of h ga ha ke" />
        <img src="images/shape-07.svg" alt="Shape" class="h ia o ae jf" />
        <img src="images/shape-14.svg" alt="Shape" class="h ja ka" />
        <img src="images/shape-15.svg" alt="Shape" class="h q p" />

        <div class="bb ze i va ki xn br">
          <div class="tc uf sn tn xf un gg">
            <div class="animate_top me/5 ln rj">
              <h2 class="gk vj zp or kk wm hc">105</h2>
              <p class="ek bk aq">Mitra Vendor</p>
            </div>
            <div class="animate_top me/5 ln rj">
              <h2 class="gk vj zp or kk wm hc">533</h2>
              <p class="ek bk aq">Pelanggan Kami</p>
            </div>
            <div class="animate_top me/5 ln rj">
              <h2 class="gk vj zp or kk wm hc">250</h2>
              <p class="ek bk aq">Tower Jaringan</p>
            </div>
            <div class="animate_top me/5 ln rj">
              <h2 class="gk vj zp or kk wm hc">346</h2>
              <p class="ek bk aq">Projek Selesai</p>
            </div>
          </div>
        </div>
      </section>
      <!-- ===== Counter End ===== -->

      <!-- ===== Contact Start ===== -->
      <section id="support" class="i pg fh rm ji gp uq">
        <!-- Bg Shapes -->
        <img src="images/shape-06.svg" alt="Shape" class="h aa y" />
        <img src="images/shape-03.svg" alt="Shape" class="h ca u" />
        <img src="images/shape-07.svg" alt="Shape" class="h w da ee" />
        <img src="images/shape-12.svg" alt="Shape" class="h p s" />
        <img src="images/shape-13.svg" alt="Shape" class="h r q" />

        <!-- Section Title Start -->
        <div
          x-data="{ sectionTitle: `Tunggu apa lagi?`, sectionTitleText: `Tentukan layanan yang kamu butuhkan dan bergabung dengan kami.`}"
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

        <div class="i va bb ye ki xn wq jb mo">
          <div class="tc uf sn tf rn un zf xl:gap-10">
            <div class="animate_top w-full mn/5 to/3 vk sg hh sm yh rq i pg">
              <!-- Bg Shapes -->
              <img src="images/shape-03.svg" alt="Shape" class="h la x wd" />
              <img src="images/shape-06.svg" alt="Shape" class="h la ma ne kf" />

              <div class="fb">
                <h4 class="wj kk wm cc">Email Address</h4>
                <p><a href="#">support@solusinet.co.id</a></p>
              </div>
              <div class="fb">
                <h4 class="wj kk wm cc">Office Location</h4>
                <p>Jl. Bogor Indah Plaza, RT.04/RW.09, Kedungbadak, Kec. Tanah Sereal, Kota Bogor, Jawa Barat 16164</p>
              </div>
              <div class="fb">
                <h4 class="wj kk wm cc">Phone Number</h4>
                <p><a href="#">(0251) 8337555</a></p>
              </div>
              <div class="fb">
                <h4 class="wj kk wm cc">Whatsapp</h4>
                <p><a href="#">0811 1137 005</a></p>
              </div>
              <span class="rc nd rh tm lc fb"></span>
            </div>
            <div class="animate_top w-full nn/5 vo/3 vk sg hh sm yh tq">
              <form action="berlangganan.php" method="POST">
                <div class="tc sf yo ap zf ep qb">
                  <?php $random_id = rand(10000000, 99999999); // 8 digit angka ?>
                  <input type="hidden" name="id_user" value="<?= $random_id; ?>">
                  <input type="hidden" name="role" value="User">
                  <input type="hidden" name="status" value="Pending">
                  <div class="vd to/2">
                    <label class="rc ac" for="nama">Full name</label>
                    <input
                      type="text"
                      name="nama"
                      id="nama"
                      placeholder="Devid Wonder"
                      class="vd ph sg zk xm _g ch pm hm dm dn em pl/50 xi mi"
                    />
                  </div>

                  <div class="vd to/2">
                    <label class="rc ac" for="email">Email address</label>
                    <input
                      type="text"
                      name="email"
                      id="email"
                      placeholder="example@gmail.com"
                      class="vd ph sg zk xm _g ch pm hm dm dn em pl/50 xi mi"
                    />
                  </div>

                  <div class="vd to/2">
                    <label class="rc ac" for="no_tlp">Phone number</label>
                    <input
                      type="text"
                      name="no_tlp"
                      id="no_tlp"
                      placeholder="0811 1137 005"
                      class="vd ph sg zk xm _g ch pm hm dm dn em pl/50 xi mi"
                    />
                  </div>
                </div>

                <div class="tc sf yo ap zf ep qb">
                  <div class="vd to/2">
                    <label class="rc ac" for="username">Username</label>
                    <input
                      type="text"
                      name="username"
                      id="username"
                      placeholder="devidwonder"
                      class="vd ph sg zk xm _g ch pm hm dm dn em pl/50 xi mi"
                    />
                  </div>

                  <div class="vd to/2">
                    <label class="rc ac" for="password">Password</label>
                    <input
                      type="text"
                      name="password"
                      id="password"
                      placeholder="****************"
                      class="vd ph sg zk xm _g ch pm hm dm dn em pl/50 xi mi"
                    />
                  </div>
                </div>

                <div class="fb">
                  <label class="rc ac" for="id_layanan">Layanan yang dipilih</label>
                  <select
                    name="id_layanan"
                    id="id_layanan"
                    class="vd ph sg zk xm _g ch pm hm dm dn em pl/50 ci"
                    required
                  >
                      <option value="">-- Pilih Layanan --</option>
<?php 
  $query = mysqli_query($conn, "SELECT * FROM layanan ORDER BY jenis_layanan ASC");
    while ($row = mysqli_fetch_assoc($query)):
?>
                      <option value="<?= $row['id_layanan']; ?>"> <?= htmlspecialchars($row['jenis_layanan']); ?> </option>
<?php endwhile; ?>
                  </select>
                </div>

                <div class="tc xf">
                  <button type="submit" name="simpan" class="vc rg lk gh ml il hi gi _l">Send Message</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- ===== Contact End ===== -->

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