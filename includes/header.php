<?php /* Header — Desa Sungai Bakau Kecil */ ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sistem Pusat Layanan Desa Sungai Bakau Kecil — Pengaduan penyakit dan layanan hukum untuk warga desa.">
    <title><?= isset($pageTitle) ? htmlspecialchars($pageTitle) . ' — ' : '' ?>Desa Sungai Bakau Kecil</title>

    <!-- Tailwind CSS (utility helpers) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            corePlugins: { preflight: false },
            theme: { extend: {} }
        }
    </script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<!-- ===== NAVBAR ===== -->
<header>
<nav id="navbar" role="navigation" aria-label="Navigasi Utama">
    <div class="container" style="display:flex; align-items:center; justify-content:space-between; height:68px;">

        <!-- Logo / Brand -->
        <a href="index.php" aria-label="Beranda Desa Sungai Bakau Kecil"
           style="display:flex; align-items:center; gap:12px; text-decoration:none;">
            <!-- Logo Image (Kabupaten Mempawah) -->
            <img src="assets/images/logo.png" alt="Logo Kabupaten Mempawah" style="height:40px; width:auto; object-fit:contain; flex-shrink:0;">
            <!-- Text -->
            <div style="line-height:1.1;">
                <div style="font-size:9.5px; font-weight:600; letter-spacing:0.18em; text-transform:uppercase; color:rgba(255,255,255,0.60);" class="nav-brand-sub">Desa</div>
                <div style="font-size:13.5px; font-weight:700; color:#ffffff; letter-spacing:0.04em;" class="nav-brand-name">Sungai Bakau Kecil</div>
            </div>
        </a>

        <!-- Desktop Menu -->
        <div style="display:flex; align-items:center; gap:6px;" class="hidden lg:flex" id="desktop-nav">

            <!-- Beranda -->
            <a href="index.php" class="nav-link">Beranda</a>

            <!-- Layanan dropdown -->
            <div class="dropdown-wrapper" id="layanan-wrap">
                <button class="nav-link" id="layanan-btn" aria-haspopup="true" aria-expanded="false" aria-controls="layanan-menu">
                    Layanan
                    <svg class="nav-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9"/>
                    </svg>
                </button>

                <div class="dropdown-panel" id="layanan-menu" role="menu" aria-label="Sub-menu Layanan">
                    <a href="layanan-pengaduan.php" class="dropdown-item" role="menuitem">
                        <span class="item-label">Layanan &amp; Pengaduan Penyakit</span>
                        <span class="item-desc">Laporkan masalah kesehatan di lingkungan desa</span>
                    </a>
                    <a href="layanan-hukum.php" class="dropdown-item" role="menuitem">
                        <span class="item-label">Layanan Hukum</span>
                        <span class="item-desc">Konsultasi dan bantuan hukum untuk warga</span>
                    </a>
                </div>
            </div>

        </div>

        <!-- Hamburger — mobile only -->
        <button id="hamburger" aria-label="Buka menu navigasi" aria-expanded="false" aria-controls="mobile-menu"
                style="display:none; flex-direction:column; gap:5px; padding:8px; background:none; border:none; cursor:pointer;"
                class="lg:hidden">
            <span class="hamburger-line" style="display:block; width:22px; height:2px; background:#ffffff; border-radius:2px; transition:all 0.3s;"></span>
            <span class="hamburger-line" style="display:block; width:22px; height:2px; background:#ffffff; border-radius:2px; transition:all 0.3s;"></span>
            <span class="hamburger-line" style="display:block; width:22px; height:2px; background:#ffffff; border-radius:2px; transition:all 0.3s;"></span>
        </button>

    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="mobile-menu" aria-hidden="true">
        <a href="index.php" class="mobile-nav-link" style="justify-content:flex-start;">Beranda</a>
        <button class="mobile-nav-link" id="mobile-layanan-btn" aria-expanded="false" aria-controls="mobile-layanan-sub">
            Layanan
            <svg id="mobile-layanan-chevron" style="width:16px; height:16px; transition:transform 0.25s;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="6 9 12 15 18 9"/>
            </svg>
        </button>
        <div id="mobile-layanan-sub" class="mobile-sub-menu" aria-hidden="true">
            <a href="layanan-pengaduan.php" class="mobile-sub-link">Layanan &amp; Pengaduan Penyakit</a>
            <a href="layanan-hukum.php"     class="mobile-sub-link">Layanan Hukum</a>
        </div>
    </div>
</nav>
</header>
