<?php
class Order {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getOrdersByUserId($userId) {
        $this->db->query('SELECT * FROM orders WHERE user_id = :user_id ORDER BY created_at DESC');
        $this->db->bind(':user_id', $userId);
        return $this->db->resultSet();
    }

    public function getOrderById($id) {
        $this->db->query('SELECT * FROM orders WHERE id = :id');
        $this->db->bind(':id', $id);
        return $this->db->single();
    }

    public function createOrder($data) {
        $this->db->query('INSERT INTO orders (user_id, customer_name, customer_whatsapp, total_amount, status, order_details) VALUES (:user_id, :customer_name, :customer_whatsapp, :total_amount, :status, :order_details)');
        $this->db->bind(':user_id', $data['user_id']);
        $this->db->bind(':customer_name', $data['customer_name']);
        $this->db->bind(':customer_whatsapp', $data['customer_whatsapp']);
        $this->db->bind(':total_amount', $data['total_amount']);
        $this->db->bind(':status', 'pending');
        $this->db->bind(':order_details', $data['order_details']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function updateStatus($id, $status) {
        $this->db->query('UPDATE orders SET status = :status WHERE id = :id');
        $this->db->bind(':id', $id);
        $this->db->bind(':status', $status);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
