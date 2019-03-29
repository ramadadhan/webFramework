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
            <li class="breadcrumb-item active">Karyawan</li>
        </ol>
        

        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <h3>Daftar Karyawan</h3>
            <button class="btn-success">Tambah</button>
          </div>
          
        </div>
        <div class="row">
          <div class="col-xl-12">
            <?echo $judul?>
          </div>
        </div>

        <!-- Area Chart Example-->
        
        <!-- DataTables Example -->
        

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
  

  <!-- JavaScript-->
  <?php $this->load->view('admin/partials/js');?>
  

</body>

</html>