<?php 
 
class Crud extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_barang');
        $this->load->helper('url');
	}
 
	function index(){
		$data['barang'] = $this->m_barang->tampil_data()->result();
		$this->load->view('v_tampil',$data);
    }
    
    function tambah(){
		$this->load->view('v_input');
    }
    
    function tambah_aksi(){
        
		$nama = $this->input->post('nama');
		$deskripsi = $this->input->post('deskripsi');
        $stokbarang = $this->input->post('stokbarang');
        $hargabarang = $this->input->post('hargabarang');
 
		$data = array(
			'nama' => $nama,
			'deskripsi' => $deskripsi,
            'stokbarang' => $stokbarang,
            'hargabarang' => $hargabarang
			);
		$this->m_barang->input_data($data,'barang');
		redirect('crud/index');
	}
}