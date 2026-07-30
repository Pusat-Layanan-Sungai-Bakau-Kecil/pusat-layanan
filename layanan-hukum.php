<?php
$pageTitle = 'Layanan Hukum';
require_once 'includes/header.php';
?>

<!-- Banner Header -->
<section style="background:#0a0a0a; position:relative; padding:120px 0 60px; overflow:hidden;">
    <div style="position:absolute; inset:0; background-image:url('assets/images/bg2.png'); background-size:cover; background-position:center; opacity:0.25;"></div>
    <div class="container" style="position:relative; z-index:2;">
        <span class="section-label" style="color:rgba(255,255,255,0.60);">Bantuan Warga</span>
        <h1 style="font-family:'Playfair Display',serif; font-size:clamp(2rem,4vw,3.2rem); font-weight:900; color:#ffffff; margin:0 0 12px; line-height:1.15;">
            Layanan Hukum Desa
        </h1>
        <p style="font-size:14px; color:rgba(255,255,255,0.75); max-width:560px; margin:0; line-height:1.7;">
            Konsultasi hukum gratis, pendampingan masalah pertanahan, sengketa antar warga, dan administrasi hukum bagi warga Desa Sungai Bakau Kecil.
        </p>
    </div>
</section>

<!-- Content -->
<section style="background:#ffffff; padding:72px 0;">
    <div class="container">
        
        <!-- Bidang Layanan -->
        <div style="margin-bottom:56px;">
            <span class="section-label">Bantuan &amp; Konsultasi</span>
            <span class="divider"></span>
            <h2 style="font-family:'Playfair Display',serif; font-size:1.8rem; font-weight:700; margin:0 0 32px; color:#111;">
                Cakupan Layanan Hukum Warga
            </h2>

            <div class="legal-services-grid">
                <div style="background:#fff; padding:28px 24px;">
                    <h3 style="font-family:'Playfair Display',serif; font-size:1.15rem; font-weight:700; color:#111; margin:0 0 10px;">Sengketa Lahan &amp; Tanah</h3>
                    <p style="font-size:13px; color:#555; line-height:1.65; margin:0;">
                        Mediasi batas kepemilikan tanah, surat riwayat tanah, dan konsultasi legalitas sertifikat untuk warga desa.
                    </p>
                </div>
                <div style="background:#fff; padding:28px 24px;">
                    <h3 style="font-family:'Playfair Display',serif; font-size:1.15rem; font-weight:700; color:#111; margin:0 0 10px;">Konsultasi Keluarga</h3>
                    <p style="font-size:13px; color:#555; line-height:1.65; margin:0;">
                        Bantuan informasi hukum waris, hak asuh, perizinan pernikahan, dan masalah administrasi keluarga.
                    </p>
                </div>
                <div style="background:#fff; padding:28px 24px;">
                    <h3 style="font-family:'Playfair Display',serif; font-size:1.15rem; font-weight:700; color:#111; margin:0 0 10px;">Pendampingan Mediasi</h3>
                    <p style="font-size:13px; color:#555; line-height:1.65; margin:0;">
                        Penyelesaian perselisihan secara kekeluargaan (restoratif) dipimpin oleh Kepala Desa dan Pos Bantuan Hukum.
                    </p>
                </div>
            </div>
        </div>

        <!-- Form Permohonan Konsultasi -->
        <div class="form-layout">
            <div>
                <span class="section-label">Pengajuan Jadwal</span>
                <span class="divider"></span>
                <h2 style="font-family:'Playfair Display',serif; font-size:1.6rem; font-weight:700; margin:0 0 24px; color:#111;">
                    Form Permohonan Konsultasi Hukum
                </h2>

                <form action="#" method="POST" style="display:flex; flex-direction:column; gap:20px;">
                    <div class="form-row-2col">
                        <div>
                            <label class="form-label">Nama Pemohon *</label>
                            <input type="text" required placeholder="Nama sesuai KTP" class="form-input">
                        </div>
                        <div>
                            <label class="form-label">NIK Pemohon *</label>
                            <input type="text" required placeholder="16 digit NIK" class="form-input">
                        </div>
                    </div>

                    <div class="form-row-2col">
                        <div>
                            <label class="form-label">Nomor Telepon / WA *</label>
                            <input type="tel" required placeholder="Nomor kontak aktif" class="form-input">
                        </div>
                        <div>
                            <label class="form-label">Jenis Permasalahan Hukum *</label>
                            <select required class="form-input">
                                <option value="">-- Pilih Jenis --</option>
                                <option value="tanah">Pertanahan &amp; Batas Batas Lahan</option>
                                <option value="sengketa">Sengketa Antar Warga</option>
                                <option value="keluarga">Hukum Keluarga &amp; Waris</option>
                                <option value="perjanjian">Perjanjian &amp; Usaha Desa</option>
                                <option value="lainnya">Lainnya</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label class="form-label">Ringkasan Permasalahan *</label>
                        <textarea rows="5" required placeholder="Uraikan kronologi singkat masalah yang ingin dikonsultasikan secara rahasia dan aman..." class="form-input" style="resize:vertical;"></textarea>
                    </div>

                    <button type="submit" class="btn-dark" style="align-self:flex-start; cursor:pointer;">
                        Ajukan Jadwal Konsultasi
                    </button>
                </form>
            </div>

            <!-- Sidebar Info -->
            <div class="form-sidebar">
                <div style="background:#fafafa; border:1px solid #e5e5e5; padding:28px; margin-bottom:24px;">
                    <h3 style="font-family:'Playfair Display',serif; font-size:1.2rem; font-weight:700; color:#111; margin:0 0 12px;">Pos Bantuan Hukum Desa</h3>
                    <p style="font-size:13px; color:#555; line-height:1.7; margin:0 0 16px;">
                        Jadwal konsultasi tatap muka gratis bersama paralegal / advokat pendamping desa:
                    </p>
                    <div style="font-size:13px; color:#333; line-height:1.8;">
                        <strong style="color:#111111; display:block;">Jadwal Layanan:</strong>
                        <span>Setiap Hari Selasa &amp; Kamis</span><br>
                        <span>Pukul 09.00 – 14.00 WIB</span><br><br>
                        <strong style="color:#111111; display:block;">Lokasi:</strong>
                        <span>Ruang Mediasi Balai Desa Sungai Bakau Kecil</span>
                    </div>
                </div>

                <div style="background:#ffffff; border:1px solid #e5e5e5; padding:28px;">
                    <h3 style="font-family:'Playfair Display',serif; font-size:1.2rem; font-weight:700; color:#111; margin:0 0 12px;">Prinsip Kerahasiaan</h3>
                    <p style="font-size:13px; color:#555; line-height:1.7; margin:0;">
                        Seluruh informasi dan berkas yang disampaikan dalam layanan hukum desa terjamin kerahasiaannya sesuai ketentuan undang-undang bantuan hukum.
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
