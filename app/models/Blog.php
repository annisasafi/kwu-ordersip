<?php
class Blog {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getBlogs() {
        $this->db->query('SELECT * FROM blog ORDER BY created_at DESC');
        return $this->db->resultSet();
    }

    public function getBlogById($id) {
        $this->db->query('SELECT * FROM blog WHERE id = :id');
        $this->db->bind(':id', $id);
        return $this->db->single();
    }

    public function addBlog($data) {
        $this->db->query('INSERT INTO blog (title, slug, content, image) VALUES (:title, :slug, :content, :image)');
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':slug', $data['slug']);
        $this->db->bind(':content', $data['content']);
        $this->db->bind(':image', $data['image']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function updateBlog($data) {
        $this->db->query('UPDATE blog SET title = :title, slug = :slug, content = :content, image = :image WHERE id = :id');
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':slug', $data['slug']);
        $this->db->bind(':content', $data['content']);
        $this->db->bind(':image', $data['image']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteBlog($id) {
        $this->db->query('DELETE FROM blog WHERE id = :id');
        $this->db->bind(':id', $id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
