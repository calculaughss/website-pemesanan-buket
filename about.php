<?php
require_once __DIR__ . '/includes/config.php';
$metaTitle = 'Tentang Kami | ' . SITE_NAME;
$metaDesc  = 'Kenali lebih dekat Myrha Bouquet, usaha buket custom handmade yang mengutamakan kualitas, estetika, dan kepuasan pelanggan.';
$activePage = 'tentang';
include __DIR__ . '/includes/navbar.php';
?>

<header class="page-hero">
  <div class="container text-center" style="padding-top:160px; padding-bottom:60px;">
    <p class="eyebrow">Tentang Kami</p>
    <h1 class="section-title">Cerita di Balik Myrha Bouquet</h1>
  </div>
</header>

<section class="section section-about">
  <div class="container">
    <div class="row align-items-center gy-5">
      <div class="col-lg-6">
        <img loading="lazy" src="https://images.unsplash.com/photo-1487070183336-b863922373d4?q=80&w=900&auto=format&fit=crop" alt="Tim Myrha Bouquet merangkai buket" class="about-img" style="border-radius:18px;">
      </div>
      <div class="col-lg-6">
        <p class="section-text">
          Myrha Bouquet merupakan usaha yang bergerak di bidang jasa pembuatan buket custom
          dengan mengutamakan kualitas, estetika, dan kepuasan pelanggan. Setiap buket
          dirangkai secara manual menggunakan bahan berkualitas sehingga menghasilkan
          tampilan yang menarik dan berkesan.
        </p>
        <p class="section-text">
          Kami percaya setiap momen spesial pantas dirayakan dengan buket yang dirancang
          penuh perhatian — bukan sekadar rangkaian bunga, tetapi cerita yang dibungkus indah.
        </p>
        <a href="<?php echo WA_LINK; ?>" target="_blank" rel="noopener" class="btn btn-outline-cta">Konsultasi Gratis <i class="bi bi-arrow-right"></i></a>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
