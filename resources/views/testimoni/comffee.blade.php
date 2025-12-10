@extends('layouts.app')

@section('content')

{{-- HERO / HEADER --}}
<section class="bg-white">
    <div class="max-w-5xl mx-auto px-4 pt-6 pb-10">

        {{-- Banner + overlay konten --}}
        <div class="relative rounded-2xl overflow-hidden shadow-md">

            {{-- Gambar banner --}}
            <img src="{{ asset('assets/images/comffee-banner.jpg') }}"
                 alt="Comffee Coffee Shop"
                 class="w-full h-[220px] md:h-[260px] object-cover brightness-55">

            {{-- Badge Basic Partner (pojok kiri atas) --}}
            <div class="absolute top-4 left-4">
                <span
                    class="inline-flex items-center gap-2 rounded-full bg-[#FFDC8F] px-4 py-1 text-xs font-semibold text-[#5C1C1C] shadow">
                    <span class="inline-block h-2 w-2 rounded-full bg-[#5C1C1C]"></span>
                    Basic Partner
                </span>
            </div>

            {{-- Teks utama di atas banner --}}
            <div class="absolute inset-0 flex flex-col justify-center">
                <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-4 px-6 md:px-10">

                    {{-- Nama toko --}}
                    <div>
                        <h1 class="text-xl md:text-2xl font-bold text-white mb-1 drop-shadow">
                            Comffee Coffee Shop
                        </h1>
                        <p class="text-xs md:text-sm text-white/90">
                            Coffee Shop &amp; Café • Coffee yang berkembang dengan OrderSip
                        </p>
                    </div>

                    {{-- Jam operasional --}}
                    <div class="text-[11px] md:text-xs text-right text-white/90">
                        <p class="font-semibold text-white mb-1 drop-shadow">Open Table:</p>
                        <p>Senin – Jumat : 10.00 WIB – 22.00 WIB</p>
                        <p>Sabtu – Minggu : 10.00 WIB – 22.00 WIB</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Bar info kecil di bawah banner (kartu putih yang menempel) --}}
        <div class="relative -mt-5 md:-mt-6">
            <div
                class="mx-auto bg-white rounded-2xl shadow-lg border border-[#EFE4D5] px-4 md:px-6 py-3 flex flex-col md:flex-row items-stretch md:items-center justify-between gap-3 text-[11px]">

                {{-- Nama UMKM --}}
                <div class="flex items-center gap-2 flex-1">
                    <span
                        class="flex h-6 w-6 items-center justify-center rounded-lg bg-[#FFE8D3] text-[13px] text-[#5C1C1C]">
                        <i class="fas fa-store"></i>
                    </span>
                    <div class="leading-tight">
                        <p class="text-[#A28B6C]">Nama UMKM</p>
                        <p class="font-semibold text-[#2D1810]">Comffee</p>
                    </div>
                </div>

                {{-- Kategori --}}
                <div class="flex items-center gap-2 flex-1">
                    <span
                        class="flex h-6 w-6 items-center justify-center rounded-lg bg-[#FFE8D3] text-[13px] text-[#5C1C1C]">
                        <i class="fas fa-mug-hot"></i>
                    </span>
                    <div class="leading-tight">
                        <p class="text-[#A28B6C]">Kategori</p>
                        <p class="font-semibold text-[#2D1810]">Cafe</p>
                    </div>
                </div>

                {{-- Lokasi --}}
                <div class="flex items-center gap-2 flex-1">
                    <span
                        class="flex h-6 w-6 items-center justify-center rounded-lg bg-[#FFE8D3] text-[13px] text-[#5C1C1C]">
                        <i class="fas fa-map-marker-alt"></i>
                    </span>
                    <div class="leading-tight">
                        <p class="text-[#A28B6C]">Lokasi</p>
                        <p class="font-semibold text-[#2D1810]">Surabaya</p>
                    </div>
                </div>

                {{-- Status --}}
                <div class="flex items-center gap-2 flex-1">
                    <span
                        class="flex h-6 w-6 items-center justify-center rounded-lg bg-[#FFE8D3] text-[13px] text-[#5C1C1C]">
                        <i class="fas fa-star"></i>
                    </span>
                    <div class="leading-tight">
                        <p class="text-[#A28B6C]">Status</p>
                        <p class="font-semibold text-[#2D1810]">Basic</p>
                    </div>
                </div>

                {{-- Peningkatan --}}
                <div class="flex items-center gap-2 flex-1">
                    <span
                        class="flex h-6 w-6 items-center justify-center rounded-lg bg-[#FFE8D3] text-[13px] text-[#5C1C1C]">
                        <i class="fas fa-chart-line"></i>
                    </span>
                    <div class="leading-tight">
                        <p class="text-[#A28B6C]">Peningkatan</p>
                        <p class="font-semibold text-[#16A34A]">+80%</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

{{-- TENTANG COMFFEE --}}
<section class="py-10 bg-[#F5F1E8]">
    <div class="max-w-5xl mx-auto px-4">
        <div class="bg-[#118B3E] text-white rounded-3xl px-6 md:px-10 py-8 shadow-md">
            <h2 class="text-lg md:text-xl font-bold text-center mb-4">
                Tentang Comffee
            </h2>
            <p class="text-xs md:text-sm leading-relaxed mb-4">
                Comffee adalah coffee shop sederhana yang menghadirkan rasa kopi berkualitas tinggi dengan suasana yang
                nyaman dan hangat. Didirikan pada tahun 2024, kami berkomitmen untuk menyajikan rasa kopi yang berbeda dari
                kompetitor yang lain.
            </p>
            <p class="text-xs md:text-sm leading-relaxed mb-4">
                Kami menawarkan berbagai menu kopi, mulai dari espresso-based drinks, pastry dan light meals yang cocok
                menemani aktivitas Anda. Dengan bantuan OrderSip, proses pemesanan dan konfirmasi menjadi jauh lebih cepat
                dan mudah dengan dukungan dashboard yang rapi.
            </p>
            <p class="text-xs md:text-sm leading-relaxed">
                Sejak menggunakan OrderSip, Comffee berhasil meningkatkan efisiensi operasional, mengurangi antrean,
                dan membuat pelanggan bisa memesan langsung dari website katalog produk kami.
            </p>
        </div>
    </div>
</section>

{{-- PRODUK UNGGULAN --}}
<section class="py-12 bg-white">
    <div class="max-w-5xl mx-auto px-4">

        <div class="text-center mb-10">
            <h2 class="text-xl md:text-2xl font-bold text-[#2D1810] mb-2">Produk Unggulan</h2>
            <p class="text-sm text-[#6B4423]">Menu favorit pelanggan yang dikelola lewat OrderSip</p>
        </div>

        {{-- Coffee Series --}}
        <div class="mb-10">
            <h3 class="text-center text-base md:text-lg font-semibold text-[#16A34A] mb-6">
                Coffee Series
            </h3>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-10">
                {{-- 1 --}}
                <div class="text-center">
                    <div class="h-44 flex items-end justify-center mb-3 relative">

                        <img src="{{ asset('assets/images/comffee-drink-1.png') }}"
                             onerror="this.src='{{ asset('assets/images/fee-carte.png') }}'"
                             alt="Fee Carte"
                             class="h-full object-contain z-10">

                        {{-- Bayangan --}}
                        <div class="pointer-events-none absolute bottom-0.5 w-28 h-6 bg-black/25 rounded-full blur-md"></div>
                    </div>

                    <p class="font-semibold text-sm text-[#2D1810] mb-1">FEE CARTE</p>
                    <p class="text-[11px] text-[#7A5A5A]">
                        Espresso manis dengan brown sugar hangat.
                    </p>
                </div>

                {{-- 2 --}}
                <div class="text-center">
                    <div class="h-44 flex items-end justify-center mb-3 relative">
                        <img src="{{ asset('assets/images/comffee-drink-2.png') }}"
                             onerror="this.src='{{ asset('assets/images/fee-tam.png') }}'"
                             alt="Fee Tam"
                             class="h-full object-contain z-10">
                        <div class="pointer-events-none absolute bottom-0.5 w-28 h-6 bg-black/25 rounded-full blur-md"></div>
                    </div>
                    <p class="font-semibold text-sm text-[#2D1810] mb-1">FEE TAM</p>
                    <p class="text-[11px] text-[#7A5A5A]">
                        Ringan, smooth, dan mudah dinikmati.
                    </p>
                </div>

                {{-- 3 --}}
                <div class="text-center">
                    <div class="h-44 flex items-end justify-center mb-3 relative">
                        <img src="{{ asset('assets/images/comffee-drink-3.png') }}"
                             onerror="this.src='{{ asset('assets/images/fee-rum.png') }}'"
                             alt="Fee Rum"
                             class="h-full object-contain z-10">
                        <div class="pointer-events-none absolute bottom-0.5 w-28 h-6 bg-black/25 rounded-full blur-md"></div>
                    </div>
                    <p class="font-semibold text-sm text-[#2D1810] mb-1">FEE RUM</p>
                    <p class="text-[11px] text-[#7A5A5A]">
                        Kopi creamy dengan sentuhan warm brown sugar.
                    </p>
                </div>
            </div>
        </div>

        {{-- Non Coffee Series --}}
        <div class="mb-10">
            <h3 class="text-center text-base md:text-lg font-semibold text-[#16A34A] mb-6">
                Non Coffee Series
            </h3>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-10">
                {{-- 1 --}}
                <div class="text-center">
                    <div class="h-44 flex items-end justify-center mb-3 relative">
                        <img src="{{ asset('assets/images/comffee-drink-4.png') }}"
                             onerror="this.src='{{ asset('assets/images/latte-berry.png') }}'"
                             alt="Latte Berry"
                             class="h-full object-contain z-10">
                        <div class="pointer-events-none absolute bottom-0.5 w-28 h-6 bg-black/25 rounded-full blur-md"></div>
                    </div>
                    <p class="font-semibold text-sm text-[#2D1810] mb-1">LATTE BERRY</p>
                    <p class="text-[11px] text-[#7A5A5A]">
                        Ringan, smooth, dengan sentuhan berry segar.
                    </p>
                </div>

                {{-- 2 --}}
                <div class="text-center">
                    <div class="h-44 flex items-end justify-center mb-3 relative">
                        <img src="{{ asset('assets/images/comffee-drink-5.png') }}"
                             onerror="this.src='{{ asset('assets/images/matcha.png') }}'"
                             alt="Matcha Culinary"
                             class="h-full object-contain z-10">
                        <div class="pointer-events-none absolute bottom-0.5 w-28 h-6 bg-black/25 rounded-full blur-md"></div>
                    </div>
                    <p class="font-semibold text-sm text-[#2D1810] mb-1">MATCHA CULINARY</p>
                    <p class="text-[11px] text-[#7A5A5A]">
                        Matcha creamy dengan rasa premium.
                    </p>
                </div>

                {{-- 3 --}}
                <div class="text-center">
                    <div class="h-44 flex items-end justify-center mb-3 relative">
                        <img src="{{ asset('assets/images/comffee-drink-6.png') }}"
                             onerror="this.src='{{ asset('assets/images/biscuit.png') }}'"
                             alt="Biscuit Rum"
                             class="h-full object-contain z-10">
                        <div class="pointer-events-none absolute bottom-0.5 w-28 h-6 bg-black/25 rounded-full blur-md"></div>
                    </div>
                    <p class="font-semibold text-sm text-[#2D1810] mb-1">BISCUIT RUM</p>
                    <p class="text-[11px] text-[#7A5A5A]">
                        Latte creamy dengan biscuit crunchy.
                    </p>
                </div>
            </div>
        </div>

       <div class="mt-6 flex justify-center">
            <a href="{{ route('demo.comffee') }}"
            class="inline-flex items-center gap-1 text-xs md:text-sm text-[#570F0F] hover:underline">
                Kunjungi Website
                <span>↗</span>
            </a>
        </div>
    </div>
</section>

{{-- SECTION: Transformasi Bisnis --}}
<section class="py-12 bg-[#F5F1E8]">
    <div class="max-w-5xl mx-auto px-4">
        <h2 class="text-center text-base md:text-lg font-semibold text-[#2D1810] mb-6">
            Transformasi Bisnis yang terukur dan nyata
        </h2>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6">
            @foreach (['Peningkatan Pelanggan','Repeat Order','Konversi Pesanan','Engagement Sosial'] as $label)
                <div class="bg-[#5C1C1C] text-white rounded-2xl py-5 flex flex-col items-center justify-center shadow-md">
                    <div class="mb-2 text-xl font-bold">+80%</div>
                    <div class="text-[11px] text-center px-4">{{ $label }}</div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- TESTIMONI UTAMA --}}
<section class="py-12 bg-white">
    <div class="max-w-5xl mx-auto px-4">

        <div class="bg-[#FFF9F3] border border-[#F0E2D4] rounded-3xl p-6 md:p-8 shadow-sm">
            <div class="flex items-start gap-3 mb-4">
                <span class="text-xl">❝</span>
                <p class="text-sm text-[#5C1C1C] leading-relaxed">
                    “OrderSip benar-benar mengubah cara kami mengelola bisnis. Dari pencatatan manual yang ribet,
                    sekarang semua jadi otomatis dan terorganisir. Pelanggan juga lebih puas karena pelayanan kami
                    jadi lebih cepat. Omzet naik 65% dalam 6 bulan pertama.”
                </p>
            </div>

            <div class="flex items-center gap-3 mt-4">
                <div class="h-10 w-10 rounded-full bg-[#E2DAC8] flex items-center justify-center">
                    <span class="text-xs font-semibold text-[#5C1C1C]">RC</span>
                </div>
                <div>
                    <p class="text-sm font-semibold text-[#2D1810] mb-0">
                        Revaldo Kartos
                    </p>
                    <p class="text-[11px] text-[#7A5A5A]">
                        Pemilik Comffee Coffee Shop Surabaya
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>

{{-- CTA BAWAH --}}
<section class="py-12 bg-[#5C1C1C]">
    <div class="max-w-5xl mx-auto px-4 text-center text-white">
        <p class="text-xs md:text-sm mb-1">
            Ingin Bisnis mu Berkembang Seperti Mereka?
        </p>
        <p class="text-[11px] md:text-xs mb-6 text-[#F9D9C7]">
            Bergabunglah untuk memulai perjalanan digital bersama OrderSip seperti UMKM yang sudah bertransformasi.
        </p>

        <a href="{{ url('/#harga') }}"
           class="inline-flex items-center gap-2 bg-white text-[#5C1C1C] text-xs md:text-sm font-semibold px-6 py-2.5 rounded-full shadow-md hover:bg-[#F8F1EB] transition">
            Mulai Bisnis Dengan OrderSip
            <span>→</span>
        </a>

        <div class="flex flex-wrap gap-6 justify-center mt-6 text-[11px] text-[#F9D9C7]">
            <span>Gratis</span>
            <span>Setup mudah</span>
            <span>Support 24/7</span>
        </div>
    </div>
</section>

@endsection
