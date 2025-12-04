<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['title']; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="admin-body">

    <?php require_once '../app/views/layouts/sidebar.php'; ?>

    <div class="main-content" style="padding: 2rem;">
        <div class="header mb-2" style="display: flex; justify-content: space-between; align-items: center;">
            <div>
                <h2>Manajemen Blog</h2>
                <p class="text-muted">Kelola artikel edukasi untuk UMKM.</p>
            </div>
            <button class="btn btn-primary" onclick="alert('Fitur Tambah Blog akan segera hadir!')">
                <i class="fas fa-plus"></i> Tambah Artikel
            </button>
        </div>

        <div class="card">
            <div style="overflow-x: auto;">
                <table style="width: 100%; border-collapse: collapse;">
                    <thead>
                        <tr style="border-bottom: 2px solid #eee; text-align: left;">
                            <th style="padding: 15px;">Judul</th>
                            <th style="padding: 15px;">Slug</th>
                            <th style="padding: 15px;">Tanggal</th>
                            <th style="padding: 15px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($data['blogs'] as $blog): ?>
                        <tr style="border-bottom: 1px solid #eee;">
                            <td style="padding: 15px;"><strong><?php echo $blog->title; ?></strong></td>
                            <td style="padding: 15px;"><?php echo $blog->slug; ?></td>
                            <td style="padding: 15px;"><?php echo date('d M Y', strtotime($blog->created_at)); ?></td>
                            <td style="padding: 15px;">
                                <button class="btn btn-outline" style="padding: 6px 12px; font-size: 0.8rem;">Edit</button>
                                <button class="btn" style="background: var(--danger-color); color: white; padding: 6px 12px; font-size: 0.8rem;">Hapus</button>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        
                        <?php if(empty($data['blogs'])): ?>
                        <tr>
                            <td colspan="4" class="text-center" style="padding: 3rem;">
                                <p>Belum ada artikel blog.</p>
                            </td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>
