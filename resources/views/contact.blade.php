<?php require_once '../app/views/layouts/header.php'; ?>

<section class="contact-hero" style="padding: 5rem 0; text-align: center;">
    <div class="container">
        <h1>Konsultasi <span style="color: var(--primary-color);">Gratis</span></h1>
        <p style="max-width: 700px; margin: 0 auto;">Punya pertanyaan tentang cara mendigitalkan bisnis F&B Anda? Tim ahli kami siap membantu.</p>
    </div>
</section>

<section class="contact-form" style="padding: 4rem 0; background: white;">
    <div class="container">
        <div style="max-width: 600px; margin: 0 auto;" class="card">
            <form action="<?php echo BASE_URL; ?>/pages/submit_contact" method="POST">
                <div class="form-group">
                    <label for="name" class="form-label">Nama Lengkap</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Masukkan nama Anda" required>
                </div>
                
                <div class="form-group">
                    <label for="whatsapp" class="form-label">Nomor WhatsApp</label>
                    <input type="text" id="whatsapp" name="whatsapp" class="form-control" placeholder="Contoh: 08123456789" required>
                </div>
                
                <div class="form-group">
                    <label for="topic" class="form-label">Topik Konsultasi</label>
                    <select id="topic" name="topic" class="form-control">
                        <option value="General">Pertanyaan Umum</option>
                        <option value="Technical">Bantuan Teknis</option>
                        <option value="Pricing">Harga & Paket</option>
                        <option value="Partnership">Kemitraan</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="message" class="form-label">Pesan</label>
                    <textarea id="message" name="message" class="form-control" rows="5" placeholder="Ceritakan kebutuhan bisnis Anda..." required></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary" style="width: 100%;">Kirim Permintaan Konsultasi</button>
            </form>
        </div>
    </div>
</section>

<?php require_once '../app/views/layouts/footer.php'; ?>
