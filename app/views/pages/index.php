<?php require_once '../app/views/layouts/header.php'; ?>

<section class="hero">
    <div class="container">
        <h1>Kelola Bisnis F&B Anda<br>Lebih Mudah dengan <span style="color: var(--primary-color);">OrderSip</span></h1>
        <p>Platform lengkap untuk membuat website toko online, manajemen pesanan WhatsApp, dan atur stok otomatis. Didesain khusus untuk UMKM Kuliner Indonesia.</p>
        <div style="display: flex; gap: 1rem; justify-content: center;">
            <a href="<?php echo BASE_URL; ?>/auth/register" class="btn btn-primary">Coba Gratis Sekarang</a>
            <a href="<?php echo BASE_URL; ?>/pages/contact" class="btn btn-outline">Konsultasi Gratis</a>
        </div>
        
        <!-- Placeholder for Hero Image -->
        <div style="margin-top: 3rem; border-radius: 12px; overflow: hidden; box-shadow: 0 20px 40px rgba(0,0,0,0.1);">
            <img src="https://placehold.co/1000x500/F0EBDC/570F0F?text=Dashboard+OrderSip+Preview" alt="Dashboard Preview" style="width: 100%; display: block;">
        </div>
    </div>
</section>

<section class="features" style="padding: 4rem 0; background: white;">
    <div class="container">
        <div class="text-center mb-3">
            <h2>Kenapa Memilih OrderSip?</h2>
            <p>Semua fitur yang Anda butuhkan untuk scale-up bisnis kuliner.</p>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
            <div class="card">
                <i class="fas fa-store fa-2x" style="color: var(--primary-color); margin-bottom: 1rem;"></i>
                <h3>Website Toko Instan</h3>
                <p>Punya website katalog menu sendiri dengan domain profesional. Tampil elegan di HP pelanggan.</p>
            </div>
            <div class="card">
                <i class="fab fa-whatsapp fa-2x" style="color: var(--success-color); margin-bottom: 1rem;"></i>
                <h3>Order via WhatsApp</h3>
                <p>Pesanan masuk langsung ke WhatsApp Anda dengan format yang rapi. Tidak perlu catat manual lagi.</p>
            </div>
            <div class="card">
                <i class="fas fa-chart-line fa-2x" style="color: var(--warning-color); margin-bottom: 1rem;"></i>
                <h3>Laporan Penjualan</h3>
                <p>Pantau omzet harian, mingguan, dan bulanan. Tahu menu apa yang paling laris.</p>
            </div>
        </div>
    </div>
</section>

<section class="how-it-works" style="padding: 4rem 0;">
    <div class="container">
        <div class="text-center mb-3">
            <h2>Cara Kerja OrderSip</h2>
        </div>
        
        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 2rem; text-align: center;">
            <div style="flex: 1; min-width: 250px;">
                <div style="width: 60px; height: 60px; background: var(--primary-color); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 1.5rem; font-weight: bold;">1</div>
                <h3>Daftar Akun</h3>
                <p>Buat akun gratis dan lengkapi profil bisnis Anda.</p>
            </div>
            <div style="flex: 1; min-width: 250px;">
                <div style="width: 60px; height: 60px; background: var(--primary-color); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 1.5rem; font-weight: bold;">2</div>
                <h3>Upload Menu</h3>
                <p>Masukkan foto, harga, dan deskripsi menu andalan Anda.</p>
            </div>
            <div style="flex: 1; min-width: 250px;">
                <div style="width: 60px; height: 60px; background: var(--primary-color); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 1.5rem; font-weight: bold;">3</div>
                <h3>Sebar Link</h3>
                <p>Bagikan link website ke media sosial dan pelanggan.</p>
            </div>
            <div style="flex: 1; min-width: 250px;">
                <div style="width: 60px; height: 60px; background: var(--primary-color); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 1.5rem; font-weight: bold;">4</div>
                <h3>Terima Order</h3>
                <p>Pesanan masuk via WhatsApp, siap diproses!</p>
            </div>
        </div>
    </div>
</section>

<section class="testimonials" style="padding: 4rem 0; background: white;">
    <div class="container">
        <div class="text-center mb-3">
            <h2>Kata Mereka</h2>
        </div>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
            <div class="card">
                <p style="font-style: italic; margin-bottom: 1rem;">"Sejak pakai OrderSip, pencatatan order jadi rapi banget. Gak ada lagi drama salah catat pesanan. Omzet naik 30%!"</p>
                <div style="display: flex; align-items: center; gap: 1rem;">
                    <div style="width: 50px; height: 50px; background: #ddd; border-radius: 50%;"></div>
                    <div>
                        <h4 style="margin: 0;">Budi Santoso</h4>
                        <small>Owner Kopi Senja</small>
                    </div>
                </div>
            </div>
            <div class="card">
                <p style="font-style: italic; margin-bottom: 1rem;">"Tampilannya mewah, pelanggan saya kira saya bayar developer mahal buat bikin webnya. Padahal pakai OrderSip."</p>
                <div style="display: flex; align-items: center; gap: 1rem;">
                    <div style="width: 50px; height: 50px; background: #ddd; border-radius: 50%;"></div>
                    <div>
                        <h4 style="margin: 0;">Siti Aminah</h4>
                        <small>Dapur Bu Siti</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta" style="padding: 5rem 0; text-align: center; background: var(--primary-color); color: white;">
    <div class="container">
        <h2 style="color: white; margin-bottom: 1rem;">Siap Mengembangkan Bisnis Kuliner Anda?</h2>
        <p style="margin-bottom: 2rem; color: #E2DAC8;">Bergabunglah dengan ribuan UMKM lainnya yang telah go digital bersama OrderSip.</p>
        <a href="<?php echo BASE_URL; ?>/auth/register" class="btn" style="background: white; color: var(--primary-color);">Mulai Sekarang - Gratis!</a>
    </div>
</section>

<?php require_once '../app/views/layouts/footer.php'; ?>
