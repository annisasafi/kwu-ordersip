<?php

class Pages extends Controller {
    public function __construct() {
        $this->contactModel = $this->model('Contact');
    }

    public function index() {
        $data = [
            'title' => 'OrderSip - Solusi Website & Manajemen UMKM F&B',
            'description' => 'Kelola menu, pesanan, dan pelanggan dengan mudah. Buat website toko online Anda sendiri dalam hitungan menit.'
        ];

        $this->view('pages/index', $data);
    }

    public function about() {
        $data = [
            'title' => 'Tentang Kami - OrderSip'
        ];
        $this->view('pages/about', $data);
    }
    
    public function features() {
        $data = [
            'title' => 'Fitur & Pitch Deck - OrderSip'
        ];
        $this->view('pages/features', $data);
    }

    public function blog() {
        $data = [
            'title' => 'Blog UMKM - OrderSip'
        ];
        $this->view('pages/blog', $data);
    }

    public function contact() {
        $data = [
            'title' => 'Konsultasi Gratis - OrderSip'
        ];
        $this->view('pages/contact', $data);
    }

    public function submit_contact() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'name' => trim($_POST['name']),
                'whatsapp_number' => trim($_POST['whatsapp']),
                'topic' => trim($_POST['topic']),
                'message' => trim($_POST['message'])
            ];

            if (!empty($data['name']) && !empty($data['whatsapp_number']) && !empty($data['message'])) {
                if ($this->contactModel->addContact($data)) {
                    // Redirect to contact page with success message (simplified)
                    echo "<script>alert('Permintaan konsultasi berhasil dikirim! Tim kami akan segera menghubungi Anda.'); window.location.href='" . BASE_URL . "/pages/contact';</script>";
                } else {
                    die('Terjadi kesalahan.');
                }
            } else {
                die('Mohon lengkapi semua data.');
            }
        } else {
            header('location: ' . BASE_URL . '/pages/contact');
        }
    }

    public function terms() {
        $data = [
            'title' => 'Syarat & Ketentuan - OrderSip'
        ];
        $this->view('pages/terms', $data);
    }

    public function privacy() {
        $data = [
            'title' => 'Kebijakan Privasi - OrderSip'
        ];
        $this->view('pages/privacy', $data);
    }
}
