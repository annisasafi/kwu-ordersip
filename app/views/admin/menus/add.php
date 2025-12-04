<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Menu - OrderSip</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="admin-body">

    <?php require_once '../app/views/layouts/sidebar.php'; ?>

    <div class="main-content" style="padding: 2rem;">
        <div class="header mb-2">
            <a href="<?php echo BASE_URL; ?>/dashboard/menus" style="color: #777; font-size: 0.9rem; display: flex; align-items: center; gap: 5px; margin-bottom: 10px;">
                <i class="fas fa-arrow-left"></i> Kembali ke Menu
            </a>
            <h2>Tambah Menu Baru</h2>
        </div>

        <div class="card" style="max-width: 800px;">
            <form action="<?php echo BASE_URL; ?>/dashboard/add_menu" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title" class="form-label">Nama Menu</label>
                    <input type="text" name="title" class="form-control <?php echo (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['title']; ?>" placeholder="Contoh: Kopi Susu Gula Aren">
                    <span class="invalid-feedback" style="color: var(--danger-color); font-size: 0.875rem;"><?php echo $data['title_err']; ?></span>
                </div>

                <div class="row">
                    <div class="col" style="flex: 1; margin-right: 1rem;">
                        <div class="form-group">
                            <label for="price" class="form-label">Harga (Rp)</label>
                            <input type="number" name="price" class="form-control <?php echo (!empty($data['price_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['price']; ?>" placeholder="18000">
                            <span class="invalid-feedback" style="color: var(--danger-color); font-size: 0.875rem;"><?php echo $data['price_err']; ?></span>
                        </div>
                    </div>
                    <div class="col" style="flex: 1;">
                        <div class="form-group">
                            <label for="stock" class="form-label">Stok Awal</label>
                            <input type="number" name="stock" class="form-control" value="<?php echo $data['stock']; ?>" placeholder="100">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="category" class="form-label">Kategori</label>
                    <select name="category" class="form-control">
                        <option value="Makanan">Makanan</option>
                        <option value="Minuman">Minuman</option>
                        <option value="Snack">Snack</option>
                        <option value="Dessert">Dessert</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="description" class="form-label">Deskripsi</label>
                    <textarea name="description" class="form-control" rows="3" placeholder="Jelaskan menu ini secara singkat..."><?php echo $data['description']; ?></textarea>
                </div>

                <div class="form-group">
                    <label for="image" class="form-label">Foto Menu</label>
                    <input type="file" name="image" class="form-control" accept="image/*">
                    <small style="color: #777;">Format: JPG, PNG. Maks 2MB.</small>
                </div>

                <div style="margin-top: 2rem;">
                    <button type="submit" class="btn btn-primary">Simpan Menu</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
