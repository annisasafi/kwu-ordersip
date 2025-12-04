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
                <h2>Halo, <?php echo $_SESSION['user_name']; ?> 👋</h2>
                <p class="text-muted">Selamat datang kembali di dashboard OrderSip.</p>
            </div>
            <a href="<?php echo BASE_URL; ?>/store/<?php echo $_SESSION['user_id']; ?>" target="_blank" class="btn btn-outline">
                <i class="fas fa-external-link-alt"></i> Lihat Toko
            </a>
        </div>

        <div class="stats-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1.5rem; margin-bottom: 2rem;">
            <div class="card" style="border-left: 4px solid var(--primary-color);">
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <div>
                        <p style="color: #777; font-size: 0.9rem;">Total Menu</p>
                        <h3 style="margin: 0; font-size: 1.8rem;">12</h3>
                    </div>
                    <i class="fas fa-utensils fa-2x" style="color: #eee;"></i>
                </div>
            </div>
            <div class="card" style="border-left: 4px solid var(--success-color);">
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <div>
                        <p style="color: #777; font-size: 0.9rem;">Pesanan Hari Ini</p>
                        <h3 style="margin: 0; font-size: 1.8rem;">5</h3>
                    </div>
                    <i class="fas fa-shopping-bag fa-2x" style="color: #eee;"></i>
                </div>
            </div>
            <div class="card" style="border-left: 4px solid var(--warning-color);">
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <div>
                        <p style="color: #777; font-size: 0.9rem;">Stok Rendah</p>
                        <h3 style="margin: 0; font-size: 1.8rem;">2</h3>
                    </div>
                    <i class="fas fa-exclamation-triangle fa-2x" style="color: #eee;"></i>
                </div>
            </div>
        </div>

        <div class="recent-orders card">
            <h3 class="mb-1">Pesanan Terbaru</h3>
            <div style="overflow-x: auto;">
                <table style="width: 100%; border-collapse: collapse;">
                    <thead>
                        <tr style="border-bottom: 2px solid #eee; text-align: left;">
                            <th style="padding: 10px;">ID</th>
                            <th style="padding: 10px;">Pelanggan</th>
                            <th style="padding: 10px;">Total</th>
                            <th style="padding: 10px;">Status</th>
                            <th style="padding: 10px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="padding: 10px;">#ORD-001</td>
                            <td style="padding: 10px;">Budi Santoso</td>
                            <td style="padding: 10px;">Rp 45.000</td>
                            <td style="padding: 10px;"><span style="background: #d4edda; color: #155724; padding: 4px 8px; border-radius: 4px; font-size: 0.8rem;">Selesai</span></td>
                            <td style="padding: 10px;"><button class="btn btn-outline" style="padding: 4px 8px; font-size: 0.8rem;">Detail</button></td>
                        </tr>
                         <tr>
                            <td style="padding: 10px;">#ORD-002</td>
                            <td style="padding: 10px;">Siti Aminah</td>
                            <td style="padding: 10px;">Rp 25.000</td>
                            <td style="padding: 10px;"><span style="background: #fff3cd; color: #856404; padding: 4px 8px; border-radius: 4px; font-size: 0.8rem;">Pending</span></td>
                            <td style="padding: 10px;"><button class="btn btn-outline" style="padding: 4px 8px; font-size: 0.8rem;">Detail</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>
