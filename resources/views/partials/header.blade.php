<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['title'] ?? 'OrderSip - Platform SaaS untuk UMKM F&B'; ?></title>
    <meta name="description" content="<?php echo $data['description'] ?? 'OrderSip - Platform lengkap untuk membuat website toko online, manajemen pesanan WhatsApp, dan atur stok otomatis. Didesain khusus untuk UMKM Kuliner Indonesia.'; ?>">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;700&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/style.css">
    
    <!-- Font Awesome (Optional for icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <nav class="navbar">
        <div class="container nav-container">
            <a href="<?php echo BASE_URL; ?>" class="logo">
                <img src="<?php echo BASE_URL; ?>/assets/images/logo.png" alt="OrderSip Logo" style="height: 40px; width: auto;">
                <span>ORDERSIP</span>
            </a>
            <ul class="nav-links">
                <li><a href="<?php echo BASE_URL; ?>">Home</a></li>
                <li><a href="<?php echo BASE_URL; ?>/views/features">Layanan</a></li>
                <li><a href="<?php echo BASE_URL; ?>/views/pricing">Harga</a></li>
                <li><a href="<?php echo BASE_URL; ?>/views/testimonials">Testimoni</a></li>
                <li><a href="<?php echo BASE_URL; ?>/views/faq">FAQ</a></li>
                <li><a href="<?php echo BASE_URL; ?>/views/about">Tentang Kami</a></li>
            </ul>
            <div class="nav-auth">
                <a href="<?php echo BASE_URL; ?>/auth/login" class="btn-link">Masuk</a>
                <a href="<?php echo BASE_URL; ?>/auth/register" class="btn btn-primary">Daftar</a>
            </div>
            <button class="mobile-menu-toggle" aria-label="Toggle menu">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </nav>
