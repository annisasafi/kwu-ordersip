@extends('layouts.app')

@section('content')

<!-- Hero Section - Tentang OrderSip -->
<section class="py-20 pt-12 bg-gradient-to-br from-[#FFFBF0] to-[#F0EBDC]">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div>
                <h1 class="text-4xl leading-tight mb-6 text-[#3D1A1A] font-bold">
                    Tentang OrderSip
                </h1>
                <p class="text-lg text-gray-600 leading-relaxed mb-6">
                    OrderSip adalah platform inovatif yang dirancang untuk membantu UMKM sektor kuliner mengelola bisnis mereka dengan lebih efisien dan profesional. Kami percaya bahwa setiap bisnis kuliner, baik kecil maupun besar, berhak mendapatkan akses ke teknologi yang memudahkan operasional mereka tanpa harus mengeluarkan biaya besar.
                </p>
                <p class="text-lg text-gray-600 leading-relaxed">
                    Dengan OrderSip, pemilik bisnis dapat membuat website katalog produk mereka sendiri, menerima pesanan melalui WhatsApp secara otomatis, dan mengelola stok dengan mudah—semuanya dalam satu platform yang sederhana dan terjangkau.
                </p>
            </div>
            <div class="text-center">
                <img src="{{ asset('assets/images/logo.png') }}" alt="OrderSip Logo" class="max-w-[300px] w-full h-auto mx-auto">
            </div>
        </div>
    </div>
</section>

<!-- Visi & Misi Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16">
            <!-- Visi -->
            <div>
                <h2 class="text-3xl font-bold mb-6 text-[#3D1A1A]">VISI</h2>
                <p class="text-lg text-gray-600 leading-relaxed">
                    Menjadi platform yang membantu UMKM kuliner tampil lebih profesional dan bersaing di era digital, serta memudahkan pelanggan dalam berinteraksi dengan bisnis lokal yang mereka sukai.
                </p>
            </div>
            
            <!-- Misi -->
            <div>
                <h2 class="text-3xl font-bold mb-6 text-[#3D1A1A]">MISI</h2>
                <p class="text-lg text-gray-600 leading-relaxed">
                    Menyediakan layanan pembuatan website yang sederhana, terjangkau, dan mudah digunakan, serta menghadirkan sistem order via WhatsApp yang efisien untuk meningkatkan produktivitas dan kepuasan pelanggan UMKM kuliner di Indonesia.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- OrderSip Features Section -->
<section class="py-20 bg-gradient-to-br from-[#FFFBF0] to-[#F0EBDC]">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <img src="{{ asset('assets/images/logo.png') }}" alt="OrderSip" class="max-w-[200px] h-auto mx-auto mb-8">
        </div>
        
        <div class="grid grid-cols-3 md:grid-cols-6 gap-8 max-w-3xl mx-auto">
            <!-- Icon 1 - Chat -->
            <div class="text-center">
                <div class="w-15 h-15 bg-white rounded-xl flex items-center justify-center mx-auto shadow-md">
                    <i class="fas fa-comment-dots text-2xl text-[#570F0F]"></i>
                </div>
            </div>
            
            <!-- Icon 2 - Shopping Cart -->
            <div class="text-center">
                <div class="w-15 h-15 bg-white rounded-xl flex items-center justify-center mx-auto shadow-md">
                    <i class="fas fa-shopping-cart text-2xl text-[#570F0F]"></i>
                </div>
            </div>
            
            <!-- Icon 3 - Utensils -->
            <div class="text-center">
                <div class="w-15 h-15 bg-white rounded-xl flex items-center justify-center mx-auto shadow-md">
                    <i class="fas fa-utensils text-2xl text-[#570F0F]"></i>
                </div>
            </div>
            
            <!-- Icon 4 - Chart -->
            <div class="text-center">
                <div class="w-15 h-15 bg-white rounded-xl flex items-center justify-center mx-auto shadow-md">
                    <i class="fas fa-chart-line text-2xl text-[#570F0F]"></i>
                </div>
            </div>
            
            <!-- Icon 5 - Clock -->
            <div class="text-center">
                <div class="w-15 h-15 bg-white rounded-xl flex items-center justify-center mx-auto shadow-md">
                    <i class="fas fa-clock text-2xl text-[#570F0F]"></i>
                </div>
            </div>
            
            <!-- Icon 6 - Mobile -->
            <div class="text-center">
                <div class="w-15 h-15 bg-white rounded-xl flex items-center justify-center mx-auto shadow-md">
                    <i class="fas fa-mobile-alt text-2xl text-[#570F0F]"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tujuan Kami Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center mb-12 text-[#3D1A1A]">Tujuan Kami</h2>
        
        <div class="max-w-4xl mx-auto">
            <p class="text-lg text-gray-600 leading-relaxed mb-6">
                OrderSip bertujuan untuk menjadi solusi UMKM kuliner dalam meningkatkan efisiensi bisnis mereka melalui platform yang mudah digunakan dan terjangkau. Kami ingin membantu para pelaku UMKM:
            </p>
            
            <ul class="list-none p-0 space-y-4">
                <li class="flex items-start gap-3">
                    <i class="fas fa-check-circle text-[#570F0F] mt-1 text-xl flex-shrink-0"></i>
                    <span class="text-lg text-gray-600 leading-relaxed">Meningkatkan jangkauan pelanggan melalui website profesional</span>
                </li>
                <li class="flex items-start gap-3">
                    <i class="fas fa-check-circle text-[#570F0F] mt-1 text-xl flex-shrink-0"></i>
                    <span class="text-lg text-gray-600 leading-relaxed">Menyederhanakan proses pemesanan melalui integrasi WhatsApp</span>
                </li>
                <li class="flex items-start gap-3">
                    <i class="fas fa-check-circle text-[#570F0F] mt-1 text-xl flex-shrink-0"></i>
                    <span class="text-lg text-gray-600 leading-relaxed">Memudahkan pengelolaan produk dan stok secara real-time</span>
                </li>
                <li class="flex items-start gap-3">
                    <i class="fas fa-check-circle text-[#570F0F] mt-1 text-xl flex-shrink-0"></i>
                    <span class="text-lg text-gray-600 leading-relaxed">Memberikan laporan penjualan yang akurat untuk pengambilan keputusan bisnis</span>
                </li>
            </ul>
        </div>
    </div>
</section>

<!-- Nilai dan Pendekatan OrderSip Section -->
<section class="py-20 bg-[#FAF8F3]">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center mb-12 text-[#3D1A1A]">Nilai dan Pendekatan OrderSip</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-8">
            <!-- Card 1 -->
            <div class="card text-center p-8 bg-white border border-[#E8DCC8]">
                <div class="w-[70px] h-[70px] bg-[#F5EFE7] rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-lightbulb text-[32px] text-[#570F0F]"></i>
                </div>
                <h3 class="text-xl font-semibold mb-4 text-[#3D1A1A]">Kemudahan sebagai prioritas</h3>
                <p class="text-gray-600 leading-relaxed">Kami percaya bahwa teknologi harus mudah digunakan oleh siapa saja, tanpa perlu keahlian teknis.</p>
            </div>
            
            <!-- Card 2 -->
            <div class="card text-center p-8 bg-white border border-[#E8DCC8]">
                <div class="w-[70px] h-[70px] bg-[#F5EFE7] rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-users text-[32px] text-[#570F0F]"></i>
                </div>
                <h3 class="text-xl font-semibold mb-4 text-[#3D1A1A]">Komponen yang saling terhubung</h3>
                <p class="text-gray-600 leading-relaxed">Semua fitur dirancang untuk bekerja bersama secara harmonis dan efisien.</p>
            </div>
            
            <!-- Card 3 -->
            <div class="card text-center p-8 bg-white border border-[#E8DCC8]">
                <div class="w-[70px] h-[70px] bg-[#F5EFE7] rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-hand-holding-heart text-[32px] text-[#570F0F]"></i>
                </div>
                <h3 class="text-xl font-semibold mb-4 text-[#3D1A1A]">Fokus pada kebutuhan UMKM</h3>
                <p class="text-gray-600 leading-relaxed">Kami memahami tantangan UMKM dan menyediakan solusi yang tepat sasaran.</p>
            </div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Card 4 -->
            <div class="card text-center p-8 bg-white border border-[#E8DCC8]">
                <div class="w-[70px] h-[70px] bg-[#F5EFE7] rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-infinity text-[32px] text-[#570F0F]"></i>
                </div>
                <h3 class="text-xl font-semibold mb-4 text-[#3D1A1A]">Kemudahan yang terus berkembang</h3>
                <p class="text-gray-600 leading-relaxed">Platform kami terus diperbarui dengan fitur-fitur baru yang relevan.</p>
            </div>
            
            <!-- Card 5 -->
            <div class="card text-center p-8 bg-white border border-[#E8DCC8]">
                <div class="w-[70px] h-[70px] bg-[#F5EFE7] rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-headset text-[32px] text-[#570F0F]"></i>
                </div>
                <h3 class="text-xl font-semibold mb-4 text-[#3D1A1A]">Bantuan yang siap sedia</h3>
                <p class="text-gray-600 leading-relaxed">Tim support kami siap membantu Anda kapan pun dibutuhkan.</p>
            </div>
            
            <!-- Card 6 -->
            <div class="card text-center p-8 bg-white border border-[#E8DCC8]">
                <div class="w-[70px] h-[70px] bg-[#F5EFE7] rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-smile text-[32px] text-[#570F0F]"></i>
                </div>
                <h3 class="text-xl font-semibold mb-4 text-[#3D1A1A]">Dukungan yang ramah tanpa membuang waktu</h3>
                <p class="text-gray-600 leading-relaxed">Respon cepat dan solusi yang efektif untuk setiap pertanyaan Anda.</p>
            </div>
        </div>
    </div>
</section>

<!-- Tim Dibalik OrderSip Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center mb-4 text-[#3D1A1A]">Tim Dibalik OrderSip</h2>
        <p class="text-center text-gray-600 text-lg mb-16 max-w-2xl mx-auto">
            Kami adalah tim yang berdedikasi untuk membantu UMKM kuliner berkembang melalui teknologi yang tepat guna dan terjangkau.
        </p>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 max-w-5xl mx-auto">
            <!-- Team Member 1 -->
            <div class="text-center">
                <div class="w-full aspect-[3/4] overflow-hidden rounded-xl mb-6 bg-[#F5EFE7]">
                    <img src="{{ asset('assets/images/team-product.jpg') }}" alt="Chief Product Officer" class="w-full h-full object-cover">
                </div>
                <h3 class="text-xl font-semibold mb-2 text-[#3D1A1A]">Chief Product Officer</h3>
            </div>
            
            <!-- Team Member 2 -->
            <div class="text-center">
                <div class="w-full aspect-[3/4] overflow-hidden rounded-xl mb-6 bg-[#F5EFE7]">
                    <img src="{{ asset('assets/images/team-research.jpg') }}" alt="Chief Research Officer" class="w-full h-full object-cover">
                </div>
                <h3 class="text-xl font-semibold mb-2 text-[#3D1A1A]">Chief Research Officer</h3>
            </div>
            
            <!-- Team Member 3 -->
            <div class="text-center">
                <div class="w-full aspect-[3/4] overflow-hidden rounded-xl mb-6 bg-[#F5EFE7]">
                    <img src="{{ asset('assets/images/team-marketing.jpg') }}" alt="Chief Marketing Officer" class="w-full h-full object-cover">
                </div>
                <h3 class="text-xl font-semibold mb-2 text-[#3D1A1A]">Chief Marketing Officer</h3>
            </div>
        </div>
    </div>
</section>

@endsection
