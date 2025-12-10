<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Comffee Coffee Shop – Demo OrderSip</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- panggil asset Tailwind/JS project kamu --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Font optional --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-white text-[#1A130F] font-sans">

{{-- HEADER / NAVBAR COMFFEE --------------------------------------- --}}
<header class="border-b border-[#E5DED5] bg-[#FFFDF9]/95 backdrop-blur sticky top-0 z-40">
    <div class="max-w-5xl mx-auto px-4 h-14 flex items-center justify-between text-xs md:text-sm">
        <div class="font-semibold text-[#3B2517]">
            Comffee
        </div>

        <nav class="hidden md:flex items-center gap-6 text-[11px] md:text-xs text-[#6A5241]">
            <a href="#tentang" class="hover:text-[#3B2517]">Tentang Kami</a>
            <a href="#contact" class="hover:text-[#3B2517]">Kunjungi Kami</a>
            <a href="#menu" class="hover:text-[#3B2517]">Menu</a>
            <a href="#ulasan" class="hover:text-[#3B2517]">Ulasan</a>
        </nav>

        <a href="#contact"
           class="ml-4 inline-flex items-center px-4 py-1.5 rounded-full bg-[#6C4A30] text-white text-[11px] md:text-xs font-semibold hover:bg-[#5a3d27]">
            Pesan sekarang
        </a>
    </div>
</header>

<main>

    {{-- HERO ----------------------------------------------------}}
    <section class="relative h-[420px] md:h-[520px]">
        <div class="absolute inset-0">
            <img src="{{ asset('assets/images/comffee-banner.jpg') }}"
                 alt="Comffee Coffee Shop"
                 class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-b from-black/70 via-black/40 to-black/70"></div>
        </div>

        <div class="relative max-w-5xl mx-auto px-4 h-full flex flex-col justify-center items-center text-center text-white">
            <p class="uppercase tracking-[0.25em] text-xs mb-2">Comffee</p>
            <h1 class="text-3xl md:text-4xl font-semibold mb-3 max-w-2xl">
                Coffee shop sederhana yang menyajikan rasa kopi yang bertahan
            </h1>
            <p class="text-sm md:text-base text-white/80 max-w-xl mb-6">
                Comffee adalah coffee shop yang menghadirkan rasa kopi berkualitas tinggi dengan suasana yang hangat
                dan nyaman – kini dikelola lebih rapi dengan OrderSip.
            </p>
            <div class="flex flex-wrap gap-3 justify-center">
                <a href="#menu"
                   class="px-6 py-2.5 rounded-full bg-[#16A34A] hover:bg-[#15803d] text-sm font-semibold">
                    Lihat Menu
                </a>
                <a href="#contact"
                   class="px-6 py-2.5 rounded-full bg-white/10 border border-white/40 text-sm font-semibold hover:bg-white/20">
                    Kontak Comffee
                </a>
            </div>
        </div>
    </section>

    {{-- TENTANG COMFFEE ----------------------------------------}}
    <section id="tentang" class="py-14 bg-[#FFF7EC]">
        <div class="max-w-5xl mx-auto px-4">
            <h2 class="text-center text-xl md:text-2xl font-bold text-[#9A4B10] mb-8">
                Tentang Comffee
            </h2>

            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white rounded-2xl shadow-md p-6 flex flex-col md:flex-row gap-4">
                    <div class="w-full md:w-2/5">
                        <img src="{{ asset('assets/images/comffee-about-1.jpg') }}"
                             alt="Suasana Comffee"
                             class="w-full h-52 object-cover rounded-xl">
                    </div>
                    <div class="w-full md:w-3/5 text-sm text-[#5b4335] leading-relaxed">
                        <p class="mb-3">
                            Comffee hadir sejak 2024 sebagai coffee shop sederhana dengan komitmen kuat untuk
                            menyajikan rasa kopi berkualitas tinggi dalam suasana yang nyaman dan hangat.
                        </p>
                        <p>
                            Kami mengutamakan suasana cozy yang membuat pelanggan betah untuk bekerja, belajar,
                            maupun sekadar mengobrol santai.
                        </p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-md p-6 flex flex-col md:flex-row gap-4">
                    <div class="w-full md:w-2/5 order-1 md:order-2">
                        <img src="{{ asset('assets/images/comffee-about-2.png') }}"
                             alt="Menu Comffee"
                             class="w-full h-52 object-cover rounded-xl">
                    </div>
                    <div class="w-full md:w-3/5 text-sm text-[#5b4335] leading-relaxed order-2 md:order-1">
                        <p class="mb-3">
                            Kami menawarkan berbagai minuman mulai dari espresso-based, latte, hingga
                            menu non-coffee yang creamy dan menyegarkan.
                        </p>
                        <p>
                            Dengan OrderSip, setiap menu dikelola lebih rapi, pesanan lewat WhatsApp tercatat jelas,
                            dan laporan penjualan lebih mudah dibaca.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- PRODUK UNGGULAN ----------------------------------------}}
    <section class="py-14 bg-white">
        <div class="max-w-5xl mx-auto px-4">

            <div class="text-center mb-10">
                <h2 class="text-xl md:text-2xl font-bold text-[#2D1810] mb-2">Produk Unggulan</h2>
                <p class="text-sm text-[#6B4423]">
                    Menu favorit pelanggan yang dikelola lewat OrderSip
                </p>
            </div>

            {{-- Coffee Series --}}
            <div class="mb-10">
                <h3 class="text-center text-base md:text-lg font-semibold text-[#16A34A] mb-6">
                    Coffee Series
                </h3>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-10">
                    <div class="text-center">
                        <div class="h-44 flex items-end justify-center mb-3 relative">
                            <img src="{{ asset('assets/images/fee-carte.png') }}"
                                 alt="Fee Carte"
                                 class="h-full object-contain z-10">
                            <div class="pointer-events-none absolute bottom-0.5 w-24 h-5 bg-black/20 rounded-full blur-md"></div>
                        </div>
                        <p class="font-semibold text-sm text-[#2D1810] mb-1">FEE CARTE</p>
                        <p class="text-[11px] text-[#7A5A5A]">
                            Espresso manis dengan brown sugar hangat.
                        </p>
                    </div>

                    <div class="text-center">
                        <div class="h-44 flex items-end justify-center mb-3 relative">
                            <img src="{{ asset('assets/images/fee-tam.png') }}"
                                 alt="Fee Tam"
                                 class="h-full object-contain z-10">
                            <div class="pointer-events-none absolute bottom-0.5 w-24 h-5 bg-black/20 rounded-full blur-md"></div>
                        </div>
                        <p class="font-semibold text-sm text-[#2D1810] mb-1">FEE TAM</p>
                        <p class="text-[11px] text-[#7A5A5A]">
                            Ringan, smooth, dan mudah dinikmati.
                        </p>
                    </div>

                    <div class="text-center">
                        <div class="h-44 flex items-end justify-center mb-3 relative">
                            <img src="{{ asset('assets/images/fee-rum.png') }}"
                                 alt="Fee Rum"
                                 class="h-full object-contain z-10">
                            <div class="pointer-events-none absolute bottom-0.5 w-24 h-5 bg-black/20 rounded-full blur-md"></div>
                        </div>
                        <p class="font-semibold text-sm text-[#2D1810] mb-1">FEE RUM</p>
                        <p class="text-[11px] text-[#7A5A5A]">
                            Kopi creamy dengan sentuhan warm brown sugar.
                        </p>
                    </div>
                </div>
            </div>

            {{-- Non Coffee Series --}}
            <div class="mb-4" id="menu">
                <h3 class="text-center text-base md:text-lg font-semibold text-[#16A34A] mb-6">
                    Non Coffee Series
                </h3>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-10">
                    <div class="text-center">
                        <div class="h-44 flex items-end justify-center mb-3 relative">
                            <img src="{{ asset('assets/images/latte-berry.png') }}"
                                 alt="Latte Berry"
                                 class="h-full object-contain z-10">
                            <div class="pointer-events-none absolute bottom-0.5 w-24 h-5 bg-black/20 rounded-full blur-md"></div>
                        </div>
                        <p class="font-semibold text-sm text-[#2D1810] mb-1">LATTE BERRY</p>
                        <p class="text-[11px] text-[#7A5A5A]">
                            Ringan, smooth, dengan sentuhan berry segar.
                        </p>
                    </div>

                    <div class="text-center">
                        <div class="h-44 flex items-end justify-center mb-3 relative">
                            <img src="{{ asset('assets/images/matcha.png') }}"
                                 alt="Matcha Culinary"
                                 class="h-full object-contain z-10">
                            <div class="pointer-events-none absolute bottom-0.5 w-24 h-5 bg-black/20 rounded-full blur-md"></div>
                        </div>
                        <p class="font-semibold text-sm text-[#2D1810] mb-1">MATCHA CULINARY</p>
                        <p class="text-[11px] text-[#7A5A5A]">
                            Matcha creamy dengan rasa premium.
                        </p>
                    </div>

                    <div class="text-center">
                        <div class="h-44 flex items-end justify-center mb-3 relative">
                            <img src="{{ asset('assets/images/biscuit.png') }}"
                                 alt="Biscuit Rum"
                                 class="h-full object-contain z-10">
                            <div class="pointer-events-none absolute bottom-0.5 w-24 h-5 bg-black/20 rounded-full blur-md"></div>
                        </div>
                        <p class="font-semibold text-sm text-[#2D1810] mb-1">BISCUIT RUM</p>
                        <p class="text-[11px] text-[#7A5A5A]">
                            Latte creamy dengan biscuit crunchy.
                        </p>
                    </div>
                </div>
            </div>

            {{-- Semua Menu --}}
            <div class="mt-12">
                <div class="text-center mb-6">
                    <h3 class="text-base md:text-lg font-semibold text-[#2D1810]">
                        Semua Menu
                    </h3>
                    <p class="text-xs md:text-sm text-[#7A5A5A]">
                        Coba varian menu Comffee lainnya
                    </p>
                </div>

                <div class="flex justify-center">
                    <div
                        class="bg-[#FFF6EB] rounded-3xl shadow-md overflow-hidden
                               w-full max-w-4xl px-4 py-6 md:px-10 md:py-8 flex justify-center">
                        <img
                            src="{{ asset('assets/images/comffee-menu.png') }}"
                            alt="Menu Comffee"
                            class="w-full max-w-3xl object-contain">
                    </div>
                </div>

                <div class="flex flex-wrap justify-center gap-3 mt-6">
                    <a href="#contact"
                       class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full
                              bg-[#16A34A] text-white text-xs md:text-sm font-semibold
                              hover:bg-[#15803d] transition">
                        Pesan Sekarang
                    </a>

                    <a href="#"
                       class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full
                              border border-[#16A34A] text-[#16A34A] text-xs md:text-sm font-semibold
                              hover:bg-[#ecfdf3] transition">
                        Download List Menu PDF
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- TESTIMONI ---------------------------------------------}}
    <section id="ulasan" class="py-14 bg-[#FFF7EC]">
        <div class="max-w-5xl mx-auto px-4">
            <h2 class="text-center text-xl md:text-2xl font-bold text-[#2D1810] mb-8">
                Apa Kata Mereka?
            </h2>

            <div class="grid md:grid-cols-3 gap-6 text-sm">
                @foreach ([1,2,3] as $i)
                    <div class="bg-white rounded-2xl shadow-md p-5 flex flex-col justify-between">
                        <p class="text-[#6B4423] mb-3 text-xs leading-relaxed">
                            “OrderSip benar-benar mengubah cara kami mengelola pesanan. Prosesnya jadi rapi dan
                            laporan penjualan jauh lebih mudah dicek.”
                        </p>
                        <div class="mt-2">
                            <p class="font-semibold text-[#2D1810] text-sm">Pelanggan #{{ $i }}</p>
                            <p class="text-[11px] text-[#a2866b]">Pelanggan Comffee Surabaya</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- JAM OPERASIONAL ---------------------------------------}}
    <section class="py-14 bg-[#15803d]" id="jam">
        <div class="max-w-4xl mx-auto px-4 text-center text-white">
            <h2 class="text-xl md:text-2xl font-bold mb-6">Jam Operasional Comffee</h2>

            <div class="grid md:grid-cols-3 gap-6 text-sm">
                <div>
                    <p class="font-semibold mb-1">Senin – Jumat</p>
                    <p>10.00 WIB – 21.00 WIB</p>
                </div>
                <div>
                    <p class="font-semibold mb-1">Sabtu</p>
                    <p>09.00 WIB – 23.00 WIB</p>
                </div>
                <div>
                    <p class="font-semibold mb-1">Minggu</p>
                    <p>09.00 WIB – 22.00 WIB</p>
                </div>
            </div>

            <p class="mt-5 text-xs text-white/80">
                Catat jadwalnya dan mampir saat waktu senggang. Kopi terbaik siap menemani hari kamu.
            </p>
        </div>
    </section>

    {{-- KUNJUNGI KAMI -----------------------------------------}}
    <section class="py-14 bg-[#F5E7D3]" id="contact">
        <div class="max-w-5xl mx-auto px-4">
            <h2 class="text-center text-xl md:text-2xl font-bold text-[#9A4B10] mb-8">
                Kunjungi Kami
            </h2>

            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div>
                    <div class="rounded-2xl overflow-hidden shadow-md">
                        <img src="{{ asset('assets/images/comffee-map.jpg') }}"
                             alt="Lokasi Comffee"
                             class="w-full h-64 object-cover">
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-md p-6 text-sm text-[#5b4335] space-y-3">
                    <div>
                        <p class="font-semibold text-[#2D1810] text-sm mb-1">Alamat</p>
                        <p>Jl. Contoh Kopi No. 21, Surabaya, Jawa Timur</p>
                    </div>
                    <div>
                        <p class="font-semibold text-[#2D1810] text-sm mb-1">WhatsApp</p>
                        <a href="https://wa.me/6287739094119" target="_blank" class="text-[#16A34A] hover:underline">
                            +62 877-3909-4119
                        </a>
                    </div>
                    <div>
                        <p class="font-semibold text-[#2D1810] text-sm mb-1">Instagram</p>
                        <a href="https://instagram.com/comffee" class="text-[#16A34A] hover:underline" target="_blank">
                            @comffee.id
                        </a>
                    </div>
                    <div>
                        <p class="font-semibold text-[#2D1810] text-sm mb-1">Email</p>
                        <a href="mailto:hello@comffee.id" class="text-[#16A34A] hover:underline">
                            hello@comffee.id
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

{{-- FOOTER KHUSUS COMFFEE ----------------------------------- --}}
<footer class="bg-[#14100E] text-[#F5EEE7] pt-10 pb-6">
    <div class="max-w-5xl mx-auto px-4 space-y-10">

        <div class="grid md:grid-cols-3 gap-10 text-xs md:text-sm">
            <div>
                <h3 class="text-sm md:text-base font-semibold mb-3">Comffee</h3>
                <p class="text-[11px] md:text-xs text-[#D0C5BA] leading-relaxed">
                    Comffee (Sejak 2024) – Dedikasi untuk menyajikan kopi dengan cita rasa berbeda dan harga terjangkau.
                </p>
            </div>

            <div>
                <h4 class="text-sm font-semibold mb-3">Quick Links</h4>
                <ul class="space-y-2 text-[11px] md:text-xs text-[#D0C5BA]">
                    <li><a href="#tentang" class="hover:text-white">Tentang Kami</a></li>
                    <li><a href="#menu" class="hover:text-white">Menu</a></li>
                    <li><a href="#contact" class="hover:text-white">Lokasi</a></li>
                    <li><a href="#ulasan" class="hover:text-white">Ulasan</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-sm font-semibold mb-3">Ikuti Kami</h4>
                <div class="flex items-center gap-3">
                    <a href="https://instagram.com/comffee" target="_blank"
                       class="h-8 w-8 rounded-full bg-[#26201B] flex items-center justify-center hover:bg-[#3A3028]">
                        <i class="fab fa-instagram text-xs"></i>
                    </a>
                    <a href="#" class="h-8 w-8 rounded-full bg-[#26201B] flex items-center justify-center hover:bg-[#3A3028]">
                        <i class="fab fa-facebook-f text-xs"></i>
                    </a>
                    <a href="mailto:hello@comffee.id"
                       class="h-8 w-8 rounded-full bg-[#26201B] flex items-center justify-center hover:bg-[#3A3028]">
                        <i class="fas fa-envelope text-xs"></i>
                    </a>
                </div>
            </div>
        </div>

        <p class="text-center text-[10px] md:text-xs text-[#9E8D7E]">
            © 2024 Comffee Coffee Shop. All rights reserved.
        </p>
    </div>
</footer>

{{-- Font Awesome (kalau belum ada di layout utama) --}}
<script src="https://kit.fontawesome.com/3f84c3e1a0.js" crossorigin="anonymous"></script>
</body>
</html>
