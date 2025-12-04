<?php
class Tutorial {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getTutorials() {
        $this->db->query('SELECT * FROM tutorials ORDER BY created_at DESC');
        return $this->db->resultSet();
    }

    public function getTutorialById($id) {
        $this->db->query('SELECT * FROM tutorials WHERE id = :id');
        $this->db->bind(':id', $id);
        return $this->db->single();
    }

    public function addTutorial($data) {
        $this->db->query('INSERT INTO tutorials (title, slug, content, image) VALUES (:title, :slug, :content, :image)');
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

    public function updateTutorial($data) {
        $this->db->query('UPDATE tutorials SET title = :title, slug = :slug, content = :content, image = :image WHERE id = :id');
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

    public function deleteTutorial($id) {
        $this->db->query('DELETE FROM tutorials WHERE id = :id');
        $this->db->bind(':id', $id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
