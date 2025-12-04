<div class="sidebar" style="width: 250px; background: white; min-height: 100vh; padding: 2rem; border-right: 1px solid #eee; position: fixed; left: 0; top: 0;">
    <div class="logo mb-3">
        <a href="<?php echo BASE_URL; ?>/dashboard" style="font-size: 1.5rem; font-weight: 700;">OrderSip.</a>
    </div>
    
    <ul class="nav-links" style="flex-direction: column; gap: 0.5rem; width: 100%;">
        <li>
            <a href="<?php echo BASE_URL; ?>/dashboard" class="<?php echo ($data['active'] == 'dashboard') ? 'active' : ''; ?>" style="display: block; padding: 10px; border-radius: 8px; color: var(--text-color);">
                <i class="fas fa-home" style="width: 25px;"></i> Dashboard
            </a>
        </li>
        <li>
            <a href="<?php echo BASE_URL; ?>/dashboard/menus" class="<?php echo ($data['active'] == 'menus') ? 'active' : ''; ?>" style="display: block; padding: 10px; border-radius: 8px; color: var(--text-color);">
                <i class="fas fa-utensils" style="width: 25px;"></i> Menu
            </a>
        </li>
        <li>
            <a href="<?php echo BASE_URL; ?>/dashboard/orders" class="<?php echo ($data['active'] == 'orders') ? 'active' : ''; ?>" style="display: block; padding: 10px; border-radius: 8px; color: var(--text-color);">
                <i class="fas fa-shopping-bag" style="width: 25px;"></i> Pesanan
            </a>
        </li>
        <li>
            <a href="<?php echo BASE_URL; ?>/dashboard/settings" class="<?php echo ($data['active'] == 'settings') ? 'active' : ''; ?>" style="display: block; padding: 10px; border-radius: 8px; color: var(--text-color);">
                <i class="fas fa-cog" style="width: 25px;"></i> Pengaturan
            </a>
        </li>
        <li style="margin-top: 2rem; border-top: 1px solid #eee; padding-top: 1rem;">
            <a href="<?php echo BASE_URL; ?>/auth/logout" style="display: block; padding: 10px; border-radius: 8px; color: var(--danger-color);">
                <i class="fas fa-sign-out-alt" style="width: 25px;"></i> Keluar
            </a>
        </li>
    </ul>
</div>

<style>
    .sidebar .nav-links a:hover, .sidebar .nav-links a.active {
        background-color: var(--bg-gradient-mid);
        color: var(--primary-color) !important;
        font-weight: 600;
    }
    
    /* Adjust main content when sidebar is present */
    body.admin-body {
        padding-left: 250px;
        background: #f8f9fa;
    }
    
    @media (max-width: 768px) {
        .sidebar {
            width: 100%;
            height: auto;
            position: relative;
            min-height: auto;
            border-right: none;
            border-bottom: 1px solid #eee;
        }
        body.admin-body {
            padding-left: 0;
        }
    }
</style>
