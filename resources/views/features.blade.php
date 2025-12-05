<?php require_once '../app/views/layouts/header.php'; ?>

<section class="features-hero" style="padding: 5rem 0; text-align: center;">
    <div class="container">
        <h1>Solusi Lengkap untuk <span style="color: var(--primary-color);">UMKM F&B</span></h1>
        <p style="max-width: 700px; margin: 0 auto;">Pelajari bagaimana OrderSip menyelesaikan masalah operasional bisnis Anda.</p>
    </div>
</section>

<section class="problem-solution" style="padding: 4rem 0; background: white;">
    <div class="container">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 4rem;">
            <div>
                <h2 style="color: var(--danger-color);">Masalah</h2>
                <ul style="list-style: none; margin-top: 1.5rem;">
                    <li style="margin-bottom: 1rem; display: flex; align-items: start; gap: 10px;">
                        <i class="fas fa-times-circle" style="color: var(--danger-color); margin-top: 5px;"></i>
                        <span>Pencatatan pesanan manual yang rawan salah dan memakan waktu.</span>
                    </li>
                    <li style="margin-bottom: 1rem; display: flex; align-items: start; gap: 10px;">
                        <i class="fas fa-times-circle" style="color: var(--danger-color); margin-top: 5px;"></i>
                        <span>Biaya pembuatan website custom sangat mahal (jutaan rupiah).</span>
                    </li>
                    <li style="margin-bottom: 1rem; display: flex; align-items: start; gap: 10px;">
                        <i class="fas fa-times-circle" style="color: var(--danger-color); margin-top: 5px;"></i>
                        <span>Kesulitan mengelola stok dan update menu secara real-time.</span>
                    </li>
                </ul>
            </div>
            <div>
                <h2 style="color: var(--success-color);">Solusi OrderSip</h2>
                <ul style="list-style: none; margin-top: 1.5rem;">
                    <li style="margin-bottom: 1rem; display: flex; align-items: start; gap: 10px;">
                        <i class="fas fa-check-circle" style="color: var(--success-color); margin-top: 5px;"></i>
                        <span>Sistem order otomatis via WhatsApp yang terstruktur.</span>
                    </li>
                    <li style="margin-bottom: 1rem; display: flex; align-items: start; gap: 10px;">
                        <i class="fas fa-check-circle" style="color: var(--success-color); margin-top: 5px;"></i>
                        <span>Website katalog instan dengan biaya sangat terjangkau (Freemium).</span>
                    </li>
                    <li style="margin-bottom: 1rem; display: flex; align-items: start; gap: 10px;">
                        <i class="fas fa-check-circle" style="color: var(--success-color); margin-top: 5px;"></i>
                        <span>Dashboard admin simpel untuk kelola menu dan stok kapan saja.</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="tech-stack" style="padding: 4rem 0;">
    <div class="container text-center">
        <h2 class="mb-3">Teknologi Kami</h2>
        <div style="display: flex; justify-content: center; gap: 2rem; flex-wrap: wrap;">
            <div class="card" style="padding: 1.5rem;">
                <h4>Cloud Infrastructure</h4>
                <p>Aman, Cepat, Stabil</p>
            </div>
            <div class="card" style="padding: 1.5rem;">
                <h4>Mobile First Design</h4>
                <p>Optimal di Smartphone</p>
            </div>
            <div class="card" style="padding: 1.5rem;">
                <h4>Real-time Updates</h4>
                <p>Perubahan Instan</p>
            </div>
        </div>
    </div>
</section>

<section class="business-model" style="padding: 4rem 0; background: white;">
    <div class="container text-center">
        <h2 class="mb-3">Model Bisnis</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; margin-top: 2rem;">
            <div class="card" style="border: 2px solid #eee;">
                <h3>Freemium</h3>
                <h1 style="font-size: 3rem; margin: 1rem 0;">Rp 0</h1>
                <ul style="list-style: none; text-align: left; margin-bottom: 2rem;">
                    <li style="margin-bottom: 0.5rem;">✅ 10 Produk</li>
                    <li style="margin-bottom: 0.5rem;">✅ Website Katalog</li>
                    <li style="margin-bottom: 0.5rem;">✅ Order via WhatsApp</li>
                </ul>
                <a href="<?php echo BASE_URL; ?>/auth/register" class="btn btn-outline" style="width: 100%;">Pilih Paket</a>
            </div>
            <div class="card" style="border: 2px solid var(--primary-color); transform: scale(1.05);">
                <div style="background: var(--primary-color); color: white; padding: 5px; border-radius: 4px; display: inline-block; margin-bottom: 10px;">Most Popular</div>
                <h3>Pro</h3>
                <h1 style="font-size: 3rem; margin: 1rem 0;">Rp 99rb<span style="font-size: 1rem;">/bln</span></h1>
                <ul style="list-style: none; text-align: left; margin-bottom: 2rem;">
                    <li style="margin-bottom: 0.5rem;">✅ Unlimited Produk</li>
                    <li style="margin-bottom: 0.5rem;">✅ Custom Domain</li>
                    <li style="margin-bottom: 0.5rem;">✅ Laporan Penjualan</li>
                    <li style="margin-bottom: 0.5rem;">✅ Prioritas Support</li>
                </ul>
                <a href="<?php echo BASE_URL; ?>/auth/register" class="btn btn-primary" style="width: 100%;">Pilih Paket</a>
            </div>
        </div>
    </div>
</section>

<?php require_once '../app/views/layouts/footer.php'; ?>
