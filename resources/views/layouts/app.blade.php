<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'OrderSip - Platform SaaS untuk UMKM F&B' }}</title>
    <meta name="description" content="{{ $description ?? 'OrderSip - Platform lengkap untuk membuat website toko online, manajemen pesanan WhatsApp, dan atur stok otomatis. Didesain khusus untuk UMKM Kuliner Indonesia.' }}">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;700&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    @stack('styles')
</head>
<body>
    @include('partials.header')
    
    @yield('content')
    
    @include('partials.footer')
    
    @stack('scripts')
</body>
</html>
