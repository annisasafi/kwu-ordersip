<?php require_once 'partials/header.php'; ?>

<!-- Hero Section -->
<section class="hero" style="padding: 6rem 0 4rem; background: linear-gradient(135deg, #FFFBF0 0%, #F0EBDC 100%);">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
            <div>
                <div style="display: inline-block; background: rgba(87, 15, 15, 0.1); color: var(--primary-color); padding: 0.5rem 1rem; border-radius: 20px; font-size: 0.9rem; font-weight: 600; margin-bottom: 1.5rem;">
                    🚀 Platform SaaS untuk UMKM F&B
                </div>
                <h1 style="font-size: 3rem; line-height: 1.2; margin-bottom: 1.5rem;">
                    Kelola Menu dan Pesanan <span style="color: var(--primary-color);">Lebih Mudah</span>
                </h1>
                <p style="font-size: 1.1rem; color: #666; margin-bottom: 2rem; line-height: 1.8;">
                    Platform lengkap untuk membuat website toko online, manajemen pesanan WhatsApp, dan atur stok otomatis. Didesain khusus untuk UMKM Kuliner Indonesia.
                </p>
                <div style="display: flex; gap: 1rem; margin-bottom: 2rem;">
                    <a href="<?php echo BASE_URL; ?>/auth/register" class="btn btn-primary" style="padding: 1rem 2rem; font-size: 1.1rem;">
                        Coba Gratis Sekarang
                    </a>
                    <a href="<?php echo BASE_URL; ?>/pages/contact" class="btn btn-outline" style="padding: 1rem 2rem; font-size: 1.1rem;">
                        Konsultasi Gratis
                    </a>
                </div>
                <div style="display: flex; gap: 2rem; align-items: center; color: #666; font-size: 0.9rem;">
                    <div style="display: flex; align-items: center; gap: 0.5rem;">
                        <i class="fas fa-check-circle" style="color: var(--success-color);"></i>
                        <span>Gratis 14 hari</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 0.5rem;">
                        <i class="fas fa-check-circle" style="color: var(--success-color);"></i>
                        <span>Tanpa kartu kredit</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 0.5rem;">
                        <i class="fas fa-check-circle" style="color: var(--success-color);"></i>
                        <span>Setup 5 menit</span>
                    </div>
                </div>
            </div>
            <div style="position: relative;">
                <div style="border-radius: 20px; overflow: hidden; box-shadow: 0 30px 60px rgba(87, 15, 15, 0.15);">
                    <img src="<?php echo BASE_URL; ?>/assets/images/hero-dashboard.png" alt="Dashboard OrderSip" style="width: 100%; display: block;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="features" style="padding: 5rem 0; background: white;">
    <div class="container">
        <div class="text-center mb-3" style="max-width: 700px; margin: 0 auto 4rem;">
            <h2 style="font-size: 2.5rem; margin-bottom: 1rem;">Kenapa Memilih OrderSip?</h2>
            <p style="font-size: 1.1rem; color: #666;">Semua fitur yang Anda butuhkan untuk scale-up bisnis kuliner dalam satu platform.</p>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem;">
            <div class="card" style="text-align: center; border: 2px solid #f5f5f5;">
                <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #570F0F 0%, #8B1E1E 100%); border-radius: 16px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
                    <i class="fas fa-store" style="color: white; font-size: 2rem;"></i>
                </div>
                <h3 style="font-size: 1.3rem; margin-bottom: 1rem;">Website Toko Instan</h3>
                <p style="color: #666; line-height: 1.7;">Punya website katalog menu sendiri dengan domain profesional. Tampil elegan di HP pelanggan.</p>
            </div>
            
            <div class="card" style="text-align: center; border: 2px solid #f5f5f5;">
                <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #25D366 0%, #128C7E 100%); border-radius: 16px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
                    <i class="fab fa-whatsapp" style="color: white; font-size: 2rem;"></i>
                </div>
                <h3 style="font-size: 1.3rem; margin-bottom: 1rem;">Order via WhatsApp</h3>
                <p style="color: #666; line-height: 1.7;">Pesanan masuk langsung ke WhatsApp Anda dengan format yang rapi. Tidak perlu catat manual lagi.</p>
            </div>
            
            <div class="card" style="text-align: center; border: 2px solid #f5f5f5;">
                <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #FF9800 0%, #F57C00 100%); border-radius: 16px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
                    <i class="fas fa-chart-line" style="color: white; font-size: 2rem;"></i>
                </div>
                <h3 style="font-size: 1.3rem; margin-bottom: 1rem;">Laporan Penjualan</h3>
                <p style="color: #666; line-height: 1.7;">Pantau omzet harian, mingguan, dan bulanan. Tahu menu apa yang paling laris.</p>
            </div>
            
            <div class="card" style="text-align: center; border: 2px solid #f5f5f5;">
                <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #9C27B0 0%, #7B1FA2 100%); border-radius: 16px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
                    <i class="fas fa-boxes" style="color: white; font-size: 2rem;"></i>
                </div>
                <h3 style="font-size: 1.3rem; margin-bottom: 1rem;">Manajemen Stok</h3>
                <p style="color: #666; line-height: 1.7;">Kelola stok bahan baku dan produk. Notifikasi otomatis saat stok menipis.</p>
            </div>
            
            <div class="card" style="text-align: center; border: 2px solid #f5f5f5;">
                <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #2196F3 0%, #1976D2 100%); border-radius: 16px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
                    <i class="fas fa-mobile-alt" style="color: white; font-size: 2rem;"></i>
                </div>
                <h3 style="font-size: 1.3rem; margin-bottom: 1rem;">Responsive Design</h3>
                <p style="color: #666; line-height: 1.7;">Website toko Anda tampil sempurna di semua perangkat, dari HP hingga desktop.</p>
            </div>
            
            <div class="card" style="text-align: center; border: 2px solid #f5f5f5;">
                <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #E91E63 0%, #C2185B 100%); border-radius: 16px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
                    <i class="fas fa-gift" style="color: white; font-size: 2rem;"></i>
                </div>
                <h3 style="font-size: 1.3rem; margin-bottom: 1rem;">Program Loyalitas</h3>
                <p style="color: #666; line-height: 1.7;">Buat program poin dan reward untuk pelanggan setia Anda.</p>
            </div>
        </div>
    </div>
</section>

<!-- Business Types Section -->
<section class="business-types" style="padding: 5rem 0; background: linear-gradient(135deg, #FFFBF0 0%, #F0EBDC 100%);">
    <div class="container">
        <div class="text-center mb-3" style="max-width: 700px; margin: 0 auto 4rem;">
            <h2 style="font-size: 2.5rem; margin-bottom: 1rem;">Bergabunglah bersama Pengusaha Sibermu</h2>
            <p style="font-size: 1.1rem; color: #666;">OrderSip cocok untuk berbagai jenis bisnis kuliner</p>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
            <div class="card" style="overflow: hidden; padding: 0;">
                <div style="height: 200px; overflow: hidden;">
                    <img src="<?php echo BASE_URL; ?>/assets/images/coffee-shop.png" alt="Coffee Shop" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div style="padding: 1.5rem;">
                    <h3 style="margin-bottom: 0.5rem;">Coffee Shop</h3>
                    <p style="color: #666;">Kelola menu kopi dan snack dengan mudah</p>
                </div>
            </div>
            
            <div class="card" style="overflow: hidden; padding: 0;">
                <div style="height: 200px; overflow: hidden;">
                    <img src="<?php echo BASE_URL; ?>/assets/images/restaurant.png" alt="Restaurant" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div style="padding: 1.5rem;">
                    <h3 style="margin-bottom: 0.5rem;">Resto & Cafe</h3>
                    <p style="color: #666;">Terima pesanan dine-in dan delivery</p>
                </div>
            </div>
            
            <div class="card" style="overflow: hidden; padding: 0;">
                <div style="height: 200px; overflow: hidden;">
                    <img src="<?php echo BASE_URL; ?>/assets/images/warung.png" alt="Warung" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div style="padding: 1.5rem;">
                    <h3 style="margin-bottom: 0.5rem;">Warung & Katering</h3>
                    <p style="color: #666;">Atur pesanan katering dan pre-order</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How It Works Section -->
<section class="how-it-works" style="padding: 5rem 0; background: white;">
    <div class="container">
        <div class="text-center mb-3" style="max-width: 700px; margin: 0 auto 4rem;">
            <h2 style="font-size: 2.5rem; margin-bottom: 1rem;">Mudah Langsung Jadi dengan 4 Langkah</h2>
            <p style="font-size: 1.1rem; color: #666;">Mulai terima pesanan online dalam hitungan menit</p>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 3rem; position: relative;">
            <div style="text-align: center; position: relative;">
                <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #570F0F 0%, #8B1E1E 100%); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; font-size: 2rem; font-weight: bold; box-shadow: 0 10px 30px rgba(87, 15, 15, 0.2);">
                    1
                </div>
                <h3 style="font-size: 1.3rem; margin-bottom: 1rem;">Daftar Akun</h3>
                <p style="color: #666; line-height: 1.7;">Buat akun gratis dan lengkapi profil bisnis Anda dalam 2 menit</p>
            </div>
            
            <div style="text-align: center; position: relative;">
                <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #570F0F 0%, #8B1E1E 100%); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; font-size: 2rem; font-weight: bold; box-shadow: 0 10px 30px rgba(87, 15, 15, 0.2);">
                    2
                </div>
                <h3 style="font-size: 1.3rem; margin-bottom: 1rem;">Upload Menu</h3>
                <p style="color: #666; line-height: 1.7;">Masukkan foto, harga, dan deskripsi menu andalan Anda</p>
            </div>
            
            <div style="text-align: center; position: relative;">
                <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #570F0F 0%, #8B1E1E 100%); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; font-size: 2rem; font-weight: bold; box-shadow: 0 10px 30px rgba(87, 15, 15, 0.2);">
                    3
                </div>
                <h3 style="font-size: 1.3rem; margin-bottom: 1rem;">Sebar Link</h3>
                <p style="color: #666; line-height: 1.7;">Bagikan link website ke media sosial dan pelanggan Anda</p>
            </div>
            
            <div style="text-align: center; position: relative;">
                <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #570F0F 0%, #8B1E1E 100%); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; font-size: 2rem; font-weight: bold; box-shadow: 0 10px 30px rgba(87, 15, 15, 0.2);">
                    4
                </div>
                <h3 style="font-size: 1.3rem; margin-bottom: 1rem;">Terima Order</h3>
                <p style="color: #666; line-height: 1.7;">Pesanan masuk via WhatsApp, siap diproses langsung!</p>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section class="pricing" style="padding: 5rem 0; background: linear-gradient(135deg, #FFFBF0 0%, #F0EBDC 100%);">
    <div class="container">
        <div class="text-center mb-3" style="max-width: 700px; margin: 0 auto 4rem;">
            <h2 style="font-size: 2.5rem; margin-bottom: 1rem;">Pilih Paket Sesuai Kebutuhan Anda</h2>
            <p style="font-size: 1.1rem; color: #666;">Harga terjangkau untuk semua skala bisnis</p>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; max-width: 1000px; margin: 0 auto;">
            <!-- Starter Plan -->
            <div class="card" style="border: 2px solid #e0e0e0; position: relative;">
                <h3 style="font-size: 1.5rem; margin-bottom: 0.5rem;">Paket Starter</h3>
                <div style="margin-bottom: 1.5rem;">
                    <span style="font-size: 2.5rem; font-weight: bold; color: var(--primary-color);">Gratis</span>
                    <span style="color: #666;">/bulan</span>
                </div>
                <ul style="list-style: none; margin-bottom: 2rem;">
                    <li style="padding: 0.5rem 0; display: flex; align-items: center; gap: 0.5rem;">
                        <i class="fas fa-check" style="color: var(--success-color);"></i>
                        <span>Website toko online</span>
                    </li>
                    <li style="padding: 0.5rem 0; display: flex; align-items: center; gap: 0.5rem;">
                        <i class="fas fa-check" style="color: var(--success-color);"></i>
                        <span>Maksimal 20 produk</span>
                    </li>
                    <li style="padding: 0.5rem 0; display: flex; align-items: center; gap: 0.5rem;">
                        <i class="fas fa-check" style="color: var(--success-color);"></i>
                        <span>Order via WhatsApp</span>
                    </li>
                    <li style="padding: 0.5rem 0; display: flex; align-items: center; gap: 0.5rem;">
                        <i class="fas fa-check" style="color: var(--success-color);"></i>
                        <span>Laporan dasar</span>
                    </li>
                </ul>
                <a href="<?php echo BASE_URL; ?>/auth/register" class="btn btn-outline" style="width: 100%;">Mulai Gratis</a>
            </div>
            
            <!-- Pro Plan -->
            <div class="card" style="border: 3px solid var(--primary-color); position: relative; transform: scale(1.05); box-shadow: 0 20px 50px rgba(87, 15, 15, 0.15);">
                <div style="position: absolute; top: -15px; left: 50%; transform: translateX(-50%); background: var(--primary-color); color: white; padding: 0.5rem 1.5rem; border-radius: 20px; font-size: 0.9rem; font-weight: 600;">
                    PALING POPULER
                </div>
                <h3 style="font-size: 1.5rem; margin-bottom: 0.5rem; margin-top: 1rem;">Paket Pro</h3>
                <div style="margin-bottom: 1.5rem;">
                    <span style="font-size: 2.5rem; font-weight: bold; color: var(--primary-color);">Rp 99K</span>
                    <span style="color: #666;">/bulan</span>
                </div>
                <ul style="list-style: none; margin-bottom: 2rem;">
                    <li style="padding: 0.5rem 0; display: flex; align-items: center; gap: 0.5rem;">
                        <i class="fas fa-check" style="color: var(--success-color);"></i>
                        <span><strong>Unlimited produk</strong></span>
                    </li>
                    <li style="padding: 0.5rem 0; display: flex; align-items: center; gap: 0.5rem;">
                        <i class="fas fa-check" style="color: var(--success-color);"></i>
                        <span>Custom domain</span>
                    </li>
                    <li style="padding: 0.5rem 0; display: flex; align-items: center; gap: 0.5rem;">
                        <i class="fas fa-check" style="color: var(--success-color);"></i>
                        <span>Manajemen stok</span>
                    </li>
                    <li style="padding: 0.5rem 0; display: flex; align-items: center; gap: 0.5rem;">
                        <i class="fas fa-check" style="color: var(--success-color);"></i>
                        <span>Laporan lengkap</span>
                    </li>
                    <li style="padding: 0.5rem 0; display: flex; align-items: center; gap: 0.5rem;">
                        <i class="fas fa-check" style="color: var(--success-color);"></i>
                        <span>Program loyalitas</span>
                    </li>
                    <li style="padding: 0.5rem 0; display: flex; align-items: center; gap: 0.5rem;">
                        <i class="fas fa-check" style="color: var(--success-color);"></i>
                        <span>Priority support</span>
                    </li>
                </ul>
                <a href="<?php echo BASE_URL; ?>/auth/register" class="btn btn-primary" style="width: 100%;">Coba 14 Hari Gratis</a>
            </div>
            
            <!-- Enterprise Plan -->
            <div class="card" style="border: 2px solid #e0e0e0; position: relative;">
                <h3 style="font-size: 1.5rem; margin-bottom: 0.5rem;">Paket Enterprise</h3>
                <div style="margin-bottom: 1.5rem;">
                    <span style="font-size: 2.5rem; font-weight: bold; color: var(--primary-color);">Custom</span>
                </div>
                <ul style="list-style: none; margin-bottom: 2rem;">
                    <li style="padding: 0.5rem 0; display: flex; align-items: center; gap: 0.5rem;">
                        <i class="fas fa-check" style="color: var(--success-color);"></i>
                        <span>Semua fitur Pro</span>
                    </li>
                    <li style="padding: 0.5rem 0; display: flex; align-items: center; gap: 0.5rem;">
                        <i class="fas fa-check" style="color: var(--success-color);"></i>
                        <span>Multi-cabang</span>
                    </li>
                    <li style="padding: 0.5rem 0; display: flex; align-items: center; gap: 0.5rem;">
                        <i class="fas fa-check" style="color: var(--success-color);"></i>
                        <span>API akses</span>
                    </li>
                    <li style="padding: 0.5rem 0; display: flex; align-items: center; gap: 0.5rem;">
                        <i class="fas fa-check" style="color: var(--success-color);"></i>
                        <span>Dedicated support</span>
                    </li>
                    <li style="padding: 0.5rem 0; display: flex; align-items: center; gap: 0.5rem;">
                        <i class="fas fa-check" style="color: var(--success-color);"></i>
                        <span>Custom features</span>
                    </li>
                </ul>
                <a href="<?php echo BASE_URL; ?>/pages/contact" class="btn btn-outline" style="width: 100%;">Hubungi Kami</a>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials" style="padding: 5rem 0; background: white;">
    <div class="container">
        <div class="text-center mb-3" style="max-width: 700px; margin: 0 auto 4rem;">
            <h2 style="font-size: 2.5rem; margin-bottom: 1rem;">Pertanyaan yang Sering Diajukan</h2>
            <p style="font-size: 1.1rem; color: #666;">Temukan jawaban untuk pertanyaan umum tentang OrderSip</p>
        </div>
        
        <div style="max-width: 800px; margin: 0 auto;">
            <div class="card" style="margin-bottom: 1.5rem; border-left: 4px solid var(--primary-color);">
                <h3 style="font-size: 1.2rem; margin-bottom: 0.5rem; color: var(--primary-color);">Apakah OrderSip benar-benar gratis?</h3>
                <p style="color: #666; line-height: 1.7;">Ya! Kami menyediakan paket Starter yang selamanya gratis dengan fitur dasar yang cukup untuk memulai bisnis online Anda. Anda bisa upgrade kapan saja jika butuh fitur lebih lengkap.</p>
            </div>
            
            <div class="card" style="margin-bottom: 1.5rem; border-left: 4px solid var(--primary-color);">
                <h3 style="font-size: 1.2rem; margin-bottom: 0.5rem; color: var(--primary-color);">Bagaimana cara pelanggan memesan?</h3>
                <p style="color: #666; line-height: 1.7;">Pelanggan membuka website toko Anda, memilih menu, lalu klik tombol "Pesan via WhatsApp". Pesanan akan otomatis terformat rapi dan dikirim ke nomor WhatsApp bisnis Anda.</p>
            </div>
            
            <div class="card" style="margin-bottom: 1.5rem; border-left: 4px solid var(--primary-color);">
                <h3 style="font-size: 1.2rem; margin-bottom: 0.5rem; color: var(--primary-color);">Apakah saya perlu keahlian teknis?</h3>
                <p style="color: #666; line-height: 1.7;">Tidak sama sekali! OrderSip dirancang sangat mudah digunakan. Jika Anda bisa menggunakan WhatsApp dan Instagram, Anda pasti bisa menggunakan OrderSip.</p>
            </div>
            
            <div class="card" style="margin-bottom: 1.5rem; border-left: 4px solid var(--primary-color);">
                <h3 style="font-size: 1.2rem; margin-bottom: 0.5rem; color: var(--primary-color);">Berapa lama setup awal?</h3>
                <p style="color: #666; line-height: 1.7;">Hanya 5-10 menit! Daftar akun, upload logo dan foto menu, lalu website toko Anda sudah siap dibagikan ke pelanggan.</p>
            </div>
            
            <div class="card" style="margin-bottom: 1.5rem; border-left: 4px solid var(--primary-color);">
                <h3 style="font-size: 1.2rem; margin-bottom: 0.5rem; color: var(--primary-color);">Apakah ada biaya transaksi?</h3>
                <p style="color: #666; line-height: 1.7;">Tidak ada! Kami tidak memotong komisi dari setiap transaksi. Anda hanya perlu membayar biaya langganan bulanan sesuai paket yang dipilih.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta" style="padding: 6rem 0; text-align: center; background: linear-gradient(135deg, #570F0F 0%, #8B1E1E 100%); color: white; position: relative; overflow: hidden;">
    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; opacity: 0.1; background-image: url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"1\"%3E%3Cpath d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    <div class="container" style="position: relative; z-index: 1;">
        <h2 style="color: white; margin-bottom: 1rem; font-size: 2.5rem;">Siap Mengembangkan Bisnis Kuliner Anda?</h2>
        <p style="margin-bottom: 3rem; color: #E2DAC8; font-size: 1.2rem; max-width: 600px; margin-left: auto; margin-right: auto;">Bergabunglah dengan ribuan UMKM lainnya yang telah go digital bersama OrderSip. Mulai gratis hari ini!</p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <a href="<?php echo BASE_URL; ?>/auth/register" class="btn" style="background: white; color: var(--primary-color); padding: 1rem 2.5rem; font-size: 1.1rem; box-shadow: 0 10px 30px rgba(0,0,0,0.2);">
                Mulai Sekarang - Gratis!
            </a>
            <a href="<?php echo BASE_URL; ?>/pages/contact" class="btn btn-outline" style="border-color: white; color: white; padding: 1rem 2.5rem; font-size: 1.1rem;">
                Tanya Jawab
            </a>
        </div>
        <div style="margin-top: 3rem; display: flex; justify-content: center; gap: 3rem; flex-wrap: wrap; color: #E2DAC8;">
            <div>
                <div style="font-size: 2rem; font-weight: bold; color: white;">1000+</div>
                <div>UMKM Bergabung</div>
            </div>
            <div>
                <div style="font-size: 2rem; font-weight: bold; color: white;">50K+</div>
                <div>Pesanan Diproses</div>
            </div>
            <div>
                <div style="font-size: 2rem; font-weight: bold; color: white;">4.9/5</div>
                <div>Rating Pengguna</div>
            </div>
        </div>
    </div>
</section>

<?php require_once 'partials/footer.php'; ?>
