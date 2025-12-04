<?php
class Dashboard extends Controller {
    public function __construct() {
        if (!isset($_SESSION['user_id'])) {
            header('location: ' . BASE_URL . '/auth/login');
        }
        $this->menuModel = $this->model('Menu');
        $this->orderModel = $this->model('Order');
        $this->blogModel = $this->model('Blog');
        $this->tutorialModel = $this->model('Tutorial');
    }

    public function index() {
        $data = [
            'title' => 'Dashboard - OrderSip',
            'active' => 'dashboard'
        ];
        $this->view('admin/index', $data);
    }

    public function menus() {
        $menus = $this->menuModel->getMenusByUserId($_SESSION['user_id']);
        $data = [
            'title' => 'Kelola Menu - OrderSip',
            'menus' => $menus,
            'active' => 'menus'
        ];
        $this->view('admin/menus/index', $data);
    }

    public function add_menu() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Sanitize POST array
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'user_id' => $_SESSION['user_id'],
                'title' => trim($_POST['title']),
                'description' => trim($_POST['description']),
                'price' => trim($_POST['price']),
                'stock' => trim($_POST['stock']),
                'category' => trim($_POST['category']),
                'image' => '', // Handle file upload separately
                'title_err' => '',
                'price_err' => ''
            ];

            // Validate data
            if (empty($data['title'])) {
                $data['title_err'] = 'Please enter title';
            }
            if (empty($data['price'])) {
                $data['price_err'] = 'Please enter price';
            }

            // Handle File Upload (Simple version)
            // In production, use proper file handling and validation
            if(isset($_FILES['image']) && $_FILES['image']['error'] === 0){
                 $target_dir = "../public/assets/img/uploads/";
                 if (!file_exists($target_dir)) {
                    mkdir($target_dir, 0777, true);
                 }
                 $file_name = time() . '_' . basename($_FILES["image"]["name"]);
                 $target_file = $target_dir . $file_name;
                 if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)){
                     $data['image'] = $file_name;
                 }
            }


            if (empty($data['title_err']) && empty($data['price_err'])) {
                if ($this->menuModel->addMenu($data)) {
                    header('location: ' . BASE_URL . '/dashboard/menus');
                } else {
                    die('Something went wrong');
                }
            } else {
                $this->view('admin/menus/add', $data);
            }

        } else {
            $data = [
                'title' => '',
                'description' => '',
                'price' => '',
                'stock' => '',
                'category' => '',
                'active' => 'menus'
            ];
            $this->view('admin/menus/add', $data);
        }
    }
    
    public function edit_menu($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            
            $existingMenu = $this->menuModel->getMenuById($id);
            
            // Check ownership
            if($existingMenu->user_id != $_SESSION['user_id']){
                header('location: ' . BASE_URL . '/dashboard/menus');
            }

            $data = [
                'id' => $id,
                'user_id' => $_SESSION['user_id'],
                'title' => trim($_POST['title']),
                'description' => trim($_POST['description']),
                'price' => trim($_POST['price']),
                'stock' => trim($_POST['stock']),
                'category' => trim($_POST['category']),
                'image' => $existingMenu->image, 
                'title_err' => '',
                'price_err' => ''
            ];

            if (empty($data['title'])) {
                $data['title_err'] = 'Please enter title';
            }
            if (empty($data['price'])) {
                $data['price_err'] = 'Please enter price';
            }
            
             if(isset($_FILES['image']) && $_FILES['image']['error'] === 0){
                 $target_dir = "../public/assets/img/uploads/";
                 if (!file_exists($target_dir)) {
                    mkdir($target_dir, 0777, true);
                 }
                 $file_name = time() . '_' . basename($_FILES["image"]["name"]);
                 $target_file = $target_dir . $file_name;
                 if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)){
                     $data['image'] = $file_name;
                 }
            }

            if (empty($data['title_err']) && empty($data['price_err'])) {
                if ($this->menuModel->updateMenu($data)) {
                    header('location: ' . BASE_URL . '/dashboard/menus');
                } else {
                    die('Something went wrong');
                }
            } else {
                $this->view('admin/menus/edit', $data);
            }

        } else {
            $menu = $this->menuModel->getMenuById($id);
            
            // Check ownership
            if($menu->user_id != $_SESSION['user_id']){
                header('location: ' . BASE_URL . '/dashboard/menus');
            }

            $data = [
                'id' => $id,
                'title' => $menu->title,
                'description' => $menu->description,
                'price' => $menu->price,
                'stock' => $menu->stock,
                'category' => $menu->category,
                'image' => $menu->image,
                'active' => 'menus'
            ];
            $this->view('admin/menus/edit', $data);
        }
    }

    public function delete_menu($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $menu = $this->menuModel->getMenuById($id);
            if($menu->user_id != $_SESSION['user_id']){
                header('location: ' . BASE_URL . '/dashboard/menus');
            }
            
            if ($this->menuModel->deleteMenu($id)) {
                header('location: ' . BASE_URL . '/dashboard/menus');
            } else {
                die('Something went wrong');
            }
        } else {
            header('location: ' . BASE_URL . '/dashboard/menus');
        }
    }

    public function orders() {
        $orders = $this->orderModel->getOrdersByUserId($_SESSION['user_id']);
        $data = [
            'title' => 'Kelola Pesanan - OrderSip',
            'orders' => $orders,
            'active' => 'orders'
        ];
        $this->view('admin/orders/index', $data);
    }

    public function update_order_status($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $status = $_POST['status'];
            // Verify ownership
            $order = $this->orderModel->getOrderById($id);
            if($order->user_id != $_SESSION['user_id']){
                 header('location: ' . BASE_URL . '/dashboard/orders');
            }

            if($this->orderModel->updateStatus($id, $status)){
                 header('location: ' . BASE_URL . '/dashboard/orders');
            } else {
                die('Something went wrong');
            }
        }
    }

    public function settings() {
        // Simple settings implementation (View Only for now, or basic update)
        // Ideally needs a Settings Model
        
        $data = [
            'title' => 'Pengaturan Toko - OrderSip',
            'active' => 'settings'
        ];
        $this->view('admin/settings/index', $data);
    }

    // Blog Management
    public function blog() {
        $blogs = $this->blogModel->getBlogs();
        $data = [
            'title' => 'Kelola Blog - OrderSip',
            'blogs' => $blogs,
            'active' => 'blog'
        ];
        $this->view('admin/blog/index', $data);
    }

    // Tutorial Management
    public function tutorials() {
        $tutorials = $this->tutorialModel->getTutorials();
        $data = [
            'title' => 'Kelola Tutorial - OrderSip',
            'tutorials' => $tutorials,
            'active' => 'tutorials'
        ];
        $this->view('admin/tutorials/index', $data);
    }
}
