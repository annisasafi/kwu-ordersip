<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['title']; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .store-header {
            background: var(--primary-color);
            color: white;
            padding: 2rem 0;
            text-align: center;
            border-radius: 0 0 20px 20px;
            margin-bottom: 2rem;
        }
        .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
            gap: 1rem;
        }
        .menu-item {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
            transition: transform 0.2s;
        }
        .menu-item:hover {
            transform: translateY(-5px);
        }
        .menu-img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            background: #eee;
        }
        .menu-info {
            padding: 1rem;
        }
        .menu-title {
            font-weight: 600;
            margin-bottom: 0.5rem;
            font-size: 1rem;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .menu-price {
            color: var(--primary-color);
            font-weight: 700;
        }
        .add-btn {
            background: var(--primary-color);
            color: white;
            border: none;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            float: right;
        }
        
        /* Floating Cart */
        .floating-cart {
            position: fixed;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            background: var(--primary-color);
            color: white;
            padding: 15px 25px;
            border-radius: 50px;
            box-shadow: 0 10px 20px rgba(87, 15, 15, 0.3);
            display: flex;
            align-items: center;
            gap: 15px;
            z-index: 1000;
            cursor: pointer;
            width: 90%;
            max-width: 400px;
            justify-content: space-between;
        }
        
        /* Modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            z-index: 2000;
            align-items: center;
            justify-content: center;
        }
        .modal-content {
            background: white;
            width: 90%;
            max-width: 500px;
            border-radius: 12px;
            padding: 2rem;
            max-height: 90vh;
            overflow-y: auto;
        }
    </style>
</head>
<body style="background: #f8f9fa; padding-bottom: 100px;">

    <div class="store-header">
        <div class="container">
            <div style="width: 80px; height: 80px; background: white; border-radius: 50%; margin: 0 auto 1rem; display: flex; align-items: center; justify-content: center; color: var(--primary-color); font-size: 2rem; font-weight: bold;">
                <?php echo substr($data['store']->name, 0, 1); ?>
            </div>
            <h1 style="font-size: 1.5rem; margin-bottom: 0.5rem; color: white;"><?php echo $data['store']->name; ?></h1>
            <p style="opacity: 0.9; font-size: 0.9rem;">Buka: 08:00 - 22:00 • Jakarta Selatan</p>
        </div>
    </div>

    <div class="container">
        <!-- Categories (Simple Filter) -->
        <div style="display: flex; gap: 10px; overflow-x: auto; padding-bottom: 1rem; margin-bottom: 1rem;">
            <button class="btn btn-primary" style="padding: 8px 16px; font-size: 0.9rem; border-radius: 20px;">Semua</button>
            <button class="btn btn-outline" style="padding: 8px 16px; font-size: 0.9rem; border-radius: 20px; background: white; border-color: #ddd; color: #555;">Makanan</button>
            <button class="btn btn-outline" style="padding: 8px 16px; font-size: 0.9rem; border-radius: 20px; background: white; border-color: #ddd; color: #555;">Minuman</button>
        </div>

        <div class="menu-grid">
            <?php foreach($data['menus'] as $menu): ?>
            <div class="menu-item">
                <?php if($menu->image): ?>
                    <img src="<?php echo BASE_URL; ?>/assets/img/uploads/<?php echo $menu->image; ?>" class="menu-img" alt="<?php echo $menu->title; ?>">
                <?php else: ?>
                    <div class="menu-img" style="display: flex; align-items: center; justify-content: center; color: #ccc;">
                        <i class="fas fa-utensils fa-2x"></i>
                    </div>
                <?php endif; ?>
                <div class="menu-info">
                    <div class="menu-title"><?php echo $menu->title; ?></div>
                    <p style="font-size: 0.8rem; color: #777; margin-bottom: 0.5rem; height: 35px; overflow: hidden;"><?php echo $menu->description; ?></p>
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="menu-price">Rp <?php echo number_format($menu->price, 0, ',', '.'); ?></div>
                        <button class="add-btn" onclick='addToCart(<?php echo json_encode($menu); ?>)'>
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Floating Cart -->
    <div class="floating-cart" id="floatingCart" style="display: none;" onclick="openCheckoutModal()">
        <div style="display: flex; align-items: center; gap: 10px;">
            <i class="fas fa-shopping-bag"></i>
            <span id="cartCount">0 Item</span>
        </div>
        <span id="cartTotal" style="font-weight: bold;">Rp 0</span>
    </div>

    <!-- Checkout Modal -->
    <div class="modal" id="checkoutModal">
        <div class="modal-content">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;">
                <h3>Ringkasan Pesanan</h3>
                <button onclick="closeCheckoutModal()" style="background: none; border: none; font-size: 1.5rem; cursor: pointer;">&times;</button>
            </div>
            
            <div id="cartItems" style="margin-bottom: 1.5rem; max-height: 200px; overflow-y: auto;">
                <!-- Cart items will be injected here -->
            </div>
            
            <div style="border-top: 1px solid #eee; padding-top: 1rem; margin-bottom: 1.5rem; display: flex; justify-content: space-between; font-weight: bold;">
                <span>Total</span>
                <span id="modalTotal">Rp 0</span>
            </div>

            <form action="<?php echo BASE_URL; ?>/store/checkout" method="post">
                <input type="hidden" name="user_id" value="<?php echo $data['store']->id; ?>">
                <input type="hidden" name="cart_data" id="cartDataInput">
                
                <div class="form-group">
                    <label class="form-label">Nama Anda</label>
                    <input type="text" name="customer_name" class="form-control" required placeholder="Budi Santoso">
                </div>
                <div class="form-group">
                    <label class="form-label">Nomor WhatsApp</label>
                    <input type="text" name="customer_whatsapp" class="form-control" required placeholder="08123456789">
                </div>
                <div class="form-group">
                    <label class="form-label">Catatan (Opsional)</label>
                    <textarea name="note" class="form-control" rows="2" placeholder="Contoh: Jangan terlalu pedas"></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary" style="width: 100%; display: flex; align-items: center; justify-content: center; gap: 10px;">
                    <i class="fab fa-whatsapp"></i> Pesan Sekarang
                </button>
            </form>
        </div>
    </div>

    <script>
        let cart = [];

        function addToCart(item) {
            const existingItem = cart.find(i => i.id === item.id);
            if (existingItem) {
                existingItem.qty++;
            } else {
                cart.push({
                    id: item.id,
                    title: item.title,
                    price: parseInt(item.price),
                    qty: 1
                });
            }
            updateCartUI();
        }

        function updateCartUI() {
            const cartCount = cart.reduce((acc, item) => acc + item.qty, 0);
            const cartTotal = cart.reduce((acc, item) => acc + (item.price * item.qty), 0);

            document.getElementById('cartCount').innerText = cartCount + ' Item';
            document.getElementById('cartTotal').innerText = 'Rp ' + cartTotal.toLocaleString('id-ID');
            document.getElementById('modalTotal').innerText = 'Rp ' + cartTotal.toLocaleString('id-ID');

            const floatingCart = document.getElementById('floatingCart');
            if (cartCount > 0) {
                floatingCart.style.display = 'flex';
            } else {
                floatingCart.style.display = 'none';
            }
            
            // Update Modal Items
            const cartItemsContainer = document.getElementById('cartItems');
            cartItemsContainer.innerHTML = '';
            cart.forEach(item => {
                cartItemsContainer.innerHTML += `
                    <div style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                        <div>
                            <div style="font-weight: 500;">${item.title}</div>
                            <div style="font-size: 0.8rem; color: #777;">${item.qty} x Rp ${item.price.toLocaleString('id-ID')}</div>
                        </div>
                        <div style="font-weight: 500;">Rp ${(item.price * item.qty).toLocaleString('id-ID')}</div>
                    </div>
                `;
            });
            
            document.getElementById('cartDataInput').value = JSON.stringify(cart);
        }

        function openCheckoutModal() {
            document.getElementById('checkoutModal').style.display = 'flex';
        }

        function closeCheckoutModal() {
            document.getElementById('checkoutModal').style.display = 'none';
        }
    </script>

</body>
</html>
