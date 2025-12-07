@extends('layouts.app')

@section('content')

<section class="terms-hero py-20 text-center bg-gradient-to-br from-[#FFFBF0] to-[#F0EBDC]">
    <div class="container mx-auto px-4">
        <h1 class="text-5xl font-bold mb-4">Syarat & <span class="text-[#570F0F]">Ketentuan</span></h1>
        <p class="max-w-2xl mx-auto text-lg text-gray-600">Terakhir diperbarui: <?php echo date('d F Y'); ?></p>
    </div>
</section>

<section class="terms-content py-16">
    <div class="container mx-auto px-4">
        <div class="card p-12 max-w-4xl mx-auto">
            <h3 class="text-2xl font-semibold mb-4 text-[#570F0F]">1. Pendahuluan</h3>
            <p class="mb-8 text-gray-600 leading-relaxed">Selamat datang di OrderSip. Dengan mengakses atau menggunakan layanan kami, Anda setuju untuk terikat dengan syarat dan ketentuan ini.</p>
            
            <h3 class="text-2xl font-semibold mb-4 text-[#570F0F]">2. Layanan Kami</h3>
            <p class="mb-8 text-gray-600 leading-relaxed">OrderSip menyediakan platform bagi UMKM F&B untuk membuat katalog online dan mengelola pesanan melalui WhatsApp. Kami tidak bertanggung jawab atas transaksi yang terjadi antara penjual dan pembeli.</p>
            
            <h3 class="text-2xl font-semibold mb-4 text-[#570F0F]">3. Akun Pengguna</h3>
            <p class="mb-8 text-gray-600 leading-relaxed">Anda bertanggung jawab untuk menjaga kerahasiaan akun dan password Anda. Anda setuju untuk menerima tanggung jawab atas semua aktivitas yang terjadi di bawah akun Anda.</p>
            
            <h3 class="text-2xl font-semibold mb-4 text-[#570F0F]">4. Konten Pengguna</h3>
            <p class="mb-8 text-gray-600 leading-relaxed">Anda mempertahankan hak atas konten yang Anda unggah (foto menu, deskripsi, dll). Namun, Anda memberikan kami lisensi untuk menggunakan, menyimpan, dan menampilkan konten tersebut sehubungan dengan layanan kami.</p>
            
            <h3 class="text-2xl font-semibold mb-4 text-[#570F0F]">5. Larangan</h3>
            <p class="mb-8 text-gray-600 leading-relaxed">Anda dilarang menggunakan layanan kami untuk tujuan ilegal, melanggar hak kekayaan intelektual orang lain, atau mengunggah konten yang menyinggung.</p>
            
            <h3 class="text-2xl font-semibold mb-4 text-[#570F0F]">6. Batasan Tanggung Jawab</h3>
            <p class="mb-8 text-gray-600 leading-relaxed">Layanan kami disediakan "sebagaimana adanya". Kami tidak menjamin bahwa layanan akan selalu tersedia, aman, atau bebas dari kesalahan.</p>
            
            <h3 class="text-2xl font-semibold mb-4 text-[#570F0F]">7. Perubahan Syarat</h3>
            <p class="text-gray-600 leading-relaxed">Kami berhak untuk mengubah syarat dan ketentuan ini kapan saja. Perubahan akan berlaku segera setelah diposting di halaman ini.</p>
        </div>
    </div>
</section>

@endsection
