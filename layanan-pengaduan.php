<?php
$pageTitle = 'Layanan & Pengaduan Penyakit';
require_once 'includes/header.php';
?>

<!-- Banner Header -->
<section style="background:#0a0a0a; position:relative; padding:120px 0 60px; overflow:hidden;">
    <div style="position:absolute; inset:0; background-image:url('assets/images/bg1.jpg'); background-size:cover; background-position:center; opacity:0.25;"></div>
    <div class="container" style="position:relative; z-index:2;">
        <span class="section-label" style="color:rgba(255,255,255,0.60);">Pusat Layanan Warga</span>
        <h1 style="font-family:'Playfair Display',serif; font-size:clamp(2rem,4vw,3.2rem); font-weight:900; color:#ffffff; margin:0 0 12px; line-height:1.15;">
            Layanan &amp; Pengaduan Penyakit
        </h1>
        <p style="font-size:14px; color:rgba(255,255,255,0.75); max-width:560px; margin:0; line-height:1.7;">
            Sampaikan pengaduan penyakit menular, masalah kesehatan lingkungan, atau kebutuhan penanganan medis darurat di Desa Sungai Bakau Kecil.
        </p>
    </div>
</section>

<!-- Content -->
<section style="background:#ffffff; padding:72px 0;">
    <div class="container">
        <div style="display:grid; grid-template-columns:1.8fr 1fr; gap:48px;">
            
            <!-- Form Pengaduan -->
            <div>
                <span class="section-label">Formulir Laporan</span>
                <span class="divider"></span>
                <h2 style="font-family:'Playfair Display',serif; font-size:1.6rem; font-weight:700; margin:0 0 24px; color:#111;">
                    Formulir Pengaduan Kesehatan
                </h2>

                <form action="#" method="POST" style="display:flex; flex-direction:column; gap:20px;">
                    <div style="display:grid; grid-template-columns:1fr 1fr; gap:20px;">
                        <div>
                            <label style="display:block; font-size:12px; font-weight:600; text-transform:uppercase; letter-spacing:0.08em; color:#333; margin-bottom:6px;">Nama Lengkap *</label>
                            <input type="text" required placeholder="Masukkan nama Anda" style="width:100%; padding:12px 14px; font-size:13.5px; border:1px solid #ccc; background:#fff; outline:none; font-family:inherit;">
                        </div>
                        <div>
                            <label style="display:block; font-size:12px; font-weight:600; text-transform:uppercase; letter-spacing:0.08em; color:#333; margin-bottom:6px;">NIK (Nomor Induk Kependudukan) *</label>
                            <input type="text" required placeholder="16 digit NIK" style="width:100%; padding:12px 14px; font-size:13.5px; border:1px solid #ccc; background:#fff; outline:none; font-family:inherit;">
                        </div>
                    </div>

                    <div style="display:grid; grid-template-columns:1fr 1fr; gap:20px;">
                        <div>
                            <label style="display:block; font-size:12px; font-weight:600; text-transform:uppercase; letter-spacing:0.08em; color:#333; margin-bottom:6px;">Nomor HP / WhatsApp *</label>
                            <input type="tel" required placeholder="Contoh: 081234567890" style="width:100%; padding:12px 14px; font-size:13.5px; border:1px solid #ccc; background:#fff; outline:none; font-family:inherit;">
                        </div>
                        <div>
                            <label style="display:block; font-size:12px; font-weight:600; text-transform:uppercase; letter-spacing:0.08em; color:#333; margin-bottom:6px;">Kategori Pengaduan *</label>
                            <select required style="width:100%; padding:12px 14px; font-size:13.5px; border:1px solid #ccc; background:#fff; outline:none; font-family:inherit;">
                                <option value="">-- Pilih Kategori --</option>
                                <option value="demam_berdarah">Laporan Kasus Demam Berdarah (DBD)</option>
                                <option value="penyakit_menular">Penyakit Menular Lainnya</option>
                                <option value="sanitasi">Masalah Air Clean &amp; Sanitasi Lingkungan</option>
                                <option value="posyandu">Layanan Balita / Ibu Hamil</option>
                                <option value="lainnya">Lainnya</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label style="display:block; font-size:12px; font-weight:600; text-transform:uppercase; letter-spacing:0.08em; color:#333; margin-bottom:6px;">Alamat / Lokasi Kejadian *</label>
                        <input type="text" required placeholder="Dusun, RT/RW, atau petunjuk lokasi" style="width:100%; padding:12px 14px; font-size:13.5px; border:1px solid #ccc; background:#fff; outline:none; font-family:inherit;">
                    </div>

                    <div>
                        <label style="display:block; font-size:12px; font-weight:600; text-transform:uppercase; letter-spacing:0.08em; color:#333; margin-bottom:6px;">Detail Gejala / Masalah Kesehatan *</label>
                        <textarea rows="5" required placeholder="Jelaskan secara singkat gejala yang dialami, jumlah orang terdampak, atau masalah yang ditemukan..." style="width:100%; padding:12px 14px; font-size:13.5px; border:1px solid #ccc; background:#fff; outline:none; font-family:inherit; resize:vertical;"></textarea>
                    </div>

                    <button type="submit" class="btn-dark" style="align-self:flex-start; cursor:pointer;">
                        Kirim Laporan Pengaduan
                    </button>
                </form>
            </div>

            <!-- Sidebar Info -->
            <div>
                <div style="background:#fafafa; border:1px solid #e5e5e5; padding:28px; margin-bottom:24px;">
                    <h3 style="font-family:'Playfair Display',serif; font-size:1.2rem; font-weight:700; color:#111; margin:0 0 12px;">Kontak Darurat Kesehatan</h3>
                    <p style="font-size:13px; color:#555; line-height:1.7; margin:0 0 18px;">
                        Jika mengalami kondisi darurat medis yang butuh penanganan secepatnya, segera hubungi kontak berikut:
                    </p>
                    <div style="display:flex; flex-direction:column; gap:12px; font-size:13px;">
                        <div>
                            <strong style="color:#111111; display:block;">Puskesmas Pembantu Desa</strong>
                            <span style="color:#444;">(0561) 987-6543</span>
                        </div>
                        <div>
                            <strong style="color:#111111; display:block;">Ambulans Desa (24 Jam)</strong>
                            <span style="color:#444;">0812-3456-7890</span>
                        </div>
                        <div>
                            <strong style="color:#111111; display:block;">Petugas Kesehatan Desa</strong>
                            <span style="color:#444;">0852-9876-5432</span>
                        </div>
                    </div>
                </div>

                <div style="background:#ffffff; border:1px solid #e5e5e5; padding:28px;">
                    <h3 style="font-family:'Playfair Display',serif; font-size:1.2rem; font-weight:700; color:#111; margin:0 0 12px;">Prosedur Penanganan</h3>
                    <ol style="font-size:13px; color:#555; line-height:1.8; margin:0; padding-left:18px;">
                        <li style="margin-bottom:8px;">Laporan masuk dan diverifikasi tim kesehatan desa.</li>
                        <li style="margin-bottom:8px;">Petugas kesehatan melakukan konfirmasi via telepon/WA.</li>
                        <li style="margin-bottom:8px;">Tim medis menuju ke lokasi jika diperlukan penanganan fisik.</li>
                        <li>Laporan dicatat dalam sistem pemantauan kesehatan desa.</li>
                    </ol>
                </div>
            </div>

        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
