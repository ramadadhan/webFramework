<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Helloword extends CI_Controller {
public function index() {
    $this->load->model('mymodel');
    $data = $this->mymodel->getBarang();
    foreach ($data as $barang) {
        echo "no_barang : ".$barang['no_barang']."<br/>";
        echo "nm_barang : ".$barang['nm_barang']."<hr/>";
    }
}
}