<?php
class Menu {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getMenusByUserId($userId) {
        $this->db->query('SELECT * FROM menus WHERE user_id = :user_id ORDER BY created_at DESC');
        $this->db->bind(':user_id', $userId);
        return $this->db->resultSet();
    }

    public function getMenuById($id) {
        $this->db->query('SELECT * FROM menus WHERE id = :id');
        $this->db->bind(':id', $id);
        return $this->db->single();
    }

    public function addMenu($data) {
        $this->db->query('INSERT INTO menus (user_id, title, description, price, stock, category, image) VALUES (:user_id, :title, :description, :price, :stock, :category, :image)');
        $this->db->bind(':user_id', $data['user_id']);
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':price', $data['price']);
        $this->db->bind(':stock', $data['stock']);
        $this->db->bind(':category', $data['category']);
        $this->db->bind(':image', $data['image']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function updateMenu($data) {
        $this->db->query('UPDATE menus SET title = :title, description = :description, price = :price, stock = :stock, category = :category, image = :image WHERE id = :id');
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':price', $data['price']);
        $this->db->bind(':stock', $data['stock']);
        $this->db->bind(':category', $data['category']);
        $this->db->bind(':image', $data['image']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteMenu($id) {
        $this->db->query('DELETE FROM menus WHERE id = :id');
        $this->db->bind(':id', $id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
