@extends('layouts.app')

@section('content')

<!-- Registration Section -->
<section class="registration py-16 bg-gradient-to-br from-[#FFFBF0] to-[#F0EBDC] min-h-screen flex items-center">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-[45%_55%] gap-12 items-center max-w-7xl mx-auto">
            
            <!-- Left Side - Info -->
            <div class="pr-0 lg:pr-4">
                <div class="mb-8">
                    <h1 class="text-4xl leading-tight mb-6 text-[#5C1C1C] font-bold">
                        Mulai Perjalanan Digital Bisnis Anda
                    </h1>
                    <p class="text-lg text-gray-600 leading-relaxed mb-8">
                        Bergabunglah dengan ribuan UMKM kuliner yang telah sukses go digital bersama OrderSip
                    </p>
                </div>
                
                <!-- Benefits List -->
                <div class="mb-8 space-y-6">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-[#5C1C1C]/10 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check text-[#5C1C1C] text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-2 text-[#5C1C1C]">Gratis 14 Hari Trial</h3>
                            <p class="text-gray-600 leading-relaxed">Coba semua fitur premium tanpa biaya di awal</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-[#5C1C1C]/10 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check text-[#5C1C1C] text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-2 text-[#5C1C1C]">Setup dalam 5 Menit</h3>
                            <p class="text-gray-600 leading-relaxed">Website toko online Anda siap dalam hitungan menit</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-[#5C1C1C]/10 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check text-[#5C1C1C] text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-2 text-[#5C1C1C]">Tanpa Kartu Kredit</h3>
                            <p class="text-gray-600 leading-relaxed">Tidak perlu memasukkan data pembayaran untuk trial</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-[#5C1C1C]/10 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-check text-[#5C1C1C] text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-2 text-[#5C1C1C]">Support 24/7</h3>
                            <p class="text-gray-600 leading-relaxed">Tim kami siap membantu kapan saja Anda butuh</p>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial -->
                <div class="bg-white p-6 rounded-xl border-l-4 border-[#5C1C1C] shadow-md">
                    <div class="flex gap-1 mb-3">
                        <i class="fas fa-star text-orange-400"></i>
                        <i class="fas fa-star text-orange-400"></i>
                        <i class="fas fa-star text-orange-400"></i>
                        <i class="fas fa-star text-orange-400"></i>
                        <i class="fas fa-star text-orange-400"></i>
                    </div>
                    <p class="text-gray-600 leading-relaxed mb-4 italic">
                        "OrderSip sangat membantu bisnis kopi saya! Sekarang pelanggan bisa pesan online dengan mudah."
                    </p>
                    <p class="text-[#5C1C1C] font-semibold m-0">- Budi, Pemilik Kopi Nusantara</p>
                </div>
            </div>
            
            <!-- Right Side - Registration Form -->
            <div>
                <div class="card bg-white p-12 rounded-3xl shadow-2xl shadow-[#5C1C1C]/15">
                    <div class="text-center mb-8">
                        <h2 class="text-3xl font-bold mb-2 text-[#5C1C1C]">Daftar Sekarang</h2>
                        <p class="text-gray-600">Isi data di bawah untuk memulai</p>
                    </div>
                    
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        
                        <!-- Full Name -->
                        <div class="mb-6">
                            <label class="block mb-2 text-[#5C1C1C] font-semibold text-sm">
                                <i class="fas fa-user mr-2 text-[#5C1C1C]"></i>
                                Nama Lengkap
                            </label>
                            <input type="text" name="name" value="{{ old('name') }}" required 
                                class="w-full px-4 py-3 border-2 border-gray-300 rounded-xl text-base transition-all focus:border-[#5C1C1C] focus:outline-none" 
                                placeholder="Masukkan nama lengkap Anda">
                            @error('name')
                                <span class="text-red-600 text-sm mt-1 block">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <!-- Email -->
                        <div class="mb-6">
                            <label class="block mb-2 text-[#5C1C1C] font-semibold text-sm">
                                <i class="fas fa-envelope mr-2 text-[#5C1C1C]"></i>
                                Email
                            </label>
                            <input type="email" name="email" value="{{ old('email') }}" required 
                                class="w-full px-4 py-3 border-2 border-gray-300 rounded-xl text-base transition-all focus:border-[#5C1C1C] focus:outline-none" 
                                placeholder="nama@email.com">
                            @error('email')
                                <span class="text-red-600 text-sm mt-1 block">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <!-- Phone Number -->
                        <div class="mb-6">
                            <label class="block mb-2 text-[#5C1C1C] font-semibold text-sm">
                                <i class="fas fa-phone mr-2 text-[#5C1C1C]"></i>
                                Nomor WhatsApp
                            </label>
                            <input type="tel" name="phone" value="{{ old('phone') }}" required 
                                class="w-full px-4 py-3 border-2 border-gray-300 rounded-xl text-base transition-all focus:border-[#5C1C1C] focus:outline-none" 
                                placeholder="08xxxxxxxxxx">
                            @error('phone')
                                <span class="text-red-600 text-sm mt-1 block">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <!-- Business Name -->
                        <div class="mb-6">
                            <label class="block mb-2 text-[#5C1C1C] font-semibold text-sm">
                                <i class="fas fa-store mr-2 text-[#5C1C1C]"></i>
                                Nama Bisnis
                            </label>
                            <input type="text" name="business_name" value="{{ old('business_name') }}" required 
                                class="w-full px-4 py-3 border-2 border-gray-300 rounded-xl text-base transition-all focus:border-[#5C1C1C] focus:outline-none" 
                                placeholder="Nama toko/bisnis Anda">
                            @error('business_name')
                                <span class="text-red-600 text-sm mt-1 block">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <!-- Business Type -->
                        <div class="mb-6">
                            <label class="block mb-2 text-[#5C1C1C] font-semibold text-sm">
                                <i class="fas fa-utensils mr-2 text-[#5C1C1C]"></i>
                                Jenis Bisnis
                            </label>
                            <select name="business_type" required 
                                class="w-full px-4 py-3 border-2 border-gray-300 rounded-xl text-base transition-all bg-white focus:border-[#5C1C1C] focus:outline-none">
                                <option value="">Pilih jenis bisnis</option>
                                <option value="coffee-shop" {{ old('business_type') == 'coffee-shop' ? 'selected' : '' }}>Coffee Shop</option>
                                <option value="restaurant" {{ old('business_type') == 'restaurant' ? 'selected' : '' }}>Restaurant</option>
                                <option value="cafe" {{ old('business_type') == 'cafe' ? 'selected' : '' }}>Cafe</option>
                                <option value="warung" {{ old('business_type') == 'warung' ? 'selected' : '' }}>Warung</option>
                                <option value="catering" {{ old('business_type') == 'catering' ? 'selected' : '' }}>Catering</option>
                                <option value="bakery" {{ old('business_type') == 'bakery' ? 'selected' : '' }}>Bakery</option>
                                <option value="other" {{ old('business_type') == 'other' ? 'selected' : '' }}>Lainnya</option>
                            </select>
                            @error('business_type')
                                <span class="text-red-600 text-sm mt-1 block">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <!-- Password -->
                        <div class="mb-6">
                            <label class="block mb-2 text-[#5C1C1C] font-semibold text-sm">
                                <i class="fas fa-lock mr-2 text-[#5C1C1C]"></i>
                                Password
                            </label>
                            <input type="password" name="password" required 
                                class="w-full px-4 py-3 border-2 border-gray-300 rounded-xl text-base transition-all focus:border-[#5C1C1C] focus:outline-none" 
                                placeholder="Minimal 8 karakter">
                            @error('password')
                                <span class="text-red-600 text-sm mt-1 block">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <!-- Confirm Password -->
                        <div class="mb-8">
                            <label class="block mb-2 text-[#5C1C1C] font-semibold text-sm">
                                <i class="fas fa-lock mr-2 text-[#5C1C1C]"></i>
                                Konfirmasi Password
                            </label>
                            <input type="password" name="password_confirmation" required 
                                class="w-full px-4 py-3 border-2 border-gray-300 rounded-xl text-base transition-all focus:border-[#5C1C1C] focus:outline-none" 
                                placeholder="Ulangi password">
                        </div>
                        
                        <!-- Terms & Conditions -->
                        <div class="mb-8">
                            <label class="flex items-start gap-3 cursor-pointer">
                                <input type="checkbox" name="terms" required class="mt-1 w-5 h-5 cursor-pointer">
                                <span class="text-gray-600 text-sm leading-relaxed">
                                    Saya setuju dengan <a href="#" class="text-[#5C1C1C] font-semibold no-underline hover:underline">Syarat & Ketentuan</a> dan <a href="#" class="text-[#5C1C1C] font-semibold no-underline hover:underline">Kebijakan Privasi</a> OrderSip
                                </span>
                            </label>
                        </div>
                        
                        <!-- Submit Button -->
                        <button type="submit" 
                            class="btn w-full bg-[#5C1C1C] hover:bg-[#4A1616] text-white py-4 rounded-xl text-lg font-semibold border-0 cursor-pointer transition-all shadow-lg shadow-[#5C1C1C]/30 hover:-translate-y-0.5 hover:shadow-xl hover:shadow-[#5C1C1C]/40">
                            <i class="fas fa-rocket mr-2"></i>
                            Daftar Sekarang - Gratis!
                        </button>
                        
                        <!-- Login Link -->
                        <p class="text-center mt-6 text-gray-600 text-sm">
                            Sudah punya akun? 
                            <a href="{{ route('login') }}" class="text-[#5C1C1C] font-semibold no-underline hover:underline">
                                Login di sini
                            </a>
                        </p>
                    </form>
                </div>
                
                <!-- Trust Badges -->
                <div class="flex justify-center gap-8 mt-8 flex-wrap">
                    <div class="flex items-center gap-2 text-gray-600 text-sm">
                        <i class="fas fa-shield-alt text-[#5C1C1C]"></i>
                        <span>Data Aman</span>
                    </div>
                    <div class="flex items-center gap-2 text-gray-600 text-sm">
                        <i class="fas fa-lock text-[#5C1C1C]"></i>
                        <span>SSL Encrypted</span>
                    </div>
                    <div class="flex items-center gap-2 text-gray-600 text-sm">
                        <i class="fas fa-check-circle text-[#5C1C1C]"></i>
                        <span>Terpercaya</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
