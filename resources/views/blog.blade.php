@extends('layouts.app')

@section('content')

<section class="blog-hero py-20 text-center bg-gradient-to-br from-[#FFFBF0] to-[#F0EBDC]">
    <div class="container mx-auto px-4">
        <h1 class="text-5xl font-bold mb-4">Blog & <span class="text-[#570F0F]">Edukasi UMKM</span></h1>
        <p class="max-w-2xl mx-auto text-lg text-gray-600">Tips, trik, and wawasan terbaru untuk mengembangkan bisnis kuliner Anda.</p>
    </div>
</section>

<section class="blog-list py-16">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Blog Item 1 -->
            <div class="card p-0 overflow-hidden">
                <img src="https://placehold.co/600x300/F0EBDC/570F0F?text=Marketing+Tips" alt="Blog Image" class="w-full h-48 object-cover">
                <div class="p-6">
                    <small class="text-gray-500">Marketing • 2 Hari yang lalu</small>
                    <h3 class="my-2 text-xl font-semibold">5 Cara Meningkatkan Penjualan via WhatsApp</h3>
                    <p class="mb-4 text-gray-600">Pelajari strategi copywriting dan follow-up yang efektif untuk closing lebih banyak order.</p>
                    <a href="#" class="font-semibold text-[#570F0F] hover:underline">Baca Selengkapnya →</a>
                </div>
            </div>
            
            <!-- Blog Item 2 -->
            <div class="card p-0 overflow-hidden">
                <img src="https://placehold.co/600x300/F0EBDC/570F0F?text=Food+Photography" alt="Blog Image" class="w-full h-48 object-cover">
                <div class="p-6">
                    <small class="text-gray-500">Tips Foto • 1 Minggu yang lalu</small>
                    <h3 class="my-2 text-xl font-semibold">Tips Foto Produk Makanan Pakai HP</h3>
                    <p class="mb-4 text-gray-600">Tidak perlu kamera mahal, HP Anda cukup untuk membuat foto menu yang menggugah selera.</p>
                    <a href="#" class="font-semibold text-[#570F0F] hover:underline">Baca Selengkapnya →</a>
                </div>
            </div>
            
             <!-- Blog Item 3 -->
             <div class="card p-0 overflow-hidden">
                <img src="https://placehold.co/600x300/F0EBDC/570F0F?text=Management" alt="Blog Image" class="w-full h-48 object-cover">
                <div class="p-6">
                    <small class="text-gray-500">Manajemen • 2 Minggu yang lalu</small>
                    <h3 class="my-2 text-xl font-semibold">Pentingnya Mencatat Stok Harian</h3>
                    <p class="mb-4 text-gray-600">Hindari kerugian bahan baku dengan sistem pencatatan stok yang disiplin.</p>
                    <a href="#" class="font-semibold text-[#570F0F] hover:underline">Baca Selengkapnya →</a>
                </div>
            </div>
        </div>
        
        <!-- Pagination -->
        <div class="text-center mt-12">
            <a href="#" class="btn btn-outline">Muat Lebih Banyak</a>
        </div>
    </div>
</section>

@endsection
