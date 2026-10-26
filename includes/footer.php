<?php if (!defined('BASE_URL')) { require_once __DIR__ . '/config.php'; } ?>
<!-- ===== FOOTER ===== -->
<footer class="site-footer">
  <div class="footer-ribbon-divider">
    <svg viewBox="0 0 1200 40" preserveAspectRatio="none" class="ribbon-svg">
      <path d="M0,20 C150,0 300,40 450,20 C600,0 750,40 900,20 C1050,0 1150,30 1200,15" stroke="#C9A227" stroke-width="2" fill="none"/>
    </svg>
  </div>
  <div class="container py-5">
    <div class="row gy-4">
      <div class="col-lg-4">
        <div class="footer-brand mb-3">
          <span class="brand-script">Myrha</span><span class="brand-sans">BOUQUET</span>
        </div>
        <p class="footer-about">
          Buket custom dirangkai dengan tangan untuk setiap momen spesial Anda - wisuda, ulang tahun, anniversary, hingga lamaran. Estetik, rapi, dan berkesan.
        </p>
        <div class="footer-social">
          <a href="<?php echo SITE_INSTAGRAM; ?>" target="_blank" rel="noopener" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
          <a href="<?php echo WA_LINK; ?>" target="_blank" rel="noopener" aria-label="WhatsApp"><i class="bi bi-whatsapp"></i></a>
        </div>
      </div>

      <div class="col-lg-2 col-6">
        <h6 class="footer-heading">Menu</h6>
        <ul class="footer-links">
          <li><a href="<?php echo BASE_URL; ?>/index.php#home">Home</a></li>
          <li><a href="<?php echo BASE_URL; ?>/index.php#tentang">Tentang</a></li>
          <li><a href="<?php echo BASE_URL; ?>/index.php#galeri">Galeri</a></li>
          <li><a href="<?php echo BASE_URL; ?>/index.php#testimoni">Testimoni</a></li>
          <li><a href="<?php echo BASE_URL; ?>/index.php#faq">FAQ</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-6">
        <h6 class="footer-heading">Kontak</h6>
        <ul class="footer-links">
          <li><i class="bi bi-whatsapp"></i> <a href="<?php echo WA_LINK; ?>" target="_blank" rel="noopener">+<?php echo WA_NUMBER; ?></a></li>
        </ul>
      </div>

      <div class="col-lg-3">
        <h6 class="footer-heading">Alamat &amp; Jam Operasional</h6>
        <p class="footer-text"><i class="bi bi-geo-alt"></i> <?php echo SITE_ADDRESS; ?></p>
        <p class="footer-text"><i class="bi bi-clock"></i> <?php echo SITE_HOURS; ?></p>
      </div>
    </div>

    <hr class="footer-hr">
    <p class="footer-copyright">&copy; 2026 Myrha Bouquet. All Rights Reserved.</p>
  </div>
</footer>

<!-- ===== BACK TO TOP ===== -->
<button id="backToTop" aria-label="Kembali ke atas">
  <i class="bi bi-arrow-up"></i>
</button>

<!-- Bootstrap Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo BASE_URL; ?>/assets/js/script.js"></script>
</body>
</html>
