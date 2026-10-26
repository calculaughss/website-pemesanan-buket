<?php
require_once __DIR__ . '/includes/config.php';
$metaTitle = 'Kontak | ' . SITE_NAME;
$metaDesc  = 'Hubungi Myrha Bouquet melalui WhatsApp untuk konsultasi desain buket custom Anda.';
$activePage = 'kontak';
include __DIR__ . '/includes/navbar.php';
?>

<header class="page-hero">
  <div class="container text-center" style="padding-top:160px; padding-bottom:60px;">
    <p class="eyebrow">Kontak</p>
    <h1 class="section-title">Hubungi Kami</h1>
  </div>
</header>

<section class="section section-about">
  <div class="container">
    <div class="row gy-4 justify-content-center text-center">
      <div class="col-md-4">
        <div class="benefit-card">
          <div class="benefit-icon"><i class="bi bi-whatsapp"></i></div>
          <h3 class="benefit-title">WhatsApp</h3>
          <p class="benefit-text"><a href="<?php echo WA_LINK; ?>" target="_blank" rel="noopener">+<?php echo WA_NUMBER; ?></a></p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="benefit-card">
          <div class="benefit-icon"><i class="bi bi-envelope"></i></div>
          <h3 class="benefit-title">Email</h3>
          <p class="benefit-text"><?php echo SITE_EMAIL; ?></p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="benefit-card">
          <div class="benefit-icon"><i class="bi bi-geo-alt"></i></div>
          <h3 class="benefit-title">Alamat</h3>
          <p class="benefit-text"><?php echo SITE_ADDRESS; ?></p>
        </div>
      </div>
    </div>
    <div class="text-center mt-5">
      <a href="<?php echo WA_LINK; ?>" target="_blank" rel="noopener" class="btn btn-order btn-lg">
        <i class="bi bi-whatsapp"></i> Pesan Sekarang melalui WhatsApp
      </a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
