<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['title']; ?></title>
    <meta name="description" content="<?php echo $data['description'] ?? 'OrderSip SaaS Platform'; ?>">
    
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
        <div class="container">
            <a href="<?php echo BASE_URL; ?>" class="logo">OrderSip.</a>
            <ul class="nav-links">
                <li><a href="<?php echo BASE_URL; ?>">Beranda</a></li>
                <li><a href="<?php echo BASE_URL; ?>/pages/features">Fitur</a></li>
                <li><a href="<?php echo BASE_URL; ?>/pages/blog">Blog</a></li>
                <li><a href="<?php echo BASE_URL; ?>/pages/about">Tentang Kami</a></li>
            </ul>
            <div class="nav-auth">
                <a href="<?php echo BASE_URL; ?>/auth/login" class="btn btn-outline">Masuk</a>
                <a href="<?php echo BASE_URL; ?>/auth/register" class="btn btn-primary">Coba Gratis</a>
            </div>
        </div>
    </nav>
