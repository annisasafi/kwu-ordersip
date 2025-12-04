# OrderSip - SaaS Platform for UMKM F&B

OrderSip is a complete SaaS solution designed to help F&B businesses manage their menus, orders, and online presence. It features a public landing page, an admin dashboard for store owners, and a customer-facing store front with WhatsApp order integration.

## Features

- **Public Landing Page**: Professional presentation of the platform.
- **Authentication**: Secure Login and Registration for UMKM owners.
- **Admin Dashboard**:
    - Manage Menus (CRUD)
    - View Orders
    - Store Settings
- **Store Front**:
    - Public catalog for each store
    - Shopping Cart
    - WhatsApp Checkout Integration
- **Responsive Design**: Mobile-first approach.

## Tech Stack

- **Backend**: PHP (Native MVC Architecture)
- **Database**: MySQL
- **Frontend**: HTML5, CSS3 (Custom), JavaScript
- **Server**: Apache (Rewrite rules included)

## Installation

1.  **Clone/Download** the repository.
2.  **Database Setup**:
    - Create a new MySQL database (e.g., `ordersip_db`).
    - Import the `sql/schema.sql` file into your database.
3.  **Configuration**:
    - Open `config/config.php`.
    - Update the database credentials (`DB_HOST`, `DB_USER`, `DB_PASS`, `DB_NAME`).
    - Update `BASE_URL` to match your local or server path (e.g., `http://localhost/OrderSip/public`).
4.  **Run**:
    - Serve the application via Apache or PHP built-in server.
    - If using PHP built-in server: `cd public && php -S localhost:8000` (Update BASE_URL accordingly).
    - Access the app at `http://localhost/OrderSip/public` (or your configured URL).

## Deployment (cPanel / Shared Hosting)

1.  **Upload Files**: Upload the entire project folder to your `public_html` or a subdirectory.
2.  **Database**:
    - Create a database and user in cPanel.
    - Import `sql/schema.sql` via phpMyAdmin.
3.  **Config**:
    - Edit `config/config.php` with your production database details and domain URL.
4.  **Htaccess**: Ensure the `.htaccess` file in `public/` is active. You might need to adjust `RewriteBase` if installed in a subdirectory.

## Directory Structure

- `app/`: Core application logic (Controllers, Models, Views).
- `config/`: Configuration files.
- `public/`: Public accessible files (index.php, assets).
- `sql/`: Database schema.

## Default Login

- **Admin**: `admin@ordersip.com` / `password`
- **UMKM Demo**: `umkm@example.com` / `password`

---
Built with ❤️ for UMKM Indonesia.
