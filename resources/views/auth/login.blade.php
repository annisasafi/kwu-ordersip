@extends('layouts.app')

@section('content')

<!-- Login Section -->
<section class="login py-16 bg-gradient-to-br from-[#FFFBF0] to-[#F0EBDC] min-h-screen flex items-center">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-[45%_55%] gap-12 items-center max-w-7xl mx-auto">
            
            <!-- Left Side - Info -->
            <div class="pr-0 lg:pr-4">
                <div class="mb-8">
                    <h1 class="text-4xl leading-tight mb-6 text-[#5C1C1C] font-bold">
                        Selamat Datang Kembali!
                    </h1>
                    <p class="text-lg text-gray-600 leading-relaxed mb-8">
                        Login ke akun OrderSip Anda dan lanjutkan mengelola bisnis kuliner dengan lebih mudah
                    </p>
                </div>
                
                <!-- Benefits List -->
                <div class="mb-8 space-y-6">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-[#5C1C1C]/10 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-tachometer-alt text-[#5C1C1C] text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-2 text-[#5C1C1C]">Dashboard Lengkap</h3>
                            <p class="text-gray-600 leading-relaxed">Pantau performa bisnis Anda secara real-time</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-[#5C1C1C]/10 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-shopping-cart text-[#5C1C1C] text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-2 text-[#5C1C1C]">Kelola Pesanan</h3>
                            <p class="text-gray-600 leading-relaxed">Atur dan proses pesanan pelanggan dengan efisien</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-[#5C1C1C]/10 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-chart-bar text-[#5C1C1C] text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-2 text-[#5C1C1C]">Laporan Penjualan</h3>
                            <p class="text-gray-600 leading-relaxed">Analisis data penjualan untuk keputusan bisnis</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-[#5C1C1C]/10 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-cog text-[#5C1C1C] text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-2 text-[#5C1C1C]">Pengaturan Fleksibel</h3>
                            <p class="text-gray-600 leading-relaxed">Sesuaikan website sesuai kebutuhan bisnis Anda</p>
                        </div>
                    </div>
                </div>
                
                <!-- Stats -->
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <div class="grid grid-cols-3 gap-6 text-center">
                        <div>
                            <div class="text-3xl font-bold text-[#5C1C1C] mb-1">1000+</div>
                            <div class="text-sm text-gray-600">UMKM Aktif</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-[#5C1C1C] mb-1">50K+</div>
                            <div class="text-sm text-gray-600">Pesanan/Bulan</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-[#5C1C1C] mb-1">4.9/5</div>
                            <div class="text-sm text-gray-600">Rating</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right Side - Login Form -->
            <div>
                <div class="card bg-white p-12 rounded-3xl shadow-2xl shadow-[#5C1C1C]/15">
                    <div class="text-center mb-8">
                        <h2 class="text-3xl font-bold mb-2 text-[#5C1C1C]">Login ke Akun Anda</h2>
                        <p class="text-gray-600">Masukkan email dan password Anda</p>
                    </div>
                    
                    @if(session('status'))
                        <div class="bg-green-100 border border-green-300 text-green-800 px-4 py-3 rounded-lg mb-6">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        
                        <!-- Email -->
                        <div class="mb-6">
                            <label class="block mb-2 text-[#5C1C1C] font-semibold text-sm">
                                <i class="fas fa-envelope mr-2 text-[#5C1C1C]"></i>
                                Email
                            </label>
                            <input type="email" name="email" value="{{ old('email') }}" required autofocus 
                                class="w-full px-4 py-3 border-2 border-gray-300 rounded-xl text-base transition-all focus:border-[#5C1C1C] focus:outline-none" 
                                placeholder="nama@email.com">
                            @error('email')
                                <span class="text-red-600 text-sm mt-1 block">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <!-- Password -->
                        <div class="mb-4">
                            <label class="block mb-2 text-[#5C1C1C] font-semibold text-sm">
                                <i class="fas fa-lock mr-2 text-[#5C1C1C]"></i>
                                Password
                            </label>
                            <input type="password" name="password" required 
                                class="w-full px-4 py-3 border-2 border-gray-300 rounded-xl text-base transition-all focus:border-[#5C1C1C] focus:outline-none" 
                                placeholder="Masukkan password">
                            @error('password')
                                <span class="text-red-600 text-sm mt-1 block">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <!-- Remember Me & Forgot Password -->
                        <div class="flex justify-between items-center mb-8">
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="checkbox" name="remember" class="w-5 h-5 cursor-pointer">
                                <span class="text-gray-600 text-sm">Ingat Saya</span>
                            </label>
                            <a href="#" class="text-[#5C1C1C] text-sm no-underline font-semibold hover:underline">
                                Lupa Password?
                            </a>
                        </div>
                        
                        <!-- Submit Button -->
                        <button type="submit" 
                            class="btn w-full bg-[#5C1C1C] hover:bg-[#4A1616] text-white py-4 rounded-xl text-lg font-semibold border-0 cursor-pointer transition-all shadow-lg shadow-[#5C1C1C]/30 hover:-translate-y-0.5 hover:shadow-xl hover:shadow-[#5C1C1C]/40">
                            <i class="fas fa-sign-in-alt mr-2"></i>
                            Masuk
                        </button>
                        
                        <!-- Register Link -->
                        <p class="text-center mt-6 text-gray-600 text-sm">
                            Belum punya akun? 
                            <a href="{{ route('register') }}" class="text-[#5C1C1C] font-semibold no-underline hover:underline">
                                Daftar di sini
                            </a>
                        </p>
                    </form>
                    
                    <!-- Divider -->
                    <div class="flex items-center my-8">
                        <div class="flex-1 h-px bg-gray-300"></div>
                        <span class="px-4 text-gray-400 text-sm">atau</span>
                        <div class="flex-1 h-px bg-gray-300"></div>
                    </div>
                    
                    <!-- Social Login (Optional) -->
                    <div class="grid grid-cols-2 gap-4">
                        <button type="button" 
                            class="flex items-center justify-center gap-2 px-4 py-3 border-2 border-gray-300 rounded-xl bg-white cursor-pointer font-semibold text-gray-600 transition-all hover:border-blue-500 hover:text-blue-500">
                            <i class="fab fa-google text-xl"></i>
                            Google
                        </button>
                        <button type="button" 
                            class="flex items-center justify-center gap-2 px-4 py-3 border-2 border-gray-300 rounded-xl bg-white cursor-pointer font-semibold text-gray-600 transition-all hover:border-blue-600 hover:text-blue-600">
                            <i class="fab fa-facebook text-xl"></i>
                            Facebook
                        </button>
                    </div>
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
