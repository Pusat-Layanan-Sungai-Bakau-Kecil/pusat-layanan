<?php $pageTitle = 'Beranda'; require_once 'includes/header.php'; ?>

<!-- ======================================================
     HERO SLIDER — Black & White Theme
     ====================================================== -->
<section id="hero" aria-label="Beranda Slider">

    <!-- Slide 1 -->
    <div class="slide active" style="background-image:url('assets/images/bg1.jpg');" role="img" aria-label="Kawasan Mangrove Sungai Bakau Kecil saat senja"></div>

    <!-- Slide 2 -->
    <div class="slide" style="background-image:url('assets/images/bg2.png');" role="img" aria-label="Hutan Bakau Sungai Bakau Kecil golden hour"></div>

    <!-- Main content -->
    <div class="hero-content">
        <div class="hero-inner">
            <h1 class="hero-title">
                Sistem Pusat Layanan<br>Desa Sungai Bakau Kecil
            </h1>
            <p class="hero-quote">
                "Ajukan pengaduan, cek informasi, dan akses layanan desa dengan mudah melalui satu genggaman tangan."
            </p>
            <p class="hero-author">Desa Sungai Bakau Kecil — Kalimantan Barat</p>
        </div>
    </div>

    <!-- Slide number bottom-left -->
    <div class="slide-number" id="slide-number" aria-live="polite">
        <span class="current" id="slide-current">01</span>
        <span style="color:rgba(255,255,255,0.30); margin:0 5px;">/</span>
        <span>02</span>
    </div>

    <!-- Slide dots center-bottom -->
    <div class="slide-dots" role="tablist" aria-label="Navigasi Slide">
        <button class="dot active" role="tab" aria-selected="true"  aria-label="Slide 1" data-index="0"></button>
        <button class="dot"        role="tab" aria-selected="false" aria-label="Slide 2" data-index="1"></button>
    </div>

    <!-- Arrow nav bottom-right -->
    <div class="slide-nav" aria-label="Kontrol Slider">
        <button class="slide-btn" id="btn-prev" aria-label="Slide sebelumnya">
            <svg viewBox="0 0 24 24"><polyline points="15 18 9 12 15 6"/></svg>
        </button>
        <button class="slide-btn" id="btn-next" aria-label="Slide berikutnya">
            <svg viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
        </button>
    </div>

    <!-- Follow us -->
    <div class="follow-us" aria-label="Ikuti Kami">
        <span class="follow-us-label">Ikuti Kami</span>
        <a href="#" aria-label="Facebook">
            <svg viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
        </a>
        <a href="#" aria-label="Instagram">
            <svg viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
        </a>
        <a href="#" aria-label="YouTube">
            <svg viewBox="0 0 24 24"><path d="M22.54 6.42a2.78 2.78 0 00-1.95-1.96C18.88 4 12 4 12 4s-6.88 0-8.59.46A2.78 2.78 0 001.46 6.42 29 29 0 001 12a29 29 0 00.46 5.58 2.78 2.78 0 001.95 1.95C5.12 20 12 20 12 20s6.88 0 8.59-.47a2.78 2.78 0 001.95-1.95A29 29 0 0023 12a29 29 0 00-.46-5.58z"/><polygon points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02" fill="#111" stroke="none"/></svg>
        </a>
    </div>

    <!-- Progress line -->
    <div class="hero-progress-wrap">
        <div class="hero-progress-bar" id="hero-progress"></div>
    </div>
</section>


<!-- ======================================================
     ANNOUNCEMENT BAR (Solid Black)
     ====================================================== -->
<div class="announce-bar" aria-label="Pengumuman Desa">
    <div class="ticker-track" id="ticker">
        <span>Kantor Desa buka Senin–Jumat pukul 08.00–16.00 WIB</span>
        <span class="ticker-sep">|</span>
        <span>Posyandu Balita: 5 Agustus 2025, Pukul 09.00 WIB di Balai Desa</span>
        <span class="ticker-sep">|</span>
        <span>Program air bersih: Pendaftaran dibuka hingga 31 Juli 2025</span>
        <span class="ticker-sep">|</span>
        <span>Layanan Surat Keterangan kini tersedia secara online</span>
        <span class="ticker-sep">|</span>
        <!-- Duplicate for seamless loop -->
        <span>Kantor Desa buka Senin–Jumat pukul 08.00–16.00 WIB</span>
        <span class="ticker-sep">|</span>
        <span>Posyandu Balita: 5 Agustus 2025, Pukul 09.00 WIB di Balai Desa</span>
        <span class="ticker-sep">|</span>
        <span>Program air bersih: Pendaftaran dibuka hingga 31 Juli 2025</span>
        <span class="ticker-sep">|</span>
        <span>Layanan Surat Keterangan kini tersedia secara online</span>
        <span class="ticker-sep">|</span>
    </div>
</div>


<!-- ======================================================
     STATS
     ====================================================== -->
<section class="stats-section py-12 reveal" aria-label="Statistik Desa">
    <div class="container">
        <div style="display:grid; grid-template-columns:repeat(4,1fr); gap:0; border:1px solid #e5e5e5;">
            <?php
            $stats = [
                ['num' => '3.847', 'label' => 'Penduduk',         'target' => 3847],
                ['num' => '1.124', 'label' => 'Kepala Keluarga',  'target' => 1124],
                ['num' => '247',   'label' => 'Layanan Bulan Ini','target' => 247],
                ['num' => '98%',   'label' => 'Kepuasan Warga',   'target' => 98],
            ];
            foreach ($stats as $i => $s): ?>
            <div class="stat-item" style="padding:28px 20px; <?= $i < 3 ? 'border-right:1px solid #e5e5e5;' : '' ?>">
                <span class="stat-num" data-target="<?= $s['target'] ?>"><?= $s['num'] ?></span>
                <span class="stat-label"><?= $s['label'] ?></span>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<!-- ======================================================
     LAYANAN UTAMA
     ====================================================== -->
<section id="layanan" aria-labelledby="layanan-heading" style="background:#ffffff; padding:72px 0;">
    <div class="container">

        <div class="reveal" style="margin-bottom:40px;">
            <span class="section-label">Apa yang bisa kami bantu?</span>
            <span class="divider"></span>
            <h2 class="section-title" id="layanan-heading" style="font-size:2rem;">Layanan Desa</h2>
            <p style="font-size:14px; color:#666; max-width:500px; line-height:1.7; margin:0;">
                Akses berbagai layanan desa secara mudah, cepat, dan transparan — kapan saja dan di mana saja.
            </p>
        </div>

        <div style="display:grid; grid-template-columns:repeat(2,1fr); gap:1px; background:#e5e5e5;" class="reveal">
            <?php
            $services = [
                [
                    'title' => 'Layanan & Pengaduan Penyakit',
                    'desc'  => 'Laporkan masalah kesehatan, penyakit menular, atau kondisi lingkungan yang membahayakan warga di lingkungan desa.',
                    'link'  => 'layanan-pengaduan.php',
                    'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>',
                ],
                [
                    'title' => 'Layanan Hukum',
                    'desc'  => 'Dapatkan bantuan dan konsultasi hukum untuk permasalahan warga, sengketa tanah, administrasi kependudukan, dan kebutuhan hukum lainnya.',
                    'link'  => 'layanan-hukum.php',
                    'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/>',
                ],
            ];
            foreach ($services as $s): ?>
            <div class="service-card" style="background:#fff;">
                <div class="service-icon-wrap">
                    <svg viewBox="0 0 24 24"><?= $s['icon'] ?></svg>
                </div>
                <h3 class="service-title"><?= $s['title'] ?></h3>
                <p class="service-desc"><?= $s['desc'] ?></p>
                <a href="<?= $s['link'] ?>" class="service-link">
                    Lihat Layanan
                    <svg viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<!-- ======================================================
     TENTANG DESA
     ====================================================== -->
<section aria-labelledby="about-heading" style="background:#fafafa; padding:72px 0; border-top:1px solid #e5e5e5;">
    <div class="container">
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:56px; align-items:center;" class="reveal">

            <!-- Image -->
            <div class="about-img-wrap">
                <img src="assets/images/bg1.jpg" alt="Kawasan mangrove Desa Sungai Bakau Kecil" loading="lazy">
            </div>

            <!-- Text -->
            <div>
                <span class="section-label">Tentang Desa</span>
                <span class="divider"></span>
                <h2 class="section-title" id="about-heading" style="font-size:1.9rem; margin-bottom:18px;">
                    Desa dengan Kawasan<br>Mangrove yang Kaya
                </h2>
                <p style="font-size:14px; color:#555; line-height:1.8; margin:0 0 14px;">
                    Desa Sungai Bakau Kecil terletak di Kabupaten Mempawah, Kalimantan Barat. Dikenal dengan kawasan hutan mangrove yang luas, ekosistem pesisir yang kaya, dan masyarakat yang guyub.
                </p>
                <p style="font-size:14px; color:#555; line-height:1.8; margin:0 0 28px;">
                    Melalui sistem pusat layanan digital ini, kami berkomitmen memberikan pelayanan publik yang mudah, transparan, dan akuntabel kepada seluruh warga.
                </p>
                <div style="display:flex; gap:12px; flex-wrap:wrap;">
                    <a href="tentang.php" class="btn-dark">
                        Selengkapnya
                    </a>
                    <a href="kontak.php" class="btn-dark-outline">
                        Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ======================================================
     PENGUMUMAN / BERITA TERBARU
     ====================================================== -->
<section aria-labelledby="news-heading" style="background:#ffffff; padding:72px 0; border-top:1px solid #e5e5e5;">
    <div class="container">

        <div style="display:flex; align-items:flex-end; justify-content:space-between; margin-bottom:36px;" class="reveal">
            <div>
                <span class="section-label">Informasi Terkini</span>
                <span class="divider"></span>
                <h2 class="section-title" id="news-heading" style="font-size:1.9rem; margin-bottom:0;">Pengumuman Desa</h2>
            </div>
            <a href="pengumuman.php" style="font-size:12px; font-weight:700; letter-spacing:0.10em; text-transform:uppercase; color:#111111; text-decoration:none;">
                Lihat Semua &rarr;
            </a>
        </div>

        <div style="display:grid; grid-template-columns:repeat(3,1fr); gap:1px; background:#e5e5e5;" class="reveal">
            <?php
            $news = [
                [
                    'cat'   => 'Kesehatan',
                    'date'  => '28 Jul 2025',
                    'title' => 'Posyandu Balita Bulan Agustus 2025',
                    'desc'  => 'Posyandu balita akan dilaksanakan pada 5 Agustus 2025 pukul 09.00 WIB di Balai Desa.',
                    'img'   => 'assets/images/bg1.jpg',
                ],
                [
                    'cat'   => 'Infrastruktur',
                    'date'  => '25 Jul 2025',
                    'title' => 'Perbaikan Jalan Dusun III Dimulai',
                    'desc'  => 'Pekerjaan perbaikan jalan dusun III dimulai minggu ini dan diperkirakan selesai dalam 2 minggu.',
                    'img'   => 'assets/images/bg2.png',
                ],
                [
                    'cat'   => 'Administrasi',
                    'date'  => '20 Jul 2025',
                    'title' => 'Layanan Surat Online Resmi Dibuka',
                    'desc'  => 'Warga kini dapat mengajukan berbagai surat keterangan secara online melalui portal layanan desa.',
                    'img'   => 'assets/images/bg1.jpg',
                ],
            ];
            foreach ($news as $n): ?>
            <div class="news-card" style="background:#fff;">
                <div style="overflow:hidden; height:200px;">
                    <img src="<?= $n['img'] ?>" alt="<?= $n['title'] ?>" loading="lazy"
                         style="width:100%; height:200px; object-fit:cover; transition:transform 0.4s; display:block;">
                </div>
                <div class="news-card-body">
                    <span class="news-cat"><?= $n['cat'] ?></span>
                    <h3 class="news-title"><a href="pengumuman.php" style="color:inherit; text-decoration:none;"><?= $n['title'] ?></a></h3>
                    <p style="font-size:13px; color:#777; line-height:1.6; margin:0 0 12px;"><?= $n['desc'] ?></p>
                    <span class="news-date"><?= $n['date'] ?></span>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<!-- ======================================================
     CTA SECTION (Black Theme)
     ====================================================== -->
<section class="cta-section" style="padding:80px 0;" aria-label="Hubungi Kami">
    <div class="container" style="position:relative; z-index:2;">
        <div style="max-width:620px; margin:0 auto; text-align:center;" class="reveal">
            <span class="section-label" style="color:rgba(255,255,255,0.60);">Butuh Bantuan?</span>
            <h2 style="font-family:'Playfair Display',serif; font-size:2rem; font-weight:700; color:#ffffff; margin:0 0 16px; line-height:1.2;">
                Ada yang perlu<br>kami bantu?
            </h2>
            <p style="font-size:14px; color:rgba(255,255,255,0.70); margin:0 0 32px; line-height:1.7;">
                Tim pelayanan desa siap membantu Anda. Sampaikan pengaduan atau pertanyaan Anda sekarang juga.
            </p>
            <div style="display:flex; justify-content:center; gap:14px; flex-wrap:wrap;">
                <a href="layanan-pengaduan.php" class="btn-primary">Buat Pengaduan</a>
                <a href="tel:05611234567"        class="btn-outline">Hubungi Kantor Desa</a>
            </div>
        </div>
    </div>
</section>


<?php require_once 'includes/footer.php'; ?>
