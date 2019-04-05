<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_barang');
		$this->load->helper('url');
	}

	function index()
	{
		$data['barang'] = $this->m_barang->tampil_data()->result();    
		$this->load->view('admin/barang/v_barang',$data);
	}

	function tambah(){
		$this->load->view('v_input');
	}
	function tambah_aksi(){
		$kode_barang = $this->input->post('kode_barang');
		$nama_barang = $this->input->post('nama_barang');
		$deskripsi = $this->input->post('deskripsi');
		$stok = $this->input->post('stok');
		$harga_barang = $this->input->post('harga_barang');
 
		$data = array(
			'kode_barang' => $kode_barang,
			'nama_barang' => $nama_barang,
			'deskripsi' => $deskripsi,
			'stok' => $stok,
			'harga_barang' => $harga_barang
			);
		$this->m_barang->input_data($data,'barang');
		redirect('admin/barang/index');
	}
 
	function hapus($kode_barang){
		$where = array('kode_barang' => $kode_barang);
		$this->m_barang->hapus_data($where,'barang');
		redirect('admin/barang/index');
	}

	function edit($kode_barang){
		$where = array('kode_barang' => $kode_barang);
		$data['barang'] = $this->m_barang->edit_data($where,'barang')->result();
		$this->load->view('v_edit',$data);
	}

	function update(){
		$kode_barang = $this->input->post('kode_barang');
		$nama_barang = $this->input->post('nama_barang');
		$deskripsi = $this->input->post('deskripsi');
		$stok = $this->input->post('stok');
		$harga_barang = $this->input->post('harga_barang');
	
		$data = array(
			'kode_barang' => $kode_barang,
			'nama_barang' => $nama_barang,
			'deskripsi' => $deskripsi,
			'stok' => $stok,
			'harga_barang' => $harga_barang
		);
	
		$where = array(
			'kode_barang' => $kode_barang
		);
	
		$this->m_barang->update_data($where,$data,'barang');
		redirect('admin/barang/index');
	}
}