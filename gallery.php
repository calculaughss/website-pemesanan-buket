<!-- gallery.php -->
<?php
require_once __DIR__ . '/includes/config.php';
$metaTitle = 'Galeri Produk | ' . SITE_NAME;
$metaDesc  = 'Lihat koleksi buket wisuda, buket snack, buket uang, buket bunga, dan buket boneka dari Myrha Bouquet.';
$activePage = 'galeri';
include __DIR__ . '/includes/navbar.php';
?>

<header class="page-hero">
  <div class="container text-center" style="padding-top:160px; padding-bottom:40px;">
    <p class="eyebrow">Galeri</p>
    <h1 class="section-title">Koleksi Buket Myrha Bouquet</h1>
    <p class="section-text mx-auto" style="max-width:560px;">
      Lihat selengkapnya di halaman utama kami, lengkap dengan filter kategori dan lightbox.
    </p>
    <a href="<?php echo BASE_URL; ?>/index.php#galeri" class="btn btn-outline-cta mt-2">Buka Galeri Lengkap <i class="bi bi-arrow-right"></i></a>
  </div>
</header>

<?php include __DIR__ . '/includes/footer.php'; ?>
