@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="consultation-hero py-24 pt-28 bg-gradient-to-br from-[#FFFBF0] to-[#F0EBDC]">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div>
                <h1 class="text-4xl leading-tight mb-6 text-[#5C1C1C] font-bold">
                    Konsultasikan Bersama OrderSip
                </h1>
                <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                    Kami siap membantu Anda memaksimalkan bisnis kuliner dengan solusi digital terbaik. Konsultasi gratis untuk memahami kebutuhan bisnis Anda.
                </p>
            </div>
            <div class="relative text-center">
                <img src="{{ asset('assets/images/consultation-hero.png') }}" alt="Konsultasi OrderSip" class="w-full max-w-md inline-block">
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="consultation-benefits py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16 max-w-2xl mx-auto">
            <h2 class="text-4xl font-bold mb-4 text-[#5C1C1C]">Keunggulan Konsultasi</h2>
            <p class="text-lg text-gray-600">dengan OrderSip tim siap bantu Anda</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 max-w-5xl mx-auto">
            <!-- Benefit 1 -->
            <div class="text-center">
                <div class="w-20 h-20 bg-[#5C1C1C] rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-graduation-cap text-4xl text-white"></i>
                </div>
                <h3 class="text-xl font-semibold mb-4 text-[#5C1C1C]">Expert & Berpengalaman</h3>
                <p class="text-gray-600 leading-relaxed">Tim ahli kami siap memberikan solusi terbaik untuk bisnis Anda</p>
            </div>
            
            <!-- Benefit 2 -->
            <div class="text-center">
                <div class="w-20 h-20 bg-[#5C1C1C] rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-headset text-4xl text-white"></i>
                </div>
                <h3 class="text-xl font-semibold mb-4 text-[#5C1C1C]">Solusi Per Masalah (Support)</h3>
                <p class="text-gray-600 leading-relaxed">Kami siap membantu menyelesaikan setiap kendala yang Anda hadapi</p>
            </div>
            
            <!-- Benefit 3 -->
            <div class="text-center">
                <div class="w-20 h-20 bg-[#5C1C1C] rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-chart-line text-4xl text-white"></i>
                </div>
                <h3 class="text-xl font-semibold mb-4 text-[#5C1C1C]">Gratis Untuk Implementasi</h3>
                <p class="text-gray-600 leading-relaxed">Konsultasi dan setup awal tanpa biaya tambahan</p>
            </div>
        </div>
    </div>
</section>

<!-- Consultation Methods Section -->
<section class="consultation-methods py-20 bg-gradient-to-br from-[#8B6B5C] to-[#5C1C1C]">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12 max-w-2xl mx-auto">
            <h2 class="text-4xl font-bold mb-4 text-white">Pilih Metode Konsultasi</h2>
            <p class="text-lg text-[#E8DCC8]">Pilih cara yang paling nyaman untuk Anda</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            <!-- WhatsApp Method -->
            <div class="card bg-white p-10 text-center rounded-2xl">
                <div class="w-[70px] h-[70px] bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fab fa-whatsapp text-4xl text-green-500"></i>
                </div>
                <h3 class="text-xl font-semibold mb-4 text-[#5C1C1C]">Konsultasi Melalui WhatsApp</h3>
                <p class="text-gray-600 mb-8 leading-relaxed">Chat langsung dengan tim kami untuk konsultasi cepat</p>
                <a href="https://wa.me/6287739094119" target="_blank" class="btn bg-green-500 hover:bg-green-600 text-white px-8 py-3 rounded-lg inline-block font-semibold no-underline">
                    <i class="fab fa-whatsapp mr-2"></i>
                    Chat WhatsApp
                </a>
            </div>
            
            <!-- Form Method -->
            <div class="card bg-white p-10 text-center rounded-2xl">
                <div class="w-[70px] h-[70px] bg-[#5C1C1C]/10 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-file-alt text-4xl text-[#5C1C1C]"></i>
                </div>
                <h3 class="text-xl font-semibold mb-4 text-[#5C1C1C]">Konsultasi mengisi form dibawah</h3>
                <p class="text-gray-600 mb-8 leading-relaxed">Isi formulir dan tim kami akan menghubungi Anda</p>
                <a href="#consultation-form" class="btn bg-[#5C1C1C] hover:bg-[#4A1616] text-white px-8 py-3 rounded-lg inline-block font-semibold no-underline">
                    <i class="fas fa-edit mr-2"></i>
                    Isi Formulir
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Consultation Form Section -->
<section id="consultation-form" class="consultation-form py-20 bg-gradient-to-br from-[#FFFBF0] to-[#F0EBDC]">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12 max-w-2xl mx-auto">
            <h2 class="text-4xl font-bold mb-4 text-[#5C1C1C]">Formulir Konsultasi</h2>
            <p class="text-lg text-gray-600">Isi data dibawah untuk kami hubungi</p>
        </div>
        
        <div class="card max-w-3xl mx-auto p-12 bg-white rounded-2xl shadow-2xl">
            <form action="{{ url('/consultation/submit') }}" method="POST">
                @csrf
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label class="block mb-2 text-[#5C1C1C] font-semibold">Nama Lengkap</label>
                        <input type="text" name="name" required class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg text-base focus:border-[#5C1C1C] focus:outline-none" placeholder="Masukkan nama lengkap">
                    </div>
                    
                    <div>
                        <label class="block mb-2 text-[#5C1C1C] font-semibold">No. WhatsApp</label>
                        <input type="tel" name="phone" required class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg text-base focus:border-[#5C1C1C] focus:outline-none" placeholder="08xxxxxxxxxx">
                    </div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label class="block mb-2 text-[#5C1C1C] font-semibold">Jenis Bisnis</label>
                        <select name="business_type" required class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg text-base focus:border-[#5C1C1C] focus:outline-none">
                            <option value="">Pilih jenis bisnis</option>
                            <option value="coffee-shop">Coffee Shop</option>
                            <option value="restaurant">Restaurant</option>
                            <option value="cafe">Cafe</option>
                            <option value="warung">Warung</option>
                            <option value="catering">Catering</option>
                            <option value="other">Lainnya</option>
                        </select>
                    </div>
                    
                    <div>
                        <label class="block mb-2 text-[#5C1C1C] font-semibold">Alamat Lengkap</label>
                        <input type="text" name="address" required class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg text-base focus:border-[#5C1C1C] focus:outline-none" placeholder="Kota, Provinsi">
                    </div>
                </div>
                
                <div class="mb-8">
                    <label class="block mb-2 text-[#5C1C1C] font-semibold">Konsultasi Lebih Lanjut</label>
                    <textarea name="message" rows="5" required class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg text-base resize-y focus:border-[#5C1C1C] focus:outline-none" placeholder="Ceritakan kebutuhan bisnis Anda..."></textarea>
                </div>
                
                <button type="submit" class="btn w-full bg-[#5C1C1C] hover:bg-[#4A1616] text-white py-4 rounded-lg text-lg font-semibold border-0 cursor-pointer">
                    <i class="fas fa-paper-plane mr-2"></i>
                    Kirim Konsultasi
                </button>
                
                <p class="text-center mt-4 text-gray-500 text-sm">
                    Dengan mengirim formulir ini, Anda menyetujui <a href="#" class="text-[#5C1C1C] hover:underline">Kebijakan Privasi</a> kami
                </p>
            </form>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="consultation-faq py-20 bg-gradient-to-br from-[#8B6B5C] to-[#5C1C1C]">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12 max-w-2xl mx-auto">
            <h2 class="text-4xl font-bold mb-4 text-white">Pertanyaan yang Sering Ditanyakan</h2>
            <p class="text-lg text-[#E8DCC8]">Jawaban untuk pertanyaan umum seputar konsultasi</p>
        </div>
        
        <div class="max-w-3xl mx-auto space-y-6">
            <div class="card p-6 bg-white rounded-xl">
                <h3 class="text-lg font-semibold mb-3 text-[#5C1C1C]">Apa saja yang bisa saya konsultasikan?</h3>
                <p class="text-gray-600 leading-relaxed m-0">Anda bisa konsultasi tentang pemilihan paket, setup website, integrasi WhatsApp, manajemen menu, dan strategi digital marketing untuk bisnis kuliner Anda.</p>
            </div>
            
            <div class="card p-6 bg-white rounded-xl">
                <h3 class="text-lg font-semibold mb-3 text-[#5C1C1C]">Apa saya bisa konsultasi via online saja?</h3>
                <p class="text-gray-600 leading-relaxed m-0">Ya, tentu saja! Kami menyediakan konsultasi via WhatsApp, video call, atau formulir online. Anda bisa memilih metode yang paling nyaman untuk Anda.</p>
            </div>
            
            <div class="card p-6 bg-white rounded-xl">
                <h3 class="text-lg font-semibold mb-3 text-[#5C1C1C]">Berapa lama saya menunggu tim OrderSip?</h3>
                <p class="text-gray-600 leading-relaxed m-0">Tim kami akan merespon dalam waktu maksimal 1x24 jam di hari kerja. Untuk konsultasi via WhatsApp, biasanya kami respon dalam beberapa jam saja.</p>
            </div>
            
            <div class="card p-6 bg-white rounded-xl">
                <h3 class="text-lg font-semibold mb-3 text-[#5C1C1C]">Dengan cara konsultasi saya bisa tau apa saja?</h3>
                <p class="text-gray-600 leading-relaxed m-0">Anda akan mendapat penjelasan lengkap tentang fitur OrderSip, rekomendasi paket yang sesuai, estimasi waktu setup, dan tips mengoptimalkan penjualan online untuk bisnis Anda.</p>
            </div>
        </div>
    </div>
</section>

@endsection
