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
            <h2>Pengaturan Toko</h2>
            <p class="text-muted">Atur informasi bisnis dan profil toko Anda.</p>
        </div>

        <div class="card" style="max-width: 800px;">
            <form action="" method="post">
                <div class="form-group">
                    <label class="form-label">Nama Bisnis</label>
                    <input type="text" class="form-control" value="<?php echo $_SESSION['user_name']; ?>" readonly>
                    <small class="text-muted">Hubungi admin untuk mengubah nama bisnis.</small>
                </div>

                <div class="form-group">
                    <label class="form-label">Nomor WhatsApp (Untuk Terima Pesanan)</label>
                    <input type="text" class="form-control" placeholder="628123456789">
                </div>

                <div class="form-group">
                    <label class="form-label">Alamat / Lokasi</label>
                    <textarea class="form-control" rows="2"></textarea>
                </div>

                <div class="form-group">
                    <label class="form-label">Jam Operasional</label>
                    <input type="text" class="form-control" placeholder="Contoh: 08:00 - 22:00">
                </div>

                <div class="form-group">
                    <label class="form-label">Link Toko Anda</label>
                    <div style="display: flex; gap: 10px;">
                        <input type="text" class="form-control" value="<?php echo BASE_URL; ?>/store/<?php echo $_SESSION['user_id']; ?>" readonly>
                        <a href="<?php echo BASE_URL; ?>/store/<?php echo $_SESSION['user_id']; ?>" target="_blank" class="btn btn-outline">Buka</a>
                    </div>
                </div>

                <div style="margin-top: 2rem;">
                    <button type="button" class="btn btn-primary" onclick="alert('Fitur simpan pengaturan akan segera hadir!')">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
