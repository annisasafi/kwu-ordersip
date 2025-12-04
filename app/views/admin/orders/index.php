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
        <div class="header mb-2">
            <h2>Daftar Pesanan</h2>
            <p class="text-muted">Pantau semua pesanan yang masuk dari pelanggan.</p>
        </div>

        <div class="card">
            <div style="overflow-x: auto;">
                <table style="width: 100%; border-collapse: collapse;">
                    <thead>
                        <tr style="border-bottom: 2px solid #eee; text-align: left;">
                            <th style="padding: 15px;">ID</th>
                            <th style="padding: 15px;">Tanggal</th>
                            <th style="padding: 15px;">Pelanggan</th>
                            <th style="padding: 15px;">Detail Pesanan</th>
                            <th style="padding: 15px;">Total</th>
                            <th style="padding: 15px;">Status</th>
                            <th style="padding: 15px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($data['orders'] as $order): ?>
                        <tr style="border-bottom: 1px solid #eee;">
                            <td style="padding: 15px;">#<?php echo $order->id; ?></td>
                            <td style="padding: 15px;"><?php echo date('d M Y H:i', strtotime($order->created_at)); ?></td>
                            <td style="padding: 15px;">
                                <strong><?php echo $order->customer_name; ?></strong><br>
                                <a href="https://wa.me/<?php echo $order->customer_whatsapp; ?>" target="_blank" style="font-size: 0.8rem; color: var(--success-color);">
                                    <i class="fab fa-whatsapp"></i> <?php echo $order->customer_whatsapp; ?>
                                </a>
                            </td>
                            <td style="padding: 15px; max-width: 250px;">
                                <p style="font-size: 0.9rem; margin: 0;"><?php echo $order->order_details; ?></p>
                            </td>
                            <td style="padding: 15px;">Rp <?php echo number_format($order->total_amount, 0, ',', '.'); ?></td>
                            <td style="padding: 15px;">
                                <?php 
                                    $statusColor = 'var(--warning-color)';
                                    if($order->status == 'completed') $statusColor = 'var(--success-color)';
                                    if($order->status == 'cancelled') $statusColor = 'var(--danger-color)';
                                ?>
                                <span style="background: <?php echo $statusColor; ?>; color: white; padding: 4px 8px; border-radius: 4px; font-size: 0.8rem; text-transform: capitalize;">
                                    <?php echo $order->status; ?>
                                </span>
                            </td>
                            <td style="padding: 15px;">
                                <form action="<?php echo BASE_URL; ?>/dashboard/update_order_status/<?php echo $order->id; ?>" method="post" style="display: inline-block;">
                                    <select name="status" onchange="this.form.submit()" style="padding: 5px; border-radius: 4px; border: 1px solid #ddd; font-size: 0.8rem;">
                                        <option value="pending" <?php echo ($order->status == 'pending') ? 'selected' : ''; ?>>Pending</option>
                                        <option value="completed" <?php echo ($order->status == 'completed') ? 'selected' : ''; ?>>Selesai</option>
                                        <option value="cancelled" <?php echo ($order->status == 'cancelled') ? 'selected' : ''; ?>>Batal</option>
                                    </select>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; ?>

                        <?php if(empty($data['orders'])): ?>
                        <tr>
                            <td colspan="7" class="text-center" style="padding: 3rem;">
                                <i class="fas fa-shopping-bag fa-3x" style="color: #eee; margin-bottom: 1rem;"></i>
                                <p>Belum ada pesanan masuk.</p>
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
