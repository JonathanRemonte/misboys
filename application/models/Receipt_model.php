<?php
class Receipt_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Fetch all receipts from the fincasman table
    public function get_all_receipts() {
        $query = $this->db->get('fincasman');
        return $query->result();
    }

    // Insert a new receipt
    public function insert_receipt($data) {
        return $this->db->insert('fincasman', $data);
    }
}
?>