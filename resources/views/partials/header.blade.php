<nav class="sticky top-0 z-50 bg-white shadow-sm">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex items-center h-16 md:h-20">

            {{-- Logo kiri --}}
            <a href="{{ url('/') }}" class="flex-shrink-0 mr-8 flex items-center">
                <img src="{{ asset('assets/images/logo.png') }}" alt="OrderSip" class="h-10 w-auto">
            </a>

            {{-- Menu tengah (desktop) --}}
            <ul class="hidden md:flex flex-1 items-center justify-center gap-10 text-base font-semibold">
                <li><a href="/" class="hover:text-primary transition-colors">Home</a></li>
                <li><a href="/#layanan" class="hover:text-primary transition-colors">Layanan</a></li>
                <li><a href="/#harga" class="hover:text-primary transition-colors">Paket</a></li>
                <li><a href="/#testimoni" class="hover:text-primary transition-colors">Testimoni</a></li>
                <li><a href="/#faq" class="hover:text-primary transition-colors">FAQ</a></li>
                <li><a href="/about" class="hover:text-primary transition-colors">Tentang Kami</a></li>
            </ul>

           {{-- Kanan: Tombol Buat Website --}}
            <div class="hidden md:flex items-center">
                <a href="/#harga"
                class="px-6 py-2 rounded-full font-semibold shadow-md
                        bg-[#570F0F] text-white hover:bg-[#3f0909] transition">
                    Buat Website
                </a>
            </div>

            {{-- Tombol mobile --}}
            <button class="md:hidden ml-auto text-xl">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </div>
</nav>
