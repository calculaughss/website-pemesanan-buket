<?php
/**
 * includes/navbar.php
 * Menyertakan <head>, opening <body>, dan navbar sticky.
 * Variabel opsional yang bisa di-set sebelum include:
 *   $metaTitle, $metaDesc, $ogImage, $activePage
 */
if (!defined('BASE_URL')) {
    require_once __DIR__ . '/config.php';
}
$metaTitle = $metaTitle ?? DEFAULT_META_TITLE;
$metaDesc  = $metaDesc  ?? DEFAULT_META_DESC;
$ogImage   = $ogImage   ?? DEFAULT_OG_IMAGE;
$activePage = $activePage ?? 'home';
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo htmlspecialchars($metaTitle); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($metaDesc); ?>">
<meta name="robots" content="index, follow">

<!-- Open Graph -->
<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo htmlspecialchars($metaTitle); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars($metaDesc); ?>">
<meta property="og:image" content="<?php echo htmlspecialchars($ogImage); ?>">
<meta property="og:url" content="<?php echo htmlspecialchars(BASE_URL); ?>">

<link rel="icon" type="image/png" href="<?php echo BASE_URL; ?>/assets/img/favicon.png">

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;1,500&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

<!-- Custom Styles -->
<link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/style.css">
</head>
<body>

<!-- ===== LOADING SCREEN ===== -->
<div id="loading-screen" aria-hidden="true">
  <div class="loader-ribbon">
    <svg viewBox="0 0 120 60" class="loader-svg">
      <path d="M10,30 C25,5 45,5 60,30 C75,55 95,55 110,30" stroke="#C9A227" stroke-width="3" fill="none" stroke-linecap="round"/>
    </svg>
    <span>Myrha Bouquet</span>
  </div>
</div>

<!-- ===== SCROLL PROGRESS BAR ===== -->
<div id="scroll-progress"></div>

<!-- ===== NAVBAR ===== -->
<nav class="navbar navbar-expand-lg fixed-top" id="mainNavbar" aria-label="Navigasi utama">
  <div class="container">
    <a class="navbar-brand" href="<?php echo BASE_URL; ?>/index.php#home">
      <span class="brand-script">Myrha</span><span class="brand-sans">BOUQUET</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu" aria-controls="navMenu" aria-expanded="false" aria-label="Buka menu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2" id="navLinks">
        <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL; ?>/index.php#home">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL; ?>/index.php#tentang">Tentang</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL; ?>/index.php#keunggulan">Keunggulan</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL; ?>/index.php#galeri">Galeri</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL; ?>/index.php#testimoni">Testimoni</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL; ?>/index.php#faq">FAQ</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL; ?>/index.php#kontak">Kontak</a></li>
        <li class="nav-item ms-lg-2">
          <a class="btn btn-order" href="<?php echo WA_LINK; ?>" target="_blank" rel="noopener">
            <i class="bi bi-whatsapp"></i> Pesan Sekarang
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
