
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Barang extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('m_barang');
	}
	public function index()
	{
		$data['list']=$this->m_barang->getAll();
		$this->load->view('admin/barang/v_barang');
	}
}