# Myrha Bouquet — Landing Page

Landing page modern untuk UMKM jasa pembuatan buket **Myrha Bouquet**, dibangun dengan
**PHP native, HTML5, CSS3, Vanilla JavaScript, dan Bootstrap 5** (tanpa framework backend
seperti Laravel).

## Struktur Folder

```
/
├── index.php           # Landing page utama (semua section: hero s.d. CTA)
├── about.php           # Halaman Tentang Kami
├── gallery.php         # Halaman Galeri (mengarah ke galeri lengkap di index.php)
├── contact.php         # Halaman Kontak
│
├── assets/
│   ├── css/style.css   # Seluruh styling (token warna, tipografi, animasi)
│   ├── js/script.js    # Seluruh interaksi (navbar, slider, lightbox, dst.)
│   ├── img/            # Tempat menaruh gambar produk asli (ganti placeholder)
│   ├── icons/
│   └── fonts/
│
└── includes/
    ├── config.php      # BASE_URL, BASE_PATH, nomor WhatsApp, info kontak
    ├── navbar.php       # <head> + navbar sticky
    └── footer.php       # Footer + back-to-top + script bundle
```

## Konfigurasi Penting

Semua nomor WhatsApp pada tombol "Pesan Sekarang" diambil dari satu variabel di
`includes/config.php`:

```php
define('WA_NUMBER', '6281234567890');
```

Ubah nomor di atas untuk memperbarui **seluruh** tombol WhatsApp di semua halaman.

Variabel lain yang bisa disesuaikan di file yang sama: `SITE_EMAIL`, `SITE_ADDRESS`,
`SITE_HOURS`, `SITE_INSTAGRAM`, `SITE_TIKTOK`, serta meta SEO default.

## Mengganti Gambar Placeholder

Gambar saat ini menggunakan URL Unsplash sebagai placeholder. Untuk produksi:
1. Simpan foto produk asli ke `assets/img/`.
2. Ganti atribut `src` pada `index.php` (hero, tentang, galeri, dll.) ke path lokal,
   misalnya `<?php echo BASE_URL; ?>/assets/img/buket-wisuda-01.jpg`.

## Fitur JavaScript (assets/js/script.js)

- Loading screen sebelum halaman tampil
- Scroll progress bar
- Sticky navbar yang berubah putih saat scroll
- Active menu otomatis sesuai posisi scroll
- Smooth scrolling dengan offset navbar
- Fade-up animation (Intersection Observer) saat elemen muncul
- Counter animation pada section statistik
- Filter galeri per kategori + lightbox custom
- Slider testimoni otomatis (auto-rotate + dot navigation)
- Countdown urgensi batas waktu pemesanan
- Back to top button
- Lazy loading gambar (`loading="lazy"`)

## Menjalankan secara Lokal

Pastikan PHP terinstal, lalu jalankan dari root folder:

```bash
php -S localhost:8000
```

Akses melalui `http://localhost:8000/index.php`.

## SEO

Setiap halaman menyertakan meta title, meta description, dan Open Graph tags melalui
variabel `$metaTitle`, `$metaDesc`, dan `$ogImage` yang di-set sebelum memanggil
`includes/navbar.php`. Tambahkan favicon Anda di `assets/img/favicon.png`.

---
© 2026 Myrha Bouquet. All Rights Reserved.
