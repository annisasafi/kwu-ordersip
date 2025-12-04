<?php
class Store extends Controller {
    public function __construct() {
        $this->userModel = $this->model('User');
        $this->menuModel = $this->model('Menu');
        $this->orderModel = $this->model('Order');
    }

    public function index($userId) {
        // Get store info
        $store = $this->userModel->getUserById($userId);
        
        if(!$store) {
            die('Toko tidak ditemukan');
        }

        // Get menus
        $menus = $this->menuModel->getMenusByUserId($userId);

        $data = [
            'title' => $store->name . ' - OrderSip',
            'store' => $store,
            'menus' => $menus
        ];

        $this->view('store/index', $data);
    }

    public function checkout() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            
            $userId = $_POST['user_id'];
            $store = $this->userModel->getUserById($userId);
            
            // Basic validation
            if(empty($_POST['customer_name']) || empty($_POST['customer_whatsapp']) || empty($_POST['cart_data'])) {
                die('Data tidak lengkap');
            }

            $cartData = json_decode($_POST['cart_data'], true);
            $totalAmount = 0;
            $orderDetails = "";

            foreach($cartData as $item) {
                $totalAmount += $item['price'] * $item['qty'];
                $orderDetails .= $item['qty'] . "x " . $item['title'] . " (@ " . number_format($item['price']) . "), ";
            }
            $orderDetails = rtrim($orderDetails, ", ");

            $data = [
                'user_id' => $userId,
                'customer_name' => trim($_POST['customer_name']),
                'customer_whatsapp' => trim($_POST['customer_whatsapp']),
                'total_amount' => $totalAmount,
                'order_details' => $orderDetails
            ];

            // Save Order
            if($this->orderModel->createOrder($data)) {
                // Redirect to WhatsApp
                // Format message
                $message = "Halo " . $store->name . ", saya ingin pesan:\n\n";
                $message .= $orderDetails . "\n\n";
                $message .= "Total: Rp " . number_format($totalAmount, 0, ',', '.') . "\n";
                $message .= "Nama: " . $data['customer_name'] . "\n";
                $message .= "Catatan: " . $_POST['note'];

                $whatsappUrl = "https://wa.me/" . "628123456789" . "?text=" . urlencode($message); // Use store WA number in real app
                
                header('location: ' . $whatsappUrl);
            } else {
                die('Gagal membuat pesanan');
            }
        }
    }
}
