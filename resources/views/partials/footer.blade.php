<footer class="mt-0 bg-gradient-to-b from-[#E2DAC8] to-[#FFFBF0] text-[#5C1C1C]">
    <div class="max-w-7xl mx-auto px-6 py-12">

        <!-- GRID 4 kolom sejajar -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-10 mb-12 items-start">

            <!-- Kolom 1: Logo + Deskripsi + Sosial -->
            <div>
                <a href="{{ url('/') }}" class="inline-block mb-4">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="OrderSip Logo" class="h-11 w-auto">
                </a>

                <p class="max-w-sm text-sm leading-relaxed mb-5">
                    Platform Layanan Website profesional untuk UMKM F&B di seluruh Indonesia.
                    Mudah, Cepat dan terjangkau.
                </p>

                <div class="flex gap-3">
                    <a href="https://wa.me/6287739094119" target="_blank"
                       class="flex h-9 w-9 items-center justify-center rounded-full bg-[#5C1C1C] text-white hover:bg-[#4A1616]">
                        <i class="fab fa-whatsapp text-base"></i>
                    </a>

                    <a href="https://instagram.com/ordersip" target="_blank"
                       class="flex h-9 w-9 items-center justify-center rounded-full bg-[#5C1C1C] text-white hover:bg-[#4A1616]">
                        <i class="fab fa-instagram text-base"></i>
                    </a>

                    <a href="mailto:byordersip@gmail.com"
                       class="flex h-9 w-9 items-center justify-center rounded-full bg-[#5C1C1C] text-white hover:bg-[#4A1616]">
                        <i class="fas fa-envelope text-sm"></i>
                    </a>
                </div>
            </div>

            <!-- Kolom 2: Tentang -->
            <div>
                <h4 class="mb-4 text-base font-semibold">Tentang Kami</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="/about" class="hover:text-[#8B1E1E]">Tentang OrderSip</a></li>
                    <li><a href="/about#team" class="hover:text-[#8B1E1E]">Tim OrderSip</a></li>
                </ul>
            </div>

            <!-- Kolom 3: Menu -->
            <div>
                <h4 class="mb-4 text-base font-semibold">Menu</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="/" class="hover:text-[#8B1E1E]">Beranda</a></li>
                    <li><a href="/#harga" class="hover:text-[#8B1E1E]">Harga</a></li>
                    <li><a href="/blog" class="hover:text-[#8B1E1E]">Blog</a></li>
                    <li><a href="/#testimoni" class="hover:text-[#8B1E1E]">Testimoni</a></li>
                </ul>
            </div>

            <!-- Kolom 4: Kontak -->
            <div>
                <h4 class="mb-4 text-base font-semibold">Kontak Kami</h4>

                <div class="space-y-4 text-sm">
                    <div>
                        <p class="font-semibold text-xs uppercase">Email</p>
                        <a href="mailto:byordersip@gmail.com" class="hover:text-[#8B1E1E]">
                            byordersip@gmail.com
                        </a>
                    </div>

                    <div>
                        <p class="font-semibold text-xs uppercase">WhatsApp</p>
                        <a href="https://wa.me/6287739094119" target="_blank" class="hover:text-[#8B1E1E]">
                            +62 877-3909-4119
                        </a>
                    </div>

                    <div>
                        <p class="font-semibold text-xs uppercase">Alamat</p>
                        <p>Surabaya, Jawa Timur</p>
                    </div>
                </div>
            </div>

        </div>

        <!-- Bottom bar -->
        <div class="border-t border-[#5C1C1C]/30 pt-4 flex flex-col md:flex-row items-center justify-between text-xs">
            <p>@2025 Website UMKM F&B made by OrderSip</p>

            <div class="flex gap-6 mt-2 md:mt-0">
                <a href="/terms" class="hover:text-[#8B1E1E]">Syarat & Ketentuan</a>
                <a href="/privacy" class="hover:text-[#8B1E1E]">Kebijakan Privasi</a>
            </div>
        </div>

    </div>
</footer>
