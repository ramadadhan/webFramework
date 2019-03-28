<!DOCTYPE html>
<html lang="en">

<head>

<!-- Pemanggilan partial head.php -->
  <?php $this->load->view('admin/partials/head');?>

</head>

<body id="page-top">

<!-- Pemanggilan partial navbar.php -->
<?php $this->load->view('admin/partials/navbar');?>
  

  <div id="wrapper">

    <?php $this->load->view('admin/partials/sidebar');?>
    

    <div id="content-wrapper">

      <div class="container-fluid">

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Master</a>
            </li>
            <li class="breadcrumb-item active">Barang</li>
        </ol>
        

        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <h3>Daftar Barang</h3>
            <button class="btn-success">Tambah</button>
          </div>
          
        </div>
        <div class="row">
        <div class="col-xl-12">
            <table border="4" cellpadding="10">
              <tr class="text-center">
                <th>No</th>
                <th>Kode Barang</th>
                <th widht="500px">Nama Barang</th>
                <th>Deskripsi</th>
                <th>Stok</th>
                <th>Harga Barang</th>
                <th colspan="2">Aksi</th>
              </tr>
              <? foreach($list as $row){?>
              <tr>
                <td>1</td>
                <td><?echo $row->kode_barang;?></td>
                <td>Semen Gresik</td>
                <td>43.000</td>
                <td>Sak</td>
                <td>100</td>
                <td><button class="btn-info">Ubah</button></td>
                <td><button class="btn-danger">Hapus</button></td>
              </tr>
              <? }?>
            </table>
          </div>
        </div>   
      </div>
      <!-- /.container-fluid -->

    <?php $this->load->view('admin/partials/footer');?>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <?php $this->load->view('admin/partials/modal');?>
  

  <!-- Bootstrap core JavaScript-->
  <?php $this->load->view('admin/partials/js');?>
  

</body>

</html>
