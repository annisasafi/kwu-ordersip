@extends('layouts.app')

@section('content')

<section class="contact-hero py-20 text-center">
    <div class="container mx-auto px-4">
        <h1 class="text-5xl font-bold mb-4">Konsultasi <span class="text-[#570F0F]">Gratis</span></h1>
        <p class="max-w-2xl mx-auto text-lg text-gray-600">Punya pertanyaan tentang cara mendigitalkan bisnis F&B Anda? Tim ahli kami siap membantu.</p>
    </div>
</section>

<section class="contact-form py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="card max-w-2xl mx-auto">
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
                
                <button type="submit" class="btn btn-primary w-full">Kirim Permintaan Konsultasi</button>
            </form>
        </div>
    </div>
</section>

@endsection
