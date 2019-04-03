<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymodel extends CI_Model {
public function getBarang() {
    $data = $this->db->query("SELECT * FROM barang");
    return $data->result_array();
}
}