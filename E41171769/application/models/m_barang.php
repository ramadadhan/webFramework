<?php 

class M_barang extends CI_Model{
	private $_table='barang';
    public $kode_barang;
    public $nama_barang;
    public $deskripsi;
    public $stok;
    public $harga_barang;

	
    public function getAll(){
        return $this->db->get($this->_table)->result();
    }
    public function getById($id){
        return $this->db->get_where($this->_table,['kode_barang' => $id])->row();
    }
    public function save(){
        $post = $this->input->post();
        $this->kode_barang = uniqid();
        $this->nama_barang = $post['name barang'];
        $this->deskripsi = $post['deskripsi'];
        $this->stok = $post['stok'];
        $this->harga_barang = $post['stok'];
        $this->db->insert($this->_table, $this);
    }
    public function update(){
        $post = $this->input->post();
        $this->nama_barang = $post['name barang'];
        $this->deskripsi = $post['deskripsi'];
        $this->stok = $post['stok'];
        $this->harga_barang = $post['stok'];
        $this->db->update($this->_table, $this, array('kode_barang' => $post['id']));
    }
    public function delete($id){
        return $this->db->delete($this->_table, array('kode_barang' => $id));
    }
}

 ?>