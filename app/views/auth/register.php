<?php require_once '../app/views/layouts/header.php'; ?>

<div class="row" style="min-height: 80vh; display: flex; align-items: center; justify-content: center; background: var(--bg-gradient-mid);">
    <div class="col-md-6 mx-auto" style="width: 100%; max-width: 500px; padding: 20px;">
        <div class="card card-body bg-light mt-5" style="padding: 2rem; border-radius: 12px; box-shadow: 0 10px 25px rgba(0,0,0,0.1);">
            <h2 class="text-center mb-1">Buat Akun Gratis</h2>
            <p class="text-center mb-2">Mulai transformasi digital bisnis Anda hari ini.</p>
            <form action="<?php echo BASE_URL; ?>/auth/register" method="post">
                <div class="form-group">
                    <label for="name" class="form-label">Nama Bisnis / UMKM</label>
                    <input type="text" name="name" class="form-control <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['name']; ?>">
                    <span class="invalid-feedback" style="color: var(--danger-color); font-size: 0.875rem;"><?php echo $data['name_err']; ?></span>
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
                    <span class="invalid-feedback" style="color: var(--danger-color); font-size: 0.875rem;"><?php echo $data['email_err']; ?></span>
                </div>
                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
                    <span class="invalid-feedback" style="color: var(--danger-color); font-size: 0.875rem;"><?php echo $data['password_err']; ?></span>
                </div>
                <div class="form-group">
                    <label for="confirm_password" class="form-label">Konfirmasi Password</label>
                    <input type="password" name="confirm_password" class="form-control <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['confirm_password']; ?>">
                    <span class="invalid-feedback" style="color: var(--danger-color); font-size: 0.875rem;"><?php echo $data['confirm_password_err']; ?></span>
                </div>

                <div class="row">
                    <div class="col">
                        <input type="submit" value="Daftar Sekarang" class="btn btn-primary btn-block" style="width: 100%;">
                    </div>
                </div>
                <div style="text-align: center; margin-top: 1.5rem;">
                    <a href="<?php echo BASE_URL; ?>/auth/login" class="btn btn-light btn-block">Sudah punya akun? Masuk</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require_once '../app/views/layouts/footer.php'; ?>
