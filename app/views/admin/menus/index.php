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
                <h2>Manajemen Menu</h2>
                <p class="text-muted">Kelola daftar produk makanan dan minuman Anda.</p>
            </div>
            <a href="<?php echo BASE_URL; ?>/dashboard/add_menu" class="btn btn-primary">
                <i class="fas fa-plus"></i> Tambah Menu
            </a>
        </div>

        <div class="card">
            <div style="overflow-x: auto;">
                <table style="width: 100%; border-collapse: collapse;">
                    <thead>
                        <tr style="border-bottom: 2px solid #eee; text-align: left;">
                            <th style="padding: 15px;">Foto</th>
                            <th style="padding: 15px;">Nama Menu</th>
                            <th style="padding: 15px;">Kategori</th>
                            <th style="padding: 15px;">Harga</th>
                            <th style="padding: 15px;">Stok</th>
                            <th style="padding: 15px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($data['menus'] as $menu): ?>
                        <tr style="border-bottom: 1px solid #eee;">
                            <td style="padding: 15px;">
                                <?php if($menu->image): ?>
                                    <img src="<?php echo BASE_URL; ?>/assets/img/uploads/<?php echo $menu->image; ?>" alt="<?php echo $menu->title; ?>" style="width: 50px; height: 50px; object-fit: cover; border-radius: 8px;">
                                <?php else: ?>
                                    <div style="width: 50px; height: 50px; background: #eee; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #aaa;">
                                        <i class="fas fa-image"></i>
                                    </div>
                                <?php endif; ?>
                            </td>
                            <td style="padding: 15px;">
                                <strong><?php echo $menu->title; ?></strong>
                                <p style="font-size: 0.8rem; color: #777; margin: 0; max-width: 200px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?php echo $menu->description; ?></p>
                            </td>
                            <td style="padding: 15px;"><?php echo $menu->category; ?></td>
                            <td style="padding: 15px;">Rp <?php echo number_format($menu->price, 0, ',', '.'); ?></td>
                            <td style="padding: 15px;"><?php echo $menu->stock; ?></td>
                            <td style="padding: 15px;">
                                <a href="<?php echo BASE_URL; ?>/dashboard/edit_menu/<?php echo $menu->id; ?>" class="btn btn-outline" style="padding: 6px 12px; font-size: 0.8rem; margin-right: 5px;">Edit</a>
                                <form action="<?php echo BASE_URL; ?>/dashboard/delete_menu/<?php echo $menu->id; ?>" method="post" style="display: inline;" onsubmit="return confirm('Yakin ingin menghapus menu ini?');">
                                    <button type="submit" class="btn" style="background: var(--danger-color); color: white; padding: 6px 12px; font-size: 0.8rem;">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        
                        <?php if(empty($data['menus'])): ?>
                        <tr>
                            <td colspan="6" class="text-center" style="padding: 3rem;">
                                <i class="fas fa-utensils fa-3x" style="color: #eee; margin-bottom: 1rem;"></i>
                                <p>Belum ada menu. Silakan tambah menu baru.</p>
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
