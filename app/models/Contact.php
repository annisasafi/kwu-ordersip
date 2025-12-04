<?php
class Contact {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function addContact($data) {
        $this->db->query('INSERT INTO contacts (name, whatsapp_number, topic, message) VALUES (:name, :whatsapp_number, :topic, :message)');
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':whatsapp_number', $data['whatsapp_number']);
        $this->db->bind(':topic', $data['topic']);
        $this->db->bind(':message', $data['message']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
