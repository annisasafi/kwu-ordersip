-- Users Table (Admin & UMKM)
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin', 'umkm') DEFAULT 'umkm',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Settings / Store Profile
CREATE TABLE settings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    business_name VARCHAR(255),
    description TEXT,
    location VARCHAR(255),
    opening_hours VARCHAR(255),
    whatsapp_number VARCHAR(20),
    profile_image VARCHAR(255),
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

-- Menus / Products
CREATE TABLE menus (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    price DECIMAL(10, 2) NOT NULL,
    stock INT DEFAULT 0,
    category VARCHAR(100),
    image VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

-- Orders
CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL, -- The store owner
    customer_name VARCHAR(255) NOT NULL,
    customer_whatsapp VARCHAR(20) NOT NULL,
    total_amount DECIMAL(10, 2) NOT NULL,
    status ENUM('pending', 'completed', 'cancelled') DEFAULT 'pending',
    order_details TEXT, -- JSON or text description of items
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

-- Blog
CREATE TABLE blog (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    slug VARCHAR(255) NOT NULL UNIQUE,
    content TEXT NOT NULL,
    image VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tutorials
CREATE TABLE tutorials (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    slug VARCHAR(255) NOT NULL UNIQUE,
    content TEXT NOT NULL,
    image VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Contacts / Consultations
CREATE TABLE contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    whatsapp_number VARCHAR(20) NOT NULL,
    topic VARCHAR(255),
    message TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Dummy Data
INSERT INTO users (name, email, password, role) VALUES 
('Admin OrderSip', 'admin@ordersip.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin'), -- password: password
('Kopi Kenangan Senja', 'umkm@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'umkm'); -- password: password

INSERT INTO settings (user_id, business_name, description, location, opening_hours, whatsapp_number) VALUES
(2, 'Kopi Kenangan Senja', 'Kopi nikmat untuk penikmat senja.', 'Jakarta Selatan', '08:00 - 22:00', '628123456789');

INSERT INTO menus (user_id, title, description, price, stock, category, image) VALUES
(2, 'Kopi Susu Gula Aren', 'Kopi susu kekinian dengan gula aren asli.', 18000, 100, 'Coffee', 'kopi_susu.jpg'),
(2, 'Americano', 'Kopi hitam tanpa gula.', 15000, 50, 'Coffee', 'americano.jpg'),
(2, 'Croissant', 'Roti bulan sabit yang renyah.', 25000, 20, 'Pastry', 'croissant.jpg');

INSERT INTO blog (title, slug, content) VALUES
('Cara Meningkatkan Penjualan F&B', 'cara-meningkatkan-penjualan', 'Konten artikel tentang tips marketing untuk UMKM F&B...');

INSERT INTO tutorials (title, slug, content) VALUES
('Cara Menggunakan OrderSip', 'cara-menggunakan-ordersip', 'Panduan lengkap penggunaan aplikasi OrderSip...');
