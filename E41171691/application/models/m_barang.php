<?php 
 
class M_barang extends CI_Model{
	function tampil_data(){
		return $this->db->get('barang');
    }
    
    function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}