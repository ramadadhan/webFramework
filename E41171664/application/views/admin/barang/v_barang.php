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
            <center><?php echo anchor('admin/barang/tambah','Tambah Data'); ?></center>
            <!-- <button class="btn-success">Tambah</button> -->
          </div>
          
        </div>
        <div class="row">
        <div class="col-xl-12">
            <table border="4" cellpadding="10">
              <tr class="text-center">
                <th>No</th>
                <th>Kode Barang</th>
                <th >Nama Barang</th>
                <th>Deskripsi</th>
                <th>Stok</th>
                <th>Harga Barang</th>
                <th>Aksi</th>
              </tr>
              <?php 
              $no = 1;
              foreach($barang as $b){ 
              ?>
              <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $b->kode_barang ?></td>
                <td><?php echo $b->nama_barang ?></td>
                <td><?php echo $b->deskripsi ?></td>
                <td><?php echo $b->stok ?></td>
                <td><?php echo $b->harga_barang ?></td>

                <td>
                      <?php echo anchor('admin/barang/edit/'.$b->kode_barang,'Edit'); ?>
                      <?php echo anchor('admin/barang/hapus/'.$b->kode_barang,'Hapus'); ?>
                </td>
              </tr>
              <?php } ?>
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
