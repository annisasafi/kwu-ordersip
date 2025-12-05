<?php require_once '../app/views/layouts/header.php'; ?>

<section class="about-hero" style="padding: 5rem 0; background: var(--bg-gradient-mid); text-align: center;">
    <div class="container">
        <h1>Tentang <span style="color: var(--primary-color);">OrderSip</span></h1>
        <p style="max-width: 700px; margin: 0 auto;">Misi kami adalah mendigitalkan UMKM F&B Indonesia agar bisa bersaing di era modern.</p>
    </div>
</section>

<section class="story" style="padding: 4rem 0;">
    <div class="container">
        <div style="display: flex; flex-wrap: wrap; align-items: center; gap: 3rem;">
            <div style="flex: 1; min-width: 300px;">
                <img src="https://placehold.co/600x400/F0EBDC/570F0F?text=Our+Story" alt="Our Story" style="width: 100%; border-radius: 12px;">
            </div>
            <div style="flex: 1; min-width: 300px;">
                <h2 style="margin-bottom: 1.5rem;">Cerita Kami</h2>
                <p style="margin-bottom: 1rem;">OrderSip lahir dari keprihatinan kami melihat banyak UMKM kuliner yang kesulitan mengelola pesanan online. Biaya pembuatan website yang mahal dan sistem yang rumit seringkali menjadi penghalang.</p>
                <p style="margin-bottom: 1rem;">Kami percaya bahwa teknologi harus memudahkan, bukan menyulitkan. Oleh karena itu, kami membangun OrderSip: platform yang simpel, terjangkau, namun powerful untuk kebutuhan bisnis F&B.</p>
                <p>Sejak 2024, kami telah membantu ratusan UMKM beralih dari pencatatan manual ke sistem digital yang efisien.</p>
            </div>
        </div>
    </div>
</section>

<section class="values" style="padding: 4rem 0; background: white;">
    <div class="container">
        <div class="text-center mb-3">
            <h2>Nilai Kami</h2>
        </div>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem;">
            <div class="card text-center">
                <h3 style="color: var(--primary-color);">Simplicity</h3>
                <p>Kami mendesain fitur yang mudah dipahami bahkan oleh orang awam teknologi sekalipun.</p>
            </div>
            <div class="card text-center">
                <h3 style="color: var(--primary-color);">Affordability</h3>
                <p>Solusi digital berkualitas tidak harus mahal. Kami berkomitmen memberikan harga terbaik untuk UMKM.</p>
            </div>
            <div class="card text-center">
                <h3 style="color: var(--primary-color);">Growth</h3>
                <p>Sukses kami diukur dari seberapa besar bisnis mitra UMKM kami berkembang.</p>
            </div>
        </div>
    </div>
</section>

<section class="cta" style="padding: 5rem 0; text-align: center; background: var(--primary-color); color: white;">
    <div class="container">
        <h2 style="color: white; margin-bottom: 1rem;">Bergabunglah dengan Perjalanan Kami</h2>
        <p style="margin-bottom: 2rem; color: #E2DAC8;">Mulai transformasi digital bisnis Anda hari ini.</p>
        <a href="<?php echo BASE_URL; ?>/auth/register" class="btn" style="background: white; color: var(--primary-color);">Daftar Sekarang</a>
    </div>
</section>

<?php require_once '../app/views/layouts/footer.php'; ?>
