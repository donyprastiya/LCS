<!DOCTYPE html>
<html lang="en">

<!-- Head -->
    <?php $this->load->view("admin/_partial/head.php") ?>
<!-- End of head -->

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view("admin/_partial/sidebar.php") ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Topbar -->
        <?php $this->load->view("admin/_partial/navbar.php") ?>
      <!-- End of Topbar -->
      

      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1 class="h3 mb-0 text-gray-800">Data Lampu</h1>
              <a href="<?php echo base_url('lampu/export'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Export to Excel</a>
            </div>
            <div>
              <div class="row">
                <div class="col-lg-2 mb-4">
                  <a href="<?php echo base_url('lampu') ?>" class="btn bg-primary btn-block text-gray-100"><i class="fas fa-lightbulb fa-1x "></i> Semua Lampu</a>
                  </a>
                </div>
                <div class="col-lg-2 mb-4">
                  <div class="btn-group">
                    <button type="button" class="btn btn-block btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Data lampu lainnya
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="<?php echo base_url('lampu/id/1') ?>">Lampu 1</a>
                      <a class="dropdown-item" href="<?php echo base_url('lampu/id/2') ?>">Lampu 2</a>
                      <a class="dropdown-item" href="<?php echo base_url('lampu/id/3') ?>">Lampu 3</a>
                      <a class="dropdown-item" href="<?php echo base_url('lampu/id/4') ?>">Lampu 4</a>
                      <a class="dropdown-item" href="<?php echo base_url('lampu/id/5') ?>">Lampu 5</a>
                      <a class="dropdown-item" href="<?php echo base_url('lampu/id/6') ?>">Lampu 6</a>
                      <a class="dropdown-item" href="<?php echo base_url('lampu/id/7') ?>">Lampu 7</a>
                      <a class="dropdown-item" href="<?php echo base_url('lampu/id/8') ?>">Lampu 8</a>
                      <a class="dropdown-item" href="<?php echo base_url('lampu/id/9') ?>">Lampu 9</a>
                      <a class="dropdown-item" href="<?php echo base_url('lampu/id/10') ?>">Lampu 10</a>
                    </div>
                  </div>
                </div>
              </div>
            <div>
              <div class="card shadow mb-4">
            <div class="card-header py-3">
              <div class="row">
                <h6 class="m-0 font-weight-bold text-primary">Seluruh Lampu</h6>
                
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th width="25%">Lampu</th>
                      <th width="20%">Tanggal</th>
                      <th width="15%">Waktu</th>
                      <th width="20%">Status Lampu</th>
                      <th width="20%">Status Sensor</th>                    
                    </tr>
                  </thead>
                  
                  <tbody>                 
                    <?php foreach ($orderBy as $datalampu): ?>
                    <tr>
                      <td>
                        <?php echo $datalampu->nama ?>
                      </td>
                      <td>
                        <?php echo date_indo($datalampu->tgl) ?>
                      </td>
                      <td>
                        <?php echo $datalampu->jam ?>
                      </td>
                      <td>
                        <i class="fas fa-circle <?php if ($datalampu->nilai == 1) {echo "text-success";} else echo "text-danger";?>"></i> <?php if ($datalampu->nilai == 1) {echo "Aktif";} else echo "Tidak aktif";?>
                      </td>
                      <td>
                        <i class="fas fa-circle <?php if ($datalampu->sensor == 0) {echo "text-danger";} else echo "text-success";?>"> </i> <?php if($datalampu->sensor == 1) {echo "Cahaya";} else if($datalampu->sensor == 2) {echo "Gerak";} else echo "Tidak aktif";?></td>
                      </td>
                      
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>

            </div>
            
        </div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1 class="h3 mb-0 text-gray-800"></h1>
              <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#LampuModal"><i class="fas fa-trash fa-sm text-white-50"></i> Clear Data Lampu</a>
              <!--  -->
            </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php $this->load->view("admin/_partial/footer.php") ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <?php $this->load->view("admin/_partial/scrolltop.php") ?>

  <!-- Logout Modal-->
  <?php $this->load->view("admin/_partial/modal.php") ?>
  <div class="modal fade" id="LampuModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Yakin untuk menghapus?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Pilih "Clear" untuk menghapus seluruh data lampu.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo base_url('lampu/hapus'); ?>">Clear</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <?php $this->load->view("admin/_partial/js.php") ?>

</body>

</html>

