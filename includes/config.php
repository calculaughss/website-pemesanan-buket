<?php
/**
 * config.php
 * Konfigurasi global website Myrha Bouquet.
 * Ubah nomor WhatsApp, BASE_URL, dan info kontak hanya di sini.
 */

// ===== BASE PATH & URL =====
define('BASE_PATH', dirname(__DIR__));
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';
$host     = $_SERVER['HTTP_HOST'] ?? 'localhost';
$scriptDir = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '')), '/');
define('BASE_URL', $protocol . $host . $scriptDir);

// ===== KONTAK & WHATSAPP =====
// Nomor WhatsApp tunggal — semua tombol "Pesan Sekarang" mengacu pada variabel ini.
define('WA_NUMBER', '6285362042143'); // format internasional tanpa tanda + atau 0 di depan
define('WA_DEFAULT_MESSAGE', 'Halo Myrha Bouquet, saya ingin konsultasi buket custom.');
define('WA_LINK', 'https://wa.me/' . WA_NUMBER . '?text=' . rawurlencode(WA_DEFAULT_MESSAGE));

define('SITE_NAME', 'Myrha Bouquet');
define('SITE_TAGLINE', 'Buket Custom Penuh Makna');
define('SITE_ADDRESS', ' kp.ciceuri ds.pancawangi kec.pancatengah kab.Tasikmalaya RT/RW 10/03');
define('SITE_HOURS', 'Setiap Hari, 09.00 - 20.00 WIB');
define('SITE_INSTAGRAM', 'https://www.instagram.com/miramariska143');
define('SITE_TIKTOK', 'https://tiktok.com/@myrhabouquet');

// ===== SEO DEFAULT =====
define('DEFAULT_META_TITLE', 'Myrha Bouquet | Buket Custom Wisuda, Ulang Tahun & Anniversary');
define('DEFAULT_META_DESC', 'Myrha Bouquet menghadirkan buket custom elegan untuk wisuda, ulang tahun, anniversary, dan lamaran. Harga mulai Rp35.000, bisa custom sesuai budget.');
define('DEFAULT_OG_IMAGE', BASE_URL . '/assets/img/og-cover.jpg');
