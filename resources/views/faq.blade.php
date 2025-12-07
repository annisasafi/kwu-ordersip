@extends('layouts.app')

@section('content')

@php
    $answer = 'Ya, konsultasi dengan tim OrderSip 100% gratis tanpa ada biaya tersembunyi. Anda tidak perlu berkomitmen untuk berlangganan.';
@endphp

{{-- SECTION UTAMA: FAQ + Search + Tabs + Kategori --}}
<section id="faq" class="pt-14 pb-16 bg-gradient-to-b from-[#FFF7EF] via-[#F9F0E4] to-[#F3EBE2]">
    <div class="max-w-5xl mx-auto px-4">

        {{-- Title + subtitle --}}
        <div class="mb-6">
            <h1 class="text-xl md:text-2xl font-semibold text-[#570F0F] mb-1">
                Pertanyaan yang sering diajukan
            </h1>
            <p class="text-xs md:text-sm text-[#7A5A5A]">
                Temukan jawaban untuk pertanyaan umum tentang layanan kami.
            </p>
        </div>

        {{-- Search --}}
        <div class="mb-6">
            <div class="relative">
                <span class="absolute inset-y-0 left-4 flex items-center text-[#C3B3B3]">
                    <i class="fas fa-search text-xs md:text-sm"></i>
                </span>
                <input
                    type="text"
                    placeholder="Cari pertanyaan..."
                    class="w-full rounded-full border border-[#E4D7C8] bg-[#FBF7F2] py-3 pl-10 pr-4 text-xs md:text-sm outline-none focus:border-[#570F0F] focus:ring-0"
                >
            </div>
        </div>

        {{-- Tabs --}}
        <div class="flex flex-wrap gap-2 text-[11px] md:text-xs mb-8">
            <button class="px-4 py-1.5 rounded-full bg-[#570F0F] text-white shadow-sm">
                Semua
            </button>
            <button class="px-4 py-1.5 rounded-full bg-[#F5EDE2] text-[#570F0F] border border-transparent hover:border-[#570F0F]/40">
                Umum
            </button>
            <button class="px-4 py-1.5 rounded-full bg-[#F5EDE2] text-[#570F0F] border border-transparent hover:border-[#570F0F]/40">
                Paket &amp; Harga
            </button>
            <button class="px-4 py-1.5 rounded-full bg-[#F5EDE2] text-[#570F0F] border border-transparent hover:border-[#570F0F]/40">
                Fungsi &amp; Fitur
            </button>
            <button class="px-4 py-1.5 rounded-full bg-[#F5EDE2] text-[#570F0F] border border-transparent hover:border-[#570F0F]/40">
                Teknis
            </button>
            <button class="px-4 py-1.5 rounded-full bg-[#F5EDE2] text-[#570F0F] border border-transparent hover:border-[#570F0F]/40">
                Pembayaran &amp; Refund
            </button>
        </div>

        {{-- ====== GRUP FAQ (semua masih dalam 1 section supaya background mulus) ====== --}}
        <div class="space-y-10">

            {{-- GRUP: Umum --}}
            <div>
                <h2 class="text-sm md:text-base font-semibold text-[#570F0F] mb-3">
                    Umum
                </h2>

                <div class="space-y-3">
                    {{-- Card 1 --}}
                    <div class="rounded-xl md:rounded-2xl bg-white shadow-[0_6px_16px_rgba(0,0,0,0.05)] border border-[#F0E2D4] px-4 md:px-6 py-4">
                        <p class="text-[13px] md:text-sm font-semibold text-[#570F0F] mb-1">
                            Apa itu OrderSip?
                        </p>
                        <p class="text-[11px] md:text-xs text-[#7C6860] leading-relaxed">
                            {{ $answer }}
                        </p>
                    </div>

                    {{-- Card 2 --}}
                    <div class="rounded-xl md:rounded-2xl bg-white shadow-[0_6px_16px_rgba(0,0,0,0.05)] border border-[#F0E2D4] px-4 md:px-6 py-4">
                        <p class="text-[13px] md:text-sm font-semibold text-[#570F0F] mb-1">
                            Apakah OrderSip cocok untuk semua jenis usaha F&amp;B?
                        </p>
                        <p class="text-[11px] md:text-xs text-[#7C6860] leading-relaxed">
                            {{ $answer }}
                        </p>
                    </div>

                    {{-- Card 3 --}}
                    <div class="rounded-xl md:rounded-2xl bg-white shadow-[0_6px_16px_rgba(0,0,0,0.05)] border border-[#F0E2D4] px-4 md:px-6 py-4">
                        <p class="text-[13px] md:text-sm font-semibold text-[#570F0F] mb-1">
                            Apakah saya bisa mengelola OrderSip sendiri tanpa tim IT?
                        </p>
                        <p class="text-[11px] md:text-xs text-[#7C6860] leading-relaxed">
                            {{ $answer }}
                        </p>
                    </div>
                </div>
            </div>

            {{-- GRUP: Paket & Harga --}}
            <div>
                <h2 class="text-sm md:text-base font-semibold text-[#570F0F] mb-3">
                    Paket &amp; Harga
                </h2>

                <div class="space-y-3">
                    @foreach (range(1,3) as $i)
                        <div class="rounded-xl md:rounded-2xl bg-white shadow-[0_6px_16px_rgba(0,0,0,0.05)] border border-[#F0E2D4] px-4 md:px-6 py-4">
                            <p class="text-[13px] md:text-sm font-semibold text-[#570F0F] mb-1">
                                Apa perbedaan Paket Gratis, Basic, dan Pro?
                            </p>
                            <p class="text-[11px] md:text-xs text-[#7C6860] leading-relaxed">
                                {{ $answer }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- GRUP: Fungsi & Fitur --}}
            <div>
                <h2 class="text-sm md:text-base font-semibold text-[#570F0F] mb-3">
                    Fungsi &amp; Fitur
                </h2>

                <div class="space-y-3">
                    @foreach (range(1,3) as $i)
                        <div class="rounded-xl md:rounded-2xl bg-white shadow-[0_6px_16px_rgba(0,0,0,0.05)] border border-[#F0E2D4] px-4 md:px-6 py-4">
                            <p class="text-[13px] md:text-sm font-semibold text-[#570F0F] mb-1">
                                Apa saja fitur utama yang tersedia di OrderSip?
                            </p>
                            <p class="text-[11px] md:text-xs text-[#7C6860] leading-relaxed">
                                {{ $answer }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- GRUP: Teknis --}}
            <div>
                <h2 class="text-sm md:text-base font-semibold text-[#570F0F] mb-3">
                    Teknis
                </h2>

                <div class="space-y-3">
                    @foreach (range(1,3) as $i)
                        <div class="rounded-xl md:rounded-2xl bg-white shadow-[0_6px_16px_rgba(0,0,0,0.05)] border border-[#F0E2D4] px-4 md:px-6 py-4">
                            <p class="text-[13px] md:text-sm font-semibold text-[#570F0F] mb-1">
                                Apakah perlu install aplikasi atau hosting sendiri?
                            </p>
                            <p class="text-[11px] md:text-xs text-[#7C6860] leading-relaxed">
                                {{ $answer }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- GRUP: Pembayaran & Refund --}}
            <div>
                <h2 class="text-sm md:text-base font-semibold text-[#570F0F] mb-3">
                    Pembayaran &amp; Refund
                </h2>

                <div class="space-y-3">
                    @foreach (range(1,2) as $i)
                        <div class="rounded-xl md:rounded-2xl bg-white shadow-[0_6px_16px_rgba(0,0,0,0.05)] border border-[#F0E2D4] px-4 md:px-6 py-4">
                            <p class="text-[13px] md:text-sm font-semibold text-[#570F0F] mb-1">
                                Bagaimana sistem pembayaran dan apakah ada refund?
                            </p>
                            <p class="text-[11px] md:text-xs text-[#7C6860] leading-relaxed">
                                {{ $answer }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>{{-- end: space-y-10 --}}
    </div>
</section>

{{-- CTA: Masih ada pertanyaan? --}}
<section class="py-10 md:py-12 bg-[#570F0F]">
    <div class="max-w-5xl mx-auto px-4 text-center">
        <p class="text-xs md:text-sm text-[#F9E6D6] mb-1">
            Masih ada pertanyaan?
        </p>
        <p class="text-[11px] md:text-xs text-[#F9E6D6] mb-6">
            Tim kami siap membantu Anda. Hubungi melalui WhatsApp atau email.
        </p>

        <div class="flex flex-wrap items-center justify-center gap-4">
            <a href="https://wa.me/6281234567890"
               class="inline-flex items-center gap-2 rounded-full bg-white text-[#570F0F] text-[11px] md:text-xs px-5 py-2 shadow-sm hover:bg-[#F8F3EE] transition">
                <i class="fab fa-whatsapp text-sm"></i>
                WhatsApp Support
            </a>
            <a href="mailto:byordersip@gmail.com"
               class="inline-flex items-center gap-2 rounded-full bg-[#F8F3EE] text-[#570F0F] text-[11px] md:text-xs px-5 py-2 shadow-sm hover:bg-white transition">
                <i class="fas fa-envelope text-sm"></i>
                Email Support
            </a>
        </div>
    </div>
</section>

@endsection
