<?php
require_once __DIR__ . '/includes/config.php';
$metaTitle = DEFAULT_META_TITLE;
$metaDesc  = DEFAULT_META_DESC;
$activePage = 'home';
include __DIR__ . '/includes/navbar.php';
?>

<!-- ===== 1. HERO ===== -->
<header id="home" class="hero">
  <div class="hero-bg" style="background-image:url('https://images.unsplash.com/photo-1490750967868-88aa4486c946?q=80&w=1600&auto=format&fit=crop');"></div>
  <div class="hero-overlay"></div>
  <div class="container position-relative">
    <div class="row align-items-center min-vh-100 py-5">
      <div class="col-lg-7 hero-text" data-aos="fade-up">
        <p class="eyebrow"><i class="bi bi-flower1"></i> Bouquet Custom Handmade</p>
        <h1 class="hero-title">Bouquet Cantik untuk Setiap Momen Spesial</h1>
        <p class="hero-sub">
          Myrha Bouquet menghadirkan Bouquet custom dengan desain elegan dan harga mulai dari
          <strong>Rp35.000</strong>. Cocok untuk wisuda, ulang tahun, anniversary, lamaran,
          hingga berbagai momen spesial lainnya.
        </p>
        <div class="hero-cta">
          <a href="#galeri" class="btn btn-outline-cta">Lihat Galeri</a>
          <a href="<?php echo WA_LINK; ?>" target="_blank" rel="noopener" class="btn btn-order btn-lg">
            <i class="bi bi-whatsapp"></i> Pesan via WhatsApp
          </a>
        </div>
      </div>
      <div class="col-lg-5 d-none d-lg-block">
        <div class="hero-floating">
          <img class="float-card float-1" loading="lazy" src="assets/img/1.jpeg" alt="Bouquet bunga pink Myrha Bouquet">
          <img class="float-card float-2" loading="lazy" src="assets/img/9.jpeg" alt="Bouquet wisuda Myrha Bouquet">
          <img class="float-card float-3" loading="lazy" src="assets/img/3.jpeg" alt="Bouquet uang Myrha Bouquet">
        </div>
      </div>
    </div>
  </div>
  <a href="#tentang" class="scroll-cue" aria-label="Gulir ke bawah"><i class="bi bi-chevron-down"></i></a>
</header>

<!-- ===== 2. TENTANG KAMI ===== -->
<section id="tentang" class="section section-about">
  <div class="container">
    <div class="row align-items-center gy-5">
      <div class="col-lg-6 order-lg-2" data-aos="fade-up">
        <p class="eyebrow">Tentang Kami</p>
        <h2 class="section-title">Tentang Myrha Bouquet</h2>
        <p class="section-text">
          Myrha Bouquet merupakan usaha yang bergerak di bidang jasa pembuatan Bouquet custom
          dengan mengutamakan kualitas, estetika, dan kepuasan pelanggan. Setiap Bouquet
          dirangkai secara manual menggunakan bahan berkualitas sehingga menghasilkan
          tampilan yang menarik dan berkesan.
        </p>
        <a href="<?php echo WA_LINK; ?>" target="_blank" rel="noopener" class="btn btn-outline-cta">
          Konsultasi Gratis <i class="bi bi-arrow-right"></i>
        </a>
      </div>
      <div class="col-lg-6 order-lg-1" data-aos="fade-up">
        <div class="about-img-wrap">
          <img loading="lazy" src="assets/img/10.jpeg" alt="Proses pembuatan Bouquet di workshop Myrha Bouquet" class="about-img">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== 3. KEUNGGULAN ===== -->
<section id="keunggulan" class="section section-benefit">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up">
      <p class="eyebrow">Keunggulan</p>
      <h2 class="section-title">Kenapa Pilih Myrha Bouquet</h2>
    </div>
    <div class="row g-4">
      <?php
        $benefits = [
          ['bi-tag', 'Harga mulai Rp35.000', 'Bouquet cantik tetap terjangkau tanpa mengorbankan kualitas.'],
          ['bi-palette', 'Bisa Custom Desain', 'Sesuaikan warna, bentuk, dan tema sesuai keinginan Anda.'],
          ['bi-wallet2', 'Menyesuaikan Budget', 'Kami bantu rancang Bouquet sesuai budget yang Anda miliki.'],
          ['bi-gem', 'Bahan Berkualitas', 'Material pilihan agar Bouquet tahan lama dan terlihat mewah.'],
          ['bi-stars', 'Hasil Rapi & Estetik', 'Dirangkai dengan detail agar tampilan selalu memukau.'],
          ['bi-calendar-event', 'Cocok Berbagai Acara', 'Wisuda, ulang tahun, anniversary, hingga lamaran.'],
          ['bi-search-heart', 'Pengerjaan Teliti', 'Setiap detail diperhatikan dari awal hingga selesai.'],
          ['bi-emoji-smile', 'Pelayanan Ramah', 'Konsultasi nyaman tanpa paksaan dari tim kami.'],
        ];
      ?>
      <?php foreach ($benefits as $i => $b): ?>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="<?php echo $i * 60; ?>">
          <div class="benefit-card">
            <div class="benefit-icon"><i class="bi <?php echo $b[0]; ?>"></i></div>
            <h3 class="benefit-title"><?php echo $b[1]; ?></h3>
            <p class="benefit-text"><?php echo $b[2]; ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ===== 5. CARA PENENTUAN HARGA ===== -->
<section id="harga" class="section section-pricing">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up">
      <p class="eyebrow">Transparansi Harga</p>
      <h2 class="section-title">Bagaimana Harga Bouquet Ditentukan?</h2>
      <p class="section-text mx-auto" style="max-width:640px;">
        Harga Bouquet tidak ditentukan berdasarkan nominal yang diinginkan pelanggan,
        melainkan berdasarkan jumlah dan jenis bahan yang digunakan dalam proses pembuatan.
      </p>
    </div>
    <div class="price-timeline" data-aos="fade-up">
      <?php
        $priceFactors = [
          ['bi-layers', 'Wrapping', 'Jumlah lembar & jenis wrapping yang digunakan'],
          ['bi-flower3', 'Bunga', 'Jumlah dan jenis bunga yang dipilih'],
          ['bi-bookmark-heart', 'Pita & Aksesoris', 'Pita serta hiasan tambahan pada Bouquet'],
          ['bi-emoji-laughing', 'Boneka (Opsional)', 'Tambahan boneka sesuai permintaan'],
        ];
      ?>
      <div class="timeline-track">
        <?php foreach ($priceFactors as $pf): ?>
          <div class="timeline-item">
            <div class="timeline-icon"><i class="bi <?php echo $pf[0]; ?>"></i></div>
            <h4><?php echo $pf[1]; ?></h4>
            <p><?php echo $pf[2]; ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ===== 6. GALERI PRODUK ===== -->
<section id="galeri" class="section section-gallery">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <p class="eyebrow">Galeri</p>
            <h2 class="section-title">Hasil Karya Myrha Bouquet</h2>
            <p class="section-subtitle">
                Setiap bouquet dirancang secara khusus dengan memperhatikan detail,
                kualitas bahan, dan estetika sehingga menghasilkan hadiah yang berkesan
                untuk setiap momen spesial.
            </p>
        </div>
        <?php
        $gallery = [
            ['assets/img/1.jpeg','Money Bouquet'],
            ['assets/img/2.jpeg','Money Bouquet'],
            ['assets/img/3.jpeg','Money Bouquet'],
            ['assets/img/4.jpeg','Money Bouquet'],
            ['assets/img/5.jpeg','Money Bouquet'],
            ['assets/img/6.jpeg','Money Bouquet'],
            ['assets/img/7.jpeg','Money Bouquet'],
            ['assets/img/8.jpeg','Money Bouquet'],
            ['assets/img/9.jpeg','Bouquet'],
            ['assets/img/10.jpeg','Money Bouquet']
        ];
        ?>
        <div class="gallery-grid">
            <?php foreach($gallery as $g): ?>
              <div class="gallery-item">
                <a href="<?= $g[0]; ?>" class="gallery-link">
                  <img src="<?= $g[0]; ?>"
                  alt="<?= $g[1]; ?>"
                  class="gallery-img">
                  <div class="gallery-overlay">
                    <h5><?= $g[1]; ?></h5>
                  </div>
                </a>
              </div>
              <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ===== 7. MENGAPA MEMILIH KAMI ===== -->
<section class="section section-why">
  <div class="container">
    <div class="row align-items-center gy-5">
      <div class="col-lg-5" data-aos="fade-up">
        <img loading="lazy" src="assets/img/8.jpeg" alt="Ilustrasi Bouquet Myrha Bouquet" class="why-img">
      </div>
      <div class="col-lg-7" data-aos="fade-up">
        <p class="eyebrow">Mengapa Memilih Kami</p>
        <h2 class="section-title">Alasan Pelanggan Memilih Myrha Bouquet</h2>
        <ul class="checklist">
          <?php
            $why = ['Desain eksklusif','Pengerjaan rapi','Bahan premium','Harga transparan','Dapat konsultasi sebelum order','Custom sesuai keinginan','Respon cepat','Tepat waktu'];
            foreach ($why as $w) echo '<li><i class="bi bi-check-circle-fill"></i> ' . $w . '</li>';
          ?>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ===== 8. TESTIMONI ===== -->
<section id="testimoni" class="section section-testimoni">
  <div class="container">
    <div class="row align-items-center gy-5">

      <!-- Intro kiri -->
      <div class="col-lg-5" data-aos="fade-up">
        <div class="testimoni-intro">
          <i class="bi bi-quote testimoni-quote-icon"></i>
          <p class="eyebrow">Testimoni</p>
          <h2 class="section-title">Apa Kata<br>Pelanggan Kami?</h2>
          <p class="section-text">
            Kepuasan pelanggan adalah prioritas kami. Setiap bouquet dibuat
            dengan sepenuh hati agar momen spesial kamu semakin berkesan.
          </p>
        </div>
      </div>

      <!-- Stack kartu kanan -->
      <div class="col-lg-7" data-aos="fade-up">
        <div class="testimoni-stack" id="testimoniStack">
          <?php
            $testi = [
              ['Anisa Putri',    'Pelanggan Wisuda',        'Bouquet sangat cantik dan hasilnya melebihi ekspektasi. Pengerjaannya rapi sekali!',              'https://randomuser.me/api/portraits/women/68.jpg', 5],
              ['Dewi Lestari',   'Pelanggan Anniversary',   'Pelayanannya ramah, harga sesuai budget saya. Pasti order lagi untuk acara berikutnya.',           'https://randomuser.me/api/portraits/women/12.jpg', 5],
              ['Rangga Saputra', 'Pelanggan Wisuda',        'Bouquet wisuda untuk pacar saya jadi sangat berkesan. Terima kasih Myrha Bouquet!',                'https://randomuser.me/api/portraits/men/32.jpg',   5],
              ['Salsabila',      'Pelanggan Money Bouquet', 'Money bouquet-nya rapi dan elegan, persis seperti referensi yang saya kirim.',                     'https://randomuser.me/api/portraits/women/45.jpg', 5],
              ['Yoga Pratama',   'Pelanggan Ulang Tahun',   'Konsultasinya enak, dibantu cari desain sesuai budget. Hasilnya memuaskan.',                       'https://randomuser.me/api/portraits/men/76.jpg',   4],
              ['Intan Maharani', 'Pelanggan Lamaran',       'Pengemasan rapi, dapat kartu ucapan gratis juga. Recommended banget!',                             'https://randomuser.me/api/portraits/women/22.jpg', 5],
            ];
            $initial = array_slice($testi, 0, 3);
          ?>

          <?php foreach ($initial as $i => $t): ?>
            <div class="testimoni-stack-card <?php echo $i === 1 ? 'is-active' : ''; ?>" data-pos="<?php echo $i; ?>">

              <div class="testimoni-card-head">
                <img loading="lazy" src="<?php echo $t[3]; ?>" alt="Foto <?php echo $t[0]; ?>" class="testimoni-avatar">
                <div>
                  <h4 class="testimoni-name"><?php echo $t[0]; ?></h4>
                  <p class="testimoni-role"><?php echo $t[1]; ?></p>
                </div>
              </div>

              <p class="testimoni-quote">&ldquo;<?php echo $t[2]; ?>&rdquo;</p>

              <!-- Rating bintang -->
              <div class="testimoni-rating" aria-label="Rating <?php echo $t[4]; ?> dari 5 bintang">
                <?php for ($s = 1; $s <= 5; $s++): ?>
                  <i class="bi <?php echo $s <= $t[4] ? 'bi-star-fill' : 'bi-star'; ?>"></i>
                <?php endfor; ?>
              </div>

            </div>
          <?php endforeach; ?>
        </div>

        <script type="application/json" id="testimoniData">
          <?php echo json_encode($testi, JSON_UNESCAPED_UNICODE); ?>
        </script>
      </div>

    </div>
  </div>
</section>

<!-- ===== 9. STATISTIK ===== -->
<section class="section section-stats">
  <div class="container">
    <div class="row text-center g-4">
      <?php
        $stats = [
          ['100+', 'Pelanggan Puas', 'bi-emoji-heart-eyes'],
          ['100+', 'Bouquet Selesai', 'bi-flower2'],
          ['4.9', 'Rating Pelanggan', 'bi-star-fill'],
          ['80', 'Repeat Order (%)', 'bi-arrow-repeat'],
        ];
      ?>
      <?php foreach ($stats as $s): ?>
        <div class="col-6 col-lg-3" data-aos="fade-up">
          <div class="stat-box">
            <i class="bi <?php echo $s[2]; ?>"></i>
            <h3 class="stat-number" data-target="<?php echo $s[0]; ?>">0</h3>
            <p class="stat-label"><?php echo $s[1]; ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ===== 10. FAQ ===== -->
<section id="faq" class="section section-faq">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up">
      <p class="eyebrow">FAQ</p>
      <h2 class="section-title">Pertanyaan yang Sering Diajukan</h2>
    </div>
    <div class="accordion mx-auto" id="faqAccordion" style="max-width:760px;" data-aos="fade-up">
      <?php
        $faqs = [
          ['Apakah bisa custom desain Bouquet?', 'Tentu, Anda bebas menentukan warna, bentuk, dan isi Bouquet sesuai keinginan, dan tim kami akan membantu menyesuaikannya.'],
          ['Berapa lama waktu pengerjaan?', 'Pengerjaan umumnya 1-3 hari, namun untuk momen besar seperti wisuda kami sarankan order lebih awal.'],
          ['Apakah bisa request sesuai budget?', 'Bisa. Kami akan menyesuaikan jenis bahan, bunga, dan ukuran Bouquet agar sesuai dengan budget Anda.'],
          ['Apakah menerima Bouquet uang (money bouquet)?', 'Ya, kami menerima pesanan money bouquet dengan nominal dan desain sesuai permintaan.'],
          ['Bagaimana cara melakukan pemesanan?', 'Hubungi kami melalui tombol WhatsApp di halaman ini, lalu konsultasikan desain dan kebutuhan Bouquet Anda.'],
        ];
      ?>
      <?php foreach ($faqs as $i => $f): ?>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button <?php echo $i === 0 ? '' : 'collapsed'; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#faq<?php echo $i; ?>">
              <?php echo $f[0]; ?>
            </button>
          </h2>
          <div id="faq<?php echo $i; ?>" class="accordion-collapse collapse <?php echo $i === 0 ? 'show' : ''; ?>" data-bs-parent="#faqAccordion">
            <div class="accordion-body"><?php echo $f[1]; ?></div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ===== 11. URGENSI ===== -->
<section class="section section-urgency">
  <div class="container text-center" data-aos="fade-up">
    <p class="eyebrow eyebrow-light">Kapasitas Terbatas</p>
    <h2 class="section-title text-white">Jangan Sampai Ketinggalan Pemesanan</h2>
    <p class="section-text text-light mx-auto" style="max-width:640px;">
      Setiap Bouquet dibuat secara manual sehingga kapasitas produksi setiap hari terbatas.
      Untuk momen wisuda, ulang tahun, anniversary, Hari Guru, Valentine, dan acara spesial
      lainnya, disarankan melakukan pemesanan lebih awal agar jadwal produksi tetap tersedia.
    </p>
    <div class="countdown" id="countdown">
      <div class="cd-box"><span id="cdDays">00</span><small>Hari</small></div>
      <div class="cd-box"><span id="cdHours">00</span><small>Jam</small></div>
      <div class="cd-box"><span id="cdMinutes">00</span><small>Menit</small></div>
      <div class="cd-box"><span id="cdSeconds">00</span><small>Detik</small></div>
    </div>
    <a href="<?php echo WA_LINK; ?>" target="_blank" rel="noopener" class="btn btn-order btn-lg mt-4">
      <i class="bi bi-whatsapp"></i> Amankan Pesanan Sekarang
    </a>
  </div>
</section>

<!-- ===== 12. BONUS ===== -->
<section class="section section-bonus">
  <div class="container">
    <div class="row g-4">
      <?php
        $bonus = [
          ['bi-card-heading', 'Free Kartu Ucapan', 'Kartu ucapan sederhana untuk melengkapi pesan Anda.'],
          ['bi-box-seam', 'Pengemasan Rapi', 'Bouquet dikemas dengan aman dan estetik.'],
          ['bi-chat-heart', 'Konsultasi Desain Gratis', 'Diskusikan ide Bouquet impian Anda tanpa biaya tambahan.'],
        ];
      ?>
      <?php foreach ($bonus as $b): ?>
        <div class="col-md-4" data-aos="fade-up">
          <div class="bonus-card-h">
            <i class="bi <?php echo $b[0]; ?>"></i>
            <div>
              <h4><?php echo $b[1]; ?></h4>
              <p><?php echo $b[2]; ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ===== 13. GARANSI ===== -->
<section class="section section-guarantee">
  <div class="container" data-aos="fade-up">
    <div class="guarantee-card">
      <i class="bi bi-shield-check guarantee-icon"></i>
      <h2 class="section-title">Garansi Kepuasan</h2>
      <ul class="guarantee-list">
        <li>Bouquet dibuat sesuai desain yang telah disepakati.</li>
        <li>Jika terdapat kesalahan dari pihak Myrha Bouquet pada pesanan, akan diberikan solusi terbaik sesuai kondisi pesanan.</li>
        <li>Proses pengerjaan dilakukan dengan teliti agar hasil sesuai harapan pelanggan.</li>
      </ul>
    </div>
  </div>
</section>

<!-- ===== 14. CTA ===== -->
<section id="kontak" class="section section-cta">
  <div class="container text-center" data-aos="fade-up">
    <h2 class="cta-title">Siap Memberikan Hadiah yang Berkesan?</h2>
    <p class="cta-sub">Konsultasikan desain Bouquet impian Anda sekarang juga.</p>
    <a href="<?php echo WA_LINK; ?>" target="_blank" rel="noopener" class="btn btn-cta-pulse">
      <i class="bi bi-whatsapp"></i> Pesan Sekarang melalui WhatsApp
    </a>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
