@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="bg-white">
    <div class="max-w-6xl mx-auto px-4 py-10 lg:py-16">
        <div class="flex flex-col lg:flex-row items-center gap-10 lg:gap-16 min-h-[70vh]">
            {{-- Left content --}}
            <div class="w-full lg:w-1/2">
                {{-- Badge --}}
                <div class="inline-flex items-center gap-2 bg-[#570F0F] px-4 py-2 rounded-full text-xs lg:text-sm text-white mb-6 shadow-sm">
                    <span class="text-base lg:text-lg">🚀</span>
                    <span class="font-medium">Platform Website untuk UMKM Sektor F&amp;B</span>
                </div>

                {{-- Heading --}}
                <h1 class="text-[32px] lg:text-[44px] leading-tight font-bold text-[#111111] mb-4">
                    Kelola Menu dan Pesanan
                    <span class="block">Lebih Mudah dengan OrderSip</span>
                </h1>

                {{-- Subheading --}}
                <p class="text-sm lg:text-base text-[#5C5550] leading-relaxed mb-8 max-w-xl">
                    Solusi digital untuk UMKM kuliner agar layanan lebih cepat, pelanggan lebih puas,
                    dan pengelolaan bisnis makin rapi.
                </p>

                {{-- Buttons --}}
                <div class="flex flex-wrap gap-4 mb-6">
                    {{-- Primary button --}}
                    <a href="{{ url('/register') }}"
                       class="inline-flex items-center justify-center px-8 lg:px-10 py-3 lg:py-3.5
                              rounded-full bg-[#570F0F] text-white text-sm lg:text-base font-semibold
                              shadow-[0_10px_25px_rgba(87,15,15,0.35)]
                              hover:bg-[#3f0909] transition-all">
                        Coba Gratis Sekarang
                    </a>

                    {{-- Secondary button --}}
                    <a href="{{ url('/consultation') }}"
                       class="inline-flex items-center justify-center px-8 lg:px-10 py-3 lg:py-3.5
                              rounded-full border border-[#570F0F] bg-white text-[#570F0F]
                              text-sm lg:text-base font-semibold
                              hover:bg-[#FFF5F1] transition-all">
                        Konsultasi Gratis
                    </a>
                </div>

                {{-- Bullet points --}}
                <div class="flex flex-wrap gap-6 text-xs lg:text-sm text-[#5C5550]">
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 lg:w-5 lg:h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>Gratis 14 hari</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 lg:w-5 lg:h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>Tanpa kartu kredit</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 lg:w-5 lg:h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>Setup 5 menit</span>
                    </div>
                </div>
            </div>

            {{-- Right image --}}
            <div class="w-full lg:w-1/2">
                <div class="relative">
                    <img src="{{ asset('assets/images/hero-dashboard.png') }}"
                         alt="Dashboard OrderSip"
                         class="w-full max-w-[420px] lg:max-w-[480px] mx-auto lg:ml-auto drop-shadow-2xl">
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Why Choose Section -->
<section id="layanan" class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16 max-w-3xl mx-auto">
            <h2 class="text-3xl lg:text-4xl font-bold text-[#2D1810] mb-4">Kenapa memilih OrderSip?</h2>
            <p class="text-lg text-[#6B4423]">Solusi lengkap dan Mudah untuk membantu bisnis Anda lebih profesional</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto">
            <!-- Feature Card 1 -->
            <div class="bg-[#FAF6F0] p-8 rounded-2xl hover:shadow-lg transition-shadow">
                <div class="w-14 h-14 bg-white rounded-xl flex items-center justify-center mb-4 shadow-sm">
                    <i class="fas fa-book-open text-2xl text-[#570F0F]"></i>
                </div>
                <p class="text-[#6B4423] leading-relaxed">Katalog Menu Otomatis dengan tampilan sederhana dan mudah digunakan</p>
            </div>
            
            <!-- Feature Card 2 -->
            <div class="bg-[#FAF6F0] p-8 rounded-2xl hover:shadow-lg transition-shadow">
                <div class="w-14 h-14 bg-white rounded-xl flex items-center justify-center mb-4 shadow-sm">
                    <i class="fab fa-whatsapp text-2xl text-[#570F0F]"></i>
                </div>
                <p class="text-[#6B4423] leading-relaxed">Order via WhatsApp yang ramah dan cepat untuk memudahkan pelanggan terhubung</p>
            </div>
            
            <!-- Feature Card 3 -->
            <div class="bg-[#FAF6F0] p-8 rounded-2xl hover:shadow-lg transition-shadow">
                <div class="w-14 h-14 bg-white rounded-xl flex items-center justify-center mb-4 shadow-sm">
                    <i class="fas fa-globe text-2xl text-[#570F0F]"></i>
                </div>
                <p class="text-[#6B4423] leading-relaxed">Domain Custom (Premium) yang memudahkan bisnis Anda</p>
            </div>
            
            <!-- Feature Card 4 -->
            <div class="bg-[#FAF6F0] p-8 rounded-2xl hover:shadow-lg transition-shadow">
                <div class="w-14 h-14 bg-white rounded-xl flex items-center justify-center mb-4 shadow-sm">
                    <i class="fas fa-infinity text-2xl text-[#570F0F]"></i>
                </div>
                <p class="text-[#6B4423] leading-relaxed">Menu tanpa batas (Premium) untuk menambahkan produk sebanyak yang Anda mau</p>
            </div>
            
            <!-- Feature Card 5 -->
            <div class="bg-[#FAF6F0] p-8 rounded-2xl hover:shadow-lg transition-shadow">
                <div class="w-14 h-14 bg-white rounded-xl flex items-center justify-center mb-4 shadow-sm">
                    <i class="fas fa-headset text-2xl text-[#570F0F]"></i>
                </div>
                <p class="text-[#6B4423] leading-relaxed">Konsultasi gratis bersama tim kami yang siap membantu setup Website Anda</p>
            </div>
            
            <!-- Feature Card 6 -->
            <div class="bg-[#FAF6F0] p-8 rounded-2xl hover:shadow-lg transition-shadow">
                <div class="w-14 h-14 bg-white rounded-xl flex items-center justify-center mb-4 shadow-sm">
                    <i class="fas fa-clock text-2xl text-[#570F0F]"></i>
                </div>
                <p class="text-[#6B4423] leading-relaxed">Jadikan tempo terbatas ruang dan waktu dengan laporan real time</p>
            </div>
        </div>
    </div>
</section>

<!-- Business Types Section -->
<section id="testimoni" class="py-20 bg-[#FAF6F0]">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16 max-w-3xl mx-auto">
            <h2 class="text-3xl lg:text-4xl font-bold text-[#2D1810] mb-4">Bergabunglah bersama Pengusaha Sibermu</h2>
            <p class="text-lg text-[#6B4423]">OrderSip cocok untuk berbagai jenis bisnis kuliner</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <!-- Business Type 1 -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-shadow">
                <div class="h-56 overflow-hidden">
                    <img src="{{ asset('assets/images/comffee.png') }}" alt="Comffee Shop" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-[#2D1810] mb-2">Comffee</h3>
                    <p class="text-[#6B4423]">Kelola menu kopi dan snack dengan mudah</p>
                </div>
            </div>
            
            <!-- Business Type 2 -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-shadow">
                <div class="h-56 overflow-hidden">
                    <img src="{{ asset('assets/images/camilanjimerto.png') }}" alt="CamilanJimerto" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-[#2D1810] mb-2">Camilan Jimerto</h3>
                    <p class="text-[#6B4423]">Terima pesanan dine-in dan delivery</p>
                </div>
            </div>
            
            <!-- Business Type 3 -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-shadow">
                <div class="h-56 overflow-hidden">
                    <img src="{{ asset('assets/images/warung.png') }}" alt="Warung" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-[#2D1810] mb-2">Warung Biru</h3>
                    <p class="text-[#6B4423]">Atur pesanan katering dan pre-order</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-white relative">
    <div class="container mx-auto px-4">

        <!-- Title -->
        <div class="text-center mb-16 max-w-3xl mx-auto">
            <h2 class="text-3xl lg:text-4xl font-bold text-[#2D1810] mb-4">
                Mulai Langkah Anda dengan Mudah
            </h2>
            <p class="text-lg text-[#6B4423]">
                Hanya 4 Langkah yang anda butuhkan untuk mengelola bisnis online
            </p>
        </div>

        <!-- WRAPPER AGAR GARIS NGE-POSISI OTOMATIS -->
        <div class="relative max-w-6xl mx-auto">

            <!-- Garis Penghubung Tengah -->
            <div class="absolute top-1/2 left-0 right-0 h-[2px] bg-[#CBBBA8] -translate-y-1/2 z-0"></div>

            <!-- Steps -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 relative z-10">

                <!-- Step 1 -->
                <div class="text-center relative bg-white">
                    <div class="w-20 h-20 bg-[#EFE7DC] border border-[#CBBBA8] rounded-2xl 
                        flex items-center justify-center mx-auto mb-6 shadow-md z-10 relative">
                        <i class="fas fa-headset text-3xl text-[#570F0F]"></i>
                    </div>

                    <h3 class="text-[#2D1810] font-bold text-lg">STEP 01</h3>
                    <p class="font-semibold text-[#6B4423]">
                        Konsultasikan<br>Kebutuhan Usaha Anda
                    </p>
                    <p class="text-xs text-[#8B6F6F] mt-2">Jadwalkan konsultasi jika diperlukan</p>
                </div>

                <!-- Step 2 -->
                <div class="text-center relative bg-white">
                    <div class="w-20 h-20 bg-[#EFE7DC] border border-[#CBBBA8] rounded-2xl 
                        flex items-center justify-center mx-auto mb-6 shadow-md z-10 relative">
                        <i class="fas fa-headset text-3xl text-[#570F0F]"></i>
                    </div>

                    <h3 class="text-[#2D1810] font-bold text-lg">STEP 02</h3>
                    <p class="font-semibold text-[#6B4423]">Masukkan Daftar Menu Usaha</p>
                    <p class="text-xs text-[#8B6F6F] mt-2">Tambah gambar, harga, dan informasi menu</p>
                </div>

                <!-- Step 3 -->
                <div class="text-center relative bg-white">
                    <div class="w-20 h-20 bg-[#EFE7DC] border border-[#CBBBA8] rounded-2xl 
                        flex items-center justify-center mx-auto mb-6 shadow-md z-10 relative">
                        <i class="fas fa-headset text-3xl text-[#570F0F]"></i>
                    </div>

                    <h3 class="text-[#2D1810] font-bold text-lg">STEP 03</h3>
                    <p class="font-semibold text-[#6B4423]">Aktifkan Website</p>
                    <p class="text-xs text-[#8B6F6F] mt-2">Website siap menerima pesanan online</p>
                </div>

                <!-- Step 4 -->
                <div class="text-center relative bg-white">
                    <div class="w-20 h-20 bg-[#EFE7DC] border border-[#CBBBA8] rounded-2xl 
                        flex items-center justify-center mx-auto mb-6 shadow-md z-10 relative">
                        <i class="fas fa-headset text-3xl text-[#570F0F]"></i>
                    </div>

                    <h3 class="text-[#2D1810] font-bold text-lg">STEP 04</h3>
                    <p class="font-semibold text-[#6B4423]">Bagikan ke Pelanggan</p>
                    <p class="text-xs text-[#8B6F6F] mt-2">Website siap dibagikan di mana saja</p>
                </div>

            </div>
        </div>

        <!-- Button -->
        <div class="mt-12 text-center">
            <a href="{{ url('/consultation') }}"
                class="mt-10 inline-flex items-center justify-center px-8 py-3 rounded-full bg-[#570F0F] text-white text-sm font-semibold shadow-md hover:bg-[#3D0B0B] transition">
                Konsultasi Sekarang
            </a>
        </div>

    </div>
</section>


<!-- Pricing Section -->
<section id="harga" class="py-20 bg-[#FAF6F0]">
    <div class="max-w-6xl mx-auto px-4">
        <div class="text-center mb-16 max-w-3xl mx-auto">
            <h2 class="text-3xl lg:text-4xl font-bold text-[#2D1810] mb-4">
                Pilih Paket Sesuai Kebutuhan Bisnismu
            </h2>
            <p class="text-lg text-[#6B4423]">
                Mulai gratis atau langsung maksimalkan dengan paket tersedia lainnya
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            {{-- Paket Gratis --}}
            <div class="bg-white border border-[#E4C1AE] rounded-[30px] px-8 pt-8 pb-10 shadow-sm flex flex-col">
                <div class="mb-8">
                    <p class="text-sm font-semibold text-[#570F0F] mb-1">Paket Gratis</p>
                    <p class="text-xs text-[#8B4513]">Freemium</p>

                    <div class="mt-6">
                        <p class="text-3xl font-bold text-[#570F0F]">Rp0</p>
                    </div>
                </div>

                <a href="https://wa.me/6287739094119?text=Halo%20OrderSip!%20Saya%20tertarik%20mencoba%20*Paket%20Gratis*.%20Saya%20ingin%20dibuatkan%20katalog%20online%20untuk%20usaha%20saya.%20Boleh%20bantu%20arahkan%20langkah%20selanjutnya%20ya%3F%20%F0%9F%98%8A"
                    target="_blank"
                    class="mx-auto mb-8 inline-flex items-center justify-center rounded-[999px]
                            bg-[#570F0F] text-white text-xs font-semibold px-6 py-2">
                        Mulai gratis sekarang
                </a>

                <div class="border-t border-[#EED7C5] pt-5 mt-auto">
                    <p class="text-xs font-semibold text-[#570F0F] mb-3">FITUR YANG DIDAPAT:</p>
                    <ul class="space-y-2 text-xs text-[#6B4423]">
                        <li>• Subdomain Gratis</li>
                        <li>• Max. 5 Menu</li>
                        <li>• Integrasi WhatsApp Standar</li>
                        <li>• Tampilan Standar</li>
                        <li>• Watermark “By OrderSip”</li>
                        <li>• Profil usaha sederhana</li>
                    </ul>
                </div>
            </div>

            {{-- Paket Basic --}}
            <div class="bg-white border border-[#E4C1AE] rounded-[30px] px-8 pt-8 pb-10 shadow-sm flex flex-col">
                <div class="mb-8">
                    <p class="text-sm font-semibold text-[#570F0F] mb-1">Paket Basic</p>
                    <p class="text-xs text-transparent">.</p>

                    <div class="mt-6">
                        <p class="text-3xl font-bold text-[#570F0F]">Rp 99.000</p>
                        <p class="text-xs text-[#6B4423] mt-1">/Tahun</p>
                    </div>
                </div>

                <a href="https://wa.me/6287739094119?text=Halo%20OrderSip!%20Saya%20tertarik%20dengan%20*Paket%20Basic%20(Rp%2099.000/tahun)*.%20Boleh%20dibantu%20untuk%20proses%20pendaftaran%20dan%20pembuatan%20websitenya%20ya%3F%20%F0%9F%98%8A"
                    target="_blank"
                    class="mx-auto mb-8 inline-flex items-center justify-center rounded-[999px]
                            bg-[#570F0F] text-white text-xs font-semibold px-6 py-2">
                        Mulai sekarang
                </a>

                <div class="border-t border-[#EED7C5] pt-5 mt-auto">
                    <p class="text-xs font-semibold text-[#570F0F] mb-3">FITUR YANG DIDAPAT:</p>
                    <ul class="space-y-2 text-xs text-[#6B4423]">
                        <li>• Subdomain Gratis</li>
                        <li>• Max. 30 Menu</li>
                        <li>• Integrasi WhatsApp auto template</li>
                        <li>• Profil usaha lengkap</li>
                        <li>• Review pelanggan tak terbatas</li>
                        <li>• Support WhatsApp 12 jam</li>
                    </ul>
                </div>
            </div>

            {{-- Paket Pro --}}
            <div
                class="bg-[#570F0F] rounded-[30px] px-8 pt-8 pb-10 shadow-lg border border-[#570F0F]
                       flex flex-col relative lg:scale-[1.03]">
                <div
                    class="absolute -top-4 right-8 bg-[#F5E1CF] text-[#570F0F] text-xs font-semibold
                           px-4 py-1 rounded-full shadow">
                    Populer
                </div>

                <div class="mb-8">
                    <p class="text-sm font-semibold text-white mb-1">Paket Pro</p>
                    <p class="text-xs text-transparent">.</p>

                    <div class="mt-6">
                        <p class="text-3xl font-bold text-white">Rp 199.000</p>
                        <p class="text-xs text-[#F5E1CF] mt-1">/Tahun</p>
                    </div>
                </div>

                <a href="https://wa.me/6287739094119?text=Halo%20OrderSip!%20Saya%20tertarik%20mengambil%20*Paket%20Pro%20(Rp%20199.000/tahun)*.%20Saya%20ingin%20membuat%20website%20usaha%20dengan%20tampilan%20premium.%20Boleh%20info%20langkah-langkah%20selanjutnya%20ya%3F%20%F0%9F%99%8F%F0%9F%98%8A"
                    target="_blank"
                    class="mx-auto mb-8 inline-flex items-center justify-center rounded-[999px]
                            bg-white text-[#570F0F] text-xs font-semibold px-6 py-2">
                        Mulai sekarang
                </a>

                <div class="border-t border-white/30 pt-5 mt-auto">
                    <p class="text-xs font-semibold text-white mb-3">FITUR YANG DIDAPAT:</p>
                    <ul class="space-y-2 text-xs text-[#F5E1CF]">
                        <li>• Semua fitur Paket Basic</li>
                        <li>• Statistik pengunjung lengkap</li>
                        <li>• Bebas atur tampilan brand</li>
                        <li>• Banner promo & slider header</li>
                        <li>• Support WhatsApp fast-response</li>
                        <li>• 3x update major per tahun</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section id="faq" class="py-20 bg-[#570F0F]">
    <div class="max-w-6xl mx-auto px-4">
        <div class="text-center mb-16 max-w-3xl mx-auto">
            <h2 class="text-3xl lg:text-4xl font-bold text-white mb-4">
                Pertanyaan yang Sering Diajukan
            </h2>
            <p class="text-lg text-[#F5E6D3]">
                Temukan jawaban untuk pertanyaan umum tentang OrderSip
            </p>
        </div>

        <div class="max-w-4xl mx-auto space-y-4">
            <div class="bg-white border-2 border-[#E8DCC8] rounded-2xl p-6 hover:shadow-md transition-shadow">
                <h3 class="text-lg font-bold text-[#2D1810] mb-3">Apakah OrderSip benar-benar gratis?</h3>
                <p class="text-[#6B4423] leading-relaxed">
                    Ya! Kami menyediakan paket Starter yang selamanya gratis dengan fitur dasar yang cukup untuk memulai bisnis online Anda. Anda bisa upgrade kapan saja jika butuh fitur lebih lengkap.
                </p>
            </div>

            <div class="bg-white border-2 border-[#E8DCC8] rounded-2xl p-6 hover:shadow-md transition-shadow">
                <h3 class="text-lg font-bold text-[#2D1810] mb-3">Bagaimana cara pelanggan memesan?</h3>
                <p class="text-[#6B4423] leading-relaxed">
                    Pelanggan membuka website toko Anda, memilih menu, lalu klik tombol "Pesan via WhatsApp". Pesanan akan otomatis terformat rapi dan dikirim ke nomor WhatsApp bisnis Anda.
                </p>
            </div>

            <div class="bg-white border-2 border-[#E8DCC8] rounded-2xl p-6 hover:shadow-md transition-shadow">
                <h3 class="text-lg font-bold text-[#2D1810] mb-3">Apakah saya perlu keahlian teknis?</h3>
                <p class="text-[#6B4423] leading-relaxed">
                    Tidak sama sekali! OrderSip dirancang sangat mudah digunakan. Jika Anda bisa menggunakan WhatsApp dan Instagram, Anda pasti bisa menggunakan OrderSip.
                </p>
            </div>

            <div class="bg-white border-2 border-[#E8DCC8] rounded-2xl p-6 hover:shadow-md transition-shadow">
                <h3 class="text-lg font-bold text-[#2D1810] mb-3">Berapa lama setup awal?</h3>
                <p class="text-[#6B4423] leading-relaxed">
                    Hanya 5–10 menit! Daftar akun, upload logo dan foto menu, lalu website toko Anda sudah siap dibagikan ke pelanggan.
                </p>
            </div>

            <div class="bg-white border-2 border-[#E8DCC8] rounded-2xl p-6 hover:shadow-md transition-shadow">
                <h3 class="text-lg font-bold text-[#2D1810] mb-3">Apakah ada biaya transaksi?</h3>
                <p class="text-[#6B4423] leading-relaxed">
                    Tidak ada! Kami tidak memotong komisi dari setiap transaksi. Anda hanya perlu membayar biaya langganan sesuai paket yang dipilih.
                </p>
            </div>
        </div>

        {{-- Link Selengkapnya --}}
        <div class="flex justify-center mt-10">
            <a href="{{ url('/faq') }}"
               class="inline-flex items-center gap-1 text-sm text-[#F5E6D3] hover:text-white transition-colors">
                Selengkapnya
                <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 20 20" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                          d="M7 5h8m0 0v8m0-8L6 14" />
                </svg>
            </a>
        </div>
    </div>
</section>

@endsection
