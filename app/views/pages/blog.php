<?php require_once '../app/views/layouts/header.php'; ?>

<section class="blog-hero" style="padding: 5rem 0; text-align: center; background: var(--bg-gradient-mid);">
    <div class="container">
        <h1>Blog & <span style="color: var(--primary-color);">Edukasi UMKM</span></h1>
        <p style="max-width: 700px; margin: 0 auto;">Tips, trik, and wawasan terbaru untuk mengembangkan bisnis kuliner Anda.</p>
    </div>
</section>

<section class="blog-list" style="padding: 4rem 0;">
    <div class="container">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
            <!-- Blog Item 1 -->
            <div class="card" style="padding: 0; overflow: hidden;">
                <img src="https://placehold.co/600x300/F0EBDC/570F0F?text=Marketing+Tips" alt="Blog Image" style="width: 100%; height: 200px; object-fit: cover;">
                <div style="padding: 1.5rem;">
                    <small style="color: #777;">Marketing • 2 Hari yang lalu</small>
                    <h3 style="margin: 0.5rem 0;">5 Cara Meningkatkan Penjualan via WhatsApp</h3>
                    <p style="margin-bottom: 1rem;">Pelajari strategi copywriting dan follow-up yang efektif untuk closing lebih banyak order.</p>
                    <a href="#" style="font-weight: 600;">Baca Selengkapnya →</a>
                </div>
            </div>
            
            <!-- Blog Item 2 -->
            <div class="card" style="padding: 0; overflow: hidden;">
                <img src="https://placehold.co/600x300/F0EBDC/570F0F?text=Food+Photography" alt="Blog Image" style="width: 100%; height: 200px; object-fit: cover;">
                <div style="padding: 1.5rem;">
                    <small style="color: #777;">Tips Foto • 1 Minggu yang lalu</small>
                    <h3 style="margin: 0.5rem 0;">Tips Foto Produk Makanan Pakai HP</h3>
                    <p style="margin-bottom: 1rem;">Tidak perlu kamera mahal, HP Anda cukup untuk membuat foto menu yang menggugah selera.</p>
                    <a href="#" style="font-weight: 600;">Baca Selengkapnya →</a>
                </div>
            </div>
            
             <!-- Blog Item 3 -->
             <div class="card" style="padding: 0; overflow: hidden;">
                <img src="https://placehold.co/600x300/F0EBDC/570F0F?text=Management" alt="Blog Image" style="width: 100%; height: 200px; object-fit: cover;">
                <div style="padding: 1.5rem;">
                    <small style="color: #777;">Manajemen • 2 Minggu yang lalu</small>
                    <h3 style="margin: 0.5rem 0;">Pentingnya Mencatat Stok Harian</h3>
                    <p style="margin-bottom: 1rem;">Hindari kerugian bahan baku dengan sistem pencatatan stok yang disiplin.</p>
                    <a href="#" style="font-weight: 600;">Baca Selengkapnya →</a>
                </div>
            </div>
        </div>
        
        <!-- Pagination -->
        <div style="text-align: center; margin-top: 3rem;">
            <a href="#" class="btn btn-outline">Muat Lebih Banyak</a>
        </div>
    </div>
</section>

<?php require_once '../app/views/layouts/footer.php'; ?>
