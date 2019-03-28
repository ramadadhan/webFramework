<?php 
 
class M_karyawan extends CI_Model{
	function ambil_data(){

		
		return $this->db->get('barang');
	}
}