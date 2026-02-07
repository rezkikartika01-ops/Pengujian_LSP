<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tamplate Pengujian</title>
  <link rel="icon" href="favicon.ico"><link href="style.css" rel="stylesheet"></head>
  <body
    x-data="{ page: 'home', 'darkMode': true, 'stickyMenu': false, 'navigationOpen': false, 'scrollTop': false }"
    x-init="
         darkMode = JSON.parse(localStorage.getItem('darkMode'));
         $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
    :class="{'b eh': darkMode === true}"
  >
    <!-- ===== Header Start ===== -->
    <header
  class="g s r vd ya cj"
  :class="{ 'hh sm _k dj bl ll' : stickyMenu }"
  @scroll.window="stickyMenu = (window.pageYOffset > 20) ? true : false"
>
  <div class="bb ze ki xn 2xl:ud-px-0 oo wf yf i">
    <div class="vd to/4 tc wf yf">
      <a href="index.html">
        <img class="om" src="images/logo_pt.png" alt="Logo Light" />
        <img class="xc nm" src="images/logo_pt.png" alt="Logo Dark" />
      </a>

      <!-- Hamburger Toggle BTN -->
      <button class="po rc" @click="navigationOpen = !navigationOpen">
        <span class="rc i pf re pd">
          <span class="du-block h q vd yc">
            <span class="rc i r s eh um tg te rd eb ml jl dl" :class="{ 'ue el': !navigationOpen }"></span>
            <span class="rc i r s eh um tg te rd eb ml jl fl" :class="{ 'ue qr': !navigationOpen }"></span>
            <span class="rc i r s eh um tg te rd eb ml jl gl" :class="{ 'ue hl': !navigationOpen }"></span>
          </span>
          <span class="du-block h q vd yc lf">
            <span class="rc eh um tg ml jl el h na r ve yc" :class="{ 'sd dl': !navigationOpen }"></span>
            <span class="rc eh um tg ml jl qr h s pa vd rd" :class="{ 'sd rr': !navigationOpen }"></span>
          </span>
        </span>
      </button>
      <!-- Hamburger Toggle BTN -->
    </div>

    <div
      class="vd wo/4 sd qo f ho oo wf yf"
      :class="{ 'd hh rm sr td ud qg ug jc yh': navigationOpen }"
    >
      <nav>
        <ul class="tc _o sf yo cg ep">
          <li><a href="index.php" class="xl">Home</a></li>
          <li><a href="profile.php" class="xl">Profile</a></li>
          <li><a href="product.php" class="xl">Product</a></li>
          <li><a href="news.php" class="xl">News</a></li>
          <li><a href="galery.php" class="xl">Galery</a></li>
          <li><a href="feedback.php" class="xl">Support</a></li>
        </ul>
      </nav>

      <div class="tc wf ig pb no">
        <div class="pc h io pa ra" :class="navigationOpen ? '!-ud-visible' : 'd'">
          <label class="rc ab i">
            <input type="checkbox" :value="darkMode" @change="darkMode = !darkMode" class="pf vd yc uk h r za ab" />
            <!-- Icon Sun -->
            <svg :class="{ 'wn' : page === 'home', 'xh' : page === 'home' && stickyMenu }" class="th om" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M12.0908 18.6363C10.3549 18.6363 8.69 17.9467 7.46249 16.7192C6.23497 15.4916 5.54537 13.8268 5.54537 12.0908C5.54537 10.3549 6.23497 8.69 7.46249 7.46249C8.69 6.23497 10.3549 5.54537 12.0908 5.54537C13.8268 5.54537 15.4916 6.23497 16.7192 7.46249C17.9467 8.69 18.6363 10.3549 18.6363 12.0908C18.6363 13.8268 17.9467 15.4916 16.7192 16.7192C15.4916 17.9467 13.8268 18.6363 12.0908 18.6363ZM12.0908 16.4545C13.2481 16.4545 14.358 15.9947 15.1764 15.1764C15.9947 14.358 16.4545 13.2481 16.4545 12.0908C16.4545 10.9335 15.9947 9.8236 15.1764 9.00526C14.358 8.18692 13.2481 7.72718 12.0908 7.72718C10.9335 7.72718 9.8236 8.18692 9.00526 9.00526C8.18692 9.8236 7.72718 10.9335 7.72718 12.0908C7.72718 13.2481 8.18692 14.358 9.00526 15.1764C9.8236 15.9947 10.9335 16.4545 12.0908 16.4545ZM10.9999 0.0908203H13.1817V3.36355H10.9999V0.0908203ZM10.9999 20.8181H13.1817V24.0908H10.9999V20.8181ZM2.83446 4.377L4.377 2.83446L6.69082 5.14828L5.14828 6.69082L2.83446 4.37809V4.377ZM17.4908 19.0334L19.0334 17.4908L21.3472 19.8046L19.8046 21.3472L17.4908 19.0334ZM19.8046 2.83337L21.3472 4.377L19.0334 6.69082L17.4908 5.14828L19.8046 2.83446V2.83337ZM5.14828 17.4908L6.69082 19.0334L4.377 21.3472L2.83446 19.8046L5.14828 17.4908ZM24.0908 10.9999V13.1817H20.8181V10.9999H24.0908ZM3.36355 10.9999V13.1817H0.0908203V10.9999H3.36355Z" fill=""/>
            </svg>
            <!-- Icon Sun -->
            <img class="xc nm" src="images/icon-moon.svg" alt="Moon" />
          </label>
        </div>

        <a href="login.php" :class="{ 'nk yl' : page === 'home', 'ok' : page === 'home' && stickyMenu }" class="ek pk xl">Sign In</a>
        <a href="signup.html" :class="{ 'hh/[0.15]' : page === 'home', 'sh' : page === 'home' && stickyMenu }" class="lk gh dk rg tc wf xf _l gi hi">Sign Up</a>
      </div>
    </div>
  </div>
</header>

    <!-- ===== Header End ===== -->
 <main>
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
                    id="role"
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
  </main>
      <!-- ===== Contact End ===== -->
<?php
include 'footer.php';
?>